<style>
 HTML 
 {
	overflow: auto;
	margin: 0px;
 }
</style>
<fieldset><legend class="head"><?=$this->lang->line('dep_list')?></legend>
<span class="p5 tx15 boldtext"><a href="#" onclick="javascript:window.print();"><img src="<?=base_url()?>images/printer.gif" border="0" /><?=$this->lang->line('dep_print')?></a></span>
<div id="treecontrol">
	<a href="#"><?=$this->lang->line('dep_collapse_all');?></a> | 
	<a href="#"> <?=$this->lang->line('dep_expand_all');?></a> | 
	<a href="#"><?=$this->lang->line('dep_toggle_all');?></a>
</div>
<hr />
<select name="n_menu" id="n_menu" class="selectbox" onchange="javascript: redirect_dropdownurl('<?=base_url()?>departments/home/view','n_menu');">
	<?=$menuoption?>
</select>
   <?=$departments?>
</fieldset>