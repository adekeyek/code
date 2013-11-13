<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct()
    {
        parent::__construct();   
        $this->load->model('Products_model','datamodel');     
    }
	   
	public function index($id=NULL)
	{
		$data['title']='List Of Products';	
		$data['array_products'] = $this->datamodel->get_products();
		$this->mytemplate->loadBackend('products',$data);
		$this->load->library('pagination');
		$this->load->library('table');
		
		$config['base_url'] = 'http://localhost/12121229/webapp/backend/products';
		$config['total_rows'] = $this->db->get('products')->num_rows();
		$config['per_page'] = 7;
		$config['num_links'] = 2;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close']= '</div>';
		
		$this->pagination->initialize($config);

		$query['halaman'] = $this->pagination->create_links();

		$query['query'] = $this->datamodel->get_products($config['per_page'], $id);
		//$data['records'] = $this->northwind->get($config['per_page'], $id);
		}

	public function form($mode,$id='')
	{
		$data['title']=($mode=='insert')? 'Add Products' : 'Update Products';				
		$data['products'] = ($mode=='update') ? $this->datamodel->get_products_by_id($id) : '';
		$this->mytemplate->loadBackend('frmproducts',$data);	
	}

	public function process($mode,$id='')
	{
		
		if(($mode=='insert') || ($mode=='update'))
		{
			$result = ($mode=='insert') ? $this->datamodel->insert_entry() : $this->datamodel->update_entry();
		}else if($mode=='delete'){
			$result = $this->datamodel->hapus($id);			
		}	
		if ($result) redirect(site_url('backend/products'),'location');
	}
	
	private function dependensi($id)
	{
		return $this->datamodel->cek_dependensi($id);
	}
	
	

	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

