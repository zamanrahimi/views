<?php
//check for the success
echo "<table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" class=\"table\"><tr><td class=\"tdstyle txtlabel\" valign=\"top\" style=\"background-color:#cccccc;\"><span class=\"p5 redcolor\">".$msg."</span></td></tr></table>";
?> 
<table cellpadding="0" cellspacing="0" width="100%" class="table">
	 
	 <tr>
		<td class="tdstyle txtlabel" valign="top" width="15%">
			<strong><?=$this->lang->line('user_status')?>:</strong>
		</td>
		<td class="tdstyle">
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
			</span>
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
	</tr>
	
	<tr>
		<td class="tdstyle txtlabel" valign="top" colspan="2">
			<input type="button" class="searchButton" onclick="javascript:create_foo('11','100');load_page('<?=base_url()?>users/home/editpersonal','foo','&ajax=1&userid=<?=$userid?>');" value="<?=$this->lang->line('user_edit')?>" title="<?=$this->lang->line('user_edit')?>" />
		</td>
		
	</tr>
	
</table>