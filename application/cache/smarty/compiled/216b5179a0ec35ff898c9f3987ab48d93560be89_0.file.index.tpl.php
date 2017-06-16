<?php /* Smarty version 3.1.28-dev/21, created on 2017-06-13 09:45:26
         compiled from "C:\xampp\htdocs\customer\aline\application\modules\admin\views\forgot\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:30454593f98169ffdd2_49059231%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '216b5179a0ec35ff898c9f3987ab48d93560be89' => 
    array (
      0 => 'C:\\xampp\\htdocs\\customer\\aline\\application\\modules\\admin\\views\\forgot\\index.tpl',
      1 => 1497337929,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30454593f98169ffdd2_49059231',
  'variables' => 
  array (
    'lable' => 0,
    'alert' => 0,
    'error' => 0,
    'base_url_admin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_593f9816af5c09_05188118',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_593f9816af5c09_05188118')) {
function content_593f9816af5c09_05188118 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '30454593f98169ffdd2_49059231';
echo $_smarty_tpl->getSubTemplate ("login/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="container">


<!-- Main Container Fluid -->
<div class="container-fluid menu-hidden">
<!-- Content -->
<div id="content">

<div class="container">
<!-- row-app -->
<div class="row row-app">
<!-- col -->
<!-- col-separator.box -->
<div class="col-separator col-unscrollable box">
<!-- col-table -->
<div class="col-table">
	<h4 class="innerAll margin-none border-bottom text-center"><i class="fa fa-lock"></i> <?php echo $_smarty_tpl->tpl_vars['lable']->value['forgot_password'];?>
</h4>
	<!-- col-table-row -->
	<div class="col-table-row">
                <?php if ($_smarty_tpl->tpl_vars['alert']->value != '') {?> <?php echo $_smarty_tpl->getSubTemplate ("notes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }?>
		<!-- col-app -->
		<div class="col-app col-unscrollable">
			<!-- col-app -->
			<div class="col-app">
				<div class="login">
					<div class="placeholder text-center"><i class="fa fa-lock"></i>
					</div>
					
					<div class="panel panel-default col-md-4 col-sm-6 col-sm-offset-3 col-md-offset-4">
						<div class="panel-body">
						<?php if ($_smarty_tpl->tpl_vars['error']->value != '') {?> <?php echo $_smarty_tpl->getSubTemplate ("error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }?>
							<form role="form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/forgot/">
								<div class="form-group">
									<label for="exampleInputEmail1"><?php echo $_smarty_tpl->tpl_vars['lable']->value['email'];?>
</label>
									<input type="text" name="email" id="email" class="form-control" placeholder="Enter email">
								</div>
								<button type="submit" class="btn btn-primary btn-block"><?php echo $_smarty_tpl->tpl_vars['lable']->value['btn_forgot_password'];?>
</button>
								<div class="checkbox">
									<label>
                                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/login/"><?php echo $_smarty_tpl->tpl_vars['lable']->value['lable_login'];?>
</a>
									</label>
								</div>
							</form>
						</div>
					</div>
					
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- // END col-app -->
		</div>
		<!-- // END col-app.col-unscrollable -->
	</div>
	<!-- // END col-table-row -->
</div>
<!-- // END col-table -->
</div>
<!-- // END col-separator.box -->
</div>
<!-- // END row-app -->

<?php echo $_smarty_tpl->getSubTemplate ("login/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>