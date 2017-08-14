$(document).ready(function(){

  var controller = new ScrollMagic.Controller();

  var ourScene = new ScrollMagic.Scene({
    triggerElement: '.FeaturedWorkLeft'
  })
  .setClassToggle('#FeaturedWorkLeft', 'popUp')
  .addTo(controller);


});

$(document).ready(function(){

  var controller = new ScrollMagic.Controller();

  var ourScene = new ScrollMagic.Scene({
    triggerElement: '.FeaturedWorkRight'
  })
  .setClassToggle('#FeaturedWorkRight', 'popUp')
  .addTo(controller);


});

$(document).ready(function(){

  var controller = new ScrollMagic.Controller();

  var ourScene = new ScrollMagic.Scene({
    triggerElement: '.FeaturedWorkTop'
  })
  .setClassToggle('#FeaturedWorkTop', 'popUp')
  .addTo(controller);


});
