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
<form name="group_form" id="group_form" method="post">
<table cellpadding="0" cellspacing="0" width="100%" class="table">
	<tr>
		<td class="tdstyle txtlabel" width="15%">
			<?=$this->lang->line('user_name')?>
		</td>
		<td class="tdstyle">
			<?=$username?>
		</td>     
	</tr>
</table>
<hr />
<table cellpadding="0" cellspacing="0" width="100%" class="table">
	<tr>
		<td class="tdstyle txtlabel" width="15%" style="background-color:#cccccc;">
		 <strong><?=$this->lang->line('user_department')?></strong>
		</td>
		<td class="tdstyle txtlabel" style="background-color:#cccccc;">
		<select name="n_department" id="n_department" class="selectbox" style="width:350px" onchange="javascript: bring_page('<?=base_url()?>users/home/getgroups','n_department','depid','groupselect','&userid=<?=$userid?>');">
		   <option value="0" selected="selected"><?=$this->lang->line("user_all")?></option>
		   <?=$menuoption?>
		</select>
		</td>
	</tr>
</table>
<div id="groupselect">
<table cellpadding="0" cellspacing="0" width="100%" class="table">
	  <tr>
	  <td class="tdstyle txtlabel" width="40%"><?=$this->lang->line('user_allgroups')?>:</td><td class="tdstyle txtlabel">&nbsp;</td><td class="tdstyle txtlabel" width="40%"><?=$this->lang->line('user_selgroups')?>:</td>
	  </tr>
	  <tr>
	  <td class="tdstyle txtlabel"><?=$groups?></td>
	  <td class="tdstyle txtlabel">
	<input name="button2" class="searchButton" type="button" onClick="add_groups('groupsList[]', 'selgroups[]', '1','<?=$this->lang->line("user_nogroup")?>');" value="<?=$this->lang->line("user_addgroup")?>&gt;"><br>
	<input name="button" class="searchButton" type="button" onClick="add_groups('groupsList[]', 'selgroups[]', '2','<?=$this->lang->line("user_nogroup")?>');" value="&lt;<?=$this->lang->line("user_delgroup")?>&nbsp;">     
	</td>
	   <td class="tdstyle txtlabel"><?=$selectedgroups?></td>
	</tr>
</table>
</div> 
<input type="hidden" name="id" id="id" value="<?=$userid?>" />
<input type="hidden" name="depid" id="depid" value="<?=$depid?>" />
</form>