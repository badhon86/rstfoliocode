@extends('assets.master')
@section('body')

<main>
    <!--? slider Area Start-->
    <div class="slider-area ">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-5 col-md-8">
                            <div class="hero__caption">
                                <span data-animation="fadeInUp" data-delay=".4s">I'M RESHAWAT HOSSAIN</span>
                                <h1 data-animation="fadeInUp" data-delay=".6s">Photography Make us happy Take a shot.</h1>
                                <!-- Hero-btn -->
                                <div class="hero__btn">
                                    <a href="https://www.youtube.com/" class="btn hero-btn"  data-animation="fadeInLeft" data-delay=".8s">Watch Portfolio</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hero Man Img -->
                <div class="hero-man">
                    <img src="assets/img/hero/hero_man1.png" alt="">
                </div>
            </div>
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-7 col-md-8">
                            <div class="hero__caption">
                                <span data-animation="fadeInUp" data-delay=".4s">I'M RESHAWAT HOSSAIN</span>
                                <h1 data-animation="fadeInUp" data-delay=".6s">Photography Make us happy Take a shot.</h1>
                                <!-- Hero-btn -->
                                <div class="hero__btn">
                                    <a href="https://www.youtube.com/" class="btn hero-btn"  data-animation="fadeInLeft" data-delay=".8s">Watch Portfolio</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hero Man Img -->
                <div class="hero-man">
                    <img src="assets/img/hero/hero_man1.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <section class="home-blog-area section-padding-10">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="assets/img/gallery/blog01.png" alt="">
                        </div>
                        <div class="team-caption">
                            <h3><a href="services.html">Creative Photography</a></h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="assets/img/gallery/blog02.png" alt="">
                        </div>
                        <div class="team-caption">
                            <h3><a href="services.html">Wedding Photography</a></h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="assets/img/gallery/blog03.png" alt="">
                        </div>
                        <div class="team-caption">
                            <h3><a href="services.html">Nature Photography</a></h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Ara End -->

    <!-- Gallery Area End -->
    <!--? Brand Area Start -->

    <!-- Brand Area End -->
    <!--? Testimonial Start -->
    <div class="testimonial-area testimonial-padding-1">
        <div class="container ">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-11 col-lg-11 col-md-9">
                    <div class="h1-testimonial-active">
                        <!-- Single Testimonial -->
                        <div class="single-testimonial text-center">
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption ">
                                <div class="testimonial-top-cap">
                                    {{-- <img src="assets/img/gallery/testimonial.png" alt=""> --}}
                                    <p>
<p>
                                    <p>"In photography, there is a reality so subtle that it becomes more real than reality." </p>
                                </div>
                                <!-- founder -->
                                <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                    <div class="founder-img">
                                        <img src="assets/img/gallery/Homepage_testi1.png" alt="">
                                    </div>
                                    <div class="founder-text">
                                        <span>Alfred Stieglitz</span>
                                        <p>Chif Photographer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Testimonial -->
                        <div class="single-testimonial text-center">
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption ">
                                <div class="testimonial-top-cap">
                                    {{-- <img src="assets/img/gallery/testimonial.png" alt=""> --}}
                                    <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis por incididunt ut labore et dolore mas. </p>
                                </div>
                                <!-- founder -->
                                <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                    <div class="founder-img">
                                        <img src="assets/img/gallery/Homepage_testi1.png" alt="">
                                    </div>
                                    <div class="founder-text">
                                        <span>Jessya Inn</span>
                                        <p>Chif Photographer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>



@endsection
