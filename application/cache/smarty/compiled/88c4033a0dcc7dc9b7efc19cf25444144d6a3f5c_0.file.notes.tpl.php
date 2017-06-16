<?php /* Smarty version 3.1.28-dev/21, created on 2017-05-08 08:52:09
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\admin\views\notes.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:137359101599e623a3_31216050%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88c4033a0dcc7dc9b7efc19cf25444144d6a3f5c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\admin\\views\\notes.tpl',
      1 => 1483770214,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137359101599e623a3_31216050',
  'variables' => 
  array (
    'alert' => 0,
    'msg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_59101599eabc96_08764106',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59101599eabc96_08764106')) {
function content_59101599eabc96_08764106 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '137359101599e623a3_31216050';
?>
<div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['alert']->value;?>
 alert-dismissable">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

</div><?php }
}
?>