<?php /* Smarty version 3.1.28-dev/21, created on 2017-04-15 06:04:10
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\admin\views\header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:113858f19bbacaec25_23858597%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18e8708b7fe3b31f84be28a4ed06b4749403a52e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\admin\\views\\header.tpl',
      1 => 1483583496,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113858f19bbacaec25_23858597',
  'variables' => 
  array (
    'lable' => 0,
    'base_url' => 0,
    'base_tlp_admin' => 0,
    'base_url_admin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_58f19bbace0e54_12413881',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f19bbace0e54_12413881')) {
function content_58f19bbace0e54_12413881 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '113858f19bbacaec25_23858597';
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
	
    <!-- 
	**********************************************************
	In development, use the LESS files and the less.js compiler
	instead of the minified CSS loaded by default.
	**********************************************************
	<link rel="stylesheet/less" href="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/assets/less/admin/module.admin.stylesheet-complete.sidebar_type.collapse.less" />
	-->
	
    <!--[if lt IE 9]><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/assets/components/library/bootstrap/css/bootstrap.min.css" /><![endif]-->
	
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/assets/css/admin/module.admin.stylesheet-complete.sidebar_type.collapse.min.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/css/custom.css" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/assets/components/library/jquery/jquery.min.js?v=v1.0.3-rc2&sv=v0.0.1.1"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/assets/components/library/jquery/jquery-migrate.min.js?v=v1.0.3-rc2&sv=v0.0.1.1"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/assets/components/library/modernizr/modernizr.js?v=v1.0.3-rc2&sv=v0.0.1.1"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/assets/components/plugins/less-js/less.min.js?v=v1.0.3-rc2&sv=v0.0.1.1"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/assets/components/modules/admin/charts/flot/assets/lib/excanvas.js?v=v1.0.3-rc2"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/assets/components/plugins/browser/ie/ie.prototype.polyfill.js?v=v1.0.3-rc2&sv=v0.0.1.1"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
	var base_url = "<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
";
	var base_tpl_admin = "<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
";
	var base_url_admin = "<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
";
	
    if ( /*@cc_on!@*/ false && document.documentMode === 10)
    {
        document.documentElement.className += ' ie ie10';
    }
	
    <?php echo '</script'; ?>
>
</head>
<body class=" ">
<!-- Main Container Fluid -->
<div class="container-fluid menu-hidden" id="dashboard"><?php }
}
?>