<?php /* Smarty version 3.1.28-dev/21, created on 2017-04-20 06:02:45
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\admin\views\tour\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2126758f832e56a50d5_64787084%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38e281978a20084aac5594346b0daab09d6c5171' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\admin\\views\\tour\\index.tpl',
      1 => 1490156400,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2126758f832e56a50d5_64787084',
  'variables' => 
  array (
    'alert' => 0,
    'task' => 0,
    'base_url_admin' => 0,
    'lable' => 0,
    'action_url' => 0,
    'keyword' => 0,
    'current_method' => 0,
    'current_control' => 0,
    'action_send_letter' => 0,
    'sort' => 0,
    'more_url' => 0,
    'items' => 0,
    'item' => 0,
    'base_url' => 0,
    'links' => 0,
    'base_tlp_admin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_58f832e5c0cf24_30706900',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f832e5c0cf24_30706900')) {
function content_58f832e5c0cf24_30706900 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '2126758f832e56a50d5_64787084';
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
/agency"><i class="glyphicon glyphicon-plus"></i><?php echo $_smarty_tpl->tpl_vars['lable']->value['add_tour'];?>
</a>
                    
                    <div class="separator"></div>
                </div>
                <div class="box-search">
                    <form id="form-search" method="get" action="<?php echo $_smarty_tpl->tpl_vars['action_url']->value;?>
" name="box_search">
                        
                        <div class="col-md-3 pad-left-0">
                            <input class="form-control" type="text" name="keyword" id="keyword" value="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['lable']->value['placeholder_tour'];?>
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
">Tất cả tour</a></li>
                        <li class="special-agen <?php if ($_smarty_tpl->tpl_vars['current_method']->value == 'noshow') {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/noshow/">Chưa hiện thị</a></li>
                        <li class="block-agen <?php if ($_smarty_tpl->tpl_vars['current_method']->value == 'isshow') {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/isshow/">Đang hiển thị</a></li>
                        <li class="block-agen <?php if ($_smarty_tpl->tpl_vars['current_method']->value == 'listInactive') {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/incountry">Tour trong nước</a></li>
                        <li class="block-agen <?php if ($_smarty_tpl->tpl_vars['current_method']->value == 'listInactive') {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/foreigncountry">Tour nước ngoài</a></li>
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
"><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_id'];?>
 <i class="fa fa-caret-up"></i></a>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['sort']->value == 'id_asc') {?>
                                        <a class="active" href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_method']->value;?>
/?sort=id_desc<?php echo $_smarty_tpl->tpl_vars['more_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_id'];?>
 <i class="fa fa-caret-down"></i></a>
                                    <?php } else { ?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_method']->value;?>
/?sort=id_desc<?php echo $_smarty_tpl->tpl_vars['more_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_id'];?>
</i></a>
                                    <?php }?>
                                </th>
                                <th width="20%">
                                    
                                    <?php if ($_smarty_tpl->tpl_vars['sort']->value == 'title_desc') {?>
                                        <a class="active" href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_method']->value;?>
/?sort=title_asc<?php echo $_smarty_tpl->tpl_vars['more_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lable']->value['title_tour'];?>
 <i class="fa fa-caret-up"></i></a>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['sort']->value == 'title_asc') {?>
                                        <a class="active" href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_method']->value;?>
/?sort=title_desc<?php echo $_smarty_tpl->tpl_vars['more_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lable']->value['title_tour'];?>
 <i class="fa fa-caret-down"></i></a>
                                    <?php } else { ?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_method']->value;?>
/?sort=title_desc<?php echo $_smarty_tpl->tpl_vars['more_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lable']->value['title_tour'];?>
</i></a>
                                    <?php }?>
                                </th>
                                <th width="12%">
                                    <?php if ($_smarty_tpl->tpl_vars['sort']->value == 'name_desc') {?>
                                        <a class="active" href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_method']->value;?>
/?sort=name_asc<?php echo $_smarty_tpl->tpl_vars['more_url']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['lable']->value['agency_name'];?>
 <i class="fa fa-caret-up"></i></a>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['sort']->value == 'name_asc') {?>
                                        <a class="active" href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_method']->value;?>
/?sort=name_desc<?php echo $_smarty_tpl->tpl_vars['more_url']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['lable']->value['agency_name'];?>
 <i class="fa fa-caret-down"></i></a>
                                    <?php } else { ?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_method']->value;?>
/?sort=name_desc<?php echo $_smarty_tpl->tpl_vars['more_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lable']->value['agency_name'];?>
</i></a>
                                    <?php }?>
                                </th>
                                
                                <th width="10%"><?php echo $_smarty_tpl->tpl_vars['lable']->value['lastest_show'];?>
</th>
                                
                                <th width="10%">
                                    <?php if ($_smarty_tpl->tpl_vars['sort']->value == 'view_desc') {?>
                                        <a class="active" href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_method']->value;?>
/?sort=view_asc<?php echo $_smarty_tpl->tpl_vars['more_url']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_view'];?>
 <i class="fa fa-caret-up"></i></a>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['sort']->value == 'view_asc') {?>
                                        <a class="active" href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_method']->value;?>
/?sort=view_desc<?php echo $_smarty_tpl->tpl_vars['more_url']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_view'];?>
 <i class="fa fa-caret-down"></i></a>
                                    <?php } else { ?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_method']->value;?>
/?sort=view_desc<?php echo $_smarty_tpl->tpl_vars['more_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_view'];?>
</i></a>
                                    <?php }?>
                                </th>
                                <th width="10%">
                                    <?php if ($_smarty_tpl->tpl_vars['sort']->value == 'phone_desc') {?>
                                        <a class="active" href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_method']->value;?>
/?sort=phone_asc<?php echo $_smarty_tpl->tpl_vars['more_url']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_show_mobile'];?>
 <i class="fa fa-caret-up"></i></a>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['sort']->value == 'phone_asc') {?>
                                        <a class="active" href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_method']->value;?>
/?sort=phone_desc<?php echo $_smarty_tpl->tpl_vars['more_url']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_show_mobile'];?>
 <i class="fa fa-caret-down"></i></a>
                                    <?php } else { ?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_method']->value;?>
/?sort=phone_desc<?php echo $_smarty_tpl->tpl_vars['more_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_show_mobile'];?>
 </i></a>
                                    <?php }?>

                                </th>
                                <th width="10%">
                                    <?php if ($_smarty_tpl->tpl_vars['sort']->value == 'call_desc') {?>
                                        <a class="active" href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_method']->value;?>
/?sort=call_asc<?php echo $_smarty_tpl->tpl_vars['more_url']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_request'];?>
 <i class="fa fa-caret-up"></i></a>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['sort']->value == 'call_asc') {?>
                                        <a class="active" href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_method']->value;?>
/?sort=call_desc<?php echo $_smarty_tpl->tpl_vars['more_url']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_request'];?>
 <i class="fa fa-caret-down"></i></a>
                                    <?php } else { ?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_method']->value;?>
/?sort=call_desc<?php echo $_smarty_tpl->tpl_vars['more_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_request'];?>
</i></a>
                                    <?php }?>
                                </th>
                                <th width="10%">
                                    <?php if ($_smarty_tpl->tpl_vars['sort']->value == 'date_desc') {?>
                                        <a class="active" href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_method']->value;?>
/?sort=date_asc<?php echo $_smarty_tpl->tpl_vars['more_url']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['lable']->value['date_add'];?>
 <i class="fa fa-caret-up"></i></a>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['sort']->value == 'date_asc') {?>
                                        <a class="active" href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_method']->value;?>
/?sort=date_desc<?php echo $_smarty_tpl->tpl_vars['more_url']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['lable']->value['date_add'];?>
<i class="fa fa-caret-down"></i></a>
                                    <?php } else { ?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_method']->value;?>
/?sort=date_desc<?php echo $_smarty_tpl->tpl_vars['more_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lable']->value['date_add'];?>
</i></a>
                                    <?php }?>

                                </th>
                                <th width="10%"><?php echo $_smarty_tpl->tpl_vars['lable']->value['btn_show'];?>
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
                                    <tr class="parent-status">
                                        <td style="vertical-align:middle;">
                                            <input type="checkbox" name="data.items[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['tour_id'];?>
" />
                                        </td>
                                        <td style="vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['item']->value['tour_sku'];?>
</td>               
                                        <td style="vertical-align: middle;"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/tour/<?php echo $_smarty_tpl->tpl_vars['item']->value['slug'];?>
" title=""><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></td>
                                        <td style="vertical-align: middle;"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/agency/<?php echo $_smarty_tpl->tpl_vars['item']->value['a_slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['agency_name'];?>
</a></td>
                                        <td style="vertical-align: middle;"><?php if ($_smarty_tpl->tpl_vars['item']->value['avail'] == 1) {
echo smarty_modifier_date_format(time(),"%d-%m-%Y");
} else {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['last_avail'],"%d-%m-%Y");
}?></td>
                                        <td style="vertical-align: middle;" ><?php echo $_smarty_tpl->tpl_vars['item']->value['view_count'];?>
</td>
                                        <td style="vertical-align: middle;" ><?php echo $_smarty_tpl->tpl_vars['item']->value['phone_count'];?>
</td>
                                        <td style="vertical-align: middle;" ><?php echo $_smarty_tpl->tpl_vars['item']->value['call_count'];?>
</td>
                                        <td style="vertical-align: middle;" ><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['date_add'],"%d-%m-%Y");?>
</td>
                                        <td style="vertical-align: middle;" >
                                            <input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['item']->value['tour_id'];?>
" class="tour_check" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['avail'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['avail'] == 1) {?>checked="checked"<?php }?>>
                                        </td>
                                        <td style="vertical-align: middle;">
                                            <div class="input-group-btn ">
                                                <div class="btn-group btn-action">
                                                    <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <?php echo $_smarty_tpl->tpl_vars['lable']->value['lable_action'];?>
 <span class="caret"></span>        
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/tour/<?php echo $_smarty_tpl->tpl_vars['item']->value['slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['lable']->value['btn_see_first'];?>
</a></li>
                                                        <li><a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/add/?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['tour_id'];?>
&step=1&t=edit&a_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['agency_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['lable']->value['lable_update'];?>
</a></li>
                                                        <li><a class="dropdown-item tour-remove" data-toggle="confirmation" data-placement="left" href="javascript:void(o)" data-href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/remove/?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['tour_id'];?>
" title="Delete"><?php echo $_smarty_tpl->tpl_vars['lable']->value['btn_delete'];?>
</a> </li>
                                                        <li><a class="dropdown-item" target="_blank" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['tour_id'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/download/<?php echo $_smarty_tpl->tpl_vars['item']->value['slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_print'];?>
</a> </li>
                                                        
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


<?php }
}
?>