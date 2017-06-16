<?php /* Smarty version 3.1.28-dev/21, created on 2017-04-15 04:11:37
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\home\views\tour\experience.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:301558f1815952fac4_98326463%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b6dc5a8d83a9a3254a0d0bf3f5a680670b087e6' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\home\\views\\tour\\experience.tpl',
      1 => 1490245426,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '301558f1815952fac4_98326463',
  'variables' => 
  array (
    'base_tlp_front' => 0,
    'lable' => 0,
    'listImageExp' => 0,
    'key' => 0,
    'k' => 0,
    'pathThumb' => 0,
    'item' => 0,
    'vl' => 0,
    'user_data' => 0,
    'social' => 0,
    'infoTour' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_58f1815958a439_83061653',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f1815958a439_83061653')) {
function content_58f1815958a439_83061653 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '301558f1815952fac4_98326463';
?>

<link href="<?php echo $_smarty_tpl->tpl_vars['base_tlp_front']->value;?>
/css/slim.min.css" rel="stylesheet">
<?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_front']->value;?>
/js/slim.kickstart.min.js"><?php echo '</script'; ?>
>

<?php $_smarty_tpl->tpl_vars["k"] = new Smarty_Variable(7, null, 0);?>
<div class="img-feedback space-4">
    <h3 class="space-2"><?php echo $_smarty_tpl->tpl_vars['lable']->value['title_exp'];?>
</h3>
    <div class="image-exp gallery">
        <div class="img-exp">
            <div class="slides slider-3 ">
                <ul class="list-unstyled lightSlider cS-hidden">
                <?php
$foreach_0_name_sav['s_item'] = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$foreach_0_name_sav['s_key'] = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$foreach_0_name_sav['s_name'] = isset($_smarty_tpl->tpl_vars['__foreach_name']) ? $_smarty_tpl->tpl_vars['__foreach_name'] : false;
$_from = $_smarty_tpl->tpl_vars['listImageExp']->value;
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
                <?php if ($_smarty_tpl->tpl_vars['key']->value < 3) {?>
                    <li>
                        <div class="thumbnail">
                            <a href="#" data-toggle="modal" data-target=".image-slideshow<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['pathThumb']->value;
echo $_smarty_tpl->tpl_vars['item']->value['path_image'];?>
" alt="" border="0" />
                                <?php if (($_smarty_tpl->tpl_vars['key']->value == 2) || ($_smarty_tpl->tpl_vars['key']->value == count($_smarty_tpl->tpl_vars['listImageExp']->value))) {?><div class="count-gallery">+<?php echo count($_smarty_tpl->tpl_vars['listImageExp']->value);?>
</div> <?php }?>
                            </a>
                        </div>                              
                    </li>
                <?php }?>
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
            
             <div class="modal fade image-slideshow<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"  role="dialog"  aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div id="carousel-image-slideshow<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                <?php
$foreach_1_name_sav['s_item'] = isset($_smarty_tpl->tpl_vars['vl']) ? $_smarty_tpl->tpl_vars['vl'] : false;
$foreach_1_name_sav['s_key'] = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$foreach_1_name_sav['s_name'] = isset($_smarty_tpl->tpl_vars['__foreach_name']) ? $_smarty_tpl->tpl_vars['__foreach_name'] : false;
$_from = $_smarty_tpl->tpl_vars['listImageExp']->value;
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
                                    <div class="item <?php if ($_smarty_tpl->tpl_vars['key']->value == 0) {?>active<?php }?>">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['pathThumb']->value;
echo $_smarty_tpl->tpl_vars['vl']->value['path_image'];?>
" alt="" border="0" class="img-responsive" />
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

                
            </div>
            <div class="text-right space-2 hidden-xs hidden-sm">
                <a href="javascript:void(0)" data-toggle="modal" data-target="#uploadImg"><u>Đăng ảnh</u></a>

                <div id="uploadImg" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <button type="button" class="btn btn-default close" data-dismiss="modal">Close</button>
                            <div class="modal-body image-post">
                            <?php if ($_smarty_tpl->tpl_vars['user_data']->value == '') {?>
                                <ul id="boxx-login" class="">
                                    <li>
                                        Sử dụng tài khoản để đăng nhập
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['social']->value['facebook_login'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_front']->value;?>
/images/login-fb.png" alt="" border="0" /></a>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['social']->value['googleplus_login'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_front']->value;?>
/images/login-gg.png" alt="" border="0" /></a>
                                    </li>
                                </ul>
                            <?php } else { ?> 
                            
                                <form action="" name="upload-post" id="upload-post" class="check-file">
                                    <div class="slim background" data-label="Drop your background here"  data-ratio="3:2" style='width: 100%; min-height: 100%; margin-left: auto '>
                                        <input class="form-control" id="background_url" name="background_url" type="file" value="" required  >
                                        <span id="valid_background_url" class="red"></span>
                                    </div>

                                    <input type="hidden" name="data[object_id]" value="<?php echo $_smarty_tpl->tpl_vars['infoTour']->value['tour_id'];?>
">

                                    <button type="button" class="btn btn-primary  upload-post">Upload now!</button>
                                </form>
                            <?php }?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> <!-- img-expirence -->
 
</div>

<?php }
}
?>