<?php /* Smarty version 3.1.28-dev/21, created on 2017-04-15 06:04:56
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\admin\views\agency\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3115358f19be8a3bc41_80265684%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85bc7827c03f0fddca91d9d2f14ad6cc37652149' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\admin\\views\\agency\\index.tpl',
      1 => 1490156887,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3115358f19be8a3bc41_80265684',
  'variables' => 
  array (
    'alert' => 0,
    'task' => 0,
    'base_url_admin' => 0,
    'current_control' => 0,
    'lable' => 0,
    'action_url' => 0,
    'keyword' => 0,
    'current_method' => 0,
    'action_send_letter' => 0,
    'sort' => 0,
    'more_url' => 0,
    'items' => 0,
    'item' => 0,
    'base_url' => 0,
    'k' => 0,
    'links' => 0,
    'action_pass' => 0,
    'base_tlp_admin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_58f19be8cd2389_56413094',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f19be8cd2389_56413094')) {
function content_58f19be8cd2389_56413094 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '3115358f19be8a3bc41_80265684';
echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div id="content">

    
    <?php echo $_smarty_tpl->getSubTemplate ('sidebar_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <?php echo $_smarty_tpl->getSubTemplate ('breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <div class="innerLR">
        
        
        <?php if ($_smarty_tpl->tpl_vars['alert']->value != '') {
echo $_smarty_tpl->getSubTemplate ('notes.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
}?>
        

        <div class="widget">
            <div class="widget-head">
                <h4 class="heading"><?php echo $_smarty_tpl->tpl_vars['task']->value;?>
</h4>
            </div>
            <div class="widget-body innerAll inner-2x agency-add">
                <div style="text-align: right;" class="box-search">
                    <a class="btn btn-primary" title="Add new" href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/add/"><i class="glyphicon glyphicon-plus"></i> <?php echo $_smarty_tpl->tpl_vars['lable']->value['add_angecy'];?>
</a>
                    
                    <div class="separator"></div>
                </div>
                <div class="box-search">
                    <form id="form-search" method="get" action="<?php echo $_smarty_tpl->tpl_vars['action_url']->value;?>
" name="box_search">
                        
                        <div class="col-md-3 pad-left-0">
                            <input class="form-control" type="text" name="keyword" id="keyword" value="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['lable']->value['keyword_agency'];?>
" />
                            <i class="fa fa-search"></i>
                        </div>
                    </form>
                    <div class="separator"></div>
                </div>

                <div class="subtabs">
                    <ul class="list-inline">
                        <li class="all-agen <?php if ($_smarty_tpl->tpl_vars['current_method']->value == 'index') {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
">All agencies</a></li>
                        <li class="special-agen <?php if ($_smarty_tpl->tpl_vars['current_method']->value == 'outstanding') {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/outstanding"><?php echo $_smarty_tpl->tpl_vars['lable']->value['agency_outstanding'];?>
</a></li>
                        <li class="block-agen <?php if ($_smarty_tpl->tpl_vars['current_method']->value == 'listInactive') {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/listinactive">Blocked agencies</a></li>
                    </ul>
                </div>
                <br/>
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['action_send_letter']->value;?>
" name="productForm">
                    <table class="table list-items table-bordered table-condensed list-agencies" id="dataTables-product">
                        <thead>
                            <tr>
                                <th width="2%">&nbsp;</th>
                                <th width="10%">
                                    <?php if ($_smarty_tpl->tpl_vars['sort']->value == 'id_desc') {?>
                                        <a class="active" href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_method']->value;?>
/?sort=id_asc<?php echo $_smarty_tpl->tpl_vars['more_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lable']->value['agency_id'];?>
 <i class="fa fa-caret-up"></i></a>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['sort']->value == 'id_asc') {?>
                                        <a class="active" href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_method']->value;?>
/?sort=id_desc<?php echo $_smarty_tpl->tpl_vars['more_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lable']->value['agency_id'];?>
 <i class="fa fa-caret-down"></i></a>
                                    <?php } else { ?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_method']->value;?>
/?sort=id_desc<?php echo $_smarty_tpl->tpl_vars['more_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lable']->value['agency_id'];?>
</a>
                                    <?php }?>
                                </th>
                                <th width="20%">
                                    
                                    <?php if ($_smarty_tpl->tpl_vars['sort']->value == 'name_desc') {?>
                                        <a class="active" href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_method']->value;?>
/?sort=name_asc<?php echo $_smarty_tpl->tpl_vars['more_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lable']->value['agency_name'];?>
 <i class="fa fa-caret-up"></i></a>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['sort']->value == 'name_asc') {?>
                                        <a class="active" href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_method']->value;?>
/?sort=name_desc<?php echo $_smarty_tpl->tpl_vars['more_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lable']->value['agency_name'];?>
 <i class="fa fa-caret-down"></i></a>
                                    <?php } else { ?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_method']->value;?>
/?sort=name_desc<?php echo $_smarty_tpl->tpl_vars['more_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lable']->value['agency_name'];?>
</a>
                                    <?php }?>
                                </th>
                                <th width="10%"><?php echo $_smarty_tpl->tpl_vars['lable']->value['package'];?>
</th>
                                <th width="10%">
                                    
                                    <?php if ($_smarty_tpl->tpl_vars['sort']->value == 'date_desc') {?>
                                        <a class="active" href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_method']->value;?>
/?sort=date_asc<?php echo $_smarty_tpl->tpl_vars['more_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lable']->value['expired_date'];?>
 <i class="fa fa-caret-up"></i></a>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['sort']->value == 'date_asc') {?>
                                        <a class="active" href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_method']->value;?>
/?sort=date_desc<?php echo $_smarty_tpl->tpl_vars['more_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lable']->value['expired_date'];?>
 <i class="fa fa-caret-down"></i></a>
                                    <?php } else { ?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_method']->value;?>
/?sort=date_desc<?php echo $_smarty_tpl->tpl_vars['more_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lable']->value['expired_date'];?>
</a>
                                    <?php }?>
                                </th>
                                <th width="10%">
                                    <?php if ($_smarty_tpl->tpl_vars['sort']->value == 'tax_desc') {?>
                                        <a class="active" href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_method']->value;?>
/?sort=tax_asc<?php echo $_smarty_tpl->tpl_vars['more_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lable']->value['tax_number'];?>
 <i class="fa fa-caret-up"></i></a>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['sort']->value == 'tax_asc') {?>
                                        <a class="active" href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_method']->value;?>
/?sort=tax_desc<?php echo $_smarty_tpl->tpl_vars['more_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lable']->value['tax_number'];?>
 <i class="fa fa-caret-down"></i></a>
                                    <?php } else { ?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_method']->value;?>
/?sort=tax_desc<?php echo $_smarty_tpl->tpl_vars['more_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lable']->value['tax_number'];?>
</a>
                                    <?php }?>


                                </th>
                                <th width="10%">
                                    <?php if ($_smarty_tpl->tpl_vars['sort']->value == 'num_desc') {?>
                                        <a class="active" href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_method']->value;?>
/?sort=num_asc<?php echo $_smarty_tpl->tpl_vars['more_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lable']->value['lable_num_tour'];?>
 <i class="fa fa-caret-up"></i></a>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['sort']->value == 'num_asc') {?>
                                        <a class="active" href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_method']->value;?>
/?sort=num_desc<?php echo $_smarty_tpl->tpl_vars['more_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lable']->value['lable_num_tour'];?>
 <i class="fa fa-caret-down"></i></a>
                                    <?php } else { ?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_method']->value;?>
/?sort=num_desc<?php echo $_smarty_tpl->tpl_vars['more_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lable']->value['lable_num_tour'];?>
</a>
                                    <?php }?>

                                </th>
                                <th width="13%" style='text-align:center;'><?php echo $_smarty_tpl->tpl_vars['lable']->value['lable_action'];?>
</th>
                            </tr>
                        </thead>
                        <tbody>


                        
                            <?php if (!empty($_smarty_tpl->tpl_vars['items']->value)) {?>
                                <?php
$foreach_0_item_sav['s_item'] = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$foreach_0_item_sav['s_key'] = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_from = $_smarty_tpl->tpl_vars['items']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_0_item_sav['item'] = $_smarty_tpl->tpl_vars['item'];
?> 
                                    <tr>
                                        <td style="vertical-align:middle;">
                                            <input type="checkbox" name="data.items[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['agency_id'];?>
" />
                                        </td>
                                        <td style="vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['item']->value['agency_sku'];?>
</td>               
                                        <td style="vertical-align: middle;"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/agency/<?php echo $_smarty_tpl->tpl_vars['item']->value['slug'];?>
" title=""><?php echo $_smarty_tpl->tpl_vars['item']->value['agency_name'];?>
</a></td>
                                        <td style="vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['item']->value['package_name'];?>
</td>
                                        <td style="vertical-align: middle;"><?php if ($_smarty_tpl->tpl_vars['item']->value['expired_date'] == '') {?>---<?php } else {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['expired_date'],"%d-%m-%Y");
}?></td>
                                        <td style="vertical-align: middle;" ><?php if ($_smarty_tpl->tpl_vars['item']->value['tax_number'] == '') {?>---<?php } else {
echo $_smarty_tpl->tpl_vars['item']->value['tax_number'];
}?></td>
                                        <td style="vertical-align: middle;" ><?php echo $_smarty_tpl->tpl_vars['item']->value['total'];?>
</td>
                                        <td style="vertical-align: middle;">
                                            <div class="input-group-btn ">
                                                <div class="btn-group btn-action">
                                                    <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <?php echo $_smarty_tpl->tpl_vars['lable']->value['lable_action'];?>
 <span class="caret"></span>        
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/add/?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['agency_id'];?>
&option=edit"><?php echo $_smarty_tpl->tpl_vars['lable']->value['lable_update'];?>
</a></li>
                                                        
                                                        
                                                        <li><a class="dropdown-item agency-remove" data-toggle="confirmation" data-placement="left" href="javascript:void(o)" data-href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/remove/?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['agency_id'];?>
" title="Delete"><?php echo $_smarty_tpl->tpl_vars['lable']->value['btn_delete'];?>
</a> </li>
                                                        <?php if ($_smarty_tpl->tpl_vars['item']->value['avail'] == 1) {?>
                                                        <li><a class="dropdown-item" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['agency_id'];?>
" data-avail = "<?php echo $_smarty_tpl->tpl_vars['item']->value['avail'];?>
" href="#"><?php echo $_smarty_tpl->tpl_vars['lable']->value['btn_block'];?>
</a> </li>
                                                        <?php } else { ?>
                                                        <li><a class="dropdown-item" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['agency_id'];?>
" data-avail = "<?php echo $_smarty_tpl->tpl_vars['item']->value['avail'];?>
" href="#">Unblock</a> </li>
                                                        <?php }?>
                                                        <li><a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/tour/add/?a_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['agency_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['lable']->value['add_tour'];?>
</a></li>
                                                        <li class="divider"></li>
                                                        <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#update-pass-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lable']->value['btn_update_password'];?>
</a></li>
                                                        <li><a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/agency/<?php echo $_smarty_tpl->tpl_vars['item']->value['slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['lable']->value['btn_see_page'];?>
</a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    
                                <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_0_item_sav['item'];
}
if ($foreach_0_item_sav['s_item']) {
$_smarty_tpl->tpl_vars['item'] = $foreach_0_item_sav['s_item'];
}
if ($foreach_0_item_sav['s_key']) {
$_smarty_tpl->tpl_vars['k'] = $foreach_0_item_sav['s_key'];
}
?>
                                <tr>
                                    <td>
                                        <input name="checkAll[]" id="checkAll" value="1" type="checkbox" />
                                    </td>
                                    <td colspan="10">
                                        <button data-placement="right" type="submit" class="ask btn btn-default" name="send_letter" id="send_letter"><?php echo $_smarty_tpl->tpl_vars['lable']->value['lable_send_letter'];?>
</button>
                                    </td>
                                </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </form>

                <div class="pagination-custom"> 
                    <?php echo $_smarty_tpl->tpl_vars['links']->value;?>

                </div>
            </div><!-- /.widget-body -->
        </div><!-- /.widget -->
    </div>

</div>

<?php
$foreach_1_item_sav['s_item'] = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$foreach_1_item_sav['s_key'] = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_from = $_smarty_tpl->tpl_vars['items']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_1_item_sav['item'] = $_smarty_tpl->tpl_vars['item'];
?> 
<div id="update-pass-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" class="modal fade brand_modal" role="dialog">
    <div class="modal-dialog modal-sm">

        <!-- Modal content-->

        <div class="modal-content">
            <form  id="form-password-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" class="form-password" action="<?php echo $_smarty_tpl->tpl_vars['action_pass']->value;?>
" method="POST" role="form">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['btn_update_password'];?>
</h4>
                </div>
                <div class="modal-body">
                    <div class="col-sm-12">
                        <input type="hidden" name="data[agency_id]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['agency_id'];?>
">
                        <input type="hidden" name="data[old_email]" id="old_email-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['email'];?>
">
                        <div class="form-group">
                            <label for="login_email" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lable']->value['login_email'];?>
 <span class="red"> * </span></label>
                            <input class="form-control" id="email-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" name="data[email]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['email'];?>
"  data-email="<?php echo $_smarty_tpl->tpl_vars['item']->value['email'];?>
" onChange="hideFieldRequire('#valid_email-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
')">
                            <span id="valid_email-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" class="red valid_login_email"></span>
                        </div>

                        <div class="form-group">
                            <label class=" control-label" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['password'];?>
 <span class="red"> * </span></label>
                            <input class="form-control" id="password-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" name="data[password]" type="password" value="" onChange="hideFieldRequire('#valid_password-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
')">
                            <span id="valid_password-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" class="red"></span>
                        </div>

                        <div class="form-group">
                            <label class=" control-label" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['confirm_password'];?>
 <span class="red"> * </span></label>
                            <input class="form-control" id="password_retype-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" name="data[password_retype]" type="password" value="" onChange="hideFieldRequire('#valid_password_retype-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
')">
                            <span id="valid_password_retype-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" class="red"></span>
                        </div> 
                    
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="btn-pass-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" class="btn btn-primary" ><?php echo $_smarty_tpl->tpl_vars['lable']->value['btn_agree'];?>
</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
$_smarty_tpl->tpl_vars['item'] = $foreach_1_item_sav['item'];
}
if ($foreach_1_item_sav['s_item']) {
$_smarty_tpl->tpl_vars['item'] = $foreach_1_item_sav['s_item'];
}
if ($foreach_1_item_sav['s_key']) {
$_smarty_tpl->tpl_vars['k'] = $foreach_1_item_sav['s_key'];
}
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
    var step = 0;
    
        $(document).ready(function () {
            !function (cash) {
                $(function () {
                    $('[data-toggle="confirmation"]').confirmation();
                });
            }(window.jQuery);
            
            $('[data-toggle="tooltip"]').tooltip();
        });
    
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/js/jstour.js"><?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



<?php }
}
?>