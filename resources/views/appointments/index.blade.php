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
                    </div>
                    <div class="appointment_form pdb_90">
                        <form>
                            <div class="row">
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
                                        <input type="text" id="birthday" placeholder="Születési idő" required>
                                        <i class="linearicons-calendar-full"></i>
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
                                        <h2>Covid-19 Teszt (db)</h2>
                                        <select name="piece" id="topic">
                                            <option selected="selected">Válassza ki hány darab covid-19 tesztet szeretne</option>
                                            @for($i = 1; $i <= 30; $i++)
                                                <option value ="{{$i}}">{{ $i }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <h2>Fizetési mód</h2>
                                        <select name="piece" id="doctors">
                                            <option selected="selected">Válasszon fizetési módot!</option>
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
                                </div><div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" name="address" placeholder="Utca, házszám" required/>
                                        {{--<small class="linearicons-user"></small>--}}
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group mg_top accept check_box">
                                        <input name="checkbox" type="checkbox" id="test4" required="required">
                                        <label for="test4"><a href="#" target="_blank">Adatkezelési tájékoztatóban </a>foglaltakat elolvastam, megértettem, és időpont kéréssel hozzájárulok ahhoz, hogy személyes adataimat a tájékoztatóban megjelölt célból és feltételekkel a Kinder-doktor Kft. kezelje.</label>
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
