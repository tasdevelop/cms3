<fieldset>
	<form method="post" action="<?php echo base_url()?>besuk/crud" name="formdatabesuk<?php echo $member_key ?>" id="formdatabesuk<?php echo $member_key ?>" enctype="multipart/form-data">
		<input type="hidden" name="oper" value="edit">
		<?php $this->load->view("besuk/form") ?>
	</form>
</fieldset>