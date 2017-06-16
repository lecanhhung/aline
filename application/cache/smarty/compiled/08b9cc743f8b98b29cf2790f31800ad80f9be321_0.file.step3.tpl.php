<?php /* Smarty version 3.1.28-dev/21, created on 2017-04-20 06:03:20
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\admin\views\tour\step3.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2769758f83308956db7_41652383%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08b9cc743f8b98b29cf2790f31800ad80f9be321' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\admin\\views\\tour\\step3.tpl',
      1 => 1490244855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2769758f83308956db7_41652383',
  'variables' => 
  array (
    'lable' => 0,
    'action_url' => 0,
    'option' => 0,
    'step' => 0,
    'id' => 0,
    'tour_id' => 0,
    'agency_id' => 0,
    'data_image' => 0,
    'value' => 0,
    'key' => 0,
    'i' => 0,
    'vl' => 0,
    'base_url_admin' => 0,
    'pathThumb' => 0,
    'j' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_58f83308b493c6_93161450',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f83308b493c6_93161450')) {
function content_58f83308b493c6_93161450 ($_smarty_tpl) {
if (!is_callable('smarty_function_math')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\function.math.php';

$_smarty_tpl->properties['nocache_hash'] = '2769758f83308956db7_41652383';
?>
<div class="form-group">
	
	<button type="button" class="btn btn-primary btn_add_image pull-right" name="service"><i class="fa fa-fw fa-plus-circle"></i> <?php echo $_smarty_tpl->tpl_vars['lable']->value['add_other'];?>
</button>			
</div>


<div id="parent-tab37">
<form class="form-horizontal margin-none" id="tourForm" name="tourForm" method="post" action="<?php echo $_smarty_tpl->tpl_vars['action_url']->value;?>
">
	<?php echo '<script'; ?>
>
		
			function handleImageRemoval(data) {
				var image_id = data.meta.id; 
			    var url = base_url_admin +'/tour/removeImage/';

			    $.post(url, {image_id: image_id}, function(data){
			    	if(data == 1){
			    		$("#parent-tab37").load(location.href + " #tourForm", function(){
			    			var url = base_tlp_admin + "/js/slim.kickstart.min.js";
			    			$.getScript(url);

			    		});
			    	}
			    });  

	        }	
	        function imageUpload(error, data, response) {
	        	
        		$('.slim').each(function(index, el) {
        			var val = $(this).find('input[type=hidden]').val() ;
        			if(val == response){
        				var id = $(this).closest('.row-image').attr('id');
        				//$('#'+ id).find('.slim').attr('data-meta-id', response);

        				$("#"+ id).load(location.href +' #'+id+' .parent-image', function(){
        					var url = base_tlp_admin + "/js/slim.kickstart.min.js";
        					$.getScript(url);
        				})	
        			}
        		});
	        }

        
    <?php echo '</script'; ?>
>


		    <input type="hidden" name="option" id="option" value="<?php echo $_smarty_tpl->tpl_vars['option']->value;?>
" />
		    <input type="hidden" name="step" id="step" value="<?php echo $_smarty_tpl->tpl_vars['step']->value;?>
" />
		    <input type="hidden" name="primary" id="primary" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" /> 

		    <input type="hidden" name="images[]" >
		    <input type="hidden" name="tour_id" value="<?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
">
		    <input type="hidden" name="agency_id" value="<?php echo $_smarty_tpl->tpl_vars['agency_id']->value;?>
">

			<div class="parent">
				<?php
$foreach_0_value_sav['s_item'] = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$_from = $_smarty_tpl->tpl_vars['data_image']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$foreach_0_value_sav['item'] = $_smarty_tpl->tpl_vars['value'];
?>
			    <input type="hidden" name="image_id[]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['image_id'];?>
">
			    <?php
$_smarty_tpl->tpl_vars['value'] = $foreach_0_value_sav['item'];
}
if ($foreach_0_value_sav['s_item']) {
$_smarty_tpl->tpl_vars['value'] = $foreach_0_value_sav['s_item'];
}
?>
			</div>
		    


		    <div class="form-group">
		    	<label class="control-label text-blue" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_image'];?>
 </label>
		    			
		    </div>

		    <div class="form-actions pull-right">
		    	

		    </div>


		    <div class="container-custom">
		    	<div class="row">
		    		<?php if (count($_smarty_tpl->tpl_vars['data_image']->value) > 0) {?>
		    		<?php
$foreach_1_vl_sav['s_item'] = isset($_smarty_tpl->tpl_vars['vl']) ? $_smarty_tpl->tpl_vars['vl'] : false;
$foreach_1_vl_sav['s_key'] = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_from = $_smarty_tpl->tpl_vars['data_image']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['vl'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['vl']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['vl']->value) {
$_smarty_tpl->tpl_vars['vl']->_loop = true;
$foreach_1_vl_sav['item'] = $_smarty_tpl->tpl_vars['vl'];
?>
		    		<?php $_smarty_tpl->tpl_vars["i"] = new Smarty_Variable($_smarty_tpl->tpl_vars['key']->value+1, null, 0);?>
		    		<div class="col-sm-6 row-image " id="row-image-<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" >
		    			
		    			<div class="parent-image">
		    				<div class="slim image" data-did-upload="imageUpload"  data-meta-tour-id="<?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
" data-meta-id="<?php echo $_smarty_tpl->tpl_vars['vl']->value['image_id'];?>
" data-did-remove="handleImageRemoval" data-service="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/tour/uploadimage" data-label=""  data-ratio="4:2" style='width: 345px; height:220px '>
		    					<?php if ($_smarty_tpl->tpl_vars['vl']->value['path_image'] != '') {?>
		    					<img src="<?php echo $_smarty_tpl->tpl_vars['pathThumb']->value;
echo $_smarty_tpl->tpl_vars['vl']->value['path_image'];?>
" alt="">
		    					<?php }?>
		    					<input class="form-control image_url" name="image"  type="file" value="" required >	
		    				</div>
		    				<span class="red valid_image "></span>
		    				<br/>
		    				<label for="description" class="control-label col-sm-6"><?php echo $_smarty_tpl->tpl_vars['lable']->value['description'];?>
</label>
		    				<textarea name="description[]" id="" cols="30" rows="10"><?php echo $_smarty_tpl->tpl_vars['vl']->value['description'];?>
</textarea>
		    			</div>
		    			
		    		</div>
		    		<?php
$_smarty_tpl->tpl_vars['vl'] = $foreach_1_vl_sav['item'];
}
if ($foreach_1_vl_sav['s_item']) {
$_smarty_tpl->tpl_vars['vl'] = $foreach_1_vl_sav['s_item'];
}
if ($foreach_1_vl_sav['s_key']) {
$_smarty_tpl->tpl_vars['key'] = $foreach_1_vl_sav['s_key'];
}
?>

		    		<?php echo smarty_function_math(array('assign'=>'j','equation'=>"x + y",'x'=>count($_smarty_tpl->tpl_vars['data_image']->value),'y'=>1),$_smarty_tpl);?>

		    		<div class="col-sm-6 row-image " id="row-image-<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
"></div>	

		    		<?php } else { ?>

		    		
		    		<div class="col-sm-6 row-image " id="row-image-1" >
		    			<div class="parent-image">
		    				<div class="slim image" data-did-upload="imageUpload" data-service="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/tour/uploadimage"  data-meta-tour-id="<?php echo $_smarty_tpl->tpl_vars['tour_id']->value;?>
" data-meta-id="" data-did-remove="handleImageRemoval"  data-ratio="4:2" style='width: 345px; height:220px '>
		    					<input class="form-control image_url" name="image"  type="file" value="" required >	
		    				</div>
		    				<span class="red valid_image "></span>
		    				<br/>
		    				<label for="description" class="control-label col-sm-6"><?php echo $_smarty_tpl->tpl_vars['lable']->value['description'];?>
</label>
		    				<textarea name="description[]" id="" cols="30" rows="10"></textarea>
		    			</div>
		    		</div>

		    		<div class="col-sm-6 row-image" id="row-image-2"></div>	

		    		<?php }?>
		    	</div>

		    </div>

		    <div id="row-image" class="hidden">
		    	<div class="col-sm-6 row-image "></div>
		    </div> 
		</form>


		
</div>



<?php }
}
?>