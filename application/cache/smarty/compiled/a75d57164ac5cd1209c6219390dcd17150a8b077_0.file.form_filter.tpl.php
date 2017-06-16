<?php /* Smarty version 3.1.28-dev/21, created on 2017-04-17 03:41:36
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\home\views\search\form_filter.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1389158f41d50f273d5_06871757%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a75d57164ac5cd1209c6219390dcd17150a8b077' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\home\\views\\search\\form_filter.tpl',
      1 => 1491296076,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1389158f41d50f273d5_06871757',
  'variables' => 
  array (
    'lable' => 0,
    'tour_day' => 0,
    'item' => 0,
    'transport' => 0,
    'key' => 0,
    'k' => 0,
    's_tran' => 0,
    'name_transport' => 0,
    'general_hotel' => 0,
    'hotel' => 0,
    'hotel_id' => 0,
    's_h' => 0,
    'service' => 0,
    's_ser' => 0,
    'service_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_58f41d510aaa95_02580049',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f41d510aaa95_02580049')) {
function content_58f41d510aaa95_02580049 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_convert_vnd')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\modifier.convert_vnd.php';

$_smarty_tpl->properties['nocache_hash'] = '1389158f41d50f273d5_06871757';
?>
<form class="form-inline">
    <div class="form-group col-md-12">
        <div class="row">
            <div class="col-md-2" style="padding-right:0">
                <label>Lưu trú</label>
            </div>
            <div class="col-md-4" style="padding-right:0">
                <div class="input-group-btn">
                    <button type="button" class="btn btn-default dropdown-toggle custom-css" data-toggle="dropdown">
                        <?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_day'];?>
<span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu day_menu">
                        <?php
$foreach_0_item_sav['s_item'] = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_from = $_smarty_tpl->tpl_vars['tour_day']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_0_item_sav['item'] = $_smarty_tpl->tpl_vars['item'];
?>
                        <li><a data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['record']['id'];?>
" href="#"><?php echo $_smarty_tpl->tpl_vars['item']->value['record']['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_day'];?>
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
            </div>
            <div class="col-md-2" style="padding-right:0"><label>Ngày đi</label></div>
            <div class="col-md-4 date">
                <input type="text" class="form-control" name="daterange" id="datetimepicker1" />
                <i class="fa fa-calendar" aria-hidden="true"></i>
            </div>
        </div>
    </div>
    <div class="form-group col-md-12">
        <div class="row">
            <div class="col-md-2 price"><label>Giá</label></div>
            <div class="col-md-10 price">	
                <input id="price-ranger" type="text" style="display:none;" />
                <div class="labelPrice">
                    <div id="minSliderVal"><?php echo smarty_modifier_convert_vnd(250000);?>
</div>
                    <div id="averageSliderVal">Trung bình <?php echo smarty_modifier_convert_vnd(11500000);?>
</div>
                    <div id="maxSliderVal"><?php echo smarty_modifier_convert_vnd(23000000);?>
</div>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group col-md-12">
        <div class="row">
            <div class="button btn-add">
                <button type="button" class="btn btn-primary "><?php echo $_smarty_tpl->tpl_vars['lable']->value['btn_agree'];?>
</button>
            </div>
        </div>
    </div>

    <div id="viewdetails" class="form-group col-md-12 collapse">
        <div class="row">
            <div class="line col-md-12"></div>
        </div>
        <div class="row">						
            <div class="col-md-2"><label><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_transport'];?>
</label></div>
            <div class="col-md-10">
                <div class="row">
                    <?php
$foreach_1_count_sav['s_item'] = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$foreach_1_count_sav['s_key'] = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$foreach_1_count_sav['s_name'] = isset($_smarty_tpl->tpl_vars['__foreach_count']) ? $_smarty_tpl->tpl_vars['__foreach_count'] : false;
$_from = $_smarty_tpl->tpl_vars['transport']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['__foreach_count'] = new Smarty_Variable(array('index' => -1));
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_count']->value['index']++;
$foreach_1_count_sav['item'] = $_smarty_tpl->tpl_vars['item'];
?>
                    <?php $_smarty_tpl->tpl_vars["k"] = new Smarty_Variable((isset($_smarty_tpl->tpl_vars['__foreach_count']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_count']->value['index'] : null), null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["name_transport"] = new Smarty_Variable($_smarty_tpl->tpl_vars['item']->value['record']['name'], null, 0);?>
                    <div class="col-md-4 no-gutter space-1">
                        <div class="checkbox checkbox-inline">
                            <input id="checkbox<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="styled" <?php if ($_smarty_tpl->tpl_vars['s_tran']->value[$_smarty_tpl->tpl_vars['k']->value] == $_smarty_tpl->tpl_vars['name_transport']->value) {?>checked="checked"<?php }?> type="checkbox" name="checkbox[]" value="<?php echo $_smarty_tpl->tpl_vars['name_transport']->value;?>
" />
                            <label for="checkbox<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lable']->value[$_smarty_tpl->tpl_vars['name_transport']->value];?>
</label>
                        </div>
                    </div>
                    <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_1_count_sav['item'];
}
if ($foreach_1_count_sav['s_item']) {
$_smarty_tpl->tpl_vars['item'] = $foreach_1_count_sav['s_item'];
}
if ($foreach_1_count_sav['s_key']) {
$_smarty_tpl->tpl_vars['key'] = $foreach_1_count_sav['s_key'];
}
if ($foreach_1_count_sav['s_name']) {
$_smarty_tpl->tpl_vars['__foreach_count'] = $foreach_1_count_sav['s_name'];
}
?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="line col-md-12"></div>
        </div>
        <?php $_smarty_tpl->tpl_vars["hotel"] = new Smarty_Variable($_smarty_tpl->tpl_vars['general_hotel']->value['items']['hotel'], null, 0);?>
        <div class="row">
            <div class="col-md-2"><label><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_hotel'];?>
</label></div>
            <div class="col-md-10">
                <div class="stars">
                    <?php
$foreach_2_name_sav['s_item'] = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$foreach_2_name_sav['s_key'] = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$foreach_2_name_sav['s_name'] = isset($_smarty_tpl->tpl_vars['__foreach_name']) ? $_smarty_tpl->tpl_vars['__foreach_name'] : false;
$_from = $_smarty_tpl->tpl_vars['hotel']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['__foreach_name'] = new Smarty_Variable(array('iteration' => 0, 'index' => -1));
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_name']->value['iteration']++;
$_smarty_tpl->tpl_vars['__foreach_name']->value['index']++;
$foreach_2_name_sav['item'] = $_smarty_tpl->tpl_vars['item'];
?>
                    <?php $_smarty_tpl->tpl_vars["hotel_id"] = new Smarty_Variable($_smarty_tpl->tpl_vars['item']->value['record']['id'], null, 0);?>
                    <?php if ($_smarty_tpl->tpl_vars['hotel_id']->value < 17) {?>
                    <input class="star" <?php if ($_smarty_tpl->tpl_vars['s_h']->value == $_smarty_tpl->tpl_vars['hotel_id']->value) {?>checked="checked"<?php }?> id="star-<?php echo $_smarty_tpl->tpl_vars['hotel_id']->value;?>
-5" type="radio" name="star" rel="<?php echo $_smarty_tpl->tpl_vars['hotel_id']->value;?>
" />
                    <label class="star label-star" for="star-<?php echo $_smarty_tpl->tpl_vars['hotel_id']->value;?>
-5"></label>	
                    <?php }?>
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
                </div>
            </div>		
        </div>
        <div class="row">
            <div class="line col-md-12"></div>
        </div>

        <div class="row">
            <div class="col-md-2 service"><label><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_service'];?>
</label></div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-11 no-gutter">
                        <div class="row">
                            <?php
$foreach_3_name_sav['s_item'] = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$foreach_3_name_sav['s_key'] = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$foreach_3_name_sav['s_name'] = isset($_smarty_tpl->tpl_vars['__foreach_name']) ? $_smarty_tpl->tpl_vars['__foreach_name'] : false;
$_from = $_smarty_tpl->tpl_vars['service']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['__foreach_name'] = new Smarty_Variable(array('iteration' => 0, 'index' => -1));
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_name']->value['iteration']++;
$_smarty_tpl->tpl_vars['__foreach_name']->value['index']++;
$foreach_3_name_sav['item'] = $_smarty_tpl->tpl_vars['item'];
?>
                            <?php $_smarty_tpl->tpl_vars["k"] = new Smarty_Variable((isset($_smarty_tpl->tpl_vars['__foreach_name']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_name']->value['index'] : null), null, 0);?>
                            <?php $_smarty_tpl->tpl_vars["service_name"] = new Smarty_Variable($_smarty_tpl->tpl_vars['item']->value['record']['name'], null, 0);?>
                            <div class="col-md-4 no-gutter">
                                <div class="checkbox checkbox-inline">
                                    <input id="checkbox<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['s_ser']->value[$_smarty_tpl->tpl_vars['k']->value] == $_smarty_tpl->tpl_vars['service_name']->value) {?>checked="checked"<?php }?> class="styled" type="checkbox" name="checkbox[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['record']['name'];?>
" />
                                    <label for="checkbox<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lable']->value[$_smarty_tpl->tpl_vars['service_name']->value];?>
</label>
                                </div>
                            </div>
                            <?php if ((isset($_smarty_tpl->tpl_vars['__foreach_name']->value['iteration']) ? $_smarty_tpl->tpl_vars['__foreach_name']->value['iteration'] : null) == 3) {?>
                        </div>
                        <div class="row collapse" id="fliter-more">
                            <div class="row">
                                <div class="line col-md-12"></div>
                            </div>
                            <?php }?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['__foreach_name']->value['iteration']) ? $_smarty_tpl->tpl_vars['__foreach_name']->value['iteration'] : null) == count($_smarty_tpl->tpl_vars['service']->value)) {?>
                        </div>
                        <?php }?>
                        <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_3_name_sav['item'];
}
if ($foreach_3_name_sav['s_item']) {
$_smarty_tpl->tpl_vars['item'] = $foreach_3_name_sav['s_item'];
}
if ($foreach_3_name_sav['s_key']) {
$_smarty_tpl->tpl_vars['key'] = $foreach_3_name_sav['s_key'];
}
if ($foreach_3_name_sav['s_name']) {
$_smarty_tpl->tpl_vars['__foreach_name'] = $foreach_3_name_sav['s_name'];
}
?>
                    </div>
                    <div class="col-md-1 no-gutter">
                        <a data-toggle="collapse" data-target="#fliter-more"><i class="fa fa-sort-down" aria-hidden="true"></i></a>
                    </div>
                </div>							
            </div>	
        </div>
    </div>	
    <div class="button-group">
        <button type="button" class="toggleBack btn btn-space btn-default">Hủy</button>
        <button type="button" class="btn-add btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['lable']->value['btn_agree'];?>
</button>
    </div>
    <div class="col-md-12 space-2">
        <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#viewdetails">Tìm theo tiêu chí khác</button>
    </div>
</form><?php }
}
?>