<?=$topdata?>
<div id="groupdivid">
<fieldset><legend class="head"><img src="<?=base_url()?>images/group_list.png"> <?=$this->lang->line('grp_list')?></legend>
<table cellpadding="0" cellspacing="0"> 
	<tr>
		<td class="p5">
		  <?=$total?>
		</td>
		<td class="p5">
		   <?=$links?>
		</td>
		
		<td class="p5 redcolor">
		   <?php
			//check for the success
			if($this->session->flashdata('msg'))
			{  
			   echo $this->session->flashdata('msg');
			}
			?> 
		</td>
	</tr>
</table>

<table cellpadding="0" cellspacing="0" width="100%" class="tabledottted" border="1">
	<tr>
		<th class="tdstyledotted txtlabel" width="10%" bgcolor="#DDDDDD">
			<?=$this->lang->line('grp_no')?>
		</th>
		<th class="tdstyledotted txtlabel" width="25%" bgcolor="#DDDDDD">
			<?=$this->lang->line('grp_name')?> 
		</th> 
		<th class="tdstyledotted txtlabel" width="25%" bgcolor="#DDDDDD">
			<?=$this->lang->line('grp_explanation')?> 
		</th>     
		<th class="tdstyledotted txtlabel" width="15%" bgcolor="#DDDDDD">
			<?=$this->lang->line('grp_status')?>
		</th>
		<th class="tdstyledotted txtlabel" width="15%" bgcolor="#DDDDDD">
			<?=$this->lang->line('grp_operations')?>
		</th>                                          
	</tr>

<?php 
if($userdetail)
{
	if($userdetail->num_rows() > 0)
	{
		$i = $page;
		foreach ($userdetail->result() as $item): $i++?>
		<tr onmouseover="this.style.background='#ECE9D8'" onmouseout="this.style.background='#ffffff'">
			<td class="tdstyledotted txtlabel">
				<?=$i?>
			</td>
			<td class="tdstyledotted txtlabel">
				<?=$item->name?>
			</td>
			<td class="tdstyledotted txtlabel">
				<?=$item->grp_explane?>
			</td>
			<td class="tdstyledotted txtlabel">
				<?php
				  if($item->active==1)
				  {
					 echo "<img src=\"".base_url()."images/group_active.png\" /><span class=\"tx16\">".$this->lang->line("grp_active")."</span>";
				  }
				  else
				  {
					 echo "<img src=\"".base_url()."images/group_disable.png\" /><span class=\"tx16\">".$this->lang->line("grp_notactive")."</span>";
				  }
				?>
			</td>                              
			<td class="tdstyledotted txtlabel tx15 boldtext">
			<img src="<?=base_url()?>images/search5.gif" />
			<a href="<?=base_url()?>users/search/redirectit/<?=$item->id?>/2"><?=$this->lang->line('grp_dview')?></a>    
			</td>
		</tr>
		<?php endforeach;?> 
<?php   
  }
}
?>
</table>
</fieldset>
</div>