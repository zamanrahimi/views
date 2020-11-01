<fieldset><legend class="head"><?=$this->lang->line('user_detail')?></legend>
<div id="userdetaildivid">
<table cellpadding="0" cellspacing="0" width="100%" class="table">
	 
	 <tr>
		<td class="tdstyle txtlabel" valign="top" width="30%">
			<strong><?=$this->lang->line('user_status')?>:</strong>
		</td>
		<td class="tdstyle" width="55%">
			<span class="tx16">
			<?php
			  if($active==1)
			  {
				 echo "<img src=\"".base_url()."images/user_active.png\" />&nbsp;&nbsp;<span class=\"tx16 boldtext\">".$this->lang->line("user_active")."</span>";
			  }
			  else
			  {
				 echo "<img src=\"".base_url()."images/user_disable.png\" />&nbsp;&nbsp;<span class=\"tx16 boldtext\">".$this->lang->line("user_notactive")."</span>";
			  }
			?>
			<?php
			//check for the success
			if($this->session->flashdata('msg'))
			{  
			   echo "<span class=\"redcolor\">".$this->session->flashdata('msg')."</span>";
			}
			?> 
			</span>
		</td>
		<td class="tdstyle txtlabel" valign="middle" valign="top" width="15%" rowspan="3">
		<div class="txbox_div"> 
		 <?=$imagelist?>
		</div>
	   </td>   
	</tr>
	 
	 <tr>
		<td class="tdstyle txtlabel" valign="top" width="15%">
			<strong><?=$this->lang->line('user_name')?>:</strong>
		</td>
		<td class="tdstyle">
			<span class="tx16"><?=$username?></span>
		</td>
	</tr>
	</tr>
	 <tr>
		<td class="tdstyle txtlabel" valign="top" >
			<strong><?=$this->lang->line('user_nickname')?>:</strong>
		</td>
		<td class="tdstyle">
			<span class="tx16"><?=$fname?></span>
		</td>
	</tr>
	<tr>
		<td class="tdstyle txtlabel" valign="top" >
			<strong><?=$this->lang->line('user_phone')?>:</strong>
		</td>
		<td class="tdstyle">
			<span class="tx16"><?=$phone?></span>
		</td>
		<td class="tdstyle" rowspan="1">
			 <input type="button" class="searchButton" onclick="javascript: popWindow('<?=base_url()?>departments/home/editpicture/<?=$depid?>/<?=$userid?>/1');" value="<?=$this->lang->line('user_editpic')?>">
		</td>
	</tr>
	<tr>
		<td class="tdstyle txtlabel" valign="top" >
			<strong><?=$this->lang->line('user_email')?>:</strong>
		</td>
		<td class="tdstyle">
			<span class="tx16"><?=$email?></span>
		</td> 
		<td class="tdstyle txtlabel" valign="middle" width="51%" rowspan="4">
		<div class="txbox_div"> 
		 <?=$idimagelist?>
		</div>
	   </td>   
	</tr>
	<tr>
		<td class="tdstyle txtlabel" valign="top" >
			<strong><?=$this->lang->line('user_rank')?>:</strong>
		</td>
		<td class="tdstyle">
			<span class="tx16"><?=$rank?></span>
		</td>
		
	</tr>
	<tr>
		<td class="tdstyle txtlabel" valign="top" >
			<strong><?=$this->lang->line('user_job')?>:</strong>
		</td>
		<td class="tdstyle">
			<span class="tx16"><?=$job?></span>
		</td>
	</tr>
	
	<tr>
		<td class="tdstyle txtlabel" valign="top" width="15%">
			<strong><?=$this->lang->line('user_defmodule')?>:</strong>
		</td>
		<td class="tdstyle">
			<span class="tx16"><?=$defmod?></span>
		</td>
	</tr>
	
	<tr>
		<td class="tdstyle txtlabel" valign="top">
			<strong><?=$this->lang->line('user_remarks')?>:</strong>
		</td>
		<td class="tdstyle">
			<span class="tx16"><?=$details?></span>
		</td>
		<td class="tdstyle">
			<input type="button" class="searchButton" onclick="javascript: popWindow('<?=base_url()?>departments/home/editpicture/<?=$depid?>/<?=$userid?>/2');" value="<?=$this->lang->line('user_editidpic')?>">
		</td>
	</tr>
	
	<tr>
		<td class="tdstyle txtlabel" valign="top" colspan="3">
		   <?php
			 //check if the department is enable or not
			 if($status==1 && $userid != $this->mng_auth->get_user_id())
			 {
				//check enable disable or edit option
				if($this->mng_auth->CheckDepRole($plaindepid,'r2')==TRUE)
				{
				 
		   ?>	
			<input type="button" class="searchButton" onclick="javascript:create_foo('11','100');load_page('<?=base_url()?>users/home/editpersonal','foo','&depid=<?=$depid?>&ajax=1&userid=<?=$userid?>');" value="<?=$this->lang->line('user_edit')?>" title="<?=$this->lang->line('user_edit')?>" />
			<?php
				}
				else if($this->mng_auth->CheckDepRole($plaindepid,'r6')==TRUE)
				{
				   //if this user has just enable disable role
				   ?>    
					 <input type="button" class="searchButton" onclick="javascript:create_foo('11','100');load_page('<?=base_url()?>users/home/editstatus','foo','&depid=<?=$depid?>&ajax=1&userid=<?=$userid?>');" value="<?=$this->lang->line('user_edit')?>" title="<?=$this->lang->line('user_edit')?>" />
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
<hr />
<div id="usergroup">
<table cellpadding="0" cellspacing="0" width="100%" class="table">
	<tr>
	<td  class="tdstyle txtlabel" valign="top"  style="background-color:#cccccc;" width="15%">
		<img src="<?=base_url()?>images/group.png" />                                                                                                                                       
		<strong><?=$this->lang->line('user_group')?>:</strong> 
	</td>
	 <td  class="tdstyle txtlabel" valign="top"  style="background-color:#cccccc;">  
		 <table cellpadding="0" cellspacing="0" width="100%" class="table">
		<?php
		  $grps = "";
		  if($groups)
		  {
			 $grImg = "<img src=\"".base_url()."images/group_icon.png\" />";  
			 $counter = 1; 
			 $bgcolor = "#EEEEEE";
			 foreach($groups->result() AS $gr)
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
			   echo "<td class=\"tdstyle txtlabel tx15 boldtext\">".$grImg."<a href=\"".base_url()."groups/home/groupsdetails/".$depid."/".$gr->id."\">".$gr->name."</a></td>";
			   
			   echo "</tr>";
			   $counter ++;
			 }
		  }
		?>
		</table>
		<?php
		
		 //check if the department is enable or not  and alsoe check if the user is active
		 if($status==1 && $userid != $this->mng_auth->get_user_id() && $active == 1)
		 {
			 
			//check edit role option
			if($this->mng_auth->CheckDepRole($plaindepid,'r2')==TRUE)
			{ 
			?>
			  <input type="button" class="searchButton" onclick="javascript:create_foo('11','100');load_page('<?=base_url()?>users/home/editgroup','foo','&ajax=1&depid=<?=$depid?>&userid=<?=$userid?>');" value="+/-<?=$this->lang->line('user_edit')?>" title="<?=$this->lang->line('user_edit')?>" />
			<?php
			}
		 }
		?>
	</td>
	</tr>
</table>
</div>
<hr />

<div id="transferduser">
<table cellpadding="0" cellspacing="0" width="100%" class="table">
	<tr>
	<td  class="tdstyle txtlabel" valign="top"  style="background-color:#cccccc;" width="15%">
		<img src="<?=base_url()?>images/user-transfer.png" />                                                                                                                                       
		<strong><?=$this->lang->line('user_tusers')?>:</strong> 
	</td>
	 <td  class="tdstyle txtlabel" valign="top"  style="background-color:#cccccc;">  
		 <table cellpadding="0" cellspacing="0" width="100%" class="table">
		  <?php
		  $grps = "";
		  if($t_users)
		  {
			 $grImg = "<img src=\"".base_url()."images/group_icon.png\" />";  
			 $counter = 1; 
			 $bgcolor = "#EEEEEE";
			 foreach($t_users->result() AS $gr)
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
			   echo "<td class=\"tdstyle txtlabel tx15 boldtext\">".$grImg."<a href=\"".base_url()."users/search/redirectit/".$gr->tid."/1\">".$gr->transfer." (".$gr->dep.")</a></td>";
			   
			   echo "</tr>";
			   $counter ++;
			 }
		  }
		?>
		</table>
		<?php
		//check if the department is enable or not
		 if($status==1 && $userid != $this->mng_auth->get_user_id() && $active == 1)
		 {
			 
			//check edit role option
			if($this->mng_auth->CheckDepRole($plaindepid,'r2')==TRUE)
			{ 
				?>
				<input type="button" class="searchButton" onclick="javascript:create_foo('11','100');load_page('<?=base_url()?>users/home/editusertransfered','foo','&ajax=1&depid=<?=$depid?>&userid=<?=$userid?>');" value="+/-<?=$this->lang->line('user_edit')?>" title="<?=$this->lang->line('user_edit')?>" />
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
		<strong><?=$this->lang->line('user_department')?>:</strong>  
	</td>
	<td  class="tdstyle txtlabel" valign="top"  style="background-color:#cccccc;">  	
		<select name="n_menu" id="n_menu" class="selectbox" style="width:300px" onchange="javascript: bring_page('<?=base_url()?>users/home/depdetails','n_menu','depid','userdepdiv','&userid=<?=$userid?>');">
				   <?=$menuoption?>
		</select>
	</td>
	</tr>
</table>
<div id="userdepdiv">
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
	 if($status==1 && $userid != $this->mng_auth->get_user_id() && $active == 1)
	 {
		?>
		<tr>
			<td class="tdstyle txtlabel" valign="top" colspan="2">
			 <?php
			   //check edit role option
				if($this->mng_auth->CheckDepRole($plaindepid,'r2')==TRUE)
				{
				?>
				  <input type="button" class="searchButton" onclick="javascript: popWindow('<?=base_url()?>departments/home/userzones/<?=$depid?>/<?=$userid?>');" value="<?=$this->lang->line('user_edit')?>">
				  <input type="button" class="searchButton" onclick="javascript: popWindow('<?=base_url()?>users/home/movedep/<?=$depid?>/<?=$userid?>');" value="<?=$this->lang->line('user_move')?>">
				<?php
				}
				//if I have add role
				if($this->mng_auth->CheckDepRole($plaindepid,'r1')==TRUE)
				{
				?>
				  <input type="button" class="searchButton" onclick="javascript: popWindow('<?=base_url()?>users/home/AddToNewDep/<?=$depid?>/<?=$userid?>');" value="<?=$this->lang->line('user_addtonewdep')?>">
				<?php
				}
				//check If I have delete option
				if($this->mng_auth->CheckDepRole($plaindepid,'r3')==TRUE)
				{
				?>
				<?=$delbutton?>
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