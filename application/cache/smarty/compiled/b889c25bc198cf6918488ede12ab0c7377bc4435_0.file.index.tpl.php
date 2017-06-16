<?php /* Smarty version 3.1.28-dev/21, created on 2017-04-27 03:53:57
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\home\views\index\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2171259014f350cd633_64450152%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b889c25bc198cf6918488ede12ab0c7377bc4435' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\home\\views\\index\\index.tpl',
      1 => 1493258032,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2171259014f350cd633_64450152',
  'variables' => 
  array (
    'base_tlp_front' => 0,
    'lable' => 0,
    'tour_destination' => 0,
    'item' => 0,
    'pathCate' => 0,
    'base_url' => 0,
    'geo_location' => 0,
    'tour' => 0,
    'pathThumb' => 0,
    'day_amount' => 0,
    'tourdays' => 0,
    'night_amount' => 0,
    'transport' => 0,
    'tr' => 0,
    'agency' => 0,
    'pathLogo' => 0,
    'vl' => 0,
    'tourRecent' => 0,
    'blog' => 0,
    'category_icons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_59014f352b6654_42194662',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59014f352b6654_42194662')) {
function content_59014f352b6654_42194662 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_getdaysnight')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\modifier.getdaysnight.php';
if (!is_callable('smarty_modifier_convert_vnd')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\modifier.convert_vnd.php';

$_smarty_tpl->properties['nocache_hash'] = '2171259014f350cd633_64450152';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 
<div id="page" class="template-background">
	<?php echo $_smarty_tpl->getSubTemplate ("menu-default.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<div class="banner">
		<div style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['base_tlp_front']->value;?>
/images/banner-home.jpg)"></div>
	</div>
	<?php echo $_smarty_tpl->getSubTemplate ("search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<div class="list-tours">
		<div class="container">
			<div class="row">
				<div class="title-line">
					<h1><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_home_title'];?>
<span class="icon"><img src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_front']->value;?>
/images/symbol1.png" alt="" border="0" /></span></h1>
					<p><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_home_short_desc'];?>
</p>
				</div>
				<div class="lists">
				
					<?php
$foreach_0_item_sav['s_item'] = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_from = $_smarty_tpl->tpl_vars['tour_destination']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_0_item_sav['item'] = $_smarty_tpl->tpl_vars['item'];
?>
					<div class="<?php echo $_smarty_tpl->tpl_vars['item']->value['cat_icon_class'];?>
">
						<div class="hovereffect">
							<div class="background" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['pathCate']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['cat_icon'];?>
')"></div>
							<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
search/?des=<?php echo $_smarty_tpl->tpl_vars['item']->value['tour_destination_id'];?>
&l=<?php echo $_smarty_tpl->tpl_vars['geo_location']->value;?>
"><span><?php echo $_smarty_tpl->tpl_vars['item']->value['cat_name_lable'];?>
<span></a>
							<div class="overlay"></div>
						</div>
					</div>
					<?php
$_smarty_tpl->tpl_vars['item'] = $foreach_0_item_sav['item'];
}
if ($foreach_0_item_sav['s_item']) {
$_smarty_tpl->tpl_vars['item'] = $foreach_0_item_sav['s_item'];
}
?>
				</div>
			</div>
		</div>
	</div>
	<div class="featured-tours hidden-xs hidden-sm">
		<div class="container-fluid">
			<div class="row">
				<ul class="list-unstyled custom-tour lightSlider cS-hidden">
					<?php
$foreach_1_item_sav['s_item'] = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_from = $_smarty_tpl->tpl_vars['tour']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_1_item_sav['item'] = $_smarty_tpl->tpl_vars['item'];
?>
					
					<li>
						<div class="box box-vertical">
							<div class="box-header">
								<div class="box-picture">
									<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
tour/<?php echo $_smarty_tpl->tpl_vars['item']->value['slug'];?>
">
										<img class="picture" src="<?php echo $_smarty_tpl->tpl_vars['pathThumb']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['path_image'];?>
" alt="" border="0" />
										
										<span class="ribbon">
											<img src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_front']->value;?>
/images/ribbon-noibat.png" alt="" border="0" class="img-responsive" />
										</span>
										
									</a>
								</div>
							</div>
							<div class="box-body">
								<?php $_smarty_tpl->tpl_vars['tourdays'] = new Smarty_Variable(smarty_modifier_getdaysnight($_smarty_tpl->tpl_vars['item']->value['tour_id']), null, 0);?>
								<?php $_smarty_tpl->tpl_vars['day_amount'] = new Smarty_Variable($_smarty_tpl->tpl_vars['item']->value['day_amount'], null, 0);?>
								<?php $_smarty_tpl->tpl_vars['night_amount'] = new Smarty_Variable($_smarty_tpl->tpl_vars['item']->value['night_amount'], null, 0);?>

								<div class="box-title">
									<h2><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
tour/<?php echo $_smarty_tpl->tpl_vars['item']->value['slug'];?>
" class="tour-title" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></h2>
									<p><?php echo $_smarty_tpl->tpl_vars['tourdays']->value[$_smarty_tpl->tpl_vars['day_amount']->value];?>
 <?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_day'];?>
 - <?php echo $_smarty_tpl->tpl_vars['tourdays']->value[$_smarty_tpl->tpl_vars['night_amount']->value];?>
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
$_smarty_tpl->tpl_vars['item'] = $foreach_1_item_sav['item'];
}
if ($foreach_1_item_sav['s_item']) {
$_smarty_tpl->tpl_vars['item'] = $foreach_1_item_sav['s_item'];
}
?>			
				</ul>					
			</div>
		</div>
	</div>
	<div class="featured-services hidden-xs hidden-sm">
		<div class="container-fluid">
			<div class="row">
				
				<div class="title-line">
					<h2><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_home_service'];?>
<span class="icon"><img src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_front']->value;?>
/images/symbol2.png" alt="" border="0" /></span></h2>
					<p><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_service_short_desc'];?>
</p>
				</div>

				
				<ul class="lightSlider list-unstyled cS-hidden">
					<?php
$foreach_3_name_sav['s_item'] = isset($_smarty_tpl->tpl_vars['vl']) ? $_smarty_tpl->tpl_vars['vl'] : false;
$foreach_3_name_sav['s_key'] = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$foreach_3_name_sav['s_name'] = isset($_smarty_tpl->tpl_vars['__foreach_name']) ? $_smarty_tpl->tpl_vars['__foreach_name'] : false;
$_from = $_smarty_tpl->tpl_vars['agency']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['vl'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['vl']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['vl']->value) {
$_smarty_tpl->tpl_vars['vl']->_loop = true;
$foreach_3_name_sav['item'] = $_smarty_tpl->tpl_vars['vl'];
?>

					
					<li>
						<div class="item">
							<div class="background" style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['pathLogo']->value;
echo $_smarty_tpl->tpl_vars['vl']->value['background_url'];?>
')"></div>
							<div class="caption">
								<img src="<?php echo $_smarty_tpl->tpl_vars['pathLogo']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['vl']->value['logo_home'];?>
" alt="" border="0" />
								<p><!--<em>Tận hưởng bản sắc việt </em>--></p>
								<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
agency/<?php echo $_smarty_tpl->tpl_vars['vl']->value['slug'];?>
" class="btn btn-link">xem chi tiết</a>
							</div>
						</div>
					</li>
					
					
					<?php
$_smarty_tpl->tpl_vars['vl'] = $foreach_3_name_sav['item'];
}
if ($foreach_3_name_sav['s_item']) {
$_smarty_tpl->tpl_vars['vl'] = $foreach_3_name_sav['s_item'];
}
if ($foreach_3_name_sav['s_key']) {
$_smarty_tpl->tpl_vars['key'] = $foreach_3_name_sav['s_key'];
}
if ($foreach_3_name_sav['s_name']) {
$_smarty_tpl->tpl_vars['__foreach_name'] = $foreach_3_name_sav['s_name'];
}
?>
				</ul>
			</div>
		</div>
	</div>

	
	<?php if ($_smarty_tpl->tpl_vars['tourRecent']->value != '') {?>
	<div class="tour-viewed hidden-xs hidden-sm">
		<div class="container">
			<div class="row">
				<div class="title-line">
					<h2><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_recent'];?>
 <span class="icon"><img src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_front']->value;?>
/images/symbol3.png" alt="" border="0" /></span></h2>
				</div>
				<ul class="list-unstyled lightSlider cS-hidden" style="margin:0 auto; text-align:center; min-height:502px;">
					
					<?php
$foreach_4_name_sav['s_item'] = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$foreach_4_name_sav['s_key'] = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$foreach_4_name_sav['s_name'] = isset($_smarty_tpl->tpl_vars['__foreach_name']) ? $_smarty_tpl->tpl_vars['__foreach_name'] : false;
$_from = $_smarty_tpl->tpl_vars['tourRecent']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_4_name_sav['item'] = $_smarty_tpl->tpl_vars['item'];
?>
						
					<?php $_smarty_tpl->tpl_vars['tourdays'] = new Smarty_Variable(smarty_modifier_getdaysnight($_smarty_tpl->tpl_vars['item']->value['tour_id']), null, 0);?>
					<?php $_smarty_tpl->tpl_vars['day_amount'] = new Smarty_Variable($_smarty_tpl->tpl_vars['item']->value['day_amount'], null, 0);?>
					<?php $_smarty_tpl->tpl_vars['night_amount'] = new Smarty_Variable($_smarty_tpl->tpl_vars['item']->value['night_amount'], null, 0);?>
								
					<li>
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
" class="tour-title" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></h2>
									<p><?php echo $_smarty_tpl->tpl_vars['tourdays']->value[$_smarty_tpl->tpl_vars['day_amount']->value];?>
 <?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_day'];?>
 - <?php echo $_smarty_tpl->tpl_vars['tourdays']->value[$_smarty_tpl->tpl_vars['night_amount']->value];?>
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
$foreach_5_name_sav['s_item'] = isset($_smarty_tpl->tpl_vars['tr']) ? $_smarty_tpl->tpl_vars['tr'] : false;
$foreach_5_name_sav['s_key'] = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$foreach_5_name_sav['s_name'] = isset($_smarty_tpl->tpl_vars['__foreach_name']) ? $_smarty_tpl->tpl_vars['__foreach_name'] : false;
$_from = $_smarty_tpl->tpl_vars['transport']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['tr'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['tr']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['tr']->value) {
$_smarty_tpl->tpl_vars['tr']->_loop = true;
$foreach_5_name_sav['item'] = $_smarty_tpl->tpl_vars['tr'];
?>
											<?php echo $_smarty_tpl->tpl_vars['tr']->value;?>

											<?php
$_smarty_tpl->tpl_vars['tr'] = $foreach_5_name_sav['item'];
}
if ($foreach_5_name_sav['s_item']) {
$_smarty_tpl->tpl_vars['tr'] = $foreach_5_name_sav['s_item'];
}
if ($foreach_5_name_sav['s_key']) {
$_smarty_tpl->tpl_vars['key'] = $foreach_5_name_sav['s_key'];
}
if ($foreach_5_name_sav['s_name']) {
$_smarty_tpl->tpl_vars['__foreach_name'] = $foreach_5_name_sav['s_name'];
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
					</li>

					<?php
$_smarty_tpl->tpl_vars['item'] = $foreach_4_name_sav['item'];
}
if ($foreach_4_name_sav['s_item']) {
$_smarty_tpl->tpl_vars['item'] = $foreach_4_name_sav['s_item'];
}
if ($foreach_4_name_sav['s_key']) {
$_smarty_tpl->tpl_vars['key'] = $foreach_4_name_sav['s_key'];
}
if ($foreach_4_name_sav['s_name']) {
$_smarty_tpl->tpl_vars['__foreach_name'] = $foreach_4_name_sav['s_name'];
}
?>

				</ul>
			</div>
		</div>
	</div>

	<?php }?>

	<div class="blog-category hidden-xs hidden-sm">
		<div class="container">
			<div class="row">
				<div class="title-line">
					<h2><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_home_blog_cat'];?>
 <span class="icon"><img src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_front']->value;?>
/images/symbol4.png" alt="" border="0" /></span></h2>
				</div>
				<div class="lists">
					<?php
$foreach_6_vl_sav['s_item'] = isset($_smarty_tpl->tpl_vars['vl']) ? $_smarty_tpl->tpl_vars['vl'] : false;
$_from = $_smarty_tpl->tpl_vars['blog']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['vl'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['vl']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['vl']->value) {
$_smarty_tpl->tpl_vars['vl']->_loop = true;
$foreach_6_vl_sav['item'] = $_smarty_tpl->tpl_vars['vl'];
?>
					<div class="blog-item">
						<div class="hovereffect">								
							<div class="background" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['pathThumb']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['vl']->value['path_image'];?>
)"></div>
							<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
blog/category/<?php echo $_smarty_tpl->tpl_vars['vl']->value['slug'];?>
">
								
								<?php echo $_smarty_tpl->tpl_vars['category_icons']->value[$_smarty_tpl->tpl_vars['vl']->value['icon']];?>

                                <?php echo $_smarty_tpl->tpl_vars['vl']->value['category_name'];?>

							</a>
							<div class="overlay">
								<p><?php echo $_smarty_tpl->tpl_vars['vl']->value['title'];?>
</p>
							</div>
						</div>
					</div>
					<?php
$_smarty_tpl->tpl_vars['vl'] = $foreach_6_vl_sav['item'];
}
if ($foreach_6_vl_sav['s_item']) {
$_smarty_tpl->tpl_vars['vl'] = $foreach_6_vl_sav['s_item'];
}
?>	
				</div>
			</div>
		</div>
	</div>


	
	<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


	<?php echo '<script'; ?>
>
		
		$(window).on("load resize",function(e){
					// slider featured tour
					$('.featured-tours .lightSlider').lightSlider({
						item: 4,
						slideMargin: 30,
						pauseOnHover: true,
						pager: false,
						adaptiveHeight: true,
						onSliderLoad: function() {
							$('.featured-tours .lightSlider').removeClass('cS-hidden');
						},
						responsive : [
						{
							breakpoint:768,
							settings: {
								item:2,
							}
						},
						{
							breakpoint:568,
							settings: {
								item:1,
							}
						}
						]
					});
					// slider featured services
					$('.featured-services .lightSlider').lightSlider({
						item: 1,
						slideMargin: 0,
						pager: false,
						adaptiveHeight: true,
						onSliderLoad: function() {
							$('.featured-services .lightSlider').removeClass('cS-hidden');
						},
					});
					// slider tour viewed
					$('.tour-viewed .lightSlider').lightSlider({
						slideMargin: 30,
						pauseOnHover: true,
						pager: false,
						adaptiveHeight: true,
						onSliderLoad: function() {
							$('.tour-viewed .lightSlider').removeClass('cS-hidden');
						},
						responsive : [
						{
							breakpoint:768,
							settings: {
								item:2,
							}
						},
						{
							breakpoint:568,
							settings: {
								item:1,
							}
						}
						]					
					});
				})
		

	<?php echo '</script'; ?>
>
</div>
</body>
</html>
<?php }
}
?>