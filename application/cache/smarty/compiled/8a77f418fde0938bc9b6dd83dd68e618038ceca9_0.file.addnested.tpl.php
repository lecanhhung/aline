<?php /* Smarty version 3.1.28-dev/21, created on 2017-05-05 12:02:56
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\admin\views\tourdestination\addnested.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:27548590c4dd083ba61_94047156%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a77f418fde0938bc9b6dd83dd68e618038ceca9' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\admin\\views\\tourdestination\\addnested.tpl',
      1 => 1489031771,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27548590c4dd083ba61_94047156',
  'variables' => 
  array (
    'base_tlp_admin' => 0,
    'base_url_admin' => 0,
    'current_control' => 0,
    'option' => 0,
    'data' => 0,
    'task' => 0,
    'msg' => 0,
    'lable' => 0,
    'arrNested' => 0,
    'valid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_590c4dd0951331_70398008',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_590c4dd0951331_70398008')) {
function content_590c4dd0951331_70398008 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '27548590c4dd083ba61_94047156';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/css/custom.css" />

<div id="content">

<?php echo $_smarty_tpl->getSubTemplate ("sidebar_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="innerLR">
<form class="form-horizontal margin-none" id="frm_data" name="frm_data" method="post" action="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/processnested/" autocomplete="off" enctype="multipart/form-data">
<input type="hidden" name="option" id="option" value="<?php echo $_smarty_tpl->tpl_vars['option']->value;?>
" />
<input type="hidden" name="data[tour_destination_id]" id="mcId" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['tour_destination_id'];?>
" />
<input type="hidden" name="old[path_image]" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['cat_icon'];?>
">

<div class="widget">

<div class="widget-head">
    <h4 class="heading"><?php echo $_smarty_tpl->tpl_vars['task']->value;?>
</h4>
</div>

<div class="widget-body innerAll inner-2x">
<div class="row innerLR">
	<!-- Column -->
	<div class="col-md-9">

		<?php if ($_smarty_tpl->tpl_vars['msg']->value != '') {?> <?php echo $_smarty_tpl->getSubTemplate ("notes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }?>

            <div class="form-group">
                <label class="col-md-4 control-label" for="primary"><?php echo $_smarty_tpl->tpl_vars['lable']->value['root'];?>
</label>
                <div class="col-md-8">
                    <select data-placeholder="Danh mục.." class="col-md-8" name="data[parents]" id="select2_1">
                        <?php echo $_smarty_tpl->tpl_vars['arrNested']->value['cmb'];?>
 
                    </select>
                    <p class="help-block"><?php echo $_smarty_tpl->tpl_vars['valid']->value['cmbCat'];?>
</p>
                </div>
	   </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="mcCategory"><?php echo $_smarty_tpl->tpl_vars['lable']->value['category'];?>
(*)</label>
                <div class="col-md-6">
                    <div class="input-group">
                        <input type="text" name="data[cat_name]" id="mcCategory" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['cat_name'];?>
" class="form-control" placeholder="" onkeyup="changeToNameUnicode('mcCategory', 'cat_name_unicode');" />
                        <span class="help-block alert-danger"><?php echo $_smarty_tpl->tpl_vars['valid']->value['mcCategory'];?>
</span>
                        <span class="input-group-addon" data-toggle="tooltip" data-container="body" data-placement="top" data-original-title="Province or Location"><i class="fa fa-question-circle"></i></span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="cat_name_unicode"><?php echo $_smarty_tpl->tpl_vars['lable']->value['category'];?>
 Unicode(*)</label>
                <div class="col-md-6">
                    <div class="input-group">
                        <input type="text" name="data[cat_name_unicode]" id="cat_name_unicode" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['cat_name_unicode'];?>
" class="form-control" placeholder="" />
                        <span class="help-block alert-danger"><?php echo $_smarty_tpl->tpl_vars['valid']->value['cat_name_unicode'];?>
</span>
                        <span class="input-group-addon" data-toggle="tooltip" data-container="body" data-placement="top" data-original-title="Tiếng việt không dấu"><i class="fa fa-question-circle"></i></span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="cat_name_lable">Lable(*)</label>
                <div class="col-md-8">
                    <div class="input-group">
                        <input type="text" name="data[cat_name_lable]" id="cat_name_lable" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['cat_name_lable'];?>
" class="form-control" placeholder="" />
                        <span class="help-block alert-danger"></span>
                        <span class="input-group-addon" data-toggle="tooltip" data-container="body" data-placement="top" data-original-title="Title show in frontend"><i class="fa fa-question-circle"></i></span>
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-md-4 control-label" for="starting_latitude"><?php echo $_smarty_tpl->tpl_vars['lable']->value['latitude'];?>
</label>
                <div class="col-md-6">
                    <div class="input-group">
                        <input type="text" name="data[starting_latitude]" id="starting_latitude" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['starting_latitude'];?>
" class="form-control" placeholder="" />
                        <span class="help-block alert-danger"><?php echo $_smarty_tpl->tpl_vars['valid']->value['starting_latitude'];?>
</span>
                        <span class="input-group-addon" data-toggle="tooltip" data-container="body" data-placement="top" data-original-title="Map latitude"><i class="fa fa-question-circle"></i></span>
                        
                    </div>
                        <div class="help-block"><a href="http://www.latlong.net/place/ho-chi-minh-city-vietnam-333.html" target="_blank">http://www.latlong.net</a></div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="starting_longtitude"><?php echo $_smarty_tpl->tpl_vars['lable']->value['latitude'];?>
</label>
                <div class="col-md-6">
                    <div class="input-group">
                        <input type="text" name="data[starting_longtitude]" id="starting_longtitude" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['starting_longtitude'];?>
" class="form-control" placeholder="" />
                        <span class="help-block alert-danger"><?php echo $_smarty_tpl->tpl_vars['valid']->value['starting_longtitude'];?>
</span>
                        <span class="input-group-addon" data-toggle="tooltip" data-container="body" data-placement="top" data-original-title="Map longtitude"><i class="fa fa-question-circle"></i></span>
                    </div>
                </div>
            </div>
            
            <?php echo $_smarty_tpl->getSubTemplate ("tourdestination/slim_upload.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

            
            <div class="form-group">
                <label class="col-md-4 control-label" for="cat_icon_class">Show class</label>
                <div class="col-md-6">
                    <div class="input-group">
                        <input type="text" name="data[cat_icon_class]" id="cat_icon_class" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['cat_icon_class'];?>
" class="form-control" />
                        <span class="help-block alert-danger"></span>
                        <span class="input-group-addon" data-toggle="tooltip" data-container="body" data-placement="top" data-original-title="Big image 'col-2-1' Small image 'col-1-1' "><i class="fa fa-question-circle"></i></span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="cat_icon_class">Show home</label>
                <div class="col-md-6">
                    <div class="input-group">
                        <input type="checkbox" name="data[home]" id="" value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value['home'] == 1) {?> checked="checked"<?php }?> />  (Checked show home page)
                        <span class="help-block alert-danger"></span>
                    </div>
                </div>
            </div>

	</div>
	<!-- // Column END -->


</div>
<!-- // Row END -->

		<div class="row">
				<hr />
		</div>
		<br clear="all" />
		<div class="row innerLR">
		
		<div class="col-md-10">

                    <div class="form-group">
                        <label class="col-md-1 control-label" for="lang_value"> &nbsp; </label>
                        <div class="col-md-11">
                            <?php echo $_smarty_tpl->getSubTemplate ("seo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                        </div>
                    </div>	
                    
                    <div class="form-group">
                        <label class="col-md-4 control-label"></label>
                        <div class="col-md-8">
                            <div class="form-actions">
                                <button type="submit" id="btLang" class="btn btn-primary">
                                    <i class="fa fa-check-circle"></i> 
                                    <?php if ($_smarty_tpl->tpl_vars['option']->value == 'edit') {?> <?php echo $_smarty_tpl->tpl_vars['lable']->value['btn_edit'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['lable']->value['btn_save'];?>
 <?php }?>
                                </button>
                            </div>									
                        </div>
                    </div>

		</div>

	</div>


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
?>


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
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/assets/components/common/forms/elements/select2/assets/custom/js/select2.init.js?v=v1.0.3-rc2&sv=v0.0.1.1"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/assets/components/common/forms/elements/multiselect/assets/lib/js/jquery.multi-select.js?v=v1.0.3-rc2&sv=v0.0.1.1"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/assets/components/common/forms/elements/multiselect/assets/custom/js/multiselect.init.js?v=v1.0.3-rc2&sv=v0.0.1.1"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/js/bang.js"><?php echo '</script'; ?>
>
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