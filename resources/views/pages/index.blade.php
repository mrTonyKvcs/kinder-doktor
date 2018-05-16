@extends('layouts.app')

@section('content')

          <!-- End header -->

        <!-- Begin Main -->
      
                <!-- Write code -->
                <section id="c-slider" class="c-slider no-padding">
                    <div class="c-slider__items">
                        <div class="c-slider__item">
                            <div class="container vertical-cente align-middle">

                                <div class="row">

                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="c-slider__content">
                                        <h1 class="c-slider__title">Ipsum quis error</h1>
                                        <p class="c-slider__text">Amet obcaecati sint incidunt ipsum error blanditiis explicabo eaque Itaque totam commodi ducimus consequuntur nulla Eveniet quo magni est consectetur ad fugit? Voluptatum temporibus magnam vitae mollitia assumenda Laudantium temporibus.</p>
                                        <button type="button" class="btn c-slider__button">Tovabb</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
                <!-- E: .section-section -->

                <section class="section-why-choose mb100">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="block-why-choose">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <h2 class="tt02">{{ trans('about.title') }}</h2>
                                            <p class="intro">{!! trans('about.text') !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- E: .section-why-choose -->

                <section class="section-gallery">
                    <div id="owl-demo" class="owl-carousel owl-theme"></div>
                    <div class="controls">
                        <h5 class="tt05"></h5>
                    </div>
                </section>
                <!-- E: .section-gallery -->

                <section class="section-department">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-7">
                                <h2 class="tt02">Szolgáltatásaim</h2>
                                <p class="intro">
                                Lorem ipsum dolor sit amet adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-3">
                                <div class="department">
                                    <div class="depart-image">
                                        <div class="pic">
                                            <img src="/images/rendeles.png" class="img-responsive" alt="image">
                                        </div>
                                    </div>
                                    <div class="department-body">
                                        <h4 class="tt05"><a href="{{ route('pages.services') }}">{{ trans('services.babe') }}</a> </h4>
                                        <p class="color-70">{{ trans('services.babe-text') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="department">
                                    <div class="depart-image">
                                        <div class="pic">
                                            <img src="/images/homeopatia.png" class="img-responsive" alt="image">
                                        </div>
                                    </div>
                                    <div class="department-body">
                                        <h4 class="tt05"><a href="#">{{ trans('services.homeopathy') }}</a> </h4>
                                        <p class="color-70">{{ trans('services.homeopathy-text') }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3">
                                <div class="department">
                                    <div class="depart-image">
                                        <div class="pic">
                                            <img src="/images/arc.png" class="img-responsive" alt="image">
                                        </div>
                                    </div>
                                    <div class="department-body">
                                        <h4 class="tt05"><a href="{{ route('pages.services') }}">{{ trans('services.face') }}</a> </h4>
                                        <p class="color-70">{{ trans('services.homeopathy') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="department">
                                    <div class="depart-image">
                                        <div class="pic">
                                            <img src="/images/egeszsegpenztar.png" class="img-responsive" alt="image">
                                        </div>
                                    </div>
                                    <div class="department-body">
                                        <h4 class="tt05"><a href="{{ route('pages.services') }}">{{ trans('services.fund') }}</a> </h4>
                                        <p class="color-70">{{ trans('services.fund-text') }}</p>
                                    </div>
                                </div>
                            </div>    
                        </div>
                    </div>
                </section>
                <!-- E: .section-department -->

                <div class="section-testimonial">
                    <div class="container">
                        <div class="row flex">
                            <div class="col-sm-5 hidden-xs">
                                <img src="/images/profile.jpg" alt="testimonial">
                            </div>
                            <div class="col-sm-7 col-xs-12">
                                <div class="testimonial-ctn">
                                    <p>{!! trans('home-page.citation') !!}</p>
                                    <div class="meta">
                                        <div class="author">
                                            <strong>Dr. Nagy Beáta</strong><br>
                                            <p>Házi gyermekorvos</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- E: .section-testimonial -->

                <div class="section-blue">
                </div>
                <!-- E: .section-blue -->

                <section class="section-news">
                    <div class="container">
                        <h2 class="tt02">Hírek, olvasmányok</h2>
                        <div class="row">
                            <div class="col-xs-12 col-sm-8 col-md-8">
                                <p>
    Ipsum blanditiis repellat earum a at. Mollitia facilis et nesciunt perferendis asperiores! Similique commodi eveniet totam et ea. Blanditiis accusamus!
</p>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4 pull-right">
                                <div class="view-more">
                                    <a href="#" class="btn medical-button">Összes olvasmány</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach($blogs as $blog)
                                <div class="col-xs-12 col-sm-4">
                                    <div class="item-box">
                                        <div class="pic">
                                            <img src=" {{ $blog->images_path }}" class="img-responsive" alt="{{ $blog->title }}">
                                        </div>
                                        <div class="item-box-body">
                                            <h4 class="tt05"><a href="{{ route('blogs.show', $blog->slug) }}">{{ $blog->title }}</a> </h4>
                                            <p class="postby"><i class="fa fa-calendar fa-fw"></i> <span class="datetime">{{ $blog->created_at }}</span>   by <span>{{ $blog->editor }}</span></p>
                                            <p><a href="{{ route('blogs.show', $blog->slug) }}">[Tovább]</a></p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
                <!-- E: .section-news -->


                <!-- End code -->
        <!-- End Main -->

        <!-- Begin Footer -->
                <!-- End Footer -->

    <!-- Java Scripts - Libs -->


@endsection
