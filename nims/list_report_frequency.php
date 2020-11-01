<?php
$intervals = array("0"        => $this->lang->line('nims_daily'),
                    "1"       => $this->lang->line('nims_weekly'),
                    "2"       => $this->lang->line('nims_monthly'),
                    "3"       => $this->lang->line('nims_quarterly'),
                    "4"       => $this->lang->line('nims_sixmonth'),
                    "5"       => $this->lang->line('nims_1year'));
                    
$frequency = array("0"        => "daily_average",
                    "1"       => "weekly_average",
                    "2"       => "monthly_average",
                    "3"       => "quarter_average",
                    "4"       => "sixmonth_average",
                    "5"       => "annual_average");
?>
<div id="reportfrequencydiv">
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
                <select id="report_freq" name="report_freq" style="max-width:70px" onchange="javascript:bring_page('<?=base_url()?>dboard/home/etc/report_frequency/300000/','report_freq','uid','reportfrequencydiv','');">
                    <option value="00"><?=$this->lang->line('nims_all')?></option>
                    <?=$usersdropdown?>
                </select>
                </td>
            </tr>
</table>

<table cellpadding="0" cellspacing="0" width="100%" class="dashboardtable">

<tr>
<td class="listr" valign="top">
<table cellpadding="2" cellspacing="2" width="100%" class="dashboardtable">
<tr>
<td class="vncellt" style="max-width:4px"><?=$this->lang->line('nims_interval')?></td>
<td class="vncellt" style="max-width:22px"><?=$this->lang->line('nims_username')?></td>
<td class="vncellt" style="max-width:4px"><?=$this->lang->line('nims_average')?></td>
</tr> 
<?php
if(is_array($evaluatedaverage))
{
if(count($evaluatedaverage) > 0)
{
for ($i=0; $i<count($intervals); $i++)
{
?>
<tr>
<td width="20%" class="listrfirst" style="max-width:10px"><?=$intervals[$i]?></td>
<td width="20%" class="listr"><strong><?=$evaluatedaverage['username']?></strong></td>
<?php

?>
<td width="20%" class="listr"><strong><?=number_format($evaluatedaverage[$frequency[$i]],2,".","")?></strong></td>

</tr>
<?php
}
}
}
?>
</table>
</td>
</tr>
</table>
</div>