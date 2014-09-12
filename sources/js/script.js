(function() {
  var delay, size;

  delay = function(ms, func) {
    return setTimeout(func, ms);
  };

  size = function() {};

  $(document).ready(function() {
    var x;
    $('.lang-trigger__carriage').click(function(e) {
      var el, variants;
      el = $(this).parents('.lang-trigger');
      variants = el.data('variant').split(',');
      $.each(variants, function(index, value) {
        value = value.toString();
        if (el.mod('lang') !== value) {
          el.mod('lang', value);
          return false;
        }
      });
      return e.preventDefault();
    });
    $('.site-select').hoverIntent({
      over: function() {
        $(this).mod('open', true);
        return $(this).elem('dropdown').velocity({
          properties: "transition.slideDownIn",
          options: {
            duration: 300
          }
        });
      },
      out: function() {
        $(this).mod('open', false);
        return $(this).elem('dropdown').velocity({
          properties: "transition.slideUpOut",
          options: {
            duration: 300
          }
        });
      }
    });
    delay(300, function() {
      return size();
    });
    x = void 0;
    return $(window).resize(function() {
      clearTimeout(x);
      return x = delay(400, function() {
        return size();
      });
    });
  });

}).call(this);
