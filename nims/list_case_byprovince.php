<!--<script type="text/javascript">
setTimeout('refreshWidget("cases_byprovince",<?=$period?>)', <?=$period?>);
</script> -->

<div id="div_loading" style="position:absolute; width:100%; text-align:center; display:none;
 top:100px;">
<img src="<?=base_url()?>images/loading.gif" border=0></div>


<div id="caseprovincediv">

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
                <select id="case_byprovince" name="case_byprovince" onchange="javascript:bring_page('<?=base_url()?>dboard/home/etc/cases_byprovince/300000/','case_byprovince','provincecode','caseprovincediv','');">
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
<th class="vncellt"><?=$this->lang->line('nims_province')?></th>
<th class="vncellt"><?=$this->lang->line('nims_case_quantity')?></th>
<th class="vncellt"><?=$this->lang->line('nims_view')?></th>
</tr>
<?php
if($records_case)
{
foreach ($records_case AS $item):
$page++;
?>
<tr>
<td width="30%" class="listrfirst"><?=$item['name']?></td>
<td width="30%" class="listr"><strong><?=$item['countprovince']?></strong></td>
<td width="30%" class="listr tx15 boldtext"><a href="/nims/search/dashboard/searchCaseByProvince/<?=$item['code']?>" target="_blank"><img src="<?=base_url()?>images/icon_pass.gif" border="0"> <?=$this->lang->line('nims_details')?></td>
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