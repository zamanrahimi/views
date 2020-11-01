<table cellpadding="0" cellspacing="0" width="100%" class="table">
	  <tr>
	  <td class="tdstyle txtlabel" width="40%"><?=$this->lang->line('grp_allusers')?>:</td><td class="tdstyle txtlabel">&nbsp;</td><td class="tdstyle txtlabel" width="40%"><?=$this->lang->line('grp_selusers')?>:</td>
	  </tr>
	  <tr>
	  <td class="tdstyle txtlabel"><?=$groups?></td>
	  <td class="tdstyle txtlabel">
	<input name="button2" class="searchButton" type="button" onClick="add_groups('users[]', 'selusers[]', '1','<?=$this->lang->line("grp_nouser")?>')" value="<?=$this->lang->line("grp_addgroup")?>&gt;"><br>
	<input name="button" class="searchButton" type="button" onClick="add_groups('users[]', 'selusers[]', '2','<?=$this->lang->line("grp_nouser")?>')" value="&lt;<?=$this->lang->line("grp_delgroup")?>&nbsp;">     
	</td>
	   <td class="tdstyle txtlabel"><?=$selectedgroups?></td>
	</tr>
</table>