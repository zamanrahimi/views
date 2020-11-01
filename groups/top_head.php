<table cellpadding="0" cellspacing="0" width="100%" class="table">
	<tr>
	<td  class="tdstyle txtlabel" valign="top" colspan="2" style="background-color:#cccccc;">
		<div class="txbox_div">
		<span class="tx15 boldtext" style="float: <?=$float?>;">
		   <?php
		  //check if the department is active to add user or group
		  if($status == 1 && $addrole == TRUE)
		  {
			//check if I have role of add in case of active department  
		  ?>
			<input type="button" class="searchButton" onclick="javascript: load_page('<?=base_url()?>groups/home/AddGroups','groupdivid','&ajax=1&depid=<?=$encdepid?>');" value="+<?=$this->lang->line('grp_add')?>" title="<?=$this->lang->line('grp_add')?>" />
			<input type="button" class="searchButton" onclick="javascript: load_page('<?=base_url()?>groups/home_two/addexisting','groupdivid','&ajax=1&depid=<?=$encdepid?>');" value="+<?=$this->lang->line('grp_addexisting')?>" title="<?=$this->lang->line('grp_addexisting')?>" />
		  <?php
		  }
		 ?>
		</span>
	</td>
	</tr>
</table>
 