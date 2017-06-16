<?php /* Smarty version 3.1.28-dev/21, created on 2017-04-26 06:17:08
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\home\views\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2926159001f44d9c173_27842787%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eba683a493dd41d3fc94add2f205684cfba22394' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\home\\views\\footer.tpl',
      1 => 1493102156,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2926159001f44d9c173_27842787',
  'variables' => 
  array (
    'lable' => 0,
    'current_control' => 0,
    'base_tlp_front' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_59001f44dc07b0_20916666',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59001f44dc07b0_20916666')) {
function content_59001f44dc07b0_20916666 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2926159001f44d9c173_27842787';
?>
<?php echo '<script'; ?>
>
	var requireMsg      = "<?php echo $_smarty_tpl->tpl_vars['lable']->value['requireMsg'];?>
";
	var current_control = "<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
";
<?php echo '</script'; ?>
>

<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="logo">
					<img src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_front']->value;?>
/images/logo.png" class="img-responsive center-block" />
				</div>
				<div class="copyright text-center">
					<p><?php echo $_smarty_tpl->tpl_vars['lable']->value['address_company'];?>
</p>
					<p>
						<span>Tel: <?php echo $_smarty_tpl->tpl_vars['lable']->value['tel_company'];?>
</span>
						<span class="divider"> - </span>
						<span>Hotline: <?php echo $_smarty_tpl->tpl_vars['lable']->value['hotline_company'];?>
</span>
						<span class="divider"> - </span>
						<span>Email: <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['lable']->value['email_company'];?>
"><?php echo $_smarty_tpl->tpl_vars['lable']->value['email_company'];?>
</a></span>
					</p>
				</div>
				<div class="social">
					<ul class="list-inline text-center">
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['lable']->value['facebook_company'];?>
"><i class="fa fa-facebook"></i></a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['lable']->value['twitter_company'];?>
"><i class="fa fa-twitter"></i></a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['lable']->value['youtube_company'];?>
"><i class="fa fa-youtube-play"></i></a></li>
						<li><img src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_front']->value;?>
/images/license.png" class="img-responsive center-block" /></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer> 
<?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_front']->value;?>
/js/custom.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-16288383-9', 'auto');
  ga('send', 'pageview');

<?php echo '</script'; ?>
><?php }
}
?>