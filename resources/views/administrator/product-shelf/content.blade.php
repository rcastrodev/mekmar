@extends('adminlte::page')
@section('title', 'Ordenador de productos')
@section('content_header')
    <div class="d-flex">
        <h1 class="mr-3">Ordenador de productos</h1>
    </div>
@stop
@section('content')
@isset($section1)
    <form action="{{ route('product-shelf.content.updateInfo') }}" class="mb-5" method="post" data-asyn="no" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$section1->id}}">
        <div class="row">
            <div class="col-sm-12 col-md-8">
                <div class="form-group ">
                    <input type="text" name="content_1" value="{{$section1->content_1}}" class="form-control">
                </div>
                <div class="form-group">
                    <textarea name="content_2" class="ckeditor" cols="30" rows="10">{{$section1->content_2}}</textarea>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="form-group">
                    <small>imagen 590x560 px</small>
                    <input type="file" name="image" class="form-control-file">
                </div>
                @if (Storage::disk('custom')->exists($section1->image))
                    <div class="mb-3">
                        <img src="{{ asset($section1->image) }}" class="img-fluid" width="400" height="200">
                    </div>
                @endif
            </div>
        </div>
        <button class="btn btn-primary">Actualizar</button>
    </form>  
@endisset

@isset($section2)
    <form action="{{ route('product-shelf.content.updateInfo') }}" class="mb-5" method="post" data-asyn="no" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$section2->id}}">
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <textarea name="content_1" class="ckeditor" cols="30" rows="10">{{$section2->content_1}}</textarea>
                </div>
            </div>
        </div>
        <button class="btn btn-primary">Actualizar</button>
    </form>  
@endisset
<div class="row mb-5">
    <div class="col-sm-12">
        <h3>Detalles <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-create-element">crear</button></h3>
        <table id="page_table_slider" class="table">
            <thead>
                <tr>
                    <th>Orden</th>
                    <th>Imagen</th>
                    <th>Título</th>
                    <th>Acciones</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
@includeIf('administrator.product-shelf.modals.create')
@includeIf('administrator.product-shelf.modals.update')
@stop
@section('css')
    <meta name="_token" content="{{csrf_token()}}">
    <meta name="url" content="{{route('product-shelf.content')}}">
    <meta name="content_find" content="{{route('content')}}">
    <link rel="stylesheet" href="{{ asset('css/admin/style.css') }}">
@stop

@section('js')
    <script src="{{ asset('/vendor/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('js/axios.js') }}"></script>
    <script src="{{ asset('js/admin/index.js') }}"></script>
    <script src="{{ asset('js/admin/product-shelf/index.js') }}"></script>
@stop

