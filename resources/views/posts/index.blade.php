@extends('layouts.app')

@section('title', 'Hírek, Olvasmányok | Kinder-Doktor')

@section('content')


    <!-- Write code -->

    <div class="section-subbanner">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <h1 class="caption">{{ trans('navbar.news') }}</h1>
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
                    @foreach($posts as $post)
                        <div class="col-xs-12 col-sm-4">
                            <div class="item-box">
                                <div class="pic">
                                    <img src="/posts/{{$post->images_path}}" class="img-responsive" alt="image">
                                </div>
                                <div class="item-box-body">
                                    <h4 class="tt05"><a href="{{ route('blogs.show', $post->slug) }}">{!! $post->title !!}</a> </h4>
                                    <p class="postby"><i class="fa fa-calendar fa-fw"></i> <a href="#" class="datetime">{{ $post->created_at }}</a>   by <a href="#">{{ $post->editor }}</a></p>
                                    <p>{!! str_limit(strip_tags($post->description), 100, '...') !!}</p>
                                    <a href="{{ route('blogs.show', $post->slug) }}">[Tovább]</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="text-center spacing-bottom">
                    <ul class="pagination pagination-lg">
                        {!! $posts->render() !!}
                    </ul>
                </div>
            </div>
        </div>
        <!-- E: . -->
    </div>

    <!-- End code -->


@endsection
