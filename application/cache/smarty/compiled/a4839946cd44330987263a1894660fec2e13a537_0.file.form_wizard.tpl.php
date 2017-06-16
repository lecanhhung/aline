<?php /* Smarty version 3.1.28-dev/21, created on 2017-05-08 08:49:28
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\admin\views\agency\form_wizard.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:9012591014f8669fa2_91198149%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4839946cd44330987263a1894660fec2e13a537' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\admin\\views\\agency\\form_wizard.tpl',
      1 => 1494226166,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9012591014f8669fa2_91198149',
  'variables' => 
  array (
    'base_url' => 0,
    'action_url' => 0,
    'option' => 0,
    'data' => 0,
    'lable' => 0,
    'pathLogo' => 0,
    'listPacke' => 0,
    'value' => 0,
    'packageList' => 0,
    'k' => 0,
    'i' => 0,
    'action_url1' => 0,
    'base_tlp_admin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_591014f89b30a1_58140774',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_591014f89b30a1_58140774')) {
function content_591014f89b30a1_58140774 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9012591014f8669fa2_91198149';
?>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/assets/data/ckeditor_full/ckeditor.js"><?php echo '</script'; ?>
>

<form enctype="multipart/form-data" class="form-horizontal" id="form_agency" action="<?php echo $_smarty_tpl->tpl_vars['action_url']->value;?>
" method="POST" role="form">
    <input type="hidden" name="option" id="option" value="<?php echo $_smarty_tpl->tpl_vars['option']->value;?>
" />
    <input type="hidden" name="primary" id="primary" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['agency_id'];?>
" />
    <input type="hidden" name="old[logo_url]" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['logo_url'];?>
">
    <input type="hidden" name="old[background_url]" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['background_url'];?>
">
    <input type="hidden" name="old[logo_home]" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['logo_home'];?>
">

    <div class="form-group">
        <label class="col-sm-2 control-label" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['login_email'];?>
</label>
        <div class="col-sm-6">
            <input class="form-control" id="login_email" name="data[email]" type="email" data-email="<?php echo $_smarty_tpl->tpl_vars['data']->value['email'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['email'];?>
" onChange="hideFieldRequire('#valid_login_email')">
            <span id="valid_login_email" class="red valid_login_email"></span>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['password'];?>
 <span class="red"> * </span></label>
        <div class="col-sm-6">
            <input class="form-control" id="password" name="data[password]" type="password" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['password'];?>
" onChange="hideFieldRequire('#valid_password')">
            <span id="valid_password" class="red"></span>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['confirm_password'];?>
<span class="red"> * </span></label>
        <div class="col-sm-6">
            <input class="form-control" id="password_retype" name="password_retype" type="password" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['password'];?>
" onChange="hideFieldRequire('#valid_password_retype')">
            <span id="valid_password_retype" class="red"></span>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label" for="title"></label>
        <div class="col-sm-2">
            <select name="data[avail]"  id="" class="form-control">
                <option <?php if ($_smarty_tpl->tpl_vars['data']->value['avail'] == 1) {?>selected="selected"<?php }?> value="1"> Unlock </option>
                <option <?php if ($_smarty_tpl->tpl_vars['data']->value['avail'] == 0) {?>selected="selected"<?php }?> value="0"> Block </option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['agency_name'];?>
<span class="red"> * </span></label>
        <div class="col-sm-6">
            <input class="form-control" id="agency_name" name="data[agency_name]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['agency_name'];?>
" onChange="hideFieldRequire('#valid_agency_name')" onkeyup="ChangeToSlug('agency_name');">
            <span id="valid_agency_name" class="red"></span>
        </div>
    </div>
    
    <div class="form-group">
    <label class="col-sm-2 control-label" for="slug">Slug</label>
    <div class="col-sm-6">
            <input type="text" name="data[slug]" id="slug" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['slug'];?>
" />
            <span id="valid_slug" class="red"></span>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['tax_number'];?>
</label>
        <div class="col-sm-6">
            <input class="form-control" id="tax_number" name="data[tax_number]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['tax_number'];?>
" placeholder="Có thể cung cấp sau">
        </div>
    </div>

    <div class="form-group check-file">
        <label class="col-sm-2 control-label" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['logo'];?>
 <span class="red"> * </span></label>
        <div class="col-sm-6 slim logo" data-label="Logo"  data-ratio="1:1" data-min-size="0,0" style='width:150px;height:150px;margin-left:12px;'>
            
            <?php if ($_smarty_tpl->tpl_vars['data']->value['logo_url'] != '') {?><img src="<?php echo $_smarty_tpl->tpl_vars['pathLogo']->value;
echo addslashes($_smarty_tpl->tpl_vars['data']->value['logo_url']);?>
" alt=""><?php }?>
            <input class="form-control" id="logo_url" name="logo_url" type="file" value="" required >
            <span id="valid_logo_url" class="red"></span>
        </div>
    </div> 

    <div class="form-group check-file">
        <label class="col-sm-2 control-label" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['logo_home'];?>
 </label>
        <div class="col-sm-6 slim logo_home" data-label="Drop your logo here"  data-ratio="62:15" data-min-size="0,0" style='width:620px;height:100px;margin-left:12px;'>
            <?php if ($_smarty_tpl->tpl_vars['data']->value['logo_home'] != '') {?><img src="<?php echo $_smarty_tpl->tpl_vars['pathLogo']->value;
echo addslashes($_smarty_tpl->tpl_vars['data']->value['logo_home']);?>
" alt=""><?php }?>
            <input class="form-control" id="logo_home" name="logo_home" type="file" value="" required >
            
        </div>
    </div>

    <div class="form-group check-file">
        <label class="col-sm-2 control-label" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['background'];?>
 <span class="red"> * </span></label>
        <div class="col-sm-6 slim background" data-label="Drop your background here"  data-ratio="16:9" data-min-size="0,0" style='width:64%; min-height:200px; margin-left:12px'>
            <?php if ($_smarty_tpl->tpl_vars['data']->value['background_url'] != '') {?><img src="<?php echo $_smarty_tpl->tpl_vars['pathLogo']->value;
echo addslashes($_smarty_tpl->tpl_vars['data']->value['background_url']);?>
" alt=""><?php }?>
            <input class="form-control" id="background_url" name="background_url" type="file" value="" required  >
            <span id="valid_background_url" class="red"></span>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['website'];?>
 <span class="red"> * </span></label>
        <div class="col-sm-8">
            <input class="form-control" id="website" name="data[website]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['website'];?>
" placeholder="http://" onChange="hideFieldRequire('#valid_website')">
            <span id="valid_website" class="red"></span>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['address'];?>
<span class="red"> * </span> </label>
        <div class="col-sm-8">
            <input class="form-control" id="address_get_invoice" name="data[address_get_invoice]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['address_get_invoice'];?>
" onChange="hideFieldRequire('#valid_address_get_invoice')">
            <span id="valid_address_get_invoice" class="red"></span>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['latitude'];?>
 - <?php echo $_smarty_tpl->tpl_vars['lable']->value['longtitude'];?>
 </label>
        <div class="col-sm-3">
            <input class="form-control" id="latitude" name="data[latitude]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['latitude'];?>
" onChange="hideFieldRequire('#valid_latitude')">
            <span id="valid_latitude" class="red"></span>
        </div>
        <div class="col-sm-3">
            <input class="form-control" id="latitude" name="data[longtitude]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['longtitude'];?>
" onChange="hideFieldRequire('#valid_longtitude')">
            <span id="valid_longtitude" class="red"></span>
        </div>    
    </div>    
        

    <div class="form-group">
        <label class="col-sm-2 control-label" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['contact_email'];?>
<span class="red"> * </span> </label>
        <div class="col-sm-8">
            <input class="form-control" id="contact_email" name="data[contact_email]" type="email" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['contact_email'];?>
" onChange="hideFieldRequire('#valid_contact_email')">
            <span id="valid_contact_email" class="red"></span>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['phone_number'];?>
<span class="red"> * </span> </label>
        <div class="col-sm-8">
            <input class="form-control" id="phone" name="data[phone]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['phone'];?>
" onChange="hideFieldRequire('#valid_phone')">
            <span id="valid_phone" class="red"></span>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['hotline'];?>
 </label>
        <div class="col-sm-8">
            <input class="form-control" id="hotline" name="data[hotline]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['hotline'];?>
">
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['description'];?>
<span class="red"> * </span> </label>
        <div class="col-sm-8">
            <textarea class="form-control" id="description" name="data[description]" onChange="hideFieldRequire('#valid_description)"><?php echo $_smarty_tpl->tpl_vars['data']->value['description'];?>
</textarea>
            <span class="ghichu pull-right"><span class="count-char">0</span>-2000 ký tự</span>
            <span id="valid_description" class="red"></span>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['facebook_link'];?>
 </label>
        <div class="col-sm-8">
            <input class="form-control" id="facebook" name="data[facebook]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['facebook'];?>
">
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['youtube_link'];?>
 </label>
        <div class="col-sm-8">
            <input class="form-control" id="youtue" name="data[youtube]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['youtube'];?>
">
        </div>
    </div>
    
    
    <div class="form-group">
        <label class="col-sm-2 control-label" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['package'];?>
 </label>
        <div class="col-sm-3">
            <select name="data[package_id]" id="package_id" class="form-control" onChange="validPackage()">
                <?php
$foreach_0_value_sav['s_item'] = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$_from = $_smarty_tpl->tpl_vars['listPacke']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$foreach_0_value_sav['item'] = $_smarty_tpl->tpl_vars['value'];
?>
                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['package_id'] == $_smarty_tpl->tpl_vars['value']->value['package_id']) {?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['value']->value['package_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['package_name'];?>
</option>
                <?php
$_smarty_tpl->tpl_vars['value'] = $foreach_0_value_sav['item'];
}
if ($foreach_0_value_sav['s_item']) {
$_smarty_tpl->tpl_vars['value'] = $foreach_0_value_sav['s_item'];
}
?>
                
            </select>

        </div>
        <label class="col-sm-2 control-label" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['expired_date'];?>
 </label>
        <div class="col-sm-3">
            <input class="form-control" id="expired_date" name="data[expired_date]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['expired_date'];?>
">
            
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <label class="col-sm-2 control-label" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['isoutstanding'];?>
 </label>
            <div class="col-sm-1 ">
                <input class="form-control" data-a_id="<?php echo $_smarty_tpl->tpl_vars['data']->value['agency_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['data']->value['isoutstanding'] == 1) {?>checked="checked"<?php }?> id="isoutstanding" name="data[isoutstanding]" type="checkbox" value="1">
            </div>
            <span id="valid_isoutstanding" class="red"></span>
        </div>     
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['monthly_report_email'];?>
 <span class="red"> * </span></label>
        <div class="col-sm-8">
            <input class="form-control" id="monthly_report_email_1" name="data[monthly_report_email_1]" type="email" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['monthly_report_email_1'];?>
" onChange="hideFieldRequire('#valid_monthly_report_email_1')" >
            <span id="valid_monthly_report_email_1" class="red"></span>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label" for="title"></label>
        <div class="col-sm-8">
           <input class="form-control" id="monthly_report_email_2" name="data[monthly_report_email_2]" type="email" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['monthly_report_email_2'];?>
 " onChange="hideFieldRequire('#valid_monthly_report_email_2')">
            <span id="valid_monthly_report_email_2" class="red"></span>
       </div>
   </div>

   <div class="form-group">
        <label class="col-sm-2 control-label" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['confirm_email'];?>
</label>
        <div class="col-sm-1">
           <input class="form-control " id="confirm" name="data[confirm]"  <?php if ($_smarty_tpl->tpl_vars['data']->value['confirm'] == 1) {?>checked="checked"<?php }?> type="checkbox" value="1">
       </div>
   </div>

    <br/>
    <hr/>
    <br/>

   <div class="form-group">
        <label class="col-sm-2 control-label" ><?php echo $_smarty_tpl->tpl_vars['lable']->value['seo_title'];?>
</label>
        <div class="col-sm-8">
            <input name="data[seo_title]" id="seo_title" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['seo_title'];?>
" class="form-control" maxlength="80" />
            <p class="help-block italic font_12"></p>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label"><?php echo $_smarty_tpl->tpl_vars['lable']->value['seo_desc'];?>
</label>
        <div class="col-sm-8">
            <textarea name="data[seo_description]" id="seo_description" class="col-md-6 form-control"><?php echo $_smarty_tpl->tpl_vars['data']->value['seo_description'];?>
</textarea>
            <p class="help-block"></p>
        </div>
    </div>


    <button  type="button" id="btn_cancel" class="btn btn-lg btn-default col-sm-offset-2"><i class="fa fa-close"><?php echo $_smarty_tpl->tpl_vars['lable']->value['btn_cancel'];?>
</i></button>
    <button  type="button" id="btn_submit" class="btn btn-lg btn-primary col-sm-offset-2"><i class="fa fa-check-circle"> <?php echo $_smarty_tpl->tpl_vars['lable']->value['btn_submit'];?>
</i></button>

</form>

<div class="form-group list_brands">
        <label class="col-sm-2 control-label" for="title"></label>
        <div class="col-sm-8">
            <?php
$foreach_1_value_sav['s_item'] = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$foreach_1_value_sav['s_key'] = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_from = $_smarty_tpl->tpl_vars['packageList']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['value']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$foreach_1_value_sav['item'] = $_smarty_tpl->tpl_vars['value'];
?>
            <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable($_smarty_tpl->tpl_vars['k']->value+1, null, 0);?>
            <a href="#" class="review_brand" data-toggle="modal" data-target="#review-modal-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo sprintf($_smarty_tpl->tpl_vars['lable']->value['review_brand'],$_smarty_tpl->tpl_vars['i']->value);?>
</a><br/>
            <div id="review-modal-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content brand-review"> 
                        <button type="button" class="close" data-dismiss="modal">&times;</button> 
                        
                        <div class="form-group">
                            <h3><?php echo $_smarty_tpl->tpl_vars['value']->value['brand_name'];?>
</h3>
                            <p class="address"><?php echo $_smarty_tpl->tpl_vars['value']->value['address'];?>
</p>
                            <p class="phone"><?php echo $_smarty_tpl->tpl_vars['value']->value['phone'];?>
</p>
                            <p class="hotline"> <span class="hot"><?php echo $_smarty_tpl->tpl_vars['lable']->value['hotline'];?>
</span> : <?php echo $_smarty_tpl->tpl_vars['value']->value['hotline'];?>
</p>
                            <p class="email"><?php echo $_smarty_tpl->tpl_vars['value']->value['email'];?>
</p>
                            <p class="latitude"><?php echo $_smarty_tpl->tpl_vars['value']->value['latitude'];?>
</p>
                            <p class="longtitude"><?php echo $_smarty_tpl->tpl_vars['value']->value['longtitude'];?>
</p>
                            <div class="button">
                                <button class="btn btn-default btn-del" id="btn-del-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" data-id=<?php echo $_smarty_tpl->tpl_vars['value']->value['brand_id'];?>
 data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['lable']->value['btn_delete'];?>
</button>
                                <button class="btn btn-default btn-edit" data-toggle="modal" data-target="#form-edit-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['lable']->value['btn_edit'];?>
</button>
                            </div>
                        </div>

                    </div>
                </div> 
            </div>

            <div id="form-edit-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" class="modal fade brand_modal form-edit"  role="dialog">
                <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['edit_brand'];?>
</h4>
                            </div>
                            <div class="modal-body">
                                <div class="col-sm-12">
                                    <form  id="form_brand_edit-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" action="<?php echo $_smarty_tpl->tpl_vars['action_url1']->value;?>
" method="POST" role="form">
                                        <input type="hidden" name="data[agency_id]" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['agency_id'];?>
">
                                        <input type="hidden" name="data[brand_id]"  value="<?php echo $_smarty_tpl->tpl_vars['value']->value['brand_id'];?>
">
                                        <input type="hidden" name="option" value="edit">

                                        <div class="form-group">
                                            <input class="form-control" name="data[brand_name]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['brand_name'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['lable']->value['brand_name'];?>
" >
                                         </div>

                                        <div class="form-group">
                                            <input class="form-control" name="data[address]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['address'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['lable']->value['address'];?>
">
                                        </div>

                                        <div class="form-group">
                                            <input class="form-control" name="data[phone]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['phone'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['lable']->value['phone_number'];?>
">
                                        </div>

                                        <div class="form-group">
                                            <input class="form-control" name="data[hotline]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['hotline'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['lable']->value['hotline'];?>
">
                                        </div>

                                        <div class="form-group">
                                            <input class="form-control" name="data[email]" type="email" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['email'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['lable']->value['email'];?>
">
                                        </div>
                                        
                                        <div class="form-group">
                                            <input class="form-control" name="data[latitude]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['latitude'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['lable']->value['latitude'];?>
">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="data[longtitude]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['longtitude'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['lable']->value['longtitude'];?>
">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" id="btn-edit-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" class="btn btn-primary btn-edit" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['lable']->value['btn_agree'];?>
</button>
                            </div>
                        </div>
                </div>
            </div>


            <?php
$_smarty_tpl->tpl_vars['value'] = $foreach_1_value_sav['item'];
}
if ($foreach_1_value_sav['s_item']) {
$_smarty_tpl->tpl_vars['value'] = $foreach_1_value_sav['s_item'];
}
if ($foreach_1_value_sav['s_key']) {
$_smarty_tpl->tpl_vars['k'] = $foreach_1_value_sav['s_key'];
}
?> <!-- end foreach -->
            <br>
           <a href="#" class="add_brand" data-toggle="modal" data-target="#brand_modal"><?php echo $_smarty_tpl->tpl_vars['lable']->value['add_brand'];?>
</a>
            
    
        </div>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/js/egency.js"><?php echo '</script'; ?>
>
</div>

<div id="brand_modal" class="modal fade brand_modal" role="dialog">
    <div class="modal-dialog modal-sm">

        <!-- Modal content-->
       
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['add_brand'];?>
</h4>
                </div>
                <div class="modal-body">
                    <div class="col-sm-12">
                        <form  id="form_brand" action="<?php echo $_smarty_tpl->tpl_vars['action_url1']->value;?>
" method="POST" role="form">
                            <input type="hidden" name="data[agency_id]" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['agency_id'];?>
">
                            <input type="hidden" name="data[brand_id]" value="">
                            <div class="form-group">
                                <input class="form-control" id="brand_name" name="data[brand_name]" type="text"  placeholder="<?php echo $_smarty_tpl->tpl_vars['lable']->value['brand_name'];?>
" onChange="hideFieldRequire('#valid_brand_name')">
                                <span id="valid_brand_name" class="red"></span>
                            </div>

                            <div class="form-group">
                                <input class="form-control" id="brand_address" name="data[address]" type="text"  placeholder="<?php echo $_smarty_tpl->tpl_vars['lable']->value['address'];?>
">
                            </div>

                            <div class="form-group">
                                <input class="form-control" id="brand_phone" name="data[phone]" type="text"  placeholder="<?php echo $_smarty_tpl->tpl_vars['lable']->value['phone_number'];?>
">
                            </div>

                            <div class="form-group">
                                <input class="form-control" id="brand_hotline" name="data[hotline]" type="text"  placeholder="<?php echo $_smarty_tpl->tpl_vars['lable']->value['hotline'];?>
">
                            </div>

                            <div class="form-group">
                                <input class="form-control" id="brand_email" name="data[email]" type="email"  placeholder="<?php echo $_smarty_tpl->tpl_vars['lable']->value['email'];?>
">
                            </div>
                            
                            <div class="form-group">
                                <input class="form-control" id="brand_latitude" name="data[latitude]" type="text"  placeholder="<?php echo $_smarty_tpl->tpl_vars['lable']->value['latitude'];?>
">
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="brand_longtitude" name="data[longtitude]" type="text"  placeholder="<?php echo $_smarty_tpl->tpl_vars['lable']->value['longtitude'];?>
">
                            </div>

                        </form>
                    </div>
                </div>
                
                <div class="modal-footer">
                    <button type="button" id="btn-brand" class="btn btn-primary" ><?php echo $_smarty_tpl->tpl_vars['lable']->value['btn_agree'];?>
</button>
                </div>
            </div>

    </div>
</div><?php }
}
?>