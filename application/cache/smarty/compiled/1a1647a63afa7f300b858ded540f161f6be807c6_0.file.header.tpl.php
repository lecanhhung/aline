<?php /* Smarty version 3.1.28-dev/21, created on 2017-05-26 04:01:56
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\home\views\header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2833959278c94d2cdb0_55286758%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a1647a63afa7f300b858ded540f161f6be807c6' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\home\\views\\header.tpl',
      1 => 1495096093,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2833959278c94d2cdb0_55286758',
  'variables' => 
  array (
    'share' => 0,
    'seo' => 0,
    'base_url' => 0,
    'base_tlp_front' => 0,
    'geo_location' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_59278c94e29896_64190800',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59278c94e29896_64190800')) {
function content_59278c94e29896_64190800 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2833959278c94d2cdb0_55286758';
?>
<!DOCTYPE html>
<html lang="en">

<?php if ($_smarty_tpl->tpl_vars['share']->value) {?>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
<?php } else { ?>
<head>
<?php }?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo stripslashes($_smarty_tpl->tpl_vars['seo']->value['seo_title']);?>
</title>
    <meta name="Description" content="<?php echo stripslashes($_smarty_tpl->tpl_vars['seo']->value['seo_description']);?>
" />
	<meta name="Keywords" content="<?php echo stripslashes($_smarty_tpl->tpl_vars['seo']->value['seo_keyword']);?>
" />
    <?php if ($_smarty_tpl->tpl_vars['share']->value) {?>
    <meta property="fb:app_id" content="<?php echo $_smarty_tpl->tpl_vars['share']->value['app_id'];?>
" /> 
    <meta property="og:type"   content="website" /> 
    <meta property="og:url"    content="<?php echo $_smarty_tpl->tpl_vars['share']->value['url'];?>
" /> 
    <meta property="og:title"  content="<?php echo $_smarty_tpl->tpl_vars['share']->value['title'];?>
" /> 
    <meta property="og:image"  content="<?php echo $_smarty_tpl->tpl_vars['share']->value['image'];?>
" />
    <meta property="og:description"  content="<?php echo stripslashes($_smarty_tpl->tpl_vars['seo']->value['seo_description']);?>
" />
    <?php }?>
	<meta name="google-site-verification" content="bYn80HhXY14QhyS9Y-3kjvS97n7F1m3UmUMetTh3UHk" />
    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="<?php echo $_smarty_tpl->tpl_vars['base_tlp_front']->value;?>
/css/lightslider.css" type="text/css" rel="stylesheet" /> 
    <link href="<?php echo $_smarty_tpl->tpl_vars['base_tlp_front']->value;?>
/css/daterangepicker.css" type="text/css" rel="stylesheet">    
    <link href="<?php echo $_smarty_tpl->tpl_vars['base_tlp_front']->value;?>
/css/jquery.scrollbar.css" type="text/css" rel="stylesheet" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['base_tlp_front']->value;?>
/css/bootstrap-slider.css" type="text/css" rel="stylesheet" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['base_tlp_front']->value;?>
/css/build.css" type="text/css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['base_tlp_front']->value;?>
/css/style.css" type="text/css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['base_tlp_front']->value;?>
/css/custom-css.css" type="text/css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['base_tlp_front']->value;?>
/css/responsive-custom.css" type="text/css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['base_tlp_front']->value;?>
/scss/nav.scss" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

    <?php echo '<script'; ?>
 src="//code.jquery.com/jquery-1.10.2.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_front']->value;?>
/js/lightslider.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_front']->value;?>
/js/lessmore.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_front']->value;?>
/js/moment-with-locales.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_front']->value;?>
/js/daterangepicker.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_front']->value;?>
/js/jquery.scrollbar.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_front']->value;?>
/js/bootstrap-slider.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_front']->value;?>
/js/jquery-ui.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
        var base_url = "<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
";
		var base_tlp_front = "<?php echo $_smarty_tpl->tpl_vars['base_tlp_front']->value;?>
";
        var geo_location = "<?php echo $_smarty_tpl->tpl_vars['geo_location']->value;?>
";
    <?php echo '</script'; ?>
>
</head>
<body><?php }
}
?>