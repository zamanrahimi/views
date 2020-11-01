<?=$topdata?>
<div id="userajaxdiv"> 
<fieldset><legend class="head"><img src="<?=base_url()?>images/User-icon.png" />&nbsp;<?=$this->lang->line('user_list')?></legend>
<table cellpadding="0" cellspacing="0" width="100%"> 
	<tr>
		<td class="p5" width="25%">
		  <?=$total?>
		</td>
		<td class="p5" width="40%">
		   <?=$links?>
		</td>
		<td class="p5 redcolor" >
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
		<th class="tdstyledotted txtlabel" width="5%" bgcolor="#DDDDDD">
			<?=$this->lang->line('user_no')?>
		</th>
		<th class="tdstyledotted txtlabel" width="15%" bgcolor="#DDDDDD">
			<?=$this->lang->line('user_name')?>
		</th>     
		<th class="tdstyledotted txtlabel" width="15%" bgcolor="#DDDDDD">
			<?=$this->lang->line('user_nickname')?>
		</th>
		<th class="tdstyledotted txtlabel" width="15%" bgcolor="#DDDDDD">
			<?=$this->lang->line('user_rank')?>
		</th>
		<th class="tdstyledotted txtlabel" width="15%" bgcolor="#DDDDDD">
			<?=$this->lang->line('user_job')?>
		</th>
		<th class="tdstyledotted txtlabel" width="15%" bgcolor="#DDDDDD">
			<?=$this->lang->line('user_status')?>
		</th>
		<th class="tdstyledotted txtlabel" colspan="2" bgcolor="#DDDDDD">
			<?=$this->lang->line('user_operations')?>
		</th>
	</tr>
<?php 
if($userdetail)
{
	$userImg = "<img src=\"".base_url()."images/user.png\" />";
	if($userdetail->num_rows() > 0)
	{
		$i = $page;
		foreach ($userdetail->result() as $item): $i++?>
		<tr onmouseover="this.style.background='#ECE9D8'" onmouseout="this.style.background='#ffffff'">
			<td class="tdstyledotted txtlabel">
				<?=$i?>
			</td>                            
			<td class="tdstyledotted txtlabel">
				<?=$userImg.$item->username?>
			</td>
			<td class="tdstyledotted txtlabel">
				<?=$item->nickname?>
			</td>
			<td class="tdstyledotted txtlabel">
				<?=$item->rank?>
			</td>
			<td class="tdstyledotted txtlabel">
				<?=$item->job?>
			</td>
			
			<td class="tdstyledotted txtlabel">
				<?php
				  if($item->active==1)
				  {
					 echo "<img src=\"".base_url()."images/user_active.png\" /><span class=\"tx16\">".$this->lang->line("user_active")."</span>";
				  }
				  else
				  {
					 echo "<img src=\"".base_url()."images/user_disable.png\" /><span class=\"tx16\">".$this->lang->line("user_notactive")."</span>";
				  }
				?>
			</td>
			
			<td class="tdstyledotted txtlabel tx15 boldtext">
			   <img src="<?=base_url()?>images/search5.gif" />
			   <a href="<?=base_url()?>departments/home/userdetails/<?=$encdepid?>/<?=$item->uid?>" ><?=$this->lang->line('user_view')?></a>
			</td>
			
		</tr>
	<?php endforeach; ?>
	<?php
	}
	?> 
<?php   
}
?>
</table>
</fieldset>
</div>