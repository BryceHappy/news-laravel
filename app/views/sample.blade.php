<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">

<meta name = "format-detection" content = "telephone=no" />

<link rel="stylesheet" href="{{asset('assets/css/contact-form.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/touchTouch.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/jquery-migrate-1.1.1.js')}}"></script>
<script src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script> 
<script src="{{asset('assets/js/superfish.js')}}"></script>
<script src="{{asset('assets/js/jquery.equalheights.js')}}"></script>
<script src="{{asset('assets/js/jquery.mobilemenu.js')}}"></script>
<script src="{{asset('assets/js/jquery.ui.totop.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.js')}}"></script>
<script src="{{asset('assets/js/touchTouch.jquery.js')}}"></script>
<script src="{{asset('assets/js/TMForm.js')}}"></script>
<script src="{{asset('assets/js/modal.js')}}"></script>

<script>
 $(window).load(function(){
  $().UItoTop({ easingType: 'easeOutQuart' });

  $("#owl").owlCarousel({
    items : 4, //10 items above 1000px browser width
    itemsDesktop : [995,1], //5 items between 1000px and 901px
    itemsDesktopSmall : [767, 1], // betweem 900px and 601px
    itemsTablet: [700, 1], //2 items between 600 and 0
    itemsMobile : [479, 1], // itemsMobile disabled - inherit from itemsTablet option
    navigation : true,
    pagination :  false
  });
    $('.gallery .gall_item').touchTouch();
 }); 



</script>
<!--[if lt IE 8]>
 <div style=' clear: both; text-align:center; position: relative;'>
   <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
     <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg')}}" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
   </a>
</div>
<![endif]-->
<!--[if lt IE 9]>
<script src="{{asset('assets/js/html5shiv.js')}}"></script>
<link rel="stylesheet" media="screen" href="{{asset('assets/css/ie.css')}}">
<![endif]-->
</head>

<body>
<!--==============================
              header
=================================-->
<div class="menu_bg"></div>
<header>
  
  <div class="navigation single-page-nav">
    <div class="container_12">
      <div class="grid_12">
        <h1 class="logo">
          <a href="index.html"><img src="{{asset('assets/images/logo.png')}}" alt="">
          </a>
        </h1>
        <nav>
          <ul>
           <li><a href="#services" class="current">Services</a></li>
           <li><a href="#portfolio">Portfolio</a></li>
           <li><a href="#about">About</a></li>
           <li><a href="#contacts">Contacts</a></li>
         </ul>
        </nav>
      </div> 
    </div>
  </div>    
  <div class="container_12">
    <div class="grid_12 ">     
      <h2>We Materialize Your Ideas into Digital Work <br>
        <span></span>
      </h2>      
      <a href="#" class="btn">read more</a>
      <div class="socials">
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-google-plus"></a>
      </div>
   </div> 
    <div class="clear"></div>  
  </div> 
</header>
<!--=====================
          Content
======================-->
<section id="services" class="page">
  <div class="container_12"><div class="ic">More Website Templates @ TemplateMonster.com - August26, 2014!</div>
    <div class="grid_12">
      <h3>Services</h3>
    </div>
    <div class="grid_9">
      <div class="serv_links">
        <a href="#" class="serv"><span>Web</span></a>
        <a href="#" class="serv"><span>Development</span></a>
        <a href="#" class="serv"><span>SEO</span></a>
        <a href="#" class="serv"><span>SEM</span></a>
        <a href="#" class="serv"><span>Graphic</span></a>
        <a href="#" class="serv"><span>Ideas</span></a>
        <a href="#" class="serv"><span>Management</span></a>
        <a href="#" class="serv"><span>Planning</span></a>
      </div>
    </div>
    <div class="grid_3 fwn">
      <div class="text1">Say what you need and we’ll do it for you!</div>
      Read about this <strong><a href="http://blog.templatemonster.com/free-website-templates/" rel="nofollow">free theme</a></strong> on our official blog. <br> To find the whole collection of <strong><a href="http://www.templatemonster.com/properties/topic/design-photography/" rel="nofollow">templates for design companies</a></strong>, visit TemplateMonster.com <br>
      <a href="#" class="btn">read more</a>
    </div>
      <div class="clear"></div>
  </div>
