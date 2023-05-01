/**
* Template Name: Impact
* Updated: Mar 10 2023 with Bootstrap v5.2.3
* Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/



document.addEventListener('DOMContentLoaded', () => {
  "use strict";

  /**
   * Preloader
   */
  const preloader = document.querySelector('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove();
    });
  }

  /**
   * Sticky Header on Scroll
   */
  const selectHeader = document.querySelector('#header');
  if (selectHeader) {
    let headerOffset = selectHeader.offsetTop;
    let nextElement = selectHeader.nextElementSibling;

    const headerFixed = () => {
      if ((headerOffset - window.scrollY) <= 0) {
        selectHeader.classList.add('sticked');
        if (nextElement) nextElement.classList.add('sticked-header-offset');
      } else {
        selectHeader.classList.remove('sticked');
        if (nextElement) nextElement.classList.remove('sticked-header-offset');
      }
    }
    window.addEventListener('load', headerFixed);
    document.addEventListener('scroll', headerFixed);
  }

  /**
   * Navbar links active state on scroll
   */
  let navbarlinks = document.querySelectorAll('#navbar a');

  function navbarlinksActive() {
    navbarlinks.forEach(navbarlink => {

      if (!navbarlink.hash) return;

      let section = document.querySelector(navbarlink.hash);
      if (!section) return;

      let position = window.scrollY + 200;

      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        navbarlink.classList.add('active');
      } else {
        navbarlink.classList.remove('active');
      }
    })
  }
  window.addEventListener('load', navbarlinksActive);
  document.addEventListener('scroll', navbarlinksActive);

  /**
   * Mobile nav toggle
   */
  const mobileNavShow = document.querySelector('.mobile-nav-show');
  const mobileNavHide = document.querySelector('.mobile-nav-hide');

  document.querySelectorAll('.mobile-nav-toggle').forEach(el => {
    el.addEventListener('click', function(event) {
      event.preventDefault();
      mobileNavToogle();
    })
  });

  function mobileNavToogle() {
    document.querySelector('body').classList.toggle('mobile-nav-active');
    mobileNavShow.classList.toggle('d-none');
    mobileNavHide.classList.toggle('d-none');
  }

  /**
   * Hide mobile nav on same-page/hash links
   */
  document.querySelectorAll('#navbar a').forEach(navbarlink => {

    if (!navbarlink.hash) return;

    let section = document.querySelector(navbarlink.hash);
    if (!section) return;

    navbarlink.addEventListener('click', () => {
      if (document.querySelector('.mobile-nav-active')) {
        mobileNavToogle();
      }
    });

  });

  /**
   * Toggle mobile nav dropdowns
   */
  const navDropdowns = document.querySelectorAll('.navbar .dropdown > a');

  navDropdowns.forEach(el => {
    el.addEventListener('click', function(event) {
      if (document.querySelector('.mobile-nav-active')) {
        event.preventDefault();
        this.classList.toggle('active');
        this.nextElementSibling.classList.toggle('dropdown-active');

        let dropDownIndicator = this.querySelector('.dropdown-indicator');
        dropDownIndicator.classList.toggle('bi-chevron-up');
        dropDownIndicator.classList.toggle('bi-chevron-down');
      }
    })
  });

  /**
   * Initiate glightbox
   */
  const glightbox = GLightbox({
    selector: '.glightbox'
  });

  /**
   * Scroll top button
   */
  const scrollTop = document.querySelector('.scroll-top');
  if (scrollTop) {
    const togglescrollTop = function() {
      window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
    }
    window.addEventListener('load', togglescrollTop);
    document.addEventListener('scroll', togglescrollTop);
    scrollTop.addEventListener('click', window.scrollTo({
      top: 0,
      behavior: 'smooth'
    }));
  }

  /**
   * Initiate Pure Counter
   */
  new PureCounter();

  /**
   * Clients Slider
   */
  new Swiper('.clients-slider', {
    speed: 400,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    breakpoints: {
      320: {
        slidesPerView: 2,
        spaceBetween: 40
      },
      480: {
        slidesPerView: 3,
        spaceBetween: 60
      },
      640: {
        slidesPerView: 4,
        spaceBetween: 80
      },
      992: {
        slidesPerView: 6,
        spaceBetween: 120
      }
    }
  });

  /**
   * Init swiper slider with 1 slide at once in desktop view
   */
  new Swiper('.slides-1', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    }
  });

  /**
   * Init swiper slider with 3 slides at once in desktop view
   */
  new Swiper('.slides-3', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 40
      },

      1200: {
        slidesPerView: 3,
      }
    }
  });

  /**
   * Porfolio isotope and filter
   */
  let portfolionIsotope = document.querySelector('.portfolio-isotope');

  if (portfolionIsotope) {

    let portfolioFilter = portfolionIsotope.getAttribute('data-portfolio-filter') ? portfolionIsotope.getAttribute('data-portfolio-filter') : '*';
    let portfolioLayout = portfolionIsotope.getAttribute('data-portfolio-layout') ? portfolionIsotope.getAttribute('data-portfolio-layout') : 'masonry';
    let portfolioSort = portfolionIsotope.getAttribute('data-portfolio-sort') ? portfolionIsotope.getAttribute('data-portfolio-sort') : 'original-order';

    window.addEventListener('load', () => {
      let portfolioIsotope = new Isotope(document.querySelector('.portfolio-container'), {
        itemSelector: '.portfolio-item',
        layoutMode: portfolioLayout,
        filter: portfolioFilter,
        sortBy: portfolioSort
      });

      let menuFilters = document.querySelectorAll('.portfolio-isotope .portfolio-flters li');
      menuFilters.forEach(function(el) {
        el.addEventListener('click', function() {
          document.querySelector('.portfolio-isotope .portfolio-flters .filter-active').classList.remove('filter-active');
          this.classList.add('filter-active');
          portfolioIsotope.arrange({
            filter: this.getAttribute('data-filter')
          });
          if (typeof aos_init === 'function') {
            aos_init();
          }
        }, false);
      });

    });

  }

  /**
   * Animation on scroll function and init
   */
  function aos_init() {
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    });
  }
  window.addEventListener('load', () => {
    aos_init();
  });

});



