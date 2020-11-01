<?php
//check for the success 
echo "<table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" class=\"table\"><tr><td class=\"tdstyle txtlabel\" valign=\"top\" style=\"background-color:#cccccc;\"><span class=\"p5 redcolor\">".$msg."</span></td></tr></table>";
?> 
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
			<input type="button" class="searchButton" onclick="javascript:create_foo('11','100');load_page('<?=base_url()?>groups/home/editgroup','foo','&ajax=1&groupid=<?=$groupid?>');" value="<?=$this->lang->line('grp_edit')?>" title="<?=$this->lang->line('grp_edit')?>" />
		</td>
		
	</tr>
	
</table>