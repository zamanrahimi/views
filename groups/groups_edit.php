<fieldset><legend class="head"><img src="<?=base_url()?>images/group_edit.png"> <?=$this->lang->line('grp_edit_title')?></legend> 
<?php
//Change the css classes to suit your needs   
$attributes = array('id' => 'group_perms_form','name'=>'group_perms_form');
echo form_open('groups/home/updaterecords', $attributes); ?>

<table cellpadding="0" cellspacing="0" width="100%" class="table">
   
   <tr>
	<td  class="tdstyle txtlabel" valign="top" colspan="2" style="background-color:#cccccc;">
		<div class="txbox_div">
		<strong><?=$this->lang->line('grp_note');?></strong>
		
	</td>
	</tr>
   
	<tr>
		<td class="tdstyle txtlabel" width="10%">
			<?=$this->lang->line('grp_name')?>
		</td>
		<td class="tdstyle">
			<input class="textbox" id="n_groupname" type="text" name="n_groupname"  size="40" value="<?=$groups['groupname']?>" /><span class="redcolor p3">*</span>
			<?=form_error('n_groupname')?>
		</td>     
	</tr>
	
	<tr>
		<td class="tdstyle txtlabel" width="10%">
			<?=$this->lang->line('grp_details')?>
		</td>
		<td class="tdstyle">
			<input class="textbox" id="n_groupdetail" type="text" name="n_groupdetail" size="40" value="<?=$groups['groupexp']?>" /><span class="redcolor p3">*</span>
			<?=form_error('n_groupdetail')?>
		</td>     
	</tr>
	
	
	<tr>
		<td class="tdstyle txtlabel">
			<?=$this->lang->line('grp_department')?>
		</td>
		<td class="tdstyle">
		<select name="n_department" id="n_department" style="width:350px" class="selectbox">
			  <?=$departments?>
			 </select>   
			<?=form_error('n_roles')?>
		</div>
		</td>
	</tr>
	
	
	<tr>
		<td class="tdstyle txtlabel">
			<?=$this->lang->line('grp_modules')?>
		</td>

		<td class="tdstyle">
			<?=$modulnames?>
			<span class="redcolor p3">*</span>
			<?=form_error('n_titledr')?>
		</td>
		
	</tr>
	
	<tr>
		<td class="tdstyle txtlabel">
			<?=$this->lang->line('grp_submodules')?>
		</td>
		 
		<td class="tdstyle" id="submodel" name="submodel">
		
		<?=$submodulnames?>
		
	</tr>

	
	<tr>
		<td class="tdstyle txtlabel">
			<?=$this->lang->line('grp_roles')?>
		</td>
		<td class="tdstyle">
				  <?=$roles?>
			<?=form_error('n_roles')?>
		</div>
		</td>
	</tr>
	
	<tr>
		<td class="tdstyle txtlabel">
			<?=$this->lang->line('grp_defmod')?> 
		</td>
		<td class="tdstyle">
		<select name="n_defaultmod" id="n_defaultmod" style="width:350px" class="selectbox">
				  <?=$defmod?>
			<?=form_error('n_defaultmod')?>
		</div>
		</td>
	</tr>
	
	</tr>
	<tr>
		<td class="tdstyle" colspan="2" style="background-color:#cccccc;">
			<input type="button" class="searchButton" onclick="javascript:do_it2('group_perms_form');" value="<?=$this->lang->line('grp_edit')?>" />
			<input type="button" class="searchButton" onclick="parent.location='<?=base_url()?>groups/'" value="<?=$this->lang->line('grp_cancel')?>" />
		</td>
	</tr>
</table> 
<input type="hidden" name="groupid" id="groupid" value="<?=$groups['id']?>" />
<?=form_close()?>
</fieldset>