<?php /* Smarty version 3.1.28-dev/21, created on 2017-06-15 09:08:59
         compiled from "C:\xampp\htdocs\customer\aline\application\modules\admin\views\index\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:192595942328b9f13b3_96274972%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40dd3bf7ad82f9b54f33b59654638f9f493dda4b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\customer\\aline\\application\\modules\\admin\\views\\index\\index.tpl',
      1 => 1497510491,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192595942328b9f13b3_96274972',
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_5942328ba45302_60963821',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5942328ba45302_60963821')) {
function content_5942328ba45302_60963821 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '192595942328b9f13b3_96274972';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<!-- Content -->
<div id="content">

    <?php echo $_smarty_tpl->getSubTemplate ("sidebar_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    
    

    <div class="innerLR">
        <?php echo $_smarty_tpl->getSubTemplate ('index/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        
        
    </div>    
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("script_validator.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>