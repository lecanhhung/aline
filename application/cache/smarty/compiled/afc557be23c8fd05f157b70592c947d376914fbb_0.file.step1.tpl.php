<?php /* Smarty version 3.1.28-dev/21, created on 2017-05-08 09:01:22
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\admin\views\tour\step1.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:27523591017c2109787_61279496%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afc557be23c8fd05f157b70592c947d376914fbb' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\admin\\views\\tour\\step1.tpl',
      1 => 1494226879,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27523591017c2109787_61279496',
  'variables' => 
  array (
    'action_url' => 0,
    'option' => 0,
    'step' => 0,
    'id' => 0,
    'agency_id' => 0,
    'tour' => 0,
    'lable' => 0,
    'pathThumb' => 0,
    'destination' => 0,
    'value' => 0,
    'tourCat' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_591017c21f8b37_82099236',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_591017c21f8b37_82099236')) {
function content_591017c21f8b37_82099236 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_destination_ids')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\modifier.destination_ids.php';

$_smarty_tpl->properties['nocache_hash'] = '27523591017c2109787_61279496';
?>
<form class="form-horizontal margin-none" id="tourForm" name="tourForm" method="post" action="<?php echo $_smarty_tpl->tpl_vars['action_url']->value;?>
">
<input type="hidden" name="option" id="option" value="<?php echo $_smarty_tpl->tpl_vars['option']->value;?>
" />
<input type="hidden" name="step" id="step" value="<?php echo $_smarty_tpl->tpl_vars['step']->value;?>
" />
<input type="hidden" name="primary" id="primary" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" /> 

<input type="hidden" name="data[agency_id]" value="<?php echo $_smarty_tpl->tpl_vars['agency_id']->value;?>
">
<input type="hidden" name="old[background_url]" value="<?php echo $_smarty_tpl->tpl_vars['tour']->value['path_image'];?>
">
<input type="hidden" name="option" value="<?php echo $_smarty_tpl->tpl_vars['option']->value;?>
">
<input type="hidden" name="tour_id" value="<?php echo $_smarty_tpl->tpl_vars['tour']->value['tour_id'];?>
">
<input type="hidden" name="image_id" value="<?php echo $_smarty_tpl->tpl_vars['tour']->value['image_id'];?>
">

<div class="form-group check-file">
    <label class="control-label text-blue" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['image_cover'];?>
 </label>
    <div class="slim background" data-label="Drop your background here" data-size="1600,690" data-ratio="16:9" style='width: 90%; max-height: auto; '>
        <?php if ($_smarty_tpl->tpl_vars['tour']->value['path_image'] != '') {?><img src="<?php echo $_smarty_tpl->tpl_vars['pathThumb']->value;
echo $_smarty_tpl->tpl_vars['tour']->value['path_image'];?>
" alt=""><?php }?>
        <input class="form-control" id="background_url" name="background_url" type="file" value="" required />
    </div>
    <span id="valid_background_url" class="red"></span>
</div> 

<div class="form-group">
    <label class="control-label text-blue" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['info_tour'];?>
 </label>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['title_tour'];?>
<span class="red"> * </span></label>
    <div class="col-sm-8">
        <input class="form-control" id="title" name="data[title]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['tour']->value['title'];?>
" onChange="hideFieldRequire('#valid_title')" onkeyup="ChangeToSlug('title');">
        <span id="valid_title" class="red"></span>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label" for="slug">Slug</label>
    <div class="col-sm-8">
        <input type="text" name="data[slug]" id="slug" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['tour']->value['slug'];?>
" />
        
        <span id="valid_slug" class="red"></span>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_destination'];?>
 <span class="red"> * </span></label>
    <div class="col-sm-3">
        <select name="tour_destination_id[]" multiple="multiple" style="width:100%; min-height:150px;" id="select2_4">
            <?php
$foreach_0_value_sav['s_item'] = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$_from = $_smarty_tpl->tpl_vars['destination']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$foreach_0_value_sav['item'] = $_smarty_tpl->tpl_vars['value'];
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['tour_destination_id'];?>
" <?php if (smarty_modifier_destination_ids($_smarty_tpl->tpl_vars['tour']->value['tour_destination_id'],$_smarty_tpl->tpl_vars['value']->value['tour_destination_id'])) {?> selected='selected'<?php }?>><?php echo $_smarty_tpl->tpl_vars['value']->value['cat_name'];?>
</option>
            <?php
$_smarty_tpl->tpl_vars['value'] = $foreach_0_value_sav['item'];
}
if ($foreach_0_value_sav['s_item']) {
$_smarty_tpl->tpl_vars['value'] = $foreach_0_value_sav['s_item'];
}
?>
        </select>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_category'];?>
 <span class="red"> * </span></label>
    <div class="col-sm-3">
        <select name="data[tour_cat_id]" id="tour_cat_id" class="form-control">
            <?php
$foreach_1_value_sav['s_item'] = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$_from = $_smarty_tpl->tpl_vars['tourCat']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$foreach_1_value_sav['item'] = $_smarty_tpl->tpl_vars['value'];
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['tour_cat_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['tour']->value['tour_cat_id'] == $_smarty_tpl->tpl_vars['value']->value['tour_cat_id']) {?> selected='selected'<?php }?>><?php echo $_smarty_tpl->tpl_vars['value']->value['cat_name'];?>
</option>
            <?php
$_smarty_tpl->tpl_vars['value'] = $foreach_1_value_sav['item'];
}
if ($foreach_1_value_sav['s_item']) {
$_smarty_tpl->tpl_vars['value'] = $foreach_1_value_sav['s_item'];
}
?>
        </select>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['price_no_promotion'];?>
<span class="red"> * </span></label>
    <div class="col-sm-3">
        <input class="form-control" id="price" name="data[price]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['tour']->value['price'];?>
" onChange="hideFieldRequire('#valid_price')">
        <span id="valid_price" class="red"></span>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['price_promotion'];?>
<span class="red"> * </span></label>
    <div class="col-sm-3">
        <input class="form-control" id="price_promotion" name="data[price_promotion]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['tour']->value['price_promotion'];?>
" onChange="hideFieldRequire('#valid_price_promotion')">
        <span id="valid_price_promotion" class="red"></span>
    </div>
</div>

<br/>
<hr/>
<br/>

<div class="form-group">
    <label class="col-sm-3 control-label" ><?php echo $_smarty_tpl->tpl_vars['lable']->value['seo_title'];?>
</label>
    <div class="col-sm-8">
        <input name="data[seo_title]" id="seo_title" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['tour']->value['seo_title'];?>
" class="form-control" maxlength="80" />
        <p class="help-block italic font_12"></p>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['lable']->value['seo_desc'];?>
</label>
    <div class="col-sm-8">
        <textarea name="data[seo_description]" id="seo_description" class="col-md-6 form-control"><?php echo $_smarty_tpl->tpl_vars['tour']->value['seo_description'];?>
</textarea>
        <p class="help-block"></p>
    </div>
</div>



</form>

<?php }
}
?>