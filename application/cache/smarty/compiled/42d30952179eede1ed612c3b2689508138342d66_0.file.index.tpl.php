<?php /* Smarty version 3.1.28-dev/21, created on 2017-05-08 09:17:48
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\admin\views\blogs\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:705259101b9ce8cf11_91015575%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42d30952179eede1ed612c3b2689508138342d66' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\admin\\views\\blogs\\index.tpl',
      1 => 1494227865,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '705259101b9ce8cf11_91015575',
  'variables' => 
  array (
    'base_url' => 0,
    'base_url_admin' => 0,
    'current_control' => 0,
    'option' => 0,
    'data' => 0,
    'task' => 0,
    'alert' => 0,
    'lable' => 0,
    'valid' => 0,
    'categories' => 0,
    'cat' => 0,
    'base_tlp_admin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_59101b9d04c213_22816489',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59101b9d04c213_22816489')) {
function content_59101b9d04c213_22816489 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '705259101b9ce8cf11_91015575';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/assets/data/jquery/pickertime/jquery.datetimepicker.css" />
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/assets/data/ckeditor_full/ckeditor.js"><?php echo '</script'; ?>
>

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
           <input type="hidden" name="old[background_url]" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['background_url'];?>
">
		
            <div class="widget">
                <div class="widget-head">
                    <h4 class="heading"><?php echo $_smarty_tpl->tpl_vars['task']->value;?>
</h4>
                </div>
                
                <div class="widget-body innerAll inner-2x">
                    <div class="row innerLR">
                        <div class="col-md-11">
							
                            <?php if ($_smarty_tpl->tpl_vars['alert']->value != '') {?> <?php echo $_smarty_tpl->getSubTemplate ("notes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }?>
			    
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="primary"><?php echo $_smarty_tpl->tpl_vars['lable']->value['title'];?>
 (*)</label>
                                <div class="col-md-10">
                                    <input type="text" name="data[title]" id="id_title" class="form-control" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['data']->value['title']);?>
" maxlength="150" onkeyup="ChangeToSlug('id_title');" />
                                    <p class="help-block"><?php echo $_smarty_tpl->tpl_vars['valid']->value['title'];?>
</p>
                                </div>
                           </div>
                          
                           <div class="form-group">
                                <label class="col-md-2 control-label" for="slug">Slug</label>
                                <div class="col-md-10">
                                    <input type="text" name="data[slug]" id="slug" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['slug'];?>
" />
                                    <p class="help-block"><?php echo $_smarty_tpl->tpl_vars['valid']->value['slug'];?>
</p>
                                </div>
                           </div>
                                
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="primary"><?php echo $_smarty_tpl->tpl_vars['lable']->value['category'];?>
 (*)</label>
                                <div class="col-md-4">
                                    <select name="data[category]" id="category" class="form-control">
                                        <?php
$foreach_0_cat_sav['s_item'] = isset($_smarty_tpl->tpl_vars['cat']) ? $_smarty_tpl->tpl_vars['cat'] : false;
$_from = $_smarty_tpl->tpl_vars['categories']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['cat']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
$foreach_0_cat_sav['item'] = $_smarty_tpl->tpl_vars['cat'];
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['cat']->value['id'] == $_smarty_tpl->tpl_vars['data']->value['category']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['cat']->value['category'];?>
</option>
                                        <?php
$_smarty_tpl->tpl_vars['cat'] = $foreach_0_cat_sav['item'];
}
if ($foreach_0_cat_sav['s_item']) {
$_smarty_tpl->tpl_vars['cat'] = $foreach_0_cat_sav['s_item'];
}
?>
                                    </select>
                                   <p class="help-block"><?php echo $_smarty_tpl->tpl_vars['valid']->value['category'];?>
</p>
                                </div>
                           </div>
                                    
                           <?php echo $_smarty_tpl->getSubTemplate ("blogs/slim_background.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                           <?php echo $_smarty_tpl->getSubTemplate ("blogs/slim_upload.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                           
                                
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="short_description"><?php echo $_smarty_tpl->tpl_vars['lable']->value['short_description'];?>
</label>
                                <div class="col-md-10">
                                   <textarea class="form-control" id="short_description" name="data[short_description]" onChange="hideFieldRequire('#valid_short_description)"><?php echo stripslashes($_smarty_tpl->tpl_vars['data']->value['short_description']);?>
</textarea>		
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="full_content"><?php echo $_smarty_tpl->tpl_vars['lable']->value['content'];?>
</label>
                                <div class="col-md-10">
                                   <textarea class="form-control" id="full_content" name="data[content]" onChange="hideFieldRequire('#valid_content)"><?php echo stripslashes($_smarty_tpl->tpl_vars['data']->value['content']);?>
</textarea>		
                                </div>
                            </div>
							
                             <div class="form-group">
                                <label class="col-md-2 control-label" for="date_add"><?php echo $_smarty_tpl->tpl_vars['lable']->value['exactly_day'];?>
</label>
                                <div class="col-md-10">
                                    <input type="text" name="data[date_add]" id="date_add" class="form-control input" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['date_add'];?>
" />
                                    
                                </div>
                           </div>

                           <br/>
                           <hr/>
                           <br/>

                           <div class="form-group">
                               <label class="col-sm-2 control-label" ><?php echo $_smarty_tpl->tpl_vars['lable']->value['seo_title'];?>
</label>
                                <div class="col-sm-10">
                                    <input name="data[seo_title]" id="seo_title" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['seo_title'];?>
" class="form-control" maxlength="80" />
                                    <p class="help-block italic font_12"></p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label"><?php echo $_smarty_tpl->tpl_vars['lable']->value['seo_desc'];?>
</label>
                                <div class="col-sm-10">
                                    <textarea name="data[seo_description]" id="seo_description" class="col-md-6 form-control"><?php echo $_smarty_tpl->tpl_vars['data']->value['seo_description'];?>
</textarea>
                                    <p class="help-block"></p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label"></label>
                                <div class="col-md-10">
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
 type="text/javascript">
    CKEDITOR.replace('short_description');

    CKEDITOR.replace('full_content');
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/js/slim.kickstart.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/js/slug.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/assets/data/jquery/pickertime/jquery.datetimepicker.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
        
           
                $('#date_add').datetimepicker({format:'Y-m-d H:i' });
               
            // }
        
    
    <?php echo '</script'; ?>
>
<?php }
}
?>