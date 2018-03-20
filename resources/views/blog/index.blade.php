@extends('layouts.app')

@section('content')


                <!-- Write code -->

                <div class="section-subbanner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <div class="caption">Hirek, Olvasmanyok</div>
                                <ol class="breadcrumb">
                                    <li><a href="{{ route('pages.index') }}">Kezdolap</a> </li>
                                    <li class="active">Hirek, Olvasmanyok</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- E: .section-banner -->

                <div class="primary-content">
                    <div class="blog">
                        <div class="container">
                            <div class="row grid-blog">
                                @for($i = 0; $i < 9; $i++)
                                <div class="col-xs-12 col-sm-4">
                                    <div class="item-box">
                                        <div class="pic">
                                            <img src="images/blog.png" class="img-responsive" alt="image">
                                        </div>
                                        <div class="item-box-body">
                                            <h4 class="tt05"><a href="#">What is the success rate of a Root Canel?</a> </h4>
                                            <p class="postby">Posted <a href="#" class="datetime">20 December 2016</a>   by <a href="#">Admin</a></p>
                                            <p>Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque <a href="{{ route('blogs.show', 'slug') }}">[Tovabb]</a></p>
                                        </div>
                                    </div>
                                </div>
                                @endfor
                            </div>
                            <div class="text-center spacing-bottom">
                                <ul class="pagination pagination-lg">
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- E: . -->
                </div>

                <!-- End code -->

            
@endsection
