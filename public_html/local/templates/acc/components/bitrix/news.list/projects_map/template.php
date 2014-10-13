<div class="partners-list">
  <div class="row">
  	<?foreach ($arResult['ITEMS'] as $item):?>
    <div class="col-xs-3 col-sm-2 col-lg-2"><a target="_blank" href="<?=$item['LINK']?>" class="partners-list__item"><img src="<?=$item['IMAGE']?>"></a></div>
    <?endforeach;?>
  </div>
</div>
<?$this->SetViewTarget('footer');?>
<div id="markerDetail" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade">
  <div class="modal-dialog modal-lg">
    <div class="modal-content modal-content--white">
    	<a data-dismiss="modal" href="#" class="close"><?=svg('close')?></a>
    	<div class="text">
    		
    	</div>
    </div>
  </div>
</div>
<div id="bg_map"></div>
<script type="text/javascript" charset="utf-8" async defer>
	initType = function() {
	  $('.dropdown.type').elem('item').click(function(e) {
	  	if ($(this).attr('href')[0] === "#") {
	        $('.dropdown').elem('text').html($(this).text());
	        $('.dropdown').elem('frame').velocity({
	          properties: "transition.slideUpOut",
	          options: {
	            duration: 300
	          }
	        });
        }
        e.preventDefault();

	    var alt, elm;
	    elm = $(this).attr('href');
	    alt = $(this).parents('.dropdown').elem('frame').find("a:not([href=" + elm + "])").attr('href');
	    if (!$(elm).is(':visible')) {
	      $(elm).velocity({
	        properties: "transition.slideDownIn",
	        options: {
	          duration: 300,
	          complete: function() {
	            return google.maps.event.trigger(map, "resize");
	          }
	        }
	      });
	      return $(alt).velocity({
	        properties: "transition.slideUpOut",
	        options: {
	          duration: 300
	        }
	      });
	    }
	  });
	};
	function initialize_map() {
		var circle, cords, mapElement, mapOptions, path;
	    mapOptions = {
	      zoom: 3,
	      //draggable: false,
	      zoomControl: false,
	      scrollwheel: false,
	      disableDoubleClickZoom: true,
	      disableDefaultUI: true,
	      center: new google.maps.LatLng(66.69261210265907, 95.40570330969672),
	      styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":0}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]}]
	    };
	    mapElement = document.getElementById('bg_map');
	    map = new google.maps.Map(mapElement, mapOptions);
	    circle = {
	      path: google.maps.SymbolPath.CIRCLE,
	      strokeColor: 'transparent',
	      fillColor: '#FFF',
	      scale: 4.5,
	      fillOpacity: 1
	    };
	    initType()
	    google.maps.event.addListener(map, 'dragend', function(e) { 
	    	console.log(map.getCenter())
	    });


	    cords = [
			new google.maps.LatLng(67.074532, 71.069804),
			new google.maps.LatLng(65.880861, 73.003398),
			new google.maps.LatLng(65.372506, 77.222148),
			new google.maps.LatLng(63.157574, 104.819804),
			new google.maps.LatLng(59.88725, 110.972148),
			new google.maps.LatLng(55.865354, 125.561991),
			new google.maps.LatLng(56.93747, 148.237773),
			new google.maps.LatLng(58.258556, 151.401835)
		]
	    $.each(cords, function() {
          var marker;
          marker = new google.maps.Marker({
            position: this,
            icon: circle,
            map: map
          });
        });
        path = new google.maps.Polyline({
          path: cords,
          geodesic: true,
          strokeColor: '#0089c0',
          strokeOpacity: 1.0,
          strokeWeight: 4
        });
        google.maps.event.addListener(path, 'click', function() {
            return $('#markerDetail').modal();
        });
        path.setMap(map);




	    google.maps.event.addDomListener(window, "resize", function() {
	      google.maps.event.trigger(map, "resize");
	      return map.setCenter(mapOptions['center']);
	    });
	}
	$(function(){
		$.getScript("http://maps.google.com/maps/api/js?sensor=true&libraries=places&callback=initialize_map")
	});
</script>
<?$this->EndViewTarget();?> 