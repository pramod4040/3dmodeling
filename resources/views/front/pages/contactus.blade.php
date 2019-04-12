@extends('front.layouts.app')

@section('content')
<div class="breadcrumbs overlay" data-stellar-background-ratio="0.7" style="background-image: url({{$bannerimage->contact_us_banner ? '/uploads/setting/'.$bannerimage->contact_us_banner :'/assets/front/images/slider-bg1.jpg'}})";>
  <div class="container">
      <div class="row">
          <div class="col-12">
              <div class="breadcrumb-body">
                  <ul class="list">
                      <li><a href="/">Home</a></li>
                      <li><a href="#">Contact</a></li>
                  </ul>
                  <h2>Contact Us</h2>
              </div>
          </div>
      </div>
  </div>
</div>
<!--/ End Breadcrumb -->

<section class="git section">
  <div class="container">
      <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="contact-left-section">
                  <div class="contact-title">
                      Get In Touch
                  </div>
                  <div class="contact-text">
                      It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout
                  </div>
                  <div class="contact-address-section">
                      <p class="spa-contact spa-location">
                          <i class="fa fa-map-marker"></i>
                          <span class="c-locaton"> {{@$setting->address}}
                          </span>
                      </p>
                      <p class="spa-contact spa-phone">
                          <i class="fa fa-phone"></i>
                          <span class="c-phone"> {{@$setting->mobile}}
                          </span>
                      </p>
                          <p class="spa-contact spa-email">
                          <i class="fa fa-envelope"></i>
                          <span class="c-email"> <a href="mailto: "> {{@$setting->email}} </a>
                          </span>
                      </p>

                  </div>
              </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="contact-right-section">
                  <div class="contact-form-section">
                      <div class="contact-title">
                          Message
                      </div>
                      @include('front.layouts._partials.message.next')
                      <div class="form-section">
                          <form action="{{route('contactus.send')}}" method="post">
                                {{csrf_field()}}
                                  <input type="text" class="form-control" name="name" id="name" placeholder="Name*">
                                  <input type="text" class="form-control" name="phone" id="number" placeholder="Phone Number*">
                                  <input type="email" class="form-control" name="email" id="email" placeholder="E-mail*">
                                  <input type="text" class="form-control" name="company_name" id="name" placeholder="Company Name">
                                  <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                  <button class=" git-btn mt-30" type="submit">Contact Us</button>
                              </form>
                      </div>

                  </div>
              </div>
          </div>
</section>



<div class="map-area wow fadeInUp" data-wow-delay="300ms">
  <div id="googleMap">
      <iframe src="https://www.google.com/maps/embed?pb=!1m22!1m8!1m3!1d3533.1264829626907!2d85.33079451506151!3d27.68248538280219!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d27.6825193!2d85.3330608!4m5!1s0x39eb1941bee8fd3b%3A0x32ba8029d5f9110e!2sWeb+House+Nepal+Pvt.+Ltd.%2C+Shankhamul+Marg%2C+Kathmandu+44600!3m2!1d27.682432!2d85.33295849999999!5e0!3m2!1sen!2snp!4v1542008710775" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
</div>

@endsection
