<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="title" content="The Cov">
      <meta property="fb:app_id" content="312" />
      <meta property="og:type" content="The Cov" />
      <meta property="og:url" content="http://demo9.steelthemes.com/html/the-cov-v-1/"/>
      <meta property="og:title" content="The Cov is html 5 Template">
      <meta property="og:image" content="http://demo9.steelthemes.com/html/the-cov-v-1//covid/image/content-image.jpg">
      <meta property="og:description" content="The Cov is html 5 Template Developed with By Steelthemes For Medical">
      <meta name="full-screen" content="yes">
      <meta name="theme-color" content="#274782 ">
      <!-- Responsive -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
      <title>One Page | The Cov | Responsive HTML 5 Template</title>
      <link rel="stylesheet" type="text/css" href="/covid/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="/covid/css/style.css">
      <!---------favicon--------------->
      <link rel="icon" type="image/png" href="/covid/image/favicon-32x32.png" sizes="32x32">
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
                              <h6  class="wow slideInDown" data-wow-delay="100ms" data-wow-duration="1500ms">#stayathome</h6>
                              <h1  class="wow slideInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">Protect yourself and others from getting sick</h1>
                              <p  class="wow slideInRight" data-wow-delay="300ms" data-wow-duration="1500ms">Find out everything you need to know about preventing, isolating and treating coronavirus. Our actions as individuals will go a long way in preventing, detecting and isolating potential cases of COVID-19.</p>
                              <div class="link_box wow slideInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                                 <a href="#" class="theme_btn tp_one"><span class="linearicons-bubble-dots"></span> Check suggestions</a> <a href="#" class="theme_btn tp_border"><span class="linearicons-arrow-right"></span>   About COVID-19</a>
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
            <section class="counter type_one pdt_50 pdb_50">
               <div class="container">
                  <div class="row">
                     <!---------row----------->
                     <div class="col-lg-6 col-md-12">
                        <!---------col----------->
                        <div class="heading white tp_one">
                           <h6>Worldwide Tracker</h6>
                           <h1>Coronavirus Pandemic</h1>
                           <p>Last updated: March 27, 2020, 14:49 GMT</p>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <div class="col-lg-6 col-md-12 d-flex">
                        <!---------col----------->
                        <div class="counter_box_outer">
                           <div class="row">
                              <div class="col-lg-4">
                                 <div class="counter_box type_one">
                                    <h2><span class="odometer " data-count="558357"></span></h2>
                                    <h6>Coronavirus Cases</h6>
                                 </div>
                              </div>
                              <div class="col-lg-4">
                                 <div class="counter_box type_one">
                                    <h2><span class="odometer " data-count="25262"></span></h2>
                                    <h6>Deaths</h6>
                                 </div>
                              </div>
                              <div class="col-lg-4">
                                 <div class="counter_box type_one">
                                    <h2><span class="odometer " data-count="128718"></span></h2>
                                    <h6>Recovered</h6>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!---------col-end---------->
                     </div>
                     <!----------row-end---------->
                  </div>
               </div>
            </section>
            <!-----------counter-end-------------->
            <!-----------about--------------->
            @include('covid.sections.about')
            <!-----------counter-end-------------->
            <!-----------symptoms--------------->
            @include('covid.sections.symptoms')
            <!-----------symptoms-end-------------->
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
                              <h1 class="title">Get in touch</h1>
                              <p> If you need answers to your question, feel free to use our contact form below<br class="md_display_none"> and our experts will get back to you immediatly</p>
                           </div>
                           <div class="form_box type_one">
                              <form>
                                 <div class="row">
                                    <div class="col-lg-6">
                                       <div class="form-group">
                                          <input type="text" name="name" placeholder="Your Name" />
                                          <small class="linearicons-user"></small>
                                       </div>
                                    </div>
                                    <div class="col-lg-6">
                                       <div class="form-group">
                                          <input type="email" name="email" placeholder="Your Email Address" />
                                          <small class="linearicons-envelope-open"></small>
                                       </div>
                                    </div>
                                    <div class="col-lg-6">
                                       <div class="form-group">
                                          <input type="text" name="phone" placeholder="Your Phone" />
                                          <small class="linearicons-telephone"></small>
                                       </div>
                                    </div>
                                    <div class="col-lg-6">
                                       <div class="form-group">
                                          <select name="location" id="location">
                                             <option selected="selected">Select your Location</option>
                                             <option>3</option>
                                             <option>4</option>
                                             <option>5</option>
                                          </select>
                                          <small class="linearicons-network"></small>
                                       </div>
                                    </div>
                                    <div class="col-lg-12">
                                       <div class="form-group textarea">
                                          <textarea name="message" placeholder="Your Message..." rows="6"></textarea>
                                          <small class="linearicons-pencil4"></small>
                                       </div>
                                    </div>
                                    <div class="col-lg-8">
                                       <div class="form-group mg_top check_box">
                                          <input name="checkbox" type="checkbox" id="test2" required="required">
                                          <label for="test2">I accept the <a href="#" target="_blank">Privacy Policy.</a></label>
                                       </div>
                                    </div>
                                    <div class="col-lg-4">
                                       <div class="form-group">
                                          <button class="submit_btn" type="submit">Submit</button>
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
                              <h1 class="title">Contact us</h1>
                           </div>
                           <div class="emergency_phone">
                              <h6>Emergency phone</h6>
                              <h2> +61 (8) 8234 3555</h2>
                           </div>
                           <ul class="contact_all">
                              <li><a href="#"><span class="linearicons-home4"></span>Level 13, 2 Elizabeth St, Melbourne, Victoria 3000, AUS</a></li>
                              <li><a href="#"><span class="fa fa-skype"></span>Skype ID: <small>thecov.net</small></a></li>
                              <li><a href="#"><span class="linearicons-telephone"></span>Phone: <small>+61 (8) 8277 9222</small></a></li>
                              <li><a href="#"><span class="linearicons-envelope-open"></span>Email: <small>info@thecov.net</small></a></li>
                           </ul>
                           <ul class="social_media">
                              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                              <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                           </ul>
                           <div class="anouncement">
                              <h5>Announcement:</h5>
                              <p> All the information based on WHO, NHS and CDC website. Information on our website is meant for awareness, if you have any doubt please verify from respective site.</p>
                           </div>
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
                              <img src="/covid/image/footer-logo.png" class="img-fluid" alt="img" />
                           </div>
                           <ul>
                              <li>© Copyright 2020 TheCov Protect Yourself</li>
                             <li> |</li>
                              <li><a href="#">Term of Use </a> <a href="#">  Privacy Policy  </a> <a href="#">  Impressum</a></li>
                           </ul>
                           <p  class="side-menu__block__text site-footer__copy-text">Developed with <span class="linearicons-heart"></span> by<small><a href="https://themeforest.net/user/steelthemes/portfolio?direction=desc&order_by=sortable_at&view=grid"> Steelthemes</a></small></p>
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
                     <h2>Get in touch</h2>
                     <p>  If you have any question before we start, please fill below  the contact form.</p>
                     <div class="form_outer">
                        <form>
                           <div class="row">
                              <div class="col-lg-12">
                                 <div class="from_group">
                                    <input type="text" name="name" placeholder="Your Name" />
                                    <small class="linearicons-user"></small>
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <div class="from_group">
                                    <input type="email" name="email" placeholder="Your Email Address" />
                                    <small class="linearicons-envelope-open"></small>
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <div class="from_group">
                                    <input type="text" name="phone" placeholder="Your Phone" />
                                    <small class="linearicons-telephone"></small>
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <div class="from_group text-area">
                                    <textarea rows="5" placeholder="Your Message..."></textarea>
                                    <small class="linearicons-pencil4"></small>
                                 </div>
                              </div>
                              <div class="col-lg-7">
                                 <div class="form-group mg_top check_box">
                                    <input name="checkbox" type="checkbox" id="test7" required="required">
                                    <label for="test7">I accept the <a href="#" target="_blank">Privacy Policy.</a></label>
                                 </div>
                              </div>
                              <div class="col-lg-5">
                                 <div class="from_group">
                                    <button class="submit_btn" type="submit">Submit</button>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
                  <!-- /.side-menu__block-contact -->
                  <div class="side-menu__block-contact">
                     <h3 class="side-menu__block__title">Social Network</h3>
                     <!-- /.side-menu__block__title -->
                     <ul class="social_media">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                     </ul>
                     <!-- /.side-menu__block-contact__list -->
                     <ul class="links">
                        <li><a href="#">Term of Use </a></li>
                        <li> <a href="#">  Privacy Policy  </a></li>
                        <li> <a href="#">  Impressum</a></li>
                     </ul>
                  </div>
                  <!-- /.side-menu__block-contact -->
                  <p class="side-menu__block__text site-footer__copy-text">
                     <a href="#">© Copyright 2020 TheCov Protect Yourself.</a> 
                  </p>
                  <p  class="side-menu__block__text site-footer__copy-text">Developed with <span class="linearicons-heart"></span> by<small><a href="https://themeforest.net/user/steelthemes/portfolio?direction=desc&order_by=sortable_at&view=grid"> Steelthemes</a></small></p>
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
