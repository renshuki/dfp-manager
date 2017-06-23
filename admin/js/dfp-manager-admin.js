(function($){

  // General Settings

  var parent   = $('#installedapp_or_webapp');
  var children = $('.installedapp_or_webapp_settings');

  parent.change(function(){
    children.toggleClass( 'hide-if-js', ! this.checked );
  });

})(jQuery);
