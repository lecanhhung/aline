<?php /* Smarty version 3.1.28-dev/21, created on 2017-04-17 03:34:56
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\home\views\menu-search.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:588158f41bc056c878_85386118%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '076f409c44119a8b5ec050eb9aa97094f0f6a17e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\home\\views\\menu-search.tpl',
      1 => 1491297105,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '588158f41bc056c878_85386118',
  'variables' => 
  array (
    'base_url' => 0,
    'base_tlp_front' => 0,
    's_s' => 0,
    'lable' => 0,
    's_a' => 0,
    's_des' => 0,
    'tour_location' => 0,
    'item' => 0,
    'tourCompare' => 0,
    'user_data' => 0,
    'social' => 0,
    'current_control' => 0,
    'l_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_58f41bc0606889_73197183',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f41bc0606889_73197183')) {
function content_58f41bc0606889_73197183 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '588158f41bc056c878_85386118';
?>
<nav class="navbar opaque-navbar white-navbar navbar-fixed-top">
	<div class="container-fluid">
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
			
			<ul class="nav navbar-nav navbar-left">
				<form id="searchTop" class="navbar-form hidden-xs" role="search" method="GET" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
search" >
					<div class="input-group">
						<input type="text" name="s" class="form-control" id="text-search" value="<?php echo $_smarty_tpl->tpl_vars['s_s']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['lable']->value['holder_search_tour'];?>
" />
						<input type="hidden" class="vl-search" name="a" id="agency" value="<?php echo $_smarty_tpl->tpl_vars['s_a']->value;?>
" />
						<input type="hidden" class="vl-search" name="des" id="destination" value="<?php echo $_smarty_tpl->tpl_vars['s_des']->value;?>
" />
						<input type="hidden" name="l" id="location" value="">
					</div>
				</form>
			</ul>
			
			<ul class="nav navbar-nav navbar-right">
						
				
				<li class="dropdown place search-tour">
					<a class="dropdown-toggle menu-page" data-toggle="dropdown" data-id="" href="javascript:void(0)"></a>
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
						<li><a id="<?php echo $_smarty_tpl->tpl_vars['item']->value['tour_location_id'];?>
"  class="_id<?php echo $_smarty_tpl->tpl_vars['item']->value['tour_location_id'];?>
" href="javascript:void(0);"><?php echo $_smarty_tpl->tpl_vars['item']->value['cat_name'];?>
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
				<li class="hidden-xs hidden-sm ">
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

							$('.navbar-nav [data-toggle="popover"]').popover({
								
								html : true,
								container: '.compare-1',
								placement: 'bottom',
								trigger: 'click',
								content: function() {
									return $('#compare-tour').html();
								},
							}).on('click', function () {

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
							});
						});
					<?php echo '</script'; ?>
>
				</li>
				<li > <!-- class="hidden-md hidden-lg" -->
					<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
blog">Blog</a>
				</li>
				<li class="dropdown">
					<?php if ($_smarty_tpl->tpl_vars['user_data']->value['oauth_uid'] == '') {?>
                        <a class="dropdown-toggle name-account" data-toggle="dropdown" href="javascript:void(0)">Đăng nhập</a>
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

<!-- <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
search" method="get" accept-charset="utf-8" id="menuDefault">
	<input type="hidden" name="l" id="tour_location_id" value="">
</form> -->

<?php echo '<script'; ?>
>

	var current_control = "<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
";

	$(document).ready(function() {
		
			$( "#text-search" ).autocomplete({
				source: base_url + 'search/autocomplete',
				select: function( event, ui ) {
					var custom_id = (typeof ui.item.agency  !== "undefined" && ui.item.agency != '') ? ui.item.agency : 'destination';
					$('.vl-search').val('');
					$( "#"+custom_id ).val( ui.item.id );
					$( "#text-search" ).val( ui.item.label );   
					$('#searchTop').submit(); 
					return false;
				}

			}).data( "ui-autocomplete" )._renderItem = function( ul, item ) {
				var custom_classs = (typeof item.agency  !== "undefined" && item.agency != '') ? item.agency : 'destination';
				var text_name = (typeof item.agency  !== "undefined" && item.agency != '') ? 'Nhà cung cấp' : 'Tour';
				ul.addClass('customClass'); //Ul custom class here
				return $('<li></li>')
				.append('<a class="'+custom_classs+'" id="'+item.id+'">' + item.label + '</a><span class="text_name">'+text_name+'</span>')
				.appendTo(ul);
			};
			if (current_control == 'search' ){
				$( "#text-search1" ).autocomplete({
					source: base_url + 'search/autocomplete',
					select: function( event, ui ) {

						var custom_id = (typeof ui.item.agency  !== "undefined" && ui.item.agency != '') ? ui.item.agency : 'destination1';
						$('.vl-search').val('');

						$( "#"+custom_id ).val( ui.item.id );

						$( "#text-search1" ).val( ui.item.label ); 
						$('#keyword').val(ui.item.label);   
						$('#searchTop').submit(); 
						return false;
					}

				}).data( "ui-autocomplete" )._renderItem = function( ul, item ) {
					var custom_classs = (typeof item.agency  !== "undefined" && item.agency != '') ? item.agency : 'destination';
					var text_name = (typeof item.agency  !== "undefined" && item.agency != '') ? 'Nhà cung cấp' : 'Tour';
					ul.addClass('customClass1'); //Ul custom class here
					return $('<li></li>')
					.append('<a class="'+custom_classs+'" id="'+item.id+'">' + item.label + '</a><span class="text_name">'+text_name+'</span>')
					.appendTo(ul);
				};

			}

			
		var l_id = "<?php echo $_smarty_tpl->tpl_vars['l_id']->value;?>
";
		var width = $(window).width(); 

		if(width < 768){
			var _this = $('.dropdown-menu li a[data-id='+l_id+']');
			var idText = _this.data('id');

			// $('.menu-search').remove(); 

		} else {
			var _this = $('.dropdown-menu li a._id'+l_id);
			var idText = _this.attr('id');
		}
		
		var fixText = _this.text();
		
		$('input[name="l"]').val(idText); 

		$(_this).parents('.search-tour').find('.menu-page').html(fixText+' <span class="caret"></span>').attr('data-id', idText);
		

	});
<?php echo '</script'; ?>
><?php }
}
?>