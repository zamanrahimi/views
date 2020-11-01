
<table cellpadding="0" cellspacing="0" width="100%" class="table">
	
	<tr>
		<td class="tdstyle txtlabel" style="background-color:#DDDDDD;" width="20%">
			<strong><?=$this->lang->line('user_zones')?></strong>
		</td>
		<td class="tdstyle" style="background-color:#DDDDDD;">
			<?=$zone_opt?>
		</td>
	</tr>
	
	<tr>
		<td class="tdstyle txtlabel">
			<strong><?=$this->lang->line('user_provinces')?></strong>
		</td>
		<td class="tdstyle" >
			<?=$provinces?>
		</td>
	</tr>
	
	<tr>
		<td class="tdstyle txtlabel" style="background-color:#DDDDDD;">
			<strong><?=$this->lang->line('user_module')?></strong>
		</td>
		<td class="tdstyle" style="background-color:#DDDDDD;">
			<?=$modules?>
		</td>
	</tr>
	
	 <tr>
		<td class="tdstyle txtlabel">
			<strong><?=$this->lang->line('user_submodule')?></strong>
		</td>
		<td class="tdstyle" >
			<?=$submodules?>
		</td>
	</tr>
	
	<tr>
		<td class="tdstyle txtlabel">
			<strong><?=$this->lang->line('user_roles')?></strong>
		</td>
		<td class="tdstyle">
			<?=$roles?>
		</td>
	</tr>
	<tr>
		<td class="tdstyle" colspan="2" style="background-color:#cccccc;">
			 <?php
			 //check if the departmen and user status is active and user is not me
			 if($status==1 && $userid != $this->mng_auth->get_user_id() && $active == 1)
			 {
			   //check if I have add role
			   if($this->mng_auth->CheckDepRole($plaindepid,'r1')==TRUE)
			   { 
			 ?>
				<input type="button" class="searchButton" onclick="javascript: do_it2('user_form');" value="<?=$this->lang->line('user_save')?>" />
			 <?php
			   }
			 }
			 ?>
			<input type="button" class="searchButton" onclick="closeAndRefresh()" value="<?=$this->lang->line('user_cancel')?>" />
		</td>
	</tr>
</table>

