<?php /* Smarty version 3.1.28-dev/21, created on 2017-05-12 11:45:27
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\user\views\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:469359158437938aa3_75945176%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc3d2db2a59507954b45a909db4bf867474d2481' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\user\\views\\footer.tpl',
      1 => 1490082802,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '469359158437938aa3_75945176',
  'variables' => 
  array (
    'base_tlp_user' => 0,
    'lable' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_59158437994859_34176671',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59158437994859_34176671')) {
function content_59158437994859_34176671 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '469359158437938aa3_75945176';
?>
<footer>
<div class="container">
<div class="row">
    <div class="col-sm-12">
        <div class="logo">
            <img src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_user']->value;?>
/images/logo.png" alt="" class="img-responsive center-block" />
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
                <li><a href=""><i class="fa fa-facebook"></i></a></li>
                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                <li><a href=""><i class="fa fa-youtube-play"></i></a></li>
                <li><img src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_user']->value;?>
/images/license.png" class="img-responsive center-block" /></li>
            </ul>
        </div>
    </div>
</div>
</div>
</footer> 

<?php echo '<script'; ?>
>

    var email_exist              = "<?php echo $_smarty_tpl->tpl_vars['lable']->value['email_exist'];?>
";
    var password_old_not_match   = "<?php echo $_smarty_tpl->tpl_vars['lable']->value['password_old_not_match'];?>
"; 
    var password_not_match       = "<?php echo $_smarty_tpl->tpl_vars['lable']->value['passsword_not_match'];?>
"; 
    var please_enter_valid_email = "<?php echo $_smarty_tpl->tpl_vars['lable']->value['please_enter_valid_email'];?>
";
    var stop_show                = "<?php echo $_smarty_tpl->tpl_vars['lable']->value['stop_show'];?>
";
    var is_show                  = "<?php echo $_smarty_tpl->tpl_vars['lable']->value['is_show'];?>
";
    var is_active                = "<?php echo $_smarty_tpl->tpl_vars['lable']->value['is_active'];?>
";
    var not_show                 = "<?php echo $_smarty_tpl->tpl_vars['lable']->value['not_show'];?>
";
    var requireMsg              = "<?php echo $_smarty_tpl->tpl_vars['lable']->value['requireMsg'];?>
"; 

<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_user']->value;?>
/js/jquery.easing.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_user']->value;?>
/js/custom.js"><?php echo '</script'; ?>
><?php }
}
?>