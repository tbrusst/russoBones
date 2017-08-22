var journalPost = document.getElementsByClassName('journalPost');


var body = document.body,
    html = document.documentElement;



for (var i = 0; i < journalPost.length; i++) {
    journalPost[i].addEventListener('click', zoom, false);
};


function zoom (){
  var cl = this.className.replace('journalPost ', '');
  var title = cl.toString();
  console.log(title);
  var box = document.getElementById(title);
  console.log(box);



  box.addEventListener('touchmove', function(e) {

          e.preventDefault();

  }, false);
  box.addEventListener('mousemove', function(e) {

          e.preventDefault();

  }, false);

  // $('html, body').animate({ scrollTop: 0 }, 'fast');


  // var bg = document.getElementById('bg');
  body.style.overflow="hidden";
  // body.style.height="100vh";

  // bg.style.display ="block";
  box.style.display ="block";
  // box.style.height = window.innerHeight;
  // box.style.overflow = "hidden";
  box.addEventListener("click", function(){
    this.style.display="none";
    // bg.style.display ="none";
    body.style.height="auto";
    var oldPost = title + "1";
    document.getElementById(oldPost).scrollIntoView();


    body.style.overflow="visible";
  })
};
