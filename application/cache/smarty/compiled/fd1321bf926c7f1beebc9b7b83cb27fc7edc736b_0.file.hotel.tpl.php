<?php /* Smarty version 3.1.28-dev/21, created on 2017-04-18 03:25:55
         compiled from "D:\xampp\htdocs\airtrippy\application\modules\home\views\download\hotel.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:491558f56b23bb6a12_45715361%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd1321bf926c7f1beebc9b7b83cb27fc7edc736b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\airtrippy\\application\\modules\\home\\views\\download\\hotel.tpl',
      1 => 1490692524,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '491558f56b23bb6a12_45715361',
  'variables' => 
  array (
    'lable' => 0,
    'list_hotels' => 0,
    'ht' => 0,
    'hotel' => 0,
    'item' => 0,
    'hotel_id' => 0,
    'star' => 0,
    'k' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_58f56b23c7c786_28623950',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58f56b23c7c786_28623950')) {
function content_58f56b23c7c786_28623950 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '491558f56b23bb6a12_45715361';
?>


<div class="tour-hotel col-xs-12 col-sm-12 col-md-12 space-2">
    <h3><?php echo $_smarty_tpl->tpl_vars['lable']->value['tour_hotel'];?>
:</h3>
    <ul class="style-hotel list-unstyled">
  
        <?php
$foreach_0_test_sav['s_item'] = isset($_smarty_tpl->tpl_vars['ht']) ? $_smarty_tpl->tpl_vars['ht'] : false;
$foreach_0_test_sav['s_key'] = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$foreach_0_test_sav['s_name'] = isset($_smarty_tpl->tpl_vars['__foreach_test']) ? $_smarty_tpl->tpl_vars['__foreach_test'] : false;
$_from = $_smarty_tpl->tpl_vars['list_hotels']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ht'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ht']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['__foreach_test'] = new Smarty_Variable(array('index' => -1));
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['ht']->value) {
$_smarty_tpl->tpl_vars['ht']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_test']->value['index']++;
$foreach_0_test_sav['item'] = $_smarty_tpl->tpl_vars['ht'];
?>
    <?php if ($_smarty_tpl->tpl_vars['ht']->value['stars'] > 16) {?>
    <?php $_smarty_tpl->tpl_vars["star"] = new Smarty_Variable(16, null, 0);?>
    <?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["star"] = new Smarty_Variable($_smarty_tpl->tpl_vars['ht']->value['stars'], null, 0);?>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['ht']->value['hotel_id'])) {?>
    <li class="loc_hotel col-xs-12 col-md-12 col-md-8" data-lat="<?php echo $_smarty_tpl->tpl_vars['ht']->value['latitude'];?>
" data-long="<?php echo $_smarty_tpl->tpl_vars['ht']->value['longtitude'];?>
" data-id="<?php echo (isset($_smarty_tpl->tpl_vars['__foreach_test']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_test']->value['index'] : null);?>
">
      <p><span><?php echo $_smarty_tpl->tpl_vars['ht']->value['name'];?>
</span><?php echo $_smarty_tpl->tpl_vars['ht']->value['address'];?>
</p>
    </li>
    <li class="no-bullet col-xs-12 col-md-12 col-md-4">
      <div class="stars"> 
        <?php
$foreach_1_name_sav['s_item'] = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$foreach_1_name_sav['s_key'] = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$foreach_1_name_sav['s_name'] = isset($_smarty_tpl->tpl_vars['__foreach_name']) ? $_smarty_tpl->tpl_vars['__foreach_name'] : false;
$_from = $_smarty_tpl->tpl_vars['hotel']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_1_name_sav['item'] = $_smarty_tpl->tpl_vars['item'];
?>
        <?php $_smarty_tpl->tpl_vars["hotel_id"] = new Smarty_Variable($_smarty_tpl->tpl_vars['item']->value['record']['id'], null, 0);?>
        
        <?php if ($_smarty_tpl->tpl_vars['hotel_id']->value < 17) {?>
        <input class="star star-value" data-star="<?php echo $_smarty_tpl->tpl_vars['star']->value;?>
" data-hotel="<?php echo $_smarty_tpl->tpl_vars['hotel_id']->value;?>
"  id="star-<?php echo $_smarty_tpl->tpl_vars['hotel_id']->value;?>
-5<?php echo $_smarty_tpl->tpl_vars['ht']->value['hotel_id'];?>
" type="radio" name="star-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"  />
        <label class="star label-star" for="star-<?php echo $_smarty_tpl->tpl_vars['hotel_id']->value;?>
-5<?php echo $_smarty_tpl->tpl_vars['ht']->value['hotel_id'];?>
"></label>    
        <?php }?>


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
      </div>
    </li>
    <?php }?>

    <?php
$_smarty_tpl->tpl_vars['ht'] = $foreach_0_test_sav['item'];
}
if ($foreach_0_test_sav['s_item']) {
$_smarty_tpl->tpl_vars['ht'] = $foreach_0_test_sav['s_item'];
}
if ($foreach_0_test_sav['s_key']) {
$_smarty_tpl->tpl_vars['k'] = $foreach_0_test_sav['s_key'];
}
if ($foreach_0_test_sav['s_name']) {
$_smarty_tpl->tpl_vars['__foreach_test'] = $foreach_0_test_sav['s_name'];
}
?> 
    </ul>
    <div class="map text-center space-2" id="map1" style="width: 100%; height: 640px">
        

    </div>
    <p class="note space-2"><?php echo $_smarty_tpl->tpl_vars['lable']->value['note_hotel'];?>
</p>
    
</div>

<?php echo '<script'; ?>
>
  var hotel_latitude = <?php echo $_smarty_tpl->tpl_vars['list_hotels']->value[0]['latitude'];?>
;
  var hotel_longtitude = <?php echo $_smarty_tpl->tpl_vars['list_hotels']->value[0]['longtitude'];?>
;

  

  $(document).ready(function() {

    $('input[type="radio"]').each(function(index, el) {
      $(this).attr('disabled', 'disabled'); 
    });


    function myLocations1() {
      var locations = [
      
      <?php
$foreach_2_hotel_sav['s_item'] = isset($_smarty_tpl->tpl_vars['hotel']) ? $_smarty_tpl->tpl_vars['hotel'] : false;
$_from = $_smarty_tpl->tpl_vars['list_hotels']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['hotel'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['hotel']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['hotel']->value) {
$_smarty_tpl->tpl_vars['hotel']->_loop = true;
$foreach_2_hotel_sav['item'] = $_smarty_tpl->tpl_vars['hotel'];
?>
        ['<?php echo $_smarty_tpl->tpl_vars['hotel']->value['address'];?>
', <?php echo $_smarty_tpl->tpl_vars['hotel']->value['latitude'];?>
, <?php echo $_smarty_tpl->tpl_vars['hotel']->value['longtitude'];?>
 , '<?php echo $_smarty_tpl->tpl_vars['hotel']->value['category'];?>
'], 
      <?php
$_smarty_tpl->tpl_vars['hotel'] = $foreach_2_hotel_sav['item'];
}
if ($foreach_2_hotel_sav['s_item']) {
$_smarty_tpl->tpl_vars['hotel'] = $foreach_2_hotel_sav['s_item'];
}
?>
      
      ];

      return locations;
    }

    //console.log(myLocations1());

    function initMap1() {
      if(hotel_latitude == '' || hotel_longtitude == '') {
        return;
      }
      var locations = myLocations1();
      var latLng = new google.maps.LatLng(hotel_latitude, hotel_longtitude);
      var homeLatLng;

      var map = new google.maps.Map(document.getElementById('map1'), {
        zoom: 15,
        center: latLng,
        mapTypeId: google.maps.MapTypeId.ROADMAP, 
        scrollwheel:  false
      });

      var infowindow = new google.maps.InfoWindow(); 
      var marker, i;

      var bounds = map.getBounds();

      var url_visit  = base_tlp_front + '/images/visiting.png';
      var url_eating = base_tlp_front + '/images/restaurant.png';
      var url        = base_tlp_front + '/images/single_bed.png';

      for (i = 0; i < locations.length; i++) { 
        //console.log(locations[i][3]);
        if(locations[i][3] == '63'){
          var icon = {
            url: url_visit
          };
        } else if(locations[i][3] == '64'){
          var icon = {
            url: url_eating
          };
        } else {
          var icon = {
            url: url
          }
        }

        homeLatLng = new google.maps.LatLng(locations[i][1], locations[i][2]);

        marker = new MarkerWithLabel({
          position: homeLatLng,
          map: map,
          labelContent: '',
          labelAnchor: new google.maps.Point(22, 0),
          labelClass: "labels",
          labelStyle: {opacity: 0.75}, 
          icon: icon,
        });


        if(locations[i][3] == ''){
          var circle = new google.maps.Circle({
            map: map,
            radius: 500, 
            strokeColor: '#FF0000',
            strokeOpacity: 0.1,
            strokeWeight: 2,
            fillColor: '#FF0000',
            fillOpacity: 0.35,
          });
          circle.bindTo('center', marker, 'position');
        }

        google.maps.event.addListener(marker, 'click', (function(marker, i) {
          return function() {
            map.setZoom(15);
            map.setCenter(marker.getPosition());
            infowindow.setContent(locations[i][0]);
            infowindow.open(map, marker);
          }
        })(marker, i));

      }

    }


    $(window).load(function() {
      initMap1();
    });

    $(function(){

      var locations = myLocations1();
      var homeLatLng;
      var infowindow = new google.maps.InfoWindow(); 
      var marker, i;

      $(".loc_hotel").click(function(){

        var lat = $(this).data('lat');
        var long = $(this).data('long');
        var arr_location_id = $(this).data('id');
        var location_open = locations[arr_location_id][0];

        var latLng = new google.maps.LatLng(lat, long);


        var map = new google.maps.Map(document.getElementById('map1'), {
          zoom: 15,
          center: latLng,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          scrollwheel:  false
        });

      var bounds     = map.getBounds();
      var url_visit  = base_tlp_front + '/images/visiting.png';
      var url_eating = base_tlp_front + '/images/restaurant.png';
      var url        = base_tlp_front + '/images/single_bed.png';

      for (i = 0; i < locations.length; i++) { 
        //console.log(locations[i][3]);
        if(locations[i][3] == '63'){
          var icon = {
            url: url_visit
          };
        } else if(locations[i][3] == '64'){
          var icon = {
            url: url_eating
          };
        } else {
          var icon = {
            url: url
          }
        }

        homeLatLng = new google.maps.LatLng(locations[i][1], locations[i][2]);

        marker = new MarkerWithLabel({
          position: homeLatLng,
          map: map,
          labelContent: '',
          labelAnchor: new google.maps.Point(22, 0),
          labelClass: "labels",
          labelStyle: {opacity: 0.75}, 
          icon: icon,
        });


        if(locations[i][3] == ''){
          var circle = new google.maps.Circle({
            map: map,
            radius: 500, 
            strokeColor: '#FF0000',
            strokeOpacity: 0.1,
            strokeWeight: 2,
            fillColor: '#FF0000',
            fillOpacity: 0.35,
          });
          circle.bindTo('center', marker, 'position');
        }

        google.maps.event.addListener(marker, 'click', (function(marker, i) {
          return function() {
            map.setZoom(15);
            map.setCenter(marker.getPosition());
            infowindow.setContent(locations[i][0]);
            infowindow.open(map, marker);
          }
        })(marker, i));

      }
      

      });

    });
  });

   


<?php echo '</script'; ?>
>
<?php }
}
?>