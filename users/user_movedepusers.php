<table cellpadding="0" cellspacing="0" width="100%" class="table">

	  <tr>
		<td class="tdstyle txtlabel" colspan="3" style="background-color:#DDDDDD;">
		<img src="<?=base_url()?>images/file_transfer.png" />&nbsp;
		<?=$this->lang->line('user_filetransfer')." - ".$depname;?>:</td>
	  </tr>

	  <tr>
	  <td class="tdstyle txtlabel" width="30%"><?=$this->lang->line('user_allusers')?>:</td><td class="tdstyle txtlabel" width="8%">&nbsp;</td><td class="tdstyle txtlabel" ><?=$this->lang->line('user_selusers')?>:</td>
	  </tr>
	  <tr>
	  <td class="tdstyle txtlabel"><?=$users?></td>
	  <td class="tdstyle txtlabel">
	<input name="button2" class="searchButton" type="button" onClick="add_groups('users', 'selusers[]', '1','<?=$this->lang->line("user_nouser")?>')" value="<?=$this->lang->line("user_addgroup")?>&gt;"><br>
	<input name="button" class="searchButton" type="button" onClick="add_groups('users', 'selusers[]', '2','<?=$this->lang->line("user_nouser")?>')" value="&lt;<?=$this->lang->line("user_delgroup")?>&nbsp;">     
	</td>
	   <td class="tdstyle txtlabel"><?=$selectedusers?></td>
	</tr>
</table>