<?php
$intervals = array("today"      => $this->lang->line('nims_today'),
                    "week"      => $this->lang->line('nims_week'),
                    "month"     => $this->lang->line('nims_month'),
                    "quarter"   => $this->lang->line('nims_quarter'),
                    "sixmonth"  => $this->lang->line('nims_sixmonth'),
                    "1year"     => $this->lang->line('nims_1year'));
                    
$periods  = array("1000000470"      => $this->lang->line('nims_normal'),
                    "1000000471"      => $this->lang->line('nims_urgent'),
                    "1000000472"     => $this->lang->line('nims_veryurgent'));
?>
<div id="caseperioddiv">
<table cellpadding="0" cellspacing="0" class="dashboardtable"> 
    <tr>
        <td>
        <span class="p5"><?=$this->lang->line('nims_filter')?>:</span>
        <select id="caseperiod" name="caseperiod" onchange="javascript:bring_page('<?=base_url()?>dboard/home/etc/urgent_case/300000/','caseperiod','periodid','caseperioddiv','');">
            <option value="00"><?=$this->lang->line('nims_all')?></option>
            <?=$casePeriodDropDown?>
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
<td class="vncellt" style="max-width:4px"><?=$this->lang->line('nims_period')?></td>
<td class="vncellt" style="max-width:22px"><?=$this->lang->line('nims_case_quantity')?></td>
<td class="vncellt" style="max-width:4px"><?=$this->lang->line('nims_view')?></td>
</tr> 
<?php 
if($case_by_pr)
{                   
    foreach ($case_by_pr->result() AS $item):
    ?>
        <tr>
        <td width="20%" class="listrfirst" style="max-width:10px"><?=$intervals[$item->period]?></td>
        <td width="20%" class="listrfirst" style="max-width:10px"><?=$periods[$item->id]?></td>
        <td width="20%" class="listr"><strong><?=$item->count?></strong></td>
        <td width="20%" class="listr tx15 boldtext"><a href="/nims/search/dashboard/searchCaseByPriority/<?=$item->id."/".$item->period?>" target="_blank"><img src="<?=base_url()?>images/icon_pass.gif" border="0"> <?=$this->lang->line('nims_details')?></td>
        </tr>
    <?php
    endforeach; 
}
?>
</table>
</td>
</tr>
</table>
</div>