<?php /* Smarty version 3.1.28-dev/21, created on 2017-04-15 06:04:10
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\admin\views\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1385558f19bbae82ed0_35320886%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff690a2e7e0d7ec7912da3b009b76ce2c22a4a2a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\admin\\views\\footer.tpl',
      1 => 1489200690,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1385558f19bbae82ed0_35320886',
  'variables' => 
  array (
    'base_url_admin' => 0,
    'base_tlp_admin' => 0,
    'lable' => 0,
    'current_control' => 0,
    'current_method' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_58f19bbaece6c7_93697488',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f19bbaece6c7_93697488')) {
function content_58f19bbaece6c7_93697488 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1385558f19bbae82ed0_35320886';
?>
<div class="clearfix"></div>   
<div class="hidden-print">
    <!--id="footer" <div class="copy">&nbsp;</div>-->
</div>
</div><!-- // Main Container Fluid END -->

<?php echo '<script'; ?>
 data-id="App.Config">
    
    var App = {};
    var basePath = '',
            commonPath = base_tpl_admin + '/assets/',
            rootPath = '../',
            DEV = false,
            componentsPath = base_tpl_admin + '/assets/components/';
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
>
    
    var base_url_admin = "<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
"; 
    var base_tlp_admin = "<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
"; 
    var requireMsg     = "<?php echo $_smarty_tpl->tpl_vars['lable']->value['requireMsg'];?>
";
    var requirePass    = "<?php echo $_smarty_tpl->tpl_vars['lable']->value['password_6_20_char'];?>
";
    var passNotMath    = "<?php echo $_smarty_tpl->tpl_vars['lable']->value['passsword_not_match'];?>
";
    var emailNotMath   = "<?php echo $_smarty_tpl->tpl_vars['lable']->value['please_enter_valid_email'];?>
";
    var requireNum     = "<?php echo $_smarty_tpl->tpl_vars['lable']->value['requireNum'];?>
";
    var pickup_point   = "<?php echo $_smarty_tpl->tpl_vars['lable']->value['pickup_point'];?>
";
    var tour_hotel     = "<?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_hotel'];?>
";
    var requiredImg     = "<?php echo $_smarty_tpl->tpl_vars['lable']->value['required_image'];?>
";
    
    
    var placeholder_morning   = "<?php echo stripslashes($_smarty_tpl->tpl_vars['lable']->value['placeholder_morning']);?>
";
    var placeholder_afternoon = "<?php echo stripslashes($_smarty_tpl->tpl_vars['lable']->value['placeholder_afternoon']);?>
";
    var placeholder_evening   = "<?php echo stripslashes($_smarty_tpl->tpl_vars['lable']->value['placeholder_evening']);?>
";
    var tour_day   = "<?php echo stripslashes($_smarty_tpl->tpl_vars['lable']->value['tour_day']);?>
";
    var requiredField  = "<?php echo stripslashes($_smarty_tpl->tpl_vars['lable']->value['please_choose_at_least_field']);?>
";

    var current_control = "<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
";
    var current_method  = "<?php echo $_smarty_tpl->tpl_vars['current_method']->value;?>
";
    var notice_outstanding  = "<?php echo $_smarty_tpl->tpl_vars['lable']->value['notice_outstanding'];?>
";
    

    


<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/js/jscustom.js"><?php echo '</script'; ?>
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
/assets/components/core/js/sidebar.main.init.js?v=v1.0.3-rc2"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/assets/components/core/js/sidebar.collapse.init.js?v=v1.0.3-rc2"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/assets/components/core/js/core.init.js?v=v1.0.3-rc2"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/js/chosen.jquery.js" type="text/javascript"><?php echo '</script'; ?>
>

</body>
</html><?php }
}
?>