// testimonials loader 
fetch('http://localhost/assets/php/p_testimonials.php')
  .then(response => response.json())
  .then(data => {
    let jsonData;
    jsonData = data; // store the parsed JSON data in a variable
    users = jsonData.data
    let myDiv = document.getElementById('rates_id');
    for(let i = 0 ; i<users.length ; i++)
    {

        var componet =
         `<div class="swiper-slide">
        <div class="testimonial-wrap">
        <div class="testimonial-item">
            <div class="d-flex align-items-center">
            <img src="assets/img/user/${users[i].IMAGE}" class="testimonial-img flex-shrink-0" >
            <div>
                <h3>${users[i].NAME}</h3>
                <h4>${users[i].ROLE}</h4>
                <div class="stars">
                ${'<span style="color: gold; font-size: larger;">✮</span>'.repeat(users[i].RATE)}
                </div>
            </div>
            </div>
            <p>
            <i class="bi bi-quote quote-icon-left"></i>
            ${users[i].FEEDBACK}
            <i class="bi bi-quote quote-icon-right"></i>
            </p>
        </div>
        </div>
    </div><!-- End testimonial item -->` ;

    myDiv.innerHTML += componet ;     
    }


  })
  .catch(error => console.error('ERROR HAPPEND WHILE loading testimials  ( ' + error + ') '));


// stats loader
fetch('http://localhost/assets/php/p_stats.php')
  .then(response => response.json())
  .then(data => {
    jsonData = data; // store the parsed JSON data in a variable
    users = jsonData.data
    let myDiv = document.getElementById('stats_counter');
    for(let i = 0 ; i<users.length ; i++)
    {

        var componet =
        `<div class="stats-item d-flex align-items-center">
        <h1 class="bold mx-3" style="color:#008374; font-family: 'Changa', sans-serif;">${users[i].COUNT}</h1>\
        <p><strong class="h2">${users[i].ITEM}</strong> ${users[i].DESCR}.</p>
         </div>`;

    myDiv.innerHTML += componet ;  

    }})
  .catch(error => console.error('ERROR HAPPEND WHILE loading stats  ( ' + error + ') '));



  // faq loader 
  fetch('http://localhost/assets/php/p_faq.php')
  .then(response => response.json())
  .then(data => {
    let jsonData = data; // store the parsed JSON data in a variable
    users = jsonData.data
    let myDiv = document.getElementById('faqlist');

    var sign_faq =
    `<div class="accordion-item">
    <h3 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sign-faq-item">
        <span class="num">◆</span>
        Please sign in to see more.
      </button>
    </h3>
    <div id="sign-faq-item" class="accordion-collapse collapse" data-bs-parent="#faqlist">
      <div class="accordion-body">
        <a href="/assets/html/signin.html" class="link" style="color: black; " id="#faq_link">Click here</a>
      </div>
    </div>
    </div>`;


    for(let i = 0 ; i<users.length ; i++)
    {

        var componet =
         `<div class="accordion-item">\
        <h3 class="accordion-header">\
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#${'FAQ_ITEM_'.concat(i+1)}">\
            <span class="num">${i+1}.</span>
            ${users[i].QUESTION}
          </button>
        </h3>
        <div id="${'FAQ_ITEM_'.concat(i+1)}" class="accordion-collapse collapse" data-bs-parent="#faqlist">
          <div class="accordion-body">
          ${users[i].ANSWER}
          </div>
        </div>
        </div>` ;

    // TO SHOW JUST 4 ELEMENTS
    myDiv.innerHTML += componet ;  
    if(i==4)break ;   

    }

    myDiv.innerHTML += sign_faq ; 

  })
  .catch(error => console.error('ERROR HAPPEND WHILE loading testimials ( ' + error + ') '));


  // team members loader 
  fetch('http://localhost/assets/php/p_team.php')
  .then(response => response.json())
  .then(data => {
    let jsonData = data; // store the parsed JSON data in a variable
    members = jsonData.data
    let myDiv = document.getElementById('team_members');

    for(let i = 0 ; i<members.length ; i++)
    {

        var componet =
         `
         <div class="col-xl-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
         <div class="member">
           <img src="assets/img/team/${members[i].IMAGE}" class="img-fluid" alt="">
           <h4>${members[i].NAME}</h4>
           <span>${members[i].ROLE}</span>
           <div class="social">
             <a href="${members[i].TWITER}" target='_blank'><i class="bi bi-twitter"></i></a>
             <a href="${members[i].FACEBOOK}" target='_blank'><i class="bi bi-facebook"></i></a>
             <a href="${members[i].INSTGRAM}" target='_blank'><i class="bi bi-instagram"></i></a>
             <a href="${members[i].LINKEDIN}" target='_blank'><i class="bi bi-linkedin"></i></a>
           </div>
         </div>
       </div>
         ` ;


        myDiv.innerHTML += componet ;  
    }

  })
  .catch(error => console.error('ERROR HAPPEND WHILE loading team ( ' + error + ') '));