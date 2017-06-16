<?php /* Smarty version 3.1.28-dev/21, created on 2017-04-15 06:05:04
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\admin\views\agency\add.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2831058f19bf0120f45_80493977%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be64cdbd3e6de23069624f0c75d609dab006abbc' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\admin\\views\\agency\\add.tpl',
      1 => 1489817639,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2831058f19bf0120f45_80493977',
  'variables' => 
  array (
    'base_tlp_admin' => 0,
    'base_url' => 0,
    'alert' => 0,
    'task' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_58f19bf01b1212_86841530',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f19bf01b1212_86841530')) {
function content_58f19bf01b1212_86841530 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2831058f19bf0120f45_80493977';
echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/slim/slim.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/assets/data/jquery/pickertime/jquery.datetimepicker.css" />
<!-- Content -->
<div id="content">

    <?php echo $_smarty_tpl->getSubTemplate ('sidebar_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <?php echo $_smarty_tpl->getSubTemplate ('breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <div class="innerLR">
        
        <?php if ($_smarty_tpl->tpl_vars['alert']->value != '') {
echo $_smarty_tpl->getSubTemplate ('notes.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
}?>
        
        <div class="widget">
            <div class="widget-head">
                <h4 class="heading"><?php echo $_smarty_tpl->tpl_vars['task']->value;?>
</h4>
            </div>
            <div class="widget-body innerAll inner-2x agency-add">
                <?php echo $_smarty_tpl->getSubTemplate ("agency/form_wizard.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

            </div><!-- /.widget-body -->
        </div><!-- /.widget -->

    </div>

</div>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/assets/data/jquery/pickertime/jquery.datetimepicker.js"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/js/slug.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    var slug = "<?php echo $_smarty_tpl->tpl_vars['data']->value['slug'];?>
";
    CKEDITOR.replace( 'description');
    
        // var prj_times = "";
        // if(prj_times != '') {
        //     $('#expired_date').datetimepicker({value:prj_times, step:10, format:'Y-m-d H:i' });      
        // } else { 
            $('#expired_date').datetimepicker({step:10, format:'Y-m-d H:i' });
        // }
    
	
    if(slug == '') {
	ChangeToSlug('agency_name');
    }
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/slim/slim.kickstart.min.js"><?php echo '</script'; ?>
>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php }
}
?>