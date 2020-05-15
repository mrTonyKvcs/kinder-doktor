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
    <section class="appointment type_one pdt_100 pdb_100  ">
        <div class="container">
            <div class="row">
                <!---------row----------->
                <div class="col-lg-6">
                    <div class="heading tp_one">
                        <h1 style="font-size: 30px;">Sikeresen elküldte a Koronavírus (COVID-19) tesztre történő jelentkezését.</h1>
                    </div>
                    <p style="font-size: 25px;">Bejelentkezéséhez tartozó regisztrációs száma: <strong style="color: #dd2d4e;">{{ $orderNumber }}</strong></p><br>
                    <p style="font-size: 25px;">Kollégánk hamarosan felveszi Önnel a kapcsolatot, az ön által megjelölt telefonszámon.  További kérdéseivel nyugodtan keressen bennünket  regisztrációs számának megjelölésével az info@covidvirusteszt.hu email cimen.</p><br>
                    <p style="font-size: 25px;">Amennyiben atutalással szeretne fizetni, kérjuk abban az esetben a megjegyzés rovatban az általunk küldött regisztrációs számot legyen szives feltüntetni.</p>
                    <hr>

                    <h4 class="mt-3" style="color: #274782;">COVID–19 teszt: <span style="color: #dd2d4e;">{{$piece}}</span> db<h4>
                            <h4 class="my-3" style="color: #274782;">Fizetendő összeg: <span style="color: #dd2d4e;">{{$total}}</span> Ft<h4>
                                    <h4 class="mt-3" style="color: #274782;">Bankszámlaszám:<br><span style="color: #dd2d4e;">Kinder-Doktor Bt.</span><h4>
 <span style="color: #dd2d4e;">14100141-74358149-02000001</span><h4> <a href="/docs/kerdoiv-covid-19.docx" class="theme_btn tp_one mt-5">COVID-19 kérdőív letöltés</a> 
                </div>
                <div class="col-lg-6">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2725.6367556226155!2d19.689952615606433!3d46.90986177914458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4743da1088b22d2d%3A0xdaa84ae6af5e10bf!2sKecskem%C3%A9t%2C%20Piarist%C3%A1k%20tere%207%2C%206000!5e0!3m2!1sen!2shu!4v1589528136847!5m2!1sen!2shu" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <!----------row-end---------->
            </div>
        </div>
    </section>

    @include('covid.sections.handwash')

@endsection