</section>
<section id="portfolio" class="page page_bg__1">
  <div class="container_12">
    <div class="grid_12">
      <h3 class="head__1">Portfolio</h3>
      <div id="owl" class="gallery">
        <div class="item"><a href="{{asset('assets/images/big1.jpg')}}" class="gall_item"><img src="{{asset('assets/images/page1_img1.jpg')}}" alt=""></a></div>
        <div class="item"><a href="{{asset('assets/images/big2.jpg')}}" class="gall_item"><img src="{{asset('assets/images/page1_img2.jpg')}}" alt=""></a></div>
        <div class="item"><a href="{{asset('assets/images/big3.jpg')}}" class="gall_item"><img src="{{asset('assets/images/page1_img3.jpg')}}" alt=""></a></div>
        <div class="item"><a href="{{asset('assets/images/big4.jpg')}}" class="gall_item"><img src="{{asset('assets/images/page1_img4.jpg')}}" alt=""></a></div>
        <div class="item"><a href="{{asset('assets/images/big1.jpg')}}" class="gall_item"><img src="{{asset('assets/images/page1_img1.jpg')}}" alt=""></a></div>
        <div class="item"><a href="{{asset('assets/images/big2.jpg')}}" class="gall_item"><img src="{{asset('assets/images/page1_img2.jpg')}}" alt=""></a></div>
        <div class="item"><a href="{{asset('assets/images/big3.jpg')}}" class="gall_item"><img src="{{asset('assets/images/page1_img3.jpg')}}" alt=""></a></div>
        <div class="item"><a href="{{asset('assets/images/big4.jpg')}}" class="gall_item"><img src="{{asset('assets/images/page1_img4.jpg')}}" alt=""></a></div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</section>
<section id="about" class="page">
  <div class="about_inset__1">
    <div class="container_12">
      <div class="grid_12">
        <h3 class="head__1">About</h3>
        <div class="story">
          <div class="grid_6 alpha">
            <div class="block-1">
              <time datetime="2014-01-01" class="cornered">Aug 2013</time>
              <div class="extra_wrapper">
                <div class="text1 tx__1"><a href="#">Here we start</a></div>
                Vivamus at magna non nunc tristique rhoncus. Aliquam nibh ante, egestas id dictum a, commodo luctus libero.
              </div>
            </div>
            <div class="block-1">
              <time datetime="2014-01-01" class="cornered">June 2014</time>
              <div class="extra_wrapper">
                <div class="text1 tx__1"><a href="#">Google I/O Conference</a></div>
                Bivamus at magna non nunc tristique rhoncus. Aliquam nibh ante, egestas id dictum a, commodo luctus liberot.
              </div>
            </div>
          </div>
          <div class="grid_6 omega">
            <div class="block-1 inset__1">
              <time datetime="2014-01-01" class="cornered">Sept 2013</time>
              <div class="extra_wrapper">
                <div class="text1 tx__1"><a href="#">The major projects</a></div>
                Mivamus at magna non nunc tristique rhoncus. Aliquam nibh ante, egestas id dictum a, commodo luctus libere.
              </div>
            </div>
          </div>
          <div class="clear"></div>
        
          <div class="cornered pos__1">Our Story <br> Goes On</div>
        </div>
      <div class="clear"></div>
    </div>      <div class="clear"></div>

    </div>
  </div>
  <div class="about_bg__1">
    <div class="container_12">
      <div class="grid_12">
        <h3 class="head__1">Our Team</h3>
        <div class="grid_9 alpha">
          <div class="team">
            <a href="#" class="team_item"><img src="{{asset('assets/images/corner_img1.png')}}" alt=""></a>
            <a href="#" class="team_item"><img src="{{asset('assets/images/corner_img2.png')}}" alt=""></a>
            <a href="#" class="team_item"><img src="{{asset('assets/images/corner_img3.png')}}" alt=""></a>
            <a href="#" class="team_item"><img src="{{asset('assets/images/corner_img4.png')}}" alt=""></a>
            <a href="#" class="team_item"><img src="{{asset('assets/images/corner_img5.png')}}" alt=""></a>
            <a href="#" class="team_item"><img src="{{asset('assets/images/corner_img6.png')}}" alt=""></a>
            <a href="#" class="team_item"><img src="{{asset('assets/images/corner_img7.png')}}" alt=""></a>
            <a href="#" class="team_item"><img src="{{asset('assets/images/corner_img8.png')}}" alt=""></a>
          </div>
        </div>
        <div class="grid_3 omega">
          <div class="text2">We are glad to meet you!</div>
          <div class="fwn">Vivamus at magna non nunc tristique rhoncus. Aliquamero nibh ante, egestas id dictum a commodo luctus libero</div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</section>
