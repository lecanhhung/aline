<?php /* Smarty version 3.1.28-dev/21, created on 2017-04-15 04:11:37
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\home\views\menu-default.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1275158f18159065cb4_01393038%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80663be24930eec20af2887a8f85114035b0b327' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\home\\views\\menu-default.tpl',
      1 => 1491297084,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1275158f18159065cb4_01393038',
  'variables' => 
  array (
    'base_url' => 0,
    'base_tlp_front' => 0,
    'tour_location' => 0,
    'item' => 0,
    'tourCompare' => 0,
    'user_data' => 0,
    'social' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_58f181590b12c9_74705254',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f181590b12c9_74705254')) {
function content_58f181590b12c9_74705254 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1275158f18159065cb4_01393038';
?>
	<nav class="navbar opaque-navbar">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar top-bar"></span>
				<span class="icon-bar middle-bar"></span>
				<span class="icon-bar bottom-bar"></span>
			</button>
			<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
" class="navbar-brand" >
                <img src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_front']->value;?>
/images/logo.png" alt="" border="0" />
			</a>
		</div>

		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown menu-home">
					<a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)"></a>
					<ul class="dropdown-menu locations-menu">
						<?php
$foreach_0_item_sav['s_item'] = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_from = $_smarty_tpl->tpl_vars['tour_location']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_0_item_sav['item'] = $_smarty_tpl->tpl_vars['item'];
?>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
search?l=<?php echo $_smarty_tpl->tpl_vars['item']->value['tour_location_id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['item']->value['tour_location_id'];?>
"  class="_id<?php echo $_smarty_tpl->tpl_vars['item']->value['tour_location_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['cat_name'];?>
</a></li>
						<?php
$_smarty_tpl->tpl_vars['item'] = $foreach_0_item_sav['item'];
}
if ($foreach_0_item_sav['s_item']) {
$_smarty_tpl->tpl_vars['item'] = $foreach_0_item_sav['s_item'];
}
?>
					</ul>
				</li>				
				<li class="dropdown hidden-xs hidden-sm">
                    <a class="dropdown-toggle" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
amazingtrip/">Amazing Trip</a>
				</li>
				<li class="hidden-xs hidden-sm">
					<a href="javascript:void(0)" data-toggle="popover" id="count-compare">
						<p class="count-compare">So sánh <span class="badge"><?php echo count($_smarty_tpl->tpl_vars['tourCompare']->value);?>
</span></p>
					</a>
					<div class="compare-1">
						<?php echo $_smarty_tpl->getSubTemplate ("compare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

					</div>
					<?php echo '<script'; ?>
>
						$(document).ready(function(){
							$('.navbar-nav [data-toggle="popover"], .social-widget .fa-compare').popover({
								html : true,
								container: '.compare-1',
								placement: 'bottom',
								trigger: 'click',
								content: function() {
									return $('#compare-tour').html();
								},
							}).on('click', function (e) {

								
								
								$('.popover .tour .slider-image .lightSlider').lightSlider({
									item: 1,
									slideMargin: 0,
									pager: false,
									adaptiveHeight: true,
								});
							});	
							$('body').on('click', function (e) {

								$('[data-toggle="popover"]').each(function () {
									if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
										$(this).popover('hide');
									}
								});

								$('[data-toggle="tooltip"]').each(function () {
									if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
										$(this).popover('hide');
									}
								});
							});		
						});
					<?php echo '</script'; ?>
>
				</li>
				
				<li class="item-blog">
					<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
blog/">Blog</a>
				</li>
				<li class="dropdown">
                    <?php if ($_smarty_tpl->tpl_vars['user_data']->value['oauth_uid'] == '') {?>
                        <a class="dropdown-toggle name-account" data-toggle="dropdown" href="javascript:void(0)" >Đăng nhập</a>
                        <ul id="box-login" class="dropdown-menu">
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
                        <a class="dropdown-toggle name-account" data-toggle="dropdown" href="javascript:void(0)" title="<?php echo $_smarty_tpl->tpl_vars['user_data']->value['last_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['user_data']->value['last_name'];?>
</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
profile/">Tài khoản</a>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
logout/">Thoát</a>
                            </li>
                        </ul>
                    <?php }?>
				</li>
				<li class="hidden-xs hidden-sm">
					<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
user/" class="btn btn-default" target="_blank">Đăng tour</a>
				</li>
			</ul>
		</div>
	</div>
</nav>

<form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
search" method="get" accept-charset="utf-8" id="menuDefault">
	<input type="hidden" name="l" id="tour_location_id" value="">
</form><?php }
}
?>