<?php /* Smarty version 3.1.28-dev/21, created on 2017-05-08 10:01:45
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\admin\views\tourcat\addnested.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:25720591025e9b85061_91154608%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f2edcad41eb24faceef49451e7be48fe1696f07' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\admin\\views\\tourcat\\addnested.tpl',
      1 => 1494230503,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25720591025e9b85061_91154608',
  'variables' => 
  array (
    'base_tlp_admin' => 0,
    'base_url_admin' => 0,
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
  'unifunc' => 'content_591025e9c745a1_91543046',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_591025e9c745a1_91543046')) {
function content_591025e9c745a1_91543046 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '25720591025e9b85061_91154608';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/css/custom.css" />

<!-- Content -->
<div id="content">

	<?php echo $_smarty_tpl->getSubTemplate ("sidebar_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<?php echo $_smarty_tpl->getSubTemplate ("breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


	<div class="innerLR">

		<form class="form-horizontal margin-none" id="frm_data" name="frm_data" method="post" action="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/tourcat/processnested/" autocomplete="off" enctype="multipart/form-data">
			<input type="hidden" name="option" id="option" value="<?php echo $_smarty_tpl->tpl_vars['option']->value;?>
" />
			<input type="hidden" name="data[cat_style_id]" id="mcId" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['cat_style_id'];?>
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
						<div class="col-md-6">

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
								<label class="col-md-4 control-label" for="lang_value"><?php echo $_smarty_tpl->tpl_vars['lable']->value['category'];?>
(*)</label>
								<div class="col-md-8">
									<div class="input-group">
										<input type="text" name="data[cat_name]" id="mcCategory" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['cat_name'];?>
" class="form-control" placeholder="" />
										<span class="help-block alert-danger"><?php echo $_smarty_tpl->tpl_vars['valid']->value['mcCategory'];?>
</span>
										<span class="input-group-addon" data-toggle="tooltip" data-container="body" data-placement="top" data-original-title="Category Name"><i class="fa fa-question-circle"></i></span>
									</div>
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

                    <!--
                    <div class="form-group">
                            <label class="col-md-2 control-label" for="lang_value"> &nbsp; </label>
                            <div class="col-md-10">
                                            
                            </div>
                    </div>	
                -->	

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
<?php }
}
?>