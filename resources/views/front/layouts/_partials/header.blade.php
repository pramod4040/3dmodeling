<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Muli">
   <link rel="author" href="https://plus.google.com/113101541449927918834"/>
 <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
   <!-- or -->
   <!-- font-awesome css link -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <!-- animate min css link -->
   <!-- animation css link -->
   <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/animate.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/animate.min.css')}}">
   <!-- slick slider css link -->
   <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/slick.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/slick-theme.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/owl.carousel.min.css')}}">
   <!-- main custom css link -->
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <link rel="stylesheet" href="{{asset('assets/front/css/reset.css')}}"><!-- Reset CSS -->
   <link rel="stylesheet" href="{{asset('assets/front/css/bootstrap.min.css')}}"> <!-- Bootstrap CSS -->

   <link href="https://fonts.googleapis.com/css?family=Fira+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> <!-- Google fonts -->
   <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> <!-- Google fonts -->
   <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/lightbox.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/flaticon.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/linearicons.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/slicknav.min.css')}}">
   <link rel="stylesheet" href="{{asset('assets/front/css/nivo-slider.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/style.css')}}">
   <!-- responsive css link -->
   <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/responsive.css')}}">

   <script src="{{asset('assets/front/js/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
   <title>Geo 3D Modelling</title>
</head>

<body>

<!-- Header -->

   <header id="header" class="header-section">
           <div class="bottom-header">
               <div class="container">
                   <div class="bottom-content-wrap row">
                        <div class="col-sm-6">
                           <div class="site-branding">
                               <a href="index.php"><img src="/assets/front/images/logo.png" alt="Brand"></a>
                               <div class="logo-text">
                                   <a href="/">geo 3D Modelling.PVT.LTD</a>
                               </div>
                           </div>
                       </div>
                      <div class="col-sm-6">
                          <ul id="mainmenu" class="nav navbar-nav nav-menu">
                               <li class="active"> <a href="/">Home</a></li>
                               <li> <a href="/pages/about-us">About Us</a></li>
                               <li class="dropdown"><a href="#">Product</a>
                                   <ul>
                                     @foreach($category as $cate)
                                      <li><a href="/category/details/{{$cate->slug}}">{{$cate->title}}</a></li>
                                    @endforeach
                                   </ul>
                               </li>

                               <li class="dropdown"><a href="#">Services</a>
                                 <ul>
                                   @foreach($service as $servi)
                                       <li><a href="/service/details/{{$servi->slug}}">{{$servi->title}}</a></li>
                                   @endforeach
                                   </ul>
                               </li>
                               <li> <a href="/client">Clients</a></li>
                               <li> <a href="/contact-us">Contact us</a></li>
                           </ul>
                      </div>
                   </div>
               </div>
           </div>
   </header><!-- /Header Section -->
