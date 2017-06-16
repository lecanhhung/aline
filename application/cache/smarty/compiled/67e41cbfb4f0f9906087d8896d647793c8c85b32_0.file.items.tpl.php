<?php /* Smarty version 3.1.28-dev/21, created on 2017-04-15 06:04:15
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\admin\views\language\items.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1646158f19bbfe3bde6_93648547%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67e41cbfb4f0f9906087d8896d647793c8c85b32' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\admin\\views\\language\\items.tpl',
      1 => 1483519506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1646158f19bbfe3bde6_93648547',
  'variables' => 
  array (
    'alert' => 0,
    'base_tlp_admin' => 0,
    'lable' => 0,
    'base_url_admin' => 0,
    'k' => 0,
    'vl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_58f19bc000dd10_15147514',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f19bc000dd10_15147514')) {
function content_58f19bc000dd10_15147514 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1646158f19bbfe3bde6_93648547';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<!-- Content -->
<div id="content">

    <?php echo $_smarty_tpl->getSubTemplate ("sidebar_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <?php echo $_smarty_tpl->getSubTemplate ("breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    
    <div class="innerLR">
			
			<?php if ($_smarty_tpl->tpl_vars['alert']->value != '') {?> <?php echo $_smarty_tpl->getSubTemplate ("notes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }?>
			
			<link href="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
			
			<div class="widget">
				<div class="widget-head">
					<h4 class="heading"><?php echo $_smarty_tpl->tpl_vars['lable']->value['list_items'];?>
</h4>
				</div>
				<div class="widget-body innerAll inner-2x">
					
					<table class="table table-bordered table-condensed" id="dataTables-lang">
						<thead>
							<tr>
								<th><?php echo $_smarty_tpl->tpl_vars['lable']->value['variable'];?>
</th>
								<th><?php echo $_smarty_tpl->tpl_vars['lable']->value['value_of_variable'];?>
</th>								
							</tr>
						</thead>
						<tbody>
						<?php
$foreach_0_vl_sav['s_item'] = isset($_smarty_tpl->tpl_vars['vl']) ? $_smarty_tpl->tpl_vars['vl'] : false;
$foreach_0_vl_sav['s_key'] = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_from = $_smarty_tpl->tpl_vars['lable']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['vl'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['vl']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['vl']->value) {
$_smarty_tpl->tpl_vars['vl']->_loop = true;
$foreach_0_vl_sav['item'] = $_smarty_tpl->tpl_vars['vl'];
?>
							<tr>
								<td>
									<a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/language/?id=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
&option=edit" title="<?php echo $_smarty_tpl->tpl_vars['lable']->value['modify_update'];?>
"><?php echo $_smarty_tpl->tpl_vars['k']->value;?>

									</a>
								</td>
								<td>
									<input class="form-control" type="text" name="value" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['vl']->value);?>
" style="width:400px;" />
								</td>								
							</tr>
						<?php
$_smarty_tpl->tpl_vars['vl'] = $foreach_0_vl_sav['item'];
}
if ($foreach_0_vl_sav['s_item']) {
$_smarty_tpl->tpl_vars['vl'] = $foreach_0_vl_sav['s_item'];
}
if ($foreach_0_vl_sav['s_key']) {
$_smarty_tpl->tpl_vars['k'] = $foreach_0_vl_sav['s_key'];
}
?>								
						</tbody>
					</table>
					
					<a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/language/" id="btnLogin" class="btn btn-primary btn-sm"><?php echo $_smarty_tpl->tpl_vars['lable']->value['add'];?>
</a>
				
				</div><!-- /.widget-body -->
			</div><!-- /.widget -->
			 
    </div>    
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/js/plugins/dataTables/jquery.dataTables.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/js/plugins/dataTables/dataTables.bootstrap.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript">

$(document).ready(function() { 
	$('#dataTables-lang').dataTable(); 
});

<?php echo '</script'; ?>
><?php }
}
?>