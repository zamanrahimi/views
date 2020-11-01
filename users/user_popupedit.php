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
		<br />Username should be at least 6 characters.
		
	</td>
	</tr>
	<?php
	//check enable/disable role option
	if($this->mng_auth->CheckDepRole($plaindepid,'r6')==TRUE)
	{
	?>
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
	<?php
	}
	?>
	<tr>
		<td class="tdstyle txtlabel">
			<?=$this->lang->line('user_name')?>
		</td>
		<td class="tdstyle">
			<input type="text" class="textbox" id="n_username" name="n_username" maxlength="150" size="32" value="<?=$username?>" onchange="javascript: CheckAvailability('<?=base_url()?>users/home/checkuser','usercheckdiv','n_username','&userid=<?=$userid?>');" />
			<span class="redcolor p3">*</span> Username should be at least 6 characters.
			<?=form_error('n_username')?>
			<div id="usercheckdiv"></div>
		</td>     
	</tr>
	<tr>
		<td class="tdstyle txtlabel">
			<?=$this->lang->line('user_password')?>
		</td>
		<td class="tdstyle">
			<input type="password" class="textbox" id="password"  name="password" maxlength="150" value="" size="32" />
			If you do not want to change password, leave it blank
			<?=form_error('password')?>
		</td>
	</tr>
	
	<tr>
		<td class="tdstyle txtlabel">
			<?=$this->lang->line('user_retype_pass')?>
		</td>
		<td class="tdstyle">
			<input type="password" class="textbox" id="password2"  name="password2" maxlength="150" value="" size="32" />
			<?=form_error('password2')?>
		</td>
	</tr>
	 <tr>
		<td class="tdstyle txtlabel">
			<?=$this->lang->line('user_nickname')?>
		</td>
		<td class="tdstyle">
			<input type="text" class="textbox" id="n_name" name="n_name" maxlength="150" value="<?=$fname?>" size="32"/><span class="redcolor p3">*</span>
			<?=form_error('n_name')?>
		</td>     
	</tr>
	<tr>
		<td class="tdstyle txtlabel">
			<?=$this->lang->line('user_phone')?>
		</td>
		<td class="tdstyle">
			<input type="text" class="textbox" id="n_phone" name="n_phone" maxlength="150" value="<?=$phone?>" size="32"/><span class="redcolor p3">*</span>
			<?=form_error('n_phone')?>
		</td>     
	</tr>
	
	<tr>
		<td class="tdstyle txtlabel">
			<?=$this->lang->line('user_email')?>
		</td>
		<td class="tdstyle">
			<input type="text" class="textbox" id="email" name="email" maxlength="150" value="<?=$email?>" size="32"/>
			<?=form_error('email')?>
		</td>     
	</tr>
	
	<tr>
		<td class="tdstyle txtlabel">
			<?=$this->lang->line('user_rank')?>
		</td>
		<td class="tdstyle">
		 <select name="n_rank" id="n_rank" style="width:250px" class="selectbox">
		   <option value=""><?=$this->lang->line('user_selectrank')?></option>
		   <?=$rank_opt?>
		 </select>	
		 <span class="redcolor p3">*</span>
			<?=form_error('n_rank')?>
		</td>     
	</tr>
	<tr>
		<td class="tdstyle txtlabel">
			<?=$this->lang->line('user_job')?>
		</td>
		<td class="tdstyle">
		 <select name="n_job" id="n_job" style="width:250px" class="selectbox">
		   <option value=""><?=$this->lang->line('user_selectjob')?></option>
		   <?=$job_opt?>
		 </select>    
		 <span class="redcolor p3">*</span>
			<?=form_error('n_job')?>
		</td>     
	</tr>   
	
	<tr>
		<td class="tdstyle txtlabel">
			<strong><?=$this->lang->line('user_defmodule')?></strong>
		</td>
		<td class="tdstyle">
			<select name="defmod" id="defmod" style="width:250px;">
			 <option value="">-</option>
			 <?=$modules?>
			</select>
		</td>
	</tr>
	
	 <tr>
		<td class="tdstyle txtlabel">
			<?=$this->lang->line('user_remarks')?>
		</td>
		<td class="tdstyle">
			<textarea id="remarks" name="remarks" maxlength="150" cols="35" rows="3" dir="<?=$dir?>" /><?=$details?></textarea>
			<?=form_error('remarks')?>
		</td>     
	</tr>
</table>
<input type="hidden" name="id" id="id" value="<?=$userid?>" />
<input type="hidden" name="depid" id="depid" value="<?=$plaindepid?>" />
</form>