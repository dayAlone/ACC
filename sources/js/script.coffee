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
	
	delay 300, ()->
		size()

	x = undefined
	$(window).resize ->
		clearTimeout(x)
		x = delay 400, ()->
			size()
   
