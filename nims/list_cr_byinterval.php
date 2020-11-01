<?php
$intervals = array("today"      => $this->lang->line('nims_today'),
                    "week"      => $this->lang->line('nims_week'),
                    "month"     => $this->lang->line('nims_month'),
                    "quarter"   => $this->lang->line('nims_quarter'),
                    "sixmonth"  => $this->lang->line('nims_sixmonth'),
                    "1year"     => $this->lang->line('nims_1year'));
?>
<table cellpadding="0" cellspacing="0" width="100%" class="dashboardtable">

<tr>
<td class="listr" valign="top">
<table cellpadding="2" cellspacing="2" width="100%" class="dashboardtable">
<tr>
<td class="vncellt" style="max-width:4px"><?=$this->lang->line('nims_interval')?></td>
<td class="vncellt" style="max-width:22px"><?=$this->lang->line('nims_case_quantity')?></td>
<td class="vncellt" style="max-width:4px"><?=$this->lang->line('nims_view')?></td>
</tr> 
<?php                    
foreach ($cases_by_interval->result() AS $item):
?>
<tr>
<td width="20%" class="listrfirst" style="max-width:10px"><?=$intervals[$item->period]?></td>
<td width="20%" class="listr"><strong><?=$item->count?></strong></td>
<td width="20%" class="listr tx15 boldtext"><a href="/nims/search/dashboard/searchCaseByInterval/<?=$item->period?>" target="_blank"><img src="<?=base_url()?>images/icon_pass.gif" border="0"> <?=$this->lang->line('nims_details')?></td>
</tr>
<?php
endforeach
?>
</table>
</td>

<td class="listr" valign="top">
<table cellpadding="2" cellspacing="2" width="100%" class="dashboardtable">
<tr>
<td class="vncellt" style="max-width:4px"><?=$this->lang->line('nims_interval')?></td>
<td class="vncellt" style="max-width:22px"><?=$this->lang->line('nims_report_quantity')?></td>
<td class="vncellt" style="max-width:4px"><?=$this->lang->line('nims_view')?></td>
</tr>
<?php
foreach ($reports_by_interval->result() AS $item):
?>
<tr>
<td width="20%" class="listrfirst" style="max-width:10px"><?=$intervals[$item->period]?></td>
<td width="20%" class="listr"><strong><?=$item->count?></strong></td>
<td width="20%" class="listr tx15 boldtext"><a href="/nims/search/dashboard/searchReportByInterval/<?=$item->period?>" target="_blank"><img src="<?=base_url()?>images/icon_pass.gif" border="0"> <?=$this->lang->line('nims_details')?></td>
</tr>
<?php
endforeach
?>
</table>
</td>
</tr>
</table>