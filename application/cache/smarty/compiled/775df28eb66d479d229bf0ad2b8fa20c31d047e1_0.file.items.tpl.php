<?php /* Smarty version 3.1.28-dev/21, created on 2017-04-19 09:09:22
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\home\views\blog\items.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1789258f70d22061d59_57729205%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '775df28eb66d479d229bf0ad2b8fa20c31d047e1' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\home\\views\\blog\\items.tpl',
      1 => 1492477882,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1789258f70d22061d59_57729205',
  'variables' => 
  array (
    'banner_items' => 0,
    'dir_thumb' => 0,
    'item' => 0,
    'base_url' => 0,
    'blog_categories' => 0,
    'c' => 0,
    'category_icons' => 0,
    'items' => 0,
    'totalArr' => 0,
    'base_tlp_front' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_58f70d227777d8_26662450',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f70d227777d8_26662450')) {
function content_58f70d227777d8_26662450 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '1789258f70d22061d59_57729205';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div id="page" class="template-background">
		<?php echo $_smarty_tpl->getSubTemplate ("menu-search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		<div class="banner-slider">
			<ul class="list-unstyled lightSlider cS-hidden">
			<?php
$foreach_0_item_sav['s_item'] = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_from = $_smarty_tpl->tpl_vars['banner_items']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_0_item_sav['item'] = $_smarty_tpl->tpl_vars['item'];
?>
				<li>
					<div class="item">
						<div class="fill" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['dir_thumb']->value;
echo $_smarty_tpl->tpl_vars['item']->value['background_url'];?>
)"></div>
						<div class="caption hidden-xs">
							<p><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</p>
							<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
blog/<?php echo $_smarty_tpl->tpl_vars['item']->value['slug'];?>
" class="btn btn-link">xem</a>
						</div>
					</div>
				</li>
			<?php
$_smarty_tpl->tpl_vars['item'] = $foreach_0_item_sav['item'];
}
if ($foreach_0_item_sav['s_item']) {
$_smarty_tpl->tpl_vars['item'] = $foreach_0_item_sav['s_item'];
}
?>
			</ul>
		</div>
		<div class="hidden-sm hidden-md hidden-lg">
            <?php echo $_smarty_tpl->getSubTemplate ("search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		</div>
		<div class="blog-category">
			<div class="container">
				<div class="row">
					<div class="lists">
					<?php
$foreach_1_c_sav['s_item'] = isset($_smarty_tpl->tpl_vars['c']) ? $_smarty_tpl->tpl_vars['c'] : false;
$_from = $_smarty_tpl->tpl_vars['blog_categories']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['c'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['c']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
$foreach_1_c_sav['item'] = $_smarty_tpl->tpl_vars['c'];
?>
						<div class="blog-item">
							<div class="hovereffect">								
								<div class="background" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['dir_thumb']->value;
echo $_smarty_tpl->tpl_vars['c']->value['path_image'];?>
)"></div>
								<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
blog/category/<?php echo $_smarty_tpl->tpl_vars['c']->value['slug'];?>
">
							    <?php echo $_smarty_tpl->tpl_vars['category_icons']->value[$_smarty_tpl->tpl_vars['c']->value['icon']];?>

                                <?php echo $_smarty_tpl->tpl_vars['c']->value['category_name'];?>

								</a>
								<div class="overlay">
								   <p><?php echo $_smarty_tpl->tpl_vars['c']->value['title'];?>
</p>
								</div>
							</div>
						</div>
						<?php
$_smarty_tpl->tpl_vars['c'] = $foreach_1_c_sav['item'];
}
if ($foreach_1_c_sav['s_item']) {
$_smarty_tpl->tpl_vars['c'] = $foreach_1_c_sav['s_item'];
}
?>
					</div>
				</div>
			</div>
		</div>
		<div class="blog-list space-4 hidden-xs" >
			<div class="container">
					<?php
$foreach_2_test_sav['s_item'] = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$foreach_2_test_sav['s_name'] = isset($_smarty_tpl->tpl_vars['__foreach_test']) ? $_smarty_tpl->tpl_vars['__foreach_test'] : false;
$_from = $_smarty_tpl->tpl_vars['items']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['__foreach_test'] = new Smarty_Variable(array('iteration' => 0));
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_test']->value['iteration']++;
$foreach_2_test_sav['item'] = $_smarty_tpl->tpl_vars['item'];
?>
						<?php if ((isset($_smarty_tpl->tpl_vars['__foreach_test']->value['iteration']) ? $_smarty_tpl->tpl_vars['__foreach_test']->value['iteration'] : null) % 3 == 1) {?>
						<div class="row blog">
						<?php }?>
							 <div class="col-md-4">
						        <img src="<?php echo $_smarty_tpl->tpl_vars['dir_thumb']->value;
echo $_smarty_tpl->tpl_vars['item']->value['background_url'];?>
"  width="368" height="243" >
						        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
blog/<?php echo $_smarty_tpl->tpl_vars['item']->value['slug'];?>
"><h3><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</h3></a>
						        <div class="meta"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['date_add'],"%d-%m-%Y");?>
</div>
						        <p><?php echo $_smarty_tpl->tpl_vars['item']->value['short_description'];?>
</p>
						     </div>
						<?php if ((isset($_smarty_tpl->tpl_vars['__foreach_test']->value['iteration']) ? $_smarty_tpl->tpl_vars['__foreach_test']->value['iteration'] : null) % 3 == 0 || (isset($_smarty_tpl->tpl_vars['__foreach_test']->value['iteration']) ? $_smarty_tpl->tpl_vars['__foreach_test']->value['iteration'] : null) == $_smarty_tpl->tpl_vars['totalArr']->value) {?>
						</div>
						<?php }?>     				
					<?php
$_smarty_tpl->tpl_vars['item'] = $foreach_2_test_sav['item'];
}
if ($foreach_2_test_sav['s_item']) {
$_smarty_tpl->tpl_vars['item'] = $foreach_2_test_sav['s_item'];
}
if ($foreach_2_test_sav['s_name']) {
$_smarty_tpl->tpl_vars['__foreach_test'] = $foreach_2_test_sav['s_name'];
}
?>				
			</div>		
		</div>
			<div class="container">
					<div class="row">
						<div class="col-md-12 text-right hidden-xs">
						<a href="javascript:void(0)" class="load-more">
							 <button type="button" class="btn btn-default load btn-readmore-blog"> Xem thêm</button>
						</a>
						</div>
					</div>
			</div>
		
		<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</div>
		<?php echo '<script'; ?>
>
		var base_url = "<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
";	
		
			$(document).ready(function(){
				// slider banner blog
				$('.banner-slider .lightSlider').lightSlider({
					item: 1,
					slideMargin: 0,
					pager: true,
					controls: false,
					adaptiveHeight: true,
					pauseOnHover: true,
					onSliderLoad: function() {
						$('.banner-slider .lightSlider').removeClass('cS-hidden');
					},
				});
			});
		
		<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_front']->value;?>
/js/blog.js"><?php echo '</script'; ?>
><?php }
}
?>