@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <h1 style="padding:0 15px">{{ $post->title }}</h1>
            </div>
            <div class="col-md-12">
                @if(Session::has('success'))
                    <div class="alert alert-success text-uppercase rounded-0">
                        {{ Session::get('success') }}
                        @php
                            Session::forget('success');
                        @endphp
                    </div>
                @endif
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
            <div class="col-md-12 my-5">
                <form action="{{ route('admin.blogs.update', $post->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group col-md-12">
                    <input name="title" type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Cím" value="{{ $post->title }}" required>
                </div>
                <div class="form-group col-md-12">
                    <input name="editor" type="text" class="form-control" id="exampleInputEmail1" placeholder="Szerkesztő" value="Dr.Nagy Bea" required>
                </div>
                <div class="form-group col-md-12">
                    <input name="published_at" type="date" class="form-control" id="exampleInputEmail1" placeholder="" value="{{ $post->published_at }}" required>
                </div>
                <div class="form-group col-md-12">
                    <textarea name="description" id="mytextarea" value="">{{ $post->description }}</textarea>
                </div>
                <div class="form-group px-3">
                    <label for="file">Choose file to upload</label>
                    <input type="file" id="file" name="images_path" value="" multiple>
                    <img class="img-fluid" src="/posts/{{ $post->images_path }}" />
                </div>
                <div class="col-md-12 mb-20 mb-5">
                    <button type="submit" class="btn btn-success pull-right col-md-12 text-uppercase">Új Olvasmány létrehozása</button>
                    <a href="{{route('admin.blogs')}}" class="mt-3 btn btn-danger pull-right col-md-12 text-uppercase">mégsem</a>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
