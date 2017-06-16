<?php /* Smarty version 3.1.28-dev/21, created on 2017-06-13 09:45:26
         compiled from "C:\xampp\htdocs\customer\aline\application\modules\admin\views\notes.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:19191593f9816b15a01_13010251%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09224cc65b9b12125215944d0320deed2a757f9c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\customer\\aline\\application\\modules\\admin\\views\\notes.tpl',
      1 => 1497339876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19191593f9816b15a01_13010251',
  'variables' => 
  array (
    'alert' => 0,
    'msg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_593f9816b1b8b1_03083427',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_593f9816b1b8b1_03083427')) {
function content_593f9816b1b8b1_03083427 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19191593f9816b15a01_13010251';
?>
<div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['alert']->value;?>
 alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

</div><?php }
}
?>