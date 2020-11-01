<fieldset><legend class="head"><img src="<?=base_url()?>images/user_add.png" />&nbsp;<?=$this->lang->line('user_add')?></legend> 
<?php
//Change the css classes to suit your needs   
$attributes = array('id' => 'user_form','name'=>'user_form');
echo form_open_multipart('departments/home/doadduser', $attributes); ?>
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
			<input type="button" class="searchButton" onclick="javascript:SelectAll('selgroups[]'); do_it2('user_form');" value="<?=$this->lang->line('user_save')?>" />
			<input type="button" class="searchButton" onclick="parent.location='<?=base_url()?>departments/home/details/<?=$depid?>'" value="<?=$this->lang->line('user_cancel')?>" />
		</td>
	</tr>
	<tr>
		<td class="tdstyle txtlabel">
			<?=$this->lang->line('user_name')?>
		</td>
		<td class="tdstyle">
			<input type="text" class="textbox" id="n_username" name="n_username" size="32" maxlength="150" value="<?=set_value('n_username')?>" onchange="javascript: CheckAvailability('<?=base_url()?>departments/home/checkuser','usercheckdiv','n_username','');" /><span class="redcolor p3">*</span> 
		   <span class="tx15 boldtext">
			<input type="button" class="searchButton" onclick="javascript: CheckAvailability('<?=base_url()?>departments/home/checkuser','usercheckdiv','n_username','');" value="<?=$this->lang->line('user_check')?>" title="<?=$this->lang->line('user_check')?>" />
			   
		 </span>
		 <div id="usercheckdiv"></div>
		</td>     
	</tr>
	<tr>
		<td class="tdstyle txtlabel">
			<?=$this->lang->line('user_password')?> 
		</td>
		<td class="tdstyle">
			<input type="password" class="textbox" id="n_password"  name="n_password" size="32" maxlength="150" value=""  /><span class="redcolor p3">*</span> Password should be at least 6 characters.
		</td>
	</tr>
	
	<tr>
		<td class="tdstyle txtlabel">
			<?=$this->lang->line('user_retype_pass')?>
		</td>
		<td class="tdstyle">
			<input type="password" class="textbox" id="n_password2"  name="n_password2" size="32" maxlength="150" value=""  /><span class="redcolor p3">*</span>
			Re-typed password should be as password.
		</td>
	</tr>
	 <tr>
		<td class="tdstyle txtlabel">
			<?=$this->lang->line('user_nickname')?>
		</td>
		<td class="tdstyle">
			<input type="text" class="textbox" id="n_name" name="n_name" maxlength="150" size="32" value="<?=set_value('n_name')?>" /><span class="redcolor p3">*</span>
		</td>     
	</tr>
	<tr>
		<td class="tdstyle txtlabel">
			<?=$this->lang->line('user_phone')?>
		</td>
		<td class="tdstyle">
			<input type="text" class="textbox" id="n_phone" name="n_phone" maxlength="150" size="32" value="<?=set_value('n_phone')?>" /><span class="redcolor p3">*</span>
		</td>     
	</tr>
	
	<tr>
		<td class="tdstyle txtlabel">
			<?=$this->lang->line('user_email')?>
		</td>
		<td class="tdstyle">
			<input type="text" class="textbox" id="email" name="email" maxlength="250" size="32" value="<?=set_value('email')?>" />
		</td>     
	</tr>
	
	<tr>
		<td class="tdstyle txtlabel">
			<?=$this->lang->line('user_rank')?>
		</td>
		<td class="tdstyle txtlabel">
		 <select name="n_rank" id="n_rank" style="width:250px" class="selectbox">
		   <option value=""><?=$this->lang->line('user_selectrank')?></option>
		   <?=$rank_opt?>
		 </select>	
		 <span class="redcolor p3">*</span>
		
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
		
		</td>     
	</tr>
	</table>
	<table cellpadding="0" cellspacing="0" width="100%" class="table">
	<tr>
  <td class="tdstyle txtlabel" width="50%"><?=$this->lang->line('user_pic')?>:
		<div class="txbox_div">
		<strong><?=$this->lang->line('user_pictype')?>:</strong>  
		<input type="file" id="picture" name="picture">
   </div>
 </td>
 
  <td class="tdstyle txtlabel" valign="top" width="50%"><?=$this->lang->line('user_idpic')?>:
   <div class="txbox_div">
		<strong><?=$this->lang->line('user_pictype')?>:</strong> 
		<input type="file" id="idpic" name="idpic">
   </div>
 </td> 
 </tr>         
 </table>
 <table cellpadding="0" cellspacing="0" width="100%" class="table">
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
			<img src="<?=base_url()?>images/group.png" />
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
				<select name="n_menu" id="n_menu" class="selectbox" style="width:350px" onchange="javascript: bring_page('<?=base_url()?>departments/home/getgroups','n_menu','depid','groupiddiv','');">
				   <option value="0" selected="selected"><?=$this->lang->line("dep_all")?></option>
				   <?=$menuoption?>
				</select>
			</td>
			</tr>
			<tr>
			<td>  
			   <table cellpadding="0" cellspacing="0" width="100%" class="table">
					  <tr>
					  <td class="tdstyle txtlabel" width="40%"><?=$this->lang->line('user_allgroups')?>:</td><td class="tdstyle txtlabel">&nbsp;</td><td class="tdstyle txtlabel" width="40%"><?=$this->lang->line('user_selgroups')?>:</td>
					  </tr>
					  <tr>
					  <td class="tdstyle txtlabel"><div id="groupiddiv"><?=$allgroups?></div></td>
					  <td class="tdstyle txtlabel">
					<input name="button2" class="searchButton" type="button" onClick="add_groups('groups', 'selgroups[]', '1','<?=$this->lang->line("user_nogroup")?>')" value="<?=$this->lang->line("user_addgroup")?>&gt;"><br>
					<input name="button" class="searchButton" type="button" onClick="add_groups('groups', 'selgroups[]', '2','<?=$this->lang->line("user_nogroup")?>')" value="&lt;<?=$this->lang->line("user_delgroup")?>&nbsp;">     
					</td>
					   <td class="tdstyle txtlabel"><?=$selgroups?></td>
					</tr>
				</table>
			   
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
			 <option value="0" selected="selected"><?=$this->lang->line('user_seldefmodule')?></option>
			</select>
		</td>
	</tr>
	 <tr>
		<td class="tdstyle txtlabel">
			<?=$this->lang->line('user_remarks')?>
		</td>
		<td class="tdstyle">
			<textarea id="remarks" name="remarks" cols="45" rows="3" dir="<?=$dir?>" /><?=set_value('remarks')?></textarea>
		</td>     
	</tr>
	<tr>
		<td class="tdstyle" colspan="2" style="background-color:#cccccc;">
			<input type="button" class="searchButton" onclick="javascript:SelectAll('selgroups[]');do_it2('user_form');" value="<?=$this->lang->line('user_save')?>" />
			<input type="button" class="searchButton" onclick="parent.location='<?=base_url()?>departments/home/details/<?=$depid?>'" value="<?=$this->lang->line('user_cancel')?>" />
		</td>
	</tr>
</table>
<input type="hidden" name="depid" id="depid" value="<?=$depid?>"/>
<?=form_close()?>
</fieldset>