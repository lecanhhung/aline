<?php /* Smarty version 3.1.28-dev/21, created on 2017-04-20 06:02:55
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\admin\views\tour\add.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2286458f832ef51ed78_75802175%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1af22932e97c992adf29541303dca376bc08fde0' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\admin\\views\\tour\\add.tpl',
      1 => 1489398336,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2286458f832ef51ed78_75802175',
  'variables' => 
  array (
    'step' => 0,
    'base_tlp_admin' => 0,
    'base_url' => 0,
    'tour_id' => 0,
    'day_id' => 0,
    'option' => 0,
    'base_url_admin' => 0,
    'alert' => 0,
    'task' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_58f832ef800330_95259876',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f832ef800330_95259876')) {
function content_58f832ef800330_95259876 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2286458f832ef51ed78_75802175';
echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php if ($_smarty_tpl->tpl_vars['step']->value == 1) {?>
    
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/multi_select.less" />
    
<?php } elseif ($_smarty_tpl->tpl_vars['step']->value == 2) {?>
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/assets/data/jquery/pickertime/jquery.datetimepicker.css" />
<?php } elseif ($_smarty_tpl->tpl_vars['step']->value == 3) {?>
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/assets/data/jquery/pickertime/jquery.datetimepicker.css" />
<?php } elseif ($_smarty_tpl->tpl_vars['step']->value == 4) {?>
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/assets/data/jquery/pickertime/jquery.datetimepicker.css" />
<?php } elseif ($_smarty_tpl->tpl_vars['step']->value == 5) {?>
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/assets/data/jquery/pickertime/jquery.datetimepicker.css" />
<?php } elseif ($_smarty_tpl->tpl_vars['step']->value == 6) {?>
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/assets/data/jquery/pickertime/jquery.datetimepicker.css" />
<?php } elseif ($_smarty_tpl->tpl_vars['step']->value == 7) {?>
	
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/assets/components/common/forms/file_manager/dropzone/assets/lib/css/dropzone.css">
	<?php echo '<script'; ?>
>
        
        var object_id   = "<?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
";
        var day_id      = "<?php echo $_smarty_tpl->tpl_vars['day_id']->value;?>
";
        var option      = "<?php echo $_smarty_tpl->tpl_vars['option']->value;?>
";
        var step        = "<?php echo $_smarty_tpl->tpl_vars['step']->value;?>
";
        var control_file_upload = "<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/myfile/upload/";
        var control_file_delete = "<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/myfile/delete/";
        var control_file_view = "<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/myfile/view/?object_id="+object_id+"&object_type=ts&day_id="+day_id;
        
        var base_tpl_user = "<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
";
        var user_url = "<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
";
        var max_upload_product_image  = 8;
        
    <?php echo '</script'; ?>
>

<?php } elseif ($_smarty_tpl->tpl_vars['step']->value == 8) {?>
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/assets/data/jquery/pickertime/jquery.datetimepicker.css" />           
<?php }?>

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
                <?php echo $_smarty_tpl->getSubTemplate ("tour/form_wizard.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 
            </div><!-- /.widget-body -->
        </div><!-- /.widget -->
    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['step']->value == 1) {?>
	
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/js/slim.kickstart.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/js/slug.js"><?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/assets/components/common/forms/elements/bootstrap-select/assets/lib/js/bootstrap-select.js?v=v1.0.3-rc2"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/assets/components/common/forms/elements/bootstrap-select/assets/custom/js/bootstrap-select.init.js?v=v1.0.3-rc2"><?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/assets/components/common/forms/elements/select2/assets/lib/js/select2.js?v=v1.0.3-rc2&sv=v0.0.1.1"><?php echo '</script'; ?>
>
    <!--
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/assets/components/common/forms/elements/select2/assets/custom/js/select2.init.js?v=v1.0.3-rc2&sv=v0.0.1.1"><?php echo '</script'; ?>
>
    -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/assets/components/common/forms/elements/multiselect/assets/lib/js/jquery.multi-select.js?v=v1.0.3-rc2&amp;sv=v0.0.1.1"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/assets/components/common/forms/elements/multiselect/assets/custom/js/multiselect.init.js?v=v1.0.3-rc2&amp;sv=v0.0.1.1"><?php echo '</script'; ?>
>
    
<?php } elseif ($_smarty_tpl->tpl_vars['step']->value == 2) {?>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/assets/data/jquery/pickertime/jquery.datetimepicker.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
    
        var step  = "<?php echo $_smarty_tpl->tpl_vars['step']->value;?>
";
        
            // var prj_times = "";
            // if(prj_times != '') {
            //     $('#expired_date').datetimepicker({value:prj_times, step:10, format:'Y-m-d H:i' });      
            // } else { 
                $('#day_date').datetimepicker({step:10, format:'Y-m-d H:i' });
               
            // }
        
    
    <?php echo '</script'; ?>
>
<?php } elseif ($_smarty_tpl->tpl_vars['step']->value == 3) {?>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/js/slim.kickstart.min.js"><?php echo '</script'; ?>
>
    
    

	<?php echo '<script'; ?>
>
    /*
        $('.slim_class').Slim({
            ratio: '4:3',
            minSize: {
                width: 640,
                height: 480,
            },
            crop: {
                x: 0,
                y: 0,
                width: 100,
                height: 100
            },
            service: base_url_admin+'/tour/uploadimage',
            download: false,
            willSave: function(data, ready) {
                alert('saving!');
                ready(data);
            },
            label: 'Drop your image here.',
            buttonConfirmLabel: 'Ok',
            meta: {
                userId:'56'
            }
        });
    */
        <?php echo '</script'; ?>
>
<?php } elseif ($_smarty_tpl->tpl_vars['step']->value == 4) {?>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/assets/data/jquery/pickertime/jquery.datetimepicker.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
    
        // var prj_times = "";
        // if(prj_times != '') {
        //     $('#expired_date').datetimepicker({value:prj_times, step:10, format:'Y-m-d H:i' });      
        // } else { 
            $('#day_date').datetimepicker({step:10, format:'Y-m-d H:i' });

        // }
    
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/js/slim.kickstart.min.js"><?php echo '</script'; ?>
>
<?php } elseif ($_smarty_tpl->tpl_vars['step']->value == 5) {?>
	
<?php } elseif ($_smarty_tpl->tpl_vars['step']->value == 6) {?>
	
<?php } elseif ($_smarty_tpl->tpl_vars['step']->value == 7) {?>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/assets/components/common/forms/file_manager/dropzone/assets/lib/js/dropzone.min.js?v=v1.0.3-rc2&sv=v0.0.1.1"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/assets/components/common/forms/file_manager/dropzone/assets/custom/dropzone_user.init.js?v=v1.0.3-rc2&sv=v0.0.1.1"><?php echo '</script'; ?>
>
<?php } elseif ($_smarty_tpl->tpl_vars['step']->value == 8) {?>
	
               
<?php }?>

<?php echo '<script'; ?>
>
    var step  = "<?php echo $_smarty_tpl->tpl_vars['step']->value;?>
";
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/js/jstour.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/assets/components/library/bootstrap/js/bootstrap-tooltip.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/assets/components/library/bootstrap/js/bootstrap-confirmation.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 language="javascript">
    
        $(document).ready(function () {
            !function (cash) {
                $(function () {
                    $('[data-toggle="confirmation"]').confirmation();
                });
            }(window.jQuery);

            $('[data-toggle="tooltip"]').tooltip();
        });
    
<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>