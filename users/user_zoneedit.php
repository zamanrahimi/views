<style>
 HTML 
 {
	overflow: auto;
	margin: 0px;
 }
</style>
<fieldset><legend class="head"><img src="<?=base_url()?>images/user_edit.png" />&nbsp;<?=$this->lang->line('user_edit')?></legend> 
<?php
$dir = "ltr";
//Change the css classes to suit your needs   
$attributes = array('id' => 'user_zoneform','name'=>'user_zoneform');
echo form_open('users/home/doedituserzone', $attributes); ?>
<table cellpadding="0" cellspacing="0" width="100%" class="table">
	<tr>
		<td class="tdstyle" colspan="2" style="background-color:#cccccc;">
			<span class="p5 redcolor">
		   <?php
			//check for the success
			if($this->session->flashdata('msg'))
			{  
			   echo $this->session->flashdata('msg');
			}
			?> 
			</span>
			<?php
			 //check if the departmen and user status is active and user is not me
			 if($status==1 && $userid != $this->mng_auth->get_user_id() && $active == 1)
			 {
			?>
			  <input type="button" class="searchButton" onclick="javascript:do_it2('user_zoneform');" value="<?=$this->lang->line('user_save')?>" />
			 <?php
			 }
			 else
			 {
			 ?>
				<input type="button" class="searchButton" onclick="javascript:do_it2('user_zoneform');" disabled="disabled" value="<?=$this->lang->line('user_save')?>" />
			 <?php
			 }
			 ?>
			<input type="button" class="searchButton" onclick="closeAndRefresh();" value="<?=$this->lang->line('user_close')?>" />
		</td>
	</tr>
	
	
	<tr>
		<td class="tdstyle txtlabel" width="18%">
			<strong><?=$this->lang->line('user_department')?> 
			</strong>
		</td>
		<td class="tdstyle">
			<select name="n_parent" id="n_parent" class="selectbox" style="width:300px" onchange="javascript: redirect_dropdownurl_str('<?=base_url()?>departments/home/userzones','n_parent','<?=$userid?>');">
				   <?=$menuoption?>
			</select>
		</td>
	</tr>
	
	<tr>
		<td class="tdstyle txtlabel">
			<strong><?=$this->lang->line('user_name')?> 
			- <?=$this->lang->line('user_nickname')?></strong>
		</td>
		<td class="tdstyle">
			<?=$username." - ".$fname?>
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
			 if($status==1 && $userid != $this->mng_auth->get_user_id() && $active == 1)
			 {
			?>
			  <input type="button" class="searchButton" onclick="javascript:do_it2('user_zoneform');" value="<?=$this->lang->line('user_save')?>" />
			 <?php
			 }
			 else
			 {
			 ?>
				<input type="button" class="searchButton" onclick="javascript:do_it2('user_zoneform');" disabled="disabled" value="<?=$this->lang->line('user_save')?>" />
			 <?php
			 }
			 ?>
			
			<input type="button" class="searchButton" onclick="closeAndRefresh();" value="<?=$this->lang->line('user_cancel')?>" />
		</td>
	</tr>
</table>
<input type="hidden" name="id" id="id" value="<?=$userid?>" />
<input type="hidden" name="depid"  id="depid"  value="<?=$encdepid?>" />
<?=form_close()?>
</fieldset>