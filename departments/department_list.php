<fieldset><legend class="head"><img src="<?=base_url()?>images/folder.gif" />&nbsp;<?=$this->lang->line('dep_list')?></legend>
  <table cellpadding="0" cellspacing="0"> 
	<tr>
		<td class="p5">
		   <div id="treecontrol">
				<a href="#"><?=$this->lang->line('dep_collapse_all');?></a> | 
				<a href="#"> <?=$this->lang->line('dep_expand_all');?></a> | 
				<a href="#"><?=$this->lang->line('dep_toggle_all');?></a>
			</div>
		</td>
		<td class="p5 tx15 boldtext">
		 <?php
		   //check add role of this user
		   if($this->mng_auth->check_my_roles('r1') == true)
		   {
		 ?>
			<input type="button" class="searchButton" onclick="parent.location='<?=base_url()?>departments/home/adddepartment'" value="+<?=$this->lang->line('dep_add')?>" />
		 <?php
		   }
		   else
		   {
			  echo "&nbsp;";
		   }
		 ?>
		</td>
		<td class="p5 redcolor">
		   <?php
			//check for the success
			if($this->session->flashdata('msg'))
			{  
			   echo $this->session->flashdata('msg');
			}
			?> 
		</td>
	</tr>
</table>
<span class="p5 tx15 boldtext"><a href="javascript:void(0);" onclick="javascript: popWindow('<?=base_url()?>departments/home/view');"><img src="<?=base_url()?>images/printer.gif" border="0"/><?=$this->lang->line('dep_print_version')?></a></span>
<hr />
<select name="n_menu" id="n_menu" class="selectbox" onchange="javascript: redirect_dropdownurl('<?=base_url()?>departments/home/index','n_menu');">
	<?=$menuoption?>
</select>

  <div id="depdivid">
	 <?=$departments?>
  </div>
</fieldset>