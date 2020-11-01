<fieldset><legend class="head"><img src="<?=base_url()?>images/User-icon.png" />&nbsp;<?=$this->lang->line('user_profile')?></legend>
<table cellpadding="0" cellspacing="0" width="100%" class="table">
	 
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
	</tr>
	<tr>
		<td class="tdstyle txtlabel" valign="top" >
			<strong><?=$this->lang->line('user_email')?>:</strong>
		</td>
		<td class="tdstyle">
			<span class="tx16"><?=$email?></span>
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
</table>
</fieldset>
<fieldset><legend class="head"><img src="<?=base_url()?>images/iconserver.PNG" />&nbsp;<?=$this->lang->line('user_module')?></legend>
 <table cellpadding="0" cellspacing="0" width="100%" class="table">
	 
	 <tr>
		<td class="tdstyle txtlabel" valign="top" width="15%">
			<strong><?=$this->lang->line('user_module')?>:</strong>
		</td>
		<td class="tdstyle">
			<span class="tx16"><?php
			 //check if there is an object of provinces
			 if($modules)
			 {
				$i=1; 
				foreach($modules->result() AS $mod)
				{
					echo "<span class=\"tx16\">".$i.". ".$mod->modulname."</span><br />";
					$i++;
				}
			 }
			
			?></span>
		</td>
	</tr>
  </table>
</fieldset>
<fieldset><legend class="head"><img src="<?=base_url()?>images/folder.gif" />&nbsp;<?=$this->lang->line('user_department')?></legend>
 <table cellpadding="0" cellspacing="0" width="100%" class="table">
	 
	 <tr>
		<td class="tdstyle txtlabel" valign="top" width="15%">
			<strong><?=$this->lang->line('user_department')?>:</strong>
		</td>
		<td class="tdstyle">
			<span class="tx16"><?php
			 //check if there is an object of provinces
			 if($departments)
			 {
				$i=1; 
				foreach($departments->result() AS $deps)
				{
					echo "<span class=\"tx16\">"."<img src=\"".base_url()."images/folder_small.png\" > ".$deps->name."</span><br />";
					$i++;
				}
			 }
			
			?></span>
		</td>
	</tr>
  </table>
</fieldset>