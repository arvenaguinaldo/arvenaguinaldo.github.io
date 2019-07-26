
// LightBox / Modal
// $(document).on('click', '[data-toggle="lightbox"]', function(event) {
//       event.preventDefault();
//       $(this).ekkoLightbox();
// });


// NAV BAR SCROLL
$(window).scroll(function() {
  $scrollTop = $(document).scrollTop();
  if ($scrollTop > 800) {
      // $('#nav-skills').addClass('nav-link-scrolled');
      $('nav').addClass('navbar-scrolled');
  } else {
    // $('#nav-skills').removeClass('nav-link-scrolled');
    $('nav').removeClass('navbar-scrolled');
  }
});

// SMOOTH SCROLL
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

// POSITION TYPEWRITER ANIMATION
class TypeWriter {
  constructor(txtElement, words, wait = 3000) {
    this.txtElement = txtElement;
    this.words = words;
    this.txt = '';
    this.wordIndex = 0;
    this.wait = parseInt(wait, 10);
    this.type();
    this.isDeleting = false;
  }

  type() {
    // Current index of word
    const current = this.wordIndex % this.words.length;
    // Get full text of current word
    const fullTxt = this.words[current];

    // Check if deleting
    if(this.isDeleting) {
      // Remove char
      this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
      // Add char
      this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    // Insert txt into element
    this.txtElement.innerHTML = `<span class="txt">${this.txt}</span>`;

    // Initial Type Speed
    let typeSpeed = 50;

    if(this.isDeleting) {
      typeSpeed /= 2;
    }

    // If word is complete
    if(!this.isDeleting && this.txt === fullTxt) {
      // Make pause at end
      typeSpeed = this.wait;
      // Set delete to true
      this.isDeleting = true;
    } else if(this.isDeleting && this.txt === '') {
      this.isDeleting = false;
      // Move to next word
      this.wordIndex++;
      // Pause before start typing
      typeSpeed = 100;
    }

    setTimeout(() => this.type(), typeSpeed);
  }
}


// Init On DOM Load
document.addEventListener('DOMContentLoaded', init);

// Init App
function init() {
  const txtElement = document.querySelector('.txt-type');
  const words = JSON.parse(txtElement.getAttribute('data-words'));
  const wait = txtElement.getAttribute('data-wait');
  // Init TypeWriter
  new TypeWriter(txtElement, words, wait);
}
