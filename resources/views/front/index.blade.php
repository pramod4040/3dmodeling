@extends('front.layouts.app')

@section('content')

  <div class="banner-section" style="background-image: url(/uploads/setting/{{$setting->banner_image}});">
      <div class="container">
          <div class="banner-content">
              <div class="banner-title">
                  <h3>{{$setting->title}}</h3>
              </div>
              <span class="banner-button">
                  <a href="/contact-us">Contact us</a>
              </span>
          </div>
      </div>
  </div>

  <div class="about-section section">
          <div class="container">
              <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="about-us-inner-page">
                          <!-- <div class="inner-page-about-title">
                              <h3>About<span>&nbsp;Company</span></h3>
                          </div> -->
                          <div class="inner-page-desc">
                            <p>{{$setting->about_us}}</p>
                          </div>
                          <div class="about-btn">
                              <a href="/pages/about-us">Read more</a>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="inner-about-img">
                          <img src="/uploads/setting/{{$setting->about_us_image}}">
                      </div>
                  </div>
              </div>
          </div>
  </div>

  <div class="call-to-action">
      <div class="container">
          <div class="row">
              <div class="col-md-8">
                  <div class="cta-text">
                      <h3>"authorized distributor of emlid products"</h3>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="cta-img">
                      <img src="/assets/front/images/cta.png">
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="service-blog-section">
      <div class="container">
          <div class="row">
              <div class="col-lg-8 col-md-4 col-sm-12">
                  <div class="service-sections">
                      <div class="service-title">
                          <h3>services</h3>
                      </div>
                      <div class="main-service-body">
                          <div class="row">
                              <div class="col-md-4 m-0 mb-3">
                                  <div class="service-content">
                                      <div class="service-content-main service-style-1 ">
                                          <div class="service-icon">
                                              <div class="service-icon-body">
                                                  <a href="/service/details/{{$service1->slug}}"><img src="/assets/front/images/service/1.png" alt="service-img"></a>
                                              </div>
                                          </div>
                                          <a href="/service/details/{{$service1->slug}}"><h2 class="medium-font">
                                                  {{$service1->title}}
                                          </h2></a>

                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-4 m-0 mb-3">
                                  <div class="service-content">
                                      <div class="service-content-main service-style-2 ">
                                          <div class="service-icon">
                                              <div class="service-icon-body">
                                                  <a href="/service/details/{{$service2->slug}}"><img src="/assets/front/images/service/1.png" alt="service-img"></a>
                                              </div>
                                          </div>
                                          <a href="/service/details/{{$service2->slug}}"><h2 class="medium-font">
                                                  {{$service2->title}}
                                          </h2></a>
                                          <!-- <div class="service-process-desc">
                                          <p>A digital agency isn't here to replace your internal team, we're here to partner with you and supplement your efforts.</p>
                                          </div> -->
                                      </div>
                                  </div>
                              </div>


                              <div class="col-md-4 m-0 mb-3">
                                  <div class="service-content">
                                      <div class="service-content-main service-style-3 ">
                                          <div class="service-icon">
                                              <div class="service-icon-body">
                                                  <a href="/service/details/{{$service3->slug}}"><img src="/assets/front/images/service/2.jpg" alt="service-img"></a>
                                              </div>
                                          </div>
                                          <a href="/service/details/{{$service3->slug}}"><h2 class="medium-font">
                                                {{$service3->title}}
                                          </h2></a>
                                          <!-- <div class="service-process-desc">
                                          <p>A digital agency isn't here to replace your internal team, we're here to partner with you and supplement your efforts.</p>
                                          </div> -->
                                      </div>
                                  </div>
                              </div>

                              <div class="col-md-4 m-0 mb-3">
                                  <div class="service-content">
                                      <div class="service-content-main service-style-3 ">
                                          <div class="service-icon">
                                              <div class="service-icon-body">
                                                  <a href="/service/details/{{$service4->slug}}"><img src="/assets/front/images/service/3.jpg" alt="service-img"></a>
                                              </div>
                                          </div>
                                          <a href="/service/details/{{$service4->slug}}"><h2 class="medium-font">
                                                  {{$service4->title}}
                                          </h2></a>
                                          <!-- <div class="service-process-desc">
                                          <p>A digital agency isn't here to replace your internal team, we're here to partner with you and supplement your efforts.</p>
                                          </div> -->
                                      </div>
                                  </div>
                              </div>

                              <div class="col-md-4 m-0 mb-3">
                                  <div class="service-content">
                                      <div class="service-content-main service-style-1 ">
                                          <div class="service-icon">
                                              <div class="service-icon-body">
                                                  <a href="/service/details/{{$service5->slug}}"><img src="/assets/front/images/service/1.png" alt="service-img"></a>
                                              </div>
                                          </div>
                                          <a href="/service/details/{{$service5->slug}}"><h2 class="medium-font">
                                            {{$service5->title}}
                                          </h2></a>
                                          <!-- <div class="service-process-desc">
                                          <p>A digital agency isn't here to replace your internal team, we're here to partner with you and supplement your efforts.</p>
                                          </div> -->
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-4 m-0 mb-3">
                                  <div class="service-content">
                                      <div class="service-content-main service-style-1 ">
                                          <div class="service-icon">
                                              <div class="service-icon-body">
                                                  <a href="/service/details/{{$service6->slug}}"><img src="/assets/front/images/service/1.png" alt="service-img"></a>
                                              </div>
                                          </div>
                                          <a href="/service/details/{{$service6->slug}}"><h2 class="medium-font">
                                            {{$service6->title}}
                                          </h2></a>
                                      </div>
                                  </div>
                              </div>

                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="footer-widget">
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

                          <div class="news-btn">
                              <a href="/news">View More</a>
                          </div>


                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

@endsection
