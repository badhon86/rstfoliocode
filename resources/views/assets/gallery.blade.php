@extends('assets.master')
@section('body')
<main>

    <!-- Hero End -->
    <!--? Gallery Area Start -->
    <section class="gallery-area about2 section-padding30 fix">
        @foreach ($gsData as $Data)
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-xl-5 col-lg-4 col-md-6 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">


                                <div class="gallery-img" style="background-image: url({{$Data->image}})";></div>


                            <div class="cap-icon">
                                <a href="{{$Data->image}}" class="ti-fullscreen img-pop-up"></a>

                                </div>

                            <div class="g-caption">
                                <h4>The Last man</h4>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                            <div class="gallery-img" style="background-image: url(assets/img/gallery/gallery2.png);"></div>
                            <div class="cap-icon">
                                <a href="assets/img/gallery/gallery2.png" class="ti-fullscreen img-pop-up"></a>
                            </div>
                            <div class="g-caption">
                                <h4>The Last man</h4>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                           <div class="gallery-img" style="background-image: url(assets/img/gallery/gallery3.png);"></div>
                            <div class="cap-icon">
                                <a href="assets/img/gallery/gallery3.png" class="ti-fullscreen img-pop-up"></a>
                            </div>
                            <div class="g-caption">
                                <h4>The Last man</h4>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-5 col-lg-4 col-md-6 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                            <div class="gallery-img" style="background-image: url(assets/img/gallery/gallery4.png);"></div>
                            <div class="cap-icon">
                                <a href="assets/img/gallery/gallery4.png" class="ti-fullscreen img-pop-up"></a>
                            </div>
                            <div class="g-caption">
                                <h4>The Last man</h4>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                            <div class="gallery-img" style="background-image: url(assets/img/gallery/gallery5.png);"></div>
                            <div class="cap-icon">
                                <a href="assets/img/gallery/gallery5.png" class="ti-fullscreen img-pop-up"></a>
                            </div>
                            <div class="g-caption">
                                <h4>The Last man</h4>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                            <div class="gallery-img" style="background-image: url(assets/img/gallery/gallery6.png);"></div>
                            <div class="cap-icon">
                                <a href="assets/img/gallery/gallery6.png" class="ti-fullscreen img-pop-up"></a>
                            </div>
                            <div class="g-caption">
                                <h4>The Last man</h4>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="gallery-btn text-center pt-100">
                        <a href="gallery.html" class="btn">Load more</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <!-- Gallery Area End -->
</main>
@endsection
