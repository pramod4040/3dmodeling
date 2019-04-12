@extends('front.layouts.app')

@section('content')
<div class="breadcrumbs overlay" data-stellar-background-ratio="0.7" style="background-image: url({{$bannerimage->client_banner ? '/uploads/setting/'.$bannerimage->client_banner :'/assets/front/images/slider-bg1.jpg'}})";>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="list">
                    <li><a href="/">Home</a></li>
                    <li><a href="#">Clients</a></li>
                </ul>
                <h2>Clients</h2>
            </div>
        </div>
    </div>
</div>
<!--/ End Breadcrumb -->

<div class="Client-logo-section section">
    <div class="container">
        <div class="row">
          @foreach($clients as $data)
            <div class="col-lg-2 col-md-4 col-sm-6 m-0 mb-4">
                <div class="client-contents wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="client-logo-image">
                        <a href="{{$data->link}}">
                            <img src="/uploads/client/{{$data->logo}}" alt="Client 1" title="Client 1">
                        </a>
                    </div>
                </div>
            </div>
            @endforeach

            <!-- <div class="col-lg-2 col-md-4 col-sm-6 m-0 mb-4">
                <div class="client-contents wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="client-logo-image">
                        <a href="#"><img src="images/clients/5.png" alt="Client 5" title="Client 5"></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 m-0 mb-4">
                <div class="client-contents wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="client-logo-image">
                        <a href="#"><img src="images/clients/1.png" alt="Client 1" title="Client 1"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 m-0 mb-4">
                <div class="client-contents wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="client-logo-image">
                        <a href="#"><img src="images/clients/2.png" alt="Client 2" title="Client 2"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 m-0 mb-4">
                <div class="client-contents wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="client-logo-image">
                        <a href="#"><img src="images/clients/3.png" alt="Client 3" title="Client 3"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 m-0 mb-4">
                <div class="client-contents wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="client-logo-image">
                        <a href="#"><img src="images/clients/4.png" alt="Client 4" title="Client 4"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 m-0 mb-4">
                <div class="client-contents wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="client-logo-image">
                        <a href="#"><img src="images/clients/5.png" alt="Client 5" title="Client 5"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 m-0 mb-4">
                <div class="client-contents wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="client-logo-image">
                        <a href="#"><img src="images/clients/1.png" alt="Client 1" title="Client 1"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 m-0 mb-4">
                <div class="client-contents wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="client-logo-image">
                        <a href="#"><img src="images/clients/2.png" alt="Client 2" title="Client 2"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 m-0 mb-4">
                <div class="client-contents wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="client-logo-image">
                        <a href="#"><img src="images/clients/3.png" alt="Client 3" title="Client 3"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 m-0 mb-4">
                <div class="client-contents wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="client-logo-image">
                        <a href="#"><img src="images/clients/4.png" alt="Client 4" title="Client 4"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 m-0 mb-4">
                <div class="client-contents wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="client-logo-image">
                        <a href="#"><img src="images/clients/5.png" alt="Client 5" title="Client 5"></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 m-0 mb-4">
                <div class="client-contents wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="client-logo-image">
                        <a href="#"><img src="images/clients/1.png" alt="Client 1" title="Client 1"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 m-0 mb-4">
                <div class="client-contents wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="client-logo-image">
                        <a href="#"><img src="images/clients/2.png" alt="Client 2" title="Client 2"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 m-0 mb-4">
                <div class="client-contents wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="client-logo-image">
                        <a href="#"><img src="images/clients/3.png" alt="Client 3" title="Client 3"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 m-0 mb-4">
                <div class="client-contents wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="client-logo-image">
                        <a href="#"><img src="images/clients/4.png" alt="Client 4" title="Client 4"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 m-0 mb-4">
                <div class="client-contents wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="client-logo-image">
                        <a href="#"><img src="images/clients/5.png" alt="Client 5" title="Client 5"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 m-0 mb-4">
                <div class="client-contents wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="client-logo-image">
                        <a href="#"><img src="images/clients/2.png" alt="Client 2" title="Client 2"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 m-0 mb-4">
                <div class="client-contents wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="client-logo-image">
                        <a href="#"><img src="images/clients/3.png" alt="Client 3" title="Client 3"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 m-0 mb-4">
                <div class="client-contents wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="client-logo-image">
                        <a href="#"><img src="images/clients/4.png" alt="Client 4" title="Client 4"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 m-0 mb-4">
                <div class="client-contents wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="client-logo-image">
                        <a href="#"><img src="images/clients/5.png" alt="Client 5" title="Client 5"></a>
                    </div>
                </div>
            </div> -->

        </div>
    </div>
</div>

@endsection
