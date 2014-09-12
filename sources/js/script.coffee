delay = (ms, func) -> setTimeout func, ms

size = ()->


$(document).ready ->

	$('.lang-trigger__carriage').click (e)->
		el = $(this).parents('.lang-trigger')
		variants = el.data('variant').split(',')
		$.each variants, (index, value)->
			value = value.toString()
			if el.mod('lang') != value
				el.mod('lang', value)
				return false
		e.preventDefault()

	$('.site-select').hoverIntent
		over : ()->
			$(this).mod('open', true)
			$(this).elem('dropdown').velocity
				properties: "transition.slideDownIn"
				options:
					duration: 300
		out : ()->
			$(this).mod('open', false)
			$(this).elem('dropdown').velocity
				properties: "transition.slideUpOut"
				options:
					duration: 300
	
	delay 300, ()->
		size()

	x = undefined
	$(window).resize ->
		clearTimeout(x)
		x = delay 400, ()->
			size()
   
