@extends('front.layouts.app')

@section('content')
<div class="breadcrumbs overlay" data-stellar-background-ratio="0.7">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="list">
                    <li><a href="/">Home</a></li>
                    <li><a href="#">{{$thatNews->title}}</a></li>
                </ul>
                <h2>{{$thatNews->title}}</h2>
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
                    <div class="col-md-12 single-page-images m-0 mb-2">
                        <img src="/uploads/news/particular/{{$thatNews->image}}">
                    </div>

                    <div class="col-md-12 single-page-text mt-4">
                      {!! $thatNews->body !!}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="sidebar-widget mb-30">
                  <h5>Services</h5>
                  <ul>
                    @foreach($service->shuffle()->take(4) as $servi)
                        <li><a href="/service/details/{{$servi->slug}}">{{$servi->title}}</a></li>
                    @endforeach
                  </ul>
              </div>

              <div class="sidebar-widget mb-30">
                  <h5>Product</h5>
                  <ul>
                    @foreach($product as $pro)
                      <li><a href="/product/details/{{$pro->id}}">{{$pro->name}}</a></li>
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
