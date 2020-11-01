<style>
 HTML 
 {
    overflow: auto;
    margin: 0px;
 }
</style>
<fieldset><legend class="head"><img src="<?=base_url()?>images/group_add.png" />&nbsp;<?=$this->lang->line('grp_addtonewdep')?></legend> 
<?php
//Change the css classes to suit your needs   
$attributes = array('id' => 'grp_form','name'=>'grp_form');
echo form_open('groups/home_two/DoAddNewDep', $attributes); ?>
<table cellpadding="0" cellspacing="0" width="100%" class="table">
    
    <tr>
    <td  class="tdstyle txtlabel" valign="top" colspan="2" style="background-color:#cccccc;">
        <div class="txbox_div">
        <strong><?=$this->lang->line('grp_note');?></strong>
        
    </td>
    </tr>
    <tr>
        <td class="tdstyle" colspan="2" style="background-color:#cccccc;">
            <input type="button" class="searchButton" onclick="javascript: do_it2('grp_form');" value="<?=$this->lang->line('grp_save')?>" />
            <input type="button" class="searchButton" onclick="closeAndRefresh()" value="<?=$this->lang->line('grp_cancel')?>" />
        </td>
    </tr>
    
     <tr>
        <td class="tdstyle txtlabel">
            <strong><?=$this->lang->line('grp_department')?></strong>
        </td>
        <td class="tdstyle">
            <select name="n_menu" id="n_menu" class="selectbox" style="width:350px" onchange="javascript: bring_page('<?=base_url()?>groups/home_two/DepMoveDetailss','n_menu','depid','depmovediv','');" >
                  
                   <option value="" selected="selected"><?=$this->lang->line("grp_selectdep")?></option>
                   
                  <?=$alldeps?> 
            </select>
             <span class="redcolor p3">*</span>
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
</table>
<div id="depmovediv"></div>
<input type="hidden" name="id" id="id" value="<?=$groupid?>" /> 
<input type="hidden" name="depid" id="depid" value="<?=$depid?>"  />
<?=form_close()?>
</fieldset>