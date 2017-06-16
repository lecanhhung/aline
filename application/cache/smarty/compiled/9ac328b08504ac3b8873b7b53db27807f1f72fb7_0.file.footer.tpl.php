<?php /* Smarty version 3.1.28-dev/21, created on 2017-04-15 06:04:04
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\admin\views\login\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:930458f19bb499a853_56784324%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ac328b08504ac3b8873b7b53db27807f1f72fb7' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\admin\\views\\login\\footer.tpl',
      1 => 1480383856,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '930458f19bb499a853_56784324',
  'variables' => 
  array (
    'base_tlp_admin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_58f19bb49b2f22_71989525',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f19bb49b2f22_71989525')) {
function content_58f19bb49b2f22_71989525 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '930458f19bb499a853_56784324';
?>
<?php echo '<script'; ?>
 data-id="App.Config">

	var App = {};
	var basePath = '',
		commonPath = base_tpl_admin+'/assets/',
		rootPath = '../',
		DEV = false,
		componentsPath = base_tpl_admin+'/assets/components/';
	var primaryColor = '#3695d5',
		dangerColor = '#b55151',
		successColor = '#609450',
		infoColor = '#4a8bc2',
		warningColor = '#ab7a4b',
		inverseColor = '#45484d';
	var themerPrimaryColor = primaryColor;

<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/assets/components/library/bootstrap/js/bootstrap.min.js?v=v1.0.3-rc2&sv=v0.0.1.1"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/assets/components/plugins/nicescroll/jquery.nicescroll.min.js?v=v1.0.3-rc2&sv=v0.0.1.1"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/assets/components/plugins/breakpoints/breakpoints.js?v=v1.0.3-rc2&sv=v0.0.1.1"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/assets/components/plugins/preload/pace/pace.min.js?v=v1.0.3-rc2&sv=v0.0.1.1"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/assets/components/plugins/preload/pace/preload.pace.init.js?v=v1.0.3-rc2&sv=v0.0.1.1"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/assets/components/core/js/animations.init.js?v=v1.0.3-rc2"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/assets/components/core/js/core.init.js?v=v1.0.3-rc2"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
?>