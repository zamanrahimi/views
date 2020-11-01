<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title><?=$this->config->item('application_name')?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>css/style_dboard_dr.css" media="all" />  
    
    
    
    <script type="text/javascript" src="<?=base_url()?>dashboard/javascript/niftyjsCode.js"></script> 
    <script type="text/javascript" src="<?=base_url()?>dashboard/themes/pfsense_ng/loader.js"></script> 
    <script type="text/javascript" src="<?=base_url()?>dashboard/javascript/scriptaculous/prototype.js"></script> 
    <script type="text/javascript" src="<?=base_url()?>dashboard/javascript/scriptaculous/scriptaculous.js"></script> 
    <script type="text/javascript" src="<?=base_url()?>dashboard/javascript/scriptaculous/effects.js"></script> 
    <script type="text/javascript" src="<?=base_url()?>dashboard/javascript/scriptaculous/dragdrop.js"></script> 
    <!--<script type="text/javascript" src="<?=base_url()?>dashboard/javascript/global.js"></script>--> 
    <!--<script type="text/javascript" src="<?=base_url()?>dashboard/javascript/index/ajax.js"></script>--> 
    <script type="text/javascript" src="<?=base_url()?>dashboard/javascript/domTT/domLib.js"></script> 
    <script type="text/javascript" src="<?=base_url()?>dashboard/javascript/domTT/domTT.js"></script> 
    <script type="text/javascript" src="<?=base_url()?>dashboard/javascript/domTT/behaviour.js"></script> 
    <script type="text/javascript" src="<?=base_url()?>dashboard/javascript/domTT/fadomatic.js"></script>
    <script type="text/javascript" src="<?=base_url()?>dashboard/javascript/widget.js"></script>
    <script type="text/javascript" src="<?=base_url()?>dashboard/javascript/sorttable.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/drag.js"></script> 
    <!-- Previous headers, just the .js part -->
    
    
    <script type="text/javascript" src="<?=base_url()?>js/core.js"></script>  
    <script type="text/javascript" src="<?=base_url()?>js/ajax_core.js"></script>  
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>css/tree.css"> 
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>css/tab_en.css">
    <!--<script type="text/javascript" src="<?=base_url()?>js/jquery.cookie.js"></script>-->  
    <!--<script type="text/javascript" src="<?=base_url()?>js/jquery.treeview.js"></script> -->   
    <!--<script type="text/javascript" src="<?=base_url()?>js/init.js"></script> -->
    <!--<script type="text/javascript" src="<?=base_url()?>js/tab.js"></script>--> 
    
        <script type="text/JavaScript">
    function timedRefresh(timeoutPeriod) {
    setTimeout("location.reload(true);",timeoutPeriod);
    }
    </script>      
 
</head> 
<body onresize="javascript:windowwidth('maindiv',200,60);" onload="javascript:windowwidth('maindiv',200,60);timedRefresh(<?=$period?>)">
