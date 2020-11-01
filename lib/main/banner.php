<<div class="topbarBG" id="topBAR">
</div>
<div class="home_notify">
<?=$info?>  
<a href="<?=base_url()?>home"><img src="<?=base_url()?>images/icon.PNG" border="0" /></a>
</div>
<div class="home_logo">
 <img src="<?=base_url()?>images/af_logo.png" width="80" height="80" border="0" alt="Islamic Republic of Afghanistan"/>
</div>
<div class="home_notifym">
<?=$database?>:&nbsp;<select name="module" id="module" class="selectbox_lang" onchange="javascript: redirect_module(this);" >
    <?php
      if($this->mng_auth->m_i_admin()==TRUE)
      {
         $txt  = "Administrator";  
      }
      else
      {
         $txt  = "-";
      }
    ?>
    <option value="0" disabled="disabled" selected="selected"><?=$txt?></optin>
    <?=$modules?>
  </select>   
  <strong><span style="font-size:14px;"><?=$language?></span></strong>:&nbsp;<select name="lang" id="lang" class="selectbox_lang" onchange="javascript:language_change('<?=base_url()?>home/changelang',this,'<?=current_url()?>');">
   <?=$lang?>
</select>
</div>
<div class="home_slogan">
<span class="slogan">
  <strong><a href="<?=base_url()?>" title="<?=$dbname?>"><?=$dbname?></a></strong>
</span>
</div>
<div class="home_slogandr">
<span class="slogandr">
  <strong><a href="<?=base_url()?>" title="<?=$dbnamedr?>"><?=$dbnamedr?></a></strong>
</span>
</div>
<!-- Top Bar ends here -->