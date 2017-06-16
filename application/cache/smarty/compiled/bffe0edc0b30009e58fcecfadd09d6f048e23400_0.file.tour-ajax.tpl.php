<?php /* Smarty version 3.1.28-dev/21, created on 2017-04-17 04:45:07
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\home\views\search\tour-ajax.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:444558f42c33d476f4_09029826%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bffe0edc0b30009e58fcecfadd09d6f048e23400' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\home\\views\\search\\tour-ajax.tpl',
      1 => 1492397084,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '444558f42c33d476f4_09029826',
  'variables' => 
  array (
    'list_tour' => 0,
    'item' => 0,
    'id_compare' => 0,
    'pathLogo' => 0,
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
    'tour' => 0,
    'per_page' => 0,
    'curpage' => 0,
    'start' => 0,
    'total_tour' => 0,
    'total' => 0,
    'links' => 0,
    'tour_destination' => 0,
    'l_id' => 0,
    'ids_search' => 0,
    'add_more' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_58f42c33f39160_56490007',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f42c33f39160_56490007')) {
function content_58f42c33f39160_56490007 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\modifier.replace.php';
if (!is_callable('smarty_modifier_getdaysnight')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\modifier.getdaysnight.php';
if (!is_callable('smarty_modifier_convert_vnd')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\modifier.convert_vnd.php';
if (!is_callable('smarty_function_math')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\function.math.php';
if (!is_callable('smarty_modifier_convert_unicode')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\modifier.convert_unicode.php';

$_smarty_tpl->properties['nocache_hash'] = '444558f42c33d476f4_09029826';
?>


<div class="lists">
	<?php
$foreach_0_test_sav['s_item'] = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$foreach_0_test_sav['s_key'] = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$foreach_0_test_sav['s_name'] = isset($_smarty_tpl->tpl_vars['__foreach_test']) ? $_smarty_tpl->tpl_vars['__foreach_test'] : false;
$_from = $_smarty_tpl->tpl_vars['list_tour']->value;
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

		<div class="col-xs-12 col-sm-6 col-md-6">
				<div class="box box-vertical">
					<div class="box-header" data-toggle="tooltip" data-placement="top" title="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value['phone'],' ','');?>
">
						<div class="compare hidden-xs hidden-sm">
							<a class="icon <?php if (in_array($_smarty_tpl->tpl_vars['item']->value['tour_id'],$_smarty_tpl->tpl_vars['id_compare']->value)) {?>icon-hover<?php }?>" href="javascript:void(0)" data-toggle="popover" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['tour_id'];?>
" data-a_id="<?php echo $_smarty_tpl->tpl_vars['item']->value['agency_id'];?>
"></a>
						</div>
						<!-- <div class="logo-partner">
							<a href="#" >
								<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['pathLogo']->value;
echo $_smarty_tpl->tpl_vars['item']->value['logo_url'];?>
" alt="" border="0" />
							</a>
						</div> -->
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
							<p><?php echo $_smarty_tpl->tpl_vars['tourdays']->value[$_smarty_tpl->tpl_vars['day_amount']->value]['tour_day'];?>
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
		
	</div>
	<div class="pagination-wrapper text-center space-4">
		<?php echo smarty_function_math(array('equation'=>"x*y",'x'=>$_smarty_tpl->tpl_vars['per_page']->value,'y'=>$_smarty_tpl->tpl_vars['curpage']->value,'assign'=>"total"),$_smarty_tpl);?>

		<?php echo smarty_function_math(array('equation'=>"x+y",'x'=>$_smarty_tpl->tpl_vars['start']->value,'y'=>1,'assign'=>"start"),$_smarty_tpl);?>

		<p class="results_count"><?php echo $_smarty_tpl->tpl_vars['start']->value;?>
 - <?php if ($_smarty_tpl->tpl_vars['total_tour']->value > $_smarty_tpl->tpl_vars['total']->value) {
echo $_smarty_tpl->tpl_vars['total']->value;
} else {
echo $_smarty_tpl->tpl_vars['total_tour']->value;
}?> / <?php echo $_smarty_tpl->tpl_vars['total_tour']->value;?>
 + địa điểm</p>
		<?php echo $_smarty_tpl->tpl_vars['links']->value;?>

	</div>

	<div class="menu-categories">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<h5>Xem thêm</h5>
			</div>
		</div>
		<div class="row">
			<ul class="list-unstyled">
			<?php
$foreach_3_name_sav['s_item'] = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$foreach_3_name_sav['s_key'] = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$foreach_3_name_sav['s_name'] = isset($_smarty_tpl->tpl_vars['__foreach_name']) ? $_smarty_tpl->tpl_vars['__foreach_name'] : false;
$_from = $_smarty_tpl->tpl_vars['tour_destination']->value;
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
				<li class="col-xs-12 col-sm-6 col-md-6"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
search/?s=<?php echo smarty_modifier_convert_unicode($_smarty_tpl->tpl_vars['item']->value['cat_name_lable']);?>
&des=<?php echo $_smarty_tpl->tpl_vars['item']->value['tour_destination_id'];?>
&l=<?php echo $_smarty_tpl->tpl_vars['l_id']->value;?>
">Tour <?php echo $_smarty_tpl->tpl_vars['item']->value['cat_name'];?>
</a></li>
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
			</ul>
		</div>
	</div>

	<div id="note_compare" data-id="<?php echo count($_smarty_tpl->tpl_vars['id_compare']->value);?>
"></div>
</div>

<?php echo '<script'; ?>
>
	var ids_search = <?php echo $_smarty_tpl->tpl_vars['ids_search']->value;?>
 ;
	var add_more = "<?php echo $_smarty_tpl->tpl_vars['add_more']->value;?>
";

	/*
	
		$(document).ready(function() {
			// slider
			var note_compare = $('#note_compare').data('id'); 

			$('.search-lists .slider-image .lightSlider').lightSlider({
				item: 1,
				slideMargin: 0,
				pager: false,
				adaptiveHeight: true,
				onSliderLoad: function() {
					$('.search-lists .slider-image .lightSlider').removeClass('cS-hidden');
				},	
			});


			$('.compare [data-toggle="popover"]').popover({
				html : true,
				container: '.search-container',
				placement: 'right',
				trigger: 'manual',
				content: function() {
					return $('#notifi-compare').html();
				},
			}).on("click", function () {
				
				if(note_compare == 2){
					var _this = this;
					$(this).popover("show");
					$(".popover").on("mouseleave", function () {
						$(_this).popover('hide');
					});
				} 

			}).on("mouseleave", function () {
				var _this = this;
				setTimeout(function () {
					if (!$(".popover:hover").length) {
						$(_this).popover("hide");
					}
				}, 300);
			}).on('shown.bs.popover', function () {
				$('.popover .slider-image .lightSlider').lightSlider({
					item: 1,
					slideMargin: 0,
					pager: false,
					controls: false,
					adaptiveHeight: true,
					onSliderLoad: function() {
						$('.popover .slider-image .lightSlider').removeClass('cS-hidden');
					},	
				});
			});

			
		});
	

	*/

<?php echo '</script'; ?>
>
<?php }
}
?>