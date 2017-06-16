<?php /* Smarty version 3.1.28-dev/21, created on 2017-04-17 03:41:36
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\home\views\search\search_compare.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:588558f41d50e7a3a4_17873552%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c49f43cef5585df656a1d2d1c1491c820f74f7ed' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\home\\views\\search\\search_compare.tpl',
      1 => 1489558180,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '588558f41d50e7a3a4_17873552',
  'variables' => 
  array (
    'tour_location' => 0,
    'item' => 0,
    'lable' => 0,
    'general' => 0,
    'tour_day' => 0,
    'priceRes' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_58f41d50ebfa98_15786735',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f41d50ebfa98_15786735')) {
function content_58f41d50ebfa98_15786735 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '588558f41d50e7a3a4_17873552';
?>
<div class="search search-compare hidden-lg hidden-md">
    <div class="input-group">
        <div class="input-group-btn search-tour">																
            <button type="button" class="btn btn-default dropdown-toggle menu-page" data-toggle="dropdown"></button>
            <ul class="dropdown-menu locations-menu">
                <?php
$foreach_0_item_sav['s_item'] = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_from = $_smarty_tpl->tpl_vars['tour_location']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_0_item_sav['item'] = $_smarty_tpl->tpl_vars['item'];
?>
                <li><a data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['tour_location_id'];?>
" href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['item']->value['cat_name'];?>
</a></li>
                <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_0_item_sav['item'];
}
if ($foreach_0_item_sav['s_item']) {
$_smarty_tpl->tpl_vars['item'] = $foreach_0_item_sav['s_item'];
}
?>
            </ul>
        </div>

        <div class="input-group-btn">
            <input type="text" class="form-control txtsearch" placeholder="<?php echo $_smarty_tpl->tpl_vars['lable']->value['holder_search_tour'];?>
" name="s" id="text-search1" />
        </div>

        <div class="input-group-btn border">
            <label>Lưu trú</label>
            <button type="button" class="btn btn-default dropdown-toggle custom-css" data-toggle="dropdown">
                    <?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_day'];?>
<span class="caret"></span>
            </button>

            <ul class="dropdown-menu day_menu">
            <?php $_smarty_tpl->tpl_vars["tour_day"] = new Smarty_Variable($_smarty_tpl->tpl_vars['general']->value['items']['tour_day'], null, 0);?>
                <?php
$foreach_1_item_sav['s_item'] = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_from = $_smarty_tpl->tpl_vars['tour_day']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_1_item_sav['item'] = $_smarty_tpl->tpl_vars['item'];
?>
                <li><a data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['record']['id'];?>
" href="#"><?php echo $_smarty_tpl->tpl_vars['item']->value['record']['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_day'];?>
</a></li>
                <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_1_item_sav['item'];
}
if ($foreach_1_item_sav['s_item']) {
$_smarty_tpl->tpl_vars['item'] = $foreach_1_item_sav['s_item'];
}
?>	
            </ul>
        </div>
        <div class="input-group-btn border last">
                <div class="date">
                        <input type="text" class="form-control " id="datetimepicker2" name="daterange1"  placeholder="Ngày đi" />
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                </div>
        </div>								
        <div class="input-group-btn price-res">																
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" data-value="">
                        Giá<span class="caret"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                </button>
                <ul class="dropdown-menu dropdown-price">
                        <?php
$foreach_2_name_sav['s_item'] = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$foreach_2_name_sav['s_key'] = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$foreach_2_name_sav['s_name'] = isset($_smarty_tpl->tpl_vars['__foreach_name']) ? $_smarty_tpl->tpl_vars['__foreach_name'] : false;
$_from = $_smarty_tpl->tpl_vars['priceRes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_2_name_sav['item'] = $_smarty_tpl->tpl_vars['item'];
?>
                                <li><a href="#" data-value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a></li>
                        <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_2_name_sav['item'];
}
if ($foreach_2_name_sav['s_item']) {
$_smarty_tpl->tpl_vars['item'] = $foreach_2_name_sav['s_item'];
}
if ($foreach_2_name_sav['s_key']) {
$_smarty_tpl->tpl_vars['key'] = $foreach_2_name_sav['s_key'];
}
if ($foreach_2_name_sav['s_name']) {
$_smarty_tpl->tpl_vars['__foreach_name'] = $foreach_2_name_sav['s_name'];
}
?>
                </ul>
        </div>
        <div class="input-group-btn">
            <button type="button" class="btn btn-primary btn-search"><?php echo $_smarty_tpl->tpl_vars['lable']->value['search'];?>
</button>
        </div>
    </div>
</div><?php }
}
?>