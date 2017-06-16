<?php /* Smarty version 3.1.28-dev/21, created on 2017-04-17 09:24:59
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\home\views\search\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:231458f46dcbd6f597_32676496%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d30035720fe2e331ccf3db224646e3871a2b596' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\home\\views\\search\\index.tpl',
      1 => 1492397960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '231458f46dcbd6f597_32676496',
  'variables' => 
  array (
    'general' => 0,
    'tour' => 0,
    'per_page' => 0,
    'curpage' => 0,
    'start' => 0,
    'total_tour' => 0,
    'total' => 0,
    'links' => 0,
    'lable' => 0,
    'tour_destination' => 0,
    'base_url' => 0,
    'item' => 0,
    'l_id' => 0,
    'id_compare' => 0,
    's_from' => 0,
    's_to' => 0,
    'pr_from' => 0,
    'pr_to' => 0,
    's_d' => 0,
    'base_tlp_front' => 0,
    'end' => 0,
    'ids_search' => 0,
    'add_more' => 0,
    'latLong' => 0,
    'map' => 0,
    'vl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_58f46dcc599b49_74207633',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f46dcc599b49_74207633')) {
function content_58f46dcc599b49_74207633 ($_smarty_tpl) {
if (!is_callable('smarty_function_math')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\function.math.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '231458f46dcbd6f597_32676496';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="bgWhite search-header">
	<?php echo $_smarty_tpl->getSubTemplate ("menu-search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</div>
<?php echo $_smarty_tpl->getSubTemplate ("search/search_compare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php $_smarty_tpl->tpl_vars["transport"] = new Smarty_Variable($_smarty_tpl->tpl_vars['general']->value['items']['transport'], null, 0);?>
<?php $_smarty_tpl->tpl_vars["service"] = new Smarty_Variable($_smarty_tpl->tpl_vars['general']->value['items']['service'], null, 0);?> 
<?php $_smarty_tpl->tpl_vars["tour_day"] = new Smarty_Variable($_smarty_tpl->tpl_vars['general']->value['items']['tour_day'], null, 0);?> 
<div class="search-container container-fluid">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-7">
			<div class="scrollbar-inner">
				
					<div class="search-tool hidden-xs hidden-sm">
						<?php echo $_smarty_tpl->getSubTemplate ("search/form_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

						<?php echo $_smarty_tpl->getSubTemplate ("search/form_filter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

					</div>
					<div class="search-lists" id="search-lists">
						<div class="search-parent">
							<?php if ($_smarty_tpl->tpl_vars['tour']->value != '') {?>
							<div class="lists">
								<?php echo $_smarty_tpl->getSubTemplate ("search/items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
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
							<?php } else { ?>
							<div class="lists">
								<div class="error"><?php echo $_smarty_tpl->tpl_vars['lable']->value['not_found_tour_items'];?>
</div>
							</div>
							<?php }?>
							<div class="menu-categories">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12"><h5><?php echo $_smarty_tpl->tpl_vars['lable']->value['lable_see_more'];?>
</h5></div>
								</div>
								<div class="row">
									<ul class="list-unstyled">
										<?php
$foreach_0_name_sav['s_item'] = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$foreach_0_name_sav['s_key'] = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$foreach_0_name_sav['s_name'] = isset($_smarty_tpl->tpl_vars['__foreach_name']) ? $_smarty_tpl->tpl_vars['__foreach_name'] : false;
$_from = $_smarty_tpl->tpl_vars['tour_destination']->value;
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
										<li class="col-xs-12 col-sm-6 col-md-6"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
search/?s=<?php echo $_smarty_tpl->tpl_vars['item']->value['cat_name_unicode'];?>
&des=<?php echo $_smarty_tpl->tpl_vars['item']->value['tour_destination_id'];?>
&l=<?php echo $_smarty_tpl->tpl_vars['l_id']->value;?>
">Tour <?php echo $_smarty_tpl->tpl_vars['item']->value['cat_name'];?>
</a></li>
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
								</div>
							</div>
							<div id="note_compare" data-id="<?php echo count($_smarty_tpl->tpl_vars['id_compare']->value);?>
"></div>
						</div>

					</div>
				
			</div> <!-- end search-lists -->
		</div>
		<div class="col-md-5 hidden-xs hidden-sm">
			<div class="notice-map"><p><?php echo $_smarty_tpl->tpl_vars['lable']->value['map_notice'];?>
</p></div>
			<div  id="map_canvas" style="width:100%;height:600px"></div>
			<div id="log"></div>
		</div>			
	</div>		
</div>

<?php if ($_smarty_tpl->tpl_vars['s_from']->value == '') {?>
<?php $_smarty_tpl->tpl_vars["start"] = new Smarty_Variable(smarty_modifier_date_format(time(),'%d/%m/%Y'), null, 0);?>
<?php } else { ?>
<?php $_smarty_tpl->tpl_vars["start"] = new Smarty_Variable($_smarty_tpl->tpl_vars['s_from']->value, null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['s_to']->value == '') {?>
<?php $_smarty_tpl->tpl_vars["end"] = new Smarty_Variable(smarty_modifier_date_format(time(),'%d/%m/%Y'), null, 0);?>
<?php } else { ?>
<?php $_smarty_tpl->tpl_vars["end"] = new Smarty_Variable($_smarty_tpl->tpl_vars['s_to']->value, null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['pr_from']->value == '') {?>
<?php $_smarty_tpl->tpl_vars["pr_from"] = new Smarty_Variable(250000, null, 0);?>
<?php } else { ?>
<?php $_smarty_tpl->tpl_vars["pr_from"] = new Smarty_Variable($_smarty_tpl->tpl_vars['pr_from']->value, null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['pr_to']->value == '') {?>
<?php $_smarty_tpl->tpl_vars["pr_to"] = new Smarty_Variable(23000000, null, 0);?>
<?php } else { ?>
<?php $_smarty_tpl->tpl_vars["pr_to"] = new Smarty_Variable($_smarty_tpl->tpl_vars['pr_to']->value, null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['s_d']->value == '') {?>
<?php $_smarty_tpl->tpl_vars["s_d"] = new Smarty_Variable(19, null, 0);?>
<?php } else { ?>
<?php $_smarty_tpl->tpl_vars["s_d"] = new Smarty_Variable($_smarty_tpl->tpl_vars['s_d']->value, null, 0);?>
<?php }?>

<?php echo '<script'; ?>
 type='text/javascript' src='https://maps.googleapis.com/maps/api/js?v=3&amp;sensor=false&amp;key=AIzaSyAmynQQEzqguAnOOsAC3rLw2Lrlm5L3_EI'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['base_tlp_front']->value;?>
/js/markerwithlabel.js'><?php echo '</script'; ?>
>
<div id="map_canvas" style='width:100%'></div>
<?php echo '<script'; ?>
>
	var s_d            = "<?php echo $_smarty_tpl->tpl_vars['s_d']->value;?>
";
	var start          = "<?php echo $_smarty_tpl->tpl_vars['start']->value;?>
";
	var end            = "<?php echo $_smarty_tpl->tpl_vars['end']->value;?>
";
	var pr_to          = <?php echo $_smarty_tpl->tpl_vars['pr_to']->value;?>
;
	var pr_from        = <?php echo $_smarty_tpl->tpl_vars['pr_from']->value;?>
;
	var ids_search     = "<?php echo $_smarty_tpl->tpl_vars['ids_search']->value;?>
";
	var add_more       = "<?php echo $_smarty_tpl->tpl_vars['add_more']->value;?>
";
	var base_tlp_front = "<?php echo $_smarty_tpl->tpl_vars['base_tlp_front']->value;?>
"; 

<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_front']->value;?>
/js/custom-search.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
	var lat  = <?php echo $_smarty_tpl->tpl_vars['latLong']->value['starting_latitude'];?>
;
	var long = <?php echo $_smarty_tpl->tpl_vars['latLong']->value['starting_longtitude'];?>
;
	var map_zoom = <?php echo $_smarty_tpl->tpl_vars['latLong']->value['map_zoom'];?>
;
	var default_zoom = (map_zoom != '') ? map_zoom : 14;
	var openedInfoWindow = null;

	
	function myLocations() {
		var locations = [
		

		<?php
$foreach_1_vl_sav['s_item'] = isset($_smarty_tpl->tpl_vars['vl']) ? $_smarty_tpl->tpl_vars['vl'] : false;
$_from = $_smarty_tpl->tpl_vars['map']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['vl'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['vl']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['vl']->value) {
$_smarty_tpl->tpl_vars['vl']->_loop = true;
$foreach_1_vl_sav['item'] = $_smarty_tpl->tpl_vars['vl'];
?>
		['<?php echo $_smarty_tpl->tpl_vars['vl']->value[0];?>
', <?php echo $_smarty_tpl->tpl_vars['vl']->value[1];?>
, <?php echo $_smarty_tpl->tpl_vars['vl']->value[2];?>
, '<?php echo $_smarty_tpl->tpl_vars['vl']->value[3];?>
', '<?php echo $_smarty_tpl->tpl_vars['vl']->value[4];?>
'],
		<?php
$_smarty_tpl->tpl_vars['vl'] = $foreach_1_vl_sav['item'];
}
if ($foreach_1_vl_sav['s_item']) {
$_smarty_tpl->tpl_vars['vl'] = $foreach_1_vl_sav['s_item'];
}
?>

		
		];

		return locations;
	}

// = new google.maps.LatLng(49.47805, -123.84716);
	function initMap() {
		var locations = myLocations();
		var homeLatLng; 
		
		var latLng = new google.maps.LatLng(lat, long);
		var map = new google.maps.Map(document.getElementById('map_canvas'), {
			zoom: default_zoom,
            //scrollwheel: false,
			center: latLng,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		});
	
	customMap(locations, map);
	
	// map is drag
	google.maps.event.addDomListener(map, 'dragend', function(event) {
		customMap(locations, map, 1);
	});
	
	// map is zoom
	google.maps.event.addDomListener(map, 'zoom_changed', function() {
		customMap(locations, map, 1)
	});
}



$(document).ready(function() {
	initMap();
});

<?php echo '</script'; ?>
> 
<?php echo $_smarty_tpl->getSubTemplate ("footer-search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>






<?php }
}
?>