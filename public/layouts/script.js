// -----------------------------
//  Video Replace
// -----------------------------
$(".video-box span.icon").click(function () {
  var video =
    '<iframe allowfullscreen src="' +
    $(this).attr("data-video") +
    '"></iframe>';
  $(this).replaceWith(video);
});

// suara wanita
 $('.btnNext').click(function(){
  $('.nav-tabs > .active').next('li').find('a').trigger('click');
});

  $('.btnPrevious').click(function(){
  $('.nav-tabs > .active').prev('li').find('a').trigger('click');
});