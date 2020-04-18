@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 style="padding:0 15px">Admin | Hírek, Olvasmányok </h1>
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
                <form action="{{ route('admin.blogs.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group col-md-12">
                    <input name="title" type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Cím" required>
                </div>
                <div class="form-group col-md-12">
                    <input name="editor" type="text" class="form-control" id="exampleInputEmail1" placeholder="Szerkesztő" value="Dr.Nagy Bea" required>
                </div>
                <div class="form-group col-md-12">
                    <input name="published_at" type="date" class="form-control" id="exampleInputEmail1" placeholder="" required>
                </div>
                <div class="form-group col-md-12">
                    <textarea name="description" id="mytextarea"></textarea>
                </div>
                <div class="form-group px-3">
                    <label for="file">Choose file to upload</label>
                    <input type="file" id="file" name="images_path" multiple>
                </div>
                <div class="col-md-12 mb-20 mb-5">
                    <button type="submit" class="btn btn-success pull-right col-md-12 text-uppercase">Új Olvasmány létrehozása</button>
                </div>
                </form>
            </div>
            <div class="col-md-12 px-4">
                <h3>Összes hír és olvasmány</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Cím</th>
                            <th scope="col">Dátum</th>
                            <th scope="col" class="text-center">Szerkeszt</th>
                            <th scope="col" class="text-center">Törlés</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $blog)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td>{{ $blog->title }}</td>
                                <td>{{ $blog->created_at }}</td>
                                <td class="text-center">
                                    <a href="{{route('admin.blogs.edit', $blog->slug)}}" class="btn btn-primary">Szerkeszt</a>
                                    <i class="fa fa-pencil-square-o fa-fw"></i>
                                </td>
                                <td class="text-center">
                                    <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="post">
                                        {{csrf_field()}}
                                        <input name="_method" type="hidden" value="delete">
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash fa-fw fa-lg text-danger border-0"></i>TÖRLÉS</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
