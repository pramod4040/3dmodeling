@extends('front.layouts.app')

@section('content')
<div class="breadcrumbs overlay" data-stellar-background-ratio="0.7" style="background-image: url({{$product->banner_image ? '/uploads/product/'.$product->banner_image :'/assets/front/images/slider-bg1.jpg'}})";>
   <div class="container">
       <div class="row">
           <div class="col-12">
               <ul class="list">
                   <li><a href="/">Home</a></li>
                   <li><a href="#">{{$product->name}}</a></li>
               </ul>
               <h2>{{$product->name}}</h2>
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
                 <div class="product-details">
           <div class="product-details-title">

             <h3>{{$product->name}}</h3>
           </div>
           <div class="product-details-desc">
             {!! $product->description !!}
         </div>

         <!-- <div class="product-details-img mt-4">
           <div class="row">
             <div class="col-lg-4 col-md-6 col-sm-12 m-0 mb-3 ">
               <div class="product-img">
                 <img src="images/shop/1.png">
               </div>
             </div>

             <div class="col-lg-4 col-md-6 col-sm-12 m-0 mb-3">
               <div class="product-img">
                 <img src="images/shop/2.png">
               </div>
             </div>

             <div class="col-lg-4 col-md-6 col-sm-12 m-0 mb-3">
               <div class="product-img">
                 <img src="images/shop/3.png">
               </div>
             </div>
           </div>
         </div> -->

       </div>

       <div class="specifications-section product-single-section">
         <h3 class="spe-title">{{$product->name}} Specifications</h3>
         <div class="row">
           <div class="col-lg-4 col-md-6 col-sm-12 m-0 mb-3 ">
             <div class="product-full-details">
               <!-- <ul class="product-list"> -->
                 {!! $product->specification !!}
               <!-- </ul> -->
             </div>
           </div>


         </div>
       </div>

       <div class="product-information product-single-section">
         <div class="product-information-title">
           <h3>Other Information</h3>
         </div>
         <div class="product-information-desc">
           {!! $product->other_information !!}
         </div>
         <!-- <div class="download-files">
           <p><strong>Note:</strong>You can also download othere related information and document of this product.</p>
           <ul>
             <li><a href="images/download/Field_Tests.docx" download="">Field Test Results (PDF)</a></li>
             <li><a href="images/download/Reach_RS+_for dealers_Print.pdf" download="" >Reach RS+_for dealers_Print.pdf</a></li>
             <li><a href="images/download/Reach_RS+_brochure_web.pdf" download="" >Reach RS+_brochure_web.pdf</a></li>
           </ul>
         </div> -->
       </div>
               </div>
           </div>
           <div class="col-lg-4 col-md-4 col-sm-12">

             <div class="booking-form-section sidebar-widget">
               @include('front.layouts._partials.message.next')
                       <h5>Online Enquiry</h5>
                       <div class="form-section">
                           <form action="{{route('saveProductEnquiry')}}" method="post">
                               <input type="hidden" name="_token" value="{{csrf_token()}}">
                                   <input type="text" class="form-control" name="name" placeholder="Name">
                                   <input type="email" class="form-control" name="email" placeholder="E-mail">
                                   <input type="text" name="phone" class="form-control" placeholder="Phone Number">
                                   <textarea class="form-control" name="information" placeholder="Information here" required=""></textarea>
                                   <button class="booking-btn" type="submit">submit</button>
                           </form>
                       </div>
               </div>

               <div class="sidebar-widget mb-30">
                   <h5>Services</h5>
                   <ul>
                     @foreach($service->shuffle()->take(6) as $servi)
                         <li><a href="/service/details/{{$servi->slug}}">{{$servi->title}}</a></li>
                     @endforeach
                   </ul>
               </div>

               <div class="sidebar-widget mb-30">
                   <h5>Products</h5>
                   <ul>
                     @foreach($related as $rela)
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
