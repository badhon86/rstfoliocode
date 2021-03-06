@extends('assets.master')
@section('body')

<main>
    <!--? Hero Start -->
    {{-- <div class="slider-area">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 text-center">
                            <h2>Services</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Hero End -->
    <!-- Services Area End -->
    <!--? Blog Ara Start -->
    <section class="home-blog-area section-padding30">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-team mb-60">
                        <div class="team-img">
                            <img src="assets/img/gallery/blog01.png" alt="">
                        </div>
                        <div class="team-caption">
                            <h3><a href="{{asset('/services')}}">Creative Photography</a></h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-team mb-60">
                        <div class="team-img">
                            <img src="assets/img/gallery/blog02.png" alt="">
                        </div>
                        <div class="team-caption">
                            <h3><a href="{{asset('/services')}}">Wedding Photography</a></h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-team mb-60">
                        <div class="team-img">
                            <img src="assets/img/gallery/blog03.png" alt="">
                        </div>
                        <div class="team-caption">
                            <h3><a href="{{asset('/services')}}">Nature Photography</a></h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-team mb-60">
                        <div class="team-img">
                            <img src="assets/img/gallery/blog3.png" alt="">
                        </div>
                        <div class="team-caption">
                            <h3><a href="{{asset('/services')}}">Nature Photography</a></h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-team mb-60">
                        <div class="team-img">
                            <img src="assets/img/gallery/blog2.png" alt="">
                        </div>
                        <div class="team-caption">
                            <h3><a href="{{asset('/services')}}">Wedding Photography</a></h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-team mb-60">
                        <div class="team-img">
                            <img src="assets/img/gallery/blog1.png" alt="">
                        </div>
                        <div class="team-caption">
                            <h3><a href="{{asset('/services')}}">Creative Photography</a></h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
