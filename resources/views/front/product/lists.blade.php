@extends('front.layouts.app')

@section('content')
<div class="breadcrumbs overlay" data-stellar-background-ratio="0.7" style="background-image: url({{$bannerimage->product_banner ? '/uploads/setting/'.$bannerimage->product_banner :'/assets/front/images/slider-bg1.jpg'}})";>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="list">
                    <li><a href="/">Home</a></li>
                    <li><a href="#">Products</a></li>
                </ul>
                <h2>{{isset($product)?$products[0]->category->title : ' '}}</h2>
            </div>
        </div>
    </div>
</div>
<!--/ End Breadcrumb -->


<div class="product-inner-page section">
    <div class="container">
        <div class="row">

          @foreach($products as $product)
            <div class="col-lg-4 col-md-6 col-sm-12 m-0 mb-4">
                <div class="product-content">
                    <div class="product-img">
                        <a href="/product/details/{{$product->id}}"><img src="/uploads/product/listing/{{$product->banner_image}}" alt="product image"></a>
                    </div>
                    <div class="product-desc">
                        <a href="/product/details/{{$product->id}}"><h3>{{$product->name}}</h3></a>
                        {!! str_limit($product->description, 70) !!}
                        <div class="product-readmore">
                          <a href="/product/details/{{$product->id}}" class="product-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
          @endforeach

            <!-- <div class="col-lg-4 col-md-6 col-sm-12 m-0 mb-4">
                <div class="product-content">
                    <div class="product-img">
                        <a href="#"><img src="images/product1/6.jpg" alt="product image"></a>
                    </div>
                    <div class="product-desc">
                        <a href="#"><h3>Reach M+</h3></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <a href="#" class="product-btn">Read More</a>
                    </div>
                </div>
            </div> -->

            <!-- <div class="col-lg-4 col-md-6 col-sm-12 m-0 mb-4">
                <div class="product-content">
                    <div class="product-img">
                        <a href="#"><img src="images/product1/7.jpg" alt="product image"></a>
                    </div>
                    <div class="product-desc">
                        <a href="#"><h3>Edge</h3></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <a href="#" class="product-btn">Read More</a>
                    </div>
                </div>
            </div> -->

        </div>
    </div>
</div>

@endsection
