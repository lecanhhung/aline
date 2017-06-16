<?php /* Smarty version 3.1.28-dev/21, created on 2017-04-21 03:36:55
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\home\views\tour\tour_others.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1075058f96237caab83_39108032%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7480ab00ceef8098288db31bff30b2a90d7bc2e5' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\home\\views\\tour\\tour_others.tpl',
      1 => 1488965279,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1075058f96237caab83_39108032',
  'variables' => 
  array (
    'tourAgency' => 0,
    'item' => 0,
    'tour_id1' => 0,
    'base_url' => 0,
    'pathThumb' => 0,
    'base_tlp_front' => 0,
    'day_amount1' => 0,
    'tourdays1' => 0,
    'lable' => 0,
    'night_amount1' => 0,
    'transport' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_58f96237e3d904_51307370',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f96237e3d904_51307370')) {
function content_58f96237e3d904_51307370 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_getdaysnight')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\modifier.getdaysnight.php';
if (!is_callable('smarty_modifier_convert_vnd')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\modifier.convert_vnd.php';

$_smarty_tpl->properties['nocache_hash'] = '1075058f96237caab83_39108032';
?>


<div class="slides slider-3 slider-blog">
    <div class="row">
        <ul class="list-unstyled lightSlider cS-hidden">

        
        <?php
$foreach_0_name_sav['s_item'] = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$foreach_0_name_sav['s_key'] = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$foreach_0_name_sav['s_name'] = isset($_smarty_tpl->tpl_vars['__foreach_name']) ? $_smarty_tpl->tpl_vars['__foreach_name'] : false;
$_from = $_smarty_tpl->tpl_vars['tourAgency']->value;
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

        <?php $_smarty_tpl->tpl_vars['tour_id1'] = new Smarty_Variable($_smarty_tpl->tpl_vars['item']->value['tour_id'], null, 0);?>
        <?php $_smarty_tpl->tpl_vars['tourdays1'] = new Smarty_Variable(smarty_modifier_getdaysnight($_smarty_tpl->tpl_vars['tour_id1']->value), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['day_amount1'] = new Smarty_Variable($_smarty_tpl->tpl_vars['item']->value['day_amount'], null, 0);?>
        <?php $_smarty_tpl->tpl_vars['night_amount1'] = new Smarty_Variable($_smarty_tpl->tpl_vars['item']->value['night_amount'], null, 0);?>

            
            <li class="col-xs-12 col-sm-12 col-md-4">
                <div class="box box-vertical">
                    <div class="box-header">
                        <div class="box-picture">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
tour/<?php echo $_smarty_tpl->tpl_vars['item']->value['slug'];?>
">
                                <img class="picture" src="<?php echo $_smarty_tpl->tpl_vars['pathThumb']->value;
echo $_smarty_tpl->tpl_vars['item']->value['path_image'];?>
" alt="" border="0" />
                                <?php if ($_smarty_tpl->tpl_vars['item']->value['noibat'] > 0) {?>
                                <span class="ribbon">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_front']->value;?>
/images/ribbon-noibat.png" alt="" border="0" class="img-responsive" />
                                </span>
                                <?php }?>
                            </a>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="box-title">
                            <h2><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
tour/<?php echo $_smarty_tpl->tpl_vars['item']->value['slug'];?>
" class="tour-title"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></h2>
                            <p><?php echo $_smarty_tpl->tpl_vars['tourdays1']->value[$_smarty_tpl->tpl_vars['day_amount1']->value];?>
 <?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_day'];?>
 - <?php echo $_smarty_tpl->tpl_vars['tourdays1']->value[$_smarty_tpl->tpl_vars['night_amount1']->value];?>
 <?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_night'];?>
</p>
                        </div>
                        <div class="box-content">
                            <div class="place-transport">
                                <p class="place"><?php echo $_smarty_tpl->tpl_vars['item']->value['cat_name'];?>
</p>
                                <p class="text-right">
                                    <?php $_smarty_tpl->tpl_vars["transport"] = new Smarty_Variable($_smarty_tpl->tpl_vars['item']->value['transport'], null, 0);?>
                                    <?php
$foreach_1_item_sav['s_item'] = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_from = $_smarty_tpl->tpl_vars['transport']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_1_item_sav['item'] = $_smarty_tpl->tpl_vars['item'];
?>
                                        <?php echo $_smarty_tpl->tpl_vars['item']->value;?>

                                    <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_1_item_sav['item'];
}
if ($foreach_1_item_sav['s_item']) {
$_smarty_tpl->tpl_vars['item'] = $foreach_1_item_sav['s_item'];
}
?>
                                </p>
                            </div>
                            <div class="price">
                                <p class="price-promotion"><?php echo smarty_modifier_convert_vnd($_smarty_tpl->tpl_vars['item']->value['price']);?>
</p>
                                <p class="text-right"><del><?php echo smarty_modifier_convert_vnd($_smarty_tpl->tpl_vars['item']->value['price_promotion']);?>
</del></p>
                            </div>
                        </div>
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
    </div>
</div><?php }
}
?>