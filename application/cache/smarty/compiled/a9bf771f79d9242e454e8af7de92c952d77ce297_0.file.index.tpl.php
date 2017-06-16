<?php /* Smarty version 3.1.28-dev/21, created on 2017-04-18 03:16:43
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\home\views\tour\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1474858f568fbc6eed2_09007633%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9bf771f79d9242e454e8af7de92c952d77ce297' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\home\\views\\tour\\index.tpl',
      1 => 1492478178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1474858f568fbc6eed2_09007633',
  'variables' => 
  array (
    'facebook_app_id' => 0,
    'facebook_graph_version' => 0,
    'pathThumb' => 0,
    'tour' => 0,
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
    'id_compare' => 0,
    'countHotline' => 0,
    'strPoss' => 0,
    'pathLogo' => 0,
    'services' => 0,
    'ser' => 0,
    'pos' => 0,
    'tourInfo' => 0,
    'base_url' => 0,
    'slug' => 0,
    'tourAgency' => 0,
    'infoTour' => 0,
    'tourSame' => 0,
    'tourDes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_58f568fc092d05_51463602',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f568fc092d05_51463602')) {
function content_58f568fc092d05_51463602 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_getdaysnight')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\modifier.getdaysnight.php';
if (!is_callable('smarty_modifier_getday')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\modifier.getday.php';
if (!is_callable('smarty_function_math')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\function.math.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_convert_vnd')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\modifier.convert_vnd.php';
if (!is_callable('smarty_modifier_convert_unicode')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\modifier.convert_unicode.php';

$_smarty_tpl->properties['nocache_hash'] = '1474858f568fbc6eed2_09007633';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div id="fb-root"></div>
<?php echo '<script'; ?>
>
var facebook_app_id        = "<?php echo $_smarty_tpl->tpl_vars['facebook_app_id']->value;?>
";
var facebook_graph_version = "<?php echo $_smarty_tpl->tpl_vars['facebook_graph_version']->value;?>
";


   window.fbAsyncInit = function() {
    FB.init({
      appId      : facebook_app_id,
      xfbml      : true,
      version    : facebook_graph_version
    });
  };
  
  (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version="+facebook_graph_version+"&appId="+facebook_app_id;
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

<?php echo '</script'; ?>
>

<div id="page" class="template-background">
	<?php echo $_smarty_tpl->getSubTemplate ("menu-default.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<div class="banner">
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

    <div id="note_compare" data-id="<?php echo count($_smarty_tpl->tpl_vars['id_compare']->value);?>
"></div>
	<div class="tour-detail container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 hidden-md hidden-lg">
				<div class="box-info ">
					<div class="text-center">
						<?php $_smarty_tpl->tpl_vars["countHotline"] = new Smarty_Variable(preg_match_all('/[^\s]/u',(rtrim($_smarty_tpl->tpl_vars['tour']->value['hotline'])), $tmp), null, 0);?>
                        <?php echo smarty_function_math(array('equation'=>"x - y",'x'=>$_smarty_tpl->tpl_vars['countHotline']->value,'y'=>1,'assign'=>"strPoss"),$_smarty_tpl);?>

                        <p class="hotline">
                            <span><?php echo $_smarty_tpl->tpl_vars['lable']->value['hotline'];?>
:</span> 
                            <big><?php echo substr($_smarty_tpl->tpl_vars['tour']->value['hotline'],0,-2);?>
<span class="hidden-number">xx</span><span class="hidden-number" style="display:none"><?php echo substr($_smarty_tpl->tpl_vars['tour']->value['phone'],$_smarty_tpl->tpl_vars['strPoss']->value,2);?>
</span></big>
                        </p>
                    </div>
					<div class="col-xs-4 col-xs-offset-1 col-sm-4 col-sm-offset-1 logo">
						<img src="<?php echo $_smarty_tpl->tpl_vars['pathLogo']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['tour']->value['logo_url'];?>
" alt="" border="0" class="img-responsive" />
					</div>
					<div class="col-xs-7 col-sm-7">
						<h3><?php echo $_smarty_tpl->tpl_vars['tour']->value['agency_name'];?>
</h3>
					</div>
					<div class="col-xs-12 col-sm-12 text-center">
						<a href="javascript:void(0)" id="showContact">
							<i class="fa fa-angle-down" aria-hidden="true"></i>
						</a>
					</div>
				</div>
			</div>

			<?php echo $_smarty_tpl->getSubTemplate ("tour/tour_right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


			<div id="left-content" class="col-xs-12 col-sm-12 col-md-8 space-2">
				<!-- img slide tour -->
				<?php echo $_smarty_tpl->getSubTemplate ("tour/image_slide.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


                <!-- lịch trình tour -->
                <?php echo $_smarty_tpl->getSubTemplate ("tour/schedule.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

				<!-- địa điểm đón khách -->
				<?php echo $_smarty_tpl->getSubTemplate ("tour/pickup_point.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

				<!-- khách sạn -->
				<?php echo $_smarty_tpl->getSubTemplate ("tour/hotel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

				<!-- dịch vụ -->
				<div class="tour-services space-4">
					<h3><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_service'];?>
:</h3>
					<ul class="style-check list-inline list-unstyled row">
						<?php
$foreach_1_name_sav['s_item'] = isset($_smarty_tpl->tpl_vars['ser']) ? $_smarty_tpl->tpl_vars['ser'] : false;
$foreach_1_name_sav['s_key'] = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$foreach_1_name_sav['s_name'] = isset($_smarty_tpl->tpl_vars['__foreach_name']) ? $_smarty_tpl->tpl_vars['__foreach_name'] : false;
$_from = $_smarty_tpl->tpl_vars['services']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ser'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ser']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['__foreach_name'] = new Smarty_Variable(array('iteration' => 0));
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['ser']->value) {
$_smarty_tpl->tpl_vars['ser']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_name']->value['iteration']++;
$foreach_1_name_sav['item'] = $_smarty_tpl->tpl_vars['ser'];
?>
							<?php $_smarty_tpl->tpl_vars["pos"] = new Smarty_Variable((isset($_smarty_tpl->tpl_vars['__foreach_name']->value['iteration']) ? $_smarty_tpl->tpl_vars['__foreach_name']->value['iteration'] : null), null, 0);?>
							<li class="col-xs-6 col-sm-6 col-md-4"><?php echo $_smarty_tpl->tpl_vars['lable']->value[$_smarty_tpl->tpl_vars['ser']->value];?>
</li>
							<?php if (($_smarty_tpl->tpl_vars['pos']->value % 2 == 0) && ($_smarty_tpl->tpl_vars['pos']->value > 1)) {?>
							<li class="col-xs-12 col-sm-12 hidden-md hidden-lg divider"></li>
							<?php }?>

							<?php if (($_smarty_tpl->tpl_vars['pos']->value % 6 == 0) && ($_smarty_tpl->tpl_vars['pos']->value > 2)) {?>
							<div class="collapse" id="li-addmore">
							<?php }?>

							<?php if (($_smarty_tpl->tpl_vars['pos']->value == count($_smarty_tpl->tpl_vars['services']->value)) && ($_smarty_tpl->tpl_vars['pos']->value > 7)) {?>
							</div>
							<?php }?>
						<?php
$_smarty_tpl->tpl_vars['ser'] = $foreach_1_name_sav['item'];
}
if ($foreach_1_name_sav['s_item']) {
$_smarty_tpl->tpl_vars['ser'] = $foreach_1_name_sav['s_item'];
}
if ($foreach_1_name_sav['s_key']) {
$_smarty_tpl->tpl_vars['key'] = $foreach_1_name_sav['s_key'];
}
if ($foreach_1_name_sav['s_name']) {
$_smarty_tpl->tpl_vars['__foreach_name'] = $foreach_1_name_sav['s_name'];
}
?>
					</ul>
					<?php if (count($_smarty_tpl->tpl_vars['services']->value) > 6) {?>
					<div class="text-right">
						<a href="javascript:void(0)" class="service-more" data-toggle="collapse" data-target="#li-addmore"><u><?php echo $_smarty_tpl->tpl_vars['lable']->value['see_more'];?>
</u></a>
					</div>
					<?php }?>
				</div>
				
				<!-- điểu kiện sử dụng tour -->
				<div class="tour-terms-of-use">
					<ul  class="nav nav-pills">
						<li class="active"><a  href="#1a" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_include'];?>
</a></li>
						<li><a href="#2a" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_noinclude'];?>
</a></li>
						<li><a href="#3a" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_paymore'];?>
</a></li>
					</ul>
					<div class="tab-content clearfix scrollbar-inner">
						<div class="tab-pane active" id="1a"><?php echo $_smarty_tpl->tpl_vars['tourInfo']->value['includes'];?>
</div>
						<div class="tab-pane" id="2a"><?php echo $_smarty_tpl->tpl_vars['tourInfo']->value['none_inclludes'];?>
</div>
						<div class="tab-pane" id="3a"><?php echo $_smarty_tpl->tpl_vars['tourInfo']->value['pay_more'];?>
</div>
					</div>
				</div>
				<!-- điểu kiện đặt và hủy tour -->
				<?php echo $_smarty_tpl->getSubTemplate ("tour/cancled.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

				<!-- hình ảnh trải nghiệm của khách hàng -->
				<?php echo $_smarty_tpl->getSubTemplate ("tour/experience.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

				<!-- comment -->
				<div class="comment space-4">
                    <div class="fb-like" data-href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
tour/<?php echo $_smarty_tpl->tpl_vars['slug']->value;?>
" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                    <br clear="all" />
                    <div class="fb-comments" data-href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
tour/<?php echo $_smarty_tpl->tpl_vars['slug']->value;?>
" data-width="700" data-numposts="5"></div>
				</div>
			</div>	
			<!-- những tour khác -->
            
			<div class="featured-tours col-xs-12 col-sm-12 col-md-12 space-4">
            	<?php if (count($_smarty_tpl->tpl_vars['tourAgency']->value) > 0) {?>
				<h3><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_another'];?>
 <?php echo $_smarty_tpl->tpl_vars['infoTour']->value['agency_name'];?>
</h3>
                <?php echo $_smarty_tpl->getSubTemplate ("tour/tour_others.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                <?php }?>
			</div>
            
            
			<!-- tour tương tự -->
            
            <?php if (count($_smarty_tpl->tpl_vars['tourSame']->value) > 0) {?>
			<div class="related-tours col-xs-12 col-sm-12 col-md-12">
				<h3><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_same'];?>
</h3>
				<?php echo $_smarty_tpl->getSubTemplate ("tour/tour_same.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

			</div>
            <?php }?>
			<!-- xem thêm tour -->
			<div class="menu-categories col-xs-12 col-sm-12 col-md-8">
				<h5><?php echo $_smarty_tpl->tpl_vars['lable']->value['see_more'];?>
</h5>
				<div class="row">						
					<ul class="list-unstyled">
					<?php
$foreach_2_name_sav['s_item'] = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$foreach_2_name_sav['s_key'] = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$foreach_2_name_sav['s_name'] = isset($_smarty_tpl->tpl_vars['__foreach_name']) ? $_smarty_tpl->tpl_vars['__foreach_name'] : false;
$_from = $_smarty_tpl->tpl_vars['tourDes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['__foreach_name'] = new Smarty_Variable(array('iteration' => 0));
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_name']->value['iteration']++;
$foreach_2_name_sav['item'] = $_smarty_tpl->tpl_vars['item'];
?>
						<li class="col-xs-12 col-sm-6 col-md-6"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
search/?s=<?php echo smarty_modifier_convert_unicode($_smarty_tpl->tpl_vars['item']->value['cat_name_lable']);?>
&des=<?php echo $_smarty_tpl->tpl_vars['item']->value['tour_destination_id'];?>
">Tour <?php echo $_smarty_tpl->tpl_vars['item']->value['cat_name'];?>
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
			</div>
		</div>
	</div>
	<div class="social-widget hidden-sm hidden-xs">
    	
        <div class='fb-button'>
          <div class='fb-overlay'></div>
          <div class='fb-root'></div>
          <?php echo '<script'; ?>
>
            
             //<![CDATA[
             window.fbAsyncInit = function() {
                FB.init({
                  appId      : facebook_app_id,
                  xfbml      : true,
                  version    : facebook_graph_version
                });
              };
  
              (function(d){
                var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
                js = d.createElement('script'); js.id = id; js.async = true;
                js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                d.getElementsByTagName('head')[0].appendChild(js);
              }(document));
              
              setTimeout(function(){
                FB.Event.subscribe('edge.create',
                function (response) {
                    // alert('msg via fb');
                });},2000);

            //]]>
            
          <?php echo '</script'; ?>
>
          
          <div class='fb-like' id="fb_like_1" data-href='<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
tour/<?php echo $_smarty_tpl->tpl_vars['slug']->value;?>
' data-send='false' data-show-faces='false' data-width='45' data-toggle="tooltip" data-placement="right" title="Like"></div>
          </div>
           
		<a href="https://www.facebook.com/share.php?u=<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
tour/<?php echo $_smarty_tpl->tpl_vars['slug']->value;?>
" target="_blank"><i class="fa fa-facebook fb-tooltip" data-toggle="tooltip" data-placement="right" title="Share"></i></a>
		<a href="javascript:void(0)" data-id="<?php echo $_smarty_tpl->tpl_vars['tour']->value['tour_id'];?>
" data-a_id="<?php echo $_smarty_tpl->tpl_vars['tour']->value['agency_id'];?>
" class="fa-compare compare-tooltip" data-toggle="tooltip" data-placement="right" title="So sánh"></a>
        
		<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
download/<?php echo $_smarty_tpl->tpl_vars['infoTour']->value['slug'];?>
" target="_blank" class="fa-download-tour download-tooltip" data-toggle="tooltip" data-placement="right" title="Download"></a>
	</div>

	<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<?php echo '<script'; ?>
>
		var readmore = "<?php echo $_smarty_tpl->tpl_vars['lable']->value['see_more'];?>
";
        
        $(document).ready(function(){

                var str_website = $('.address .website a').text(); 
                if(str_website.length > 25){
                    $('.address .website a').text(str_website.substring(0,25)+'...'); 
                }

                var str_mail = $('.address .mail a').text();
                if(str_mail.length > 20){
                    $('.address .mail a').text(str_mail.substring(0,20)+'...'); 
                }

        		$('.service-more').on('click', function(event) {
        			event.preventDefault();
        			$(this).remove(); 
    			});


                // tooltip
                $('[data-toggle="tooltip"]').tooltip();	
                // scrollbar
                $('.scrollbar-inner').scrollbar();
                // readmore
                $('.dolessmore').dolessmore({
                	lHeight: 210,
					lCustom: '<i class="fa fa-angle-double-right" aria-hidden="true"></i> '+readmore
                });
                // toggle
                $('.panel-heading a[data-toggle="collapse"]').on('click', function () {   
                	$(this).parents('.panel').toggleClass('collapsed');
                });
                
                
                // sidebar scroll
                if($(window).width() >= 992) {
                	var offset = $("#right-sidebar").offset();
                	var end = $('.featured-tours').offset();
                	var height = $("#right-sidebar").height();
                	var topPadding = 40;
                	$(window).scroll(function() {
                		if ($(window).scrollTop() > offset.top) {
                			if($(window).scrollTop() < end.top - height) {
                				$("#right-sidebar").stop().animate({
                					marginTop: $(window).scrollTop() - offset.top + topPadding
                				});
                			} 			
                		} else {
                			$("#right-sidebar").stop().animate({
                				marginTop: 40
                			});
                		};
                	});
                } else {
                        // show full contact
                        $("#right-sidebar").hide();
                        $(".highlight-tour").insertAfter(".tour-img-slide");
                        $('#showContact').click(function(){
                        	$(this).parents('.box-info').hide();
                        	$('#right-sidebar').toggle();
                        })					
                    }
					
                // show so dien thoai
                /*$('#showPhone').click(function(){
                	$('.hidden-number').toggle();
                	$(this).remove(); 
                });*/
                
                // slider
                $('.tour-img-slide .slider-banner .lightSlider').lightSlider({
                	item: 1,
                	slideMargin: 0,
                	pager: false,
                	adaptiveHeight: true,
                	onSliderLoad: function() {
                		$('.tour-img-slide .slider-banner .lightSlider').removeClass('cS-hidden');
                	},		
                });

                
                $('.slider-3.slider-blog .lightSlider').lightSlider({
                	item: 3,
                	slideMargin: 0,
                	pager: false,
                	adaptiveHeight: true,
                	onSliderLoad: function() {
                		$('.slider-3.slider-blog .lightSlider').removeClass('cS-hidden');
                	},
                	responsive : [
                	{
                		breakpoint:992,
                		settings: {
                			item:2,
                		}
                	},
                	{
                		breakpoint:768,
                		settings: {
                			item:1,
                		}
                	}
                	]					
                });
                $('.img-feedback .slider-3 .lightSlider').lightSlider({
                	item: 3,
                	slideMargin: 10,
                	pager: false,
                	adaptiveHeight: true,
                	onSliderLoad: function() {
                		$('.img-feedback .slider-3 .lightSlider').removeClass('cS-hidden');
                	},
                	responsive : [
                	{
                		breakpoint:768,
                		settings: {
                			item:2,
                		}
                	},
                	]					
                }); 
            
        });
            
	
	<?php echo '</script'; ?>
>
</div>
</body>
</html>
<?php }
}
?>