<?php
if($this->mng_auth->get_language() == 'en')
{
	$dir = "ltr";
}
else
{
	$dir = "rtl";
}
?>
<form name="user_form" id="user_form" method="post">
<table cellpadding="0" cellspacing="0" width="100%" class="table">

	<tr>
		<td class="tdstyle txtlabel">
			<?=$this->lang->line('user_status')?>
		</td>
		<td class="tdstyle">
			<select name="n_status" id="n_status" style="width: 240px;">
			  <?=$active?>
			</select>
		</td>     
	</tr>
	
	<tr>
		<td class="tdstyle txtlabel">
			<?=$this->lang->line('user_name')?>
		</td>
		<td class="tdstyle">
			<?=$username?>
		</td>     
	</tr>
	<tr>
		<td class="tdstyle txtlabel">
			<?=$this->lang->line('user_remarks')?>
		</td>
		<td class="tdstyle">
			<?=$remarks?>
		</td>     
	</tr>
</table>
<input type="hidden" name="id" id="id" value="<?=$userid?>" />
</form>