<?php /* Smarty version 3.1.28-dev/21, created on 2017-05-03 10:11:22
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\admin\views\blogs\slim_background.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:22149590990aa865cd8_18169055%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1362b7560b71c8358940e77f0b408ae5056a5932' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\admin\\views\\blogs\\slim_background.tpl',
      1 => 1490244985,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22149590990aa865cd8_18169055',
  'variables' => 
  array (
    'lable' => 0,
    'data' => 0,
    'img_file_exist' => 0,
    'dir_thumb' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_590990aa98f5a6_17657411',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_590990aa98f5a6_17657411')) {
function content_590990aa98f5a6_17657411 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_image_exist')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\modifier.image_exist.php';

$_smarty_tpl->properties['nocache_hash'] = '22149590990aa865cd8_18169055';
?>
<div class="form-group check-file">
    <label class="col-md-2 control-label" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['background'];?>
 </label>
    <div class="col-md-10 slim background" data-label="Drop your background here" data-ratio="16:9" style="width:64%; min-height:200px;margin-left:12px">
        <?php if ($_smarty_tpl->tpl_vars['data']->value['background_url'] != '') {?>
            <?php $_smarty_tpl->tpl_vars['img_file_exist'] = new Smarty_Variable(((string)$_smarty_tpl->tpl_vars['dir_path']->value)."/".((string)$_smarty_tpl->tpl_vars['data']->value['background_url']), null, 0);?>
            <?php if (smarty_modifier_image_exist($_smarty_tpl->tpl_vars['img_file_exist']->value)) {?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['dir_thumb']->value;
echo $_smarty_tpl->tpl_vars['data']->value['background_url'];?>
" alt="">
            <?php }?>
        <?php }?>
        <input class="form-control" id="background_url" name="background_url" type="file" value="">
        <span id="valid_background_url" class="red"></span>
    </div>
</div><?php }
}
?>