<?php /* Smarty version 3.1.28-dev/21, created on 2017-06-08 06:31:29
         compiled from "C:\xampp\htdocs\customer\aline\application\modules\admin\views\breadcrumb.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:55935938d321f0d158_53999664%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5cf2a2289e68398b8199f811137725e4f75a3e65' => 
    array (
      0 => 'C:\\xampp\\htdocs\\customer\\aline\\application\\modules\\admin\\views\\breadcrumb.tpl',
      1 => 1483514952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55935938d321f0d158_53999664',
  'variables' => 
  array (
    'breadcrumb' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_5938d321f0f0f8_82131409',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5938d321f0f0f8_82131409')) {
function content_5938d321f0f0f8_82131409 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '55935938d321f0d158_53999664';
?>
<h1 class="page-header"><?php echo $_smarty_tpl->tpl_vars['breadcrumb']->value;?>
</h1>
<?php }
}
?>