@extends('layouts.covid')
@section('content')

    <!------main-content------>
    <!-----------page_title--------------->
    <section class="page_title  pdt_80  pdb_40">
        <div class="container">
            <div class="row">
                <!---------row----------->
                <div class="col-lg-12 col-md-12 text-center">
                    <!---------col----------->
                    <div class="content_box">
                        <h6>COVID-19</h6>
                        <h1> Online bejelentkezés</h1>
                        <ul class="bread_crumb text-center">
                            <li class="bread_crumb-item"><a href="{{ route('covid.index') }}">Főoldal</a></li>
                            <li class="bread_crumb-item active"> Online bejelentkezés </li>
                        </ul>
                    </div>
                    <!---------col-end---------->
                </div>
                <!----------row-end---------->
            </div>
        </div>
    </section>
    <!-----------page_title-end-------------->
    <!-----------appointment--------------->
    <section class="appointment type_one pdt_100  ">
        <div class="container">
            <div class="row">
                <!---------row----------->
                <div class="col-lg-12">
                    <!------col------->
                    <div class="heading tp_one">
                        <h1>Adatlap</h1>
                        <p style="font-size: 21px;">A normál ár 11.500Ft, kedvezményes ár 6 fő felett, és a védekezésben dolgozóknak 9200Ft.</p>
                        <p>(Kedvezményes ár: Egészségügyi intézmények, Tűzoltóparancsnokság, Rendőrkapitányság, Katasztrófavédelem, Polgármesteri hivatal dolgozói)</p>
                    </div>
                    <div class="appointment_form pdb_90">
                        <form  action="{{ route('appointments.store')}}" method="POST">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-lg-12">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="last_name" placeholder="Vezetéknév" />
                                        <small class="linearicons-user"></small>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="first_name" placeholder="Keresztnév" required/>
                                        <small class="linearicons-user"></small>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group padding_no">
                                        <input type="date" name="birthday" id="birthday" placeholder="Születési idő" required>
                                        {{--<i class="linearicons-calendar-full"></i>--}}
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="social_security_number" placeholder="Taj vagy útlevélszám" required/>
                                        <small class="linearicons-user"></small>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="email" placeholder="Email" required/>
                                        <small class="linearicons-envelope"></small>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" placeholder="Telefonszám" required/>
                                        <small class="linearicons-envelope"></small>
                                    </div>
                                </div><div class="col-lg-12">
                                    <div class="form-group">
                                        <h2>Válassza ki hány darab covid-19 tesztet szeretne</h2>
                                        <select class="select-piece" name="piece" id="topic" required>
                                            <option value="1" selected="selected">1</option>
                                            @for($i = 2; $i <= 30; $i++)
                                                <option value ="{{$i}}">{{ $i }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <h2>Fizetési mód</h2>
                                        <select name="pay_method" id="doctors" required>
                                            <option selected="selected">Válasszon fizetési módot!</option>
                                            <option value"Bankkártyás fizetés">Bankkártyás fizetés</option>
                                            <option value="Átutalás">Átutalás</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <h2>Védekezésben dolgozó</h2>
                                        <select name="is_nurse" id="age" required>
                                            <option value="0" selected="selected">Nem</option>
                                            <option value="1">Igen</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mb-0">
                                        <h2>Számlázási cím</h2>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="city" placeholder="Város" />
                                        <small class="linearicons-building"></small>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="zip_code" placeholder="Irányítószám" required/>
                                        {{--<small class="linearicons-user"></small>--}}
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <div class="form-group">
                                        <input type="text" name="address" placeholder="Utca, házszám" required/>
                                        {{--<small class="linearicons-user"></small>--}}
                                    </div>
                                </div>
                                {{--<div class="col-lg-6 my-3">--}}
                                    {{--<div class="form-group mb-0 d-flex align-items-center">--}}
                                        {{--<h2>Bruttó végösszeg:</h2>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-lg-6 my-3">--}}
                                    {{--<div class="form-group mb-0">--}}
                                        {{--<h2 id="all"></h2>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                <div class="col-lg-8">
                                    <div class="form-group mg_top accept check_box">
                                        <input name="gdpr" type="checkbox" id="test4" required="required" value="1">
                                        <label for="test4"><a href="/pdfs/kinder-doktor-gdpr.pdf" target="_blank">Adatkezelési tájékoztatóban </a>foglaltakat elolvastam, megértettem, és időpont kéréssel hozzájárulok ahhoz, hogy személyes adataimat a tájékoztatóban megjelölt célból és feltételekkel a Labordiagnosztika Kecskemét kezelje.</label>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group mg_top accept check_box">
                                        <input name="statement" type="checkbox" id="tes" required="required" value="1">
                                        <label for="tes">Elfogadom a <a href="/pdfs/beleegyezo-nyilatkozat.pdf" target="_blank">beleegyező nyilatkozat</a>ot</label>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <button class="submit_btn" type="submit">Megrendelem</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!------col-ebd------->
                </div>
                <!----------row-end---------->
            </div>
        </div>
    </section>

@endsection
