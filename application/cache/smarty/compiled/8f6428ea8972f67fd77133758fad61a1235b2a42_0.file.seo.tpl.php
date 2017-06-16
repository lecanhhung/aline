<?php /* Smarty version 3.1.28-dev/21, created on 2017-05-08 08:46:29
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\admin\views\seo.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:9864591014452fabb2_53777703%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f6428ea8972f67fd77133758fad61a1235b2a42' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\admin\\views\\seo.tpl',
      1 => 1494225987,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9864591014452fabb2_53777703',
  'variables' => 
  array (
    'lable' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_59101445355fc0_34817811',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59101445355fc0_34817811')) {
function content_59101445355fc0_34817811 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9864591014452fabb2_53777703';
?>
<div class="form-group">
    <label class="col-sm-3 control-label" ><?php echo $_smarty_tpl->tpl_vars['lable']->value['seo_title'];?>
</label>
    <div class="col-sm-9">
        <input name="data[seo_title]" id="seo_title" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['seo_title'];?>
" class="form-control" maxlength="80" />
        <p class="help-block italic font_12"></p>
    </div>
</div>
<!-- <div class="form-group">
    <label class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['lable']->value['seo_key'];?>
</label>
    <div class="col-sm-9">
        <input name="data[seo_keyword]" id="seo_keyword" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['seo_keyword'];?>
" class="form-control" maxlength="80" />
        <p class="help-block italic font_12"></p>
    </div>    
</div> -->
<div class="form-group">
    <label class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['lable']->value['seo_desc'];?>
</label>
    <div class="col-sm-9">
        <textarea name="data[seo_description]" id="seo_description" class="col-md-6 form-control"><?php echo $_smarty_tpl->tpl_vars['data']->value['seo_description'];?>
</textarea>
        <p class="help-block"></p>
    </div>
</div><?php }
}
?>