<style>
 HTML 
 {
	overflow: auto;
	margin: 0px;
 }
</style>
<fieldset><legend class="head"><img src="<?=base_url()?>images/dep_move.png" />&nbsp;<?=$this->lang->line('user_move')?></legend> 
<?php
$dir = "ltr";
//Change the css classes to suit your needs   
$attributes = array('id' => 'user_userform','name'=>'user_userform');
echo form_open('users/home/doedituserdepartment', $attributes); ?>
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
			<?php
			 //check if the departmen and user status is active and user is not me
			 if($status==1 && $userid != $this->mng_auth->get_user_id() && $active == 1)
			 {
			 ?>
				<input type="button" class="searchButton" onclick="javascript:do_it2('user_userform');SelectAll('n_selusers[]');" value="<?=$this->lang->line('user_save')?>" />
			 <?php
			 }
			 else
			 {
			  ?>
			 
				<input type="button" class="searchButton" disabled="disabled" onclick="javascript:do_it2('user_userform');SelectAll('n_selusers[]');" value="<?=$this->lang->line('user_save')?>" />
			 <?php
			 }
			 ?>
			<input type="button" class="searchButton" onclick="closeAndRefresh2('<?=base_url()?>departments/home/userdetails/<?=$encdepid?>/<?=$userid?>')" value="<?=$this->lang->line('user_cancel')?>" />
		</td>
	</tr>
	
	<tr>
		<td class="tdstyle txtlabel">
			<strong><?=$this->lang->line('user_name')?> 
			- <?=$this->lang->line('user_nickname')?></strong>
		</td>
		<td class="tdstyle">
			<span class="tx16"><?=$username." - ".$fname?></span>
		</td>
	</tr>
	
	<tr>
		<td class="tdstyle txtlabel" width="18%">
		
			<strong><?=$this->lang->line('user_fromdep')?> 
			</strong>
			 
			
		</td>
		<td class="tdstyle">
			
			<select name="n_parent" id="n_parent" class="selectbox" style="width:300px" onchange="javascript: bring_page('<?=base_url()?>users/home/depgetusers','n_parent','depid','depusersdiv','&userid=<?=$userid?>');">
				   <?=$menuoption?>
			</select>
			
			
		</td>
	</tr>
	
	<tr>
		<td class="tdstyle txtlabel" width="18%">
			<strong><?=$this->lang->line('user_todep')?> 
			</strong>
		</td>
		<td class="tdstyle">
			<select name="n_parent2" id="n_parent2" class="selectbox" style="width:300px" onchange="javascript: bring_page('<?=base_url()?>users/home/depmovedetails','n_parent2','depid','depmovediv','&userid=<?=$userid?>');">
				  <option value="" selected="selected"><?=$this->lang->line("user_selectdep")?></option>
				   <?=$alldeps?>
			</select>
			<span class="redcolor p3">*</span>
		</td>
	</tr>
	<tr>
		<td class="tdstyle txtlabel" width="18%">
			<strong><?=$this->lang->line('user_transtype')?>
			</strong>
		</td>
		<td class="tdstyle">
			<input type="radio" name="trans_type" id="trans_type" value="1" checked="checked" onclick="javascript: HideShow('depusersdiv','1');"/><span class="tx16"><?=$this->lang->line('user_transfnow')?></span>
			<input type="radio" name="trans_type" id="trans_type" value="2" onclick="javascript: HideShow('depusersdiv','0');"/><span class="tx16"><?=$this->lang->line('user_transflater')?></span>
		</td>
	</tr>

</table>
<hr />
<div id="depusersdiv" style="display: block;">
<table cellpadding="0" cellspacing="0" width="100%" class="table">

	  <tr>
		<td class="tdstyle txtlabel" colspan="3" style="background-color:#DDDDDD;">
		<img src="<?=base_url()?>images/file_transfer.png" />&nbsp;
		<?=$this->lang->line('user_filetransfer')." - ".$depname;?>:</td>
	   </tr>

	  <tr>
	  <td class="tdstyle txtlabel" width="30%"><?=$this->lang->line('user_allusers')?>:</td><td class="tdstyle txtlabel" width="8%">&nbsp;</td><td class="tdstyle txtlabel" ><?=$this->lang->line('user_selusers')?>:</td>
	  </tr>
	  <tr>
	  <td class="tdstyle txtlabel"><?=$users?></td>
	  <td class="tdstyle txtlabel">
	<input name="button2" class="searchButton" type="button" onClick="add_groups('users', 'selusers[]', '1','<?=$this->lang->line("user_nouser")?>')" value="<?=$this->lang->line("user_addgroup")?>&gt;"><br>
	<input name="button" class="searchButton" type="button" onClick="add_groups('users', 'selusers[]', '2','<?=$this->lang->line("user_nouser")?>')" value="&lt;<?=$this->lang->line("user_delgroup")?>&nbsp;">     
	</td>
	   <td class="tdstyle txtlabel"><?=$selectedusers?></td>
	</tr>
</table>
</div>
<div id="depmovediv"></div>
<input type="hidden" name="id" id="id" value="<?=$userid?>" />
<input type="hidden" name="depid"  id="depid"  value="<?=$encdepid?>" />
<?=form_close()?>
</fieldset>