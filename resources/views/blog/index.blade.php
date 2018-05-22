@extends('layouts.app')

@section('content')


    <!-- Write code -->

    <div class="section-subbanner">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="caption">{{ trans('navbar.news') }}</div>
                    <ol class="breadcrumb">
                        <li><a href="{{ route('pages.index') }}">{{ trans('navbar.home') }}</a> </li>
                        <li class="active">{{ trans('navbar.news') }}</li>
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
                    @foreach($blogs as $blog)
                        <div class="col-xs-12 col-sm-4">
                            <div class="item-box">
                                <div class="pic">
                                    <img src="{{ $blog->images_path }}" class="img-responsive" alt="image">
                                </div>
                                <div class="item-box-body">
                                    <h4 class="tt05"><a href="{{ route('blogs.show', $blog->slug) }}">{!! $blog->title !!}</a> </h4>
                                    <p class="postby"><i class="fa fa-calendar fa-fw"></i> <a href="#" class="datetime">{{ $blog->created_at }}</a>   by <a href="#">{{ $blog->editor }}</a></p>
                                    <p>{!! str_limit($blog->description, 50, '...') !!}</p>
                                    <a href="{{ route('blogs.show', $blog->slug) }}">[Tovább]</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
