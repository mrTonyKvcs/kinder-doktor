@extends('layouts.app')

@section('content')



    <div class="section-subbanner">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="caption">{{ trans('navbar.contact') }}</div>
                    <ol class="breadcrumb">
                        <li><a href="{{ route('pages.index') }}">{{ trans('navbar.home') }}</a> </li>
                        <li class="active">{{ trans('navbar.contact') }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- E: .section-banner -->

    <div class="primary-content">
        <div class="contactus">
            <div class="container">
                <div class="row">
                    <h2 class="tt02 text-center">Üzenetküldés és Rendelési Időpontok</h2>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                        <p class="intro text-center">Ha bármilyen kérdése van, forduljon hozzám bizalommal!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="widget contact-form">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="{{ trans('contact.name') }}">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="{{ trans('contact.email') }}">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="{{ trans('contact.message') }}" rows="8"></textarea>
                                </div>
                                <div class="display-block">
                                    <button type="submit" id="submit01" class="medical-button" name="submit" disabled>{{ trans('contact.button') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-5 pull-right">
                        <div class="widget contact-info">
                            <h3>{{ trans('contact.children') }}</h3>
                            <p><i class="fa fa-map-marker"></i> Kecskemét 6000 Tövis u. 10.</p>
                            <p><i class="fa fa-clock-o"></i> Rendelési idő:<br> Hétfő-Szerda-Péntek: 8-12 óra | Kedd-Csütörtök 15-18 óra</p>
                            <p><i class="fa fa-clock-o"></i>Tanácsadás : Kedd 13-15óra</p>
                            <p><i class="fa fa-envelope"></i> <a href="mailTo:kinderdoki@gmail.com" class="color-70">kinderdoki@gmail.com</a> </p>
                            <p><i class="fa fa-phone"></i> <a href="tel:+3676509661" target="_blank">+3676509661</a></p>
                        </div>
                        <div class="widget contact-info">
                            <h3>{{ trans('contact.private') }}</h3>
                            <p><i class="fa fa-map-marker"></i> Kecskemét 6000 Kápolna u. 15.</p>
                            <p><i class="fa fa-envelope"></i> <a href="#" class="color-70">email</a> </p>
                            <p><i class="fa fa-phone"></i> <a href="tel:+36706282124" class="color-70">+36706282124</a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- E: .contactus -->
    </div>


    <section class="map-location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2727.3980742356594!2d19.6172456164876!3d46.87521674620469!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4743d06aed47198f%3A0xa9e74e52be931173!2zS2Vjc2tlbcOpdCwgVMO2dmlzIHUuIDEwLCA2MDAw!5e0!3m2!1shu!2shu!4v1520964903825" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>
    </div>
    <!-- End Main -->
@endsection
