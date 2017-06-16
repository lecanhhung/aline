<?php /* Smarty version 3.1.28-dev/21, created on 2017-06-08 06:05:21
         compiled from "C:\xampp\htdocs\customer\aline\application\modules\admin\views\login\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:170275938cd01ae1975_31451181%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b8e4f41a61732499f60957c7d10e83319026671' => 
    array (
      0 => 'C:\\xampp\\htdocs\\customer\\aline\\application\\modules\\admin\\views\\login\\footer.tpl',
      1 => 1480383856,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170275938cd01ae1975_31451181',
  'variables' => 
  array (
    'base_tlp_admin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_5938cd01ae9d49_38061720',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5938cd01ae9d49_38061720')) {
function content_5938cd01ae9d49_38061720 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '170275938cd01ae1975_31451181';
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