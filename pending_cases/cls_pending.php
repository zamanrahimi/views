<fieldset><legend class="head"><img src="<?=base_url()?>images/search_icon.png"> <?=$this->lang->line('cls_searchpendings')?></legend>
<table cellpadding="0" cellspacing="0" width="100%">
  <tr>
    <td width="12%">
     <?=$this->lang->line('cls_modules')?>:
    </td>
    <td>
      <select name="search" id="search" class="selectbox" style="width: 450px;" 
       onchange="javascript: bring_page('<?=base_url()?>pending_cases/classified/search','search','id','pendiv','');"
      >
        <option value="0" selected="selected"><?=$this->lang->line('cls_select')?></option>
        <option value="1" ><?=$this->lang->line('cls_apirs')?></option>
        <option value="2" ><?=$this->lang->line('cls_cms')?></option>
      </select>
    </td>
  </tr>
</table>
</fieldset>
<div id="pendiv">
</div>


