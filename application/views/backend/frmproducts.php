	<h3 class="tit"><?=$title;?></h3>
	<?php
	   $mode=$this->uri->segment(4);
	   if($mode=='insert'):
	   		$id ='';
	   		$nm_prod = '';
	   else :	   		
	   		$id = $products->ProductID;
	   		$nm_prod = $products->ProductName;
	   endif;		

	?>
			<!-- Table (TABLE) -->
			<br /><br />
			
      <form id="commentForm" name="commentForm"  method="post" action="<?=site_url('backend/products/process/'.$mode.'/'.$id);?>">
      		<input type="hidden" name='id' value="<?=$id;?>">
      		<input type="hidden" name='mode' value="<?=$mode;?>">
			<fieldset>				
				<table class="nostyle">
					<tr>
						<td style="width:100px;">Product ID:</td>
						<td><input type="text" value="<?=$id;?>" size="40" name="ProductID" class="input-text" required="required" /></td>
					</tr>					
					<tr>
						<td class="va-top">Product Name:</td>
						<td><textarea cols="75" rows="7" required="required" name="ProductName" class="input-text"><?=$nm_prod;?></textarea></td>
					</tr>					
					<tr>
						<td colspan="2" class="t-right">
							<input type="submit" name="btnSimpan"  class="input-submit" value="Submit" /></td>
					</tr>
				</table>
			</fieldset>
      </form>

		