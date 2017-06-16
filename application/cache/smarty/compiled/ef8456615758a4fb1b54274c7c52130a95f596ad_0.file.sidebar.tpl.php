<?php /* Smarty version 3.1.28-dev/21, created on 2017-04-17 03:26:14
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\admin\views\sidebar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2583958f419b63946b1_17069282%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef8456615758a4fb1b54274c7c52130a95f596ad' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\admin\\views\\sidebar.tpl',
      1 => 1492392371,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2583958f419b63946b1_17069282',
  'variables' => 
  array (
    'base_url_admin' => 0,
    'base_tlp_admin' => 0,
    'current_control' => 0,
    'current_method' => 0,
    'lable' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_58f419b6561a60_98040804',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f419b6561a60_98040804')) {
function content_58f419b6561a60_98040804 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2583958f419b63946b1_17069282';
?>
<div id="menu" class="hidden-print hidden-xs  sidebar-white">
    <div id="sidebar-collapse-wrapper">
        <div id="brandWrapper">
            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
" class="display-block-inline pull-left logo">
                <img src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/images/logo.png" alt="">
            </a>
            
        </div>
        <div id="logoWrapper">
            <div id="logo">
                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/login/logout/" title="Logout" class="btn btn-sm btn-inverse pull-right"><i class="fa fa-fw fa-sign-out"></i></a>
            </div>
        </div>
        <ul class="menu list-unstyled hide" id="navigation_components"></ul>
        <ul class="menu list-unstyled hide" id="navigation_modules"></ul>
        <ul class="menu list-unstyled hide" id="navigation_modules_front"></ul>
        <ul class="menu list-unstyled" id="navigation_current_page">
            <li class="hasSubmenu">
                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/" class="glyphicons home ">
                    <i></i><span>Dashboard</span>
                </a>      
            </li>

            <li class="hasSubmenu <?php if ($_smarty_tpl->tpl_vars['current_control']->value == 'agency') {?>active<?php }?>">
                <a href="#sidebar-collapse-member" data-toggle="collapse" class="glyphicons user"><i></i><span>Agency management</span></a>
                <ul id="sidebar-collapse-member" class="collapse <?php if ($_smarty_tpl->tpl_vars['current_control']->value == 'agency') {?>in<?php }?>">

                    
                    <li <?php if ($_smarty_tpl->tpl_vars['current_method']->value == 'index') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/agency/"><i class="fa fa-edit"></i><?php echo $_smarty_tpl->tpl_vars['lable']->value['list_engycies'];?>
</a></li>

                    <li <?php if ($_smarty_tpl->tpl_vars['current_method']->value == 'add') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/agency/add/"><i class="fa fa-edit"></i><?php echo $_smarty_tpl->tpl_vars['lable']->value['add_angecy'];?>
</a></li>

                    
                    
                </ul>
            </li>

            <li class="hasSubmenu <?php if ($_smarty_tpl->tpl_vars['current_control']->value == 'tour') {?>active<?php }?>">
                <a href="#sidebar-collapse-projects" data-toggle="collapse"><i class="fa fa-list"></i>Tour management</a>
                <ul id="sidebar-collapse-projects" class="collapse <?php if ($_smarty_tpl->tpl_vars['current_control']->value == 'tour') {?>in<?php }?>">
                    <li ><a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/tour/"><i class="fa fa-edit"></i><?php echo $_smarty_tpl->tpl_vars['lable']->value['list_tours'];?>
</a></li>
                    <li ><a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/tour/add/"><i class="fa fa-edit"></i><?php echo $_smarty_tpl->tpl_vars['lable']->value['btn_add_tour'];?>
</a></li>
                </ul>
            </li>
            
            <li class="hasSubmenu <?php if ($_smarty_tpl->tpl_vars['current_control']->value == 'special') {?>active<?php }?>">
                <a href="#sidebar-collapse-special" data-toggle="collapse"><i class="fa fa-map-marker"></i>Special management</a>
                <ul id="sidebar-collapse-special" class="collapse <?php if ($_smarty_tpl->tpl_vars['current_control']->value == 'special') {?>in<?php }?>">
                    <li ><a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/special/items/"><i class="fa fa-edit"></i><?php echo $_smarty_tpl->tpl_vars['lable']->value['list_items'];?>
</a></li>
                    <li ><a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/special/"><i class="fa fa-edit"></i><?php echo $_smarty_tpl->tpl_vars['lable']->value['add'];?>
</a></li>
                </ul>
            </li>

            <li class="hasSubmenu <?php if ($_smarty_tpl->tpl_vars['current_control']->value == 'blogcat' || $_smarty_tpl->tpl_vars['current_control']->value == 'blogs' || $_smarty_tpl->tpl_vars['current_control']->value == 'toursuggestion') {?>active<?php }?>">
                <a href="#sidebar-collapse-mail" data-toggle="collapse"><i class="fa fa-list"></i>Blog management</a>
                <ul id="sidebar-collapse-mail" class="collapse <?php if ($_smarty_tpl->tpl_vars['current_control']->value == 'blogcat' || $_smarty_tpl->tpl_vars['current_control']->value == 'blogs' || $_smarty_tpl->tpl_vars['current_control']->value == 'toursuggestion') {?>in<?php }?>">
                    <li <?php if ($_smarty_tpl->tpl_vars['current_control']->value == 'blogs') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/blogs/items/"><i class="fa fa-edit"></i> List items</a></li>
                    <li <?php if ($_smarty_tpl->tpl_vars['current_control']->value == 'blogcat') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/blogcat/items/"><i class="fa fa-edit"></i> Category</a></li>
                    <li <?php if ($_smarty_tpl->tpl_vars['current_control']->value == 'toursuggestion') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/toursuggestion/items/"><i class="fa fa-edit"></i> Tour suggestion</a></li>
                </ul>
            </li>


            <li class="hasSubmenu <?php if ($_smarty_tpl->tpl_vars['current_control']->value == 'experience') {?>active<?php }?>" >
                <a href="#sidebar-collapse-blogs" data-toggle="collapse" class="fa fa-thumbs-o-up"><i></i><span>Experience images</span></a>
                <ul id="sidebar-collapse-blogs" class="collapse">
                    <li ><a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/experience/"><i class="fa fa-edit"></i> List items</a></li>
                    <li ><a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/experience/add"><i class="fa fa-edit"></i> Add</a></li>
                </ul>
            </li>


            <li class="hasSubmenu <?php if ($_smarty_tpl->tpl_vars['current_control']->value == 'posting_request') {?>active<?php }?>">
                <a href="#sidebar-collapse-consulting" data-toggle="collapse" class="fa fa-pencil-square-o"><i></i><span>Yêu cầu đăng tour</span></a>
                <ul id="sidebar-collapse-consulting" class="collapse <?php if ($_smarty_tpl->tpl_vars['current_control']->value == 'posting_request') {?>in<?php }?>">
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/posting_request/"><i class="fa fa-edit"></i> Danh sách</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/posting_request/inactive"><i class="fa fa-edit"></i> Thùng rác</a></li>
                </ul>
            </li>


            <li class="hasSubmenu <?php if ($_smarty_tpl->tpl_vars['current_control']->value == 'callme') {?> active <?php }?>">
                <a href="#sidebar-collapse-pages" data-toggle="collapse" class="fa fa-phone-square"><i></i><span>Call me</span></a>
                <ul id="sidebar-collapse-pages" class="collapse <?php if ($_smarty_tpl->tpl_vars['current_control']->value == 'callme') {?> in <?php }?>">
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/callme/"><i class="fa fa-edit"></i> Danh sách</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/callme/inactive/"><i class="fa fa-edit"></i> Thùng rác</a></li>
                </ul>
            </li>


            <li class="hasSubmenu <?php if ($_smarty_tpl->tpl_vars['current_control']->value == 'visitor') {?>active<?php }?>">
                <a href="#sidebar-collapse-banners" data-toggle="collapse" class="glyphicons picture"><i></i><span>Visitor management</span></a>
                <ul id="sidebar-collapse-banners" class="collapse <?php if ($_smarty_tpl->tpl_vars['current_control']->value == 'visitor') {?>in<?php }?>">
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/visitor/"><i class="fa fa-list-ul"></i> Danh sách</a>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/visitor/inactive/"><i class="fa fa-list-ol"></i>Thùng rác</a></li>
                </ul>
            </li>

            <li class="hasSubmenu <?php if ($_smarty_tpl->tpl_vars['current_control']->value == 'language' || $_smarty_tpl->tpl_vars['current_control']->value == 'tourcat' || $_smarty_tpl->tpl_vars['current_control']->value == 'general' || $_smarty_tpl->tpl_vars['current_control']->value == 'tourlocation' || $_smarty_tpl->tpl_vars['current_control']->value == 'tourdestination') {?> active <?php }?>">

                <a href="#sidebar-collapse-maps" data-toggle="collapse" class="glyphicons settings"><i></i><span>Setting</span></a>
                <ul id="sidebar-collapse-maps" class="collapse <?php if ($_smarty_tpl->tpl_vars['current_control']->value == 'language' || $_smarty_tpl->tpl_vars['current_control']->value == 'tourcat' || $_smarty_tpl->tpl_vars['current_control']->value == 'general' || $_smarty_tpl->tpl_vars['current_control']->value == 'tourlocation' || $_smarty_tpl->tpl_vars['current_control']->value == 'tourdestination') {?> in <?php }?>">

                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/users/"><i class="fa fa-wrench"></i>Admin</a></li>

                    
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/pricepackage/items"><i class="fa fa-wrench"></i>Price management</a></li>
                    
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/banks/items/"><i class="fa fa-wrench"></i>Bank - ATM</a></li>
                    
                    <li <?php if ($_smarty_tpl->tpl_vars['current_control']->value == 'tourcat') {?> class="active" <?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/tourcat/viewnested"><i class="fa fa-wrench"></i>Tour category</a></li>
                    <li <?php if ($_smarty_tpl->tpl_vars['current_control']->value == 'tourdestination') {?> class="active" <?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/tourdestination/viewnested"><i class="fa fa-wrench"></i>Tour destination</a></li>
                    <li <?php if ($_smarty_tpl->tpl_vars['current_control']->value == 'tourlocation') {?> class="active" <?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/tourlocation/viewnested"><i class="fa fa-wrench"></i>Tour location</a></li>
                    <li <?php if ($_smarty_tpl->tpl_vars['current_control']->value == 'general') {?> class="active" <?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/general/items"><i class="fa fa-wrench"></i>General</a></li>
                    <li <?php if ($_smarty_tpl->tpl_vars['current_control']->value == 'language') {?> class="active" <?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/language/items"><i class="fa fa-wrench"></i>Biến chung</a></li>
    
                </ul>
            </li>
            <li class="hasSubmenu "> &nbsp; </li>
            <li class="hasSubmenu "> &nbsp; </li>
        </ul>

    </div>
</div>
<?php }
}
?>