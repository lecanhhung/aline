<?php /* Smarty version 3.1.28-dev/21, created on 2017-04-15 04:35:29
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\home\views\search.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2460258f186f1e28595_98525461%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00c88921b4f830d9af3e5157b38ded08d2334e35' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\home\\views\\search.tpl',
      1 => 1491363723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2460258f186f1e28595_98525461',
  'variables' => 
  array (
    'base_url' => 0,
    'lable' => 0,
    'tour_location' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_58f186f1e4f481_24470600',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f186f1e4f481_24470600')) {
function content_58f186f1e4f481_24470600 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2460258f186f1e28595_98525461';
?>
<form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
search" method="GET" role="form" id="menuDefault-1" >
	
	<div class="search">
		<p><?php echo $_smarty_tpl->tpl_vars['lable']->value['choose_a_starting_point'];?>
</p>

		<div class="input-group">
			<div class="input-group-btn">																
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"></button>
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
" class="_i<?php echo $_smarty_tpl->tpl_vars['item']->value['tour_location_id'];?>
" href="#"><?php echo $_smarty_tpl->tpl_vars['item']->value['cat_name'];?>
</a></li>
					<?php
$_smarty_tpl->tpl_vars['item'] = $foreach_0_item_sav['item'];
}
if ($foreach_0_item_sav['s_item']) {
$_smarty_tpl->tpl_vars['item'] = $foreach_0_item_sav['s_item'];
}
?>
				</ul>
			</div>

			<div class="divider hidden-xs"></div>
			<div class="input-group-btn">
				<input type="text" class="form-control txtsearch" placeholder="<?php echo $_smarty_tpl->tpl_vars['lable']->value['holder_search'];?>
" name="s" id="search-default" />
				<input type="hidden" class="vl-search" name="a" id="agency" value="" />
				<input type="hidden" class="vl-search" name="des" id="destination" value="" />
				<input type="hidden" name="l" id="tour_location_id_1" value="">
			</div>
			<div class="input-group-btn">
				<button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['lable']->value['search'];?>
</button>
			</div>
		</div>
	</div>
</form>


<?php echo '<script'; ?>
>
	$(document).ready(function(){
			
			$( "#search-default" ).autocomplete({
				source: base_url + "search/autocomplete",

				select: function( event, ui ) {

					var custom_id = (typeof ui.item.agency  !== "undefined" && ui.item.agency != '') ? ui.item.agency : 'destination';

					$('.vl-search').val('');
					$( "#"+custom_id ).val( ui.item.id );
					$( "#search-default" ).val( ui.item.label ); 
					if(current_control == 'blog'){
						$('#searchTop').submit(); 
					}
					//$('#searchTop').submit();   
                    return false;
                }
                        
                        
            })
			.data( "ui-autocomplete" )._renderItem = function( ul, item ) {
				var custom_classs = (typeof item.agency  !== "undefined" && item.agency != '') ? item.agency : 'destination';
				//ul.addClass('customClass'); //Ul custom class here
				return $('<li></li>')
				.append('<a class="'+custom_classs+'" id="'+item.id+'">' + item.label + '</a>')
				.appendTo(ul);
			};



	});
<?php echo '</script'; ?>
> <?php }
}
?>