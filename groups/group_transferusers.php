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
            <?=$this->lang->line('grp_name')?>
        </td>
        <td class="tdstyle">
            
        </td>     
    </tr>
</table>
<hr />
<div id="userselect">
<table cellpadding="0" cellspacing="0" width="100%" class="table">
      <tr>
      <td class="tdstyle txtlabel" width="40%"><?=$this->lang->line('grp_allusers')?>:</td><td class="tdstyle txtlabel">&nbsp;</td><td class="tdstyle txtlabel" width="40%"><?=$this->lang->line('grp_selusers')?>:</td>
      </tr>
      <tr>
      <td class="tdstyle txtlabel"></td>
      <td class="tdstyle txtlabel">
   <!-- <input name="button2" class="searchButton" type="button" onClick="add_groups('users[]', 'selusers[]', '1','<?=$this->lang->line("grp_nouser")?>')" value="<?=$this->lang->line("grp_addgroup")?>&gt;"><br> -->
    <input name="button" class="searchButton" type="button" onClick="add_groups('users[]', 'selusers[]', '2','<?=$this->lang->line("grp_nouser")?>')" value="&lt;<?=$this->lang->line("grp_delgroup")?>&nbsp;">     
    </td>
       <td class="tdstyle txtlabel"></td>
    </tr>
</table>
</div> 
<input type="hidden" name="id" id="id" value="" />
<input type="hidden" name="depid" id="depid" value="<?=$depid?>" />
</form>