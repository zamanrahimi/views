<div id="maindiv" class="contentdiv"> 

    <center><span style="font-size:25px;font-weight:bold"><?=$this->lang->line('nims_title')?></span></center>
    <hr style="color:#990000;background-color:#990000;height:4px;border:none">
    
    <div> 
        <div>  
<br /> 
<?php   
$attributes = array('id' => 'dashboard_form','name'=>'dashboard_form');
echo form_open('dboard/home/saveSettings', $attributes); ?>

<script language="javascript" type="text/javascript"> 
    // <![CDATA[
    columns = ['col1','col2'];
    // ]]>
</script>
 
 
<div id="widgetcontainer" style="display:none"> 
<div class="contents">
    <div id="content1">
        <h1><?=$this->lang->line('nims_available_widget')?></h1>
        <p>
            <?=$available_widgets ?>
        </p> 
    </div> 
</div>
</div>

<!-- The info part - Start -->
<div id="welcomecontainer" style="display:none"> 
    <div id="welcome-container"> 
        <h1> 
            <div class="xlocation"> 
            <?=$this->lang->line('nims_widget_title')?>
            </div> 
            <div onclick="domTT_close(this);showAllWidgets();" style="float:right;width:8%; cursor:pointer;padding: 5px;" > 
                <img src="<?=base_url()?>dashboard/themes/pfsense_ng/images/icons/icon_close.gif" /> 
            </div> 
            <div style="clear:both;"></div> 
        </h1> 
        <p> 
            <?=$this->lang->line('nims_widget_info')?>            
        </p> 
    </div> 
</div> 
<!-- The info part - Ends -->  

<div class="topicons"> 
<input type="hidden" value="" name="sequence" id="sequence"> 
<img src="<?=base_url()?>dashboard/themes/pfsense_ng/images/icons/icon_plus.gif" alt="Click here to add widgets" style="cursor: pointer;" onmouseup="domTT_activate(this, event, 'content', document.getElementById('content1'), 'type', 'velcro', 'delay', 0, 'fade', 'both', 'fadeMax', 100, 'styleClass', 'niceTitle');" /> 
<img src="<?=base_url()?>dashboard/themes/pfsense_ng/images/icons/icon_info_pkg.gif" alt="Click here for help" style="cursor: help;" onmouseup="hideAllWidgets();domTT_activate(this, event, 'content', document.getElementById('welcome-container'), 'type', 'sticky', 'closeLink', '','delay', 0, 'fade', 'both', 'fadeMax', 100, 'styleClass', 'niceTitle');" /> 

 
&nbsp;&nbsp;&nbsp;
<input id="submit" name="submit" type="submit" style="display:none" onclick="return updatePref();" class="formbtn" value="<?=$this->lang->line('db_save')?>" /> 


<?php
$periodnames = array('0' => $this->lang->line('nims_5seconds'),
                     '1' => $this->lang->line('nims_1minute'),
                     '2' => $this->lang->line('nims_2minute'),
                     '3' => $this->lang->line('nims_3minute'),
                     '4' => $this->lang->line('nims_4minute'),
                     '5' => $this->lang->line('nims_5minute')
                     );
                     
$refreshperiod = array(
    "0" => array('time' => $periodnames[0], 'period' => 5000),
    "1" => array('time' => $periodnames[1], 'period' =>60000),
    "2" => array('time' => $periodnames[2], 'period' =>120000),
    "3" => array('time' => $periodnames[3], 'period' =>180000),
    "4" => array('time' => $periodnames[4], 'period' =>240000),
    "5" => array('time' => $periodnames[5], 'period' =>300000));
?>

<div>
<?=$this->lang->line('nims_select_period')?>
<?php
$periodDropDown = "";
for($i=0; $i<count($refreshperiod); $i++)
{

    if(in_array($period,$refreshperiod[$i]))
    {
       $periodDropDown .= "<option value=\"".$refreshperiod[$i]['period']."\" selected=\"selected\"> ".$refreshperiod[$i]['time']." </option>";
    }
    else
    {
       $periodDropDown .= "<option value=\"".$refreshperiod[$i]['period']."\"> ".$refreshperiod[$i]['time']." </option>"; 
    }  
}
?>
<select name="period" id="period" onchange="javascript:showSave()">  
<?=$periodDropDown?>
</select>
<input type="button" value="<?=$this->lang->line('nims_back')?>" onclick="parent.location='<?=base_url()?>home'" />
</div>
</div>  
<div id="niftyOutter"> 
    <div id="col1" class="col1">
        <?=$widget_col1?>
    </div>
    
    <div id="col2" class="col2">
        <?=$widget_col2?>    
    </div>
    <div style="clear:both;"></div> 
    <div style="clear:both;"></div> 
</div> 
 
<!--
    pfSense_MODULE:    footer
--> 
 

    
    </div> <!-- Content DIV --> 
</div> <!-- Wrapper Div --> 
</div> 
 
<script type="text/javascript"> 
<!--
 
    NiftyCheck();
    Rounded("div#niftyMenu","top bottom","#FFFFFF","#000000","smooth");
    Rounded("div#mainarea","bl br tr","#FFF","#DDDDDD","smooth");
    Rounded("div#boxarea","bl br tl tr","#FFF","#DDDDDD","smooth");
    Rounded("tr#fend","bl br tl tr","#FFF","#990000","smooth");
    Rounded("div#topbox","all","#FFF","#990000","smooth");
 
//-->
 
</script> 
 
        
<script type="text/javascript"> 
    document.observe('dom:loaded', function(in_event)
    {        
        Sortable.create("col1", {tag:'div',dropOnEmpty:true,containment:columns,handle:'widgetheader',constraint:false,only:'widgetdiv',onChange:showSave});    
        Sortable.create("col2", {tag:'div',dropOnEmpty:true,containment:columns,handle:'widgetheader',constraint:false,only:'widgetdiv',onChange:showSave});        
    });
</script> 

<?=form_close()?> 