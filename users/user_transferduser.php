<?php
if($this->mng_auth->get_language() == 'en')
{
    $dir = "ltr";
}
else
{
    $dir = "rtl";
}
?>
<form name="group_form" id="group_form" method="post">
<table cellpadding="0" cellspacing="0" width="100%" class="table">
    <tr>
        <td class="tdstyle txtlabel" width="15%">
            <?=$this->lang->line('user_name')?>
        </td>
        <td class="tdstyle">
         <?=$username?>   
        </td>     
    </tr>
</table>
<hr />
<div id="groupselect">
<table cellpadding="0" cellspacing="0" width="100%" class="table">
      <tr>
      <td class="tdstyle txtlabel" width="40%"><?=$this->lang->line('user_allusers')?>:</td><td class="tdstyle txtlabel">&nbsp;</td><td class="tdstyle txtlabel" width="40%"><?=$this->lang->line('user_selusers')?>:</td>
      </tr>
      <tr>
      <td class="tdstyle txtlabel"><?=$groups?></td>
      <td class="tdstyle txtlabel">
   <!-- <input name="button2" class="searchButton" type="button" onClick="add_groups('groupsList[]', 'selgroups[]', '1','<?=$this->lang->line("user_nogroup")?>');" value="<?=$this->lang->line("user_addgroup")?>&gt;"><br> -->
    <input name="button" class="searchButton" type="button" onClick="add_groups('groupsList[]', 'selgroups[]', '2','<?=$this->lang->line("user_nouser")?>');" value="&lt;<?=$this->lang->line("user_delgroup")?>&nbsp;">     
    </td>
       <td class="tdstyle txtlabel"><?=$selectedgroups?></td>
    </tr>
</table>
</div> 
<input type="hidden" name="id" id="id" value="<?=$userid?>" />
<input type="hidden" name="depid" id="depid" value="<?=$depid?>" />
</form>