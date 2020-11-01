<fieldset><legend class="head"><img src="<?=base_url()?>images/Symbol Search.png"><?=$this->lang->line('group_search')?></legend>
<div id="searchdiv" style="display: block;cursor:pointer;">
<span onclick="javascript: showhideD('searchdiv','searchdiv2','0');"><center><strong>&nbsp;[-]&nbsp;<u><?=$this->lang->line('search_hide')?></u></strong></center></span>
<form name="search_form" id="search_form" method="post" action="javascript: load_page_wform('<?=base_url()?>groups/search/for_search','groupdivid','search_form');"  />
<table cellpadding="0" cellspacing="0" width="100%">
<tr>
	<td colspan="3" width="30%" valign="top"><strong><?=$this->lang->line('user_department')?>:</strong>
			<div class="txbox_div">
			<select class="selectbox" id="department" name="department" style="width:580px">
			<option value="" selected="selected"><?=$this->lang->line('user_item')?></option>
			<?=$depopt?>
			</select>
			</div>
	</td>
</tr>
<tr>
	<td valign="top"><strong><?=$this->lang->line('grp_name')?>:</strong>
			<div class="txbox_div">
			<input class="textbox" id="grp_name" name="grp_name" style="width:256px" type="text" size="25" value="<?=set_value('grp_name')?>" />
			</div>
	</td>
	<td valign="top"><strong><?=$this->lang->line('grp_explanation')?>:</strong>
			<div class="txbox_div">
			<input class="textbox" id="grp_explanation" name="grp_explanation" style="width:256px" type="text" size="25" value="<?=set_value('grp_explanation')?>" />
			</div>
	</td>
	<td valign="top"><strong><?=$this->lang->line('user_status')?>:</strong>
			<div class="txbox_div">
			<select class="selectbox" id="status" name="status" style="width:256px">
			<option value="" selected="selected"><?=$this->lang->line('user_item')?></option>
			<option value="1"><?=$this->lang->line('user_active')?></option>
			<option value="0"><?=$this->lang->line('user_notactive')?></option>
			</select>
			</div>
	</td>
</tr>
<tr>
  <td colspan="3">
 
	<input type="submit" name="search" id="search" class="searchButton" onclick="javascript: load_page_wform('<?=base_url()?>groups/search/for_search','groupdivid','search_form');" value="<?=$this->lang->line('search')?>" />
	<input type="reset" name="clear" id="clear" class="searchButton" value="<?=$this->lang->line('clean')?>" />    
  </td>
</tr>
</table>
</form>
</div>
<div id="searchdiv2" style="display: none; cursor:pointer;">
<span onclick="javascript: showhideD('searchdiv','searchdiv2','1');"><center><strong>&nbsp;[+]&nbsp;<u><?=$this->lang->line('search_show')?></u></strong></center></span>
</div>
</fieldset>

