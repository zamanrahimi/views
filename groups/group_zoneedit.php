<style>
 HTML 
 {
    overflow: auto;
    margin: 0px;
 }
</style>
<fieldset><legend class="head"><img src="<?=base_url()?>images/group_edit.png" />&nbsp;<?=$this->lang->line('grp_editdep')?></legend> 
<?php
$dir = "ltr";
//Change the css classes to suit your needs   
$attributes = array('id' => 'grp_zoneform','name'=>'grp_zoneform');
echo form_open('groups/home_two/doeditgroupzone', $attributes); ?>
<table cellpadding="0" cellspacing="0" width="100%" class="table">
    <tr>
        <td class="tdstyle" colspan="2" style="background-color:#cccccc;">
            <span class="p5 redcolor">
           <?php
            //check for the success
            if($this->session->flashdata('msg'))
            {  
               echo $this->session->flashdata('msg');
            }
            ?> 
            </span>
         
            <input type="button" class="searchButton" onclick="javascript:do_it2('grp_zoneform');" value="<?=$this->lang->line('grp_save')?>" />
            <input type="button" class="searchButton" onclick="closeAndRefresh();" value="<?=$this->lang->line('grp_cancel')?>" />
        </td>
    </tr>
    
    
    <tr>
        <td class="tdstyle txtlabel" width="18%">
            <strong><?=$this->lang->line('grp_department')?> 
            </strong>
        </td>
        <td class="tdstyle">
            <select name="n_parent" id="n_parent" class="selectbox" style="width:300px" onchange="javascript: redirect_dropdownurl_str('<?=base_url()?>groups/home_two/GroupZones','n_parent','<?=$groupid?>');">
            <?=$menuoption?>       
            </select>
        </td>
    </tr>
    
    <tr>
        <td class="tdstyle txtlabel">
            <strong><?=$this->lang->line('grp_name')?></strong>
        </td>
        <td class="tdstyle">
         <?=$grp_name?>   
        </td>
    </tr>
    
    <tr>
        <td class="tdstyle txtlabel" style="background-color:#DDDDDD;">
            <strong><?=$this->lang->line('grp_zone')?></strong>
        </td>
        <td class="tdstyle" style="background-color:#DDDDDD;">
         <?=$zone_opt?>  
        </td>
    </tr>
    
    <tr>
        <td class="tdstyle txtlabel">
            <strong><?=$this->lang->line('grp_province')?></strong>
        </td>
        <td class="tdstyle" >
         <?=$provinces?>   
        </td>
    </tr>
    
    <tr>
        <td class="tdstyle txtlabel" style="background-color:#DDDDDD;">
            <strong><?=$this->lang->line('grp_module')?></strong>
        </td>
        <td class="tdstyle" style="background-color:#DDDDDD;">
        <?=$modules?>    
        </td>
    </tr>
    
     <tr>
        <td class="tdstyle txtlabel">
            <strong><?=$this->lang->line('grp_submodule')?></strong>
        </td>
        <td class="tdstyle" >
         <?=$submodules?>   
        </td>
    </tr>
    
    <tr>
        <td class="tdstyle txtlabel">
            <strong><?=$this->lang->line('grp_roles')?></strong>
        </td>
        <td class="tdstyle">
        <?=$roles?>   
        </td>
    </tr>
    <tr>
        <td class="tdstyle" colspan="2" style="background-color:#cccccc;">
            <input type="button" class="searchButton" onclick="javascript:do_it2('grp_zoneform');" value="<?=$this->lang->line('grp_save')?>" />
            <input type="button" class="searchButton" onclick="closeAndRefresh();" value="<?=$this->lang->line('grp_cancel')?>" />
        </td>
    </tr>
</table>
<input type="hidden" name="id" id="id" value="<?=$groupid?>" />
<input type="hidden" name="depid"  id="depid"  value="<?=$encdepid?>" />
<?=form_close()?>
</fieldset>