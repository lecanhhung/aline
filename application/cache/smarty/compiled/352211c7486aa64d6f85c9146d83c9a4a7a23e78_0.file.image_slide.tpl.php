<?php /* Smarty version 3.1.28-dev/21, created on 2017-04-15 04:11:37
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\home\views\tour\image_slide.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2540258f18159301152_40646503%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '352211c7486aa64d6f85c9146d83c9a4a7a23e78' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\home\\views\\tour\\image_slide.tpl',
      1 => 1489981452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2540258f18159301152_40646503',
  'variables' => 
  array (
    'listImages' => 0,
    'pathThumb' => 0,
    'image' => 0,
    'key' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_58f18159344d41_97127032',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f18159344d41_97127032')) {
function content_58f18159344d41_97127032 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2540258f18159301152_40646503';
?>
<div class="tour-img-slide space-2">
    <div class="slides slider-banner">
        <ul class="list-unstyled lightSlider cS-hidden">
        <?php
$foreach_0_name_sav['s_item'] = isset($_smarty_tpl->tpl_vars['image']) ? $_smarty_tpl->tpl_vars['image'] : false;
$foreach_0_name_sav['s_key'] = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$foreach_0_name_sav['s_name'] = isset($_smarty_tpl->tpl_vars['__foreach_name']) ? $_smarty_tpl->tpl_vars['__foreach_name'] : false;
$_from = $_smarty_tpl->tpl_vars['listImages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['image'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['image']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
$foreach_0_name_sav['item'] = $_smarty_tpl->tpl_vars['image'];
?>
            <li>
                <div class="thumbnail">
                    <a href="javascript:void">
                        <img class="tour-slider" src="<?php echo $_smarty_tpl->tpl_vars['pathThumb']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['image']->value['path_image'];?>
" alt="" border="0" />
                        <div class="caption hidden-sm hidden-xs">
                            <p><?php echo $_smarty_tpl->tpl_vars['image']->value['description'];?>
</p>
                        </div>
                    </a>
                </div>                              
            </li>
        <?php
$_smarty_tpl->tpl_vars['image'] = $foreach_0_name_sav['item'];
}
if ($foreach_0_name_sav['s_item']) {
$_smarty_tpl->tpl_vars['image'] = $foreach_0_name_sav['s_item'];
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
    <div class="gallery hidden-xs hidden-sm space-2">
        <div class="row gutter-10">
            <div class="col-md-6">
                <div class="thumbnail">
                    <a href="javascript:void(0)" data-toggle="modal" data-target=".gallery-slideshow">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['pathThumb']->value;
echo $_smarty_tpl->tpl_vars['listImages']->value[0]['path_image'];?>
" alt="" border="0" />
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="thumbnail">
                    <a href="javascript:void(0)" data-toggle="modal" data-target=".gallery-slideshow">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['pathThumb']->value;
echo $_smarty_tpl->tpl_vars['listImages']->value[1]['path_image'];?>
" alt="" border="0" />
                        <div class="count-gallery">+<?php echo count($_smarty_tpl->tpl_vars['listImages']->value);?>
</div>
                    </a>
                </div>
            </div>
        </div>

        
        <div class="modal fade gallery-slideshow" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div id="carousel-gallery-slideshow" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                        <?php
$foreach_1_item_sav['s_item'] = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$foreach_1_item_sav['s_key'] = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_from = $_smarty_tpl->tpl_vars['listImages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_1_item_sav['item'] = $_smarty_tpl->tpl_vars['item'];
?>
                            <div class="item <?php if ($_smarty_tpl->tpl_vars['key']->value == 0) {?>active<?php }?>">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['pathThumb']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['path_image'];?>
" alt="" border="0" class="img-responsive" />
                            </div>
                        <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_1_item_sav['item'];
}
if ($foreach_1_item_sav['s_item']) {
$_smarty_tpl->tpl_vars['item'] = $foreach_1_item_sav['s_item'];
}
if ($foreach_1_item_sav['s_key']) {
$_smarty_tpl->tpl_vars['key'] = $foreach_1_item_sav['s_key'];
}
?>
                        </div>
                        <a class="left carousel-control" href="#carousel-gallery-slideshow" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-gallery-slideshow" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
?>