<?php /* Smarty version 3.1.28-dev/21, created on 2017-04-20 06:02:55
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\admin\views\tour\form_wizard.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:596158f832ef8661c7_37167141%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f06f1db2af210d306d466d17ba9b1f4468e6cad' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\admin\\views\\tour\\form_wizard.tpl',
      1 => 1488512780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '596158f832ef8661c7_37167141',
  'variables' => 
  array (
    'step' => 0,
    'base_tlp_admin' => 0,
    'base_url' => 0,
    'tour_id' => 0,
    'base_url_admin' => 0,
    'current_control' => 0,
    'agency_id' => 0,
    'pre' => 0,
    'lable' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_58f832efb0f652_64232791',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f832efb0f652_64232791')) {
function content_58f832efb0f652_64232791 ($_smarty_tpl) {
if (!is_callable('smarty_function_math')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\function.math.php';

$_smarty_tpl->properties['nocache_hash'] = '596158f832ef8661c7_37167141';
if ($_smarty_tpl->tpl_vars['step']->value == 1) {?>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/css/slim.min.css" />
<?php } elseif ($_smarty_tpl->tpl_vars['step']->value == 2) {?>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/assets/data/ckeditor_full/ckeditor.js"><?php echo '</script'; ?>
>
<?php } elseif ($_smarty_tpl->tpl_vars['step']->value == 3) {?>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/assets/data/ckeditor_full/ckeditor.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/css/slim.min.css" />
<?php } elseif ($_smarty_tpl->tpl_vars['step']->value == 4) {?>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/assets/data/ckeditor_full/ckeditor.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/css/slim.min.css" />  
<?php } elseif ($_smarty_tpl->tpl_vars['step']->value == 5) {?>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/assets/data/ckeditor_full/ckeditor.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/css/slim.min.css" />
<?php } elseif ($_smarty_tpl->tpl_vars['step']->value == 6) {?>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/assets/data/ckeditor_full/ckeditor.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/css/slim.min.css" />
<?php } elseif ($_smarty_tpl->tpl_vars['step']->value == 7) {?>

<?php } elseif ($_smarty_tpl->tpl_vars['step']->value == 8) {?>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/assets/data/ckeditor_full/ckeditor.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/css/slim.min.css" />
               
<?php }?>

<div class="box-generic">
    <div class="widget widget-tabs widget-wizard-pills widget-tabs-responsive"> 
    

        <div class="widget-head">
            <ul>
                <li class="status">
                    <span class="r">Step <span class="step-current"><?php echo $_smarty_tpl->tpl_vars['step']->value;?>
</span> of <span class="steps-total">8</span></span>
                    <span class="r text-primary">Completed: <span class="steps-complete">1</span></span>
                </li>
                
                <?php if ($_smarty_tpl->tpl_vars['tour_id']->value != '') {?>
                <li  class="<?php if ($_smarty_tpl->tpl_vars['step']->value == 1) {?>active<?php }?> no-padding" ><a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/add/?id=<?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
&step=1&t=edit&a_id=<?php echo $_smarty_tpl->tpl_vars['agency_id']->value;?>
">1</a></li>
                <li <?php if ($_smarty_tpl->tpl_vars['step']->value == 2) {?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/add/?id=<?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
&step=2&t=edit&a_id=<?php echo $_smarty_tpl->tpl_vars['agency_id']->value;?>
">2</a></li>
                <li <?php if ($_smarty_tpl->tpl_vars['step']->value == 3) {?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/add/?id=<?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
&step=3&t=edit&a_id=<?php echo $_smarty_tpl->tpl_vars['agency_id']->value;?>
">3</a></li>					
                <li <?php if ($_smarty_tpl->tpl_vars['step']->value == 4) {?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/add/?id=<?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
&step=4&t=edit&a_id=<?php echo $_smarty_tpl->tpl_vars['agency_id']->value;?>
">4</a></li>					
                <li <?php if ($_smarty_tpl->tpl_vars['step']->value == 5) {?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/add/?id=<?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
&step=5&t=edit&a_id=<?php echo $_smarty_tpl->tpl_vars['agency_id']->value;?>
">5</a></li>					
                <li <?php if ($_smarty_tpl->tpl_vars['step']->value == 6) {?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/add/?id=<?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
&step=6&t=edit&a_id=<?php echo $_smarty_tpl->tpl_vars['agency_id']->value;?>
">6</a></li>					
                <li <?php if ($_smarty_tpl->tpl_vars['step']->value == 7) {?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/add/?id=<?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
&step=7&t=edit&a_id=<?php echo $_smarty_tpl->tpl_vars['agency_id']->value;?>
&sub_day=1&sub_option=edit">7</a></li>					
                <li <?php if ($_smarty_tpl->tpl_vars['step']->value == 8) {?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/add/?id=<?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
&step=8&t=edit&a_id=<?php echo $_smarty_tpl->tpl_vars['agency_id']->value;?>
">8</a></li>					
                <?php } else { ?>
                <li class="<?php if ($_smarty_tpl->tpl_vars['step']->value == 1) {?>active<?php }?> no-padding"><a href="#tab1-8" data-toggle="tab">1</a></li>
                <li <?php if ($_smarty_tpl->tpl_vars['step']->value == 2) {?> class="active"<?php }?>><a href="#tab2-8" data-toggle="tab">2</a></li>
                <li <?php if ($_smarty_tpl->tpl_vars['step']->value == 3) {?> class="active"<?php }?>><a href="#tab3-8" data-toggle="tab">3</a></li>
                <li <?php if ($_smarty_tpl->tpl_vars['step']->value == 4) {?> class="active"<?php }?>><a href="#tab4-8" data-toggle="tab">4</a></li>
                <li <?php if ($_smarty_tpl->tpl_vars['step']->value == 5) {?> class="active"<?php }?>><a href="#tab5-8" data-toggle="tab">5</a></li>
                <li <?php if ($_smarty_tpl->tpl_vars['step']->value == 6) {?> class="active"<?php }?>><a href="#tab6-8" data-toggle="tab">6</a></li>
                <li <?php if ($_smarty_tpl->tpl_vars['step']->value == 7) {?> class="active"<?php }?>><a href="#tab7-8" data-toggle="tab">7</a></li>
                <li <?php if ($_smarty_tpl->tpl_vars['step']->value == 8) {?> class="active"<?php }?>><a href="#tab7-8" data-toggle="tab">8</a></li>
                <?php }?>
            </ul>			
        </div>

        <div class="widget-body">
            <div class="tab-content">

                <!-- Step 1 -->
                <div class="tab-pane <?php if ($_smarty_tpl->tpl_vars['step']->value == 1) {?>active<?php }?>" id="tab1-7">
                    <?php if ($_smarty_tpl->tpl_vars['step']->value == 1) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("tour/step1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 
                    <?php }?>					
                </div><!-- // Step 1 END -->

                <!-- Step 2 -->
                <div class="tab-pane <?php if ($_smarty_tpl->tpl_vars['step']->value == 2) {?>active<?php }?>" id="tab2-7"> 
                    <?php if ($_smarty_tpl->tpl_vars['step']->value == 2) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("tour/step2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                    <?php }?>

                </div><!-- // Step 2 END -->

                <!-- Step 3 -->
                <div class="tab-pane <?php if ($_smarty_tpl->tpl_vars['step']->value == 3) {?>active<?php }?>" id="tab3-7">
                    <?php if ($_smarty_tpl->tpl_vars['step']->value == 3) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("tour/step3.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 
                    <?php }?>
                </div><!-- // Step 3 END -->

                <div class="tab-pane <?php if ($_smarty_tpl->tpl_vars['step']->value == 4) {?>active<?php }?>" id="tab4-7">
                    <?php if ($_smarty_tpl->tpl_vars['step']->value == 4) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("tour/step4.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 
                    <?php }?>
                </div><!-- // Step 4 END -->

                <div class="tab-pane <?php if ($_smarty_tpl->tpl_vars['step']->value == 5) {?>active<?php }?>" id="tab5-7">
                    <?php if ($_smarty_tpl->tpl_vars['step']->value == 5) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("tour/step5.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 
                    <?php }?>
                </div><!-- // Step 5 END -->

                <div class="tab-pane <?php if ($_smarty_tpl->tpl_vars['step']->value == 6) {?>active<?php }?>" id="tab5-7">
                    <?php if ($_smarty_tpl->tpl_vars['step']->value == 6) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("tour/step6.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 
                    <?php }?>
                </div><!-- // Step 6 END -->

                <div class="tab-pane <?php if ($_smarty_tpl->tpl_vars['step']->value == 7) {?>active<?php }?>" id="tab5-7">
                    <?php if ($_smarty_tpl->tpl_vars['step']->value == 7) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("tour/step7.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 
                    <?php }?>
                </div><!-- // Step 7 END -->

                <div class="tab-pane <?php if ($_smarty_tpl->tpl_vars['step']->value == 8) {?>active<?php }?>" id="tab5-7">
                    <?php if ($_smarty_tpl->tpl_vars['step']->value == 8) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("tour/step8.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 
                    <?php }?>
                </div><!-- // Step 8 END -->

                
            </div>
			 
            <ul class="pagination margin-bottom-none pull-right">
	                <?php echo smarty_function_math(array('assign'=>'pre','equation'=>"x - y",'x'=>$_smarty_tpl->tpl_vars['step']->value,'y'=>1),$_smarty_tpl);?>

	                <?php if ($_smarty_tpl->tpl_vars['step']->value != 1 && $_smarty_tpl->tpl_vars['step']->value != 8) {?>
	                   <li class="primary previous"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/add/?id=<?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
&step=<?php echo $_smarty_tpl->tpl_vars['pre']->value;?>
&t=edit&a_id=<?php echo $_smarty_tpl->tpl_vars['agency_id']->value;?>
" class="no-ajaxify">Previous</a></li>
	                <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['step']->value != 8) {?>
	                   <li class="next primary"><a href="javascript:void(0)" class="no-ajaxify btn_next">Next</a></li>
                    <?php }?>
            </ul>

            <?php if ($_smarty_tpl->tpl_vars['step']->value == 8) {?>
                <ul class="inline-block pull-right">
                    <li class="btn btn-primary exit"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/add/?id=<?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
&step=<?php echo $_smarty_tpl->tpl_vars['pre']->value;?>
&t=edit&a_id=<?php echo $_smarty_tpl->tpl_vars['agency_id']->value;?>
&sub_day=1&sub_option=edit" title="">Previous</a></li>
                    <li class="btn btn-primary save-tour"><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_save'];?>
</li>
                    <li class="btn btn-primary show-tour"><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_show_im'];?>
</li>
                </ul>
            <?php }?>

            





            <div class="clearfix"></div>			

        </div>

    </div>
</div>






<?php }
}
?>