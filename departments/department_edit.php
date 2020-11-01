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
<fieldset><legend class="head"><img src="<?=base_url()?>images/department_edit.png" />&nbsp;<?=$this->lang->line('dep_depedit')?></legend> 
<?php
//Change the css classes to suit your needs   
$attributes = array('id' => 'department_form','name'=>'department_form');
echo form_open('departments/home/editdepartment', $attributes); ?>
<?php
if($depdetails)
{ 
if($depdetails->num_rows() > 0)
{
 foreach ($depdetails->result() as $item):?>
<table cellpadding="0" cellspacing="0" width="100%" class="table">
	<tr>
	<td  class="tdstyle txtlabel" valign="top" colspan="2" style="background-color:#cccccc;">
		<div class="txbox_div">
		<strong><?=$this->lang->line('dep_note');?></strong>
		<span class="p5 tx15 boldtext" style="float: <?=$float?>;"><input type="button" class="searchButton" onclick="javascript: popWindow('<?=base_url()?>departments/home/view');" value="<?=$this->lang->line('dep_list')?>"></span>
	</td
	</tr>
	<tr>
		<td class="tdstyle" colspan="2" style="background-color:#cccccc;"> 
			<input type="button" class="searchButton" onclick="javascript:do_it2('department_form');" value="<?=$this->lang->line('dep_save')?>" />
			<input type="button" class="searchButton" onclick="parent.location='<?=base_url()?>departments/'" value="<?=$this->lang->line('dep_cancel')?>" />
		</td>
	</tr>
	<tr> 
	   <td class="tdstyle txtable">
	   
	   </td>
	   <td class="tdstyle txtable">
		  <select name="n_menu" id="n_menu" disabled="disabled" class="selectbox" style="width:350px" onchange="javascript: redirect_dropdownurl('<?=base_url()?>departments/home/editdepartment/<?=$depid?>','n_menu');">
			<?=$menuoption?>
		</select>
	   </td>
	</tr>
	
	<tr>
		<td class="tdstyle txtlabel">
			<strong><?=$this->lang->line('dep_parent')?></strong>
		</td>
		<td class="tdstyle">
			
			<select name="n_parent" id="n_parent" style="width:350px" class="selectbox">
		   <option value=""><?=$this->lang->line('dep_select')?></option>
		   <?=$dep_opt?>
		 </select>
			<span class="redcolor p3">*</span>
			<span class="txtlabel"><?=$this->lang->line('dep_parent_msg')?></span>    
			<?=form_error('n_parent')?>
		</td>
	</tr>
	 <?php 
	   if($endisrole == TRUE)
	   {
	 ?>
	<tr>
		<td class="tdstyle txtlabel">
			<?=$this->lang->line('user_status')?>
		</td>
		<td class="tdstyle">
		
			<select name="n_status" id="n_status" <?=$endisrole?> style="width: 300px;">
			  <?=$active?>
			</select>
		</td>     
	</tr>
	 <?php
	   }
	 ?>
	<tr>
		<td class="tdstyle txtlabel" width="15%">
			<strong><?=$this->lang->line('dep_nameen')?></strong>
		</td>
		<td class="tdstyle">
			<input class="textbox" id="n_titleen" type="text" name="n_titleen" maxlength="250" value="<?=$item->org_nameen?>"  size="40"/><span class="redcolor p3">*</span>
			<?=form_error('n_titleen')?>
		</td>     
	</tr>
	<tr>
		<td class="tdstyle txtlabel">
			<strong><?=$this->lang->line('dep_namedr')?></strong>
		</td>
		<td class="tdstyle">
			<input class="textbox" id="n_titledr" type="text" name="n_titledr" maxlength="250" value="<?=$item->org_namedr?>" size="40" /><span class="redcolor p3">*</span>
			<?=form_error('n_titledr')?>
		</td>
	</tr>
	<tr>
		<td class="tdstyle txtlabel">
			<strong><?=$this->lang->line('dep_namepa')?></strong>
		</td>
		<td class="tdstyle">
			<input class="textbox" id="n_titlepa" type="text" name="n_titlepa" maxlength="250" value="<?=$item->org_namepa?>" size="40" /><span class="redcolor p3">*</span>
			<?=form_error('n_titlepa')?>
		</td>
	</tr>
	 <tr>
        <td class="tdstyle txtlabel">
            <strong><?=$this->lang->line('dep_code')?></strong>
        </td>
        <td class="tdstyle">
            <input class="textbox" id="n_depcode" type="text" name="n_depcode" maxlength="250" value="<?=$item->org_code?>" size="40" /><span class="redcolor p3">*</span>
        </td>
    </tr>
	
	<tr>
		<td class="tdstyle txtlabel">
			<strong><?=$this->lang->line('dep_zone')?></strong>
		</td>
		<td class="tdstyle">
			<?=$zone_opt?>
		</td>
	</tr>
	
	<tr>
		<td class="tdstyle txtlabel">
			<strong><?=$this->lang->line('dep_province')?></strong>
		</td>
		<td class="tdstyle" style="height: 160px;">
			<?=$provinces?>
		</td>
	</tr>
	 <tr>
		<td class="tdstyle txtlabel">
			<strong><?=$this->lang->line('dep_module')?></strong>
		</td>
		<td class="tdstyle">
			<?=$modules?>
		</td>
	</tr>
	
	 <tr>
		<td class="tdstyle txtlabel">
			<strong><?=$this->lang->line('dep_submodule')?></strong>
		</td>
		<td class="tdstyle" style="height: 160px;">
			<?=$submodules?>
		</td>
	</tr>
	<tr>
		<td class="tdstyle txtlabel">
			<?=$this->lang->line('user_remarks')?>
		</td>
		<td class="tdstyle">
			<textarea id="remarks" name="remarks" maxlength="150" cols="35" rows="3" dir="<?=$dir?>" /><?=$remarks?></textarea>
		</td>     
	</tr>
	<tr>
		<td class="tdstyle" colspan="2" style="background-color:#cccccc;">
			<input type="button" class="searchButton" onclick="javascript:do_it2('department_form');" value="<?=$this->lang->line('dep_save')?>" />
			<input type="button" class="searchButton" onclick="parent.location='<?=base_url()?>departments/'" value="<?=$this->lang->line('dep_cancel')?>" />
		</td>
	</tr>
</table>
<input type="hidden" name="depid" id="depid" value="<?=$encdepid?>" />
<input type="hidden" name="menuid" id="menuid" value="<?=$menuid?>" />
<?endforeach?>
<?php }
} ?>
<?=form_close()?>
</fieldset>