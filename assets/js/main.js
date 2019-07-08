$(window).scroll(function() {
  $scrollTop = $(document).scrollTop();
  console.log($scrollTop);
  // if ($scrollTop > 800) {
  //     $('#nav-about').addClass('nav-link-scrolled');
  //     $('nav').addClass('navbar-scrolled');
  //     if ($scrollTop > 1525) {
  //     $('#nav-about').removeClass('nav-link-scrolled');
  //   } 
  // } 
  // else {
  //     $('#nav-about').removeClass('nav-link-scrolled');
  //     $('nav').removeClass('navbar-scrolled');
  // } 

  // if ($scrollTop > 1525) {
  //     $('#nav-skills').addClass('nav-link-scrolled');
  //     $('nav').addClass('navbar-scrolled');
  //     if ($scrollTop > 2000) {
  //     $('#nav-skills').removeClass('nav-link-scrolled');
  //     $('nav').removeClass('navbar-scrolled');
  //   } 
  // } 
    // else {
    //     $('#nav-skills').removeClass('nav-link-scrolled');
    //     $('nav').removeClass('navbar-scrolled');
    // } 
  

  if ($scrollTop > 800) {
      // $('#nav-skills').addClass('nav-link-scrolled');
      $('nav').addClass('navbar-scrolled');
  } else {
    // $('#nav-skills').removeClass('nav-link-scrolled');
    $('nav').removeClass('navbar-scrolled');
  }
});

$('.nav-link').on('click', function(e){
  if (this.hash !== ''){
    e.preventDefault();

    const hash = this.hash;

    $('html, body').animate(
      {
       scrollTop: $(hash).offset().top 
      },
      800
    )
  }
})