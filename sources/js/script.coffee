delay = (ms, func) -> setTimeout func, ms

newsInit = false

map = undefined

size = ()->
	if !newsInit
		newsInit = true
		$('article .news').isotope
	  		itemSelector: '.news__item'

urlInitial = undefined

$.openModal = (url, id, open)->
	if url
		if(open)
			$(id).modal()	
		$(id).find('.text').load "/ajax#{url}", (data)->
			$('.modal .fotorama').fotorama()
			if History.enabled
				info = History.getState()
				console.log info
				urlInitial = 
					url : info.cleanUrl
					title : document.title
				History.pushState({'url':url}, $(id).find('.text h1').text(), url);
				window.title = $(id).find('.text h1').text()

$(document).ready ->

	$('.modal').on 'show.bs.modal', (a,b)->
		url = $(a.relatedTarget).data 'url'
		id  = $(a.relatedTarget).attr 'href'
		$.openModal(url, id)
	
	$('.modal').on 'hide.bs.modal', (a,b)->
		if urlInitial
			History.pushState({'url':urlInitial.url}, urlInitial.title, urlInitial.url);
			window.title = urlInitial.title

	$('.lang-trigger__carriage').click (e)->
		el = $(this).parents('.lang-trigger')
		variants = el.data('variant').split(',')
		$.each variants, (index, value)->
			value = value.toString()
			if el.mod('lang') != value
				el.mod('lang', value)
				return false
		e.preventDefault()

	$('.form-trigger').click (e)->
		form = $(this).parents('.modal').find('form')
		if form.is ':visible'
			form.velocity
				properties: "transition.slideUpOut"
				options:
					duration: 300
		else
			form.velocity
				properties: "transition.slideDownIn"
				options:
					duration: 300

	

	$('.dropdown').elem('item').click (e)->
		if $(this).attr('href').length == "#"
			$('.dropdown').elem('text').html($(this).text())
			$('.dropdown').elem('frame').velocity
					properties: "transition.slideUpOut"
					options:
						duration: 300
			e.preventDefault()


	closeDropdown = (x)->
		x.elem('frame').velocity
			properties: "transition.slideUpOut"
			options:
				duration: 300
	openDropdown = (x)->
		clearTimeout timer
		text = x.elem('text').text()
		x.elem('item').show()
		x.elem('frame').find("a:contains(#{text})").hide();
		x.elem('frame').velocity
			properties: "transition.slideDownIn"
			options:
				duration: 300
				complete: ()->
					timer = delay 3000, ()->
						$('.dropdown').elem('frame')
							.velocity
								properties: "transition.slideUpOut"
								options:
									duration: 300

	timer = false
	$('.dropdown').elem('trigger')
		.click (e)->
			if($(window).width()<768)
				openDropdown($(this).parents('.dropdown'))
			e.preventDefault()

	$('.modal .text').spin
		lines: 13
		length: 21
		width: 2
		radius: 24
		corners: 0
		rotate: 0
		direction: 1
		color: '#0c4ed0'
		speed: 1
		trail: 68
		shadow: false
		hwaccel: false
		className: 'spinner'
		zIndex: 2e9
		top: '50%'
		left: '50%'

	initType = ()->
		$('.dropdown.type').elem('item').click (e)->
			elm = $(this).attr 'href'
			alt = $(this).parents('.dropdown').elem('frame').find("a:not([href=#{elm}])").attr('href')
			if !$(elm).is ':visible'
				$(elm).velocity
					properties: "transition.slideDownIn"
					options:
						duration: 300
						complete: ()->
							google.maps.event.trigger(map, "resize");
				$(alt).velocity
					properties: "transition.slideUpOut"
					options:
						duration: 300

	$('.dropdown')
		.hoverIntent
			over : ()->
				if($(window).width()>768)
					openDropdown($(this))
			out : ()->
				closeDropdown($(this))

	$('.site-select').hoverIntent
		over : ()->
			if($(window).width()>768)
				clearTimeout timer
				$(this).mod('open', true)
				$(this).elem('dropdown').velocity
					properties: "transition.slideDownIn"
					options:
						duration: 300
						complete: ()->
							timer = delay 3000, ()->
								$('.site-select')
									.mod('open', false)
									.elem('dropdown').velocity
										properties: "transition.slideUpOut"
										options:
											duration: 300
		out : ()->
			$(this).mod('open', false)
			$(this).elem('dropdown').velocity
				properties: "transition.slideUpOut"
				options:
					duration: 300
	
	$('a.site-select__trigger').click (e)->
		if($(window).width()<768)
			$('#Sites').modal()
		e.preventDefault()

	delay 300, ()->
		size()


	mapInit = false
	$('#contactsMap').on 'shown.bs.modal', ()->
		if !mapInit
			mapInit = true
			ymaps.ready ()->
				myMap = new ymaps.Map 'map', {
					center: [55.723171,37.559856]
					zoom: 15
				}
				myPlacemark = new ymaps.Placemark myMap.getCenter(), {
					hintContent: 'Аргус СварСервис'
				},
				{
					preset: "twirl#nightDotIcon",
				}

				myMap.geoObjects.add(myPlacemark);
	
	x = undefined
	$(window).resize ->
		clearTimeout(x)
		x = delay 400, ()->
			size()
   

	if $('#bg_map').length > 0
		bgMapInit = ()->
			mapOptions =
				zoom: 3
				draggable: false
				zoomControl: false
				scrollwheel: false
				disableDoubleClickZoom: true
				disableDefaultUI: true
				center: new google.maps.LatLng(63.436317234268486, 67.10492205969675)
				styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":0}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]}]

			mapElement = document.getElementById('bg_map')
			map = new google.maps.Map(mapElement, mapOptions)

			cords = [
				new google.maps.LatLng(67.074532, 71.069804),
				new google.maps.LatLng(65.880861, 73.003398),
				new google.maps.LatLng(65.372506, 77.222148),
				new google.maps.LatLng(63.157574, 104.819804),

				new google.maps.LatLng(59.88725, 110.972148),
				new google.maps.LatLng(55.865354, 125.561991),
				new google.maps.LatLng(56.93747, 148.237773),
				new google.maps.LatLng(58.258556, 151.401835)
			];

			circle =
				path: google.maps.SymbolPath.CIRCLE
				strokeColor: 'transparent'
				fillColor: '#FFF'
				scale: 4.5
				fillOpacity: 1

			$.each cords, ()->
				marker = new google.maps.Marker
					position: this
					icon: circle
					map: map
				google.maps.event.addListener marker, 'click', ()->
					$('#markerDetail').modal()

			path = new google.maps.Polyline
				path: cords
				geodesic: true
				strokeColor: '#0089c0'
				strokeOpacity: 1.0
				strokeWeight: 4

			initType()

			path.setMap(map);
			google.maps.event.addDomListener window, "resize", ()->
	     		google.maps.event.trigger(map, "resize");
	     		map.setCenter mapOptions['center'] 			
		
		google.maps.event.addDomListener(window, 'load', bgMapInit);
