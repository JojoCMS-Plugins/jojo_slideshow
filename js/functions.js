function jojo_slideshow(id,delay,speed) {
  var selector = '#'+id;
  var spanFirst = $(selector + ' span:first');
  if (spanFirst.length !== 0) {
    spanFirst.before('<img src="'+spanFirst.attr('rel')+'" alt="" title="'+ spanFirst.attr('title') +'" />').remove();
  }
  if ($(selector + ' div').size() == 0) {$(selector).append("<div></div>");}
  if (!delay) {var delay = 5000;}
  if (!speed) {var speed = 1000;}
  var current = $(selector+' img.current');
  var next = $(selector + ' img.current + img:hidden').size() ? $(selector + ' img.current + img:hidden') : $(selector + ' img:first');
  var currenttitle = current.attr('title');
  if ((currenttitle!=undefined) & (currenttitle!='undefined') & (currenttitle!='')) {$(selector + ' div').html(currenttitle).show('fast');}
  $(selector).css('background-image','url("'+next.attr('src')+'")');
  current.fadeTo(delay, 1, function(){$(selector + ' div').hide('fast').html('');}).fadeOut(speed,function(){
    var current = $(selector + ' img.current');
    var next = ($(selector + ' img.current + img:hidden').size()>0) ? $(selector + ' img.current + img:hidden') : $(selector + ' img:first');
    current.removeClass('current');
    next.addClass('current').show();
    jojo_slideshow(id,delay,speed);
  });
}