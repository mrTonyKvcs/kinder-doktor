@extends('layouts.app')

@section('url', route('blogs.show', $blog->slug))
@section('title', $blog->title . ' | Kinder-Doktor')
{{--@section('post-image', route('pages.index', $blog->images_path))--}}
@section('post-image', 'http://kinder-doktor.site/images/blogs/5-poharas-oldat.jpg')

@section('content')
    <!-- Write code -->

    <div class="section-subbanner">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <h1 class="caption">{{ $blog->title }}</h1>
                    <ol class="breadcrumb">
                        <li><a href="{{ route('pages.index') }}"><i class="fa fa-home fa-fw"></i></a> </li>
                        <li><a href="{{ route('blogs.index') }}">Hírek, olvasmányok</a> </li>
                        <li class="active">{{ $blog->title }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- E: .section-banner -->

    <div class="primary-content">
        <div class="blog blog-columns">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4 col-sm-push-8 col-md-push-8">

                        <div class="widget recent-post">
                            <div class="widget-title">
                                <h4>legnépszerűbb Hírek, olvasmányok</h4>
                            </div>
                            <div class="widget-body">
                                @foreach($favourites as $favourite)
                                    <div class="media">
                                        <div class="media-left pull-left">
                                            <a href="{{ route('blogs.show', $favourite->slug) }}">
                                                <img src="{{ $favourite->images_path }}" class="media-object" alt="{{ $favourite->title }}">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="{{ route('blogs.show', $favourite->slug) }}" title="">{{ $favourite->title }}</a></h4>
                                            <p class="postago"><i class="fa fa-calendar fa-fw"></i> <span class="color-333">{{ $favourite->created_at }}</span></p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- E: .recent-post -->

                        <!-- E: . -->

                        <!-- E: . -->
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-8 col-sm-pull-4 col-md-pull-4">
                        <div class="blog blogpost">
                            <article class="type-post">
                                <div class="entry-author"></div>
                                <div class="entry-cover">
                                    <img class="img-responsive" src="{{ $blog->images_path }}" alt="{{ $blog->title }}">
                                </div>
                                <div class="entry-content">
                                    <p>{!! $blog->description !!}</p>
                                </div>
                                <div class="entry-meta">
                                    <label>Megosztás:</label>
                                    <!-- Your share button code -->
                                    <div class="fb-share-button" data-href="{{ route('blogs.show', $blog->slug) }}" data-layout="button" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Megosztás</a></div>
                                </div>
                            </article>
                            <!-- E: article.type-post -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- E: . -->
    </div>





@endsection
