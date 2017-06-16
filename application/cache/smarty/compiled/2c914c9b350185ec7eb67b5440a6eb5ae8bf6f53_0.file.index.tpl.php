<?php /* Smarty version 3.1.28-dev/21, created on 2017-06-08 08:57:07
         compiled from "C:\xampp\htdocs\customer\aline\application\modules\admin\views\login\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:153385938f54348dc54_62327333%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c914c9b350185ec7eb67b5440a6eb5ae8bf6f53' => 
    array (
      0 => 'C:\\xampp\\htdocs\\customer\\aline\\application\\modules\\admin\\views\\login\\index.tpl',
      1 => 1496905016,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153385938f54348dc54_62327333',
  'variables' => 
  array (
    'lable' => 0,
    'error' => 0,
    'base_url_admin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_5938f5434fdb24_66383869',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5938f5434fdb24_66383869')) {
function content_5938f5434fdb24_66383869 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '153385938f54348dc54_62327333';
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
	<h4 class="innerAll margin-none border-bottom text-center"><i class="fa fa-lock"></i> <?php echo $_smarty_tpl->tpl_vars['lable']->value['header_login'];?>
</h4>
	<!-- col-table-row -->
	<div class="col-table-row">
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
/login/">
								<div class="form-group">
									<label for="exampleInputEmail1"><?php echo $_smarty_tpl->tpl_vars['lable']->value['username'];?>
</label>
									<input type="text" name="username" id="username" class="form-control" placeholder="Enter username">
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1"><?php echo $_smarty_tpl->tpl_vars['lable']->value['password'];?>
</label>
									<input type="password" name="password" id="password" class="form-control" placeholder="Password">
								</div>
								<button type="submit" class="btn btn-primary btn-block"><?php echo $_smarty_tpl->tpl_vars['lable']->value['btn_login'];?>
</button>
								<div class="checkbox">
									<label>
                                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/forgot/"><?php echo $_smarty_tpl->tpl_vars['lable']->value['forgot_password'];?>
</a>
									</label>
								</div>
							</form>
						</div>
					</div>
					
					<!--
					<div class="col-sm-4 col-sm-offset-4 text-center">
						<div class="innerAll">
							<a href="signup.html?lang=en" class="btn btn-info">Create a new account? <i class="fa fa-pencil"></i> </a>
							<div class="separator"></div>
						</div>
					</div>
					-->
					
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