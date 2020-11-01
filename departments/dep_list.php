<div id="deplistdivid">
<fieldset><legend class="head"><img src="<?=base_url()?>images/group_list.png"> <?=$this->lang->line('dep_list')?></legend>
<table cellpadding="0" cellspacing="0"> 
	<tr>
		<td class="p5">
		  <?=$total?>
		</td>
		<td class="p5">
		   <?=$links?>
		</td>
		
		<td class="p5 redcolor">
		   <?php
           //check add role of this user
           if($this->mng_auth->check_my_roles('r1') == true)
           {
         ?>
            <input type="button" class="searchButton" onclick="parent.location='<?=base_url()?>departments/home/adddepartment'" value="+<?=$this->lang->line('dep_add')?>" />
         <?php
           }
           else
           {
              echo "&nbsp;";
           }
         ?>
           
           <?php
			//check for the success
			if($this->session->flashdata('msg'))
			{  
			   echo $this->session->flashdata('msg');
			}
			?> 
		</td>
        
        
        
	</tr>
</table>

<table cellpadding="0" cellspacing="0" width="100%" class="tabledottted" border="1">
	<tr>
		<th class="tdstyledotted txtlabel" width="5%" bgcolor="#DDDDDD">
			<?=$this->lang->line('grp_no')?>
		</th>
        <th class="tdstyledotted txtlabel" width="25%" bgcolor="#DDDDDD">
            <?=$this->lang->line('dep_ministry')?> 
        </th>        
                <th class="tdstyledotted txtlabel" width="5%" bgcolor="#DDDDDD">
			<?=$this->lang->line('dep_id')?>
		</th>
		<th class="tdstyledotted txtlabel" width="25%" bgcolor="#DDDDDD">
			<?=$this->lang->line('dep_namedr')?> 
		</th> 
		<th class="tdstyledotted txtlabel" width="25%" bgcolor="#DDDDDD">
			<?=$this->lang->line('dep_nameen')?> 
		</th> 
        
		<th class="tdstyledotted txtlabel" width="10%" bgcolor="#DDDDDD">
			<?=$this->lang->line('dep_code')?> 
		</th> 
		<th class="tdstyledotted txtlabel" width="10%" bgcolor="#DDDDDD">
            <?=$this->lang->line('grp_status')?>
        </th>
		<th class="tdstyledotted txtlabel" width="15%" bgcolor="#DDDDDD" colspan="2">
			<?=$this->lang->line('grp_operations')?>
		</th>                                          
	</tr>

<?php 
if($depdetails)
{
	if($depdetails->num_rows() > 0)
	{
		$i = $page;
		foreach ($depdetails->result() as $item): $i++?>
        <?php
         $enc_depid = $this->clean_encrypt->encode($item->org_id.'='.$item->org_id);
        ?>
		<tr onmouseover="this.style.background='#ECE9D8'" onmouseout="this.style.background='#ffffff'">
			<td class="tdstyledotted txtlabel">
				<?=$i?>
			</td>
            <td class="tdstyledotted txtlabel">
                <?=$item->parent?>
            </td>
                        <td class="tdstyledotted txtlabel">
				<?=$item->org_id?>
			</td>
			<td class="tdstyledotted txtlabel">
				<?=$item->org_namedr?>
			</td>
			<td class="tdstyledotted txtlabel">
				<div align="left"><?=$item->org_nameen?></div>
			</td>
			
			<td class="tdstyledotted txtlabel">
				<?=$item->org_code?>
			</td>
            <td class="tdstyledotted txtlabel">
                <?php
                  if($item->org_active==1)
                  {
                     echo "<img src=\"".base_url()."images/group_active.png\" /><span class=\"tx16\">".$this->lang->line("grp_active")."</span>";
                  }
                  else
                  {
                     echo "<img src=\"".base_url()."images/group_disable.png\" /><span class=\"tx16\">".$this->lang->line("grp_notactive")."</span>";
                  }
                ?>
            </td>                             
			<td class="tdstyledotted txtlabel tx15 boldtext">
            <img src="<?=base_url()?>images/search5.gif" />
			  <a href="<?=base_url()?>departments/home/details/<?=$enc_depid?>/<?=$item->org_parent?>" target="_blank"><?=$this->lang->line('grp_dview')?></a> 
	  	  </td>
          <td class="tdstyledotted txtlabel tx15 boldtext">
            <img src="<?=base_url()?>images/department_edit.png" />
              <a href="<?=base_url()?>departments/home/editdepartment/<?=$enc_depid?>/1000000001" target="_blank"><?=$this->lang->line('dep_edit')?></a> 
            </td>
		</tr>
		<?php endforeach;?> 
<?php   
  }
}
?>
</table>
</fieldset>
</div>