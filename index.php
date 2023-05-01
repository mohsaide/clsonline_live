<?php 
session_start(); 
if (!empty($_SESSION)) {
  session_destroy();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <!-- meta data -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="CLS is created for making the learning process of both student and instructor smoothly and has a rich experience, preparing a strong and reliable technical infrastructure for Palestinian universities and breaking barriers imposed on the educational sector." name="description">
  <meta content="learning , elearning , education system" name="keywords">

  <!-- logo & title  -->
  <link href="/assets/img/logo.jpg" rel="icon">
  <title>Compatible Learning System - CLS</title>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Changa&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> <!-- bootstrap css file -->
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet"> <!-- bootstrap icons css file -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet"> <!-- Animate on scroll library -->
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet"> <!-- to animate images and videos -->
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">  <!-- to handle slider movement -->
  <link href="assets/css/main.css" rel="stylesheet"> <!-- custom css file -->


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">

        <img src="assets/img/logo.jpg" alt="logo">
        <h1>CLS<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#pricing">Pricing</a></li>

          <li class="dropdown"><a href="#"><span>More</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#contact">Contact</a></li>
              <li><a href="#team">Team</a></li>
              <li><a href="#faq">FAQ</a></li>
              <li><a href="#testimonials">FEEDBACK</a></li>
              <li><a href="#clients">Trusted by</a></li>
            </ul>
          </li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header>


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Welcome to <span>CLS</span></h2>
          <p>Compatible Learning System - first shared learning community.</p>

          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="assets/html/h_login.php" class="btn-get-started mx-2">Sign in</a> 
          </div>


        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="assets/img/statics/a.svg" class="img-fluid" alt="cls" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>

    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="fa-solid fa-globe"></i></div>
              <h4 class="title"><a  class="stretched-link">Availability</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
              <h4 class="title"><a class="stretched-link">Comprehensive</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="fa-solid fa-shapes"></i></div>
              <h4 class="title"><a  class="stretched-link">Simple</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <div class="icon"><i class="fa-solid fa-rocket"></i></div>
              <h4 class="title"><a  class="stretched-link">Seamless</a></h4>
            </div>
          </div><!--End Icon Box -->

        </div>
      </div>
    </div>

    </div>
  </section>

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>About Us</h2>
        </div>

        <div class="row gy-4">
          <div class="col-lg-6">
            <h3>Online supervising is now available!</h3>
            <img src="assets/img/statics/b.jpg" class="img-fluid rounded-4 mb-4" alt="">
            <p>With the transition of education to digital connectivity without borders, our diverse smart system will influence the future of learning from Palestine globally.</p>
          </div>
          <div class="col-lg-6">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                Focused on the student experience to power the guest experience ,
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> Communication between all of university memebers.</li>
                <li><i class="bi bi-check-circle-fill"></i> Attracting fresh Tawjihi graduated.</li>
                <li><i class="bi bi-check-circle-fill"></i> Attendance monitoring.</li>
                <li><i class="bi bi-check-circle-fill"></i> Guidance for students.</li>
                <li><i class="bi bi-check-circle-fill"></i> Engagement.</li>
              </ul>
              <div class="position-relative mt-4">
                <img src="assets/img/statics/c.jpg" class="img-fluid rounded-4" alt="">
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

        <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
          <div class="container" data-aos="fade-up">
    
            <div class="section-header">
              <h2>Testimonials</h2>
              <p> &#8221; Always give people more than what they expect to get &#8221;</p>
            </div>
    
            <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
              <div class="swiper-wrapper" id="rates_id" >
                          <!-- testimonials.js script will add the components here   -->
              </div>
              <div class="swiper-pagination"></div>
            </div>
    
          </div>
    </section>

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4 align-items-center">

          <div class="col-lg-6">
            <img src="assets/img/statics/d.svg" alt="" class="img-fluid">
          </div>

          <div class="col-lg-6" id="stats_counter">

             <!-- rates.js script will add the components here   -->

          </div>

        </div>

      </div>
    </section>

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
      <div class="container text-center" data-aos="zoom-out">
        <a href="assets/html/signup.html" class=" play-btn"></a>
        <h3>Join Us</h3>
        <p> Are you ready to start your journey with us !</p>
      </div>
    </section>

    <!-- ======= Our Services Section ======= -->
    <section id="services" class="services sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Services</h2>
          <p>For universities that put service at the heart of their learning.</p>
        </div>

        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="fa-solid fa-tree"></i>
              </div>
              <h3>Manage by Tree</h3>
              <p>Build your tree with including all branches , colleges , programs and classes. Would make managing process easy to you.</p>
              
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-people-roof"></i>
              </div>
              <h3>Class</h3>
              <p>All students of the class in one place provides a set of tools that serve the instructor in addition to the creative perspective.</p>
              
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-calendar-check"></i>
              </div>
              <h3>Calendar</h3>
              <p>We are talking about bucket includes all of coming evetns , tasks and exams.</p>
              
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-comments"></i>
              </div>
              <h3>Chat</h3>
              <p>Keep in touch with your srudents and mates.</p>
              
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-id-card"></i>
              </div>
              <h3>Build your CV</h3>
              <p>At end , the gradueted student could be able to pull his university certificate and maybe cv with all his/her acheivments.</p>
              
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-list-check"></i>
              </div>
              <h3>Scheduling</h3>
              <p>As a teacher, now you have everything you need to manage your students.</p>
              
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section>

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients ">
          <div class="container" data-aos="zoom-out">
    
            <div class="section-header ">
              <h2>Trusted By</h2>
            </div>
    
            <div class="clients-slider swiper ">
              <div class="swiper-wrapper align-items-center ">

                <div class="swiper-slide"><img src="assets/img/university/empty.png" class="img-fluid" ></div>
                <div class="swiper-slide"><img src="assets/img/university/1.png" class="img-fluid" ></div>
                

                <div class="swiper-slide"><img src="assets/img/university/empty.png" class="img-fluid" ></div>
                <div class="swiper-slide"><img src="assets/img/university/2.png" class="img-fluid" ></div>
                
                <div class="swiper-slide"><img src="assets/img/university/empty.png" class="img-fluid" ></div>
                <div class="swiper-slide"><img src="assets/img/university/3.png" class="img-fluid" ></div>

              </div>
            </div>
    
          </div>
    </section>
    

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Team</h2>
          <p>Alone we can do so little; together we can do so much!</p>
        </div>

        <div class="row gy-4" id="team_members">

        </div>

      </div>
    </section>

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Pricing</h2>
          <p>One pays for everything, the trick is not to pay too much of anything for anything.</p>
        </div>

        <div class="row g-4 py-lg-5" data-aos="zoom-out" data-aos-delay="100">

          <div class="col-lg-4">
            <div class="pricing-item">
              <h3>Free Plan</h3>
              <div class="icon">
                <i class="bi bi-box"></i>
              </div>
              <h4><sup>$</sup>0<span> / month</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> Posting</li>
                <li class="na"><i class="bi bi-x"></i> <span>Calendering</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>Blogger</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>Chatting</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>Class</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>Attracting</span></li>
              </ul>
              <div class="text-center"><a href="mailto:mohammad2001saide@gmail.com?subject=CLS FREE PLAN INQUIRY&body=Hi CLS, Could you tell me more about free plan?%0A%0AThanks!" class="buy-btn">Buy Now</a></div>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4">
            <div class="pricing-item featured">
              <h3>Onboarding Plan</h3>
              <div class="icon">
                <i class="bi bi-airplane"></i>
              </div>

              <h4><sup>$</sup>49<span> / month</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> Posting</li>
                <li><i class="bi bi-check"></i> Blogger</li>
                <li><i class="bi bi-check"></i> Chatting</li>
                <li class="na"><i class="bi bi-x"></i> <span>Calendering</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>Class</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>Attracting</span></li>
              </ul>
              <div class="text-center"><a href="mailto:mohammad2001saide@gmail.com?subject=CLS ONBOARDING PLAN INQUIRY&body=Hi CLS, Could you tell me more about onboarding plan?%0A%0AThanks!" class="buy-btn">Buy Now</a></div>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4">
            <div class="pricing-item">
              <h3>Pro Plan</h3>
              <div class="icon">
                <i class="bi bi-send"></i>
              </div>
              <h4><sup>$</sup>99<span> / month</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> Posting</li>
                <li><i class="bi bi-check"></i> Calendering</li>
                <li><i class="bi bi-check"></i> Blogger</li>
                <li><i class="bi bi-check"></i> Chatting</li>
                <li><i class="bi bi-check"></i> Class</li>
                <li><i class="bi bi-check"></i> Attracting</li>
              </ul>
              <div class="text-center"><a href="mailto:mohammad2001saide@gmail.com?subject=CLS PRO PLAN INQUIRY&body=Hi CLS, Could you tell me more about pro plan?%0A%0AThanks!" class="buy-btn">Buy Now</a></div>
            </div>
          </div><!-- End Pricing Item -->

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="content px-xl-5">
              <h3>Frequently Asked <strong>Questions</strong></h3>
            </div>
          </div>

          <div class="col-lg-8">

            <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">
          
             <!-- land_faq.js.js script will add the components here   -->

            </div>

          </div>
        </div>

      </div>
    </section>


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact</h2>
          <p>Keep in touch!</p>
        </div>

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-4">

            <div class="info-container d-flex flex-column align-items-center justify-content-center">
              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Location:</h4>
                  <p>Rafidia Street, Palestine, Nablus</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>support@clsonline.org</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Call:</h4>
                  <p>+972 568 050 65</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-clock flex-shrink-0"></i>
                <div>
                  <h4>Open Hours:</h4>
                  <p>Sun-Thu: 24 hour</p>
                </div>
              </div><!-- End Info Item -->
            </div>

          </div>

          <div class="col-lg-8">

            <form  id="mailing_form" method="post"  class="php-email-form">
               
              <input type="hidden" style="display: none;" name="secret_code" value="SECRET_TOKEN">
              <input type="hidden" style="display: none;" name="to" value="system">
              <input type="hidden" style="display: none;" name="sys_src" value="1">
              

              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Email - Subject" required>
              </div>

              <div class="form-group mt-3">
                <textarea class="form-control" name="message" id="message" rows="7" placeholder="Message" required></textarea>
              </div>
              <div >
                <div class="sent-message mb-1" id="mailing_notification">.</div>
              </div>
              <div class="text-center" onclick="submitForm(event)" > <button type="submit">Send Message</button></div>
            </form>


          </div><!-- End Contact Form -->

        </div>

      </div>
    </section>

  </main>

  <?php
include('assets/html/footer.php');
   ?>

  
<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>


<!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="https://kit.fontawesome.com/0132ea282b.js" crossorigin="anonymous"></script>




  <!-- custom JS Files -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/mailing.js"></script>
  







</body>

</html>