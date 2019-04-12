@extends('front.layouts.app')

@section('content')
<div class="breadcrumbs overlay" data-stellar-background-ratio="0.7">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="list">
                    <li><a href="/">Home</a></li>
                    <li><a href="#">Awards</a></li>
                </ul>
                <h2>Awards</h2>
            </div>
        </div>
    </div>
</div>
<!--/ End Breadcrumb -->

<div class="our-awards section">
    <div class="container">
        <div class="row">

          @foreach($award as $hait)
            <div class="col-lg-4 col-md-6 col-sm-12 m-0 mb-4">
                <div class="award-body">
                    <div class="award-img">
                        <img src="/uploads/award/{{$hait->image}}" alt="award img">
                    </div>
                    <div class="award-content">
                        <h3>{{$hait->name}}</h3>
                        {!! str_limit($hait->description, 60) !!}
                    </div>
                </div>
            </div>

          @endforeach

            <!-- <div class="col-lg-4 col-md-6 col-sm-12 m-0 mb-4">
                <div class="award-body">
                    <div class="award-img">
                        <img src="images/award/1.png" alt="award img">
                    </div>
                    <div class="award-content">
                        <h3>Award name</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 m-0 mb-4">
                <div class="award-body">
                    <div class="award-img">
                        <img src="images/award/1.png" alt="award img">
                    </div>
                    <div class="award-content">
                        <h3>Award name</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 m-0 mb-4">
                <div class="award-body">
                    <div class="award-img">
                        <img src="images/award/1.png" alt="award img">
                    </div>
                    <div class="award-content">
                        <h3>Award name</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 m-0 mb-4">
                <div class="award-body">
                    <div class="award-img">
                        <img src="images/award/1.png" alt="award img">
                    </div>
                    <div class="award-content">
                        <h3>Award name</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 m-0 mb-4">
                <div class="award-body">
                    <div class="award-img">
                        <img src="images/award/1.png" alt="award img">
                    </div>
                    <div class="award-content">
                        <h3>Award name</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 m-0 mb-4">
                <div class="award-body">
                    <div class="award-img">
                        <img src="images/award/1.png" alt="award img">
                    </div>
                    <div class="award-content">
                        <h3>Award name</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 m-0 mb-4">
                <div class="award-body">
                    <div class="award-img">
                        <img src="images/award/1.png" alt="award img">
                    </div>
                    <div class="award-content">
                        <h3>Award name</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 m-0 mb-4">
                <div class="award-body">
                    <div class="award-img">
                        <img src="images/award/1.png" alt="award img">
                    </div>
                    <div class="award-content">
                        <h3>Award name</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>
                    </div>
                </div>
            </div> -->

        </div>
    </div>
</div>

@endsection
