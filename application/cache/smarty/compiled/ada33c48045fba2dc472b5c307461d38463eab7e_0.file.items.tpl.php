<?php /* Smarty version 3.1.28-dev/21, created on 2017-05-03 10:11:18
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\admin\views\blogs\items.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:22767590990a6309244_14598567%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ada33c48045fba2dc472b5c307461d38463eab7e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\admin\\views\\blogs\\items.tpl',
      1 => 1491536362,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22767590990a6309244_14598567',
  'variables' => 
  array (
    'alert' => 0,
    'base_tlp_admin' => 0,
    'lable' => 0,
    'search' => 0,
    'base_url_admin' => 0,
    'current_control' => 0,
    'cat' => 0,
    'categories' => 0,
    'cc' => 0,
    'items' => 0,
    'item' => 0,
    'base_url' => 0,
    'links' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_590990a67c4fa4_95168165',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_590990a67c4fa4_95168165')) {
function content_590990a67c4fa4_95168165 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '22767590990a6309244_14598567';
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

    <?php if ($_smarty_tpl->tpl_vars['alert']->value != '') {
echo $_smarty_tpl->getSubTemplate ('notes.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
}?>
    <link href="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <div class="widget">
            <div class="widget-head">
                <h4 class="heading"><?php echo $_smarty_tpl->tpl_vars['lable']->value['list_items'];?>
</h4>
            </div>
            <div class="widget-body innerAll inner-2x">
                    <br />
                    <div class="box-search">
                        <form method="get" action="" name="box_search">
                            <div class="col-md-4 pad-left-0">
                                <input class="form-control" id="appendedInputButtons" type="text" name="q" id="q" value="<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
" placeholder="Nhập tiêu đề / nội dung" />
                            </div>
                            <div class="col-md-2 pad-left-0"><div class="input-group-btn"><button class="btn btn-default" type="submit"><strong><?php echo $_smarty_tpl->tpl_vars['lable']->value['search'];?>
</strong></button></div></div>
                        </form>
                        <div class="col-md-2 pull-right">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['lable']->value['post_new_blog'];?>
</a>    
                        </div>
                        <div class="separator"></div>
                    </div>
                    <br />
                    <div class="subtabs">
                        <ul class="list-inline">
                            <li class="all-request <?php if ($_smarty_tpl->tpl_vars['cat']->value == '' && $_smarty_tpl->tpl_vars['search']->value == '') {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/items/"><?php echo $_smarty_tpl->tpl_vars['lable']->value['all'];?>
</a></li>
                            
                            <?php
$foreach_0_cc_sav['s_item'] = isset($_smarty_tpl->tpl_vars['cc']) ? $_smarty_tpl->tpl_vars['cc'] : false;
$_from = $_smarty_tpl->tpl_vars['categories']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['cc'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['cc']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cc']->value) {
$_smarty_tpl->tpl_vars['cc']->_loop = true;
$foreach_0_cc_sav['item'] = $_smarty_tpl->tpl_vars['cc'];
?>
                                <li class="done-request <?php if ($_smarty_tpl->tpl_vars['cat']->value == $_smarty_tpl->tpl_vars['cc']->value['id']) {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/items/?cat=<?php echo $_smarty_tpl->tpl_vars['cc']->value['id'];?>
&q=<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['cc']->value['category'];?>
</a></li>
                            <?php
$_smarty_tpl->tpl_vars['cc'] = $foreach_0_cc_sav['item'];
}
if ($foreach_0_cc_sav['s_item']) {
$_smarty_tpl->tpl_vars['cc'] = $foreach_0_cc_sav['s_item'];
}
?>
                        </ul>
                    </div>
                    <br/>
                    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/deletemulti/" name="memberForm">
                        <table class="table list-items table-bordered table-condensed" id="dataTables-member">
                            <thead>
                                <tr>
                                    <th width="5%">&nbsp;</th>
                                    <th width="5%" class="text-center">ID</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['lable']->value['title'];?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['lable']->value['last_modify'];?>
</th>
                                    <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['lable']->value['hits'];?>
</th>
                                    <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['lable']->value['home_display'];?>
</th>
                                    <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['lable']->value['active'];?>
</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                            <?php
$foreach_1_item_sav['s_item'] = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_from = $_smarty_tpl->tpl_vars['items']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_1_item_sav['item'] = $_smarty_tpl->tpl_vars['item'];
?>
                                <tr class="parent-status">
                                    <td>
                                      <input name="checkAll[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" type="checkbox" />
                                    </td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['blog_sku'];?>
</td>
                                    <td>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/blog/<?php echo $_smarty_tpl->tpl_vars['item']->value['slug'];?>
" target="_blank"><?php echo stripslashes($_smarty_tpl->tpl_vars['item']->value['title']);?>
</a>
                                    </td>   
                                    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['last_update'],"%d-%m-%Y %H:%M");?>
</td>
                                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['item']->value['hits'];?>
</td>
                                    <td class="text-center" id="home-display-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                                        <input type="checkbox" name="display_home" class="display-home" rel="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['display_home'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['display_home'] == 1) {?> checked="checked"<?php }?> />
                                    </td>
                                    <td class="text-center update-status" id="status-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                                        <input type="checkbox" name="avail" class="avail" id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['avail'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['avail'] == 1) {?> checked="checked"<?php }?> />
                                    </td> 
                                    <td style="text-align:center;">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
&option=edit" class="btn btn-sm btn-success button_margin" title="Update "><i class="fa fa-pencil"></i></a>
                                    </td>
                                </tr>
                            <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_1_item_sav['item'];
}
if ($foreach_1_item_sav['s_item']) {
$_smarty_tpl->tpl_vars['item'] = $foreach_1_item_sav['s_item'];
}
?>

                                <tr>
                                    <td>
                                        <input name="checkAll" id="checkAll" value="1" type="checkbox" />
                                    </td>
                                    <td colspan="7">
                                        <button onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['lable']->value['are_you_sure_delete'];?>
')" data-placement="right" type="submit" class="ask btn btn-default" name="deleteMulti" id="deleteMulti"><?php echo $_smarty_tpl->tpl_vars['lable']->value['btn_delete'];?>
</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                    <div class="">            
                        <div class="pull-right">
                           <?php echo $_smarty_tpl->tpl_vars['links']->value;?>
 
                        </div>
                    </div>
                    <div class="clearfix"></div>
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
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/js/duy.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 language="javascript">

$(document).ready(function() { 
    $('#dataTables-lang').dataTable(); 

    $('.avail').on('click', function(e) {     
        
        var blog_id = $(this).attr('id');
        var status_id = $(this).val();
        
        $.ajax({
            url: base_url_admin + '/blogs/update_status/',
            type: 'POST',
            data: "id="+blog_id+"&s="+status_id,
            success: function(data){
                
                if(data == 1) {
                    if(status_id == 1) {
                        $(this).val(0);
                        $(this).removeAttr('checked');
                    } else {
                        $(this).val(1);
                        $(this).attr('checked', 'checked');
                    }
                    
                    event.preventDefault(); 
                }
            }
        });
        
    });
    
    
    $('.display-home').on('click', function(e) {     
        
        var blog_id = $(this).attr('rel');
        var display_home = $(this).val();
        
        $.ajax({
            url: base_url_admin + '/blogs/updateDisplayHome',
            type: 'POST',
            data: "id="+blog_id+"&d="+display_home,
            success: function(data){
                if(data == 1) {
                    if(display_home == 1) {
                        $(this).val(0);
                        $(this).removeAttr('checked');
                    } else {
                        $(this).val(1);
                        $(this).attr('checked', 'checked');
                    }
                    
                    event.preventDefault(); 
                }
            }
        });
        
    });

});

<?php echo '</script'; ?>
>
<?php }
}
?>