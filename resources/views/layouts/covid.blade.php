<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="title" content="The Cov">
      <meta property="fb:app_id" content="312" />
      <meta property="og:type" content="The Cov" />
      <meta property="og:url" content="http://demo9.steelthemes.com/html/the-cov-v-1/"/>
      <meta property="og:title" content="Kinder Doktor | Afias COVID-19 Ab megbízható gyorsteszt">
      <meta property="og:image" content="http://demo9.steelthemes.com/html/the-cov-v-1//covid/image/content-image.jpg">
      <meta property="og:description" content="Afias COVID-19 Ab megbízható gyorsteszt!">
      <meta name="full-screen" content="yes">
      <meta name="theme-color" content="#274782 ">
      <!-- Responsive -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
      <title>Kinder Doktor | Afias COVID-19 Ab megbízható gyorsteszt</title>
      <link rel="stylesheet" type="text/css" href="/covid/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="/covid/css/style.css">
      <!---------favicon--------------->
      <link rel="icon" type="image/png" href="/covid/image/logo-default.png" sizes="32x32">
      <link rel="icon" type="image/png" href="/covid/image/favicon-16x16.png" sizes="16x16">
      <!---------favicon--------------->
   </head>
   <body class="scroll_bar_style_one">
      <div class="page_wapper">
         <!--page_wapper-->
         <!--Start Preloader-->
         <div class="preloader">
            <div class="preloader_box">
               <div class="loader">
                  <img src="/covid/image/preloader.png" class="img-fluid" alt="img">
                  <p>Kérem várjon...</p>
               </div>
            </div>
         </div>
         <!--End Preloader-->
         <header class="header_v1">
             @include('partials.covid-navbar')
         </header>
         <!--Header-->
         <main class="main-content">
            <!------main-content------>
            <!-------slider--section------>
            <section class="banner type_one" id="home" style="background:url(/covid/image/main-slider/slider-1.jpg)">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-6 d-flex pr_0">
                        <div class="content_outer">
                           <div class="inner_box">
                              <h6  class="wow slideInDown" data-wow-delay="100ms" data-wow-duration="1500ms">#maradjotthon</h6>
                              <h1  class="wow slideInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">Afias COVID-19 Ab megbízható gyorsteszt</h1>
                              <p  class="wow slideInRight" data-wow-delay="300ms" data-wow-duration="1500ms">Find out everything you need to know about preventing, isolating and treating coronavirus. Our actions as individuals will go a long way in preventing, detecting and isolating potential cases of COVID-19.</p>
                              <div class="link_box wow slideInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                                  <a href="#" class="theme_btn tp_one"><span class="linearicons-calendar-text icon"></span>Online bejelentkezés</a> <a href="#arak" class="theme_btn tp_border link_hd"><span class="linearicons-arrow-right"></span>Árak</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="image_box wow fadeInDown" data-wow-delay="100ms" data-wow-duration="1500ms">
                           <img src="/covid/image/main-slider/slider--graphic-1.png" class="img-fluid" alt="img" />
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-------slider--section-end----->
            <!-----------counter--------------->
            @include('covid.sections.counter')
            <!-----------counter-end-------------->
            <!-----------about--------------->
            @include('covid.sections.about')
            <!-----------counter-end-------------->
            <!-----------symptoms--------------->
            @include('covid.sections.symptoms')
            <!-----------symptoms-end-------------->
            @include('covid.sections.prices')
            <!-----------faq--------------->
            @include('covid.sections.faq')
            <!-----------faq-end-------------->
            <!-----------handwash--------------->
            @include('covid.sections.handwash')
            <!-----------handwash-end-------------->
            <!-----------footer--------------->
            <section class="footer type_one  pdb_70 pdt_100">
               <div class="container">
                  <div class="row">
                     <!---------row----------->
                     <div class="col-lg-6 col-md-12">
                        <!---------col----------->
                        <div class="footer_widgets left type_one">
                           <div class="widgets_title">
                              <h1 class="title">Üzenet küldés</h1>
                              <p>Ha kérdése van, forduljon hozzánk bizalommal!</p>
                           </div>
                           <div class="form_box type_one">
                              <form>
                                 <div class="row">
                                    <div class="col-lg-12">
                                       <div class="form-group">
                                          <input type="text" name="name" placeholder="Neve" required/>
                                          <small class="linearicons-user"></small>
                                       </div>
                                    </div>
                                    <div class="col-lg-6">
                                       <div class="form-group">
                                          <input type="email" name="email" placeholder="Email címe" required/>
                                          <small class="linearicons-envelope-open"></small>
                                       </div>
                                    </div>
                                    <div class="col-lg-6">
                                       <div class="form-group">
                                          <input type="text" name="phone" placeholder="Telefonszáma" required/>
                                          <small class="linearicons-telephone"></small>
                                       </div>
                                    </div>
                                    <div class="col-lg-12">
                                       <div class="form-group textarea">
                                          <textarea name="message" placeholder="Üzenete..." rows="6" required></textarea>
                                          <small class="linearicons-pencil4"></small>
                                       </div>
                                    </div>
                                    <div class="col-lg-8">
                                       <div class="form-group mg_top check_box">
                                          <input name="checkbox" type="checkbox" id="test2" required="required">
                                          {{--<label for="test2">I accept the <a href="#" target="_blank">Privacy Policy.</a></label>--}}
                                       </div>
                                    </div>
                                    <div class="col-lg-4">
                                       <div class="form-group">
                                          <button class="submit_btn" type="submit">Küldés</button>
                                       </div>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <div class="col-lg-6 col-md-12">
                        <!---------col----------->
                        <div class="footer_widgets right type_one">
                           <div class="widgets_title">
                              <h1 class="title">Kapcsolat</h1>
                           </div>
                           <div class="emergency_phone">
                              <h6>Telefonszám</h6>
                              <h2><a href="tel:+36706282124" style="color: #dd2d4e;">+36706282124</a></h2>
                           </div>
                           <ul class="contact_all">
                              <li><a href="#"><span class="linearicons-home4"></span>Kecskemét 6000 Kápolna u. 15.</a></li>
                              <li><a href="#"><span class="linearicons-envelope-open"></span>Email: <small>kinderdoki@gmail.com</small></a></li>
                           </ul>
                           <ul class="social_media">
                              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                              <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                           </ul>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <!----------row-end---------->
                  </div>
               </div>
            </section>
            <!-----------footer-end-------------->
            <!-----------footerlast UNWELL?--------------->
            <section class="footerlast type_one  pdb_80 pdt_80">
               <div class="container">
                  <div class="row">
                     <!---------row----------->
                     <div class="col-lg-12 col-md-12  text-center">
                        <!---------col----------->
                        <div class="footer_last_box">
                           <div class="logo_footer">
                              <img src="/covid/image/logo-default.png" class="img-fluid" alt="img" />
                           </div>
                           <ul>
                              <li>© Copyright 2020 Kinder-Doktor</li>
                             <li> |</li>
                              <li> <a href="#">Adatkezelési Tájékoztató</a> </li>
                           </ul>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <!----------row-end---------->
                  </div>
               </div>
            </section>
            <!-----------footerlast-end-------------->
            <!------main-content-end----->
         </main>
         <!--page_wapper-end---->
      </div>
      <!--Scroll to top-->
      <a href="# " id="scroll" class="default-bg " style="display: inline;"><span class="fa fa-angle-up "></span></a>
      <!---------mbile-navbar----->
      <div class="bsnav-mobile">
         <div class="bsnav-mobile-overlay"></div>
         <div class="navbar">
            <button class="navbar-toggler toggler-spring mobile-toggler"><span class="linearicons-cross close_arrow"></span></button>
            <div class="search_form">
               <form>
                  <div class="form-group">
                     <input type="text" name="search" placeholder="Search..." />
                     <button class="serach_btn" type="submit"><i class="linearicons-magnifier search_icon"></i></button>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <!---------mbile-navbar----->
      <!-- /.side-menu__block -->
      <div class="side-menu__block">
         <div class="side-menu__block-overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
         </div>
         <!-- /.side-menu__block-overlay -->
         <div class="side-menu__block-inner">
            <div class="row ">
               <div class="col-lg-12 ">
                  <div class="side-menu__block-contact ">
                     <span class="side_menu_close linearicons-cross close_arrow"> </span>
                     <h2>Üzenet küldés</h2>
                     <p>Ha kérdése van, forduljon hozzánk bizalommal!</p>
                     <div class="form_outer">
                        <form>
                           <div class="row">
                              <div class="col-lg-12">
                                 <div class="from_group">
                                     <input type="text" name="name" placeholder="Neve" required/>
                                    <small class="linearicons-user"></small>
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <div class="from_group">
                                     <input type="email" name="email" placeholder="Email címe" required/>
                                    <small class="linearicons-envelope-open"></small>
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <div class="from_group">
                                     <input type="text" name="phone" placeholder="Telefonszáma" required/>
                                    <small class="linearicons-telephone"></small>
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <div class="from_group text-area">
                                     <textarea name="message" placeholder="Üzenete..." rows="6" required></textarea>
                                    <small class="linearicons-pencil4"></small>
                                 </div>
                              </div>
                              <div class="col-lg-5">
                                 <div class="from_group">
                                     <button class="submit_btn" type="submit">Küldés</button>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
                  <!-- /.side-menu__block-contact -->
                  <div class="side-menu__block-contact">
                     <h3 class="side-menu__block__title">Közösségi média</h3>
                     <!-- /.side-menu__block__title -->
                     <ul class="social_media">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                     </ul>
                     <!-- /.side-menu__block-contact__list -->
                     <ul class="links">
                        <li> <a href="#">Adatkezelési Tájékoztató</a></li>
                     </ul>
                  </div>
                  <!-- /.side-menu__block-contact -->
                  <p class="side-menu__block__text site-footer__copy-text">
                     <a href="#">© Copyright 2020 Kinder-Doktor</a> 
                  </p>
               </div>
            </div>
            <!-- /.side-menu__block-inner -->
         </div>
      </div>
      <!-- /.side-menu__block -->
        <!-----------------------------------script--------------------------->
        <script src="/covid/js/all.js"></script> 
        <script src="/covid/js/custom.js "></script>
         <!-----------------------------------script-------------------
         <script src="/covid/js/jquery.js "></script>
         <script src="/covid/js/popper.min.js "></script>
         <script src="/covid/js/bootstrap.min.js "></script>
         <script src="/covid/js/bsnav.min.js "></script>
         <script src="/covid/js/jquery-ui.js "></script>
         <script src="/covid/js/wow.js "></script>
         <script src="/covid/js/owl.js "></script>
         <script src="/covid/js/jquery.fancybox.js "></script>
         <script src="/covid/js/TweenMax.min.js "></script>
         <script src="/covid/js/appear.js "></script>
         <script src="/covid/js/moment.js "></script>
         <script src="/covid/js/odometer.min.js "></script>
         <script src="/covid/js/pagenav.js "></script>
         <script src="/covid/js/custom.js "></script>------------------->
   </body>
</html>
