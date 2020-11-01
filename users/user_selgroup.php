<table cellpadding="0" cellspacing="0" width="100%" class="table">
	  <tr>
	  <td class="tdstyle txtlabel" width="40%"><?=$this->lang->line('user_allgroups')?>:</td><td class="tdstyle txtlabel">&nbsp;</td><td class="tdstyle txtlabel" width="40%"><?=$this->lang->line('user_selgroups')?>:</td>
	  </tr>
	  <tr>
	  <td class="tdstyle txtlabel"><?=$groups?></td>
	  <td class="tdstyle txtlabel">
	<input name="button2" class="searchButton" type="button" onClick="add_groups('groups[]', 'selgroups[]', '1','<?=$this->lang->line("user_nogroup")?>')" value="<?=$this->lang->line("user_addgroup")?>&gt;"><br>
	<input name="button" class="searchButton" type="button" onClick="add_groups('groups[]', 'selgroups[]', '2','<?=$this->lang->line("user_nogroup")?>')" value="&lt;<?=$this->lang->line("user_delgroup")?>&nbsp;">     
	</td>
	   <td class="tdstyle txtlabel"><?=$selectedgroups?></td>
	</tr>
</table>