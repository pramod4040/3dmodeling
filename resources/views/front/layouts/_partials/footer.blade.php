<!-- Footer -->
 <footer>
        <div class="footer-background">
            <div class="container contact-bottom pt-pb-70-35">
                <div class="row dashed-bottom">
                    <!-- <div class="col-md-12">
                        <div class="footer-about-bottom">
                            <div class="footer-img">
                                <img src="images/logo.png" alt="footer logo">
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <div class="footer-last-social-link">
                                <a href="#" target="_blank"><i class="fa fa-facebook-f"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-google"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                    </div> -->

                    <div class="col-md-4 mt-5">
                        <div class="footer-widget">
                          <h3>Information</h3>
                          <ul>
                            @foreach($pages as $dami)

                              @if($dami->slug == 'about-us')
                                <li><a href="/pages/{{$dami->slug}}">{{@$dami->title}}</a></li>
                              @endif
                            @endforeach
                            <!-- <li><a href="/pages/terms-and-conditions">Terms and Conditions</a></li> -->
                            <li><a href="/client">Clients</a></li>
                            <li><a href="/award">Awards</a></li>
                            <!-- <li><a href="/pages/privacy-and-policy">Privacy and Policy</a></li> -->
                            <li><a href="/contact-us">Contact Us</a></li>
                          </ul>
                        </div>
                    </div>

                    <div class="col-md-4 text-left mt-5">
                        <div class="footer-last">
                            <ul>
                                <h3>Our Address</h3>
                                <li><i class="fa fa-map-marker"></i>{{@$setting->address}}</li>
                                <li><i class="fa fa-phone"></i>{{@$setting->telephone}}</li>
                                <li><a href=""><i class="fa fa-envelope"></i>{{@$setting->email}}</a></li>
                            </ul>
                        </div>

                    </div>

                    <div class="col-md-4 mt-5">
                        <h3>Enquire Online</h3>
                        @include('front.layouts._partials.message.info')
                        <div class="ft-inner-section ft-inner-section-1">
                            <div class="send-msg">

                                <form method="post" action="{{route('saveEnquiry')}}">
                                  <!-- {{csrf_field()}} -->
                                  <input type="hidden" name="_token" value="{{csrf_token()}}">

                                    <div class="row">
                                        <div class="col-md-6 pl-0">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Name*" name="name" required="">
                                            </div>
                                        </div>

                                        <div class="col-md-6 pr-0 pl">
                                            <div class="form-group ">
                                                <input class="form-control" type="text" placeholder="Phone*" name="phone" id="phone" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="email" placeholder="Email*" name="email" id="email" required="">
                                    </div>
                                    <div class="form-group">
                                        <textarea rows="3" name="information" id="message" placeholder="Message*" class="form-control" required=""></textarea>
                                    </div>
                                    <button type="submit" class="form-btn" value="Submit">Submit Now</button><br>

                                <br>
                                </form>
                              </div>
                        </div>
                    </div>



                </div>
            </div>

            <div class="last-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <p>Copyright © GEO 3D Modelling 2019. All Rights Reserved</p>
                        </div>
                        <div class="col-md-6 designer-company">
                            <a href="https://webhousenepal.com/"> Designed By : Web House Nepal.Pvt.Ltd</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="{{asset('assets/front/js/jquery-3.3.1.min.js')}}"></script> <!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script src="{{asset('assets/front/js/lightbox.js')}}"></script>
<script src="{{asset('assets/front/js/wow.min.js')}}"></script>
<script>
new WOW().init();
</script>

<script type="text/javascript" src="{{asset('assets/front/js/lightbox.js')}}"></script>
<script src="{{asset('assets/front/js/smooth-scroll.min.js')}}"></script>
<!-- Slick Nav JS -->
<script src="{{asset('assets/front/js/jquery.slicknav.min.js')}}"></script>
<!-- Nivo Slider JS -->
<script src="{{asset('assets/front/js/jquery.nivo.slider.pack.js')}}"></script>
<!-- Letter Animation JS -->
<script src="{{asset('assets/front/js/smooth-scroll.min.js')}}"></script>
<script src="{{asset('assets/front/js/bootstrap.bundle.min.js')}}"></script> <!-- bootstrap jQuery-->
<script type="text/javascript" src="{{asset('assets/front/js/owl.carousel.min.js')}}" ></script>
<script src="{{asset('assets/front/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/front/js/slick.min.js')}}" type="text/javascript" charset="utf-8"></script>
<script src="{{asset('assets/front/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/front/js/main.js')}}"></script>

</body>

</html>
