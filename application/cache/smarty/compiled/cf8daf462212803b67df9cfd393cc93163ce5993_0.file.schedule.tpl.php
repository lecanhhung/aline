<?php /* Smarty version 3.1.28-dev/21, created on 2017-04-18 03:25:55
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\home\views\download\schedule.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:369358f56b23a142b5_71672459%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf8daf462212803b67df9cfd393cc93163ce5993' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\home\\views\\download\\schedule.tpl',
      1 => 1492478584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '369358f56b23a142b5_71672459',
  'variables' => 
  array (
    'lable' => 0,
    'schedules' => 0,
    'key' => 0,
    'k' => 0,
    'item' => 0,
    'listImage' => 0,
    'pathThumb' => 0,
    'exp' => 0,
    'vl' => 0,
    'food' => 0,
    'inc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_58f56b23b120e8_44163031',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f56b23b120e8_44163031')) {
function content_58f56b23b120e8_44163031 ($_smarty_tpl) {
if (!is_callable('smarty_function_math')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\function.math.php';

$_smarty_tpl->properties['nocache_hash'] = '369358f56b23a142b5_71672459';
?>
<!-- lịch trình tour -->
<div class="tour-schedules col-xs-12 col-sm-12 col-md-12">
    <h3><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_schedule'];?>
:</h3>
    <ul class="style-tree list-unstyled panel-group">
        <?php
$foreach_0_name_sav['s_item'] = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$foreach_0_name_sav['s_key'] = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$foreach_0_name_sav['s_name'] = isset($_smarty_tpl->tpl_vars['__foreach_name']) ? $_smarty_tpl->tpl_vars['__foreach_name'] : false;
$_from = $_smarty_tpl->tpl_vars['schedules']->value;
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
        <?php echo smarty_function_math(array('equation'=>"x + y",'x'=>$_smarty_tpl->tpl_vars['key']->value,'y'=>1,'assign'=>"k"),$_smarty_tpl);?>
  
        <li class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" href="#collapse<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" class="link-collapse"><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_day'];?>
 <?php echo $_smarty_tpl->tpl_vars['k']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
                    <ul class="list-unstyled">
                        <li>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value['morning_content'] != '') {?><div class="time"><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_morning'];?>
</div><?php }?>
                            
                            <?php echo $_smarty_tpl->tpl_vars['item']->value['morning_content'];?>


                        </li>
                        <li>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value['afternoon_content'] != '') {?><div class="time"><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_afternoon'];?>
</div><?php }?>
                            
                            <?php echo $_smarty_tpl->tpl_vars['item']->value['afternoon_content'];?>
  
                        </li>
                        <li>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value['evening_content'] != '') {?><div class="time"><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_evening'];?>
</div><?php }?>

                            <?php echo $_smarty_tpl->tpl_vars['item']->value['evening_content'];?>


                            <?php $_smarty_tpl->tpl_vars["listImage"] = new Smarty_Variable($_smarty_tpl->tpl_vars['item']->value['list_image'], null, 0);?>
                            <?php if (count($_smarty_tpl->tpl_vars['listImage']->value) > 0) {?>
                            <div class="gallery download-tour space-2">
                                <div class="row">
                                    <div class="col-xs-12 col-md-8 gutter-0">
                                        <div class="space-1">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['pathThumb']->value;
echo $_smarty_tpl->tpl_vars['listImage']->value[0]['path_image'];?>
" alt="" border="0" class="img-responsive" />
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-4">
                                        <div class="row">
                                            <?php
$foreach_1_name_sav['s_item'] = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$foreach_1_name_sav['s_key'] = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$foreach_1_name_sav['s_name'] = isset($_smarty_tpl->tpl_vars['__foreach_name']) ? $_smarty_tpl->tpl_vars['__foreach_name'] : false;
$_from = $_smarty_tpl->tpl_vars['listImage']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_1_name_sav['item'] = $_smarty_tpl->tpl_vars['item'];
?>
                                            <?php if ($_smarty_tpl->tpl_vars['key']->value > 0 && $_smarty_tpl->tpl_vars['key']->value < 3) {?>
                                            <div class="col-xs-6 col-sm-12 space-1">
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['pathThumb']->value;
echo $_smarty_tpl->tpl_vars['item']->value['path_image'];?>
" alt="" border="0" class="img-responsive" />
                                            </div>
                                            <?php }?>
                                            <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_1_name_sav['item'];
}
if ($foreach_1_name_sav['s_item']) {
$_smarty_tpl->tpl_vars['item'] = $foreach_1_name_sav['s_item'];
}
if ($foreach_1_name_sav['s_key']) {
$_smarty_tpl->tpl_vars['key'] = $foreach_1_name_sav['s_key'];
}
if ($foreach_1_name_sav['s_name']) {
$_smarty_tpl->tpl_vars['__foreach_name'] = $foreach_1_name_sav['s_name'];
}
?>  
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php }?>

                            <?php $_smarty_tpl->tpl_vars["exp"] = new Smarty_Variable($_smarty_tpl->tpl_vars['item']->value['exp'], null, 0);?>
                            <?php $_smarty_tpl->tpl_vars["food"] = new Smarty_Variable($_smarty_tpl->tpl_vars['item']->value['food'], null, 0);?>
                            <?php $_smarty_tpl->tpl_vars["inc"] = new Smarty_Variable($_smarty_tpl->tpl_vars['item']->value['inc'], null, 0);?>
                            <div class="space-2">
                                <ul class="list-unstyled">
                                    <li>
                                        <?php if (count($_smarty_tpl->tpl_vars['exp']->value) > 1) {?>    Trải nghiệm nên thử: <?php }?>
                                        <ul class="list-unstyled">
                                            <?php
$foreach_2_vl_sav['s_item'] = isset($_smarty_tpl->tpl_vars['vl']) ? $_smarty_tpl->tpl_vars['vl'] : false;
$_from = $_smarty_tpl->tpl_vars['exp']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['vl'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['vl']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['vl']->value) {
$_smarty_tpl->tpl_vars['vl']->_loop = true;
$foreach_2_vl_sav['item'] = $_smarty_tpl->tpl_vars['vl'];
?>
                                            <li><?php echo $_smarty_tpl->tpl_vars['vl']->value;?>
</li>
                                            <?php
$_smarty_tpl->tpl_vars['vl'] = $foreach_2_vl_sav['item'];
}
if ($foreach_2_vl_sav['s_item']) {
$_smarty_tpl->tpl_vars['vl'] = $foreach_2_vl_sav['s_item'];
}
?>

                                        </ul>
                                    </li>
                                    <li>
                                        <?php if (count($_smarty_tpl->tpl_vars['food']->value) > 1) {?>    Món ngon nên thử: <?php }?>
                                        <ul class="list-unstyled">
                                            <?php
$foreach_3_vl_sav['s_item'] = isset($_smarty_tpl->tpl_vars['vl']) ? $_smarty_tpl->tpl_vars['vl'] : false;
$_from = $_smarty_tpl->tpl_vars['food']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['vl'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['vl']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['vl']->value) {
$_smarty_tpl->tpl_vars['vl']->_loop = true;
$foreach_3_vl_sav['item'] = $_smarty_tpl->tpl_vars['vl'];
?>
                                            <li><?php echo $_smarty_tpl->tpl_vars['vl']->value;?>
</li>
                                            <?php
$_smarty_tpl->tpl_vars['vl'] = $foreach_3_vl_sav['item'];
}
if ($foreach_3_vl_sav['s_item']) {
$_smarty_tpl->tpl_vars['vl'] = $foreach_3_vl_sav['s_item'];
}
?>

                                        </ul>
                                    </li>
                                    <li>

                                        <?php if (count($_smarty_tpl->tpl_vars['inc']->value) > 1) {?>    Bao gồm: <?php }?>
                                        <ul class="list-unstyled">
                                            <?php
$foreach_4_vl_sav['s_item'] = isset($_smarty_tpl->tpl_vars['vl']) ? $_smarty_tpl->tpl_vars['vl'] : false;
$_from = $_smarty_tpl->tpl_vars['inc']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['vl'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['vl']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['vl']->value) {
$_smarty_tpl->tpl_vars['vl']->_loop = true;
$foreach_4_vl_sav['item'] = $_smarty_tpl->tpl_vars['vl'];
?>
                                            <li><?php echo $_smarty_tpl->tpl_vars['vl']->value;?>
</li>
                                            <?php
$_smarty_tpl->tpl_vars['vl'] = $foreach_4_vl_sav['item'];
}
if ($foreach_4_vl_sav['s_item']) {
$_smarty_tpl->tpl_vars['vl'] = $foreach_4_vl_sav['s_item'];
}
?>

                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </li>
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
    </ul>
</div><?php }
}
?>