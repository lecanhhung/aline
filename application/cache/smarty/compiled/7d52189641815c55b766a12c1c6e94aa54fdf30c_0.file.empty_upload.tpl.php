<?php /* Smarty version 3.1.28-dev/21, created on 2017-04-20 06:03:29
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\admin\views\tour\empty_upload.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1205458f83311584e56_56683604%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d52189641815c55b766a12c1c6e94aa54fdf30c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\admin\\views\\tour\\empty_upload.tpl',
      1 => 1490244864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1205458f83311584e56_56683604',
  'variables' => 
  array (
    'tour_id' => 0,
    'base_url_admin' => 0,
    'lable' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_58f833115ff564_95660133',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f833115ff564_95660133')) {
function content_58f833115ff564_95660133 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1205458f83311584e56_56683604';
?>
<div class="parent-image">
	<div class="slim image" data-did-upload="imageUpload" data-meta-tour-id=<?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
 data-meta-id="" data-did-remove="handleImageRemoval"   data-service="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/tour/uploadimage" data-label="" data-ratio="4:2" style='width: 345px; height:220px '>
		<input class="form-control image_url" name="image" type="file" value="">
	</div>
	<span class="red valid_image "></span>
	<br/>
	<label for="description" class="control-label col-sm-6"><?php echo $_smarty_tpl->tpl_vars['lable']->value['description'];?>
</label>
	<textarea name="description[]" id="" cols="30" rows="10"></textarea>

</div><?php }
}
?>