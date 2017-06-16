<?php /* Smarty version 3.1.28-dev/21, created on 2017-06-13 11:53:09
         compiled from "C:\xampp\htdocs\customer\aline\application\modules\admin\views\forgot\newpassword.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18855593fb6053e1fd2_94495787%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e58512a6fd2843cb5857deec51e58ae28eff5f3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\customer\\aline\\application\\modules\\admin\\views\\forgot\\newpassword.tpl',
      1 => 1497347583,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18855593fb6053e1fd2_94495787',
  'variables' => 
  array (
    'alert' => 0,
    'task' => 0,
    'base_url_admin' => 0,
    'data' => 0,
    'lable' => 0,
    'valid' => 0,
    'base_url' => 0,
    'base_tlp_admin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_593fb605437fb4_08802977',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_593fb605437fb4_08802977')) {
function content_593fb605437fb4_08802977 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18855593fb6053e1fd2_94495787';
?>

<div id="page" class="template-agency">
		
		<div class="container">
			<div class="form col-md-offset-4 col-md-4">
            	<?php if ($_smarty_tpl->tpl_vars['alert']->value != '') {?> <?php echo $_smarty_tpl->getSubTemplate ("notes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }?>
                
				<h2 class="text-center space-4"><?php echo $_smarty_tpl->tpl_vars['task']->value;?>
</h2>
                <form class="form-horizontal space-4" name="frm_data" id="frm_data" method="post" action="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/forgot/newpassword/?e=<?php echo $_smarty_tpl->tpl_vars['data']->value['email'];?>
&d=<?php echo $_smarty_tpl->tpl_vars['data']->value['user_id'];?>
" autocomplete="off">
                			
					<div class="form-group">
						<label class="col-sm-6 control-label" for="exampleInputPassword1"><img src="images/icon-password.png" alt="" border="0" /> <?php echo $_smarty_tpl->tpl_vars['lable']->value['create_new_password'];?>
</label>
						<div class="col-sm-6">
                        	
    <input type="password" name="data[new_pwd]" class="form-control" id="new_pwd" maxlength="20" onblur="hideMsg('confirm_new_pwd')">
						</div>
					</div>
                    <div class="form-group">
						<label class="col-sm-6 control-label" for="exampleInputPassword1"><img src="images/icon-password.png" alt="" border="0" /> <?php echo $_smarty_tpl->tpl_vars['lable']->value['confirm_password'];?>
 </label>
						<div class="col-sm-6">
                        	
    <input type="password" name="data[confirm_new_pwd]" class="form-control" id="confirm_new_pwd" maxlength="20" onblur="hideMsg('confirm_new_pwd')">
    <span id="valid_confirm_new_pwd" class="red"><?php echo $_smarty_tpl->tpl_vars['valid']->value['confirm_new_pwd'];?>
</span>
						</div>
					</div>
                    
					<div class="signin-text space-2">
						<div class="clearfix"></div>
					</div>
					<div class="space-4">
						<button class="btn btn-primary btn-block" id="btn-changepassword" type="submit"> <?php echo $_smarty_tpl->tpl_vars['lable']->value['btn_save'];?>
 </button>
					</div>
				</form>
                <div class="signin-text space-2">
                	&nbsp; 
                    <div class="clearfix"></div>
                    &nbsp; 
                </div>
                <div class="signin-text space-2">
                	&nbsp; 
                    <div class="clearfix"></div>
                </div>
			</div>
			
		</div>		
	</div>
</body>
</html>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/captcha/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
> 
    var passsword_not_match = "<?php echo $_smarty_tpl->tpl_vars['lable']->value['passsword_not_match'];?>
";
    
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/js/signup.js"><?php echo '</script'; ?>
>
<?php }
}
?>