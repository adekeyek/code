			<html lang="en">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
	<title>untitled</title>
	<style type="text/css" media="screen">
	
 
.halaman a
{
 
padding:3px;
background:#990000;
-moz-border-radius:5px;
-webkit-border-radius:5px;
border:1px solid #FFA500;
font-size:10px;
font-weight:bold;
color:#FFF;
text-decoration:none;
}
	</style>
			<h1><?=$title;?></h1>

			<!-- Table (TABLE) -->
			<br />
			<?php
			   echo anchor(site_url('backend/products/form/insert/'),'Add',' class="input-submit"');	
			?>
			<br />
			<table>
				<tr>
					<th>No</th>
					<th>Actions</th>					    
				    <th>Product ID</th>
				    <th>Product Name</th>				   				   
				</tr>
				<?php
					$no=0;
					foreach($array_products as $row):	
					$id=$row->ProductID;	
					$no++;	
					$css=($no%2==1)? '' : 'class="bg"';
				?>
				<tr <?=$css;?> >
					<td><?=$no;?>.</td>
				    <td><?=anchor(site_url('backend/products/process/delete/'.$id),'[delete]').' | '.
				    	   anchor(site_url('backend/products/form/update/'.$id),'[update]');?></td>				    
				    <td><?=$row->ProductID;?></td>
				    <td><?=$row->ProductName;?></td>				    
				</tr>
				
				<?php  endforeach; ?>
				
			</table>
			<div class="halaman">Halaman : <?php ?></div>

		