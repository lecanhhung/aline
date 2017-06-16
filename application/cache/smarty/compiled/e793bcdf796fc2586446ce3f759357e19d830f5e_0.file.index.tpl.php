<?php /* Smarty version 3.1.28-dev/21, created on 2017-04-18 03:25:55
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\home\views\download\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2624458f56b2377fd23_33478396%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e793bcdf796fc2586446ce3f759357e19d830f5e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\home\\views\\download\\index.tpl',
      1 => 1492478740,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2624458f56b2377fd23_33478396',
  'variables' => 
  array (
    'pathLogo' => 0,
    'tour' => 0,
    'pathThumb' => 0,
    'tour_id' => 0,
    'general_hotel' => 0,
    'general_service' => 0,
    'day_amount' => 0,
    'tourdays' => 0,
    'lable' => 0,
    'night_amount' => 0,
    'day' => 0,
    'k' => 0,
    'item' => 0,
    'i' => 0,
    'transport' => 0,
    'base_tlp_front' => 0,
    'listImages' => 0,
    'key' => 0,
    'tourInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_58f56b239c96f6_63232615',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f56b239c96f6_63232615')) {
function content_58f56b239c96f6_63232615 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_getdaysnight')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\modifier.getdaysnight.php';
if (!is_callable('smarty_modifier_getday')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\modifier.getday.php';
if (!is_callable('smarty_function_math')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\function.math.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_convert_vnd')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\modifier.convert_vnd.php';

$_smarty_tpl->properties['nocache_hash'] = '2624458f56b2377fd23_33478396';
?>
<div id="download-tour">
    <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <div id="page" class="template-background">
        <nav class="navbar opaque-navbar">
            <div class="container">
                <div class="navbar-header pull-right">
                    <a href="#" class="navbar-brand" >
                        <img src="<?php echo $_smarty_tpl->tpl_vars['pathLogo']->value;
echo $_smarty_tpl->tpl_vars['tour']->value['logo_url'];?>
" alt="" border="0" />
                    </a>
                </div>
            </div>
        </nav>
        <div class="banner-tour">
            <div style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['pathThumb']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['tour']->value['path_image'];?>
)"></div>
        </div>

        <?php $_smarty_tpl->tpl_vars['tour_id'] = new Smarty_Variable($_smarty_tpl->tpl_vars['tour']->value['tour_id'], null, 0);?>
        <?php $_smarty_tpl->tpl_vars['tourdays'] = new Smarty_Variable(smarty_modifier_getdaysnight($_smarty_tpl->tpl_vars['tour_id']->value), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['day_amount'] = new Smarty_Variable($_smarty_tpl->tpl_vars['tour']->value['day_amount'], null, 0);?>
        <?php $_smarty_tpl->tpl_vars['night_amount'] = new Smarty_Variable($_smarty_tpl->tpl_vars['tour']->value['night_amount'], null, 0);?>

        <?php $_smarty_tpl->tpl_vars["hotel"] = new Smarty_Variable($_smarty_tpl->tpl_vars['general_hotel']->value['items']['hotel'], null, 0);?>
        <?php $_smarty_tpl->tpl_vars["service"] = new Smarty_Variable($_smarty_tpl->tpl_vars['general_service']->value['items']['service'], null, 0);?>
        <div class="caption-tour">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-9">
                        <h1><?php echo $_smarty_tpl->tpl_vars['tour']->value['title'];?>
</h1>
                        <p class="line"></p>
                        <p>
                            <span> <?php echo $_smarty_tpl->tpl_vars['tourdays']->value[$_smarty_tpl->tpl_vars['day_amount']->value];?>
 <?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_day'];?>
 - <?php echo $_smarty_tpl->tpl_vars['tourdays']->value[$_smarty_tpl->tpl_vars['night_amount']->value];?>
 <?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_night'];?>
</span>
                            <span class="divider"> | </span>
                            <span><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['lable']->value['starting_time'];?>
: 
                                <?php if ($_smarty_tpl->tpl_vars['tour']->value['is_daily'] == 1) {?> <?php echo $_smarty_tpl->tpl_vars['lable']->value['every_day'];
} elseif ($_smarty_tpl->tpl_vars['tour']->value['is_other'] != '') {
echo $_smarty_tpl->tpl_vars['tour']->value['is_other'];
} elseif ($_smarty_tpl->tpl_vars['tour']->value['is_day_of_week'] == 1) {?>
                                <?php $_smarty_tpl->tpl_vars["day"] = new Smarty_Variable(smarty_modifier_getday($_smarty_tpl->tpl_vars['tour']->value['tour_id']), null, 0);?>
                                <?php
$foreach_0_item_sav['s_item'] = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$foreach_0_item_sav['s_key'] = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_from = $_smarty_tpl->tpl_vars['day']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_0_item_sav['item'] = $_smarty_tpl->tpl_vars['item'];
?>
                                <?php echo smarty_function_math(array('equation'=>"x + y",'x'=>$_smarty_tpl->tpl_vars['k']->value,'y'=>1,'assign'=>"i"),$_smarty_tpl);?>

                                <?php echo $_smarty_tpl->tpl_vars['lable']->value[$_smarty_tpl->tpl_vars['item']->value];?>
 <?php if ($_smarty_tpl->tpl_vars['i']->value != count($_smarty_tpl->tpl_vars['day']->value)) {?>,<?php }?>
                                <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_0_item_sav['item'];
}
if ($foreach_0_item_sav['s_item']) {
$_smarty_tpl->tpl_vars['item'] = $foreach_0_item_sav['s_item'];
}
if ($foreach_0_item_sav['s_key']) {
$_smarty_tpl->tpl_vars['k'] = $foreach_0_item_sav['s_key'];
}
?>
                                <?php echo $_smarty_tpl->tpl_vars['lable']->value['every_week'];?>

                                <?php } else {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['tour']->value['day_date'],"%d-%m-%Y");
}?>
                            </span>
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 price">
                        <p><del><?php echo smarty_modifier_convert_vnd($_smarty_tpl->tpl_vars['tour']->value['price']);?>
</del></p>
                        <p class="price-promotion"><?php echo smarty_modifier_convert_vnd($_smarty_tpl->tpl_vars['tour']->value['price_promotion']);?>
</p>
                    </div>
                </div>
            </div>  
        </div>
        <div class="tour-detail print container">
            <div class="row">
                <!-- schedule tour -->
                <div class="schedule-tour col-xs-12 col-sm-12 col-md-12 space-4">
                    <div class="row">
                        <ul class="list-unstyled list-inline">
                            <li>
                                <p><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_transport'];?>
:</p>
                                <p>
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
                            </li>
                            <li class="divider hidden-xs">|</li>
                            <li>
                                <p><?php echo $_smarty_tpl->tpl_vars['lable']->value['starting_from'];?>
: </p>
                                <p><img src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_front']->value;?>
/images/place1.png" alt="" border="0"/> <?php echo $_smarty_tpl->tpl_vars['tour']->value['cat_name'];?>
</p>
                            </li>
                            <li>
                                <p><?php echo $_smarty_tpl->tpl_vars['lable']->value['starting_time'];?>
:</p>
                                <p><img src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_front']->value;?>
/images/timer.png" alt="" border="0" />
                                    <?php if ($_smarty_tpl->tpl_vars['tour']->value['is_daily'] == 1) {?> <?php echo $_smarty_tpl->tpl_vars['lable']->value['every_day'];
} elseif ($_smarty_tpl->tpl_vars['tour']->value['is_other'] != '') {
echo $_smarty_tpl->tpl_vars['tour']->value['is_other'];
} elseif ($_smarty_tpl->tpl_vars['tour']->value['is_day_of_week'] == 1) {?>
                                    
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
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['tour']->value['day_date'],"%d-%m-%Y");
}?>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- img slide tour -->
                <div class="tour-img-slide col-xs-12 col-sm-12 col-md-12">
                    <h3><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_image'];?>
</h3>
                    <div class="gallery download-tour">
                        <div class="row gutter-10">
                            <div class="col-md-12">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['pathThumb']->value;
echo $_smarty_tpl->tpl_vars['listImages']->value[0]['path_image'];?>
" alt="" border="0" class="img-responsive" />
                            </div>
                            <?php
$foreach_3_name_sav['s_item'] = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$foreach_3_name_sav['s_key'] = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$foreach_3_name_sav['s_name'] = isset($_smarty_tpl->tpl_vars['__foreach_name']) ? $_smarty_tpl->tpl_vars['__foreach_name'] : false;
$_from = $_smarty_tpl->tpl_vars['listImages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_3_name_sav['item'] = $_smarty_tpl->tpl_vars['item'];
?>
                            <?php if ($_smarty_tpl->tpl_vars['key']->value > 0 && $_smarty_tpl->tpl_vars['key']->value <= 2) {?>
                            <div class="col-md-6 space-2">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['pathThumb']->value;
echo $_smarty_tpl->tpl_vars['item']->value['path_image'];?>
" alt="" border="0" class="img-responsive" />
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
                    </div>
                </div>
                <!-- lịch trình tour -->
                <?php echo $_smarty_tpl->getSubTemplate ("download/schedule.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                <!-- địa điểm đón khách -->
                <?php echo $_smarty_tpl->getSubTemplate ("download/pickup_point.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                <!-- khách sạn -->
                <?php echo $_smarty_tpl->getSubTemplate ("download/hotel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                <!-- dịch vụ -->
                <?php echo $_smarty_tpl->getSubTemplate ("download/services.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                
                <!-- điểu kiện sử dụng tour -->
                <div class="tour-terms-of-use col-xs-12 col-sm-12 col-md-12">
                    <ul  class="nav nav-pills">
                        <li class="active"><a  href="#1a" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_include'];?>
</a></li>
                    </ul>
                    <div class="tab-content clearfix scrollbar-inner">
                        <div class="tab-pane active" id="1a">
                            <ul class="list-unstyled">
                                <?php echo $_smarty_tpl->tpl_vars['tourInfo']->value['includes'];?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        
    </div>
</body>
</html>

</div>

<?php }
}
?>