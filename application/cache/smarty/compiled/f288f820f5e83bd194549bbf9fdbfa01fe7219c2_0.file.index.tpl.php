<?php /* Smarty version 3.1.28-dev/21, created on 2017-05-10 09:26:17
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\user\views\signin\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:168625912c0996d0697_72733155%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f288f820f5e83bd194549bbf9fdbfa01fe7219c2' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\user\\views\\signin\\index.tpl',
      1 => 1490665177,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168625912c0996d0697_72733155',
  'variables' => 
  array (
    'alert' => 0,
    'task' => 0,
    'base_url_user' => 0,
    'option' => 0,
    'base_tlp_user' => 0,
    'data' => 0,
    'lable' => 0,
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_5912c099983176_77755266',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5912c099983176_77755266')) {
function content_5912c099983176_77755266 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '168625912c0996d0697_72733155';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div id="page" class="template-agency">
	<?php echo $_smarty_tpl->getSubTemplate ("menu_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<div class="container">
		<div class="form col-md-offset-4 col-md-4">
			<?php if ($_smarty_tpl->tpl_vars['alert']->value != '') {?> <?php echo $_smarty_tpl->getSubTemplate ("notes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }?>

			<h2 class="text-center space-4"><?php echo $_smarty_tpl->tpl_vars['task']->value;?>
</h2>
			<form class="form-horizontal space-4" role="form" name="frm_signin" id="frm_signin" method="post" action="<?php echo $_smarty_tpl->tpl_vars['base_url_user']->value;?>
/signin/" autocomplete="off">
				<input type="hidden" name="option" value="<?php echo $_smarty_tpl->tpl_vars['option']->value;?>
" />				
				<div class="form-group">
					<label class="col-sm-1 control-label" for="inputEmail">
						<img src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_user']->value;?>
/images/icon-mail.png" alt="" border="0" />
					</label>
					<div class="col-sm-11">
						<input type="email" class="form-control" name="data[email]" id="email" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['email'];?>
" placeholder="Email address" required autofocus />							
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-1 control-label" for="inputPassword">
						<img src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_user']->value;?>
/images/icon-password.png" alt="" border="0" />
					</label>
					<div class="col-sm-11">
						<input type="password" id="pwd" name="data[password]" value="" class="form-control" placeholder="Password" required />
					</div>
				</div>
				<div class="checkbox">
					<input type="checkbox" id="remember" name="remember" value="1" />
					<label for="remember">
						Nhớ mật khẩu
					</label>
				</div>
				<div class="signin-text space-2">
					<a href="<?php echo $_smarty_tpl->tpl_vars['base_url_user']->value;?>
/signup/forgot/" class="text-left">Quên mật khẩu ?</a>
					<a href="<?php echo $_smarty_tpl->tpl_vars['base_url_user']->value;?>
/signup/" class="text-right">Chưa có tài khoản ?</a>
					<div class="clearfix"></div>
				</div>
				<div class="space-4">
					<button class="btn btn-primary btn-block" id="btn-signin" type="submit"> <?php echo $_smarty_tpl->tpl_vars['lable']->value['signin'];?>
 </button>
				</div>
			</form>
		</div>

		<div class="col-md-4 form contact">
			
				<h2 class="space-4">Liên hệ: <?php echo $_smarty_tpl->tpl_vars['lable']->value['phone_contact_signin'];?>
</h2>
				<span>Airtrippy sẽ giúp bạn tạo tài khoản và tư vấn giá dịch vụ</span>
			
		</div>
		<div class="info col-md-12 space-3">
			<div class="row">
				<div class="col-md-4 text-center">
					<h2>Airtrippy</h2>
					<img src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_user']->value;?>
/images/icon-axontrip1.png" alt="" border="0" />
					<p>Với hơn 10.000 lượt truy cập hàng tháng, thông tin của bạn sẽ được tiếp cận tới 2 triệu khách hàng tìm năng của Airtrippy</p>
				</div>
				<div class="col-md-4 text-center">
					<h2>Giá tốt nhất</h2>
					<img src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_user']->value;?>
/images/icon-giatotnhat.png" alt="" border="0" />
					<p>Airtrippy hoàn toàn không thu phí dựa trên số lượng tour bán được, không tính hoa hồng, không có chi phí phát sinh. Giá đăng tour chỉ từ 20.000đ,, miễn phí 5 ngày đầu</p>
				</div>
				<div class="col-md-4 text-center">
					<h2>Quản lý hiệu quả</h2>
					<img src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_user']->value;?>
/images/icon-quanlyhieuqua.png" alt="" border="0" />
					<p>Dễ dàng theo dõi thống kê được tổng hợp chi tiết, cụ thể, giúp bạn đánh giá đúng đối tượng khách hàng tìm năng, các thế mạnh hiện có.</p>
				</div>
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

	var required_input = "<?php echo $_smarty_tpl->tpl_vars['lable']->value['required_input'];?>
";
	var email_invalid = "<?php echo $_smarty_tpl->tpl_vars['lable']->value['email'];?>
 <?php echo $_smarty_tpl->tpl_vars['lable']->value['invalid'];?>
";
	var passsword_not_match = "<?php echo $_smarty_tpl->tpl_vars['lable']->value['passsword_not_match'];?>
";

<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_user']->value;?>
/js/signup.js"><?php echo '</script'; ?>
>



<?php }
}
?>