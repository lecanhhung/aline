<?php /* Smarty version 3.1.28-dev/21, created on 2017-05-08 09:00:29
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\admin\views\tour\step2.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:210425910178d1b2b78_29367366%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07af5d17fa4b5c97463d1d45e1861b0f4ff152fa' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\admin\\views\\tour\\step2.tpl',
      1 => 1490759288,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '210425910178d1b2b78_29367366',
  'variables' => 
  array (
    'action_url' => 0,
    'option' => 0,
    'step' => 0,
    'id' => 0,
    'tour_id' => 0,
    'agency_id' => 0,
    'step_data' => 0,
    'lable' => 0,
    'general' => 0,
    'tour_day' => 0,
    'tour_d' => 0,
    'tour_night' => 0,
    'tour_n' => 0,
    'dayofweek' => 0,
    'day_week' => 0,
    'name_day' => 0,
    'location' => 0,
    'value' => 0,
    'transport' => 0,
    'item' => 0,
    'name_transport' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_5910178d30f531_63143953',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5910178d30f531_63143953')) {
function content_5910178d30f531_63143953 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '210425910178d1b2b78_29367366';
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
	<input type="hidden" name="hidden[starting_date_id]" value="<?php echo $_smarty_tpl->tpl_vars['step_data']->value['starting_date_id'];?>
">
	<input type="hidden" name="hidden[transport_id]" value="<?php echo $_smarty_tpl->tpl_vars['step_data']->value['id'];?>
">
	<input type="hidden" name="hidden[d_id]" value="<?php echo $_smarty_tpl->tpl_vars['step_data']->value['day_id'];?>
">
	<div class="form-group">
		<label class="control-label text-blue" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['info_tour'];?>
 </label>
	</div>

	<?php $_smarty_tpl->tpl_vars["tour_day"] = new Smarty_Variable($_smarty_tpl->tpl_vars['general']->value['items']['tour_day'], null, 0);?>
	<?php $_smarty_tpl->tpl_vars["tour_night"] = new Smarty_Variable($_smarty_tpl->tpl_vars['general']->value['items']['tour_night'], null, 0);?>
	<?php $_smarty_tpl->tpl_vars["dayofweek"] = new Smarty_Variable($_smarty_tpl->tpl_vars['general']->value['items']['dayofweek'], null, 0);?>
	<?php $_smarty_tpl->tpl_vars["transport"] = new Smarty_Variable($_smarty_tpl->tpl_vars['general']->value['items']['transport'], null, 0);?>


	<div class="form-group">
		<label class="col-sm-2 control-label" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['day_amount'];?>
<span class="red"> * </span></label>
		
		<div class="col-sm-2">
			<ul class="list-inline">
				<li>
					<select name="starting[day_amount]" id="tour_day" class="form-control">
						<?php
$foreach_0_tour_d_sav['s_item'] = isset($_smarty_tpl->tpl_vars['tour_d']) ? $_smarty_tpl->tpl_vars['tour_d'] : false;
$_from = $_smarty_tpl->tpl_vars['tour_day']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['tour_d'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['tour_d']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tour_d']->value) {
$_smarty_tpl->tpl_vars['tour_d']->_loop = true;
$foreach_0_tour_d_sav['item'] = $_smarty_tpl->tpl_vars['tour_d'];
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['tour_d']->value['record']['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['tour_d']->value['record']['id'] == $_smarty_tpl->tpl_vars['step_data']->value['day_amount']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['tour_d']->value['record']['name'];?>
</option>
						<?php
$_smarty_tpl->tpl_vars['tour_d'] = $foreach_0_tour_d_sav['item'];
}
if ($foreach_0_tour_d_sav['s_item']) {
$_smarty_tpl->tpl_vars['tour_d'] = $foreach_0_tour_d_sav['s_item'];
}
?>
					</select>	
				</li>
				<label for="title" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_day'];?>
</label>
			</ul>
		</div>	

		<div class="col-sm-2">
			<ul class="list-inline">
				<li>
					<select name="starting[night_amount]" id="tour_night" class="form-control">
						<?php
$foreach_1_tour_n_sav['s_item'] = isset($_smarty_tpl->tpl_vars['tour_n']) ? $_smarty_tpl->tpl_vars['tour_n'] : false;
$_from = $_smarty_tpl->tpl_vars['tour_night']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['tour_n'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['tour_n']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tour_n']->value) {
$_smarty_tpl->tpl_vars['tour_n']->_loop = true;
$foreach_1_tour_n_sav['item'] = $_smarty_tpl->tpl_vars['tour_n'];
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['tour_n']->value['record']['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['tour_n']->value['record']['id'] == $_smarty_tpl->tpl_vars['step_data']->value['night_amount']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['tour_n']->value['record']['name'];?>
</option>
						<?php
$_smarty_tpl->tpl_vars['tour_n'] = $foreach_1_tour_n_sav['item'];
}
if ($foreach_1_tour_n_sav['s_item']) {
$_smarty_tpl->tpl_vars['tour_n'] = $foreach_1_tour_n_sav['s_item'];
}
?>
					</select> 	
				</li>

				<label for="title" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_night'];?>
</label>
			</ul>
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['starting_date'];?>
<span class="red"> * </span></label>
		<div class="col-sm-8 started_day">
			<div class="schedule" >
				<input type="radio" <?php if ($_smarty_tpl->tpl_vars['step_data']->value['day_date'] != '') {?>checked="checked"<?php }?>  class="col" value="day_date"  name="starting[schedule]"> <?php echo $_smarty_tpl->tpl_vars['lable']->value['exactly_day'];?>

				<input type="text" name="starting[day_date] input" id="day_date" class="form-control input" value="<?php echo $_smarty_tpl->tpl_vars['step_data']->value['day_date'];?>
"> 
			
			</div>

			<div class="schedule">
				<input type="radio" <?php if ($_smarty_tpl->tpl_vars['step_data']->value['is_daily'] == 1) {?>checked='checked'<?php }?> class="col" value="is_daily"   name="starting[schedule]"> <?php echo $_smarty_tpl->tpl_vars['lable']->value['every_day'];?>

			</div>

			<div class="schedule">
				<input type="radio" <?php if ($_smarty_tpl->tpl_vars['step_data']->value['is_day_of_week'] == 1) {?>checked='checked'<?php }?>  class="col" value="is_day_of_week" name="starting[schedule]" > <?php echo $_smarty_tpl->tpl_vars['lable']->value['every_week'];?>

				<ul class="list-inline sub_is_day_of_week">
					<?php
$foreach_2_day_week_sav['s_item'] = isset($_smarty_tpl->tpl_vars['day_week']) ? $_smarty_tpl->tpl_vars['day_week'] : false;
$_from = $_smarty_tpl->tpl_vars['dayofweek']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['day_week'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['day_week']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['day_week']->value) {
$_smarty_tpl->tpl_vars['day_week']->_loop = true;
$foreach_2_day_week_sav['item'] = $_smarty_tpl->tpl_vars['day_week'];
?>
					<?php $_smarty_tpl->tpl_vars["name_day"] = new Smarty_Variable($_smarty_tpl->tpl_vars['day_week']->value['record']['name'], null, 0);?>

					<li class="dayofweek"><lable for="<?php echo $_smarty_tpl->tpl_vars['name_day']->value;?>
"><input name="starting[dayofweek][<?php echo $_smarty_tpl->tpl_vars['name_day']->value;?>
]" id="<?php echo $_smarty_tpl->tpl_vars['name_day']->value;?>
"  class="_1day" type="checkbox" value="" <?php if ($_smarty_tpl->tpl_vars['step_data']->value[$_smarty_tpl->tpl_vars['name_day']->value] == 1) {?> checked="checked"<?php }?> > <?php echo $_smarty_tpl->tpl_vars['lable']->value[$_smarty_tpl->tpl_vars['name_day']->value];?>
</lable></li>
					<?php
$_smarty_tpl->tpl_vars['day_week'] = $foreach_2_day_week_sav['item'];
}
if ($foreach_2_day_week_sav['s_item']) {
$_smarty_tpl->tpl_vars['day_week'] = $foreach_2_day_week_sav['s_item'];
}
?>
					
				</ul>
			</div>

			<div class="schedule">
				<input type="radio" value="is_other" <?php if ($_smarty_tpl->tpl_vars['step_data']->value['is_other'] == 1) {?>checked='checked'<?php }?> class="col" name="starting[schedule]" > <?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_other'];?>

				<input type="text" name="starting[is_other]" id="" class="form-control tour_other input" value="<?php echo $_smarty_tpl->tpl_vars['step_data']->value['is_other'];?>
"> 
			</div>	
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_location'];?>
 <span class="red"> * </span></label>
		<div class="col-sm-3">
			<select name="starting[tour_location_id]" id="tour_location_id" class="form-control">
				<?php
$foreach_3_value_sav['s_item'] = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$_from = $_smarty_tpl->tpl_vars['location']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$foreach_3_value_sav['item'] = $_smarty_tpl->tpl_vars['value'];
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['tour_location_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['step_data']->value['tour_location_id'] == $_smarty_tpl->tpl_vars['value']->value['tour_location_id']) {?> selected='selected'<?php }?>><?php echo $_smarty_tpl->tpl_vars['value']->value['cat_name'];?>
</option>
				<?php
$_smarty_tpl->tpl_vars['value'] = $foreach_3_value_sav['item'];
}
if ($foreach_3_value_sav['s_item']) {
$_smarty_tpl->tpl_vars['value'] = $foreach_3_value_sav['s_item'];
}
?>
			</select>
		</div>
	</div>


<div class="form-group">
	<label class="col-sm-2 control-label" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_transport'];?>
<span class="red"> * </span></label>
	<div class="col-sm-8">
		<ul class="list-inline">
			<?php
$foreach_4_item_sav['s_item'] = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_from = $_smarty_tpl->tpl_vars['transport']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_4_item_sav['item'] = $_smarty_tpl->tpl_vars['item'];
?>
			<?php $_smarty_tpl->tpl_vars["name_transport"] = new Smarty_Variable($_smarty_tpl->tpl_vars['item']->value['record']['name'], null, 0);?>
			<li class="transport"><input type="checkbox" name="starting[tour_transport][<?php echo $_smarty_tpl->tpl_vars['name_transport']->value;?>
]" value="" <?php if ($_smarty_tpl->tpl_vars['step_data']->value[$_smarty_tpl->tpl_vars['name_transport']->value] == 1) {?>checked='checked'<?php }?>> <?php echo $_smarty_tpl->tpl_vars['lable']->value[$_smarty_tpl->tpl_vars['name_transport']->value];?>
</li>	
			<?php
$_smarty_tpl->tpl_vars['item'] = $foreach_4_item_sav['item'];
}
if ($foreach_4_item_sav['s_item']) {
$_smarty_tpl->tpl_vars['item'] = $foreach_4_item_sav['s_item'];
}
?>
		</ul>
		
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['description'];?>
<span class="red"> * </span> </label>
	<div class="col-sm-8">
		<textarea class="form-control" id="short_description" name="starting[short_description]" onChange="hideFieldRequire('#valid_short_description)"><?php echo $_smarty_tpl->tpl_vars['step_data']->value['short_description'];?>
</textarea>
		<span class="ghichu pull-right"><span class="count-char">0</span>-2000 ký tự</span>
		<span id="valid_short_description" class="red"></span>
	</div>
</div>

</form>

<?php echo '<script'; ?>
>
	CKEDITOR.replace('short_description');

<?php echo '</script'; ?>
>
<?php }
}
?>