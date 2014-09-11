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
