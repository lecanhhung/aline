<?php /* Smarty version 3.1.28-dev/21, created on 2017-04-27 03:33:50
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\home\views\blog\detail.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3248159014a7e752028_66594909%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e01c41e97dca830bc6948dfcb875924b84d262ef' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\home\\views\\blog\\detail.tpl',
      1 => 1493256827,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3248159014a7e752028_66594909',
  'variables' => 
  array (
    'dir_thumb' => 0,
    'item' => 0,
    'getDetail' => 0,
    'base_url' => 0,
    'slug' => 0,
    'tourSuggess' => 0,
    'tr' => 0,
    'pathThumb' => 0,
    'base_tlp_front' => 0,
    'tour_id' => 0,
    'day_amount' => 0,
    'tourdays' => 0,
    'night_amount' => 0,
    'transport' => 0,
    'lable' => 0,
    'blog_categories' => 0,
    'c' => 0,
    'facebook_app_id' => 0,
    'facebook_graph_version' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_59014a7e95da81_94841944',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59014a7e95da81_94841944')) {
function content_59014a7e95da81_94841944 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_getdaysnight')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\modifier.getdaysnight.php';
if (!is_callable('smarty_modifier_convert_vnd')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\modifier.convert_vnd.php';

$_smarty_tpl->properties['nocache_hash'] = '3248159014a7e752028_66594909';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div id="page" class="template-background">
    <div class="menu-search">
        <?php echo $_smarty_tpl->getSubTemplate ("menu-search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    </div>
    <div class="banner-blog">
        <div style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['dir_thumb']->value;
echo $_smarty_tpl->tpl_vars['item']->value['background_url'];?>
)"></div>
    </div>
    <div class="hidden-sm hidden-md hidden-lg">
        <?php echo $_smarty_tpl->getSubTemplate ("search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    </div>
    <div class="blog-detail">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8">
                    <div class="content-post space-4">
                        <h1><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</h1>
                        <div class="meta"><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['date_add'],"%d-%m-%Y");?>
</div>
                        <div class="description">
                            
                            <p><?php echo stripslashes($_smarty_tpl->tpl_vars['item']->value['short_description']);?>
</p>
                            <p><?php echo stripslashes($_smarty_tpl->tpl_vars['item']->value['content']);?>
</p> 
                        </div>
                    </div>

                    <div class="related-post space-4">
                        <div class="item">
                            <div class="img">
                                <a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['dir_thumb']->value;
echo $_smarty_tpl->tpl_vars['getDetail']->value['background_url'];?>
" alt="" border="0" /></a>
                            </div>
                            <div class="text">
                                <h5><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
blog/<?php echo $_smarty_tpl->tpl_vars['getDetail']->value['slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['getDetail']->value['title'];?>
 </a></h5>
                                <p><?php echo $_smarty_tpl->tpl_vars['getDetail']->value['short_description'];?>
 </p>
                            </div>
                        </div>
                    </div>
                    <div class="comment space-4">
                        <div class="fb-like" data-href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
blog/<?php echo $_smarty_tpl->tpl_vars['slug']->value;?>
" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                        <br clear="all" />
                        <div class="fb-comments" data-href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
blog/<?php echo $_smarty_tpl->tpl_vars['slug']->value;?>
" data-width="700" data-numposts="5"></div>
                    </div>
                </div>
                <div class="col-md-4 hidden-xs hidden-sm">
                    <div id="sidebar">
                        <?php
$foreach_0_tr_sav['s_item'] = isset($_smarty_tpl->tpl_vars['tr']) ? $_smarty_tpl->tpl_vars['tr'] : false;
$_from = $_smarty_tpl->tpl_vars['tourSuggess']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['tr'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['tr']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tr']->value) {
$_smarty_tpl->tpl_vars['tr']->_loop = true;
$foreach_0_tr_sav['item'] = $_smarty_tpl->tpl_vars['tr'];
?>
                        
                        <div class="box box-vertical space-4">
                            <div class="box-header">
                                <div class="box-picture">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
tour/<?php echo $_smarty_tpl->tpl_vars['tr']->value['slug'];?>
">
                                        <img class="picture" src="<?php echo $_smarty_tpl->tpl_vars['pathThumb']->value;
echo $_smarty_tpl->tpl_vars['tr']->value['path_image'];?>
" alt="" border="0" />
                                        
                                        <span class="ribbon">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_front']->value;?>
/images/ribbon-noibat.png" alt="" border="0" class="img-responsive" />
                                        </span>
                                        
                                    </a>
                                </div>
                            </div>
                            <div class="box-body">
                                <?php $_smarty_tpl->tpl_vars['tour_id'] = new Smarty_Variable($_smarty_tpl->tpl_vars['tr']->value['tour_id'], null, 0);?>
                                <?php $_smarty_tpl->tpl_vars['tourdays'] = new Smarty_Variable(smarty_modifier_getdaysnight($_smarty_tpl->tpl_vars['tour_id']->value), null, 0);?>
                                <?php $_smarty_tpl->tpl_vars['day_amount'] = new Smarty_Variable($_smarty_tpl->tpl_vars['tr']->value['day_amount'], null, 0);?>
                                <?php $_smarty_tpl->tpl_vars['night_amount'] = new Smarty_Variable($_smarty_tpl->tpl_vars['tr']->value['night_amount'], null, 0);?>

                                <div class="box-title">
                                    <h2><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
tour/<?php echo $_smarty_tpl->tpl_vars['tr']->value['slug'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['tr']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['tr']->value['title'];?>
</a></h2>
                                    <p><?php echo $_smarty_tpl->tpl_vars['tourdays']->value[$_smarty_tpl->tpl_vars['day_amount']->value];?>
 ngày - <?php echo $_smarty_tpl->tpl_vars['tourdays']->value[$_smarty_tpl->tpl_vars['night_amount']->value];?>
 đêm</p>
                                </div>
                                <div class="box-content">
                                    <div class="place-transport">
                                        <p class="place"><?php echo $_smarty_tpl->tpl_vars['tr']->value['cat_name'];?>
</p>
                                        <p class="text-right">
                                            <?php $_smarty_tpl->tpl_vars["transport"] = new Smarty_Variable($_smarty_tpl->tpl_vars['tr']->value['transport'], null, 0);?>
                                            <?php
$foreach_1_name_sav['s_item'] = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$foreach_1_name_sav['s_key'] = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$foreach_1_name_sav['s_name'] = isset($_smarty_tpl->tpl_vars['__foreach_name']) ? $_smarty_tpl->tpl_vars['__foreach_name'] : false;
$_from = $_smarty_tpl->tpl_vars['transport']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_1_name_sav['item'] = $_smarty_tpl->tpl_vars['item'];
?>
                                            <?php echo $_smarty_tpl->tpl_vars['item']->value;?>

                                            <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_1_name_sav['item'];
}
if ($foreach_1_name_sav['s_item']) {
$_smarty_tpl->tpl_vars['item'] = $foreach_1_name_sav['s_item'];
}
if ($foreach_1_name_sav['s_key']) {
$_smarty_tpl->tpl_vars['key'] = $foreach_1_name_sav['s_key'];
}
if ($foreach_1_name_sav['s_name']) {
$_smarty_tpl->tpl_vars['__foreach_name'] = $foreach_1_name_sav['s_name'];
}
?>
                                        </p>
                                    </div>
                                    <div class="price">
                                        <p class="price-promotion"><?php echo smarty_modifier_convert_vnd($_smarty_tpl->tpl_vars['tr']->value['price_promotion']);?>
</p>
                                        <p class="text-right"><del><?php echo smarty_modifier_convert_vnd($_smarty_tpl->tpl_vars['tr']->value['price']);?>
</del></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <?php
$_smarty_tpl->tpl_vars['tr'] = $foreach_0_tr_sav['item'];
}
if ($foreach_0_tr_sav['s_item']) {
$_smarty_tpl->tpl_vars['tr'] = $foreach_0_tr_sav['s_item'];
}
?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-category menu-categories">
        <div class="container">
            <div class="row">
                <h5><?php echo $_smarty_tpl->tpl_vars['lable']->value['see_more'];?>
</h5>
                <div class="lists">
                    <?php
$foreach_2_c_sav['s_item'] = isset($_smarty_tpl->tpl_vars['c']) ? $_smarty_tpl->tpl_vars['c'] : false;
$_from = $_smarty_tpl->tpl_vars['blog_categories']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['c'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['c']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
$foreach_2_c_sav['item'] = $_smarty_tpl->tpl_vars['c'];
?>
                    <div class="blog-item">
                        <div class="hovereffect">								
                            <div class="background" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['dir_thumb']->value;
echo $_smarty_tpl->tpl_vars['c']->value['path_image'];?>
)">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
blog/<?php echo $_smarty_tpl->tpl_vars['c']->value['slug'];?>
"></a>
                            </div>							
                            <div class="overlay">
                                <p><?php echo $_smarty_tpl->tpl_vars['c']->value['title'];?>
</p>
                            </div>
                        </div>
                    </div>
                    <?php
$_smarty_tpl->tpl_vars['c'] = $foreach_2_c_sav['item'];
}
if ($foreach_2_c_sav['s_item']) {
$_smarty_tpl->tpl_vars['c'] = $foreach_2_c_sav['s_item'];
}
?>
                </div>
            </div>
        </div>
        <div class="social-widget hidden-xs hidden-sm">
            <div class='fb-button'>
                <div class='fb-overlay'></div>
                <div class='fb-root'></div>
                <?php echo '<script'; ?>
>
                    /*
                    var facebook_app_id        = "<?php echo $_smarty_tpl->tpl_vars['facebook_app_id']->value;?>
";
                    var facebook_graph_version = "<?php echo $_smarty_tpl->tpl_vars['facebook_graph_version']->value;?>
";
                    */
                    
                    //<![CDATA[
                    /*
                    window.fbAsyncInit = function() {
                        FB.init({
                          appId      : facebook_app_id,
                          xfbml      : true,
                          version    : facebook_graph_version
                      });
                    };
                    */


                    (function(d){
                        var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
                        js = d.createElement('script'); js.id = id; js.async = true;
                        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                        d.getElementsByTagName('head')[0].appendChild(js);
                    }(document));
                    //]]>
                    
                <?php echo '</script'; ?>
>
                    
                        <div class='fb-like blog-detail' data-href='<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
blog/<?php echo $_smarty_tpl->tpl_vars['slug']->value;?>
' data-send='false'  data-toggle="tooltip" data-placement="right" title="Like"></div>
                </div>

                    <a href="http://www.facebook.com/share.php?u=<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
blog/<?php echo $_smarty_tpl->tpl_vars['slug']->value;?>
" target="_blank"><i class="fa fa-facebook fb-tooltip" data-toggle="tooltip" data-placement="right" title="Share"></i></a>
                    <a href="javascript:void(0)" class="fa-cmt comment-tooltip" data-toggle="tooltip" data-placement="right" title="Bình luận"></a>

                </div>

                <?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_front']->value;?>
/js/jquery.easing.min.js"><?php echo '</script'; ?>
>

                <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


                <?php echo '<script'; ?>
>
                    
                    $(document).ready(function(){
                                // tooltip
                        $('[data-toggle="tooltip"]').tooltip();	
						
						$('.description img').each(function () {
							$(this).addClass('img-responsive');
						});

                    });

                    
                <?php echo '</script'; ?>
>
            </div><?php }
}
?>