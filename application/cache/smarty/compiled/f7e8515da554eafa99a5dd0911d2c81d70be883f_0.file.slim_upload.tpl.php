<?php /* Smarty version 3.1.28-dev/21, created on 2017-05-03 10:11:22
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\admin\views\blogs\slim_upload.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3290590990aa9a2b40_52375596%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7e8515da554eafa99a5dd0911d2c81d70be883f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\admin\\views\\blogs\\slim_upload.tpl',
      1 => 1490244971,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3290590990aa9a2b40_52375596',
  'variables' => 
  array (
    'base_tlp_admin' => 0,
    'lable' => 0,
    'data' => 0,
    'dir_file_exist' => 0,
    'dir_thumb' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_590990aaa00c45_90890158',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_590990aaa00c45_90890158')) {
function content_590990aaa00c45_90890158 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_image_exist')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\modifier.image_exist.php';

$_smarty_tpl->properties['nocache_hash'] = '3290590990aa9a2b40_52375596';
?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/css/slim.min.css" />
<div class="form-group check-file">
    <label class="col-md-2 control-label" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['image'];?>
</label>
    <div class="col-md-8 slim logo" data-label="<?php echo $_smarty_tpl->tpl_vars['lable']->value['image'];?>
" data-min-size="0,0" data-ratio="74:111" style='width:150px; height:120px; margin-left:12px;'>

        <?php if ($_smarty_tpl->tpl_vars['data']->value['path_image'] != '') {?>
            <?php $_smarty_tpl->tpl_vars['dir_file_exist'] = new Smarty_Variable(((string)$_smarty_tpl->tpl_vars['dir_path']->value)."/".((string)$_smarty_tpl->tpl_vars['data']->value['path_image']), null, 0);?>
            <?php if (smarty_modifier_image_exist($_smarty_tpl->tpl_vars['dir_file_exist']->value)) {?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['dir_thumb']->value;
echo $_smarty_tpl->tpl_vars['data']->value['path_image'];?>
" alt="">
            <?php }?>
        <?php }?>
        <input class="form-control" id="path_image" name="path_image" type="file" value="">
        <span id="valid_path_image" class="red"></span>
    </div>
</div>

<?php }
}
?>