<style>
 HTML 
 {
	overflow: auto;
	margin: 0px;
 }
</style>
<fieldset><legend class="head"><?=$this->lang->line('user_addtonewdep')?></legend> 
<?php
//Change the css classes to suit your needs   
$attributes = array('id' => 'user_form','name'=>'user_form');
echo form_open('users/home/DoAddNewDep', $attributes); ?>
<table cellpadding="0" cellspacing="0" width="100%" class="table">
	
	<tr>
	<td  class="tdstyle txtlabel" valign="top" colspan="2" style="background-color:#cccccc;">
		<div class="txbox_div">
		<strong><?=$this->lang->line('user_note');?></strong>
		
	</td>
	</tr>
	
	 <tr>
		<td class="tdstyle txtlabel" width="20%">
			<strong><?=$this->lang->line('user_department')?></strong>
		</td>
		<td class="tdstyle">
			<select name="n_menu" id="n_menu" class="selectbox" style="width:350px" onchange="javascript: bring_page('<?=base_url()?>users/home/DepMoveDetailss','n_menu','depid','depmovediv','&userid=<?=$userid?>');" >
				  
				   <option value="" selected="selected"><?=$this->lang->line("user_selectdep")?></option>
				   <?=$alldeps?>
				   
			</select>
			 <span class="redcolor p3">*</span>
		</td>
	</tr>
	
	<tr>
		<td class="tdstyle txtlabel">
			<strong><?=$this->lang->line('user_name')?></strong>
		</td>
		<td class="tdstyle">
		<?=$username?>          
		</td>
	</tr>
</table>
<div id="depmovediv"></div>
<input type="hidden" name="id" id="id" value="<?=$userid?>" /> 
<input type="hidden" name="depid" id="depid" value="<?=$depid?>"  />
<?=form_close()?>
</fieldset>