<section id="contacts" class="page">
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d24214.807650104907!2d-73.94846048422478!3d40.65521573400813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1395650655094" style="border:0"></iframe>          
  <div class="contacts_bg">
    <div class="container_12">
      <div class="grid_12">
        <h3 class="head__1">Contacts</h3>
      </div>
      <div class="grid_5">
        <div class="text2">Our Address</div>
        <p class="fz__1">Lorem ipsum dolor sit amet, consecteturpiscinger elit um dolor sit amet, consecteturpiscing. </p>
        <p>Our <strong><a href="http://www.templatemonster.com/" rel="nofollow">premium templates</a></strong> go with 24/7 support. </p>
        <p>If you have any questions about customization of <strong><a href="http://blog.templatemonster.com/free-website-templates/ " rel="nofollow">freebies</a></strong>, address to <strong><a href="http://www.templatetuning.com/" rel="nofollow">TemplateTuning</a></strong>. Note that it's a paid service.</p>
        The Company Name Inc. <br>
        9870 St Vincent Place, <br>
        Glasgow, DC 45 Fr 45. <br>
        Telephone: +1 800 603 6035 <br>
        FAX: +1 800 889 9898 <br>
        E-mail: <a href="#">mail@demolink.org</a>
      </div>
      <div class="grid_6 prefix_1">
        <div class="text2">Write Us</div>
              <form id="contact-form">
                  <div class="contact-form-loader"></div>
                  <fieldset>
                    <label class="name">
                      <input type="text" name="name" placeholder="Name:" value="" data-constraints="@Required @JustLetters"  />
                      <span class="empty-message">*This field is required.</span>
                      <span class="error-message">*This is not a valid name.</span>
                    </label>
                   
                    <label class="email">
                      <input type="text" name="email" placeholder="E-mail:" value="" data-constraints="@Required @Email" />
                      <span class="empty-message">*This field is required.</span>
                      <span class="error-message">*This is not a valid email.</span>
                    </label>
                    <label class="phone">
                      <input type="text" name="phone" placeholder="Phone:" value="" data-constraints="@Required @JustNumbers" />
                      <span class="empty-message">*This field is required.</span>
                      <span class="error-message">*This is not a valid phone.</span>
                    </label>
                   
                    <label class="message">
                      <textarea name="message" placeholder="Message:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
                      <span class="empty-message">*This field is required.</span>
                      <span class="error-message">*The message is too short.</span>
                    </label>
                    <div class="ta__right">
                      <a href="#" class="btn" data-type="reset">clear </a>
                      <a href="#" class="btn" data-type="submit">send </a>
                    </div>
                  </fieldset> 
                  <div class="modal fade response-message">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">Modal title</h4>
                        </div>
                        <div class="modal-body">
                          You message has been sent! We will be in touch soon.
                        </div>      
                      </div>
                    </div>
                  </div>
                </form>   
      </div>
    </div>
    <div class="clear"></div>
  </div>
</section>
<!--==============================
              footer
=================================-->
<footer id="footer">
  <div class="container_12">
    <div class="grid_12"> 
      <div class="copyright"><span class="color1">DSGN</span> &copy; <span id="copyright-year">2014</span> | <a href="#">Privacy Policy </a>
       <div class="sub-copy">Website designed by <a href="http://www.templatemonster.com/" rel="nofollow">TemplateMonster.com</a></div>
      </div>
    </div>
  </div>  
  <div class="clear"></div>
</footer>
<a href="#" id="toTop" class="fa fa-chevron-up"></a>
<script src="{{asset('assets/js/jquery.singlePageNav.min.js')}}"></script>
        <script>

            // Prevent console.log from generating errors in IE for the purposes of the demo
            if ( ! window.console ) console = { log: function(){} };

            // The actual plugin
            $('.single-page-nav').singlePageNav({
                offset: $('.single-page-nav').outerHeight(),
                filter: ':not(.external)',
                updateHash: true,
                beforeStart: function() {
                    console.log('begin scrolling');
                },
                onComplete: function() {
                    console.log('done scrolling');
                }
            });
        </script>
</body>
</html>

  