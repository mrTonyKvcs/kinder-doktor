@extends('layouts.app')

@section('title', 'Schüssler só | Kinder-Doktor')

@section('content')
    <div id="main" class="content-main">
        <div class="content-article">

            <!-- Write code -->

            <div class="section-subbanner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <h1 class="caption">{{ trans('navbar.schussler') }}</h1>
                            <ol class="breadcrumb">
                                <li><a href="{{ route('pages.index') }}">{{ trans('navbar.home') }}</a> </li>
                                <li class="active">{{ trans('navbar.schussler') }}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- E: .section-banner -->

            <div class="primary-content">
                <div class="service-single">
                    <div class="container">
                        <div class="row">

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="service-detail">
                                    {{--<p><img src="/images/picture/service-detail-01.jpg" alt="image" class="img-responsive"></p>--}}
                                    <section class="block-text">
                                        <h5 class="tt05">A Schüssler-féle biokémiai sók nélkülözhetetlenek, alapfeltételei az egészségnek és minden élő szervezetben megtalálhatóak.</h5>
                                        <p>12 fő vegyületet ismerünk, melyek</p>
                                        <ul>
                                            <li>fontos elemei és energiaforrásai a sejtjeinknek,</li>
                                            <li>alapvetően befolyásolják, szabályozzák a hormonrendszer és
                                                anyagcsere-folyamataink működését, a lelki és pszichés funkciókat.</li>
                                        </ul>
                                        {{--<ol class="notype">--}}
                                            {{--<li><i class="fa fa-check"></i> Qualified Staff of Doctors</li>--}}
                                            {{--<li><i class="fa fa-check"></i> Qualified Staff of Doctors</li>--}}
                                            {{--<li><i class="fa fa-check"></i> Feel like you are at Home Services </li>--}}
                                            {{--<li><i class="fa fa-check"></i> Feel like you are at Home Services </li>--}}
                                            {{--<li><i class="fa fa-check"></i> 24x7 Emergency Services </li>--}}
                                            {{--<li><i class="fa fa-check"></i> 24x7 Emergency Services </li>--}}
                                            {{--<li><i class="fa fa-check"></i> Save your Money and Time with us</li>--}}
                                            {{--<li><i class="fa fa-check"></i> Save your Money and Time with us</li>--}}
                                            {{--<li><i class="fa fa-check"></i> Easy and Affordable Billing </li>--}}
                                            {{--<li><i class="fa fa-check"></i> Easy and Affordable Billing </li>--}}
                                            {{--</ol>--}}
                                        <p>Dr. Wilhelm Schüssler fejlesztette ki azt a sóterápiát, mellyel a szervezetben jelenlévő 12 féle esszenciális só hiányát energetikailag, az információ szintjén pótolni lehet.</p>
                                        <p>Az eljárást hatékonyságának, egyszerűségének és olcsóságának köszönhetően a nyugati országokban nagy sikerrel alkalmazzák.</p>
                                        <p></p>
                                    </section>
                                    <section class="block-text">
                                        <div class="media">
                                            <div class="media-left pull-right">
                                                {{--<a href="#">--}}
                                                    {{--<img src="/images/homeopathy_banner.jpg" class="media-object" alt="Sample Image">--}}
                                                    {{--</a>--}}
                                            </div>
                                            <div class="media-body">
                                                <h5 class="tt05">A Schüssler-só kezelés alapfilozófiája:</h5>
                                                <p><strong>A homeopátiás szerek szedésének van néhány alapszabálya, amit nagyon fontos betartani a hatékony kezelés érdekében.</strong></p>
                                                <p>Ásványi anyaghiány akkor lép fel, ha a sókat a szervezet nem képes a sejtekbe beépíteni,
                                                mert már biológiai értelemben nem reakcióképesek, más anyagokkal léptek kémiai
                                                kapcsolatba és azzal lekötődtek (pl. antibiotikumokkal, méreganyagokkal).</p>
                                                <p>Ilyenkor nem az a megoldás, hogy még nagyobb adagban tömjük az emberekbe pl. a
                                                magnéziumot vagy a vasat, hanem a szervezetet kell képessé tenni arra, hogy be tudja
                                                építeni az adott anyagot sejtszinten. A Schüssler-só képes a sejtek
                                                ásványianyag-háztartását helyreállítani.</p>
                                                <p>Minden heveny vagy krónikus idegi, lelki, testi megerőltetés, betegség (stressz, savasodás,
                                                candida betegség, alvási problémák, horkolás, reflux), táplálkozási probléma előbb-utóbb
                                                felborítja a szervezet elektrolit egyensúlyát. Só-hiányállapot léphet fel változókor esetén és a
                                                kor előrehaladtával is.</p>
                                                <h5 class="tt05">A biokémiai sók hiányának jelei:</h5>
                                                <p>Amennyiben a sók anyagcseréjében tartós hiány mutatkozik, ezek felismerése, és a hiány
                                                pótlása alapfeltétel a gyógyuláshoz. Ezek a jelek könnyen felismerhetők, diagnosztizálhatók:
                                                - szerkezeti elváltozások a szervezetben: csontritkulás, fogszuvasodás, köröm-, vagy
                                                hajtöredezés, sarok, szájzug, végbél berepedése, visszerek,
                                                - működésbeli zavarok : fokozott görcskészség az izmokban, fokozott izzadás, hőhullámok,
                                                gyomorsav-túltengés, fáradtság-, gyengeségérzet, éhségtűrés csökkenése, hajhullás,
                                                fokozott kopaszodás és korpásodás, ízületi panaszok, alvási nehézségek, fokozott
                                                ingerlékenység, migrénes panaszok,Schü
                                                - jellegzetes elváltozások az arcon: elszíneződések, értágulatok, májfolt, fokozott
                                                zsírosodás, pattanásos tünetek, ráncosodás.</p>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <!-- E: . -->
                        </div>
                    </div>
                </div>
                <!-- E: . -->
            </div>
        </div>
    </div>
@endsection
