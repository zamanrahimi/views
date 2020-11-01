<style>
 HTML 
 {
    overflow: auto;
    margin: 0px;
 }
</style>

<div id="uploadhide" style="display: block;">
<input type="button" class="searchButton"  value="<?=$this->lang->line('user_close')?>"  onclick="javascript: closeAndRefresh();" />
<span onclick="javascript: showhideD('uploadhide','uploadshow','0');" style="cursor:pointer;">&nbsp;[-]&nbsp;<u><strong><?=$this->lang->line('user_hide')?></u></strong>
</span>  
<fieldset><legend class="head"><img src="<?=base_url()?>images/pic_attach.png"><?=$this->lang->line('user_editpic')?></legend> 
<?php
//Change the css classes to suit your needs   
$attributes = array('id' => 'pic_form','name'=>'pic_form');
echo form_open_multipart('departments/home/DoEditPorfilePic/'.$encdepid."/".$userid, $attributes); ?>
<table cellpadding="0" cellspacing="0" width="100%" class="table">
    
    
    <tr>
        <td class="tdstyle txtlabel boldtext" width="20%">
           <?=$this->lang->line('user_name') ?>
        </td>
        <td class="tdstyle">
          <?=$username?>
        </td>
    </tr>
    <tr>
        <td class="tdstyle txtlabel boldtext" width="20%">
           <?=$this->lang->line('user_nickname') ?>
        </td>
        <td class="tdstyle">
             <?=$nickname?>
        </td>
    </tr>
    <tr>
        <td class="tdstyle txtlabel boldtext" width="20%">
           <?=$this->lang->line('user_pic')?>
        </td>
        <td class="tdstyle">
             <input type="file" name="n_picture" id="n_picture" size="20" value="<?=set_value('n_userfile')?>" onchange="validate_all('pic_form')" onblur="validate_all('pic_form')" onkeyup="validate_all('pic_form')"/> 
             <img id="n_pictureIMG" src="<?=base_url()?>images/validationx.PNG" width="19" height="19" style="position:relative; top:4px"/>
        </td>     
    <tr>
        <td class="tdstyle txtlabel boldtext">
            <?=$this->lang->line('user_filetype')?>
        </td>
        <td class="tdstyle txtlabel boldtext" >
            <?=$this->lang->line('user_pictype')?>
        </td>
    </tr>
    <tr>
        <td class="tdstyle" colspan="2">
            <input type="button" class="searchButton" id="upload" name="upload" onclick="javascript:do_it2('pic_form');" value="<?=$this->lang->line('user_upload')?>" />
            
              <input type="button" class="searchButton" onclick="javascript: closeAndRefresh();" value="<?=$this->lang->line('user_cancel')?>" />
             
        </td>
    </tr>
</table>
<input type="hidden" name="e_type" id="e_type" value="<?=$type?>" /> 
<?=form_close()?>

</fieldset>
</div>
<div id="uploadshow" style="display: none;" >
<input type="button" class="searchButton"  value="<?=$this->lang->line('user_close')?>"  onclick="javascript: closeAndRefresh();"/> 
  <span onclick="javascript: showhideD('uploadhide','uploadshow','1');" style="cursor:pointer;"><strong>&nbsp;[+]&nbsp;<u><?=$this->lang->line('user_editpic')?></u></strong></span>
</div>
<div id="main">
<fieldset><legend class="head"><?=$this->lang->line('user_image')?></legend> 
    <table cellpadding="0" cellspacing="0" width="100%" class="table"> 
    <tr>
        <td class="tdstyle">
            <div class="left" >
                  <div class="thumbnails">
                  <?php 
                    if($imagelist)
                    {?>
                    
                        <?=$imagelist?>
                    
                    <?php 
                    }
                    else
                    { ?>
                    <ul>
                        <center><?php echo "<br /><span class=\"p5 redcolor\">".$this->lang->line('user_nopic')."</span>"; ?></center>
                    </ul>
                    <?php 
                    } ?>
                  </div>
                </div>
            </td>
        </tr>
    </table>
</legend>
</div>
<script language="javascript">
     validate_all('pic_form');
</script>       