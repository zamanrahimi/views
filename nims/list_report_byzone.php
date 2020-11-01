<table cellpadding="0" cellspacing="0" width="100%" class="dashboardtable">
<tr>
<td class="listr" valign="top">
<table cellpadding="2" cellspacing="2" width="100%" class="dashboardtable">
<tr>
<td class="vncellt"><?=$this->lang->line('nims_zone')?></td>
<td class="vncellt"><?=$this->lang->line('nims_report_quantity')?></td>
<td class="vncellt"><?=$this->lang->line('nims_view')?></td>
</tr>
<?php
if($records_report_zone)
{
foreach ($records_report_zone->result() AS $item):
?>
<tr valign="top">
<td width="30%" class="listrfirst"><?=$item->zone?></td>
<td width="30%" class="listr"><strong><?=$item->count?></strong></td>
<td width="30%" class="listr tx15 boldtext"><a href="/nims/search/dashboard/searchReportByZone/<?=$item->zone?>" target="_blank"><img src="<?=base_url()?>images/icon_pass.gif" border="0"> <?=$this->lang->line('nims_details')?></td>
</tr>
<?php
endforeach;
}
?>
</table> 
</td>
</tr>
</table>