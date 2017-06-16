<?php /* Smarty version 3.1.28-dev/21, created on 2017-06-14 11:18:00
         compiled from "C:\xampp\htdocs\customer\aline\application\modules\admin\views\users\add.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:327265940ff488c9b52_13794740%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ebe94c4da0cbad77c32320422a57aa1a2247352' => 
    array (
      0 => 'C:\\xampp\\htdocs\\customer\\aline\\application\\modules\\admin\\views\\users\\add.tpl',
      1 => 1497431873,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '327265940ff488c9b52_13794740',
  'variables' => 
  array (
    'alert' => 0,
    'lable' => 0,
    'action_url' => 0,
    'data' => 0,
    'roles' => 0,
    'vl' => 0,
    'base_tlp_admin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_5940ff4893cc99_12833316',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5940ff4893cc99_12833316')) {
function content_5940ff4893cc99_12833316 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '327265940ff488c9b52_13794740';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div id="content">

    <div class="innerLR">

        <?php if ($_smarty_tpl->tpl_vars['alert']->value != '') {?> <?php echo $_smarty_tpl->getSubTemplate ("notes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }?>
        
        <div class="widget">
            <div class="widget-head">
                <h4 class="heading"><?php echo $_smarty_tpl->tpl_vars['lable']->value['add_member'];?>
</h4>
            </div>
            <div class="widget-body innerAll inner-2x">
            
                <form class="form-horizontal margin-none" name="frm_data" id="frm_data" method="post" action="<?php echo $_smarty_tpl->tpl_vars['action_url']->value;?>
" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_id'];?>
" name="data[user_id]" />

                    <div class="form-group">
                        <label class="col-sm-2 control-label"><span class="red">* </span> <?php echo $_smarty_tpl->tpl_vars['lable']->value['username'];?>
</label>
                        <div class="col-sm-4">
                            <input type="text" name="data[user_name]" id="user_name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_name'];?>
" class="form-control" onblur="hideFieldRequire('valid_user_name')"/>
                            <span id="valid_user_name" class="red"></span>
                        </div>
                    </div>
                        
                    <div class="form-group">
                        <label class="col-sm-2 control-label"><span class="red">* </span> <?php echo $_smarty_tpl->tpl_vars['lable']->value['password'];?>
</label>
                        <div class="col-sm-4">
                            <input type="password" name="data[user_password]" id="user_password" value="" class="form-control" onblur="hideFieldRequire('valid_confirm_new_pwd')"/>
                            <span id="valid_user_password" class="red"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label"><span class="red">* </span> <?php echo $_smarty_tpl->tpl_vars['lable']->value['confirm_password'];?>
</label>
                        <div class="col-sm-4">
                            <input type="password" name="data[re-user_password]" id="re-user_password" value="" class="form-control" onblur="hideFieldRequire('valid_confirm_new_pwd')"/>
                            <span id="valid_confirm_new_pwd" class="red"></span>
                        </div>
                    </div>
                        
                    <div class="form-group">
                        <label class="col-sm-2 control-label"> <?php echo $_smarty_tpl->tpl_vars['lable']->value['full_name'];?>
</label>
                        <div class="col-sm-4">
                            <input type="text" name="data[user_fullname]" id="user_fullname" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_fullname'];?>
" class="form-control"/>
                            <span id="valid_user_fullname" class="red"></span>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-2 control-label"><span class="red">* </span> <?php echo $_smarty_tpl->tpl_vars['lable']->value['user_role'];?>
</label>
                        <div class="col-sm-4">
                            <select id="role_id" name="data[role_id]" class="form-control">
                            	<option value=""> --- <?php echo $_smarty_tpl->tpl_vars['lable']->value['select_option'];?>
 --- </option>
                            	<?php
$foreach_0_vl_sav['s_item'] = isset($_smarty_tpl->tpl_vars['vl']) ? $_smarty_tpl->tpl_vars['vl'] : false;
$_from = $_smarty_tpl->tpl_vars['roles']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['vl'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['vl']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['vl']->value) {
$_smarty_tpl->tpl_vars['vl']->_loop = true;
$foreach_0_vl_sav['item'] = $_smarty_tpl->tpl_vars['vl'];
?>
                                	<option value="<?php echo $_smarty_tpl->tpl_vars['vl']->value->role_id;?>
"> <?php echo $_smarty_tpl->tpl_vars['vl']->value->role_name;?>
</option>
                                <?php
$_smarty_tpl->tpl_vars['vl'] = $foreach_0_vl_sav['item'];
}
if ($foreach_0_vl_sav['s_item']) {
$_smarty_tpl->tpl_vars['vl'] = $foreach_0_vl_sav['s_item'];
}
?>
                            </select>
                            <span id="valid_role_id" class="red"></span>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-xs-2"> &nbsp; </div>
                        <div class="col-xs-2">
                            <button type="button" id="btnSaveAdminUser" class="btn btn-primary"> <?php echo $_smarty_tpl->tpl_vars['lable']->value['btn_save'];?>
 </button>
                        </div>
                    </div>
                </form>

            </div><!-- /.widget-body -->
        </div><!-- /.widget -->

    </div>    
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/js/login.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 language="javascript">
var require_username = require_input_field+" <?php echo $_smarty_tpl->tpl_vars['lable']->value['username'];?>
";
var passsword_not_match = "<?php echo $_smarty_tpl->tpl_vars['lable']->value['passsword_not_match'];?>
";
var username_invalid_there_space = "<?php echo $_smarty_tpl->tpl_vars['lable']->value['username_invalid_there_space'];?>
";
var require_role = require_input_field+" <?php echo $_smarty_tpl->tpl_vars['lable']->value['user_role'];?>
";


	$(document).ready(function () {
		
	});

<?php echo '</script'; ?>
><?php }
}
?>