<fieldset><legend class="head"><?=$this->lang->line('user_add')?></legend> 
<?php
$dir = "ltr";
//Change the css classes to suit your needs   
$attributes = array('id' => 'user_form','name'=>'user_form');
echo form_open('departments/home/doedituser', $attributes); ?>
<table cellpadding="0" cellspacing="0" width="100%" class="table">
	<tr>
	<td  class="tdstyle txtlabel" valign="top" colspan="2" style="background-color:#cccccc;">
		<div class="txbox_div">
		<strong><?=$this->lang->line('user_note');?></strong>
		<br />Username should be at least 6 characters.
		
	</td>
	</tr>
	<tr>
		<td class="tdstyle" colspan="2" style="background-color:#cccccc;">
			<input type="button" class="searchButton" onclick="javascript:do_it2('user_form');" value="<?=$this->lang->line('user_save')?>" />
			<input type="button" class="searchButton" onclick="parent.location='<?=base_url()?>departments/home/details/<?=$encdepid?>'" value="<?=$this->lang->line('user_cancel')?>" />
		</td>
	</tr>
	<tr>
		<td class="tdstyle txtlabel">
			<?=$this->lang->line('user_name')?>
		</td>
		<td class="tdstyle">
			<input type="text" class="textbox" id="n_username" name="n_username" maxlength="150" size="32" value="<?=$username?>" />
			<span class="redcolor p3">*</span> Username should be at least 6 characters.
			<?=form_error('n_username')?>
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
		<td class="tdstyle txtlabel" style="background-color:#DDDDDD;">
			<strong><?=$this->lang->line('dep_zone')?></strong>
		</td>
		<td class="tdstyle" style="background-color:#DDDDDD;">
			<?=$zone_opt?>
		</td>
	</tr>
	
	<tr>
		<td class="tdstyle txtlabel">
			<strong><?=$this->lang->line('dep_province')?></strong>
		</td>
		<td class="tdstyle" >
			<?=$provinces?>
		</td>
	</tr>
	
	<tr>
		<td class="tdstyle txtlabel" style="background-color:#DDDDDD;">
			<strong><?=$this->lang->line('dep_module')?></strong>
		</td>
		<td class="tdstyle" style="background-color:#DDDDDD;">
			<?=$modules?>
		</td>
	</tr>
	
	 <tr>
		<td class="tdstyle txtlabel">
			<strong><?=$this->lang->line('dep_submodule')?></strong>
		</td>
		<td class="tdstyle" >
			<?=$submodules?>
		</td>
	</tr>
	
	<tr>
		<td class="tdstyle txtlabel">
			<strong><?=$this->lang->line('user_roles')?></strong>
		</td>
		<td class="tdstyle">
			<?=$roles?>
		</td>
	</tr>
	
	<tr>
		<td class="tdstyle txtlabel" style="background-color:#DDDDDD;">
			<strong><?=$this->lang->line('user_groups')?></strong>
		</td>
		<td class="tdstyle" style="background-color:#DDDDDD;">
			<table>
			<tr>
			<td>
				 <labe>
				 <strong><?=$this->lang->line('dep_name')?></strong>
				 </label>
				 <br />
				<select name="n_menu" id="n_menu" class="selectbox" style="width:250px" onchange="javascript: bring_page('<?=base_url()?>departments/home/getgroups','n_menu','depid','groupiddiv','');">
				   <option value="0" selected="selected"><?=$this->lang->line("dep_all")?></option>
				   <?=$menuoption?>
				</select>
			</td>
			</tr>
			<tr>
			<td> 
			   <div id="groupiddiv">
				   <select name="groups[]" id="groups[]" multiple="multiple" size="8"  style="width:250px">
					   <?=$groups?>
				   </select>
			   </div>
			</td>
			</tr>
			</table>
			
		</td>
	</tr>
	<tr>
		<td class="tdstyle txtlabel">
			<strong><?=$this->lang->line('user_defmodule')?></strong>
		</td>
		<td class="tdstyle">
			<select name="n_defmod" id="n_defmod" style="width:250px;">
			 <option value=""><?=$this->lang->line('user_seldefmodule')?></option>
			   <?=$defmods?>
			</select>
			<span class="redcolor p3">*</span> 
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
	<tr>
		<td class="tdstyle" colspan="2" style="background-color:#cccccc;">
			<input type="button" class="searchButton" onclick="javascript:do_it2('user_form');" value="<?=$this->lang->line('user_save')?>" />
			<input type="button" class="searchButton" onclick="parent.location='<?=base_url()?>departments/home/details/<?=$encdepid?>'" value="<?=$this->lang->line('user_cancel')?>" />
		</td>
	</tr>
</table>
<input type="hidden" name="id" id="id" value="<?=$userid?>" />
<input type="hidden" name="depid"  id="depid"  value="<?=$encdepid?>" />
<?=form_close()?>
</fieldset>