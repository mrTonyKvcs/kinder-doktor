@extends('layouts.app')

@section('content')


    <!-- Write code -->

    <div class="section-subbanner">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="caption">Szolgaltatasaim</div>
                    <ol class="breadcrumb">
                        <li><a href="{{ route('pages.index') }}">Kezdolap</a> </li>
                        <li class="active">Szolgaltatasaim</li>
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
                                <a href="#"><img src="images/rendeles.png" class="img-responsive" alt="image"></a>
                            </div>
                            <div class="weare-content">
                                <div class="choose">
                                    <div class="choose-content">
                                        <h3 class="service-title">Gyermek szakorvosi rendelések</h3>
                                        <p>Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolor emque laudantium</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="item-box">
                            <div class="pic">
                                <a href="#"><img src="images/homeopatia.png" class="img-responsive" alt="image"></a>
                            </div>
                            <div class="weare-content">
                                <div class="choose">
                                    <div class="choose-content">
                                        <h3 class="service-title">Homeopátia</h3>
                                        <p>Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolor emque laudantium</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="item-box">
                            <div class="pic">
                                <a href="#"><img src="images/egeszsegpenztar.png" class="img-responsive" alt="image"></a>
                            </div>
                            <div class="weare-content">
                                <div class="choose">
                                    <div class="choose-content">
                                        <h3 class="service-title">Egészségpénztár</h3>
                                        <p>Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolor emque laudantium</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="item-box">
                            <div class="pic">
                                <a href="#"><img src="images/card.png" class="img-responsive" alt="image"></a>
                            </div>
                            <div class="weare-content">
                                <div class="choose">
                                    <div class="choose-content">
                                        <h3 class="service-title">Bankkártyás fizetes</h3>
                                        <p>Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium dolor emque laudantium</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="item-box">
                            <div class="pic">
                                <a href="#"><img src="images/baby.png" class="img-responsive" alt="image"></a>
                            </div>
                            <div class="weare-content">
                                <div class="choose">
                                    <div class="choose-content">
                                        <h3 class="service-title">Csecsemő tanácsadás (kötelező védőoltások beadása)</h3>
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
