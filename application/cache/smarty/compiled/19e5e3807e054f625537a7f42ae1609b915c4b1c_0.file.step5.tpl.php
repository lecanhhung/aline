<?php /* Smarty version 3.1.28-dev/21, created on 2017-04-21 05:15:36
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\admin\views\tour\step5.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2470958f97958a51661_51484535%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19e5e3807e054f625537a7f42ae1609b915c4b1c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\admin\\views\\tour\\step5.tpl',
      1 => 1485225700,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2470958f97958a51661_51484535',
  'variables' => 
  array (
    'action_url' => 0,
    'option' => 0,
    'step' => 0,
    'id' => 0,
    'tour_id' => 0,
    'agency_id' => 0,
    'data_hotel' => 0,
    'item' => 0,
    'lable' => 0,
    'general' => 0,
    'key' => 0,
    'base_url_admin' => 0,
    'current_control' => 0,
    'vl' => 0,
    'hotel' => 0,
    'hotel_id' => 0,
    'hotel_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_58f97958b964b6_03328593',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f97958b964b6_03328593')) {
function content_58f97958b964b6_03328593 ($_smarty_tpl) {
if (!is_callable('smarty_function_math')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\function.math.php';

$_smarty_tpl->properties['nocache_hash'] = '2470958f97958a51661_51484535';
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
$foreach_0_name_sav['s_item'] = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$foreach_0_name_sav['s_key'] = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$foreach_0_name_sav['s_name'] = isset($_smarty_tpl->tpl_vars['__foreach_name']) ? $_smarty_tpl->tpl_vars['__foreach_name'] : false;
$_from = $_smarty_tpl->tpl_vars['data_hotel']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_0_name_sav['item'] = $_smarty_tpl->tpl_vars['item'];
?>
		<input type="hidden" name="hidden[hotel_id][]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['hotel_id'];?>
">
	<?php
$_smarty_tpl->tpl_vars['item'] = $foreach_0_name_sav['item'];
}
if ($foreach_0_name_sav['s_item']) {
$_smarty_tpl->tpl_vars['item'] = $foreach_0_name_sav['s_item'];
}
if ($foreach_0_name_sav['s_key']) {
$_smarty_tpl->tpl_vars['key'] = $foreach_0_name_sav['s_key'];
}
if ($foreach_0_name_sav['s_name']) {
$_smarty_tpl->tpl_vars['__foreach_name'] = $foreach_0_name_sav['s_name'];
}
?>

	<div class="form-group">
		<label class="control-label text-blue" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_hotel'];?>
 </label>
		<button type="button" class="btn btn-primary btn_add_hotel pull-right" name="service"><i class="fa fa-fw fa-plus-circle"></i> <?php echo $_smarty_tpl->tpl_vars['lable']->value['add_other'];?>
</button>		
	</div>

	<?php $_smarty_tpl->tpl_vars["hotel"] = new Smarty_Variable($_smarty_tpl->tpl_vars['general']->value['items']['hotel'], null, 0);?>

	<div class="row tour-hotel">
	<?php if (count($_smarty_tpl->tpl_vars['data_hotel']->value) > 0) {?>
		<?php
$foreach_1_name_sav['s_item'] = isset($_smarty_tpl->tpl_vars['vl']) ? $_smarty_tpl->tpl_vars['vl'] : false;
$foreach_1_name_sav['s_key'] = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$foreach_1_name_sav['s_name'] = isset($_smarty_tpl->tpl_vars['__foreach_name']) ? $_smarty_tpl->tpl_vars['__foreach_name'] : false;
$_from = $_smarty_tpl->tpl_vars['data_hotel']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['vl'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['vl']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['vl']->value) {
$_smarty_tpl->tpl_vars['vl']->_loop = true;
$foreach_1_name_sav['item'] = $_smarty_tpl->tpl_vars['vl'];
?>
		        <?php echo smarty_function_math(array('equation'=>"x + y",'x'=>$_smarty_tpl->tpl_vars['key']->value,'y'=>1,'assign'=>"id"),$_smarty_tpl);?>

			<div class="col-sm-6 hotel" id="hotel-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
				<a  class="close" data-toggle="confirmation" data-placement="left" href="javascript:void(o)" data-href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/removeField/?id=<?php echo $_smarty_tpl->tpl_vars['vl']->value['hotel_id'];?>
&params=hotel"><i class="fa fa-times-circle"></i></a>
				<label class="control-label title" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['hotel_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</label>
				<div class="form-group">
					<input class="form-control name" value="<?php echo $_smarty_tpl->tpl_vars['vl']->value['name'];?>
"   name="hotel[name][]" type="text"   placeholder="<?php echo $_smarty_tpl->tpl_vars['lable']->value['hotel_name'];?>
">
					<span class="red valid_name"></span>
				</div>
				<div class="form-group">
				
					<select name="hotel[stars][]" class="form-control stars">
						<?php
$foreach_2_item_sav['s_item'] = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_from = $_smarty_tpl->tpl_vars['hotel']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_2_item_sav['item'] = $_smarty_tpl->tpl_vars['item'];
?>
						<?php $_smarty_tpl->tpl_vars["hotel_name"] = new Smarty_Variable($_smarty_tpl->tpl_vars['item']->value['record']['name'], null, 0);?>
						<?php $_smarty_tpl->tpl_vars["hotel_id"] = new Smarty_Variable($_smarty_tpl->tpl_vars['item']->value['record']['id'], null, 0);?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['hotel_id']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['vl']->value['stars'] == $_smarty_tpl->tpl_vars['hotel_id']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['hotel_name']->value;?>
</option>
						<?php
$_smarty_tpl->tpl_vars['item'] = $foreach_2_item_sav['item'];
}
if ($foreach_2_item_sav['s_item']) {
$_smarty_tpl->tpl_vars['item'] = $foreach_2_item_sav['s_item'];
}
?>

					</select>
					<span class="red valid_stars "></span>
				</div>
				
				<div class="form-group address">
					<input class="form-control add" value="<?php echo $_smarty_tpl->tpl_vars['vl']->value['address'];?>
"   name="hotel[address][]" type="text"   placeholder="<?php echo $_smarty_tpl->tpl_vars['lable']->value['address'];?>
" >
					<span id="" class="red valid_add "></span>
				</div>
				<div class="form-group latitude">
					<input class="form-control lat" value="<?php echo $_smarty_tpl->tpl_vars['vl']->value['latitude'];?>
"  name="hotel[latitude][]" type="text" placeholder="Lat" value="" >
					<span id="" class="red valid_lat"></span>
				</div>
				<div class="form-group longtitude">
					<input class="form-control long" value="<?php echo $_smarty_tpl->tpl_vars['vl']->value['longtitude'];?>
"  name="hotel[longtitude][]" type="text" placeholder="Long" value="" >
					<span id="" class="red valid_long"></span>
				</div>

			</div>
		<?php
$_smarty_tpl->tpl_vars['vl'] = $foreach_1_name_sav['item'];
}
if ($foreach_1_name_sav['s_item']) {
$_smarty_tpl->tpl_vars['vl'] = $foreach_1_name_sav['s_item'];
}
if ($foreach_1_name_sav['s_key']) {
$_smarty_tpl->tpl_vars['key'] = $foreach_1_name_sav['s_key'];
}
if ($foreach_1_name_sav['s_name']) {
$_smarty_tpl->tpl_vars['__foreach_name'] = $foreach_1_name_sav['s_name'];
}
?>
		
	<?php } else { ?>
		<div class="col-sm-6 hotel hotel-more" id="hotel-1">
			<a href="#" class="close"><i class="fa fa-times-circle"></i></a>
			<label class="control-label title" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['hotel_name'];?>
 1</label>
			<div class="form-group">
				<input class="form-control name"   name="hotel[name][]" type="text"   placeholder="<?php echo $_smarty_tpl->tpl_vars['lable']->value['hotel_name'];?>
">
				<span class="red valid_name"></span>
			</div>
			<div class="form-group">
				<select name="hotel[stars][]" class="form-control stars">
					<?php
$foreach_3_item_sav['s_item'] = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_from = $_smarty_tpl->tpl_vars['hotel']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_3_item_sav['item'] = $_smarty_tpl->tpl_vars['item'];
?>
					<?php $_smarty_tpl->tpl_vars["hotel_name"] = new Smarty_Variable($_smarty_tpl->tpl_vars['item']->value['record']['name'], null, 0);?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['hotel_name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['hotel_name']->value;?>
</option>
					<?php
$_smarty_tpl->tpl_vars['item'] = $foreach_3_item_sav['item'];
}
if ($foreach_3_item_sav['s_item']) {
$_smarty_tpl->tpl_vars['item'] = $foreach_3_item_sav['s_item'];
}
?>

				</select>
				<span class="red valid_stars "></span>
			</div>
			
			<div class="form-group address">
				<input class="form-control add"   name="hotel[address][]" type="text"   placeholder="<?php echo $_smarty_tpl->tpl_vars['lable']->value['address'];?>
" >
				<span id="" class="red valid_add "></span>
			</div>
			<div class="form-group latitude">
				<input class="form-control lat"  name="hotel[latitude][]" type="text" placeholder="Lat" value="" >
				<span id="" class="red valid_lat"></span>
			</div>
			<div class="form-group longtitude">
				<input class="form-control long"  name="hotel[longtitude][]" type="text" placeholder="Long" value="" >
				<span id="" class="red valid_long"></span>
			</div>

		</div>
	<?php }?>
		
		
	</div>

</form>

<div class="hidden">
	<div class="col-sm-6 hotel hotel-more" id="hotel">
		<a href="#" class="close"><i class="fa fa-times-circle"></i></a>
		<label class="control-label title" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['hotel_name'];?>
 1</label>
		<div class="form-group">
			<input class="form-control name"   name="hotel[name][]" type="text"   placeholder="<?php echo $_smarty_tpl->tpl_vars['lable']->value['hotel_name'];?>
">
			<span class="red valid_add "></span>
		</div>
		<div class="form-group">
			<select name="hotel[stars][]" class="form-control stars">
				<?php
$foreach_4_item_sav['s_item'] = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_from = $_smarty_tpl->tpl_vars['hotel']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_4_item_sav['item'] = $_smarty_tpl->tpl_vars['item'];
?>
				<?php $_smarty_tpl->tpl_vars["hotel_name"] = new Smarty_Variable($_smarty_tpl->tpl_vars['item']->value['record']['name'], null, 0);?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['record']['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['hotel_name']->value;?>
</option>
				<?php
$_smarty_tpl->tpl_vars['item'] = $foreach_4_item_sav['item'];
}
if ($foreach_4_item_sav['s_item']) {
$_smarty_tpl->tpl_vars['item'] = $foreach_4_item_sav['s_item'];
}
?>
			</select>
		</div>
		
		<div class="form-group address">
			<input class="form-control add"   name="hotel[address][]" type="text"   placeholder="<?php echo $_smarty_tpl->tpl_vars['lable']->value['address'];?>
" >
			<span id="" class="red valid_add "></span>
		</div>
		<div class="form-group latitude">
			<input class="form-control lat"  name="hotel[latitude][]" type="text" placeholder="Lat" value="" >
			<span id="" class="red valid_lat"></span>
		</div>
		<div class="form-group longtitude">
			<input class="form-control long"  name="hotel[longtitude][]" type="text" placeholder="Long" value="" >
			<span id="" class="red valid_long"></span>
		</div>
	</div>
</div>



<?php }
}
?>