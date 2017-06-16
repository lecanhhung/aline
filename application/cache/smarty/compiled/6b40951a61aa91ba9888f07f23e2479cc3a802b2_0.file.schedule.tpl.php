<?php /* Smarty version 3.1.28-dev/21, created on 2017-04-15 04:11:37
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\home\views\tour\schedule.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2659358f181594324f5_77073135%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b40951a61aa91ba9888f07f23e2479cc3a802b2' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\home\\views\\tour\\schedule.tpl',
      1 => 1489566621,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2659358f181594324f5_77073135',
  'variables' => 
  array (
    'lable' => 0,
    'schedules' => 0,
    'key' => 0,
    'k' => 0,
    'item' => 0,
    'listImage' => 0,
    'pathThumb' => 0,
    'vl' => 0,
    'exp' => 0,
    'food' => 0,
    'inc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_58f181594eea47_17458222',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f181594eea47_17458222')) {
function content_58f181594eea47_17458222 ($_smarty_tpl) {
if (!is_callable('smarty_function_math')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\function.math.php';

$_smarty_tpl->properties['nocache_hash'] = '2659358f181594324f5_77073135';
?>
<div class="tour-schedules">
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
            <div id="collapse<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" class="panel-collapse collapse in">
                <div class="panel-body">
                    <ul class="list-unstyled">
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['morning_content'] != '') {?>
                        <li>
                            <div class="time"><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_morning'];?>
</div>
                            <div class="dolessmore">
                                <?php echo $_smarty_tpl->tpl_vars['item']->value['morning_content'];?>

                            </div>
                        </li>
                        <?php }?>
                        
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['afternoon_content'] != '') {?>
                        <li>
                            <div class="time"><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_afternoon'];?>
</div>
                            <div class="dolessmore">
                                <?php echo $_smarty_tpl->tpl_vars['item']->value['afternoon_content'];?>
  
                            </div>  
                        </li>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['evening_content'] != '') {?>
                        <li>
                            <div class="time"><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_evening'];?>
</div>
                                <div class="dolessmore">
                                    <?php echo $_smarty_tpl->tpl_vars['item']->value['evening_content'];?>

                                </div>
                            
                        </li>
                        <?php }?>
                        <?php $_smarty_tpl->tpl_vars["listImage"] = new Smarty_Variable($_smarty_tpl->tpl_vars['item']->value['list_image'], null, 0);?>
                            
                        <?php if (count($_smarty_tpl->tpl_vars['listImage']->value) > 0) {?>
                        <li>
                            <div class="gallery">
                                <div class="row gutter-7">
                                    <?php
$foreach_1_name_sav['s_item'] = isset($_smarty_tpl->tpl_vars['vl']) ? $_smarty_tpl->tpl_vars['vl'] : false;
$foreach_1_name_sav['s_key'] = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$foreach_1_name_sav['s_name'] = isset($_smarty_tpl->tpl_vars['__foreach_name']) ? $_smarty_tpl->tpl_vars['__foreach_name'] : false;
$_from = $_smarty_tpl->tpl_vars['listImage']->value;
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
                                    <?php if ($_smarty_tpl->tpl_vars['key']->value < 3) {?>
                                    <div class="col-xs-12 col-sm-12 col-md-4 hidden-xs hidden-sm">
                                        <div class="thumbnail">
                                            <a href="#" data-toggle="modal" data-target=".image-slideshow<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['pathThumb']->value;
echo $_smarty_tpl->tpl_vars['vl']->value['path_image'];?>
" alt="" border="0" />
                                                <?php if (($_smarty_tpl->tpl_vars['key']->value == 2) || ($_smarty_tpl->tpl_vars['key']->value == count($_smarty_tpl->tpl_vars['listImage']->value))) {?><div class="count-gallery">+<?php echo count($_smarty_tpl->tpl_vars['listImage']->value);?>
</div> <?php }?>
                                            </a>
                                        </div>
                                    </div>
                                    <?php }?>
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

                                </div>
                            </div>
                            
                            
                            <div class="modal fade image-slideshow<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"  role="dialog"  aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div id="carousel-image-slideshow<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner">
                                                <?php
$foreach_2_name_sav['s_item'] = isset($_smarty_tpl->tpl_vars['vl']) ? $_smarty_tpl->tpl_vars['vl'] : false;
$foreach_2_name_sav['s_key'] = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$foreach_2_name_sav['s_name'] = isset($_smarty_tpl->tpl_vars['__foreach_name']) ? $_smarty_tpl->tpl_vars['__foreach_name'] : false;
$_from = $_smarty_tpl->tpl_vars['listImage']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['vl'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['vl']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['vl']->value) {
$_smarty_tpl->tpl_vars['vl']->_loop = true;
$foreach_2_name_sav['item'] = $_smarty_tpl->tpl_vars['vl'];
?>    
                                                <div class="item <?php if ($_smarty_tpl->tpl_vars['key']->value == 0) {?>active<?php }?>">
                                                    <img src="<?php echo $_smarty_tpl->tpl_vars['pathThumb']->value;
echo $_smarty_tpl->tpl_vars['vl']->value['path_image'];?>
" alt="" border="0" class="img-responsive" />
                                                </div>
                                                <?php
$_smarty_tpl->tpl_vars['vl'] = $foreach_2_name_sav['item'];
}
if ($foreach_2_name_sav['s_item']) {
$_smarty_tpl->tpl_vars['vl'] = $foreach_2_name_sav['s_item'];
}
if ($foreach_2_name_sav['s_key']) {
$_smarty_tpl->tpl_vars['key'] = $foreach_2_name_sav['s_key'];
}
if ($foreach_2_name_sav['s_name']) {
$_smarty_tpl->tpl_vars['__foreach_name'] = $foreach_2_name_sav['s_name'];
}
?>
                                            </div>

                                            <a class="left carousel-control" href="#carousel-image-slideshow<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" role="button" data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-left"></span>
                                            </a>
                                            <a class="right carousel-control" href="#carousel-image-slideshow<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" role="button" data-slide="next">
                                                <span class="glyphicon glyphicon-chevron-right"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>    
                        </li>
                        <?php }?>
                        <?php $_smarty_tpl->tpl_vars["exp"] = new Smarty_Variable($_smarty_tpl->tpl_vars['item']->value['exp'], null, 0);?>
                        <?php $_smarty_tpl->tpl_vars["food"] = new Smarty_Variable($_smarty_tpl->tpl_vars['item']->value['food'], null, 0);?>
                        <?php $_smarty_tpl->tpl_vars["inc"] = new Smarty_Variable($_smarty_tpl->tpl_vars['item']->value['inc'], null, 0);?>

                        <?php if (count($_smarty_tpl->tpl_vars['exp']->value) > 0 || count($_smarty_tpl->tpl_vars['food']->value) > 0 || count($_smarty_tpl->tpl_vars['inc']->value) > 0) {?>
                        <li>
                            <ul class="list-unstyled space">
                                <li>
                                    <?php if (count($_smarty_tpl->tpl_vars['exp']->value) > 0) {?>    Trải nghiệm nên thử: <?php }?>
                                    <ul class="list-unstyled">
                                        <?php
$foreach_3_vl_sav['s_item'] = isset($_smarty_tpl->tpl_vars['vl']) ? $_smarty_tpl->tpl_vars['vl'] : false;
$_from = $_smarty_tpl->tpl_vars['exp']->value;
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
                                    <?php if (count($_smarty_tpl->tpl_vars['food']->value) > 0) {?>    Món ngon nên thử: <?php }?>
                                    <ul class="list-unstyled">
                                        <?php
$foreach_4_vl_sav['s_item'] = isset($_smarty_tpl->tpl_vars['vl']) ? $_smarty_tpl->tpl_vars['vl'] : false;
$_from = $_smarty_tpl->tpl_vars['food']->value;
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
                                <li>

                                    <?php if (count($_smarty_tpl->tpl_vars['inc']->value) > 0) {?>    Bao gồm: <?php }?>
                                    <ul class="list-unstyled">
                                        <?php
$foreach_5_vl_sav['s_item'] = isset($_smarty_tpl->tpl_vars['vl']) ? $_smarty_tpl->tpl_vars['vl'] : false;
$_from = $_smarty_tpl->tpl_vars['inc']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['vl'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['vl']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['vl']->value) {
$_smarty_tpl->tpl_vars['vl']->_loop = true;
$foreach_5_vl_sav['item'] = $_smarty_tpl->tpl_vars['vl'];
?>
                                        <li><?php echo $_smarty_tpl->tpl_vars['vl']->value;?>
</li>
                                        <?php
$_smarty_tpl->tpl_vars['vl'] = $foreach_5_vl_sav['item'];
}
if ($foreach_5_vl_sav['s_item']) {
$_smarty_tpl->tpl_vars['vl'] = $foreach_5_vl_sav['s_item'];
}
?>
                                        
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <?php }?>


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