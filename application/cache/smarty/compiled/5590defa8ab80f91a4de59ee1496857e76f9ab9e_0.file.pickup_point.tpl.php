<?php /* Smarty version 3.1.28-dev/21, created on 2017-04-17 04:30:02
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\home\views\tour\pickup_point.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2106258f428aa4f2559_55419812%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5590defa8ab80f91a4de59ee1496857e76f9ab9e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\home\\views\\tour\\pickup_point.tpl',
      1 => 1492396198,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2106258f428aa4f2559_55419812',
  'variables' => 
  array (
    'lable' => 0,
    'pickups' => 0,
    'vl' => 0,
    'pic' => 0,
    'base_tlp_front' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_58f428aa5a40a4_08423940',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f428aa5a40a4_08423940')) {
function content_58f428aa5a40a4_08423940 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2106258f428aa4f2559_55419812';
?>

<div class="tour-place space-4">
  <h3><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_pickup_points'];?>
:</h3>
  <ul class="style-location list-unstyled">
    <?php
$foreach_0_test_sav['s_item'] = isset($_smarty_tpl->tpl_vars['vl']) ? $_smarty_tpl->tpl_vars['vl'] : false;
$foreach_0_test_sav['s_key'] = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$foreach_0_test_sav['s_name'] = isset($_smarty_tpl->tpl_vars['__foreach_test']) ? $_smarty_tpl->tpl_vars['__foreach_test'] : false;
$_from = $_smarty_tpl->tpl_vars['pickups']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['vl'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['vl']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['__foreach_test'] = new Smarty_Variable(array('index' => -1));
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['vl']->value) {
$_smarty_tpl->tpl_vars['vl']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_test']->value['index']++;
$foreach_0_test_sav['item'] = $_smarty_tpl->tpl_vars['vl'];
?>
    <li class="loc_pick"  data-lat="<?php echo $_smarty_tpl->tpl_vars['vl']->value['latitude'];?>
" data-long="<?php echo $_smarty_tpl->tpl_vars['vl']->value['longtitude'];?>
" data-id="<?php echo (isset($_smarty_tpl->tpl_vars['__foreach_test']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_test']->value['index'] : null);?>
"><a href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['vl']->value['address'];?>
</a></li>
    <?php
$_smarty_tpl->tpl_vars['vl'] = $foreach_0_test_sav['item'];
}
if ($foreach_0_test_sav['s_item']) {
$_smarty_tpl->tpl_vars['vl'] = $foreach_0_test_sav['s_item'];
}
if ($foreach_0_test_sav['s_key']) {
$_smarty_tpl->tpl_vars['key'] = $foreach_0_test_sav['s_key'];
}
if ($foreach_0_test_sav['s_name']) {
$_smarty_tpl->tpl_vars['__foreach_test'] = $foreach_0_test_sav['s_name'];
}
?>
  </ul>
  <div class="map text-center space-2 col-xs-12" id="map">
    
  </div>
  <p class="note space-2"><?php echo $_smarty_tpl->tpl_vars['lable']->value['note_pickup'];?>
</p>
</div>

<?php echo '<script'; ?>
>
    // var pickup_latitude = 10.792064;
    // var pickup_longtitude = 106.693054;

    var pickup_latitude = <?php echo $_smarty_tpl->tpl_vars['pickups']->value[0]['latitude'];?>
;
    var pickup_longtitude = <?php echo $_smarty_tpl->tpl_vars['pickups']->value[0]['longtitude'];?>
;

    
        
    $(document).ready(function() {

        function myLocations() {
            var locations = [
            
            <?php
$foreach_1_pic_sav['s_item'] = isset($_smarty_tpl->tpl_vars['pic']) ? $_smarty_tpl->tpl_vars['pic'] : false;
$_from = $_smarty_tpl->tpl_vars['pickups']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['pic'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['pic']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['pic']->value) {
$_smarty_tpl->tpl_vars['pic']->_loop = true;
$foreach_1_pic_sav['item'] = $_smarty_tpl->tpl_vars['pic'];
?>
            ['<?php echo $_smarty_tpl->tpl_vars['pic']->value['address'];?>
', <?php echo $_smarty_tpl->tpl_vars['pic']->value['latitude'];?>
, <?php echo $_smarty_tpl->tpl_vars['pic']->value['longtitude'];?>
],
            <?php
$_smarty_tpl->tpl_vars['pic'] = $foreach_1_pic_sav['item'];
}
if ($foreach_1_pic_sav['s_item']) {
$_smarty_tpl->tpl_vars['pic'] = $foreach_1_pic_sav['s_item'];
}
?>
            
            ]; 
            return locations;
          }
          
          function initMap() {
            if(pickup_latitude == '' || pickup_longtitude == '') {
              return;
            }
            var locations = myLocations();
            var latLng = new google.maps.LatLng(pickup_latitude, pickup_longtitude);
            var homeLatLng;

            var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 15,
              center: latLng,
              mapTypeId: google.maps.MapTypeId.ROADMAP, 
              scrollwheel:  false
            });

            var infowindow = new google.maps.InfoWindow(); 
            var marker, i;

            var bounds = map.getBounds();

            
            for (i = 0; i < locations.length; i++) { 

              homeLatLng = new google.maps.LatLng(locations[i][1], locations[i][2]);

              marker = new MarkerWithLabel({
                position: homeLatLng,
                map: map,
                labelContent: '',
                labelAnchor: new google.maps.Point(22, 0),
                labelClass: "labels",
                labelStyle: {opacity: 0.75}
              });

              google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                  map.setZoom(14);
                  map.setCenter(marker.getPosition());
                  infowindow.setContent(locations[i][0]);
                  infowindow.open(map, marker);
                }
              })(marker, i));

            }


          }


          $(window).load(function() {
            initMap();
          });

          $(function(){

            var locations = myLocations();
            var homeLatLng;
            var infowindow = new google.maps.InfoWindow(); 
            var marker, i;

            $(".loc_pick").click(function(){

              var lat = $(this).data('lat');
              var long = $(this).data('long');
              var arr_location_id = $(this).data('id');
              var location_open = locations[arr_location_id][0];

              var latLng = new google.maps.LatLng(lat, long);

              var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: latLng,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                scrollwheel:  false
              });

              var bounds = map.getBounds();

              homeLatLng = new google.maps.LatLng(lat, long);

              marker = new MarkerWithLabel({
                position: homeLatLng,
                map: map,
                labelContent: '',
                labelAnchor: new google.maps.Point(22, 0),
                labelClass: "labels",
                labelStyle: {opacity: 0.75}
              }); 

              google.maps.event.addListener(marker, 'click', (function(marker, i) {
                  return function() {
                  infowindow.setContent(location_open);
                  infowindow.open(map, marker);
                }
              })(marker, i));

            });

          });
      });
   
     

    
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3&amp;sensor=false&amp;key=AIzaSyAmynQQEzqguAnOOsAC3rLw2Lrlm5L3_EI"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['base_tlp_front']->value;?>
/js/markerwithlabel.js'><?php echo '</script'; ?>
><?php }
}
?>