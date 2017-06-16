<?php /* Smarty version 3.1.28-dev/21, created on 2017-04-15 06:04:04
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\admin\views\login\header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1772358f19bb4964439_09442561%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f23997f9c91995dd101a37f67a67f52db0bff60a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\admin\\views\\login\\header.tpl',
      1 => 1484304898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1772358f19bb4964439_09442561',
  'variables' => 
  array (
    'admin_cpanel_title' => 0,
    'base_url' => 0,
    'base_tlp_admin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_58f19bb4980fb7_37384248',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f19bb4980fb7_37384248')) {
function content_58f19bb4980fb7_37384248 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1772358f19bb4964439_09442561';
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7 "> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8 "> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9 "> <![endif]-->
<!--[if gt IE 8]> <html class="ie "> <![endif]-->
<!--[if !IE]><!-->
<html class="">
<!-- <![endif]-->
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['admin_cpanel_title']->value;?>
</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/favicon.ico" />
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
/assets/css/admin/module.admin.stylesheet-complete.sidebar_type.collapse.min.css"
    />
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
	var base_tpl_admin = "<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
";
	
    if ( /*@cc_on!@*/ false && document.documentMode === 10)
    {
        document.documentElement.className += ' ie ie10';
    }
	
    <?php echo '</script'; ?>
>
</head>
<body class=" loginWrapper"><?php }
}
?>