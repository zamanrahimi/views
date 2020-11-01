<fieldset><legend class="head"><img src="<?=base_url()?>images/Symbol Search.png"><?=$this->lang->line('dep_ministrysearch')?></legend>
<div id="searchdiv">
<form name="search_form" id="search_form" method="post" action="javascript: load_page_wform('<?=base_url()?>departments/home/search_dep','deplistdivid','search_form');"  />
<table cellpadding="0" cellspacing="0" width="100%">
<tr>      
	<td valign="top" colspan="2"><strong><?=$this->lang->line('user_provinces')?>:</strong>
		<div class="txbox_div">
		<select class="selectbox" id="province" name="province" onchange="bring_page('<?=base_url()?>departments/home/getministry','province','province','minisdivid','&');" class="selectbox" style="width:250px">
			<option value="" selected="selected"><?=$this->lang->line('user_item')?></option>
			   <?=$provopt?>
			</select>
		</div>
	</td>
</tr>
<tr>
    <td colspan="2" width="100%" valign="top"><strong><?=$this->lang->line('dep_ministry')?>:</strong>
       <div id="minisdivid" class="txbox_div">
            <select class="selectbox" id="ministry" name="ministry" style="width:490px"  onchange ="bring_page2drop('<?=base_url()?>departments/home/getdeplistprov','province','ministry','depdivid','&');">
            <option value="" selected="selected"><?=$this->lang->line('user_item')?></option>
               <?=$minisopt?>
            </select>
       </div>
    </td>
</tr>
<tr>
    <td colspan="2" width="100%" valign="top"><strong><?=$this->lang->line('user_department')?>:</strong>
            <div class="txbox_div" id="depdivid">
            <select class="selectbox" id="department" name="department" style="width:490px";?>">
            <option value="" selected="selected"><?=$this->lang->line('user_item')?></option>
            </select>
            </div>
    </td>
</tr>
<tr>
    <td  valign="top"><strong><?=$this->lang->line('dep_name')?>:</strong>
            <div class="txbox_div">
                <input name="name" id="name" value=""  size="30" class="textbox" />
            </div>
    </td>
    <td  valign="top"><strong><?=$this->lang->line('dep_code')?>:</strong>
            <div class="txbox_div">
                <input name="code" id="code" value=""  size="20" class="textbox" />
            </div>
    </td>
</tr>

<tr>
	<td valign="top" width="30%"><strong><?=$this->lang->line('user_status')?>:</strong>
			<div class="txbox_div">
			<select class="selectbox" id="status" name="status" style="width:256px">
			<option value="" selected="selected"><?=$this->lang->line('user_item')?></option>
			<option value="1"><?=$this->lang->line('user_active')?></option>
			<option value="0"><?=$this->lang->line('user_notactive')?></option>
			</select>
			</div>
	</td>
	<td>
 
		<input type="submit" name="search" id="search" class="searchButton" onclick="javascript: load_page_wform('<?=base_url()?>users/search/for_search','userajaxdiv','search_form');" value="<?=$this->lang->line('search')?>" />
		<input type="reset" name="clear" id="clear" class="searchButton" value="<?=$this->lang->line('clean')?>" />    
	</td>
</tr>
</table>
</form>
</div>
</fieldset>

