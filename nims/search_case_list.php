<div id="casedivid">
<fieldset><legend class="head"><img src="<?=base_url()?>images/case_list.png"> <?=$this->lang->line('case_list')?></legend>
<table cellpadding="0" cellspacing="0" width="100%" class="dashboardtable"> 
    <tr>
        <td class="p5">
          <?=$total?>
        </td>
        <td class="p5">
           <?=$links?>
        </td>
    </tr>
</table>

<table cellpadding="0" cellspacing="0" width="100%" class="dashboardtable" border="1">
    <tr>
        <th class="tdstyledotted txtlabel" width="4%">
            <?=$this->lang->line('case_no')?>
        </th>
        <th class="tdstyledotted txtlabel" width="25%">
            <?=$this->lang->line('case_num')?>
        </th>
        <th class="tdstyledotted txtlabel" width="10%">
            <?=$this->lang->line('case_type')?> 
        </th> 
        <th class="tdstyledotted txtlabel" width="10%">
            <?=$this->lang->line('case_province')?> 
        </th> 
        <th class="tdstyledotted txtlabel" width="10%">
            <?=$this->lang->line('case_district')?>
        </th>     
        <th class="tdstyledotted txtlabel" width="4%">
            &nbsp;
        </th>
    </tr>

<?php
//print_r ($rankdetails); exit; 
if($records)
{
    if($records->num_rows() > 0)
    {
        $i = $page;
        foreach ($records->result() as $item): $i++?>

        <tr onmouseover="this.style.background='#ECE9D8'" onmouseout="this.style.background='#ffffff'">
            <td class="tdstyledotted txtlabel">
                <?=$i?>
            </td>
            <td class="tdstyledotted txtlabel">
             <?=$item->casenum?> 
            </td>  
            <td class="tdstyledotted txtlabel">
             <?=$item->crimetype?> 
            </td>                            
            <td class="tdstyledotted txtlabel">
             <?=$item->province?>  
            </td>
            <td class="tdstyledotted txtlabel">
             <?=$item->district?>   
            </td>
            <td class="tdstyledotted txtlabel tx15 boldtext">
               <?php
                //check view role
                if($this->mng_auth->check_my_roles('r5') || $this->mng_auth->check_my_roles('r10'))
                {
                ?>    
                <center>
                <a target="blank" href="<?=base_url()."case/home/viewcase/".$this->clean_encrypt->encode($item->caseurn.'='.$item->caseurn)?>">
                <img src="<?=base_url()?>images/case_details.png" border="0">
                 <strong><?=$this->lang->line('nims_view')?></strong>
                 </a>
                </center>
                <?php
                }
                else
                {
                   echo "&nbsp";
                }
                ?>
            </td>
        </tr>
    <?php endforeach; ?> 
<?php
  }
}
?>
</table>
</fieldset>
</div>