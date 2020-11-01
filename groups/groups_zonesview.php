<table cellpadding="0" cellspacing="0" width="100%" class="table">
	<tr>
	  <td  class="tdstyle txtlabel" valign="top" width="15%">
		 <?=$this->lang->line('user_zones');?>:
	  </td>
	  <td  class="tdstyle tx16" valign="top">
	   <?php
		 //check if there is an object of provinces
		 if($zones)
		 {
			 
			foreach($zones->result() AS $zoneitem)
			{
			   if($zoneitem->zone != 0)
			   {
					$prs ="";
					echo "<span class=\"tx16\">"."<strong>".$zoneitem->zone.":</strong>&nbsp;(";
					//if province is available
					if($provinces)
					{
						foreach($provinces->result() AS $pritem)
						{
						   if($pritem->zone == $zoneitem->zone)
						   { 
							  $prs .=$pritem->name.", ";
						   }
						}
						echo substr($prs,0,strlen($prs)-2);
					}
					echo ")<br />"."</span><hr />";
			   }
			}
		 }
	   
	   ?>
	  </td>
	</tr>
	<tr>
	  <td  class="tdstyle txtlabel" valign="top" width="15%">
		 <?=$this->lang->line('user_module');?>:
	  </td>
	  <td  class="tdstyle tx16" valign="top">
	   <?php
		 //check if there is an object of provinces
		 if($modules)
		 {
			 
			foreach($modules->result() AS $mod)
			{
			  
				$smods =""; 
				$rol =""; 
				$checkMultiRole = array();
				//if province is available
				if($submodules)
				{
					foreach($submodules->result() AS $smod)
					{
					   if($smod->module == $mod->code)
					   {
						  $smods .= $smod->name.", "; 
					   }
					}
					$smods = substr($smods,0,strlen($smods)-2);
				}
				//if province is available
				if($roles)
				{
					foreach($roles->result() AS $r)
					{
					   if($r->module == $mod->code && !in_array($r->code,$checkMultiRole,TRUE))
					   {
						  $rol .= $rolenames[$r->code].", "; 
						  $checkMultiRole[] =$r->code; 
					   }
					}
					$rol = substr($rol,0,strlen($rol)-2);
				}
				echo "<span class=\"tx16\">"."<strong>".$mod->name.":</strong>&nbsp;(";
				echo $smods;
				echo ")<br />";
				echo "&nbsp;(".$rol.")</span><hr />";
			  
			}
		 }
	   
	   ?>
	  </td>
	</tr>
	<?php
	//check if the department is enable or not
	if($status==1 && $active == 1)
	{
	?>
	<tr>
		<td class="tdstyle txtlabel" valign="top" colspan="2">
			<?php
			//check edit role option
			if($this->mng_auth->CheckDepRole($plaindepid,'r2')==TRUE)
			{
			?>
				<input type="button" class="searchButton" onclick="javascript: popWindow('<?=base_url()?>groups/home_two/groupzones/<?=$depid?>/<?=$groupid?>');" value="<?=$this->lang->line('grp_edit')?>">
				<!--<input type="button" class="searchButton" onclick="javascript: popWindow('<?=base_url()?>groups/home_two/MoveGroupDep/<?=$depid?>/<?=$groupid?>');" value="<?=$this->lang->line('grp_move')?>">-->
			<?php
			}
			//if I have add role
			if($this->mng_auth->CheckDepRole($plaindepid,'r1')==TRUE)
			{
			?>
			<!--<input type="button" class="searchButton" onclick="javascript: popWindow('<?=base_url()?>groups/home_two/AddToNewDep/<?=$depid?>/<?=$groupid?>');" value="<?=$this->lang->line('grp_addtonewdep')?>">-->
			<?php
			}
			if($this->mng_auth->CheckDepRole($plaindepid,'r3')==TRUE)
			{
			 /*
			 * $delbutton
			 */
			?>
		   <?php
			}
			?>
		</td>
	</tr>
	<?php
	}
	?>
</table>
