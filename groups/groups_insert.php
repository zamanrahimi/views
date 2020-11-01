<fieldset><legend class="head"><img src="<?=base_url()?>images/group_add.png" />&nbsp;<?=$this->lang->line('grp_add')?></legend> 
<?php
//Change the css classes to suit your needs   
$attributes = array('id' => 'grp_form','name'=>'grp_form');
echo form_open('groups/home/doaddgroups', $attributes); ?>
<table cellpadding="0" cellspacing="0" width="100%" class="table">
	
	<tr>
	<td class="tdstyle txtlabel" valign="top" colspan="2" style="background-color:#cccccc;">
		<div class="txbox_div">
		<strong><?=$this->lang->line('grp_note');?></strong> 
	</td>
	</tr>
	
	<tr>
	<td class="tdstyle" colspan="2" style="background-color:#cccccc;">
		<input type="button" class="searchButton" onclick="javascript:do_it2('grp_form');" value="<?=$this->lang->line('grp_save')?>" />
		<input type="button" class="searchButton" onclick="parent.location='<?=base_url()?>departments/home/details/<?=$depid?>'" value="<?=$this->lang->line('grp_cancel')?>" /> 
	</td>
	</tr>
	
	<tr>
	<td class="tdstyle txtlabel">
		<?=$this->lang->line('grp_name')?>
	</td>
	<td class="tdstyle">
	   <input type="text" class="textbox" id="n_grp_name" name="n_grp_name" size="40" maxlength="150" value="<?=set_value('n_grp_name')?>" /><span class="redcolor p3">*</span>    
	</td>     
	</tr>
	
	<tr>
	<td class="tdstyle txtlabel">
	   <?=$this->lang->line('grp_details')?>
	</td>
	<td class="tdstyle">
	   <input type="text" class="textbox" id="n_grp_details" name="n_grp_details" maxlength="150" size="40" value="<?=set_value('n_grp_details')?>" /><span class="redcolor p3">*</span>
	</td>     
	</tr>
	
	<tr>
	<td class="tdstyle txtlabel" style="background-color:#DDDDDD;">
	   <strong><?=$this->lang->line('grp_zone')?></strong>
	</td>
	<td class="tdstyle" style="background-color:#DDDDDD;">
	   <?=$zone_opt?>  
	</td>
	</tr>
	
	<tr>
	<td class="tdstyle txtlabel">
	   <strong><?=$this->lang->line('grp_province')?></strong>
	</td>
	<td class="tdstyle" >
	   <?=$provinces?> 
	</td>
	</tr>
	
	<tr>
	<td class="tdstyle txtlabel" style="background-color:#DDDDDD;">
	   <strong><?=$this->lang->line('grp_module')?></strong>
	</td>
	<td class="tdstyle" style="background-color:#DDDDDD;">
	   <?=$modules?>  
	</td>
	</tr>
	
	<tr>
	<td class="tdstyle txtlabel">
	   <strong><?=$this->lang->line('grp_submodule')?></strong>
	</td>
	<td class="tdstyle" >
	   <?=$submodules?>   
	</td>
	</tr>
	
	<tr>
	<td class="tdstyle txtlabel">
	  <strong><?=$this->lang->line('grp_roles')?></strong>
	</td>
	<td class="tdstyle">
	  <?=$roles?>  
	</td>
	</tr>
	
	<tr>
	<td class="tdstyle txtlabel" style="background-color:#DDDDDD;">
	   <img src="<?=base_url()?>images/user24.png" /> 
	   <strong><?=$this->lang->line('grp_user')?></strong>
	</td>
	<td class="tdstyle" style="background-color:#DDDDDD;">
		<table>
		<tr>
			<td>
			   <label>
				 <strong><?=$this->lang->line('grp_dep_name')?></strong>
			   </label>
			   <br/>
			   <select name="n_menu" id="n_menu" class="selectbox" style="width:350px" onchange="javascript: bring_page('<?=base_url()?>departments/home/GetUsersByDep','n_menu','depid','groupiddiv','');">
			   <option value="0" selected="selected"><?=$this->lang->line("dep_all")?></option>
			   <?=$menuoption?>
			   </select>
			</td>
		</tr>
		
		<tr>
			<td>
			  <table cellpadding="0" cellspacing="0" width="100%" class="table">
					  <tr>
					  <td class="tdstyle txtlabel" width="40%"><?=$this->lang->line('grp_allusers')?>:</td><td class="tdstyle txtlabel">&nbsp;</td><td class="tdstyle txtlabel" width="40%"><?=$this->lang->line('grp_selusers')?>:</td>
					  </tr>
					  <tr>
					  <td class="tdstyle txtlabel"><div id="groupiddiv"><?=$users?></div></td>
					  <td class="tdstyle txtlabel">
					<input name="button2" class="searchButton" type="button" onClick="add_groups('users[]', 'selusers[]', '1','<?=$this->lang->line("grp_nouser")?>')" value="<?=$this->lang->line("user_addgroup")?>&gt;"><br>
					<input name="button" class="searchButton" type="button" onClick="add_groups('users[]', 'selusers[]', '2','<?=$this->lang->line("grp_nouser")?>')" value="&lt;<?=$this->lang->line("user_delgroup")?>&nbsp;">     
					</td>
					   <td class="tdstyle txtlabel"><?=$selectedusers?></td>
					</tr>
				</table>
			</td>
		</tr>
		</table>
	</td>
	</tr>
	
	<tr>
	<td class="tdstyle txtlabel">
		<?=$this->lang->line('grp_remarks')?>
	</td>
	<td class="tdstyle">
		<textarea id="remarks" name="remarks" cols="45" rows="3" /><?=set_value('remarks')?></textarea>
	</td>     
	</tr>
	
	<tr>
	<td class="tdstyle" colspan="2" style="background-color:#cccccc;">
     <?php
     if(($this->mng_auth->checkdeprole('r1')) OR ($this->mng_auth->m_i_admin()))
     {
     ?>
		<input type="button" class="searchButton" onclick="javascript:do_it2('grp_form');" value="<?=$this->lang->line('grp_save')?>" />
		<input type="button" class="searchButton" onclick="parent.location='<?=base_url()?>departments/home/details/<?=$depid?>'" value="<?=$this->lang->line('grp_cancel')?>" />
	 <?php
     }
     ?>
    </td>
	</tr>
</table>

<input type="hidden" name="depid" id="depid" value="<?=$depid?>"/> 
<?=form_close()?>
</fieldset>