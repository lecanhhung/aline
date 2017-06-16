<?php /* Smarty version 3.1.28-dev/21, created on 2017-04-21 08:27:48
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\admin\views\tour\dropzone.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2668258f9a6640f36f6_06724443%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8170bbda5522ab9b16cc595baf5b1d8b59c61918' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\admin\\views\\tour\\dropzone.tpl',
      1 => 1492756065,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2668258f9a6640f36f6_06724443',
  'variables' => 
  array (
    'base_url_admin' => 0,
    'tour_id' => 0,
    'day_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_58f9a6642033d7_64073902',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f9a6642033d7_64073902')) {
function content_58f9a6642033d7_64073902 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2668258f9a6640f36f6_06724443';
?>
<p class="scroll-invitation">
<a href="#try-it-out"><span></span></a>
</p>

<div id="dropzone">
    <form action="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/myfile/upload/?object_id=<?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
&object_type=ts&day_id=<?php echo $_smarty_tpl->tpl_vars['day_id']->value;?>
" class="dropzone" id="demo-upload">
        <div class="fallback">
        <input name="file" type="file" multiple />
        </div>
        
    </form>
        
</div>
<?php }
}
?>