@extends('layouts.covid')

@section('content')
    <!------main-content------>
    <!-------slider--section------>
    <section class="banner type_one" id="home" style="background:url(/covid/image/main-slider/slider-1.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex pr_0">
                    <div class="content_outer">
                        <div class="inner_box">
                            {{--<h6  class="wow slideInDown" data-wow-delay="100ms" data-wow-duration="1500ms">#maradjotthon</h6>--}}
                            <h1  class="wow slideInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">Afias 6 megbízható laborteszt</h1>
                            <p  class="wow slideInRight" data-wow-delay="300ms" data-wow-duration="1500ms">A vizsgálatot az OGYEI/24099-3/2020 által engedélyezett BODITECH BIO TECHNOLOGY cég AFIAS 6 hatcsatornás diagnosztikai gépével végezzük. A teszt az AFIAS 6 COVID-19 Ab – egy fluoreszcens immunkémiai teszt, mely az új koronavírus (SARS-CoV-2) ellen termelt IgM/IgG kimutatását végzi. Pozitív esetben 100%-os a szenzitivitása. Negatív esetben 96,7 %.</p>
                            <div class="link_box wow slideInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                                <a href="{{ route('appointments.index') }}" class="theme_btn tp_one"><span class="linearicons-calendar-text icon"></span>Online bejelentkezés</a> <a href="#arak" class="theme_btn tp_border link_hd"><span class="linearicons-arrow-right"></span>Árak</a>
                            </div>
                            <div class="link_box wow slideInUp mt-3" data-wow-delay="400ms" data-wow-duration="1500ms">
                                <a href="/pdfs/vizsgalat.pdf" class="theme_btn tp_border link_hd"><span class="linearicons-arrow-right"></span>Hogy történik a vizsgálat?</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="image_box wow fadeInDown" data-wow-delay="100ms" data-wow-duration="1500ms">
                        <img src="/covid/image/main-slider/slider--graphic-1.png" class="img-fluid" alt="img" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-------slider--section-end----->
    <!-----------counter--------------->
    @include('covid.sections.counter')
    <!-----------counter-end-------------->
    <!-----------about--------------->
    @include('covid.sections.about')
    <!-----------counter-end-------------->
    <!-----------symptoms--------------->
    @include('covid.sections.symptoms')
    <!-----------symptoms-end-------------->
    @include('covid.sections.prices')
    <!-----------faq--------------->
    @include('covid.sections.faq')
    <!-----------faq-end-------------->
    <!-----------handwash--------------->
    @include('covid.sections.handwash')
    <!-----------handwash-end-------------->
    <!-----------footer--------------->
    <!-----------footer-end-------------->
    <!-----------footerlast UNWELL?--------------->
    <!-----------footerlast-end-------------->
    <!------main-content-end----->

@endsection
