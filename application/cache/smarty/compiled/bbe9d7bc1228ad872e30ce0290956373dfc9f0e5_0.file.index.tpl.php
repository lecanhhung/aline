<?php /* Smarty version 3.1.28-dev/21, created on 2017-04-27 04:33:02
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\admin\views\language\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:157185901585e2c9503_73474373%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbe9d7bc1228ad872e30ce0290956373dfc9f0e5' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\admin\\views\\language\\index.tpl',
      1 => 1483513458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157185901585e2c9503_73474373',
  'variables' => 
  array (
    'base_url_admin' => 0,
    'option' => 0,
    'task' => 0,
    'alert' => 0,
    'lable' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_5901585e45c222_35489109',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5901585e45c222_35489109')) {
function content_5901585e45c222_35489109 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '157185901585e2c9503_73474373';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<!-- Content -->
<div id="content">

    <?php echo $_smarty_tpl->getSubTemplate ("sidebar_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    
    <?php echo $_smarty_tpl->getSubTemplate ("breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


    <div class="innerLR">
        
        <form class="form-horizontal margin-none" id="frm_data" name="frm_data" method="post" action="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/language/add/" autocomplete="off">
	   <input type="hidden" name="option" id="option" value="<?php echo $_smarty_tpl->tpl_vars['option']->value;?>
" />
		
		
            <!-- Widget -->
            <div class="widget">
                <!-- Widget heading -->
                <div class="widget-head">
                    <h4 class="heading"><?php echo $_smarty_tpl->tpl_vars['task']->value;?>
</h4>
                </div>
                <!-- // Widget heading END -->
                <div class="widget-body innerAll inner-2x">
                    <!-- Row -->
                    <div class="row innerLR">
                        <!-- Column -->
                        <div class="col-md-8">
							
                            <?php if ($_smarty_tpl->tpl_vars['alert']->value != '') {?> <?php echo $_smarty_tpl->getSubTemplate ("notes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }?>
							
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="primary"><?php echo $_smarty_tpl->tpl_vars['lable']->value['variable'];?>
</label>
                                <div class="col-md-8">
                                    <input type="text" name="data[name]" class="form-control" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['data']->value['name']);?>
" <?php if ($_smarty_tpl->tpl_vars['data']->value['name'] != '') {?> readonly="readonly" <?php }?> style="width:300px;" maxlength="80" />
                                    <p class="help-block"><?php echo '<?php ';?>echo form_error('name'); <?php echo '?>';?></p>
                                </div>
                           </div>
                           <div class="form-group">
                                <label class="col-md-4 control-label" for="lang_value"><?php echo $_smarty_tpl->tpl_vars['lable']->value['value_of_variable'];?>
</label>
                                <div class="col-md-8">
                                    <textarea class="form-control" name="data[value]" rows="3"><?php echo stripslashes($_smarty_tpl->tpl_vars['data']->value['value']);?>
</textarea>
									
                                </div>
                            </div>
							
							<div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-8">
                                    <div class="form-actions">
										<button type="submit" id="btLang" class="btn btn-primary"><i class="fa fa-check-circle"></i>  <?php echo $_smarty_tpl->tpl_vars['lable']->value['save'];?>
</button>
									</div>									
                                </div>
                            </div>                           
                           
                        </div>
                        <!-- // Column END -->
                    </div>
                    <!-- // Row END -->
                   
                    </div>
                    <div class="separator"></div>                    
                </div>
            </div>
            <!-- // Widget END -->
        </form>
        
    </div>    
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("script_validator.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>