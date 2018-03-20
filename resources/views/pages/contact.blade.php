@extends('layouts.app')

@section('content')



                <div class="section-subbanner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <div class="caption">Kapcsolat</div>
                                <ol class="breadcrumb">
                                    <li><a href="{{ route('pages.index') }}">Kezdolap</a> </li>
                                    <li class="active">Kapcsolat</li>
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
                                <h2 class="tt02 text-center">Write to Us If You Have Questions</h2>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                                    <p class="intro text-center">Lorem ipsum dolor sit amet adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-6">
                                    <div class="widget contact-form">
                                        <form>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Name">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Email or Number Phone">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Subject">
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" placeholder="Message" rows="8"></textarea>
                                            </div>
                                            <div class="display-block">
                                                <button type="submit" id="submit01" class="medical-button" name="submit">Book An Appointment</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-5 pull-right">
                                    <div class="widget contact-info">
                                        <h3>Our office in London</h3>
                                        <p><i class="fa fa-map-marker"></i> Big Ben Street, E16 3LS, London, United Kingdom</p>
                                        <p><i class="fa fa-envelope"></i> <a href="#" class="color-70">Support24/7@domain.com</a> </p>
                                        <p><i class="fa fa-phone"></i> (0084)+ 123 45 67 890</p>
                                    </div>
                                    <div class="widget contact-info">
                                        <h3>Our office in New York</h3>
                                        <p><i class="fa fa-map-marker"></i> Big Ben Street, E16 3LS, London, United Kingdom</p>
                                        <p><i class="fa fa-envelope"></i> <a href="#" class="color-70">Support24/7@domain.com</a> </p>
                                        <p><i class="fa fa-phone"></i> (0084)+ 123 45 67 890</p>
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
