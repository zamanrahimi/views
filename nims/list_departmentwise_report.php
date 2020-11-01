<div id="depreportdiv">
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
                <select id="report_bydep" name="report_bydep" style="max-width:70px" onchange="javascript:bring_page('<?=base_url()?>dboard/home/etc/departmentwise_report/300000/','report_bydep','depid','depreportdiv','');">
                    <option value="00"><?=$this->lang->line('nims_all')?></option>
                    <?=$filteredRecords?>
                </select>
                </td>
                
            </tr>
</table>
<table cellpadding="0" cellspacing="0" width="100%" class="dashboardtable">
<tr>
<td class="listr" valign="top">
<table cellpadding="2" cellspacing="2" width="100%" class="dashboardtable">
<tr>
<td class="vncellt"><?=$this->lang->line('nims_department')?></td>
<td class="vncellt"><?=$this->lang->line('nims_zone')?></td>
<td class="vncellt"><?=$this->lang->line('nims_report')?></td>
<td class="vncellt"><?=$this->lang->line('nims_view')?></td>
</tr> 
<?php
if($reportrecords)
{                    
    foreach ($reportrecords AS $item):
    ?>
    <tr>
    <td class="listrfirst"><?=$item['dep']?></td>
    <td class="listr"><strong><?=$item['zone']?></strong></td>
    <td class="listr"><strong><?=$item['count']?></strong></td>
    <td class="listr tx15 boldtext"><a href="/nims/search/dashboard/searchDepReport/<?=$item['depid']?>/<?=$item['zone']?>" target="_blank"><img src="<?=base_url()?>images/icon_pass.gif" border="0"> <?=$this->lang->line('nims_details')?></td>
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