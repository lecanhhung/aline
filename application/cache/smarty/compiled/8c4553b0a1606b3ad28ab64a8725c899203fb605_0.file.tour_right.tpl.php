<?php /* Smarty version 3.1.28-dev/21, created on 2017-04-15 04:11:37
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\home\views\tour\tour_right.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:266158f181591f1f24_87780789%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c4553b0a1606b3ad28ab64a8725c899203fb605' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\home\\views\\tour\\tour_right.tpl',
      1 => 1488526070,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '266158f181591f1f24_87780789',
  'variables' => 
  array (
    'pathLogo' => 0,
    'tour' => 0,
    'countNum' => 0,
    'strPos' => 0,
    'countHotline' => 0,
    'lable' => 0,
    'strPoss' => 0,
    'infoTour' => 0,
    'base_url' => 0,
    'transport' => 0,
    'item' => 0,
    'base_tlp_front' => 0,
    'day' => 0,
    'k' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_58f181592e3760_55527636',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f181592e3760_55527636')) {
function content_58f181592e3760_55527636 ($_smarty_tpl) {
if (!is_callable('smarty_function_math')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\function.math.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '266158f181591f1f24_87780789';
?>
<div id="right-sidebar" class="col-xs-12 col-sm-12 col-md-4 space-4">
    <!-- box info tour -->
    <div class="box-info">
        <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4 logo">
                <img src="<?php echo $_smarty_tpl->tpl_vars['pathLogo']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['tour']->value['logo_url'];?>
" alt="" border="0" class="img-responsive" />
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8">
                <h3><?php echo $_smarty_tpl->tpl_vars['tour']->value['agency_name'];?>
</h3>

                <ul class="address list-unstyled">
                    <?php $_smarty_tpl->tpl_vars["countNum"] = new Smarty_Variable(preg_match_all('/[^\s]/u',(rtrim($_smarty_tpl->tpl_vars['tour']->value['phone'])), $tmp), null, 0);?>
                    <?php echo smarty_function_math(array('equation'=>"x - y",'x'=>$_smarty_tpl->tpl_vars['countNum']->value,'y'=>1,'assign'=>"strPos"),$_smarty_tpl);?>


                    <li class="website"><span><i class="fa fa-globe" aria-hidden="true"></i></span><a href="<?php echo $_smarty_tpl->tpl_vars['tour']->value['website'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['tour']->value['website'];?>
"><?php echo $_smarty_tpl->tpl_vars['tour']->value['website'];?>
</a></li>
                    <li class="mail"><span><i class="fa fa-envelope" aria-hidden="true"></i></span><a href="mailto:<?php echo $_smarty_tpl->tpl_vars['tour']->value['contact_email'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['tour']->value['contact_email'];?>
"><?php echo $_smarty_tpl->tpl_vars['tour']->value['contact_email'];?>
</a></li>
                    <li class="tel"><span><i class="fa fa-phone" aria-hidden="true"></i></span><a href="tel:<?php echo substr($_smarty_tpl->tpl_vars['tour']->value['phone'],0,-2);?>
 xx"><?php echo substr($_smarty_tpl->tpl_vars['tour']->value['phone'],0,-2);?>
<span class="hidden-number">xx</span><span class="hidden-number" style="display: none"><?php echo substr($_smarty_tpl->tpl_vars['tour']->value['phone'],$_smarty_tpl->tpl_vars['strPos']->value,2);?>
</span></a></li>
                </ul>

            </div>
            
            <div class="text-center">
                <?php $_smarty_tpl->tpl_vars["countHotline"] = new Smarty_Variable(preg_match_all('/[^\s]/u',(rtrim($_smarty_tpl->tpl_vars['tour']->value['hotline'])), $tmp), null, 0);?>
                <?php echo smarty_function_math(array('equation'=>"x - y",'x'=>$_smarty_tpl->tpl_vars['countHotline']->value,'y'=>1,'assign'=>"strPoss"),$_smarty_tpl);?>

                <p class="hotline">
                    <span><?php echo $_smarty_tpl->tpl_vars['lable']->value['hotline'];?>
:</span> 
                    <big><?php echo substr($_smarty_tpl->tpl_vars['tour']->value['hotline'],0,-2);?>
<span class="hidden-number">xx</span><span class="hidden-number" style="display: none"><?php echo substr($_smarty_tpl->tpl_vars['tour']->value['phone'],$_smarty_tpl->tpl_vars['strPoss']->value,2);?>
</span></big>
                    <a href="javascript:void(0)" class="btn btn-link" id="showPhone" data-tour="<?php echo $_smarty_tpl->tpl_vars['infoTour']->value['tour_id'];?>
" data-agency="<?php echo $_smarty_tpl->tpl_vars['infoTour']->value['agency_id'];?>
" data-types='5'><?php echo $_smarty_tpl->tpl_vars['lable']->value['btn_show'];?>
</a>
                </p>
                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
agency/<?php echo $_smarty_tpl->tpl_vars['tour']->value['slug'];?>
" class="text-uppercase more"><u>Thông tin về chúng tôi</u></a>
            </div>
        </div>
    </div>
    <!-- callback -->
    <div class="callback space-2">
        <button type="button" class="btn btn-primary btn-block text-uppercase" data-toggle="modal" data-target="#callback" data-tour="<?php echo $_smarty_tpl->tpl_vars['infoTour']->value['tour_id'];?>
" data-agency="<?php echo $_smarty_tpl->tpl_vars['infoTour']->value['agency_id'];?>
" data-types='4'><?php echo $_smarty_tpl->tpl_vars['lable']->value['call_again_me'];?>
</button>
        <div id="callback" class="modal fade" role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <button type="button" class="btn btn-default close" data-dismiss="modal">Close</button>
                    <div class="modal-body">
                        <form action="" role="form" id="FormCallBack">
                            <input type="hidden" name="data[tour_id]" value="<?php echo $_smarty_tpl->tpl_vars['infoTour']->value['tour_id'];?>
">
                            <div class="form-group">
                                <label  class="control-label" for="inputTel"><?php echo $_smarty_tpl->tpl_vars['lable']->value['phone_number'];?>
 <span>*</span></label>
                                <input type="tel" class="form-control" id="inputTel" name="data[phone]" placeholder="" required />
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="inputMess" ><?php echo $_smarty_tpl->tpl_vars['lable']->value['lable_message'];?>
</label>
                                <textarea class="form-control" rows="5" id="inputMess" name="data[message]"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-primary btn-block text-uppercase call-back"><?php echo $_smarty_tpl->tpl_vars['lable']->value['call_again_me'];?>
</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- schedule tour -->
    <div class="schedule-tour space-1">
        <ul class="list-unstyled">
            <li>
                <p><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_transport'];?>
:</p>
                <p>
                    <?php
$foreach_0_item_sav['s_item'] = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_from = $_smarty_tpl->tpl_vars['transport']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_0_item_sav['item'] = $_smarty_tpl->tpl_vars['item'];
?>
                        <?php echo $_smarty_tpl->tpl_vars['item']->value;?>

                    <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_0_item_sav['item'];
}
if ($foreach_0_item_sav['s_item']) {
$_smarty_tpl->tpl_vars['item'] = $foreach_0_item_sav['s_item'];
}
?>
                </p>
            </li>
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
$foreach_1_item_sav['s_item'] = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$foreach_1_item_sav['s_key'] = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_from = $_smarty_tpl->tpl_vars['day']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_1_item_sav['item'] = $_smarty_tpl->tpl_vars['item'];
?>
                        <?php echo smarty_function_math(array('equation'=>"x + y",'x'=>$_smarty_tpl->tpl_vars['k']->value,'y'=>1,'assign'=>"i"),$_smarty_tpl);?>

                        <?php echo $_smarty_tpl->tpl_vars['lable']->value[$_smarty_tpl->tpl_vars['item']->value];?>
 <?php if ($_smarty_tpl->tpl_vars['i']->value != count($_smarty_tpl->tpl_vars['day']->value)) {?>,<?php }?>
                        <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_1_item_sav['item'];
}
if ($foreach_1_item_sav['s_item']) {
$_smarty_tpl->tpl_vars['item'] = $foreach_1_item_sav['s_item'];
}
if ($foreach_1_item_sav['s_key']) {
$_smarty_tpl->tpl_vars['k'] = $foreach_1_item_sav['s_key'];
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
    <!-- highlight tour -->
    <div class="highlight-tour space-1">
        <h3><?php echo $_smarty_tpl->tpl_vars['lable']->value['hightlights'];?>
:</h3>
        <div class="text-right">
            <a href="javascript:void(0)" data-toggle="modal" data-target="#viewmore"><i class="fa fa-angle-double-right" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['lable']->value['see_more'];?>
</a>
        </div>
        <div class="line-limit"><?php echo $_smarty_tpl->tpl_vars['tour']->value['short_description'];?>
</div>
        
        <div id="viewmore" class="modal fase" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="btn btn-default close" data-dismiss="modal">Close</button>
                        <h3><?php echo $_smarty_tpl->tpl_vars['lable']->value['hightlights'];?>
</h3>
                        <?php echo $_smarty_tpl->tpl_vars['tour']->value['short_description'];?>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-lg btn-block text-uppercase" data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
?>