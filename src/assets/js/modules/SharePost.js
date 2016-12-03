var APP = APP || {};

APP.SharePost = (function($){
  var obj = {};

  obj.init = function(){
    obj.btnShare = $('[rel=share]');
    obj.addEvents();
  };

  obj.addEvents = function(){
    var channel = null;

    obj.btnShare.on('click', function(e){
      e.preventDefault();
      channel = $(this).attr("data-channel");
      ga('send', 'event', "Share buttons", "share", channel);
      window.open($(this).attr("href") || $(this).attr("data-href"), "_blank", "width=500,height=300,top=100,left=100");
    });
  };

  return obj;

})($ || jQuery).init();