<?php /* Smarty version 3.1.28-dev/21, created on 2017-05-10 09:26:32
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\user\views\notes.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:260685912c0a886b959_45710190%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '656b3ee5f558c2d5d78d4367906548c4fd0d58da' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\user\\views\\notes.tpl',
      1 => 1489999746,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '260685912c0a886b959_45710190',
  'variables' => 
  array (
    'msg' => 0,
    'alert' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_5912c0a88c2878_98986627',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5912c0a88c2878_98986627')) {
function content_5912c0a88c2878_98986627 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '260685912c0a886b959_45710190';
?>

<?php if ($_smarty_tpl->tpl_vars['msg']->value) {?>
<div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['alert']->value;?>
 alert-dismissable">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

</div>
<?php }
}
}
?>