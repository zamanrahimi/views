<fieldset><legend class="head"><img src="<?=base_url()?>images/pass_icon.png"> <?=$this->lang->line('editpassword')?></legend> 
<?php
$attributes = array('id' => 'changepassword_form','name'=>'changepassword_form');
echo form_open('home/changepassword/', $attributes);
?>
<table cellpadding="0" cellspacing="0" width="100%" class="table">
	<tr>
		 <td class="tdstyle txtlabel" colspan="2" bgcolor="#ccc">
		   <?php
			//check for the success
			if($this->session->flashdata('msg'))
			{  
			   echo "<font color=\"red\">".$this->session->flashdata('msg')."</font><br />";
			}
			?> 
		   <?=$this->lang->line('user_note')?> <br />
			<font color="red">
			<?=form_error('n_oldpassword')?> 
			<?=form_error('n_newpassword')?> 
			<?=form_error('n_newpassword_confirm')?> 
			</font>  
		 </td>
	</tr>
	<tr>
		<td class="tdstyle txtlabel" width="20%">
			<?= $this->lang->line('oldpassword')?>
		</td>
		<td class="tdstyle">
			<span><input class="textbox" id="n_oldpassword" name="n_oldpassword" type="password" maxlength="150" value="<?=set_value('n_oldpassword')?>" size="30"/>
			
			 <span class="redcolor p3">*</span>
		</td>
	</tr>
	
	<tr>
		<td class="tdstyle txtlabel">
			<?= $this->lang->line('newpassword')?>
		</td>
		<td class="tdstyle">
			<span><input class="textbox" id="n_newpassword" name="n_newpassword" type="password" maxlength="150" value="<?=set_value('n_newpassword')?>" size="30"/>
			 
			 <span class="redcolor p3">*</span>
		</td>
	</tr>
	
	<tr>
		<td class="tdstyle txtlabel">
			<?= $this->lang->line('newpassword_confirm')?>
		</td>
		<td class="tdstyle">
			<span><input class="textbox" id="n_newpassword_confirm" name="n_newpassword_confirm" type="password" maxlength="150" value="<?=set_value('n_newpassword_confirm')?>" size="30" />
			
			 <span class="redcolor p3">*</span>
		</td>
	</tr>
	
	<tr>
		<td class="tdstyle" colspan="2">
			<input type="button" class="searchButton" onclick="javascript:do_it2('changepassword_form');" value="<?=$this->lang->line('change')?>" />
			<input type="button" class="searchButton" onclick="parent.location='<?=base_url()?>home'" value="<?=$this->lang->line('cancel')?>" />
		</td>
	</tr>
	
</table>
	  
<?=form_close()?>
</fieldset>