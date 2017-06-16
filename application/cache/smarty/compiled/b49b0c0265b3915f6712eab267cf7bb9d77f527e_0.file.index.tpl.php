<?php /* Smarty version 3.1.28-dev/21, created on 2017-05-12 11:45:27
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\user\views\index\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:268925915843761a698_77439417%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b49b0c0265b3915f6712eab267cf7bb9d77f527e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\user\\views\\index\\index.tpl',
      1 => 1491787148,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '268925915843761a698_77439417',
  'variables' => 
  array (
    'item' => 0,
    'default' => 0,
    'pathLogo' => 0,
    'base_url' => 0,
    'lable' => 0,
    'base_url_user' => 0,
    'agency_info' => 0,
    'tourCat' => 0,
    'key' => 0,
    'alert' => 0,
    'key_search' => 0,
    'cat' => 0,
    'avail' => 0,
    'listTour' => 0,
    'tour_id' => 0,
    'pathThumb' => 0,
    'base_tlp_user' => 0,
    'day_amount' => 0,
    'tourdays' => 0,
    'night_amount' => 0,
    'transform' => 0,
    'vl' => 0,
    'links' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_591584378d3981_91603783',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_591584378d3981_91603783')) {
function content_591584378d3981_91603783 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\modifier.replace.php';
if (!is_callable('smarty_modifier_getdaysnight')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\modifier.getdaysnight.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_getmostview')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\modifier.getmostview.php';
if (!is_callable('smarty_modifier_convert_vnd')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\modifier.convert_vnd.php';

$_smarty_tpl->properties['nocache_hash'] = '268925915843761a698_77439417';
?>

<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div id="page" class="template-background">
	<?php echo $_smarty_tpl->getSubTemplate ("menu_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 
	
	<?php if ($_smarty_tpl->tpl_vars['item']->value['background_url'] != '' && $_smarty_tpl->tpl_vars['item']->value['background_url'] != $_smarty_tpl->tpl_vars['default']->value['background_url']) {?>
	<div class="banner banner-agency">
		<div style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['pathLogo']->value;
echo $_smarty_tpl->tpl_vars['item']->value['background_url'];?>
)"></div>
	</div>
	<?php } else { ?>
	<div class="slim banner-agency background" data-push="true"  data-service="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/user/index/updatebackground" data-label="Background" data-size="850,850" data-ratio="16:9" >
		<?php if ($_smarty_tpl->tpl_vars['item']->value['background_url'] != '') {?>
		<img src="<?php echo $_smarty_tpl->tpl_vars['pathLogo']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['background_url'];?>
" alt="">
		<?php }?>
		<input class="form-control" id="background_url" name="background_url" type="file" value="" required >
	</div>
	<?php }?>
	<div class="container info-agency">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-3">
				<?php if ($_smarty_tpl->tpl_vars['item']->value['logo_url'] != '' && $_smarty_tpl->tpl_vars['item']->value['logo_url'] != $_smarty_tpl->tpl_vars['default']->value['logo_url']) {?>
				<div class="logo">
					<img src="<?php echo $_smarty_tpl->tpl_vars['pathLogo']->value;
echo $_smarty_tpl->tpl_vars['item']->value['logo_url'];?>
" alt="" border="0" />
				</div>
				<?php } else { ?>
				<div class="slim logo" data-label="Logo" data-push="true" data-service="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/user/index/updatelogo" data-size="650,650" data-ratio="1:1">
					<?php if ($_smarty_tpl->tpl_vars['item']->value['logo_url'] != '') {?>
					<img src="<?php echo $_smarty_tpl->tpl_vars['pathLogo']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['logo_url'];?>
" alt="">
					<?php }?>
					<input class="form-control" id="logo_url" name="logo_url" type="file" value="" required />
				</div>
				<?php }?>
			</div>
			<div class="col-xs-12 col-sm-9 col-md-6 space-2" style="padding-left:25px;">
				<h3><?php echo $_smarty_tpl->tpl_vars['item']->value['agency_name'];?>
</h3>
				<ul class="address list-unstyled">
					<li class="location"><?php echo $_smarty_tpl->tpl_vars['item']->value['address_get_invoice'];?>
</li>
					<li>
						<ul class="list-inline">
							<li><span><?php echo $_smarty_tpl->tpl_vars['lable']->value['hotline'];?>
:</span> <big><?php echo $_smarty_tpl->tpl_vars['item']->value['hotline'];?>
 </big></li>
							<li class="divider">-</li>
							<li><span><i class="fa fa-phone" aria-hidden="true"></i></span><?php echo $_smarty_tpl->tpl_vars['item']->value['phone'];?>
</li>
							<li></li>
							<?php if ($_smarty_tpl->tpl_vars['item']->value['website'] != '') {?><li><span><i class="fa fa-globe" aria-hidden="true"></i></span><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['website'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['website'];?>
</a> </li><?php }?>
							<li class="divider">-</li>
							<li><span><i class="fa fa-envelope" aria-hidden="true"></i></span><a href="mailto:<?php echo $_smarty_tpl->tpl_vars['item']->value['contact_email'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['contact_email'];?>
</a> </li>
							<?php if ($_smarty_tpl->tpl_vars['item']->value['facebook'] != '') {?><li class="facebook"><span><i class="fa fa-facebook" aria-hidden="true"></i></span><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['facebook'];?>
" target="_blank"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value['facebook'],'https://','');?>
</a></li><?php }?>
							<?php if ($_smarty_tpl->tpl_vars['item']->value['youtube'] != '') {?><li><span><i class="fa fa-youtube-play" aria-hidden="true"></i></span><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['youtube'];?>
" target="_blank"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value['youtube'],'https://','');?>
</a> </li><?php }?>
						</ul>
					</li>
				</ul>

			</div>
			
			
			<div class="col-xs-12 col-sm-3 col-md-3 button">
				<button type="button" class="btn btn-primary text-uppercase" data-toggle="modal" data-target="#create-tour"><?php echo $_smarty_tpl->tpl_vars['lable']->value['create_new_tour'];?>
</button>
				
				<div id="create-tour" class="modal fade" role="dialog">
					<div class="modal-dialog text-left">
						<div class="modal-content">
							<button type="button" class="btn btn-default close" data-dismiss="modal">Close</button>
							<div class="modal-body">
								<form action="<?php echo $_smarty_tpl->tpl_vars['base_url_user']->value;?>
/index/uploadtour/#upload-tour" role="form" method="POST" id="formCreateTour" enctype="multipart/form-data">
									<h3>Yêu cầu đăng tour <span>083 875 9743</span></h3>	
									<input type="hidden" name="data[agency_name]" value="<?php echo $_smarty_tpl->tpl_vars['agency_info']->value->agency_name;?>
" />	
									<input type="hidden" name="data[agency_id]"   value="<?php echo $_smarty_tpl->tpl_vars['agency_info']->value->agency_id;?>
" />								
									<div class="form-group">
										<select class="form-control" name="data[tour_cat_id]">
											<?php
$foreach_0_name_sav['s_item'] = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$foreach_0_name_sav['s_key'] = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$foreach_0_name_sav['s_name'] = isset($_smarty_tpl->tpl_vars['__foreach_name']) ? $_smarty_tpl->tpl_vars['__foreach_name'] : false;
$_from = $_smarty_tpl->tpl_vars['tourCat']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['__foreach_name'] = new Smarty_Variable(array('iteration' => 0));
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_name']->value['iteration']++;
$foreach_0_name_sav['item'] = $_smarty_tpl->tpl_vars['item'];
?>
											<?php if ($_smarty_tpl->tpl_vars['key']->value > 0) {?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['tour_cat_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['cat_name'];?>
</option>
											<?php }?>
											<?php
$_smarty_tpl->tpl_vars['item'] = $foreach_0_name_sav['item'];
}
if ($foreach_0_name_sav['s_item']) {
$_smarty_tpl->tpl_vars['item'] = $foreach_0_name_sav['s_item'];
}
if ($foreach_0_name_sav['s_key']) {
$_smarty_tpl->tpl_vars['key'] = $foreach_0_name_sav['s_key'];
}
if ($foreach_0_name_sav['s_name']) {
$_smarty_tpl->tpl_vars['__foreach_name'] = $foreach_0_name_sav['s_name'];
}
?>
											
										</select>
									</div>
									<div class="form-group">
										<label class="control-label">Upload <?php echo $_smarty_tpl->tpl_vars['lable']->value['info_tour'];?>
</label>
										<input type="file" name="file" class="form-control" placeholder="" />
										<p>Chấp nhận file doc/pdf/rar.zip, tối đa 10 Mb</p>
										<p class="note"><?php echo $_smarty_tpl->tpl_vars['lable']->value['agency_note_price_post'];?>
</p>
									</div>
									<div class="form-group">
										<label class="control-label" for="inputEmail"><?php echo $_smarty_tpl->tpl_vars['lable']->value['email'];?>
<span>*</span></label>
										<input type="email" name="data[email]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['email'];?>
" class="form-control" placeholder="" required />
									</div>
									<div class="form-group">
										<label class="control-label" for="inputTel"><?php echo $_smarty_tpl->tpl_vars['lable']->value['phone_number'];?>
<span>*</span></label>
										<input type="tel" name="data[phone]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['phone'];?>
" class="form-control"  placeholder="" required />
									</div>
									<div class="form-group">
										<label class="control-label" for="comment" ><?php echo $_smarty_tpl->tpl_vars['lable']->value['lable_message'];?>
</label>
										<textarea class="form-control" name="data[message]" rows="5" ></textarea>
										<p class="note">Chúng tôi sẽ liên lạc với bạn trong vòng 8 giờ làm việc</p>
									</div>
									<div class="form-group">
										<button type="submit" id="create-tour" class="btn btn-primary btn-block text-uppercase"><?php echo $_smarty_tpl->tpl_vars['lable']->value['send'];?>
</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<div class="package-service">
		<a href="<?php echo $_smarty_tpl->tpl_vars['base_url_user']->value;?>
/pricing">Gói dịch vụ và bảng giá</a>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['alert']->value != '') {?>
	<?php echo $_smarty_tpl->getSubTemplate ("notes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<?php }?>
	<!-- filter -->
	<div class="container filters space-4">
		<div class="row">
			<form action="" method="GET" name="searchDefault">
				<div class="col-md-3">
					<input type="text" name="s" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['key_search']->value;?>
" placeholder="Search Tour" />
				</div>
				<div class="col-md-9 filter">
					<div class="col-md-5">
						<label style="margin-right:8px;"><?php echo $_smarty_tpl->tpl_vars['lable']->value['arrange'];?>
</label>
						<select class="form-control" name="c">
							<?php
$foreach_1_name_sav['s_item'] = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$foreach_1_name_sav['s_key'] = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$foreach_1_name_sav['s_name'] = isset($_smarty_tpl->tpl_vars['__foreach_name']) ? $_smarty_tpl->tpl_vars['__foreach_name'] : false;
$_from = $_smarty_tpl->tpl_vars['tourCat']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['__foreach_name'] = new Smarty_Variable(array('iteration' => 0));
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_name']->value['iteration']++;
$foreach_1_name_sav['item'] = $_smarty_tpl->tpl_vars['item'];
?>
							<option <?php if ($_smarty_tpl->tpl_vars['cat']->value == $_smarty_tpl->tpl_vars['item']->value['tour_cat_id']) {?> selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['item']->value['tour_cat_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['cat_name'];?>
</option>
							<?php
$_smarty_tpl->tpl_vars['item'] = $foreach_1_name_sav['item'];
}
if ($foreach_1_name_sav['s_item']) {
$_smarty_tpl->tpl_vars['item'] = $foreach_1_name_sav['s_item'];
}
if ($foreach_1_name_sav['s_key']) {
$_smarty_tpl->tpl_vars['key'] = $foreach_1_name_sav['s_key'];
}
if ($foreach_1_name_sav['s_name']) {
$_smarty_tpl->tpl_vars['__foreach_name'] = $foreach_1_name_sav['s_name'];
}
?>
						</select>
					</div>
					<div class="col-md-4">    
						<select class="form-control" name="order_by">
							<option value="date_add" >Ngày đăng gần nhất</option>
						</select>
					</div>
					<div class="col-md-3" style="padding-left:0px;">
						<select class="form-control" name="avail">
							<option <?php if ($_smarty_tpl->tpl_vars['avail']->value == '') {?> selected="selected" <?php }?> value="" ><?php echo $_smarty_tpl->tpl_vars['lable']->value['all'];?>
</option>
							<option <?php if ($_smarty_tpl->tpl_vars['avail']->value == 1) {?> selected="selected" <?php }?> value="1"><?php echo $_smarty_tpl->tpl_vars['lable']->value['is_show'];?>
</option>
							<option <?php if ($_smarty_tpl->tpl_vars['avail']->value == 0 && $_smarty_tpl->tpl_vars['avail']->value != '') {?> selected="selected" <?php }?> value="0"><?php echo $_smarty_tpl->tpl_vars['lable']->value['not_show'];?>
</option>
						</select>
					</div>        
				</div>	
			</form>
		</div>
	</div>
	<!-- tour -->
	<div class="tour-ajax">
		<div class="container manage-tour space-4">
			<?php
$foreach_2_name_sav['s_item'] = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$foreach_2_name_sav['s_key'] = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$foreach_2_name_sav['s_name'] = isset($_smarty_tpl->tpl_vars['__foreach_name']) ? $_smarty_tpl->tpl_vars['__foreach_name'] : false;
$_from = $_smarty_tpl->tpl_vars['listTour']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['__foreach_name'] = new Smarty_Variable(array('iteration' => 0));
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_name']->value['iteration']++;
$foreach_2_name_sav['item'] = $_smarty_tpl->tpl_vars['item'];
?>

			<?php $_smarty_tpl->tpl_vars["transform"] = new Smarty_Variable($_smarty_tpl->tpl_vars['item']->value['transport'], null, 0);?>
			<?php $_smarty_tpl->tpl_vars['tour_id'] = new Smarty_Variable($_smarty_tpl->tpl_vars['item']->value['tour_id'], null, 0);?>
			<?php $_smarty_tpl->tpl_vars['tourdays'] = new Smarty_Variable(smarty_modifier_getdaysnight($_smarty_tpl->tpl_vars['tour_id']->value), null, 0);?>
			<?php $_smarty_tpl->tpl_vars['day_amount'] = new Smarty_Variable($_smarty_tpl->tpl_vars['item']->value['day_amount'], null, 0);?>
			<?php $_smarty_tpl->tpl_vars['night_amount'] = new Smarty_Variable($_smarty_tpl->tpl_vars['item']->value['night_amount'], null, 0);?>	 
			<?php if ((isset($_smarty_tpl->tpl_vars['__foreach_name']->value['iteration']) ? $_smarty_tpl->tpl_vars['__foreach_name']->value['iteration'] : null) % 3 == 1) {?>
			<div class="row">
				<?php }?>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<div class="box box-vertical item-tour">
						<div class="box-header">
							<div class="box-picture">
								
								
								<img class="picture" src="<?php echo $_smarty_tpl->tpl_vars['pathThumb']->value;
echo $_smarty_tpl->tpl_vars['item']->value['path_image'];?>
" alt="">

								<?php if ($_smarty_tpl->tpl_vars['item']->value['avail'] == 1) {?>
								<div class="avail">
									<span class="status blue " data-avail="0" data-tour="<?php echo $_smarty_tpl->tpl_vars['item']->value['tour_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['lable']->value['is_show'];?>
</span>
								</div>
								<?php } else { ?>
								<div class="avail">
									<span class="status red " data-avail="1" data-tour=<?php echo $_smarty_tpl->tpl_vars['item']->value['tour_id'];?>
><?php echo $_smarty_tpl->tpl_vars['lable']->value['not_show'];?>
</span> 
								</div>
								<?php }?>
								
								<div class="tool">
									
									<a data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['tour_id'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['base_url_user']->value;?>
/index/ajaxremove/?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['tour_id'];?>
" data-toggle="confirmation" data-title="Delete?" data-placement="right" ><img src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_user']->value;?>
/images/icon-del.png" alt="" border="0" /></a>
									<ul class="list-unstyled">
										<li><?php echo $_smarty_tpl->tpl_vars['lable']->value['date_add'];?>
: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['date_add'],'%d-%m-%Y');?>
</li>
										<li><?php echo $_smarty_tpl->tpl_vars['lable']->value['lastest_show'];?>
: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['last_avail'],'%d-%m-%Y');?>
</li>
										<li><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_view'];?>
: <?php if ($_smarty_tpl->tpl_vars['item']->value['total'] == '') {?>0<?php } else {
echo $_smarty_tpl->tpl_vars['item']->value['total'];
}?></li>
										<li><?php echo $_smarty_tpl->tpl_vars['lable']->value['location_most_review'];?>
: <?php echo smarty_modifier_getmostview($_smarty_tpl->tpl_vars['item']->value['tour_id']);?>
</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="box-body">
							<div class="box-title">
								<h2><a class="tour-title" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/tour/<?php echo $_smarty_tpl->tpl_vars['item']->value['slug'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></h2>
								<p><?php echo $_smarty_tpl->tpl_vars['tourdays']->value[$_smarty_tpl->tpl_vars['day_amount']->value];?>
 <?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_day'];?>
 - <?php echo $_smarty_tpl->tpl_vars['tourdays']->value[$_smarty_tpl->tpl_vars['night_amount']->value];?>
 <?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_night'];?>
</p>
							</div>
							<div class="box-content">
								<div class="place-transport">
									<p class="place"><?php echo $_smarty_tpl->tpl_vars['item']->value['cat_name'];?>
</p>
									<p class="text-right">
										<?php
$foreach_3_vl_sav['s_item'] = isset($_smarty_tpl->tpl_vars['vl']) ? $_smarty_tpl->tpl_vars['vl'] : false;
$_from = $_smarty_tpl->tpl_vars['transform']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['vl'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['vl']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['vl']->value) {
$_smarty_tpl->tpl_vars['vl']->_loop = true;
$foreach_3_vl_sav['item'] = $_smarty_tpl->tpl_vars['vl'];
?>
										<?php echo $_smarty_tpl->tpl_vars['vl']->value;?>
	
										<?php
$_smarty_tpl->tpl_vars['vl'] = $foreach_3_vl_sav['item'];
}
if ($foreach_3_vl_sav['s_item']) {
$_smarty_tpl->tpl_vars['vl'] = $foreach_3_vl_sav['s_item'];
}
?>
										
									</p>
								</div>
								<div class="price">
									<p class="price-promotion"><?php echo smarty_modifier_convert_vnd($_smarty_tpl->tpl_vars['item']->value['price_promotion']);?>
</p>
									<p class="text-right"><del><?php echo smarty_modifier_convert_vnd($_smarty_tpl->tpl_vars['item']->value['price']);?>
</del></p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<?php if ((isset($_smarty_tpl->tpl_vars['__foreach_name']->value['iteration']) ? $_smarty_tpl->tpl_vars['__foreach_name']->value['iteration'] : null) % 3 == 0 || (isset($_smarty_tpl->tpl_vars['__foreach_name']->value['iteration']) ? $_smarty_tpl->tpl_vars['__foreach_name']->value['iteration'] : null) == count($_smarty_tpl->tpl_vars['listTour']->value)) {?>
			</div>
			<?php }?>

			<?php
$_smarty_tpl->tpl_vars['item'] = $foreach_2_name_sav['item'];
}
if ($foreach_2_name_sav['s_item']) {
$_smarty_tpl->tpl_vars['item'] = $foreach_2_name_sav['s_item'];
}
if ($foreach_2_name_sav['s_key']) {
$_smarty_tpl->tpl_vars['key'] = $foreach_2_name_sav['s_key'];
}
if ($foreach_2_name_sav['s_name']) {
$_smarty_tpl->tpl_vars['__foreach_name'] = $foreach_2_name_sav['s_name'];
}
?>
			
			
			
			<div class="row">
				<div class="pagination-wrapper text-center">
					<?php echo $_smarty_tpl->tpl_vars['links']->value;?>

					<a href="#" class="btn btn-default" data-toggle="modal" data-target="#create-tour">Airtrippy giúp bạn tạo tour</a>
				</div>				
			</div>

		</div>
	</div>
	<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



	<?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_user']->value;?>
/js/bootstrap-confirmation.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
		$(document).ready(function(){
			$('[data-toggle=confirmation]').confirmation({
				rootSelector: '[data-toggle=confirmation]',
      // other options
  });
		});
	<?php echo '</script'; ?>
><?php }
}
?>