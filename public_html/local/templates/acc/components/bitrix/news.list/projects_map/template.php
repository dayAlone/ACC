<div id="list" class="services">
	<div class="row">
	<?foreach ($arResult['ITEMS'] as $item):?>
	<div class="col-lg-6" data-type="<?=$item['PROPS']['SECTION']?>">
	  <a data-toggle="modal" data-target="#servicesDetail" href="#servicesDetail" class="services__item" data-url="<?=$item['DETAIL_PAGE_URL']?>">
	    <div class="row">
	      <?if(isset($item['PREVIEW_PICTURE']['SRC'])):?>
	      <div class="col-xs-5 col-sm-4 col-md-3">
	        <div style="background-image: url(<?=$item['PREVIEW_PICTURE']['SRC']?>)" class="services__image"></div>
	      </div>
	      <div class="col-xs-7 col-sm-8 col-md-9">
	      <?else:?>
	      <div class="col-xs-12">
	      <?endif;?>
	        <div class="services__title"><?=$item['NAME']?></div>
	      </div>
	    </div>
	  </a>
	</div>
   	<?endforeach;?>
   	</div>
</div>
<?$this->EndViewTarget();?> 
<?$this->SetViewTarget('header');?>
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
<?$this->SetViewTarget('footer');?>
<script src="http://maps.googleapis.com/maps/api/js?sensor=true" type="text/javascript" charset="utf-8"></script>
<script src="/layout/js/tooltip.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
	$(function(){
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
		function hide_elements(list) {
			console.log(list)
			$.each(list['lines'], function () {
				this.setMap(null);
			});
			$.each(list['markers'], function () {
				this.setVisible(false);
			});
		}
		function initialize_map() {
			
			var circle, cords, mapElement, mapOptions, line, path, objects = {'finished': {'lines' : [], 'markers':[]}, 'current': {'lines':[], 'markers':[]}};
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
		    
		    <?foreach ($arResult['ITEMS'] as $item):?>
		    	cords = [
			    	<? foreach($item['PROPS']['GEO'] as $geo): ?>
						{ cords : new google.maps.LatLng(<?=$geo['cords']?>), name: "<?=$geo['name']?>" },
					<? endforeach; ?>
				]
				line = []
			    $.each(cords, function() {
		          var marker;
		          line.push(this.cords)
		          marker = new google.maps.Marker({
		            position: this.cords,
		            icon: circle,
		            map: map,
		            title: "<?=$geo['name']?>"
		          });
			      var tooltipOptions = {
		              marker: marker,
		              map : map,
		              content: this.name,
		              cssClass: 'tooltip' // name of a css class to apply to tooltip
		          };
		          var tooltip = new Tooltip(tooltipOptions);
		          objects['<?=$item['PROPS']['SECTION']?>']['markers'].push(marker);
		        });
		        path = new google.maps.Polyline({
		          path: line,
		          geodesic: true,
		          strokeColor: <?=($item['PROPS']['SECTION']=='finished'?'"#0089c0"':'"#fdb932"')?>,
		          strokeOpacity: 1.0,
		          strokeWeight: 4
		        });
		        
		        objects['<?=$item['PROPS']['SECTION']?>']['lines'].push(path);
		        google.maps.event.addListener(path, 'click', function() {
		            return $('#markerDetail').modal();
		        });
		        path.setMap(map);
	        <?endforeach;?>

	        //hide_elements(objects['finished'])

		    google.maps.event.addDomListener(window, "resize", function() {
		      google.maps.event.trigger(map, "resize");
		      return map.setCenter(mapOptions['center']);
		    });
		}
		initialize_map()
	});
</script>
<?$this->EndViewTarget();?> 