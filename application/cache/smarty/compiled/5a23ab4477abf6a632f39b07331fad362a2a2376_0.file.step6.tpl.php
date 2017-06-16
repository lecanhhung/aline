<?php /* Smarty version 3.1.28-dev/21, created on 2017-04-20 06:03:00
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\admin\views\tour\step6.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:824358f832f437c2b6_98074308%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a23ab4477abf6a632f39b07331fad362a2a2376' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\admin\\views\\tour\\step6.tpl',
      1 => 1484970420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '824358f832f437c2b6_98074308',
  'variables' => 
  array (
    'action_url' => 0,
    'option' => 0,
    'step' => 0,
    'id' => 0,
    'tour_id' => 0,
    'agency_id' => 0,
    'data_service' => 0,
    'lable' => 0,
    'general' => 0,
    'service' => 0,
    'item' => 0,
    'service_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_58f832f4609684_44809115',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f832f4609684_44809115')) {
function content_58f832f4609684_44809115 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '824358f832f437c2b6_98074308';
?>
<form class="form-horizontal margin-none" id="tourForm" name="tourForm" method="post" action="<?php echo $_smarty_tpl->tpl_vars['action_url']->value;?>
">
	<input type="hidden" name="option" id="option" value="<?php echo $_smarty_tpl->tpl_vars['option']->value;?>
" />
	<input type="hidden" name="step" id="step" value="<?php echo $_smarty_tpl->tpl_vars['step']->value;?>
" />
	<input type="hidden" name="primary" id="primary" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" /> 
	

	<input type="hidden" name="tour_id" value="<?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
">
	<input type="hidden" name="agency_id" value="<?php echo $_smarty_tpl->tpl_vars['agency_id']->value;?>
">
	<input type="hidden" name="option" value="<?php echo $_smarty_tpl->tpl_vars['option']->value;?>
">
	<input type="hidden" name="hidden[id]" value="<?php echo $_smarty_tpl->tpl_vars['data_service']->value['id'];?>
">

	<div class="form-group">
		<label class="control-label text-blue" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_service'];?>
 </label>
	</div>
	<?php $_smarty_tpl->tpl_vars["service"] = new Smarty_Variable($_smarty_tpl->tpl_vars['general']->value['items']['service'], null, 0);?>

	<div class="container">
		<div class="row">
			<ul class="list-inline service">
				<?php
$foreach_0_item_sav['s_item'] = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_from = $_smarty_tpl->tpl_vars['service']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_0_item_sav['item'] = $_smarty_tpl->tpl_vars['item'];
?>
				<?php $_smarty_tpl->tpl_vars["service_name"] = new Smarty_Variable($_smarty_tpl->tpl_vars['item']->value['record']['name'], null, 0);?>
				<li><label for="<?php echo $_smarty_tpl->tpl_vars['service_name']->value;?>
"><input type="checkbox" <?php ob_start();
echo $_smarty_tpl->tpl_vars['service_name']->value;
$_tmp1=ob_get_clean();
if ($_smarty_tpl->tpl_vars['data_service']->value[$_tmp1] == 1) {?>checked="checked"<?php }?> class="form-control" id="<?php echo $_smarty_tpl->tpl_vars['service_name']->value;?>
" name="service[<?php echo $_smarty_tpl->tpl_vars['service_name']->value;?>
]" value="1" >  <?php echo $_smarty_tpl->tpl_vars['lable']->value[$_smarty_tpl->tpl_vars['service_name']->value];?>
</label></li>
				<?php
$_smarty_tpl->tpl_vars['item'] = $foreach_0_item_sav['item'];
}
if ($foreach_0_item_sav['s_item']) {
$_smarty_tpl->tpl_vars['item'] = $foreach_0_item_sav['s_item'];
}
?>
			</ul>
		</div>
		<span id="" class="red valid_service"></span>
	</div>

</form>




<?php }
}
?>