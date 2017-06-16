<?php /* Smarty version 3.1.28-dev/21, created on 2017-04-17 03:35:35
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\home\views\blog\ajx-items.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1405058f41be77a9a32_84471948%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73506cfb536cd57916b9f783a62ba70e79c6e049' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\home\\views\\blog\\ajx-items.tpl',
      1 => 1487585158,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1405058f41be77a9a32_84471948',
  'variables' => 
  array (
    'items' => 0,
    'dir_thumb' => 0,
    'item' => 0,
    'base_url' => 0,
    'totalArr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_58f41be7875cf9_06593229',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f41be7875cf9_06593229')) {
function content_58f41be7875cf9_06593229 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '1405058f41be77a9a32_84471948';
?>

<?php
$foreach_0_test_sav['s_item'] = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$foreach_0_test_sav['s_name'] = isset($_smarty_tpl->tpl_vars['__foreach_test']) ? $_smarty_tpl->tpl_vars['__foreach_test'] : false;
$_from = $_smarty_tpl->tpl_vars['items']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['__foreach_test'] = new Smarty_Variable(array('iteration' => 0));
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_test']->value['iteration']++;
$foreach_0_test_sav['item'] = $_smarty_tpl->tpl_vars['item'];
?>
	<?php if ((isset($_smarty_tpl->tpl_vars['__foreach_test']->value['iteration']) ? $_smarty_tpl->tpl_vars['__foreach_test']->value['iteration'] : null) % 3 == 1) {?>
	<div class="row blog">
	<?php }?>
		 <div class="col-md-4">
	        <img src="<?php echo $_smarty_tpl->tpl_vars['dir_thumb']->value;
echo $_smarty_tpl->tpl_vars['item']->value['path_image'];?>
"  width="368" height="243">
	        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
blog/<?php echo $_smarty_tpl->tpl_vars['item']->value['slug'];?>
"><h3><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</h3></a>
	        <div class="meta"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['date_add'],"%d-%m-%Y");?>
</div>
	        <div class="short_des"><p><?php echo $_smarty_tpl->tpl_vars['item']->value['short_description'];?>
</p></div>
	     </div>
	<?php if ((isset($_smarty_tpl->tpl_vars['__foreach_test']->value['iteration']) ? $_smarty_tpl->tpl_vars['__foreach_test']->value['iteration'] : null) % 3 == 0 || (isset($_smarty_tpl->tpl_vars['__foreach_test']->value['iteration']) ? $_smarty_tpl->tpl_vars['__foreach_test']->value['iteration'] : null) == $_smarty_tpl->tpl_vars['totalArr']->value) {?>
	</div>
	<?php }?>     
					
<?php
$_smarty_tpl->tpl_vars['item'] = $foreach_0_test_sav['item'];
}
if ($foreach_0_test_sav['s_item']) {
$_smarty_tpl->tpl_vars['item'] = $foreach_0_test_sav['s_item'];
}
if ($foreach_0_test_sav['s_name']) {
$_smarty_tpl->tpl_vars['__foreach_test'] = $foreach_0_test_sav['s_name'];
}
?>	
<?php }
}
?>