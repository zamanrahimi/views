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
	<td  class="tdstyle txtlabel" valign="top" colspan="2" style="background-color:#cccccc;">
		<div class="txbox_div">
		<strong><?=$this->lang->line('user_note');?></strong>
	</td>
</tr>
   <?php
    //check enable/disable role option
    if($this->mng_auth->CheckDepRole($plaindepid,'r6')==TRUE)
    {
    ?>
<tr>
        <td class="tdstyle txtlabel">
            <?=$this->lang->line('grp_status')?>
        </td>
        <td class="tdstyle">
            <select name="n_status" id="n_status" style="width: 240px;">
              <?=$active?>
            </select>
        </td>     
    </tr>
    <?php
    }
    ?>
<tr>
	<td class="tdstyle txtlabel">
		<?=$this->lang->line('grp_name')?>
	</td>
	<td class="tdstyle">
		<input type="text" class="textbox" id="n_name" name="n_name" maxlength="150" size="32" value="<?=$name?>" />
		<span class="redcolor p3">*</span>
		<?=form_error('n_username')?>
		<div id="usercheckdiv"></div>
	</td>     
</tr>
<tr>
	<td class="tdstyle txtlabel">
		 <?=$this->lang->line('grp_details')?>
	</td>
	<td class="tdstyle">
		<input type="text" class="textbox" id="n_details" name="n_details" maxlength="150" value="<?=$details?>" size="32"/><span class="redcolor p3">*</span>
		<?=form_error('n_details')?>
	</td>     
</tr>
<tr>
	<td class="tdstyle txtlabel">
		<?=$this->lang->line('grp_remarks')?>
	</td>
	<td class="tdstyle">
		<textarea id="remarks" name="remarks" maxlength="150" cols="35" rows="5" dir="<?=$dir?>"/><?=$remarks?></textarea>
		<?=form_error('remarks')?>
	</td>     
</tr>
</table>
<input type="hidden" name="id" id="id" value="<?=$groupid?>"/>
<input type="hidden" name="depid" id="depid" value="<?=$plaindepid?>" />       
</form>