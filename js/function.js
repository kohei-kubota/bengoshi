$(function() {
  $('.g-nav-list li').hover(function(){
    $('.make_border', this).css('opacity', 1);
  },
  function(){
    $('.make_border', this).css('opacity', 0);
  });
  $('#belong-lowyers').hover(function(){
    $('.sub-menu', this).css('display','block');
  },
  function(){
    $('.sub-menu', this).css('display','none');
  });
});
