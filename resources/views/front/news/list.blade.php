@extends('front.layouts.app')


@section('content')
<div class="breadcrumbs overlay" data-stellar-background-ratio="0.7">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="list">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">News</a></li>
                </ul>
                <h2>News</h2>
            </div>
        </div>
    </div>
</div>
<!--/ End Breadcrumb -->

<section id="blog-area" class="blog-area archive grid section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">


                    <!-- <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="blog--head-">
                                    <div class=" blog--head-img blog--head-img-front">
                                        <img src="images/1.jpg" alt="blog img">
                                    </div>
                                    <div class="blog-date">
                                        feb 15
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="blog--content">
                                    <h4 class="blog--content-title u-margin-bottom-small"><a href="single-page.php">Change your place and get the Full freshness air</a></h4>
                                    <div class="author-comment">
                                        <span class="blog-author"><a href="#" title="Posts by admin" rel="author">admin</a></span>
                                        <span class="blog-comment">0 comment</span>
                                    </div>
                                    <div class="blog-desc">
                                        Ne usu sonet mentitum torquatos, mel bonorum singulis at, ex nec posse option facilisis. Quo hinc movet gloriatur ne, duo...
                                    </div>
                                    <div class="blog-btn">
                                        <a href="single-page.php" class="blog-btn">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    @foreach($news as $new)

                    <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="blog--head-">
                                    <div class=" blog--head-img blog--head-img-front">
                                        <img src="/uploads/news/{{$new->image}}" alt="blog img">
                                    </div>
                                    <div class="blog-date">
                                        {{\Carbon\Carbon::parse($new->create_at)->format('M j')}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="blog--content">
                                    <h4 class="blog--content-title u-margin-bottom-small"><a href="/news/details/{{$new->slug}}">{{$new->title}}</a></h4>

                                    <div class="blog-desc">
                                        {!! str_limit($new->description, 50) !!}
                                    </div>
                                    <div class="blog-btn">
                                        <a href="/news/details/{{$new->slug}}" class="blog-btn">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach

                    <!-- <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="blog--head-">
                                    <div class=" blog--head-img blog--head-img-front">
                                        <img src="images/1.jpg" alt="blog img">
                                    </div>
                                    <div class="blog-date">
                                        feb 15
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="blog--content">
                                    <h4 class="blog--content-title u-margin-bottom-small"><a href="singple-page.php">Change your place and get the Full freshness air</a></h4>
                                    <div class="author-comment">
                                        <span class="blog-author"><a href="#" title="Posts by admin" rel="author">admin</a></span>
                                        <span class="blog-comment">0 comment</span>
                                    </div>
                                    <div class="blog-desc">
                                        Ne usu sonet mentitum torquatos, mel bonorum singulis at, ex nec posse option facilisis. Quo hinc movet gloriatur ne, duo...
                                    </div>
                                    <div class="blog-btn">
                                        <a href="singple-page.php" class="blog-btn">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="blog--head-">
                                    <div class=" blog--head-img blog--head-img-front">
                                        <img src="images/2.jpg" alt="blog img">
                                    </div>
                                    <div class="blog-date">
                                        feb 15
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="blog--content">
                                    <h4 class="blog--content-title u-margin-bottom-small"><a href="single-page.php">Change your place and get the Full freshness air</a></h4>
                                    <div class="author-comment">
                                        <span class="blog-author"><a href="#" title="Posts by admin" rel="author">admin</a></span>
                                        <span class="blog-comment">0 comment</span>
                                    </div>
                                    <div class="blog-desc">
                                        Ne usu sonet mentitum torquatos, mel bonorum singulis at, ex nec posse option facilisis. Quo hinc movet gloriatur ne, duo...
                                    </div>
                                    <div class="blog-btn">
                                        <a href="single-page.php" class="blog-btn">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="blog--head-">
                                    <div class=" blog--head-img blog--head-img-front">
                                        <img src="images/1.jpg" alt="blog img">
                                    </div>
                                    <div class="blog-date">
                                        feb 15
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="blog--content">
                                    <h4 class="blog--content-title u-margin-bottom-small"><a href="single-page.php">Change your place and get the Full freshness air</a></h4>
                                    <div class="author-comment">
                                        <span class="blog-author"><a href="#" title="Posts by admin" rel="author">admin</a></span>
                                        <span class="blog-comment">0 comment</span>
                                    </div>
                                    <div class="blog-desc">
                                        Ne usu sonet mentitum torquatos, mel bonorum singulis at, ex nec posse option facilisis. Quo hinc movet gloriatur ne, duo...
                                    </div>
                                    <div class="blog-btn">
                                        <a href="single-page.php" class="blog-btn">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="blog--head-">
                                    <div class=" blog--head-img blog--head-img-front">
                                        <img src="images/2.jpg" alt="blog img">
                                    </div>
                                    <div class="blog-date">
                                        feb 15
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="blog--content">
                                    <h4 class="blog--content-title u-margin-bottom-small"><a href="single-page.php">Change your place and get the Full freshness air</a></h4>
                                    <div class="author-comment">
                                        <span class="blog-author"><a href="#" title="Posts by admin" rel="author">admin</a></span>
                                        <span class="blog-comment">0 comment</span>
                                    </div>
                                    <div class="blog-desc">
                                        Ne usu sonet mentitum torquatos, mel bonorum singulis at, ex nec posse option facilisis. Quo hinc movet gloriatur ne, duo...
                                    </div>
                                    <div class="blog-btn">
                                        <a href="single-page.php" class="blog-btn">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="blog--head-">
                                    <div class=" blog--head-img blog--head-img-front">
                                        <img src="images/1.jpg" alt="blog img">
                                    </div>
                                    <div class="blog-date">
                                        feb 15
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="blog--content">
                                    <h4 class="blog--content-title u-margin-bottom-small"><a href="single-page.php">Change your place and get the Full freshness air</a></h4>
                                    <div class="author-comment">
                                        <span class="blog-author"><a href="#" title="Posts by admin" rel="author">admin</a></span>
                                        <span class="blog-comment">0 comment</span>
                                    </div>
                                    <div class="blog-desc">
                                        Ne usu sonet mentitum torquatos, mel bonorum singulis at, ex nec posse option facilisis. Quo hinc movet gloriatur ne, duo...
                                    </div>
                                    <div class="blog-btn">
                                        <a href="single-page.php" class="blog-btn">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="blog--head-">
                                    <div class=" blog--head-img blog--head-img-front">
                                        <img src="images/2.jpg" alt="blog img">
                                    </div>
                                    <div class="blog-date">
                                        feb 15
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="blog--content">
                                    <h4 class="blog--content-title u-margin-bottom-small"><a href="single-page.php">Change your place and get the Full freshness air</a></h4>
                                    <div class="author-comment">
                                        <span class="blog-author"><a href="#" title="Posts by admin" rel="author">admin</a></span>
                                        <span class="blog-comment">0 comment</span>
                                    </div>
                                    <div class="blog-desc">
                                        Ne usu sonet mentitum torquatos, mel bonorum singulis at, ex nec posse option facilisis. Quo hinc movet gloriatur ne, duo...
                                    </div>
                                    <div class="blog-btn">
                                        <a href="single-page.php" class="blog-btn">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->


                </div>
                <div class="pagination-section mt-5">
                    <div class="row">
                        <div class="col-sm-4 offset-sm-4">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                  {{$news->links()}}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Blog Grid -->


@endsection
