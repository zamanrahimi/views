<div id="loggedusersdiv">
<table cellpadding="0" cellspacing="0" class="dashboardtable"> 
            <tr>
                <td class="p5">
                  <?=$total?>
                </td>
                <td class="p5">
                   <?=$links?>
                </td>
                <td>
                <span class="p5"><?=$this->lang->line('nims_filter')?>:</span>
                <select id="loggedusers" name="loggedusers" style="max-width:70px" onchange="javascript:bring_page('<?=base_url()?>dboard/home/filterLoggedUsers','loggedusers','userid','loggedusersdiv','');">
                    <option value="00"><?=$this->lang->line('nims_all')?></option>
                    <?=$bringLoggedUsers?>
                </select>
                </td>
            </tr>
</table>

<table border="0" cellpadding="0" cellspacing="0" width="100%" class="dashboardtable">

<tr>
<td class="listr" valign="top"> 
<table border="0" cellpadding="2" cellspacing="2" width="100%" class="dashboardtable">
<tr>
<td class="vncellt" width="1%"><strong><?=$this->lang->line('nims_username')?></strong></td>
<td class="vncellt" width="1%"><strong><?=$this->lang->line('nims_departments')?></strong></td>
<td class="vncellt" width="1%"><strong><?=$this->lang->line('nims_ipaddress')?></strong></td>
<td class="vncellt" width="1%"><strong><?=$this->lang->line('nims_lastactivity')?></strong></td>
<td class="vncellt" width="1%"><strong><?=$this->lang->line('nims_useragent')?></strong></td>
</tr>
<?php
foreach ($online_users AS $item):
?>
<tr>
<td class="listrfirst" style="max-width:5px"><?=$item['username']?></td>
<td class="listr" style="max-width:2px"><?=$item['departments']?></td>
<td class="listr" style="max-width:8px"><?=$item['ip_address']?></td>
<td class="listr" style="max-width:5px"><?=$item['last_activity']?></td>
<td class="listr" style="max-width:5px"><?=$item['user_agent']?></td>
</tr>
<?php
endforeach
?>
</table> 
</td>
</tr> 
</table>
</div>