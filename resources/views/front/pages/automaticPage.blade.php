@extends('front.layouts.app')

@section('content')


<div class="breadcrumbs overlay" data-stellar-background-ratio="0.7" style="background-image: url({{$bannerimage->about_us_banner ? '/uploads/setting/'.$bannerimage->about_us_banner :'/assets/front/images/slider-bg1.jpg'}})";>


    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="list">
                    <li><a href="/">Home</a></li>
                    <li><a href="#">{{$thatpage->title}}</a></li>
                </ul>
                <h2>{{$thatpage->title}}</h2>
            </div>
        </div>
    </div>
</div>
<!--/ End Breadcrumb -->


<div class="inner-section-area section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="row">
                  @if($thatpage->slug == 'about-us')
                    <div class="col-md-12 single-page-images m-0 mb-2">
                        <img src="/uploads/pages/{{$thatpage->slug}}/{{$thatpage->image}}">
                    </div>
                  @endif

                    <div class="col-md-12 single-page-text mt-4">
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> -->
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> -->
                        {!! $thatpage->description !!}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="sidebar-widget mb-30">
                  <h5>Services</h5>
                  <ul>
                    @foreach($service->shuffle()->take(6) as $servi)
                        <li><a href="/service/details/{{$servi->slug}}">{{$servi->title}}</a></li>
                    @endforeach
                  </ul>
              </div>
                <!-- <div class="sidebar-widget mb-30">
                    <h5>Services</h5>
                    <ul>
                        <li><a href="service-single-page.php">Geospatial Consulting</a></li>
                        <li><a href="service-single-page.php">3D Modelling</a></li>
                        <li><a href="service-single-page.php">Road Design</a></li>
                        <li><a href="service-single-page.php">Surveying</a></li>
                    </ul>
                </div> -->

                <div class="sidebar-widget mb-30">
                    <h5>Product</h5>
                    <ul>
                      @foreach($product as $rela)
                        <li><a href="">{{$rela->name}}</a></li>
                      @endforeach

                    </ul>
                </div>

                <div class="sidebar-widget">
                            <h3>News</h3>
                            <div class="recent-post-widget">
                              @foreach($news as $new)
                                <div class="recent-posts-content clearfix">
                                    <div class="image-recent-post">
                                        <img src="/uploads/news/{{$new->image}}" alt="recent img">
                                    </div>
                                    <div class="date-title-recent-post">
                                        <span class="recent-post-title">
                                            <a href="/news/details/{{$new->slug}}">{{$new->title}}</a>
                                        </span>
                                        <span class="recent-post-date">{{\Carbon\Carbon::parse($new->create_at)->format('D M Y')}}</span>
                                    </div>
                                </div>
                               @endforeach


                            </div>
                </div>
                    <!-- Add Widget -->
                    <div class="add-widget">
                        <a href="#"><img src="img/blog-img/add.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
