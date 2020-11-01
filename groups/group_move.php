<style>
 HTML 
 {
    overflow: auto;
    margin: 0px;
 }
</style>
<fieldset><legend class="head"><img src="<?=base_url()?>images/dep_move.png" />&nbsp;<?=$this->lang->line('grp_move')?></legend> 
<?php
$dir = "ltr";
//Change the css classes to suit your needs   
$attributes = array('id' => 'grp_form','name'=>'grp_form');
echo form_open('groups/home_two/DoEditGroupDepartment', $attributes); ?>
<table cellpadding="0" cellspacing="0" width="100%" class="table">
    <tr>
        <td class="tdstyle" colspan="2" style="background-color:#cccccc;">
            <span class="p5 redcolor tx16">
           <?php
            //check for the success
            if($this->session->flashdata('msg'))
            {  
               echo $this->session->flashdata('msg');
            }
            ?> 
            </span>
         
            <input type="button" class="searchButton" onclick="javascript:do_it2('grp_form');SelectAll('n_selusers[]');" value="<?=$this->lang->line('grp_save')?>" />
            <input type="button" class="searchButton" onclick="closeAndRefresh()" value="<?=$this->lang->line('grp_cancel')?>" />
        </td>
    </tr>
    
    <tr>
        <td class="tdstyle txtlabel">
            <strong><?=$this->lang->line('grp_name')?>
        </td>
        <td class="tdstyle">
            <span class="tx16"><?=$grp_name?></span>
        </td>
    </tr>
    
    <tr>
        <td class="tdstyle txtlabel" width="18%">
        
            <strong><?=$this->lang->line('grp_details')?> 
            </strong>
             
            
        </td>
        <td class="tdstyle">
         <span class="tx16"><?=$grp_explanation?></span>  
            
        </td>
    </tr>
    <tr>
        <td class="tdstyle txtlabel" width="18%">
        
            <strong><?=$this->lang->line('grp_fromdep')?> 
            </strong>
             
            
        </td>
        <td class="tdstyle">
            
            <select name="n_parent" id="n_parent" class="selectbox" style="width:300px" onchange="javascript: bring_page('<?=base_url()?>groups/home_two/DepGetGroups','n_parent','depid','depusersdiv','&groupid=<?=$groupid?>');">
             <?=$menuoption?>     
            </select>
            
            
        </td>
    </tr>
    <tr>
        <td class="tdstyle txtlabel" width="18%">
            <strong><?=$this->lang->line('grp_todep')?> 
            </strong>
        </td>
        <td class="tdstyle">
            <select name="n_parent2" id="n_parent2" class="selectbox" style="width:300px" onchange="javascript: bring_page('<?=base_url()?>groups/home_two/GroupDepMoveDetails','n_parent2','depid','depmovediv','&groupid=<?=$groupid?>');">
                  <option value="" selected="selected"><?=$this->lang->line("grp_selectdep")?></option>
                 <?=$alldeps?>  
            </select>
            <span class="redcolor p3">*</span>
        </td>
    </tr>

</table>
<hr />
<div id="depusersdiv">
<table cellpadding="0" cellspacing="0" width="100%" class="table">

      <tr>
        <td class="tdstyle txtlabel" colspan="3" style="background-color:#DDDDDD;">
        <img src="<?=base_url()?>images/file_transfer.png" />&nbsp;
        <?=$this->lang->line('grp_transferuser')." - ".$depname;?>:</td>
      </tr>

      <tr>
      <td class="tdstyle txtlabel" width="30%"><?=$this->lang->line('grp_allusers')?>:</td><td class="tdstyle txtlabel" width="8%">&nbsp;</td><td class="tdstyle txtlabel" ><?=$this->lang->line('grp_selusers')?>:</td>
      </tr>
      <tr>
      <td class="tdstyle txtlabel"><?=$users?></td>
      <td class="tdstyle txtlabel">
    <input name="button2" class="searchButton" type="button" onClick="add_groups('users', 'selusers[]', '1','<?=$this->lang->line("grp_nouser")?>')" value="<?=$this->lang->line("grp_addgroup")?>&gt;"><br>
    <input name="button" class="searchButton" type="button" onClick="add_groups('users', 'selusers[]', '2','<?=$this->lang->line("grp_nouser")?>')" value="&lt;<?=$this->lang->line("grp_delgroup")?>&nbsp;">     
    </td>
       <td class="tdstyle txtlabel"><?=$selectedusers?></td>
    </tr>
</table>
</div>
<div id="depmovediv"></div>
<input type="hidden" name="id" id="id" value="<?=$groupid?>" />
<input type="hidden" name="depid"  id="depid"  value="<?=$encdepid?>" />
<?=form_close()?>
</fieldset>