<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$this->config->item('application_name')?></title>
<link rel="stylesheet" type="text/css" href="<?=base_url()?><?=$this->config->item("css_en")?>">
<script type="text/javascript" src="<?=base_url()?>js/core.js"></script>  
<script type="text/javascript" src="<?=base_url()?>js/ajax_core.js"></script>  
<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/tree.css"> 
<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/tab_en.css"> 
<script type="text/javascript" src="<?=base_url()?>js/jquery-3.0.0.js"></script>       
<!--<script type="text/javascript" src="<?=base_url()?>js/jquery-161.js"></script>-->  
<script type="text/javascript" src="<?=base_url()?>js/jquery.cookie.js"></script>  
<script type="text/javascript" src="<?=base_url()?>js/jquery.treeview.js"></script>    
<script type="text/javascript" src="<?=base_url()?>js/init.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/tab.js"></script>      
<script type="text/javascript" src="<?=base_url()?>js/drag.js"></script>      
<link href="<?=base_url()?>css/select2.min.css" rel="stylesheet" />
<script src="<?=base_url()?>js/select2.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $("#n_parent").select2({dir: "ltr"});
  });
</script>
</head>
<body onresize="javascript:windowwidth('maindiv',200,34);" onload="javascript:windowwidth('maindiv',200,34);">

