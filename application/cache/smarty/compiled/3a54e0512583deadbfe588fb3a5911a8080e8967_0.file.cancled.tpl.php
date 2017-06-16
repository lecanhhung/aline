<?php /* Smarty version 3.1.28-dev/21, created on 2017-04-15 04:11:37
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\home\views\tour\cancled.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3098258f1815950b4d2_79077650%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a54e0512583deadbfe588fb3a5911a8080e8967' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\home\\views\\tour\\cancled.tpl',
      1 => 1487300752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3098258f1815950b4d2_79077650',
  'variables' => 
  array (
    'lable' => 0,
    'tourInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_58f1815951f706_33821821',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f1815951f706_33821821')) {
function content_58f1815951f706_33821821 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3098258f1815950b4d2_79077650';
?>
<div class="tour-terms-booking space-4">
    <ul class="nav nav-pills">
            <li class="active"><a href="#book-tour" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_cancel'];?>
</a></li>
            <li><a href="#cancel-tour" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_change'];?>
</a></li>
            <li><a href="#note-tour" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_notice'];?>
</a></li>
    </ul>
    <section class="tab-content clearfix scrollbar-inner">
            <div class="tab-pane active" id="book-tour">
                    <?php echo $_smarty_tpl->tpl_vars['tourInfo']->value['change'];?>

            </div>
            <div class="tab-pane" id="cancel-tour">
                    <?php echo $_smarty_tpl->tpl_vars['tourInfo']->value['cancel'];?>

            </div>
            <div class="tab-pane" id="note-tour">
                    <?php echo $_smarty_tpl->tpl_vars['tourInfo']->value['notes'];?>

            </div>
    </section>
</div><?php }
}
?>