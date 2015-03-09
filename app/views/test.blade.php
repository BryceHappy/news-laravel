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

        <nav>
          <ul>          
           @foreach($history as $key => $value)
            <li><a href="#{{$key}}">{{$key}}</a></li>
           @endforeach
         </ul>
        </nav>
      </div> 
    </div>
  </div>    
  <div class="container_12">
    <div class="grid_12 ">     
      <h2>找詢你要的懶人包？<br>
        <span></span>
      </h2>      
      <a href="#" class="btn">或是增加一個懶人包！</a>
   </div> 
    <div class="clear"></div>  
  </div> 
</header>
<!--=====================
          Content
======================-->
<?php
  $count = 1;
?>  
@foreach($history as $Day => $all_value)
  <?php
    if( $count % 2 == 1)
     $div_class = "about_inset__1";
    else
      $div_class = "about_bg__1";

    $count++;


  ?>

<section id="{{$Day}}" class="page">
  <div class="{{$div_class}}">
    <div class="container_12">
      <div class="grid_12">
        <h3 class="head__1">{{ $history_title." @".$Day}}</h3>
        <div class="story">

  @foreach ($all_value as $key => $one_value)

  <?php
    $str = "";

    if($key % 2 == 0)
      $div_class_grid = "grid_6 alpha";
    else {
      $div_class_grid = "grid_6 omega";
      $str = "inset__1";
    }

  ?>
    <div class="{{$div_class_grid}}">

    @foreach ($one_value as $kk => $vv)
        <div class="block-1 {{$str}}">
          <time datetime="{{$vv['time']}}" class="cornered">{{$vv['time']}}</time>
          <div class="extra_wrapper">
            <div class="text1 tx__1"><a href="{{  URL::to('list/' . $vv['id'] . '/edit') }}">Here we start</a></div>
            {{$vv['content']}}
          </div>
        </div>
        <?php
          if(!empty($str))
            $str = "inset__2";
        ?>
    @endforeach

    </div> 
  @endforeach


          <div class="clear"></div>
        
          <div class="cornered pos__1">快幫忙<br>補上吧！</div>
        </div>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
    </div>
  </div>
</section>
@endforeach

<!-- <section id="about2" class="page">
  <div class="about_bg__1">
    <div class="container_12">
      <div class="grid_12">
        <h3 class="head__1">全部事件列表</h3>
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
            <div class="block-1 ">
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
            <div class="block-1 inset__2">
              <time datetime="2014-01-01" class="cornered">Sept 2013</time>
              <div class="extra_wrapper">
                <div class="text1 tx__1"><a href="#">The major projects</a></div>
                Mivamus at magna non nunc tristique rhoncus. Aliquam nibh ante, egestas id dictum a, commodo luctus libere.
              </div>
            </div>
          </div>


          <div class="clear"></div>
        
          <div class="cornered pos__1">快幫忙<br>補上吧！</div>
        </div>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
    </div>
  </div>
</section> -->



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

  