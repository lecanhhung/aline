<?php /* Smarty version 3.1.28-dev/21, created on 2017-04-20 06:03:10
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\admin\views\tour\step4.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2865658f832fe271590_56333777%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e3abd5ea4872234f8e9259ddab0ce1d59a5e10e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\admin\\views\\tour\\step4.tpl',
      1 => 1485225114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2865658f832fe271590_56333777',
  'variables' => 
  array (
    'action_url' => 0,
    'option' => 0,
    'step' => 0,
    'id' => 0,
    'tour_id' => 0,
    'agency_id' => 0,
    'point' => 0,
    'item' => 0,
    'lable' => 0,
    'key' => 0,
    'base_url_admin' => 0,
    'current_control' => 0,
    'vl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_58f832fe474945_04336070',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f832fe474945_04336070')) {
function content_58f832fe474945_04336070 ($_smarty_tpl) {
if (!is_callable('smarty_function_math')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\function.math.php';

$_smarty_tpl->properties['nocache_hash'] = '2865658f832fe271590_56333777';
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
	<?php
$foreach_0_item_sav['s_item'] = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_from = $_smarty_tpl->tpl_vars['point']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_0_item_sav['item'] = $_smarty_tpl->tpl_vars['item'];
?>
	<input type="hidden" name="hidden[pickup_id][]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['pickup_id'];?>
">
	<?php
$_smarty_tpl->tpl_vars['item'] = $foreach_0_item_sav['item'];
}
if ($foreach_0_item_sav['s_item']) {
$_smarty_tpl->tpl_vars['item'] = $foreach_0_item_sav['s_item'];
}
?>
	<div class="form-group">
		<label class="control-label text-blue" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_pickup_points'];?>
 </label>
		<button type="button" class="btn btn-primary btn_add_pickup pull-right" name="service"><i class="fa fa-fw fa-plus-circle"></i> <?php echo $_smarty_tpl->tpl_vars['lable']->value['add_other'];?>
</button>		
	</div>
	<div class="row pickup-point">

	<?php if (count($_smarty_tpl->tpl_vars['point']->value) > 0) {?>
		<?php
$foreach_1_vl_sav['s_item'] = isset($_smarty_tpl->tpl_vars['vl']) ? $_smarty_tpl->tpl_vars['vl'] : false;
$foreach_1_vl_sav['s_key'] = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_from = $_smarty_tpl->tpl_vars['point']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['vl'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['vl']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['vl']->value) {
$_smarty_tpl->tpl_vars['vl']->_loop = true;
$foreach_1_vl_sav['item'] = $_smarty_tpl->tpl_vars['vl'];
?>
		<?php echo smarty_function_math(array('equation'=>"x + y",'x'=>$_smarty_tpl->tpl_vars['key']->value,'y'=>1,'assign'=>"id"),$_smarty_tpl);?>

		<div class="col-sm-6 pickup" id="pickup-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
			<a  class="close" data-toggle="confirmation" data-placement="left" href="javascript:void(o)" data-href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/removeField/?id=<?php echo $_smarty_tpl->tpl_vars['vl']->value['pickup_id'];?>
&params=pickup"><i class="fa fa-times-circle"></i></a>
			<label class="control-label title" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['pickup_point'];?>
 <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</label>
			<div class="form-group address">
				<input class="form-control add"   value="<?php echo $_smarty_tpl->tpl_vars['vl']->value['address'];?>
" 	name="point[address][]" type="text"   placeholder="<?php echo $_smarty_tpl->tpl_vars['lable']->value['address'];?>
" >
				<span id="valid_address-1" class="red valid_add "></span>
			</div>
			<div class="form-group latitude">
				<input class="form-control lat" value="<?php echo $_smarty_tpl->tpl_vars['vl']->value['latitude'];?>
"  name="point[latitude][]" type="text" placeholder="Lat" value="" >
				<span id="valid_latitude-1" class="red valid_lat"></span>
			</div>
			<div class="form-group longtitude">
				<input class="form-control long" value="<?php echo $_smarty_tpl->tpl_vars['vl']->value['longtitude'];?>
"  name="point[longtitude][]" type="text" placeholder="Lon" value="" >
				<span id="valid_longtitude-1" class="red valid_long"></span>
			</div>	
		</div>
		<?php
$_smarty_tpl->tpl_vars['vl'] = $foreach_1_vl_sav['item'];
}
if ($foreach_1_vl_sav['s_item']) {
$_smarty_tpl->tpl_vars['vl'] = $foreach_1_vl_sav['s_item'];
}
if ($foreach_1_vl_sav['s_key']) {
$_smarty_tpl->tpl_vars['key'] = $foreach_1_vl_sav['s_key'];
}
?>
 	<?php } else { ?>
		<div class="col-sm-6 pickup pick-more" id="pickup-1">
			<a href="#" class="close"><i class="fa fa-times-circle"></i></a>
			<label class="control-label title" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['pickup_point'];?>
 1</label>
			<div class="form-group address">
				<input class="form-control add"   name="point[address][]" type="text"   placeholder="<?php echo $_smarty_tpl->tpl_vars['lable']->value['address'];?>
" >
				<span id="valid_address-1" class="red valid_add "></span>
			</div>
			<div class="form-group latitude">
				<input class="form-control lat"  name="point[latitude][]" type="text" placeholder="Lat" value="" >
				<span id="valid_latitude-1" class="red valid_lat"></span>
			</div>
			<div class="form-group longtitude">
				<input class="form-control long"  name="point[longtitude][]" type="text" placeholder="Lon" value="" >
				<span id="valid_longtitude-1" class="red valid_long"></span>
			</div>	
		</div>
	<?php }?>

	</div>


</form>

<div class="hidden">
	<div class="col-sm-6 pickup pick-more" id="">
		<a href="#" class="close"><i class="fa fa-times-circle"></i></a>
		<label class="control-label title"   for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['pickup_point'];?>
 </label>
		<div class="form-group address">
			<input class="form-control add"   name="point[address][]" type="text"   placeholder="<?php echo $_smarty_tpl->tpl_vars['lable']->value['address'];?>
">
			<span id="valid_address" class="red valid_add"></span>
		</div>
		<div class="form-group latitude">
			<input class="form-control lat"  name="point[latitude][]" type="text" placeholder="Lat" value="" >
			<span id="valid_latitude" class="red valid_lat"></span>
		</div>
		<div class="form-group longtitude">
			<input class="form-control long" name="point[longtitude][]" type="text" placeholder="Lon" value="" >
			<span id="valid_longtitude" class="red valid_long"></span>
		</div>
		
	</div>
</div>
<?php }
}
?>