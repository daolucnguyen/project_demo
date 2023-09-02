@extends('masterLayout')
@section('title')
    BLOG
@endsection
@section('body')
    sub_page
@endsection
@section('content')
    <div class="hero_area">
        <!-- header section strats -->
        @include('includes.sidebar')
        <!-- end header section -->
    </div>


    <!-- blog section -->

    <section class="blog_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Latest Blog
                </h2>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 mx-auto">
                    <div class="box">
                        <div class="img-box">
                            <img src="{{ asset('assets/images/b1.jpg') }}" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Look even slightly believable. If you are
                            </h5>
                            <p>
                                alteration in some form, by injected humour, or randomised words which don't look even
                                slightly believable.
                            </p>
                            <a href="">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mx-auto">
                    <div class="box">
                        <div class="img-box">
                            <img src="{{ asset('assets/images/b2.jpg') }}" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Anything embarrassing hidden in the middle
                            </h5>
                            <p>
                                alteration in some form, by injected humour, or randomised words which don't look even
                                slightly believable.
                            </p>
                            <a href="">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mx-auto">
                    <div class="box">
                        <div class="img-box">
                            <img src="{{ asset('assets/images/b3.jpg') }}" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Molestias magni natus dolores odio commodi. Quaerat!
                            </h5>
                            <p>
                                alteration in some form, by injected humour, or randomised words which don't look even
                                slightly believable.
                            </p>
                            <a href="">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end blog section -->
@endsection
