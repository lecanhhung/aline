<?php /* Smarty version 3.1.28-dev/21, created on 2017-06-15 09:07:11
         compiled from "C:\xampp\htdocs\customer\aline\application\modules\admin\views\users\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:63375942321f1ce858_56164896%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '562d5c33e7b283d35937228121f0a4c5ce947157' => 
    array (
      0 => 'C:\\xampp\\htdocs\\customer\\aline\\application\\modules\\admin\\views\\users\\index.tpl',
      1 => 1497510429,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '63375942321f1ce858_56164896',
  'variables' => 
  array (
    'alert' => 0,
    'base_tlp_admin' => 0,
    'lable' => 0,
    'action_url' => 0,
    'keyword' => 0,
    'action_url_add' => 0,
    'base_url_admin' => 0,
    'current_control' => 0,
    'action_url_delete_multi' => 0,
    'items' => 0,
    'item' => 0,
    'user_data' => 0,
    'links' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_5942321f25c8a6_74714386',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5942321f25c8a6_74714386')) {
function content_5942321f25c8a6_74714386 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '63375942321f1ce858_56164896';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



<!-- Content -->
<div id="content">

    
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

                <div class="box-search">
                    <form method="get" action="<?php echo $_smarty_tpl->tpl_vars['action_url']->value;?>
" name="box_search">
                        <div class="col-md-4 pad-left-0">
                            <input class="form-control" id="appendedInputButtons" type="text" name="keyword" value="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" placeholder="Tìm kiếm ..." />
                        </div>
                        <div class="col-md-2 pad-left-0">
							<div class="input-group-btn">
								<button class="btn btn-default" type="submit"><strong><?php echo $_smarty_tpl->tpl_vars['lable']->value['search'];?>
</strong></button>
							</div>
						</div>
                    </form>
						<div class="col-md-3 pad-left-0 pull-right">
							<a href="<?php echo $_smarty_tpl->tpl_vars['action_url_add']->value;?>
" title="Add new" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Add</a>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/listinactive" title="List Inactive" class="btn btn-inverse btn-stroke"><i class="glyphicon glyphicon-eye-close"></i> List Inactive</a>
						</div>
                    <div class="separator"></div>
                </div>
                <br/>

                <div class="table-responsive">
                    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['action_url_delete_multi']->value;?>
" name="memberForm">

                        <table class="table list-items table-bordered">
                            <tbody>
                                <tr style="background:#fafafa">
                                    <td width="3%">
										<!-- <input name="checkAll" id="checkAll" value="1" type="checkbox" /> -->
									 </td>
                                    <td width="35%"><b style="text-transform: uppercase;">User</b></td>
                                    <td width="20%"><b style="text-transform: uppercase;">Infomation</b></td>
                                    <td width="15%" class="col-md-1" style="text-align: center;text-transform: uppercase;"><b>Action</b></td>
                                </tr>
                                <?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
                                <?php
$foreach_0_item_sav['s_item'] = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_from = $_smarty_tpl->tpl_vars['items']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_0_item_sav['item'] = $_smarty_tpl->tpl_vars['item'];
?>
                                    <tr>
                                        <td style="vertical-align: middle;">
											<!--<input type="checkbox" name="data.items[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" />-->
										</td>
                                        <td style="vertical-align: middle;">
                                            <p style="font-family: sans-serif;"><strong><?php echo $_smarty_tpl->tpl_vars['item']->value['user_fullname'];?>
</strong></p>

                                        </td>
                                        <td style="vertical-align: middle;">
                                            <?php if ($_smarty_tpl->tpl_vars['item']->value['user_name']) {?><div><u>User Name : </u><strong><?php echo $_smarty_tpl->tpl_vars['item']->value['user_name'];?>
</strong></div><?php }?>
                                            <div><u>Admin Role</u> : <?php echo $_smarty_tpl->tpl_vars['item']->value['role_name'];?>
</div>
                                            <div><u><?php echo $_smarty_tpl->tpl_vars['lable']->value['date_add'];?>
</u> : <?php echo $_smarty_tpl->tpl_vars['item']->value['date_add'];?>
</div>
                                        </td>
                                        <td style="text-align: center;vertical-align: middle;">
                                            <?php if ($_smarty_tpl->tpl_vars['user_data']->value->role_id <= 3) {?>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/users/add/?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" id="btnLogin" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"></i> Edit</a>
                                            <a data-toggle="confirmation" data-placement="left" href="javascript:void(o)" data-href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/users/inactive/?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" class="ask btn btn-danger" title="Remove"><i class="fa fa-times"></i>Delete</a>
                                            <?php if ($_smarty_tpl->tpl_vars['user_data']->value->role_id == 3) {?>
                                            <a data-toggle="confirmation" data-placement="left" href="javascript:void(o)" data-href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/users/remove/?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
" class="ask btn btn-danger" title="Remove"><i class="fa fa-times"></i>Remove</a>
                                            <?php }?>
                                            <?php }?>
                                            
                                        </td>
                                    </tr>
                                <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_0_item_sav['item'];
}
if ($foreach_0_item_sav['s_item']) {
$_smarty_tpl->tpl_vars['item'] = $foreach_0_item_sav['s_item'];
}
?>
                                <?php }?>
								
								<!--
                                <tr>
                                    <td>
                                        <input name="checkAll" id="checkAll" value="1" type="checkbox" />
                                    </td>
                                    <td colspan="10">
                                        <button data-placement="right" type="submit" class="ask btn btn-default" name="deleteMulti" id="deleteMulti"><?php echo $_smarty_tpl->tpl_vars['lable']->value['delete']['value'];?>
</button>
                                    </td>
                                </tr>
								-->
                            </tbody>
                        </table>
                    </form>
                </div>




            </div><!-- /.widget-body -->
        </div><!-- /.widget -->

        <?php echo $_smarty_tpl->tpl_vars['links']->value;?>


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
 language="javascript">
    
        $(document).ready(function () {
            !function (cash) {
                $(function () {
                    $('[data-toggle="confirmation"]').confirmation();
                });
            }(window.jQuery)
        });
    
<?php echo '</script'; ?>
><?php }
}
?>