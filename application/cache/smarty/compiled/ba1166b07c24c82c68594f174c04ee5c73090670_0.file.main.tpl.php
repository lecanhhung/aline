<?php /* Smarty version 3.1.28-dev/21, created on 2017-06-15 09:10:01
         compiled from "C:\xampp\htdocs\customer\aline\application\modules\admin\views\index\main.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:20740594232c94a1037_68958708%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba1166b07c24c82c68594f174c04ee5c73090670' => 
    array (
      0 => 'C:\\xampp\\htdocs\\customer\\aline\\application\\modules\\admin\\views\\index\\main.tpl',
      1 => 1497510601,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20740594232c94a1037_68958708',
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_594232c94fd841_20927258',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_594232c94fd841_20927258')) {
function content_594232c94fd841_20927258 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp\\htdocs\\customer\\aline\\application\\third_party\\Smarty\\plugins\\modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '20740594232c94a1037_68958708';
?>

<div class="row">
    <div class="col-md-8">


        <!-- //Row -->

        <!-- Widget	 -->
        <div class="widget">
            <div class="widget-head innerAll half">
                <h4 class="margin-none"><i class="fa fa-fw icon-star"></i> Trends</h4>
            </div>
            <!-- Widget -->
            <div class="widget-body innerAll inner-2x">
                <table class="table table-striped margin-none">
                    <thead>
                        <tr>
                            <th>Statistic</th>
                            <th class="text-center">Total</th>
                            <th class="text-right" style="width:150px;">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>1.</strong> Department</td>
                            <td class="text-center">12</td>
                            <td class="text-right"><?php echo smarty_modifier_date_format(time());?>
</td>
                        </tr>
                        <tr>
                            <td><strong>2.</strong> Top manager</td>
                            <td class="text-center">10</td>
                            <td class="text-right"><?php echo smarty_modifier_date_format(time());?>
</td>
                        </tr>
                        <tr>
                            <td><strong>3.</strong> Manager</td>
                            <td class="text-center">99</td>
                            <td class="text-right"><?php echo smarty_modifier_date_format(time());?>
</td>
                        </tr>
                        <tr>
                            <td><strong>4.</strong> Members - Staff</td>
                            <td class="text-center">99</td>
                            <td class="text-right"><?php echo smarty_modifier_date_format(time());?>
</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- // End Widget Body -->
        </div>
        <!-- // End Widget -->

        <!-- Widget -->


        <div class="row">
            <div class="col-sm-3">
                <div class="widget">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/product/list/" class="display-block bg-success innerAll text-center text-white"><i class="icon-briefcase-1 fa-5x"></i>
                    </a>
                    <div class="text-center innerAll">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/product/list/" class="strong">Call me</a>
                        <div class="clearfix"></div>
                        <!--<small class="text-center"><i class="fa fa-clock-o"></i> 5:15</small>-->
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="widget">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/member/" class="display-block bg-lightred innerAll text-center text-white"><i class="icon-user-2 fa-5x"></i>
                    </a>
                    <div class="text-center innerAll">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/member/" class="strong">Agency</a>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="widget">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/projects/" class="display-block bg-mustard innerAll text-center text-white"><i class="icon-cogs fa-5x"></i>
                    </a>
                    <div class="text-center innerAll">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/projects/" class="strong">Tours</a>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 ">
                <div class="widget">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/blogs/" class="display-block bg-gray border-bottom innerAll text-center"><i class="icon-paper-stack fa-5x"></i>
                    </a>
                    <div class="text-center innerAll">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/blogs/" class="strong">Blog</a>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- //  End Col -->

    <div class="col-md-4">
        <!-- Widget -->
        <div class="widget">
            <div class="bg-primary text-center innerAll">
                <div class="innerTB">
                    <h4 class="innerTB text-white">Total Tours</h4>
                    <div class="strong text-xlarge text-white">
                        <p class="innerB margin-none text-xlarge text-condensed strong"><i class="fa fa-th-large"></i> 1292</p>
                    </div>
                </div>
            </div>
            <div class="row row-merge">
                <div class="col-md-6">
                    <div class="text-center innerAll">
                        <p class="margin-none">Active</p>
                        <p class="lead check-none strong">0</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-center innerAll">
                        <p class="margin-none">Inactive</p>
                        <p class="lead margin-none strong">0</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Widget -->    

        <!-- Widget -->
        <div class="widget widget-body-gray">
            <!-- Widget Heading -->
            <div class="widget-head">
                <h4 class="heading glyphicons calendar"><i></i>Calendar</h4>
            </div>
            <!-- // Widget Heading END -->
            <div class="widget-body innerAll inner-2x">
                <div id="datepicker-inline"></div>
            </div>
        </div>
        <!-- // Widget END -->

    </div>
    <!-- //End Col -->
<?php }
}
?>