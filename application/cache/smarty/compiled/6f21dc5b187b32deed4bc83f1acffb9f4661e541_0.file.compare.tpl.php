<?php /* Smarty version 3.1.28-dev/21, created on 2017-04-15 04:11:37
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\home\views\compare.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3055658f181590c3097_81783185%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f21dc5b187b32deed4bc83f1acffb9f4661e541' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\home\\views\\compare.tpl',
      1 => 1491295366,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3055658f181590c3097_81783185',
  'variables' => 
  array (
    'tourCompare' => 0,
    'value' => 0,
    'tour_id3' => 0,
    'k' => 0,
    'pathThumb' => 0,
    'list_image' => 0,
    'vl' => 0,
    'base_url' => 0,
    'lable' => 0,
    'day' => 0,
    'item' => 0,
    'i' => 0,
    'day_amount3' => 0,
    'tourdays3' => 0,
    'night_amount3' => 0,
    'transport' => 0,
    'tr' => 0,
    'general_hotel' => 0,
    'hotel' => 0,
    'hotel_id' => 0,
    'keyword' => 0,
    'base_tlp_front' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_58f181591c6b59_08473077',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f181591c6b59_08473077')) {
function content_58f181591c6b59_08473077 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_getdaysnight')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\modifier.getdaysnight.php';
if (!is_callable('smarty_modifier_getday')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\modifier.getday.php';
if (!is_callable('smarty_function_math')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\function.math.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_convert_vnd')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\modifier.convert_vnd.php';

$_smarty_tpl->properties['nocache_hash'] = '3055658f181590c3097_81783185';
?>


<div id="compare-tour" class="hidden">
	
	<div class="compare-tour">
		<?php
$foreach_0_name_sav['s_item'] = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$foreach_0_name_sav['s_key'] = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$foreach_0_name_sav['s_name'] = isset($_smarty_tpl->tpl_vars['__foreach_name']) ? $_smarty_tpl->tpl_vars['__foreach_name'] : false;
$_from = $_smarty_tpl->tpl_vars['tourCompare']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['value']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$foreach_0_name_sav['item'] = $_smarty_tpl->tpl_vars['value'];
?>
		<?php $_smarty_tpl->tpl_vars['tour_id3'] = new Smarty_Variable($_smarty_tpl->tpl_vars['value']->value['tour_id'], null, 0);?>
		<?php $_smarty_tpl->tpl_vars['tourdays3'] = new Smarty_Variable(smarty_modifier_getdaysnight($_smarty_tpl->tpl_vars['tour_id3']->value), null, 0);?>
		<?php $_smarty_tpl->tpl_vars['day_amount3'] = new Smarty_Variable($_smarty_tpl->tpl_vars['value']->value['day_amount'], null, 0);?>
		<?php $_smarty_tpl->tpl_vars['night_amount3'] = new Smarty_Variable($_smarty_tpl->tpl_vars['value']->value['night_amount'], null, 0);?>
		<?php $_smarty_tpl->tpl_vars["keyword"] = new Smarty_Variable($_smarty_tpl->tpl_vars['k']->value, null, 0);?>	
		
		<div class="tour">
			<div class="box box-horizontal">
				<a data-id="<?php echo $_smarty_tpl->tpl_vars['value']->value['tour_id'];?>
" href="javascript:void(0)" class="close remove-compare"></a>
				<div class="box-header">
					<div class="slider-image">
						<ul class="lightSlider list-unstyled">
							<?php $_smarty_tpl->tpl_vars["list_image"] = new Smarty_Variable($_smarty_tpl->tpl_vars['value']->value['list_image'], null, 0);?>
							<li>
								<div class="item">
									<div class="background" style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['pathThumb']->value;
echo $_smarty_tpl->tpl_vars['value']->value['path_image'];?>
')"></div>
								</div>
							</li>
							<?php
$foreach_1_name_sav['s_item'] = isset($_smarty_tpl->tpl_vars['vl']) ? $_smarty_tpl->tpl_vars['vl'] : false;
$foreach_1_name_sav['s_key'] = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$foreach_1_name_sav['s_name'] = isset($_smarty_tpl->tpl_vars['__foreach_name']) ? $_smarty_tpl->tpl_vars['__foreach_name'] : false;
$_from = $_smarty_tpl->tpl_vars['list_image']->value;
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
							<li>
								<div class="item">
									<div class="background" style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['pathThumb']->value;
echo $_smarty_tpl->tpl_vars['vl']->value['path_image'];?>
')"></div>
								</div>
							</li>
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
						</ul>
					</div>
				</div>
				<div class="box-body">
					<div class="box-title">
						<h2><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
tour/<?php echo $_smarty_tpl->tpl_vars['value']->value['slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</a></h2>
						<p>
							
							<span><i class="fa fa-calendar" aria-hidden="true"></i>
								<?php if ($_smarty_tpl->tpl_vars['value']->value['is_daily'] == 1) {?> <?php echo $_smarty_tpl->tpl_vars['lable']->value['every_day'];
} elseif ($_smarty_tpl->tpl_vars['value']->value['is_other'] != '') {
echo $_smarty_tpl->tpl_vars['value']->value['is_other'];
} elseif ($_smarty_tpl->tpl_vars['value']->value['is_day_of_week'] == 1) {?>
								<?php $_smarty_tpl->tpl_vars["day"] = new Smarty_Variable(smarty_modifier_getday($_smarty_tpl->tpl_vars['value']->value['tour_id']), null, 0);?>
								<?php
$foreach_2_item_sav['s_item'] = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$foreach_2_item_sav['s_key'] = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_from = $_smarty_tpl->tpl_vars['day']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_2_item_sav['item'] = $_smarty_tpl->tpl_vars['item'];
?>
								<?php echo smarty_function_math(array('equation'=>"x + y",'x'=>$_smarty_tpl->tpl_vars['k']->value,'y'=>1,'assign'=>"i"),$_smarty_tpl);?>

								<?php echo $_smarty_tpl->tpl_vars['lable']->value[$_smarty_tpl->tpl_vars['item']->value];?>
 <?php if ($_smarty_tpl->tpl_vars['i']->value != count($_smarty_tpl->tpl_vars['day']->value)) {?>,<?php }?>
								<?php
$_smarty_tpl->tpl_vars['item'] = $foreach_2_item_sav['item'];
}
if ($foreach_2_item_sav['s_item']) {
$_smarty_tpl->tpl_vars['item'] = $foreach_2_item_sav['s_item'];
}
if ($foreach_2_item_sav['s_key']) {
$_smarty_tpl->tpl_vars['k'] = $foreach_2_item_sav['s_key'];
}
?>
								<?php echo $_smarty_tpl->tpl_vars['lable']->value['every_week'];?>

								<?php } else {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['day_date'],"%d-%m-%Y");
}?>
							</span>
							<span class="divider"> | </span>
							<span> <?php echo $_smarty_tpl->tpl_vars['tourdays3']->value[$_smarty_tpl->tpl_vars['day_amount3']->value];?>
 <?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_day'];?>
 - <?php echo $_smarty_tpl->tpl_vars['tourdays3']->value[$_smarty_tpl->tpl_vars['night_amount3']->value];?>
 <?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_night'];?>
</span>

						</p>


					</div>
					<div class="box-content">
						<div class="place-transport">
							<p><?php echo $_smarty_tpl->tpl_vars['value']->value['agency_name'];?>
</p>
							<?php $_smarty_tpl->tpl_vars["transport"] = new Smarty_Variable($_smarty_tpl->tpl_vars['value']->value['transport'], null, 0);?>
							<p class="text-right">
								<?php
$foreach_3_tr_sav['s_item'] = isset($_smarty_tpl->tpl_vars['tr']) ? $_smarty_tpl->tpl_vars['tr'] : false;
$_from = $_smarty_tpl->tpl_vars['transport']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['tr'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['tr']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tr']->value) {
$_smarty_tpl->tpl_vars['tr']->_loop = true;
$foreach_3_tr_sav['item'] = $_smarty_tpl->tpl_vars['tr'];
?>
								<?php echo $_smarty_tpl->tpl_vars['tr']->value;?>

								<?php
$_smarty_tpl->tpl_vars['tr'] = $foreach_3_tr_sav['item'];
}
if ($foreach_3_tr_sav['s_item']) {
$_smarty_tpl->tpl_vars['tr'] = $foreach_3_tr_sav['s_item'];
}
?>
							</p>
						</div>
						<div class="hotel">
							<p><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</p>
							<?php $_smarty_tpl->tpl_vars["hotel"] = new Smarty_Variable($_smarty_tpl->tpl_vars['general_hotel']->value['items']['hotel'], null, 0);?>
							<div class="stars">
								<?php
$foreach_4_name_sav['s_item'] = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$foreach_4_name_sav['s_key'] = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$foreach_4_name_sav['s_name'] = isset($_smarty_tpl->tpl_vars['__foreach_name']) ? $_smarty_tpl->tpl_vars['__foreach_name'] : false;
$_from = $_smarty_tpl->tpl_vars['hotel']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_4_name_sav['item'] = $_smarty_tpl->tpl_vars['item'];
?>
								<?php $_smarty_tpl->tpl_vars["hotel_id"] = new Smarty_Variable($_smarty_tpl->tpl_vars['item']->value['record']['id'], null, 0);?>
								<?php if ($_smarty_tpl->tpl_vars['hotel_id']->value < 17) {?>
								<input class="star star-value" data-star="<?php echo $_smarty_tpl->tpl_vars['value']->value['stars'];?>
" data-hotel="<?php echo $_smarty_tpl->tpl_vars['hotel_id']->value;?>
"   type="radio" name="star-<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
"  />
								<label class="star label-star" for="star-<?php echo $_smarty_tpl->tpl_vars['hotel_id']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
"></label>    
								<?php }?>
								<?php
$_smarty_tpl->tpl_vars['item'] = $foreach_4_name_sav['item'];
}
if ($foreach_4_name_sav['s_item']) {
$_smarty_tpl->tpl_vars['item'] = $foreach_4_name_sav['s_item'];
}
if ($foreach_4_name_sav['s_key']) {
$_smarty_tpl->tpl_vars['key'] = $foreach_4_name_sav['s_key'];
}
if ($foreach_4_name_sav['s_name']) {
$_smarty_tpl->tpl_vars['__foreach_name'] = $foreach_4_name_sav['s_name'];
}
?>
							</div>
						</div>
						<div class="price">
							<p class="price-promotion"><?php echo smarty_modifier_convert_vnd($_smarty_tpl->tpl_vars['value']->value['price_promotion']);?>
</p>
							<p class="text-right"><del><?php echo smarty_modifier_convert_vnd($_smarty_tpl->tpl_vars['value']->value['price']);?>
</del></p>
						</div>
					</div>					
					<div class="box-footer">
						<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
tour/<?php echo $_smarty_tpl->tpl_vars['value']->value['slug'];?>
" class="btn btn-link">Xem chi tiết</a>
					</div>
				</div>
			</div>
		</div>

		<?php
$_smarty_tpl->tpl_vars['value'] = $foreach_0_name_sav['item'];
}
if ($foreach_0_name_sav['s_item']) {
$_smarty_tpl->tpl_vars['value'] = $foreach_0_name_sav['s_item'];
}
if ($foreach_0_name_sav['s_key']) {
$_smarty_tpl->tpl_vars['k'] = $foreach_0_name_sav['s_key'];
}
if ($foreach_0_name_sav['s_name']) {
$_smarty_tpl->tpl_vars['__foreach_name'] = $foreach_0_name_sav['s_name'];
}
?>
		<?php echo smarty_function_math(array('equation'=>"x - y",'x'=>2,'y'=>count($_smarty_tpl->tpl_vars['tourCompare']->value),'assign'=>"k"),$_smarty_tpl);?>

		<?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['k']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['k']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
		<div class="tour">
			<img src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_front']->value;?>
/images/add-tour.jpg" alt="" border="0" class="img-responsive" />
		</div>
		<?php }} ?>

		
	</div>
</div>

<div class="parent-compare">
	<div id="notifi-compare" class="hidden">
		<div class="notifi-compare">
			<p>Bạn đã chọn 2 tour để so sánh, hãy chọn 1 tour để thay thế tour bạn đang chọn</p>
			<div class="row">
				<?php
$foreach_5_name_sav['s_item'] = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$foreach_5_name_sav['s_key'] = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$foreach_5_name_sav['s_name'] = isset($_smarty_tpl->tpl_vars['__foreach_name']) ? $_smarty_tpl->tpl_vars['__foreach_name'] : false;
$_from = $_smarty_tpl->tpl_vars['tourCompare']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_5_name_sav['item'] = $_smarty_tpl->tpl_vars['item'];
?>
				<div class="col-md-6">
					<div class="box box-vertical-mini">
						<div class="box-header">
							<div class="box-picture">
								<a href="#">
									<img class="picture" src="<?php echo $_smarty_tpl->tpl_vars['pathThumb']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['path_image'];?>
" alt="" border="0" />
								</a>
							</div>
						</div>
						<div class="box-body">
							<div class="box-title">
								<h2><a href="#"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></h2>
							</div>
							<div class="box-content">
								<div class="place-transport">
									<p><?php echo $_smarty_tpl->tpl_vars['item']->value['agency_name'];?>
</p>
									<p class="text-right">
										<a href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['tour_id'];?>
"  data-replace="" class="change-compare btn btn-link">Thay</a>
									</p>
								</div>
							</div>	
						</div>
					</div>
				</div>
				<?php
$_smarty_tpl->tpl_vars['item'] = $foreach_5_name_sav['item'];
}
if ($foreach_5_name_sav['s_item']) {
$_smarty_tpl->tpl_vars['item'] = $foreach_5_name_sav['s_item'];
}
if ($foreach_5_name_sav['s_key']) {
$_smarty_tpl->tpl_vars['key'] = $foreach_5_name_sav['s_key'];
}
if ($foreach_5_name_sav['s_name']) {
$_smarty_tpl->tpl_vars['__foreach_name'] = $foreach_5_name_sav['s_name'];
}
?>	
			</div>
		</div>

	</div>
</div> <!-- end parent-compare -->

<div id="notifi-notice" class="hidden">
	<span>Bạn đã chọn tour so sánh thành công. Xem so sánh tour trên thanh menu.</span>
</div>


<?php }
}
?>