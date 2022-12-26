@extends('adminlte::page')
@section('title', 'Contenido home')
@section('content_header')
    <div class="d-flex">
        <h1 class="mr-3">Contenido del home</h1>
        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-create-element">crear Slider</button>
    </div>
@stop
@section('content')
    <div class="row mb-5">
        <div class="col-sm-12">
            <h3>Sliders</h3>
            <table id="page_table_slider" class="table">
                <thead>
                    <tr>
                        <th>Orden</th>
                        <th>Imagen</th>
                        <th>Contenido</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

    @isset($section2)
        <form action="{{ route('home.update-info') }}" class="mb-5" method="post">
            <input type="hidden" name="id" value="{{$section2->id}}">
            <div class="form-group">
                <input type="text" name="content_1" value="{{$section2->content_1}}" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    @endisset

    @isset($section3)
        <form action="{{ route('home.update-info') }}" class="mb-5" method="post" enctype="multipart/form-data" data-asyn="no">
            @csrf
            <input type="hidden" name="id" value="{{$section3->id}}">
            <div class="form-group">
                <input type="text" name="content_1" value="{{$section3->content_1}}" class="form-control">
            </div>
            <div class="form-group">
                <input type="file" name="image" class="form-control-file">
                <small>Tamaño recomendado 1366x283px</small>
            </div> 
            <div class="">
                @if (Storage::disk('custom')->exists($section3->image))
                  <img src="{{ asset($section3->image) }}" class="img-fluid">  
                @endif
            </div>   
            <div class="py-4">
                <button class="btn btn-primary">Actualizar</button>
            </div>
        </form>
    @endisset

@includeIf('administrator.home.modals.create')
@includeIf('administrator.home.modals.update')
@stop
@section('css')
    <meta name="_token" content="{{csrf_token()}}">
    <meta name="url" content="{{route('home.content')}}">
    <meta name="content_find" content="{{route('content')}}">
    <link rel="stylesheet" href="{{ asset('css/admin/style.css') }}">
@stop

@section('js')
    <script src="{{ asset('js/axios.js') }}"></script>
    <script src="{{ asset('js/admin/index.js') }}"></script>
    <script src="{{ asset('js/admin/home/index.js') }}"></script>
    <script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
@stop

