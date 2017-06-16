<?php /* Smarty version 3.1.28-dev/21, created on 2017-05-05 11:58:34
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\admin\views\blogcat\items.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:30720590c4ccabd3344_37311324%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53d9f73e23de260591c8d717c20ef8598914bba4' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\admin\\views\\blogcat\\items.tpl',
      1 => 1484193438,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30720590c4ccabd3344_37311324',
  'variables' => 
  array (
    'alert' => 0,
    'base_tlp_admin' => 0,
    'lable' => 0,
    'items' => 0,
    'vl' => 0,
    'base_url_admin' => 0,
    'current_control' => 0,
    'dir_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_590c4ccacb3205_98533133',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_590c4ccacb3205_98533133')) {
function content_590c4ccacb3205_98533133 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '30720590c4ccabd3344_37311324';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div id="content">

<?php echo $_smarty_tpl->getSubTemplate ("sidebar_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="innerLR">

<?php if ($_smarty_tpl->tpl_vars['alert']->value != '') {?> <?php echo $_smarty_tpl->getSubTemplate ("notes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }?>

<link href="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

<div class="widget">
<div class="widget-head">
	<h4 class="heading"><?php echo $_smarty_tpl->tpl_vars['lable']->value['list_items'];?>
</h4>
</div>
<div class="widget-body innerAll inner-2x">
	
    <table class="table table-bordered table-condensed" id="dataTables-lang">
        <thead>
            <tr>
                <th>ID</th>
                <th><?php echo $_smarty_tpl->tpl_vars['lable']->value['image'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['lable']->value['category'];?>
</th>
                <th>Latitude</th>
                <th>Longtitude</th>	
            </tr>
        </thead>
        <tbody>
        <?php
$foreach_0_vl_sav['s_item'] = isset($_smarty_tpl->tpl_vars['vl']) ? $_smarty_tpl->tpl_vars['vl'] : false;
$_from = $_smarty_tpl->tpl_vars['items']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['vl'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['vl']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['vl']->value) {
$_smarty_tpl->tpl_vars['vl']->_loop = true;
$foreach_0_vl_sav['item'] = $_smarty_tpl->tpl_vars['vl'];
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['vl']->value['id'];?>
</td>
                <td>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/?id=<?php echo $_smarty_tpl->tpl_vars['vl']->value['id'];?>
&option=edit" title="<?php echo $_smarty_tpl->tpl_vars['lable']->value['modify_update'];?>
">
                        <?php if ($_smarty_tpl->tpl_vars['vl']->value['path_image'] != '') {?><img src="<?php echo $_smarty_tpl->tpl_vars['dir_path']->value;
echo $_smarty_tpl->tpl_vars['vl']->value['path_image'];?>
" alt="" style="max-width:150px;"><?php }?>
                    </a>
                </td>
                <td>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/?id=<?php echo $_smarty_tpl->tpl_vars['vl']->value['id'];?>
&option=edit" title="<?php echo $_smarty_tpl->tpl_vars['lable']->value['modify_update'];?>
"><?php echo stripslashes($_smarty_tpl->tpl_vars['vl']->value['category']);?>
</a>
                </td>
                <td><?php echo $_smarty_tpl->tpl_vars['vl']->value['latitude'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['vl']->value['longtitude'];?>
</td>
            </tr>
        <?php
$_smarty_tpl->tpl_vars['vl'] = $foreach_0_vl_sav['item'];
}
if ($foreach_0_vl_sav['s_item']) {
$_smarty_tpl->tpl_vars['vl'] = $foreach_0_vl_sav['s_item'];
}
?>								
        </tbody>
    </table>

    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/" id="btnLogin" class="btn btn-primary btn-sm"><?php echo $_smarty_tpl->tpl_vars['lable']->value['add'];?>
</a>

</div><!-- /.widget-body -->
</div><!-- /.widget -->

</div>    
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/js/plugins/dataTables/jquery.dataTables.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/js/plugins/dataTables/dataTables.bootstrap.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript">

$(document).ready(function() { 
$('#dataTables-lang').dataTable(); 
});

<?php echo '</script'; ?>
><?php }
}
?>