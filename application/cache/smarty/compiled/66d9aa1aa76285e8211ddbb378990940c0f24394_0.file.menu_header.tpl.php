<?php /* Smarty version 3.1.28-dev/21, created on 2017-05-10 09:26:17
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\user\views\menu_header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:98685912c099a26057_03772723%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66d9aa1aa76285e8211ddbb378990940c0f24394' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\user\\views\\menu_header.tpl',
      1 => 1489392693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98685912c099a26057_03772723',
  'variables' => 
  array (
    'base_url' => 0,
    'base_url_user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_5912c099aa3ca2_17212373',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5912c099aa3ca2_17212373')) {
function content_5912c099aa3ca2_17212373 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '98685912c099a26057_03772723';
?>
<nav class="navbar opaque-navbar black-navbar">
<div class="container">
<div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar top-bar"></span>
        <span class="icon-bar middle-bar"></span>
        <span class="icon-bar bottom-bar"></span>
    </button>
    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
" class="navbar-brand">
        <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/logo.png" alt="" />
    </a>
</div>
<div id="navbar" class="navbar-collapse collapse">
    <ul class="nav navbar-nav navbar-right">
        <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url_user']->value;?>
">Trang chủ</a>
        </li>
        <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url_user']->value;?>
/dashboard">Dashboard</a>
        </li>
        <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url_user']->value;?>
/setting">Setting</a>
        </li>
    </ul>
</div>
</div>
</nav><?php }
}
?>