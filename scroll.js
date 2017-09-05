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
$( document ).ready(function() {
    $("#midImage").toggleClass("popUp");
    console.log('mid');
});



// $(document).ready(function(){
//
//   var controller = new ScrollMagic.Controller();
//
//   var ourScene = new ScrollMagic.Scene({
//     triggerElement: '.page-template-about'
//   })
//   .setClassToggle('#midImage', 'popUp')
//   .addTo(controller);
//
//
// });

$(document).ready(function(){

  var controller = new ScrollMagic.Controller();

  var ourScene = new ScrollMagic.Scene({
    triggerElement: '.page-template-about'
  })
  .setClassToggle('.insideInfo', 'popUp')
  .addTo(controller);


});

$(document).ready(function(){

  var controller = new ScrollMagic.Controller();

  var ourScene = new ScrollMagic.Scene({
    triggerElement: '.page-template-about'
  })
  .setClassToggle('.aboutFull', 'popUp')
  .addTo(controller);


});

$(document).ready(function(){

  var controller = new ScrollMagic.Controller();

  var ourScene = new ScrollMagic.Scene({
    triggerElement: '.nameTag'
  })
  .setClassToggle('.nameTag', 'popUp')
  .addTo(controller);


});
