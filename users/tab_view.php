<div id="TabbedPanels2" class="TabbedPanels">
  <ul class="TabbedPanelsTabGroup">
	<li class="TabbedPanelsTab" tabindex="0" ><?=$this->lang->line('dep_users');?></li>
	<li class="TabbedPanelsTab" tabindex="1" onclick="parent.location='<?=base_url()?>groups/home/details/<?=$encdepid?>'">
	
	
	<?=$this->lang->line('dep_groups');?></li>
 </ul>
	<div class="TabbedPanelsContentGroup">
	  <div class="TabbedPanelsContent" id="users" >
		 <?=$usercontent?>
	  </div>
	  
	  <div class="TabbedPanelsContent" id="groups" >
		<?=$groupcontent?> 
	  </div>                                           
	  
	</div>
</div>
<!--//tabend-->
<script type="text/javascript">
<!--
   var TabbedPanels2 = new Spry.Widget.TabbedPanels("TabbedPanels2", {defaultTab:<?=$default?>});
-->     
</script>
