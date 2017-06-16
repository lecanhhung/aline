<?php /* Smarty version 3.1.28-dev/21, created on 2017-05-05 12:02:56
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\admin\views\tourdestination\slim_upload.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2469590c4dd09854c4_91187367%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd651a2f5b1cbce967632c72432a43ab2da4bcfd6' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\admin\\views\\tourdestination\\slim_upload.tpl',
      1 => 1484628564,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2469590c4dd09854c4_91187367',
  'variables' => 
  array (
    'base_tlp_admin' => 0,
    'lable' => 0,
    'data' => 0,
    'dir_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_590c4dd0997f14_39651115',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_590c4dd0997f14_39651115')) {
function content_590c4dd0997f14_39651115 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2469590c4dd09854c4_91187367';
?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/css/slim.min.css" />
<div class="form-group check-file">
    <label class="col-md-4 control-label" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['image'];?>
</label>
    <div class="col-md-8 slim logo" data-label="<?php echo $_smarty_tpl->tpl_vars['lable']->value['image'];?>
" data-size="750,750" style='width: 150px; height: 150px; margin-left: 12px;'>

        <?php if ($_smarty_tpl->tpl_vars['data']->value['cat_icon'] != '') {?><img src="<?php echo $_smarty_tpl->tpl_vars['dir_path']->value;
echo $_smarty_tpl->tpl_vars['data']->value['cat_icon'];?>
" alt=""><?php }?>
        <input class="form-control" id="path_image" name="path_image" type="file" value="">
        <span id="valid_path_image" class="red"></span>
    </div>
</div>

<?php }
}
?>