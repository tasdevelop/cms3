<script type="text/javascript">

$(document).ready(function(){
	$('input[type=text]').focusout(function() {
		$(this).val($(this).val().toUpperCase());
	});

/*
	$('input').focusout(function() {
		// Uppercase-ize contents
		this.value = this.value.toLocaleUpperCase();
	});
*/

    $('input[type=email]').keyup(function() {
        $(this).val($(this).val().toLowerCase());
    });

});
</script>
<?php
	@$query=("SELECT * FROM tblpstatus WHERE pstatusid='".$pstatusid."' LIMIT 0,1");
	@$row=queryCustom2($query);
?>

<style type="text/css">
	@font-face{
		font-family: COOPERM;
		src: url('libraries/font/COOPERM.TTF'),url('../../libraries/font/COOPERM.eot'); /* IE9 */
	}

	@font-face{
		font-family: CHISER__;
		src: url('libraries/font/CHISER__.TTF'),url('../../libraries/font/CHISER__.eot'); /* IE9 */
	}

	@font-face{
		font-family: segoeui;
		src: url('libraries/font/segoeui.ttf'),url('../../libraries/font/segoeui.eot'); /* IE9 */
	}
	table{
		font-family:segoeui;
		font-size: 12px;
	}

	input{
		font-family:segoeui;
		font-size: 8px;
	}

	#address{
		font-family:segoeui;
		font-size: 11px;
	}
</style>
<input type="hidden" name="pstatusid" value="<?php echo @$row['pstatusid'] ?>">
<table class="table table-condensed" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td>pstatusid</td>
		<td>: <input type="text" class="inputmedium" value="<?php echo @$row['pstatusid'] ?>" name="pstatusid" id="pstatusid"><span id="tip"></span></td>
	</tr>
	<tr>
		<td>pstatusname</td>
		<td>: <input type="text" class="inputmedium" value="<?php echo @$row['pstatusname'] ?>" name="pstatusname" id="pstatusname"></td>
	</tr>
</table>