<?php /* Smarty version 3.1.28-dev/21, created on 2017-06-14 05:47:17
         compiled from "C:\xampp\htdocs\customer\aline\application\modules\admin\views\header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:77985940b1c5c13252_07520390%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0ba9a587b9ce3a62d3a69e880f96dd49b50ffb5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\customer\\aline\\application\\modules\\admin\\views\\header.tpl',
      1 => 1497412033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77985940b1c5c13252_07520390',
  'variables' => 
  array (
    'lable' => 0,
    'base_url' => 0,
    'base_url_admin' => 0,
    'base_tlp_admin' => 0,
    'current_control' => 0,
    'current_method' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_5940b1c5c5f444_02411931',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5940b1c5c5f444_02411931')) {
function content_5940b1c5c5f444_02411931 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '77985940b1c5c13252_07520390';
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7 sidebar sidebar-collapse"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8 sidebar sidebar-collapse"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9 sidebar sidebar-collapse"> <![endif]-->
<!--[if gt IE 8]> <html class="ie sidebar sidebar-collapse"> <![endif]-->
<!--[if !IE]><!-->
<html class="sidebar sidebar-collapse">
<!-- <![endif]-->
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['lable']->value['admin_cpanel_title'];?>
</title>
    <!-- Meta -->
    <meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
    
	<!--
	<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/favicon.ico" type="image/x-icon">
	-->
	<?php echo '<script'; ?>

  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"><?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
>
		var base_url = "<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
";
		var base_url_admin = "<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
"; 
		var base_tlp_admin = "<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
"; 
		var current_control = "<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
";
		var current_method  = "<?php echo $_smarty_tpl->tpl_vars['current_method']->value;?>
";
		
		var require_input_field	= "<?php echo stripslashes($_smarty_tpl->tpl_vars['lable']->value['require_input_field']);?>
";
	
    <?php echo '</script'; ?>
>
</head>
<body class=" ">
<!-- Main Container Fluid -->
<div class="container-fluid menu-hidden" id="dashboard"><?php }
}
?>