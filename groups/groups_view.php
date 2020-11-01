<fieldset><legend class="head"><?=$this->lang->line('grp_details')?></legend>  
<div id="userdetaildivid">
<table cellpadding="0" cellspacing="0" width="100%" class="table">
   <tr>
		<td class="tdstyle txtlabel" valign="top" width="15%">
			<strong><?=$this->lang->line('grp_status')?>:</strong>
		</td>
		<td class="tdstyle">
			<span class="tx16">
			<?php
			  if($active==1)
			  {
				 echo "<img src=\"".base_url()."images/group_active.png\" />&nbsp;&nbsp;<span class=\"tx16 boldtext\">".$this->lang->line("grp_active")."</span>";
			  }
			  else
			  {
				 echo "<img src=\"".base_url()."images/group_disable.png\" />&nbsp;&nbsp;<span class=\"tx16 boldtext\">".$this->lang->line("grp_notactive")."</span>";
			  }
			?>
			</span>
		</td>
	</tr>
	 <tr>
		<td class="tdstyle txtlabel" valign="top" width="15%">
			<strong><?=$this->lang->line('grp_name')?>:</strong>
		</td>
		<td class="tdstyle">
			<span class="tx16"><?=$name?></span>
		</td>
	</tr>
	 <tr>
		<td class="tdstyle txtlabel" valign="top" >
			<strong><?=$this->lang->line('grp_details')?>:</strong>
		</td>
		<td class="tdstyle">
			<span class="tx16"><?=$details?></span>
		</td>
	</tr>
	<tr>
		<td class="tdstyle txtlabel" valign="top">
			<strong><?=$this->lang->line('grp_remarks')?>:</strong>
		</td>
		<td class="tdstyle">
			<span class="tx16"><?=$remarks?></span>
		</td>
	</tr>
	<tr>
   
	  <td class="tdstyle txtlabel" valign="top" colspan="2">
		  <?php
			 //check if the department is enable or not
			 if($status==1)
			 {
				//check enable disable or edit option
				if($this->mng_auth->CheckDepRole($plaindepid,'r2')==TRUE || $this->mng_auth->CheckDepRole($plaindepid,'r6')==TRUE)
				{
				 
			?>    
					<input type="button" class="searchButton" onclick="javascript:create_foo('11','100');load_page('<?=base_url()?>groups/home/editgroup','foo','&depid=<?=$plaindepid?>&ajax=1&groupid=<?=$groupid?>');" value="<?=$this->lang->line('grp_edit')?>" title="<?=$this->lang->line('grp_edit')?>"/>
			<?php
				}
				
			 }
			 else
			 {
				//no edit button
				echo "&nbsp;";
			 }
			?> 
	  </td>
	</tr> 
</table>
</div>
<hr/>
<div id="usergroup">
<table cellpadding="0" cellspacing="0" width="100%" class="table">
	<tr>
	<td  class="tdstyle txtlabel" valign="top"  style="background-color:#cccccc;" width="15%">
		<img src="<?=base_url()?>images/group.png" />
		<strong><?=$this->lang->line('grp_user')?>:</strong> 
	</td>
	 <td  class="tdstyle txtlabel" valign="top"  style="background-color:#cccccc;">  
		<table cellpadding="0" cellspacing="0" width="100%" class="table">
		<?php
		  $grps = "";
		  $userImg = "<img src=\"".base_url()."images/user.png\" />";
		  if($users)
		  {
			 $counter = 1; 
			 $bgcolor = "#EEEEEE";
			 foreach($users->result() AS $gr)
			 {
				if($counter % 2 == 0)
				{
					$bgcolor = "#EEEEEE"; 
				}
				else
				{
					 $bgcolor = "#DDDDDD"; 
				} 
			   echo "<tr bgcolor=\"".$bgcolor."\">";
			   echo "<td class=\"tdstyle txtlabel\" width=\"3%\">".$counter."</td>";
			   echo "<td class=\"tdstyle txtlabel tx15 boldtext\">".$userImg."<a href=\"".base_url()."departments/home/userdetails/".$depid."/".$gr->id."\">".$gr->name."</a></td>";
			   
			   echo "</tr>";
			   $counter ++;
			 }
		  }
		?>
		</table>
		<?php
		
		 //check if the department is enable or not  and alsoe check if the user is active
		 if($status==1 && $active == 1)
		 {
			 
			//check edit role option
			if($this->mng_auth->CheckDepRole($plaindepid,'r2')==TRUE)
			{ 
			?>
				<input type="button" class="searchButton" onclick="javascript:create_foo('11','100');load_page('<?=base_url()?>groups/home/editusers','foo','&ajax=1&depid=<?=$depid?>&groupid=<?=$groupid?>');" value="+/-<?=$this->lang->line('grp_edit')?>" title="<?=$this->lang->line('grp_edit')?>" />
	   <?php
			}
		 }
		?>
	</td>
	</tr>
</table>
</div>

<hr />
<table cellpadding="0" cellspacing="0" width="100%" class="table">
	<tr>
	<td  class="tdstyle txtlabel" valign="top"  style="background-color:#cccccc;" width="15%">
		<img src="<?=base_url()?>images/folder.png" /> 
		<strong><?=$this->lang->line('grp_department')?>:</strong>  
	</td>
	<td class="tdstyle txtlabel" valign="top"  style="background-color:#cccccc;">      
	  <select name="n_menu" id="n_menu" class="selectbox" style="width:300px" onchange="javascript: bring_page('<?=base_url()?>groups/home/depdetails','n_menu','depid','userdepdiv','&groupid=<?=$groupid?>');">
		   <?=$menuoption?>
	  </select>
	</td>
	</tr>
</table>
<div id="userdepdiv">
<table cellpadding="0" cellspacing="0" width="100%" class="table">

	<tr>
	  <td  class="tdstyle txtlabel" valign="top" width="15%">
		 <?=$this->lang->line('grp_zones');?>:
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
		 <?=$this->lang->line('grp_module');?>:
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
			<input type="button" class="searchButton" onclick="javascript: popWindow('<?=base_url()?>groups/home_two/GroupZones/<?=$depid?>/<?=$groupid?>');" value="<?=$this->lang->line('grp_edit')?>">
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
		//check If I have delete option
		if($this->mng_auth->CheckDepRole($plaindepid,'r3')==TRUE)
		{
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
</div>
</fieldset>
