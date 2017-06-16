<?php /* Smarty version 3.1.28-dev/21, created on 2017-04-17 03:14:05
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\admin\views\experience\add.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:814458f416dd65f4a8_27722299%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbbf6c210b259045999e38f9e442e1c407d6d8fc' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\admin\\views\\experience\\add.tpl',
      1 => 1492391533,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '814458f416dd65f4a8_27722299',
  'variables' => 
  array (
    'base_tlp_front' => 0,
    'alert' => 0,
    'task' => 0,
    'lable' => 0,
    'base_url_admin' => 0,
    'current_control' => 0,
    'infoTour' => 0,
    'data_image' => 0,
    'key' => 0,
    'i' => 0,
    'vl' => 0,
    'pathThumb' => 0,
    'j' => 0,
    'base_tlp_admin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_58f416ddb3b576_96256740',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f416ddb3b576_96256740')) {
function content_58f416ddb3b576_96256740 ($_smarty_tpl) {
if (!is_callable('smarty_function_math')) require_once 'D:\\xampp\\htdocs\\airtrippy\\application\\third_party\\Smarty\\plugins\\function.math.php';

$_smarty_tpl->properties['nocache_hash'] = '814458f416dd65f4a8_27722299';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_front']->value;?>
/js/jquery-ui.js"><?php echo '</script'; ?>
>

<div id="content">

	<?php echo $_smarty_tpl->getSubTemplate ("sidebar_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<?php echo $_smarty_tpl->getSubTemplate ("breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
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

			<div class="form-group custom-lable">
				<label class="control-label text-blue" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['title_exp'];?>
</label>
				<button type="button" class="btn btn-primary btn_add_image pull-right" name="service"><i class="fa fa-fw fa-plus-circle"></i> <?php echo $_smarty_tpl->tpl_vars['lable']->value['add_other'];?>
</button>			
			</div>
			<div class="widget-body innerAll inner-2x agency-add" id="add-image">

				<form class="form-horizontal margin-none" id="tourForm" name="tourForm" action="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['current_control']->value;?>
/process" method="post">
					<?php echo '<script'; ?>
>
						
						function handleImageRemoval(data) {
							var image_id = data.meta.id; 
							var url = base_url_admin +'/experience/removeImage/';

							$.post(url, {image_id: image_id}, function(data){
								if(data == 1){
									$('#add-image').load(location.href + " #tourForm", function(){
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
					<!-- <div class="form-group">
						<label class="control-label text-blue" for="title"><?php echo $_smarty_tpl->tpl_vars['lable']->value['title_exp'];?>
</label>
						<button type="button" class="btn btn-primary btn_add_image pull-right" name="service"><i class="fa fa-fw fa-plus-circle"></i> <?php echo $_smarty_tpl->tpl_vars['lable']->value['add_other'];?>
</button>			
					</div> -->
					<div class="form-group">
						<label class="col-md-2 control-label" for="primary"><?php echo $_smarty_tpl->tpl_vars['lable']->value['choose_tour'];?>
 (*)</label>
						<div class="col-md-8">
							<input type="text" class="form-control txtsearch" placeholder="<?php echo $_smarty_tpl->tpl_vars['lable']->value['choose_tour'];?>
" name="s" id="search-default" value="<?php echo $_smarty_tpl->tpl_vars['infoTour']->value['title'];?>
" required  />
							<input type="hidden" class="vl-search" name="tour_id" id="tour_id" value="<?php echo $_smarty_tpl->tpl_vars['infoTour']->value['tour_id'];?>
" />
							<span id="valid_search-default" class="red"></span>
						</div>
					</div>

					<div class="container-custom">
						<div class="row cus-image">
							<?php if (count($_smarty_tpl->tpl_vars['data_image']->value) > 0) {?>
							<?php
$foreach_0_vl_sav['s_item'] = isset($_smarty_tpl->tpl_vars['vl']) ? $_smarty_tpl->tpl_vars['vl'] : false;
$foreach_0_vl_sav['s_key'] = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_from = $_smarty_tpl->tpl_vars['data_image']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['vl'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['vl']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['vl']->value) {
$_smarty_tpl->tpl_vars['vl']->_loop = true;
$foreach_0_vl_sav['item'] = $_smarty_tpl->tpl_vars['vl'];
?>
							<?php $_smarty_tpl->tpl_vars["i"] = new Smarty_Variable($_smarty_tpl->tpl_vars['key']->value+1, null, 0);?>
							<div class="col-sm-6 row-image " id="row-image-<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" >
								<div class="parent-image">
									<div class="slim image" data-did-upload="imageUpload"  data-meta-tour-id="<?php echo $_smarty_tpl->tpl_vars['infoTour']->value['tour_id'];?>
" data-meta-id="<?php echo $_smarty_tpl->tpl_vars['vl']->value['image_id'];?>
" data-did-remove="handleImageRemoval" data-service="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/experience/uploadimage" data-label=""    data-ratio="3:2" style='width: 345px; height:220px '>
										<?php if ($_smarty_tpl->tpl_vars['vl']->value['path_image'] != '') {?>
										<img src="<?php echo $_smarty_tpl->tpl_vars['pathThumb']->value;
echo $_smarty_tpl->tpl_vars['vl']->value['path_image'];?>
" alt="">
										<?php }?>
										<input class="form-control image_url" name="image"  type="file" value="" required >	
									</div>
									<span class="red valid_image "></span>
									
								</div>

							</div>
							<?php
$_smarty_tpl->tpl_vars['vl'] = $foreach_0_vl_sav['item'];
}
if ($foreach_0_vl_sav['s_item']) {
$_smarty_tpl->tpl_vars['vl'] = $foreach_0_vl_sav['s_item'];
}
if ($foreach_0_vl_sav['s_key']) {
$_smarty_tpl->tpl_vars['key'] = $foreach_0_vl_sav['s_key'];
}
?>

							<?php echo smarty_function_math(array('assign'=>'j','equation'=>"x + y",'x'=>count($_smarty_tpl->tpl_vars['data_image']->value),'y'=>1),$_smarty_tpl);?>

							<div class="col-sm-6 row-image " id="row-image-<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
"></div>	

							<?php } else { ?>

							
							<div class="col-sm-6 row-image " id="row-image-1" >
								<div class="parent-image">
									<div class="slim image" data-did-upload="imageUpload" data-service="<?php echo $_smarty_tpl->tpl_vars['base_url_admin']->value;?>
/experience/uploadimage"  data-meta-tour-id="<?php echo $_smarty_tpl->tpl_vars['infoTour']->value['tour_id'];?>
" data-meta-id="" data-did-remove="handleImageRemoval"   data-ratio="3:2" style='width: 345px; height:220px '>
										<input class="form-control image_url" name="image"  type="file" value="" required >	
									</div>
									<span class="red valid_image "></span>
									
								</div>
							</div>

							<div class="col-sm-6 row-image" id="row-image-2"></div>	

							<?php }?>

						</div>
					</div>

					<div class="form-group">
						<button type="button" class="btn btn-primary cus-btn pull-right" name="service"><i class="fa fa-fw fa-check-circle"></i> Lưu</button>
					</div>

					<div id="row-image" class="hidden">
						<div class="col-sm-6 row-image "></div>
					</div> 

				</form>

				
			</div><!-- /.widget-body -->
		</div><!-- /.widget -->
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/css/slim.min.css" />
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_tlp_admin']->value;?>
/js/slim.kickstart.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>

	var image = countImage(); 
	var count = image.length; 
	

	$(document).ready(function() {
		$( "#search-default" ).autocomplete({
			source: base_url_admin + "/experience/autocomplete",

			select: function( event, ui ) { 
                // var custom_id = (typeof ui.item.agency  !== "undefined" && ui.item.agency != '') ? ui.item.agency : 'destination';
                
                $('.txtsearch').val(ui.item.title);
                $('.vl-search').val('');
                $( "#tour_id").val( ui.item.tour_id );

                window.location.replace(base_url_admin+'/experience/add/?id='+ui.item.tour_id); 

                return false;
            } 

        })
		.data( "ui-autocomplete" )._renderItem = function( ul, item ) {

			return $('<li></li>')
			.append('<div class="" id="'+item.tour_id+'">' + item.title + '</div>')
			.appendTo(ul);
		};
		/*
		$.each(image, function(index, el) {
			var dex = index + 1; 
			var image = $('#'+el+' .image_url').val();
			var status_image = $('#'+el+' .image').attr('data-state');
			if(image == '' && status_image == 'empty' ){
				$('#'+el+' .valid_image').html('<span>'+requireMsg+'</span>');
				ok = 0;
			}

		});
		*/

		$('.btn_add_image').click(function(event) {

			var count = $('.container-custom .row-image').length; 
			//alert(count);
			var url = base_url_admin + '/experience/form_image';
			var c = count + 1; 
			var tour_id = $('input[name=tour_id]').val(); 


			$('.hidden .row-image').attr('id', 'row-image-'+c); 
			var my_append = $('.hidden').html();

			$('.hidden .row-image').attr('id', ''); 

			if(count <=20){
				$('.container-custom .row').append(my_append);
				$.post(url,{tour_id: tour_id}, function(data){

					$('.container-custom #row-image-'+count).html(data).promise().done(function(){
						var url = base_tlp_admin + "/js/slim.kickstart.min.js";
						$.getScript(url);
					});
				})

			}

		});


		$('.cus-btn').click(function(event) {
			var ok = 1; 
			var value = $('#search-default').val(); 

			if(value == ''){
				$('#valid_search-default').html(requireMsg);
				ok = 0; 
			} 

			if(ok == 0 ) return false; 

			window.location.replace(base_url_admin+'/experience'); 


		});

		$('#search-default').on('change',function(event) {
			$('#valid_search-default').html('');
		});



	});
	



	function countImage(){
		var arr = []; 

		$('.container-custom .row-image').each(function(index, el) {
			var id = $(this).attr('id');
			arr.push(id);  
		});

		return (arr); 

	}

	
<?php echo '</script'; ?>
>

<?php }
}
?>