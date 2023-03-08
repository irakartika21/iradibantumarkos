<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Cuciin</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('mockup/css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('mockup/css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ asset('mockup/css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="{{ asset('mockup/images/fevicon.png" type="image/gif')}}" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ asset('mockup/css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="{{ asset('mockup/https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css')}}">
      <!-- fonts -->
      <link href="{{ asset('mockup/https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet')}}">
      <!-- font awesome -->
      <link rel="stylesheet" type="text/css" href="{{ asset('mockup/https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}">
      <!--  -->
      <!-- owl stylesheets -->
      <link href="{{ asset('mockup/https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet')}}">
      <link rel="stylesheet" href="{{ asset('mockup/css/owl.carousel.min.css')}}">
      <link rel="stylesoeet" href="{{ asset('mockup/css/owl.theme.default.min.css')}}">
      <link rel="stylesheet" href="{{ asset('mockup/https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css')}}" media="screen">
   </head>
   <body>
      <!-- banner bg main start -->
      <div class="banner_bg_main">
         <!-- header top section start -->
         <div class="container">
            <div class="header-section">
            </div>
         </div>
         <!-- header top section start -->
         <!-- logo section start -->
         <div class="logo_section">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="logo"><a href="{{ asset('mockup/index.html')}}"></a></div>
                  </div>
               </div>
            </div>
         </div>
         <!-- logo section end -->
         <!-- header section start -->
         <div class="header_section">
            <div class="container">
               <div class="containt_main">
                  <div id="mySidenav" class="sidenav">
                     <a href="{{ asset('mockup/javascript:void(0)')}}" class="closebtn" onclick="closeNav()">&times;</a>
                     <a href="{{ route('login.proses')}}">Menu</a>
                     <a href="">Admin</a>
                     <a href="">Kasir</a>
                     <a href="">Owner</a>
                  </div>
                  <span class="toggle_icon" onclick="openNav()"><img src="{{ asset('mockup/images/toggle-icon.png')}}"></span>
                  <div class="dropdown">
                  </div>
                  <div class="main">
                     <!-- Another variation with a button -->
                     <div class="input-group">
                     </div>
                  </div>
                  <div class="header_box">
                     <div class="lang_box ">
                     </div>
                     <div class="login_menu">
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- header section end -->
         <!-- banner section start -->
         <div class="banner_section layout_padding">
            <div class="container">
               <div id="my_slider" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital">CUCIIN <br>Clean Your Shirt</h1>
                              <div class="buynow_bt"><a href="{{ route('login.proses')}}">Clean Now</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital">CUCIIN <br>Clean Your Shirt</h1>
                              <div class="buynow_bt"><a href="{{ route('login.proses')}}">Clean Now</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital">CUCIIN <br>Clean Your Shirt</h1>
                              <div class="buynow_bt"><a href="{{ route('login.proses')}}">Clean Now</div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                  <i class="fa fa-angle-left"></i>
                  </a>
                  <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                  <i class="fa fa-angle-right"></i>
                  </a>
               </div>
            </div>
         </div>
         <!-- banner section end -->
      </div>
      <!-- banner bg main end -->
      <!-- fashion section start -->
      <div class="fashion_section">
         <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="fashion_taital">Pakaian</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Kaos</h4>
                                 <div class="tshirt_img"><img src="{{ asset('mockup/images/tshirt-img.png')}}"></div>
                                 <div class="btn_main">
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Hodie</h4>
                                 <div class="tshirt_img"><img src="{{ asset('mockup/images/hoodie.jpg')}}"></div>
                                 <div class="btn_main">
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Jaket</h4>
                                 <div class="tshirt_img"><img src="{{ asset('mockup/images/inijaket.jpg')}}"></div>
                                 <div class="btn_main">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="fashion_taital">Pakaian</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Kaos</h4>
                                 <div class="tshirt_img"><img src="{{ asset('mockup/images/tshirt-img.png')}}"></div>
                                 <div class="btn_main">
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Hoodie</h4>
                                 <div class="tshirt_img"><img src="{{ asset('mockup/images/hoodie.jpg')}}"></div>
                                 <div class="btn_main">
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Jaket</h4>
                                 <div class="tshirt_img"><img src="{{ asset('mockup/images/inijaket.jpg')}}"></div>
                                 <div class="btn_main">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="fashion_taital">Pakaian</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Kaos</h4>
                                 <div class="tshirt_img"><img src="{{ asset('mockup/images/tshirt-img.png')}}"></div>
                                 <div class="btn_main">
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Hoodie</h4>
                                 <div class="tshirt_img"><img src="{{ asset('mockup/images/hoodie.jpg')}}"></div>
                                 <div class="btn_main">
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Jaket</h4>
                                 <div class="tshirt_img"><img src="{{ asset('mockup/images/inijaket.jpg')}}"></div>
                                 <div class="btn_main">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
</div>
</div>
         </div>
      </div>
      <!-- fashion section end -->
      <!-- electronic section start -->
      <div class="fashion_section">
         <div id="electronic_main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="fashion_taital">Kiloan</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Selimut</h4>
                                 <div class="electronic_img"><img src="{{ asset('mockup/images/selimut.jpg')}}"></div>
                                 <div class="btn_main">
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Bed Cover</h4>
                                 <div class="electronic_img"><img src="{{ asset('mockup/images/bed cover.jpg')}}"></div>
                                 <div class="btn_main">
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Boneka</h4>
                                 <div class="electronic_img"><img src="{{ asset('mockup/images/boneka.jpg')}}"></div>
                                 <div class="btn_main">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="fashion_taital">Kiloan</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Selimut</h4>
                                 <div class="electronic_img"><img src="{{ asset('mockup/images/selimut.jpg')}}"></div>
                                 <div class="btn_main">
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Bed Cover</h4>
                                 <div class="electronic_img"><img src="{{ asset('mockup/images/bed cover.jpg')}}"></div>
                                 <div class="btn_main">
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Boneka</h4>
                                 <div class="electronic_img"><img src="{{ asset('mockup/images/boneka.jpg')}}"></div>
                                 <div class="btn_main">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="fashion_taital">Kiloan</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Selimut</h4>
                                 <div class="electronic_img"><img src="{{ asset('mockup/images/selimut.jpg')}}"></div>
                                 <div class="btn_main">
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Bed Cover</h4>
                                 <div class="electronic_img"><img src="{{ asset('mockup/images/bed cover.jpg')}}"></div>
                                 <div class="btn_main">
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Boneka</h4>
                                 <div class="electronic_img"><img src="{{ asset('mockup/images/boneka.jpg')}}"></div>
                                 <div class="btn_main">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
</div>
         </div>
      </div>
      <!-- jewellery  section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="input_bt">
            </div>
            <div class="footer_menu">
               <ul>
               </ul>
            </div>
            <div class="location_main">WhasApp Number : <a href="#">+1 1800 1200 1200</a></div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">© 2020 All Rights Reserved. Design by <a href="https://html.design"></a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="{{ asset('mockup/js/jquery.min.js')}}"></script>
      <script src="{{ asset('mockup/js/popper.min.js')}}"></script>
      <script src="{{ asset('mockup/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{ asset('mockup/js/jquery-3.0.0.min.js')}}"></script>
      <script src="{{ asset('mockup/js/plugin.js')}}"></script>
      <!-- sidebar -->
      <script src="{{ asset('mockup/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{ asset('mockup/js/custom.js')}}"></script>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "250px";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
      </script>
   </body>
</html>