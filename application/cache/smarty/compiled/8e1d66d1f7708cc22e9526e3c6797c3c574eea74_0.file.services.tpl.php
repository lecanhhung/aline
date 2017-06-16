<?php /* Smarty version 3.1.28-dev/21, created on 2017-04-18 03:25:55
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\home\views\download\services.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2635258f56b23ca5648_55117116%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e1d66d1f7708cc22e9526e3c6797c3c574eea74' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\home\\views\\download\\services.tpl',
      1 => 1492478655,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2635258f56b23ca5648_55117116',
  'variables' => 
  array (
    'lable' => 0,
    'services' => 0,
    'ser' => 0,
    'pos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_58f56b23cc7537_88215501',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f56b23cc7537_88215501')) {
function content_58f56b23cc7537_88215501 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2635258f56b23ca5648_55117116';
?>
<div class="tour-services col-xs-12 col-sm-12 col-md-12 space-2">
    <h3><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_service'];?>
:</h3>
    <ul class="style-check list-inline list-unstyled row">
        <?php
$foreach_0_name_sav['s_item'] = isset($_smarty_tpl->tpl_vars['ser']) ? $_smarty_tpl->tpl_vars['ser'] : false;
$foreach_0_name_sav['s_key'] = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$foreach_0_name_sav['s_name'] = isset($_smarty_tpl->tpl_vars['__foreach_name']) ? $_smarty_tpl->tpl_vars['__foreach_name'] : false;
$_from = $_smarty_tpl->tpl_vars['services']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ser'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ser']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['__foreach_name'] = new Smarty_Variable(array('iteration' => 0));
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['ser']->value) {
$_smarty_tpl->tpl_vars['ser']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_name']->value['iteration']++;
$foreach_0_name_sav['item'] = $_smarty_tpl->tpl_vars['ser'];
?>
        <?php $_smarty_tpl->tpl_vars["pos"] = new Smarty_Variable((isset($_smarty_tpl->tpl_vars['__foreach_name']->value['iteration']) ? $_smarty_tpl->tpl_vars['__foreach_name']->value['iteration'] : null), null, 0);?>
        <li class="col-xs-6 col-sm-6 col-md-4"><?php echo $_smarty_tpl->tpl_vars['lable']->value[$_smarty_tpl->tpl_vars['ser']->value];?>
</li>
        <?php if (($_smarty_tpl->tpl_vars['pos']->value % 2 == 0) && ($_smarty_tpl->tpl_vars['pos']->value > 1)) {?>
        <li class="col-xs-12 col-sm-12 hidden-md hidden-lg divider"></li>
        <?php }?>
        <?php
$_smarty_tpl->tpl_vars['ser'] = $foreach_0_name_sav['item'];
}
if ($foreach_0_name_sav['s_item']) {
$_smarty_tpl->tpl_vars['ser'] = $foreach_0_name_sav['s_item'];
}
if ($foreach_0_name_sav['s_key']) {
$_smarty_tpl->tpl_vars['key'] = $foreach_0_name_sav['s_key'];
}
if ($foreach_0_name_sav['s_name']) {
$_smarty_tpl->tpl_vars['__foreach_name'] = $foreach_0_name_sav['s_name'];
}
?>
    </ul>
</div><?php }
}
?>