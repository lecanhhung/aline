<?php /* Smarty version 3.1.28-dev/21, created on 2017-05-08 09:05:07
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\admin\views\blogcat\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:24832591018a3df1139_47278029%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c13047bbf426543af4b39155a6172c4da2fba2c1' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\admin\\views\\blogcat\\index.tpl',
      1 => 1494227104,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24832591018a3df1139_47278029',
  'variables' => 
  array (
    'base_url_admin' => 0,
    'current_control' => 0,
    'option' => 0,
    'data' => 0,
    'task' => 0,
    'alert' => 0,
    'lable' => 0,
    'valid' => 0,
    'base_tlp_admin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_591018a40054a2_97193675',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_591018a40054a2_97193675')) {
function content_591018a40054a2_97193675 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '24832591018a3df1139_47278029';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div id="content">

    <?php echo $_smarty_tpl->getSubTemplate ("sidebar_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    
    <?php echo $_smarty_tpl->getSubTemplate ("breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


    <div class="innerLR">
        
        <form class="form-horizontal margin-none" id="frm_data" name="frm_data" method="post" action="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/add/" autocomplete="off" enctype="multipart/form-data">
	   <input type="hidden" name="option" id="option" value="<?php echo $_smarty_tpl->tpl_vars['option']->value;?>
" />
           <input type="hidden" name="primary" id="primary" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" />
           <input type="hidden" name="old[path_image]" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['path_image'];?>
">
		
            <!-- Widget -->
            <div class="widget">
                <div class="widget-head">
                    <h4 class="heading"><?php echo $_smarty_tpl->tpl_vars['task']->value;?>
</h4>
                </div><!-- // Widget heading END -->
                
                <div class="widget-body innerAll inner-2x">
                    <div class="row innerLR">
                        <div class="col-md-8">
							
                            <?php if ($_smarty_tpl->tpl_vars['alert']->value != '') {?> <?php echo $_smarty_tpl->getSubTemplate ("notes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }?>
							
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="primary"><?php echo $_smarty_tpl->tpl_vars['lable']->value['category'];?>
</label>
                                <div class="col-md-8">
                                    <input type="text" name="data[category]" id="id_title" class="form-control" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['data']->value['category']);?>
" style="width:300px;" maxlength="150" onkeyup="ChangeToSlug('id_title');" />
                                    <p class="help-block"><?php echo $_smarty_tpl->tpl_vars['valid']->value['category'];?>
</p>
                                </div>
                           </div>
                           <div class="form-group">
                                <label class="col-md-4 control-label" for="slug">Slug</label>
                                <div class="col-md-8">
                                    <input type="text" name="data[slug]" id="slug" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['slug'];?>
" />
                                    <p class="help-block"><?php echo $_smarty_tpl->tpl_vars['valid']->value['slug'];?>
</p>
                                </div>
                           </div>
                                    
                           <?php echo $_smarty_tpl->getSubTemplate ("blogcat/slim_upload.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                                
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="latitude"><?php echo $_smarty_tpl->tpl_vars['lable']->value['latitude'];?>
</label>
                                <div class="col-md-8">
                                    <input type="text" name="data[longtitude]" id="latitude" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['latitude'];?>
" class="form-control" style="width:300px;" />				
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="longtitude"><?php echo $_smarty_tpl->tpl_vars['lable']->value['longtitude'];?>
</label>
                                <div class="col-md-8">
                                    <input type="text" name="data[longtitude]" id="longtitude" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['longtitude'];?>
" class="form-control" style="width:300px;" />				
                                </div>
                            </div>

                            <br/>
                            <hr/>
                            <br/>

                            <div class="form-group">
                            <label class="col-sm-4 control-label" ><?php echo $_smarty_tpl->tpl_vars['lable']->value['seo_title'];?>
</label>
                                <div class="col-sm-8">
                                    <input name="data[seo_title]" id="seo_title" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['seo_title'];?>
" class="form-control" maxlength="80" />
                                    <p class="help-block italic font_12"></p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-4 control-label"><?php echo $_smarty_tpl->tpl_vars['lable']->value['seo_desc'];?>
</label>
                                <div class="col-sm-8">
                                    <textarea name="data[seo_description]" id="seo_description" class="col-md-6 form-control"><?php echo $_smarty_tpl->tpl_vars['data']->value['seo_description'];?>
</textarea>
                                    <p class="help-block"></p>
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
                           
                        </div><!-- // Column END -->
                    </div><!-- // Row END -->
                   
                    </div>
                    <div class="separator"></div>                    
                </div>
            </div><!-- // Widget END -->
        </form>
        
    </div>    
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("script_validator.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/js/slim.kickstart.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/js/slug.js"><?php echo '</script'; ?>
>
<?php }
}
?>