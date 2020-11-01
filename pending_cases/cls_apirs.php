<div id="caseajaxdiv">
<fieldset><legend class="head"><img src="<?=base_url()?>images/case_list.png"> <?=$this->lang->line('cls_apirspending')?></legend>
<table cellpadding="0" cellspacing="0" width="100%"> 
    <tr>
        <td class="p5">
         <?=$total?> 
        </td>
        <td class="p5">
         <?=$links?> 
        </td>
        <td class="p5 redcolor">
           <?php
            //check for the success
            if($this->session->flashdata('msg'))
            {  
               echo $this->session->flashdata('msg');
            }
            ?> 
        </td>
    </tr>
</table>

<table cellpadding="0" cellspacing="0" width="100%" class="tabledottted" border="1">
    <tr>
        <th class="tdstyledotted txtlabel" width="4%">
            <?=$this->lang->line('cls_no')?>
        </th>
        <th class="tdstyledotted txtlabel" width="25%">
            <?=$this->lang->line('cls_casenum')?>
        </th>
        <th class="tdstyledotted txtlabel" width="17%">
            <?=$this->lang->line('cls_casetype')?> 
        </th> 
        <th class="tdstyledotted txtlabel" width="17%">
            <?=$this->lang->line('cls_caseprovince')?> 
        </th> 
        <th class="tdstyledotted txtlabel" width="17%">
            <?=$this->lang->line('cls_casedistrict')?>
        </th>     
        <th class="tdstyledotted txtlabel">
            <?=$this->lang->line('cls_operations')?>
        </th>
    </tr>
<?php
//print_r ($rankdetails); exit; 
if($detail)
{
if($detail->num_rows() > 0)
{
    $i = $page;
    foreach ($detail->result() as $item): $i++?>

        <tr onmouseover="this.style.background='#ECE9D8'" onmouseout="this.style.background='#ffffff'">
            <td class="tdstyledotted txtlabel">
             <?=$i?>  
            </td>
            <td class="tdstyledotted txtlabel">
            <?=$item->casenumber?> 
            </td>  
            <td class="tdstyledotted txtlabel">
            <?=$item->crime?> 
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
                <a href="<?=base_url()."case/home/viewcase/"?>">
                <img src="<?=base_url()?>images/cls_pending.png" border="0">
                 <strong><?=$this->lang->line('case_butview')?></strong>
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