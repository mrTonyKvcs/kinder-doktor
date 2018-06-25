@extends('layouts.app')

@section('title', 'Szolgáltatásaim | Kinder-Doktor')

@section('content')
    <!-- Write code -->

    <div class="section-subbanner">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <h1 class="caption">{{ trans('navbar.services') }}<h1>
                    <ol class="breadcrumb">
                        <li><a href="{{ route('pages.index') }}">{{ trans('navbar.home') }}</a> </li>
                        <li class="active">{{ trans('navbar.services') }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- E: .section-banner -->

    <div class="primary-content">
        <div class="services">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="item-box">
                            <div class="pic">
                                <a href="#"><img src="/images/rendeles.png" class="img-responsive" alt="image"></a>
                            </div>
                            <div class="weare-content">
                                <div class="choose">
                                    <div class="choose-content">
                                        <h2 class="service-title">{{ trans('services.babe') }}</h2>
                                        <p>{{ trans('services.babe-text') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="item-box">
                            <div class="pic">
                                <a href="#"><img src="/images/homeopatia.png" class="img-responsive" alt="image"></a>
                            </div>
                            <div class="weare-content">
                                <div class="choose">
                                    <div class="choose-content">
                                        <h2 class="service-title">{{ trans('services.homeopathy') }}</h2>
                                        <p>{{ trans('services.homeopathy-text') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="item-box">
                            <div class="pic">
                                <a href="#"><img src="/images/egeszsegpenztar.png" class="img-responsive" alt="image"></a>
                            </div>
                            <div class="weare-content">
                                <div class="choose">
                                    <div class="choose-content">
                                        <h2 class="service-title">{{ trans('services.fund') }}</h2>
                                        <p>{{ trans('services.fund-text') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xs-12 col-sm-4">
                        <div class="item-box">
                            <div class="pic">
                                <a href="#"><img src="/images/arc.png" class="img-responsive" alt="image"></a>
                            </div>
                            <div class="weare-content">
                                <div class="choose">
                                    <div class="choose-content">
                                        <h2 class="service-title">{{ trans('services.face') }}</h2>
                                        <p>Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolor emque laudantium</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- E: .services -->
    </div>
@endsection
