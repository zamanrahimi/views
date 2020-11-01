<?php
if($this->mng_auth->get_language() == 'en')
{
	$dir = "ltr";
}
else
{
	$dir = "rtl";
}
$disabled = "";
if($endisrole == false)
{
   $disabled = "disabled = \"disabled\"";
}
?>
<fieldset><legend class="head"><img src="<?=base_url()?>images/department_edit.png" />&nbsp;<?=$this->lang->line('dep_depedit')?></legend> 
<?php
//Change the css classes to suit your needs   
$attributes = array('id' => 'department_form','name'=>'department_form');
echo form_open('departments/home/doenabledisdepartment', $attributes); ?>
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
			<input type="button" class="searchButton" onclick="javascript:do_it2('department_form');" <?=$disabled?> value="<?=$this->lang->line('dep_save')?>" />
			<input type="button" class="searchButton" onclick="parent.location='<?=base_url()?>departments/'" value="<?=$this->lang->line('dep_cancel')?>" />
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
		
			<select name="n_status" id="n_status" <?=$disabled?> style="width: 300px;">
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
			<input class="textbox" id="titleen" type="text" name="titleen" disabled="disabled" maxlength="250" value="<?=$item->org_nameen?>"  size="40"/><span class="redcolor p3">*</span>
			<?=form_error('titleen')?>
		</td>     
	</tr>
	<tr>
		<td class="tdstyle txtlabel">
			<strong><?=$this->lang->line('dep_namedr')?></strong>
		</td>
		<td class="tdstyle">
			<input class="textbox" id="titledr" type="text" name="titledr" disabled="disabled" maxlength="250" value="<?=$item->org_namedr?>" size="40" /><span class="redcolor p3">*</span>
			<?=form_error('titledr')?>
		</td>
	</tr>
	<tr>
		<td class="tdstyle txtlabel">
			<strong><?=$this->lang->line('dep_namepa')?></strong>
		</td>
		<td class="tdstyle">
			<input class="textbox" id="titlepa" type="text" name="titlepa" disabled="disabled" maxlength="250" value="<?=$item->org_namepa?>" size="40" /><span class="redcolor p3">*</span>
			<?=form_error('titlepa')?>
		</td>
	</tr>
	<tr>
		<td class="tdstyle" colspan="2" style="background-color:#cccccc;">
			<input type="button" class="searchButton" onclick="javascript:do_it2('department_form');" <?=$disabled?> value="<?=$this->lang->line('dep_save')?>" />
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