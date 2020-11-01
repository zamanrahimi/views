<div id="userajaxdiv">
<fieldset><legend class="head"><img src="<?=base_url()?>images/User-icon.png" />&nbsp;<?=$this->lang->line('user_block_list')?></legend>
<table cellpadding="0" cellspacing="0" width="100%"> 
    <tr>
        <td class="p5" width="25%">
          <?=$total?>
        </td>
        <td class="p5" width="40%">
           <?=$links?>
        </td>
        <td class="p5 redcolor" >
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
            <?=$this->lang->line('user_no')?>
        </th>
        <th class="tdstyledotted txtlabel" width="30%" bgcolor="#DDDDDD">
            <?=$this->lang->line('user_name')?>
        </th>
        <th class="tdstyledotted txtlabel" width="30%" bgcolor="#DDDDDD">
            <?=$this->lang->line('user_nickname')?>
        </th>
        <th colspan="2" class="tdstyledotted txtlabel" width="35%" bgcolor="#DDDDDD">
            <?=$this->lang->line('user_operations')?>
        </th>
</tr>
<?php 
if($block)
{
    $userImg = "<img src=\"".base_url()."images/user.png\" />";
    if($block->num_rows() > 0)
    {
        $i = $page;
        foreach ($block->result() as $item): $i++?>
        <tr onmouseover="this.style.background='#ECE9D8'" onmouseout="this.style.background='#ffffff'">
            <td class="tdstyledotted txtlabel">
                <?=$i?>
            </td> 
            <td class="tdstyledotted txtlabel">
                <?=$item->username?>
            </td>
            <td class="tdstyledotted txtlabel">
                <?=$item->nickname?>
            </td>
            <td class="tdstyledotted txtlabel tx15 boldtext">
               <img src="<?=base_url()?>images/search5.gif" />
               <a href="<?=base_url()?>users/search/redirectit/<?=$item->uid?>/1" ><?=$this->lang->line('user_view')?></a>
            </td>
            <td class="tdstyledotted txtlabel tx15 boldtext">
                <a href="<?=base_url()."users/block_users/redirectit/".$item->uid?>/1" onclick="return confirm('<?=$this->lang->line('delete_confirm')?>')"><u><?=$this->lang->line('user_unblock')?></u></a></label>
            </td>
            </tr>
    <?php endforeach; ?>
    <?php
    }
    ?> 
<?php   
}
?>
</table>
</fieldset>
</div>