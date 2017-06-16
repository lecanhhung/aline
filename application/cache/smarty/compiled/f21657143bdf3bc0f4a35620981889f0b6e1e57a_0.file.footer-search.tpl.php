<?php /* Smarty version 3.1.28-dev/21, created on 2017-04-17 03:41:37
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\home\views\footer-search.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:972158f41d512bdcc7_09466129%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f21657143bdf3bc0f4a35620981889f0b6e1e57a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\home\\views\\footer-search.tpl',
      1 => 1491298481,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '972158f41d512bdcc7_09466129',
  'variables' => 
  array (
    'base_tlp_front' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_58f41d512c5f35_74356985',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f41d512c5f35_74356985')) {
function content_58f41d512c5f35_74356985 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '972158f41d512bdcc7_09466129';
?>

	<?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_front']->value;?>
/js/js-search.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_front']->value;?>
/js/custom.js"><?php echo '</script'; ?>
>
	
</body>
</html><?php }
}
?>