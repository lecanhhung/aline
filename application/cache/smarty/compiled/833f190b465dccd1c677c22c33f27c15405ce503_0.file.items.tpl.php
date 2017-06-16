<?php /* Smarty version 3.1.28-dev/21, created on 2017-04-17 04:09:55
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\home\views\search\items.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2996758f423f39c6938_52473471%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '833f190b465dccd1c677c22c33f27c15405ce503' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\home\\views\\search\\items.tpl',
      1 => 1492393784,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2996758f423f39c6938_52473471',
  'variables' => 
  array (
    'tour' => 0,
    'item' => 0,
    'id_compare' => 0,
    'base_url' => 0,
    'pathThumb' => 0,
    'base_tlp_front' => 0,
    'vl' => 0,
    'tour_id' => 0,
    'day_amount' => 0,
    'tourdays' => 0,
    'lable' => 0,
    'night_amount' => 0,
    'transport' => 0,
    'tr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_58f423f3b4e639_88411937',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f423f3b4e639_88411937')) {
function content_58f423f3b4e639_88411937 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\modifier.replace.php';
if (!is_callable('smarty_modifier_getdaysnight')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\modifier.getdaysnight.php';
if (!is_callable('smarty_modifier_convert_vnd')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\modifier.convert_vnd.php';

$_smarty_tpl->properties['nocache_hash'] = '2996758f423f39c6938_52473471';
?>

<?php
$foreach_0_test_sav['s_item'] = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$foreach_0_test_sav['s_key'] = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$foreach_0_test_sav['s_name'] = isset($_smarty_tpl->tpl_vars['__foreach_test']) ? $_smarty_tpl->tpl_vars['__foreach_test'] : false;
$_from = $_smarty_tpl->tpl_vars['tour']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['__foreach_test'] = new Smarty_Variable(array('iteration' => 0));
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_test']->value['iteration']++;
$foreach_0_test_sav['item'] = $_smarty_tpl->tpl_vars['item'];
?>
    <?php if ((isset($_smarty_tpl->tpl_vars['__foreach_test']->value['iteration']) ? $_smarty_tpl->tpl_vars['__foreach_test']->value['iteration'] : null) % 2 == 1) {?>
        <div class="row">
        <?php }?>
        <div class="col-xs-12 col-sm-6 col-md-6" id="item-<?php echo $_smarty_tpl->tpl_vars['item']->value['tour_id'];?>
">
            <div class="box box-vertical">
                <div class="box-header" data-toggle="tooltip" data-placement="top" title="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value['phone'],' ','');?>
">
                    <div class="compare hidden-xs hidden-sm">
                        <a class="icon <?php if (in_array($_smarty_tpl->tpl_vars['item']->value['tour_id'],$_smarty_tpl->tpl_vars['id_compare']->value)) {?>icon-hover<?php }?>" href="javascript:void(0)" data-toggle="popover" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['tour_id'];?>
" data-a_id="<?php echo $_smarty_tpl->tpl_vars['item']->value['agency_id'];?>
"></a>
                    </div>
                    
                    <div class="slider-image custom-slider">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
tour/<?php echo $_smarty_tpl->tpl_vars['item']->value['slug'];?>
" class="link"></a>
                        <ul class="lightSlider list-unstyled">
                            <li>
                                <div class="item">
                                    <div class="background" style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['pathThumb']->value;
echo $_smarty_tpl->tpl_vars['item']->value['path_image'];?>
')"></div>
                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['item']->value['noibat'] > 0) {?>
                                    <span class="ribbon">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_front']->value;?>
/images/ribbon-noibat.png" alt="" border="0" class="img-responsive">
                                    </span>
                                <?php }?>
                            </li>
                            <?php if (count($_smarty_tpl->tpl_vars['item']->value['list_image']) > 1) {?>
                                <?php
$foreach_1_vl_sav['s_item'] = isset($_smarty_tpl->tpl_vars['vl']) ? $_smarty_tpl->tpl_vars['vl'] : false;
$_from = $_smarty_tpl->tpl_vars['item']->value['list_image'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['vl'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['vl']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['vl']->value) {
$_smarty_tpl->tpl_vars['vl']->_loop = true;
$foreach_1_vl_sav['item'] = $_smarty_tpl->tpl_vars['vl'];
?>
                                    <li>
                                        <div class="item">
                                            <div class="background" style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['pathThumb']->value;
echo $_smarty_tpl->tpl_vars['vl']->value['path_image'];?>
')"></div>
                                        </div>
                                    </li>
                                <?php
$_smarty_tpl->tpl_vars['vl'] = $foreach_1_vl_sav['item'];
}
if ($foreach_1_vl_sav['s_item']) {
$_smarty_tpl->tpl_vars['vl'] = $foreach_1_vl_sav['s_item'];
}
?>
                            <?php }?>
                        </ul>
                    </div>          
                </div>

                <?php $_smarty_tpl->tpl_vars['tour_id'] = new Smarty_Variable($_smarty_tpl->tpl_vars['item']->value['tour_id'], null, 0);?>
                <?php $_smarty_tpl->tpl_vars['tourdays'] = new Smarty_Variable(smarty_modifier_getdaysnight($_smarty_tpl->tpl_vars['tour_id']->value), null, 0);?>
                <?php $_smarty_tpl->tpl_vars['day_amount'] = new Smarty_Variable($_smarty_tpl->tpl_vars['item']->value['day_amount'], null, 0);?>
                <?php $_smarty_tpl->tpl_vars['night_amount'] = new Smarty_Variable($_smarty_tpl->tpl_vars['item']->value['night_amount'], null, 0);?>
                <div class="box-body">
                    <div class="box-title">
                        <h2><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
tour/<?php echo $_smarty_tpl->tpl_vars['item']->value['slug'];?>
" class="tour-title"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></h2>
                        <p><?php echo $_smarty_tpl->tpl_vars['tourdays']->value[$_smarty_tpl->tpl_vars['day_amount']->value];?>
 <?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_day'];?>
 - <?php echo $_smarty_tpl->tpl_vars['tourdays']->value[$_smarty_tpl->tpl_vars['night_amount']->value];?>
 <?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_night'];?>
</p>
                    </div>
                    <div class="box-content">
                        <div class="place-transport">
                            <p class="place"><?php echo $_smarty_tpl->tpl_vars['item']->value['l_cat_name'];?>
</p>
                            <p class="text-right">
                                <?php $_smarty_tpl->tpl_vars["transport"] = new Smarty_Variable($_smarty_tpl->tpl_vars['item']->value['transport'], null, 0);?>
                                <?php
$foreach_2_name_sav['s_item'] = isset($_smarty_tpl->tpl_vars['tr']) ? $_smarty_tpl->tpl_vars['tr'] : false;
$foreach_2_name_sav['s_key'] = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$foreach_2_name_sav['s_name'] = isset($_smarty_tpl->tpl_vars['__foreach_name']) ? $_smarty_tpl->tpl_vars['__foreach_name'] : false;
$_from = $_smarty_tpl->tpl_vars['transport']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['tr'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['tr']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['tr']->value) {
$_smarty_tpl->tpl_vars['tr']->_loop = true;
$foreach_2_name_sav['item'] = $_smarty_tpl->tpl_vars['tr'];
?>
                                    <?php echo $_smarty_tpl->tpl_vars['tr']->value;?>

                                <?php
$_smarty_tpl->tpl_vars['tr'] = $foreach_2_name_sav['item'];
}
if ($foreach_2_name_sav['s_item']) {
$_smarty_tpl->tpl_vars['tr'] = $foreach_2_name_sav['s_item'];
}
if ($foreach_2_name_sav['s_key']) {
$_smarty_tpl->tpl_vars['key'] = $foreach_2_name_sav['s_key'];
}
if ($foreach_2_name_sav['s_name']) {
$_smarty_tpl->tpl_vars['__foreach_name'] = $foreach_2_name_sav['s_name'];
}
?>
                            </p>
                        </div>
                        <div class="price">
                            <p class="price-promotion"><?php echo smarty_modifier_convert_vnd($_smarty_tpl->tpl_vars['item']->value['price_promotion']);?>
</p>
                            <p class="text-right"><del><?php echo smarty_modifier_convert_vnd($_smarty_tpl->tpl_vars['item']->value['price']);?>
</del></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if ((isset($_smarty_tpl->tpl_vars['__foreach_test']->value['iteration']) ? $_smarty_tpl->tpl_vars['__foreach_test']->value['iteration'] : null) % 2 == 0 || (isset($_smarty_tpl->tpl_vars['__foreach_test']->value['iteration']) ? $_smarty_tpl->tpl_vars['__foreach_test']->value['iteration'] : null) == count($_smarty_tpl->tpl_vars['tour']->value)) {?>
        </div>
    <?php }?>

<?php
$_smarty_tpl->tpl_vars['item'] = $foreach_0_test_sav['item'];
}
if ($foreach_0_test_sav['s_item']) {
$_smarty_tpl->tpl_vars['item'] = $foreach_0_test_sav['s_item'];
}
if ($foreach_0_test_sav['s_key']) {
$_smarty_tpl->tpl_vars['key'] = $foreach_0_test_sav['s_key'];
}
if ($foreach_0_test_sav['s_name']) {
$_smarty_tpl->tpl_vars['__foreach_test'] = $foreach_0_test_sav['s_name'];
}
?>      
<?php }
}
?>