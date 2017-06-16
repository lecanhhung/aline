<?php /* Smarty version 3.1.28-dev/21, created on 2017-06-06 08:40:46
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\user\views\signup\forgot.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2256059364e6e673857_86547898%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9e3dc19f0a73801c80f7622daa477978a9a437e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\user\\views\\signup\\forgot.tpl',
      1 => 1488165590,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2256059364e6e673857_86547898',
  'variables' => 
  array (
    'base_url' => 0,
    'alert' => 0,
    'task' => 0,
    'base_url_user' => 0,
    'option' => 0,
    'base_tlp_user' => 0,
    'data' => 0,
    'lable' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_59364e6e7d3884_84184611',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59364e6e7d3884_84184611')) {
function content_59364e6e7d3884_84184611 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2256059364e6e673857_86547898';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/captcha/js/jquery.min.js"><?php echo '</script'; ?>
>
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
                <form class="form-horizontal space-4" name="frm_forgot" id="frm_forgot" method="post" action="<?php echo $_smarty_tpl->tpl_vars['base_url_user']->value;?>
/signup/forgot/" role="form" autocomplete="off">
                <input type="hidden" name="option" value="<?php echo $_smarty_tpl->tpl_vars['option']->value;?>
" />                   
                    <div class="form-group">
                        <label class="col-sm-1 control-label" for="inputEmail">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_user']->value;?>
/images/icon-mail.png" alt="" border="0" />
                        </label>
                        <div class="col-sm-11">
                            <input type="email"  name="data[email]" id="email" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['email'];?>
" class="form-control" placeholder="Nhập email để nhận lại mật khẩu" required autofocus />
                        </div>
                    </div>
                    <div class="text-center space-4">
                        <button class="btn btn-default btn-return" type="button"><?php echo $_smarty_tpl->tpl_vars['lable']->value['return'];?>
</button>
                        <button class="btn btn-primary btn-forgot"  type="button" id="btn-forgot"><?php echo $_smarty_tpl->tpl_vars['lable']->value['send'];?>
</button>
                    </div>
                </form>
            </div>
            <div class="info col-md-12 space-14">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <h2>AxonTrip</h2>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_user']->value;?>
/images/icon-axontrip1.png" alt="" border="0" />
                        <p>Với hơn 10.000 lượt truy cập hàng tháng, thông tin của bạn sẽ được tiếp cận tới 2 triệu khách hàng tìm năng của AxonTrip</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <h2>Giá tốt nhất</h2>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_user']->value;?>
/images/icon-giatotnhat.png" alt="" border="0" />
                        <p>AxonTrip hoàn toàn không thu phí dựa trên số lượng tour bán được, không tính hoa hồng, không có chi phí phát sinh. Giá đăng tour chỉ từ 20.000đ,, miễn phí 5 ngày đầu</p>
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


<?php echo '<script'; ?>
>
    
    var required_input = "<?php echo $_smarty_tpl->tpl_vars['lable']->value['required_input'];?>
";
    var email_invalid = "<?php echo $_smarty_tpl->tpl_vars['lable']->value['email'];?>
 <?php echo $_smarty_tpl->tpl_vars['lable']->value['invalid'];?>
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