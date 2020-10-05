@extends('assets.master')
@section('body')
<main>

    <!-- Hero End -->
    <!--? Gallery Area Start -->
    <section class="gallery-area about2 section-padding30 fix">

        <div class="container-fluid p-0">


            <div class="row no-gutters">
                @foreach ($gsData as $Data)
                <div class="  col-xl-4 col-lg-4 col-md-6 col-sm-6">

                    <div class="gallery-box">

                        <div class="single-gallery">


                                <div class="gallery-img" style="background-image: url({{$Data->image}}) ";></div>


                            <div class="cap-icon">
                                <a href="{{$Data->image}}" class="ti-fullscreen img-pop-up"></a>

                                </div>


                            <div class="g-caption">
                                <h4>{{$Data->title}}</h4>





                            </div>


                        </div>

                    </div>

                </div>
                @endforeach
            </div>



        </div>



        <div class="row">
            <div class="col-lg-12">
                <div class="gallery-btn text-center pt-100">
                    <a href="gallery.html" class="btn">Load more</a>
                </div>
            </div>
        </div>
    </section>

    <section>

    </section>
    <!-- Gallery Area End -->
</main>
@endsection
