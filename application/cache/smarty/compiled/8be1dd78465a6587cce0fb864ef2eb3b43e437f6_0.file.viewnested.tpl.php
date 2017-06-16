<?php /* Smarty version 3.1.28-dev/21, created on 2017-04-18 06:10:30
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\admin\views\tourdestination\viewnested.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2636958f591b611f175_37510791%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8be1dd78465a6587cce0fb864ef2eb3b43e437f6' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\admin\\views\\tourdestination\\viewnested.tpl',
      1 => 1484629046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2636958f591b611f175_37510791',
  'variables' => 
  array (
    'base_tlp_admin' => 0,
    'msg' => 0,
    'heading' => 0,
    'search' => 0,
    'lable' => 0,
    'base_url_admin' => 0,
    'current_control' => 0,
    'items' => 0,
    'vl' => 0,
    'dir_path' => 0,
    'sub_level' => 0,
    'ss_admin' => 0,
    'links' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_58f591b62835f5_33148824',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f591b62835f5_33148824')) {
function content_58f591b62835f5_33148824 ($_smarty_tpl) {
if (!is_callable('smarty_function_math')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\function.math.php';

$_smarty_tpl->properties['nocache_hash'] = '2636958f591b611f175_37510791';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/css/custom.css" />

<div id="content">

<?php echo $_smarty_tpl->getSubTemplate ("sidebar_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ("breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="innerLR">

<?php if ($_smarty_tpl->tpl_vars['msg']->value != '') {?> <?php echo $_smarty_tpl->getSubTemplate ("notes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }?>

<div class="widget">			
<div class="widget-head">
<h4 class="heading"><?php echo $_smarty_tpl->tpl_vars['heading']->value;?>
</h4>
</div>

<form name="frm_list" method="get" action="">
<div class="widget-body overflow-x">

<div class="purchase-product">					
	<div class="row">
		<div class="separator bottom"></div>

		<div class="col-md-1">
			<h3>&nbsp;  </h3>					
		</div>
		<div class="col-md-5">
			<label class="strong"> &nbsp; </label>
			<input class="form-control" type="text" name="cat_name" value="<?php echo $_smarty_tpl->tpl_vars['search']->value['cat_name'];?>
" placeholder="Category" />							
		</div>
		<div class="col-md-2">
			<h4>&nbsp; </h4>
			<button type="submit" class="btn btn-primary"><i class="fa fa-search-minus"></i> <?php echo $_smarty_tpl->tpl_vars['lable']->value['bt_search'];?>
</button>
		</div>
		<div class="col-md-4">
		<div class="form-actions pull-right">
			<h4>&nbsp; </h4>
			<a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/" id="btnAddUser" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['lable']->value['add'];?>
</a>
		</div>
		</div>
		
	</div>
</div>				
<div class="separator"></div>

<!-- Table -->
<table class="dynamicTable fixedHeaderColReorder table">
	<thead class="bg-gray">
            <tr>
                    <th>ID</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['lable']->value['image'];?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['lable']->value['category'];?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['lable']->value['latitude'];?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['lable']->value['longtitude'];
$_tmp1=ob_get_clean();
echo $_tmp1;?>
</th>
                    <th>&nbsp;  </th>
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
            <tr class="gradeX">
                <td><?php echo $_smarty_tpl->tpl_vars['vl']->value['tour_destination_id'];?>
</td>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['vl']->value['cat_icon'] != '') {?><img src="<?php echo $_smarty_tpl->tpl_vars['dir_path']->value;
echo $_smarty_tpl->tpl_vars['vl']->value['cat_icon'];?>
" style="max-height:100px;" alt=""><?php }?>
                </td>
                <td>
                        <?php if ($_smarty_tpl->tpl_vars['vl']->value['level'] == 0) {?>
                                <b style="color:red"><?php echo stripslashes(stripslashes($_smarty_tpl->tpl_vars['vl']->value['cat_name']));?>
</b>
                        <?php } elseif ($_smarty_tpl->tpl_vars['vl']->value['level'] == 1) {?>
                                + <b><?php echo stripslashes($_smarty_tpl->tpl_vars['vl']->value['cat_name']);?>
</b>
                        <?php } else { ?>			
                                <?php echo smarty_function_math(array('assign'=>"sub_level",'equation'=>'x*y','x'=>12,'y'=>$_smarty_tpl->tpl_vars['vl']->value['level']),$_smarty_tpl);?>

                                <span style="padding-left:<?php echo $_smarty_tpl->tpl_vars['sub_level']->value;?>
px;"> - - <?php echo stripslashes($_smarty_tpl->tpl_vars['vl']->value['cat_name']);?>
</span>
                        <?php }?>
                        <br />
                        <small><?php echo stripslashes($_smarty_tpl->tpl_vars['vl']->value['cat_name_lable']);?>
</small>
                </td>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['vl']->value['starting_latitude'];?>
, <?php echo $_smarty_tpl->tpl_vars['vl']->value['starting_longtitude'];?>

                </td>
                <td class="right right_padding">
                    <?php if ($_smarty_tpl->tpl_vars['vl']->value['level'] > 0) {?>					
                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/?id=<?php echo $_smarty_tpl->tpl_vars['vl']->value['tour_destination_id'];?>
&option=edit" class="btn btn-sm btn-success button_margin" title="Update <?php echo $_smarty_tpl->tpl_vars['vl']->value['cat_name'];?>
"><i class="fa fa-pencil"></i></a>	
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['ss_admin']->value->adminRole == 'ADMINISTRATOR' && $_smarty_tpl->tpl_vars['vl']->value['level'] > 1) {?>
                    <a data-toggle="confirmation" data-placement="left" href="javascript:void(0)" data-href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/tourcat/delnested/?id=<?php echo $_smarty_tpl->tpl_vars['vl']->value['tour_destination_id'];?>
" class="ask btn btn-sm btn-danger button_margin" title="Delete"><i class="fa fa-trash-o"></i></a>
                    <?php }?>
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


</div>
</div>
        
<div class="">            
    <div class="pull-right">
        <?php echo $_smarty_tpl->tpl_vars['links']->value;?>

    </div>
</div>
<div class="clearfix"></div>
                
</form>	

</div>    
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/assets/components/library/bootstrap/js/bootstrap-tooltip.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/assets/components/library/bootstrap/js/bootstrap-confirmation.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>


$(document).ready(function() { 

    !function ($) {
        $(function(){
            $('[data-toggle="confirmation"]').confirmation();	
        });
    }(window.jQuery)

});

<?php echo '</script'; ?>
>

<?php }
}
?>