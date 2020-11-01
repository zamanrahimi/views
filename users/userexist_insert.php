<fieldset><legend class="head"><img src="<?=base_url()?>images/user_add.png" />&nbsp;<?=$this->lang->line('user_addexisting')?></legend> 
<?php
//Change the css classes to suit your needs   
$attributes = array('id' => 'user_form','name'=>'user_form');
echo form_open('departments/home/doaddexistinguser', $attributes); ?>
<table cellpadding="0" cellspacing="0" width="100%" class="table">
	
	<tr>
	<td  class="tdstyle txtlabel" valign="top" colspan="2" style="background-color:#cccccc;">
		<div class="txbox_div">
		<strong><?=$this->lang->line('user_note');?></strong>
		
	</td>
	</tr>
	<tr>
		<td class="tdstyle" colspan="2" style="background-color:#cccccc;">
			<?php
			 //check if the departmen and user status is active and user is not me
			 if($status==1)
			 {
			?>
				<input type="button" class="searchButton" onclick="javascript:do_it2('user_form');" value="<?=$this->lang->line('user_save')?>" />
			 <?php
			 }
			 else
			 {
			 ?>
				<input type="button" class="searchButton" onclick="javascript:do_it2('user_form');" disabled="disabled" value="<?=$this->lang->line('user_save')?>" />
			 <?php
			 }
			 ?>
			<input type="button" class="searchButton" onclick="parent.location='<?=base_url()?>departments/home/details/<?=$depid?>'" value="<?=$this->lang->line('user_cancel')?>" />
		</td>
	</tr>
	
	 <tr>
		<td class="tdstyle txtlabel">
			<strong><?=$this->lang->line('dep_name')?></strong>
		</td>
		<td class="tdstyle">
			<select name="n_menu" id="n_menu" class="selectbox" style="width:350px" onchange="javascript: bring_page('<?=base_url()?>departments/home/getdepusers','n_menu','depid','userdivid','&thisdep=<?=$thisdepid?>');">
				   <option value="0" selected="selected"><?=$this->lang->line("dep_all")?></option>
				   <?=$menuoption?>
			</select>
		</td>
	</tr>
	
	<tr>
		<td class="tdstyle txtlabel">
			<strong><?=$this->lang->line('user_list')?></strong>
		</td>
		<td class="tdstyle">
			<div id="userdivid">
			<select name="n_user" id="n_user" class="selectbox" style="width:350px">
				   <option value="" selected="selected"><?=$this->lang->line("user_selectuser")?></option>
				   <?=$users?>
			</select>
			<span class="redcolor p3">*</span> 
			</div>
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
		<td class="tdstyle" colspan="2" style="background-color:#cccccc;">
			<?php
			 //check if the departmen and user status is active and user is not me
			 if($status==1)
			 {
			?>
				<input type="button" class="searchButton" onclick="javascript:do_it2('user_form');" value="<?=$this->lang->line('user_save')?>" />
			 <?php
			 }
			 else
			 {
			 ?>
				<input type="button" class="searchButton" onclick="javascript:do_it2('user_form');" disabled="disabled" value="<?=$this->lang->line('user_save')?>" />
			 <?php
			 }
			 ?>
			<input type="button" class="searchButton" onclick="parent.location='<?=base_url()?>departments/home/details/<?=$depid?>'" value="<?=$this->lang->line('user_cancel')?>" />
		</td>
	</tr>
</table>
<input type="hidden" name="depid" id="depid" value="<?=$depid?>"  />
<?=form_close()?>
</fieldset>