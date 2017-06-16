<?php /* Smarty version 3.1.28-dev/21, created on 2017-05-10 09:26:17
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\user\views\header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:245115912c0999d1503_28251649%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'acbed1398d418bd234f127cdbaeba12dac3daac6' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\user\\views\\header.tpl',
      1 => 1489480987,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '245115912c0999d1503_28251649',
  'variables' => 
  array (
    'seo' => 0,
    'base_url' => 0,
    'base_tlp_user' => 0,
    'base_url_user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_5912c099a177c2_96803208',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5912c099a177c2_96803208')) {
function content_5912c099a177c2_96803208 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '245115912c0999d1503_28251649';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['seo']->value['seo_title'];?>
</title>
    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/favicon.ico">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_tlp_user']->value;?>
/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_tlp_user']->value;?>
/css/font-awesome.min.css">	
    <link href="<?php echo $_smarty_tpl->tpl_vars['base_tlp_user']->value;?>
/css/jquery.scrollbar.css" type="text/css" rel="stylesheet" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['base_tlp_user']->value;?>
/css/build.css" type="text/css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['base_tlp_user']->value;?>
/css/style.css" type="text/css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['base_tlp_user']->value;?>
/css/daterangepicker.css" type="text/css" rel="stylesheet"> 
    <link href="<?php echo $_smarty_tpl->tpl_vars['base_tlp_user']->value;?>
/css/slim.min.css" type="text/css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['base_tlp_user']->value;?>
/css/custom.css" type="text/css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['base_tlp_user']->value;?>
/css/cus-responsive.css" type="text/css" rel="stylesheet">
    
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_user']->value;?>
/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_user']->value;?>
/js/jquery.scrollbar.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_user']->value;?>
/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_user']->value;?>
/js/daterangepicker.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_user']->value;?>
/js/moment-with-locales.js"><?php echo '</script'; ?>
>
  
    <?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_user']->value;?>
/js/slim.kickstart.min.js"><?php echo '</script'; ?>
>
	
	<?php echo '<script'; ?>
>
        var base_url      = "<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
";
        var base_tpl_user = "<?php echo $_smarty_tpl->tpl_vars['base_tlp_user']->value;?>
";
        var base_url_user = "<?php echo $_smarty_tpl->tpl_vars['base_url_user']->value;?>
";
    <?php echo '</script'; ?>
>
</head>
<body><?php }
}
?>