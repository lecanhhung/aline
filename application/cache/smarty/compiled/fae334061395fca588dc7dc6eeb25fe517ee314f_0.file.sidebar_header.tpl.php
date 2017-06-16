<?php /* Smarty version 3.1.28-dev/21, created on 2017-06-08 06:31:29
         compiled from "C:\xampp\htdocs\customer\aline\application\modules\admin\views\sidebar_header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:307525938d321efa727_02245882%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fae334061395fca588dc7dc6eeb25fe517ee314f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\customer\\aline\\application\\modules\\admin\\views\\sidebar_header.tpl',
      1 => 1483513134,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '307525938d321efa727_02245882',
  'variables' => 
  array (
    'base_tlp_admin' => 0,
    'user_data' => 0,
    'base_url_admin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_5938d321f011b5_00288766',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5938d321f011b5_00288766')) {
function content_5938d321f011b5_00288766 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '307525938d321efa727_02245882';
?>
<nav class="navbar hidden-print main " role="navigation">
    <div class="navbar-header pull-left">
        <div class="user-action user-action-btn-navbar pull-left border-right" id="btn_navbar">
            <button class="btn btn-sm btn-navbar btn-inverse btn-stroke"><i class="fa fa-bars fa-2x"></i>
            </button>
        </div>
    </div>
    <ul class="main pull-right ">
        <li class="dropdown username">
            <a href="" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/assets/images/people/35/2.jpg" class="img-circle"
                     width="30" /><?php echo $_smarty_tpl->tpl_vars['user_data']->value->adminLogin;?>

                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu pull-right">
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/login/logout/" class="glyphicons lock no-ajaxify"><i></i>Logout</a>
                </li>
            </ul>
        </li>
    </ul>
    <div class="navbar-collapse collapse">
        &nbsp;
    </div>
</nav><?php }
}
?>