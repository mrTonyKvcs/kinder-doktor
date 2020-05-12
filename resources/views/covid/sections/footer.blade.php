
<section class="footer type_one  pdb_70 pdt_100">
    <div class="container">
        <div class="row">
            <!---------row----------->
            <div class="col-lg-6 col-md-12">
                <!---------col----------->
                <div class="footer_widgets left type_one">
                    <div class="widgets_title">
                        <h1 class="title">Üzenet küldés</h1>
                        <p>Ha kérdése van, forduljon hozzánk bizalommal!</p>
                    </div>
                    <div class="form_box type_one">
                        <form action="/covid-19/uzenet-kuldes" method="POST">
                        {{--<form action="{{ route('covid.send-a-message') }}" method="POST">--}}
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Neve" required/>
                                        <small class="linearicons-user"></small>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email címe" required/>
                                        <small class="linearicons-envelope-open"></small>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="phone" placeholder="Telefonszáma" required/>
                                        <small class="linearicons-telephone"></small>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group textarea">
                                        <textarea class="text-dark" name="message" placeholder="Üzenete..." rows="6" required></textarea>
                                        <small class="linearicons-pencil4"></small>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group mg_top check_box">
                                        {{--<input name="checkbox" type="checkbox" id="test2" required="required">--}}
                                        {{--<label for="test2">I accept the <a href="#" target="_blank">Privacy Policy.</a></label>--}}
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <button class="submit_btn" type="submit">Küldés</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!---------col-end---------->
            </div>
            <div class="col-lg-6 col-md-12">
                <!---------col----------->
                <div class="footer_widgets right type_one">
                    <div class="widgets_title">
                        <h1 class="title">Kapcsolat</h1>
                    </div>
                    <div class="emergency_phone">
                        <h6>Telefonszám</h6>
                        <h2><a href="tel:+36306038815" style="color: #dd2d4e;">+36306038815</a></h2>
                    </div>
                    <ul class="contact_all">
                        <li><a href="#"><span class="linearicons-home4"></span>6000 Kecskemét, Piaristák tere 7. <br>(Oldalt a Fogászati Ügyelet felöli bejáratnál)</a></li>
                        <li><a href="mailtto:info@covidvirusteszt.hu"><span class="linearicons-envelope-open"></span>Email: <small>info@covidvirusteszt.hu</small></a></li>
                    </ul>
                    <ul class="social_media">
                        <li><a href="https://www.facebook.com/covidteszt/?__tn__=kCH-R&eid=ARAdqTU4-y34-K198cTC1xGQFPHCJEmDr54MvO0mhJCtpF_jKI4JBhiMsFY4S-49GbFiOm02YJvBBP79&hc_ref=ART6qGsNQgKQzlFoIt_GJCM4a4rO0iUUojU-hLCYe8b9Pow9xP9J5yd9jw259oQPXsM&fref=nf&__xts__[0]=68.ARC6bLvB-hBffcUgutUVdE1cjY3_vVhFEgNZGYzCUOfb7TNzF0aHAmX0brLXHwm-syTEfyzOoUFW9iIWwSd-Pg7jYDfERhRHdJxumTyv_cRrnv9nTA5JXkEX0b0xoapCyalm0o31r-hNt4_jYKwSHOs34MKVSsEKr6n9fznOXsv_1fSwJMrGc0dq3f3NTwq2bpHpSo2jWQ79c35ZDNV92ymlogho0hbGR-YyMx8aEdCVZJEE0MOVcJ1QM4pa93MRL9JVdE_08J7AbhdrXFG3Csf4WM__Y9eZJhJ2QLvrFURHUjSgNc5I_2S9DerbXueIqswqI8yuVWi3GERhdZYeMFhd" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    </ul>
                </div>
                <!---------col-end---------->
            </div>
            <!----------row-end---------->
        </div>
    </div>
</section>
<section class="footerlast type_one  pdb_80 pdt_80">
    <div class="container">
        <div class="row">
            <!---------row----------->
            <div class="col-lg-12 col-md-12  text-center">
                <!---------col----------->
                <div class="footer_last_box">
                    <div class="logo_footer">
                        <img src="/covid/image/logo-white.png" class="img-fluid" alt="img" />
                    </div>
                    <ul>
                        <li> Kinder-Doktor Bt.</li>
                        <li>© Copyright 2020 Labordiagnosztika Kecskemét</li>
                        <li> |</li>
                        <li> <a href="/pdfs/kinder-doktor-gdpr.pdf" target="_blank">Adatkezelési Tájékoztató</a> </li>
                        <li> <a href="/pdfs/beleegyezo-nyilatkozat.pdf" target="_blank">Beleegyező Nyilatkozat</a> </li>
                    </ul>
                </div>
                <!---------col-end---------->
            </div>
            <!----------row-end---------->
        </div>
    </div>
</section>
