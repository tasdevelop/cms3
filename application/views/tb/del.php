<fieldset>
	<form method="post" action="<?php echo base_url()?>tb/crud" name="<?php echo $formname ?>" id="<?php echo $formname ?>" enctype="multipart/form-data">
		<input type="hidden" name="oper" value="del">
		<?php $this->load->view("tb/view") ?>		
	</form>
</fieldset>