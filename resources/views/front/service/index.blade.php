@extends('front.layouts.app')

@section('content')

<div class="breadcrumbs overlay" data-stellar-background-ratio="0.7" style="background-image: url({{$bannerimage->service_banner ? '/uploads/setting/'.$bannerimage->service_banner :'/assets/front/images/slider-bg1.jpg'}})";>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="list">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">{{$thatService->title}}</a></li>
                </ul>
                <h2>{{$thatService->title}}</h2>
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
                    

                    <div class="col-md-12 single-page-text mt-4">
                      {!! $thatService->description !!}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="sidebar-widget mb-30">
                    <h5>Services</h5>
                    <ul>
                      @foreach($service as $servi)
                        @if($servi->slug != $thatService->slug)
                          <li><a href="/service/details/{{$servi->slug}}">{{$servi->title}}</a></li>
                        @endif
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

                <div class="sidebar-widget mb-30">
                    <h5>News</h5>
                    <ul>
                      @foreach($news as $new)
                        <li><a href="/news/details/{{$new->slug}}">{{$new->title}}</a></li>
                      @endforeach
                    </ul>

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
