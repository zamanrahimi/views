<?php
  if($status == "1")
  {
	 $img = "<img src=\"".base_url()."images/department_active.png\" />";
  }
  else
  {
	 $img = "<img src=\"".base_url()."images/department_inactive.png\" />";
  }
?>
<div id="TabbedPanels1" class="TabbedPanels">
  <ul class="TabbedPanelsTabGroup">
	<li class="TabbedPanelsTab" tabindex="0"><?=$img?>&nbsp;<?=$this->lang->line('dep_name')." (".$depname." - ".$code.")";?></li>
 </ul>
	<div class="TabbedPanelsContentGroup">
	  <div class="TabbedPanelsContent" id="div_0" >
		  <table width="100%">
			  <tr>
				  <td>
				  <?php
					//check for the success
					if($this->session->flashdata('msg'))
					{  
					   echo $this->session->flashdata('msg');
					}
					?> 
				  <span class="p5 tx15 boldtext" style="float: <?=$float?>;">
				   <input type="button" class="searchButton" onclick="parent.location='<?=base_url()?>departments/home/details/<?=$encdepid?>/0'" value="<?=$this->lang->line('user_allusers')?>">
				   <input type="button" class="searchButton" onclick="parent.location='<?=base_url()?>groups/home/details/<?=$encdepid?>/0'" value="<?=$this->lang->line('user_allgroups')?>">
				   <input type="button" class="searchButton" onclick="parent.location='<?=base_url()?>departments/home/index'" value="<?=$this->lang->line('dep_list')?>">
				   <?php
				   //check add role of this user
				   if($this->mng_auth->check_my_roles('r1') == true)
				   {
				   ?>
						<input type="button" class="searchButton" onclick="parent.location='<?=base_url()?>departments/home/adddepartment'" value="+<?=$this->lang->line('dep_add')?>" />
				   <?php
				   }
				   ?>
				  </span>
				 </td>
			 </tr>
		 </table> 
		  <div id="searchdiv" style="display: none;">
		  <span class="tx16" onclick="javascript: showhideD('searchdiv','searchdiv2','0');" style="cursor:pointer;">&nbsp;[-]&nbsp;<u><?=$this->lang->line('dep_hide')?></u></span>
		  <br />
		  <br />
		  <table cellpadding="0" cellspacing="0" width="100%" class="table">
			<tr>
			  <td  class="tdstyle txtlabel " valign="top" width="15%">
				 <?=$this->lang->line('dep_name');?>:
			  </td>
			  <td  class="tdstyle txtlabel" valign="top">
			   <span class="tx16"><?=$depname?> - <?=$code?></span>
			  </td>
			</tr>
			
			<tr>
			  <td  class="tdstyle txtlabel" valign="top" width="15%">
				 <?=$this->lang->line('dep_zone');?>:
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
			  <td  class="tdstyle txtlabel" valign="top">
				 <?=$this->lang->line('dep_module');?>:
			  </td>
			  <td  class="tdstyle" valign="top" >
				 
				 <?php
				 //check if there is an object of provinces
				 if($modules)
				 {
					 
					foreach($modules->result() AS $moditem)
					{
						$prs ="";
						echo "<span class=\"tx16\">"."<strong>".$moditem->md_name.":</strong>&nbsp;(";
						//if province is available
						if($submodules)
						{
							foreach($submodules->result() AS $subitem)
							{
							   if($subitem->sm_md_code == $moditem->md_code)
							   { 
								  $prs .=$subitem->sm_name.", ";
							   }
							}
							echo substr($prs,0,strlen($prs)-2);
						}
						echo ")<br />"."</span><hr />";
					}
				 }
			   
			   ?>
				 
			  </td>
			</tr>
			
		  </table>
		  </div>
		   <div id="searchdiv2" style="display: block;" >
			   <span style="cursor:pointer;" class="tx16" onclick="javascript: showhideD('searchdiv','searchdiv2','1');"><strong>&nbsp;[+]&nbsp;<u><?=$this->lang->line('dep_show')?></u></strong></span>
		   </div>
		   <br />
		  <?=$content?>
		 &nbsp;
	  </div>
	</div>
</div>
<!--//tabend-->
<script type="text/javascript">
<!--
   var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1", {defaultTab:0});
-->     
</script>
