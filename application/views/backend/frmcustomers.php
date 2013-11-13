	<h3 class="tit"><?=$title;?></h3>
	<?php
	   $mode=$this->uri->segment(4);
	   if($mode=='insert'):
	   		$id ='';
	   		$nm_cust = '';
	   		$nm_cont = '';
	   else :	   		
	   		$id = $customers->CustomerID;
	   		$nm_cust = $customers->CompanyName;
	   		$nm_cont = $customers->ContactName;
	   endif;		

	?>
			<!-- Table (TABLE) -->
			<br /><br />
			
      <form id="commentForm" name="commentForm"  method="post" action="<?=site_url('backend/customers/process/'.$mode.'/'.$id);?>">
      		<input type="hidden" name='id' value="<?=$id;?>">
      		<input type="hidden" name='mode' value="<?=$mode;?>">
			<fieldset>				
				<table class="nostyle">
					<tr>
						<td style="width:100px;">Company Name:</td>
						<td><input type="text" value="<?=$nm_cust;?>" size="40" name="CompanyName" class="input-text" required="required" /></td>
					</tr>					
					<tr>
						<td class="va-top">Contact Name:</td>
						<td><textarea cols="75" rows="7" required="required" name="ContactName" class="input-text"><?=$nm_cont;?></textarea></td>
					</tr>					
					<tr>
						<td colspan="2" class="t-right">
							<input type="submit" name="btnSimpan"  class="input-submit" value="Submit" /></td>
					</tr>
				</table>
			</fieldset>
      </form>

		