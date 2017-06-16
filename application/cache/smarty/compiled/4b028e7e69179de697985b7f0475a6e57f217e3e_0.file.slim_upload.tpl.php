<?php /* Smarty version 3.1.28-dev/21, created on 2017-05-05 11:58:38
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\admin\views\blogcat\slim_upload.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:20094590c4cce4866a5_96549440%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b028e7e69179de697985b7f0475a6e57f217e3e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\admin\\views\\blogcat\\slim_upload.tpl',
      1 => 1489205533,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20094590c4cce4866a5_96549440',
  'variables' => 
  array (
    'base_tlp_admin' => 0,
    'lable' => 0,
    'data' => 0,
    'dir_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_590c4cce4a7631_15011770',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_590c4cce4a7631_15011770')) {
function content_590c4cce4a7631_15011770 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '20094590c4cce4866a5_96549440';
?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/css/slim.min.css" />
<div class="form-group check-file">
    <label class="col-md-4 control-label" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['image'];?>
</label>
    <div class="col-md-8 slim logo" data-label="<?php echo $_smarty_tpl->tpl_vars['lable']->value['image'];?>
" data-size="370,555" data-ratio="2:3" style='width:150px;height:210px;margin-left:12px;'>

        <?php if ($_smarty_tpl->tpl_vars['data']->value['path_image'] != '') {?><img src="<?php echo $_smarty_tpl->tpl_vars['dir_path']->value;
echo $_smarty_tpl->tpl_vars['data']->value['path_image'];?>
" alt=""><?php }?>
        <input class="form-control" id="path_image" name="path_image" type="file" value="">
        <span id="valid_path_image" class="red"></span>
    </div>
</div>

<?php }
}
?>