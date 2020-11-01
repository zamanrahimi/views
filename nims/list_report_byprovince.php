<div id="reportprovincediv">
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
                <select id="report_byprovince" name="report_byprovince" onchange="javascript:bring_page('<?=base_url()?>dboard/home/etc/reports_byprovince/300000/','report_byprovince','provincecode','reportprovincediv','');">
                    <option value="00"><?=$this->lang->line('nims_all')?></option>
                    <?=$filteredDropDown?>
                </select>
                </td>
            </tr>
</table>

<table cellpadding="0" cellspacing="0" width="100%" class="dashboardtable">
<tr>

<td class="listr" valign="top">                     
<table cellpadding="2" cellspacing="2" width="100%" class="dashboardtable">
<tr>
<td class="vncellt"><?=$this->lang->line('nims_province')?></td>
<td class="vncellt"><?=$this->lang->line('nims_report_quantity')?></td>
<td class="vncellt"><?=$this->lang->line('nims_view')?></td>
</tr>
<?php
if($records_report)
{
foreach ($records_report AS $item):
?>
<tr>
<td width="30%" class="listrfirst"><?=$item['name']?></td>
<td width="30%" class="listr"><strong><?=$item['countprovince']?></strong></td>
<td width="30%" class="listr tx15 boldtext"><a href="/nims/search/dashboard/searchReportByProvince/<?=$item['code']?>" target="_blank"><img src="<?=base_url()?>images/icon_pass.gif" border="0"> <?=$this->lang->line('nims_details')?></td>
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