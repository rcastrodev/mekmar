@extends('paginas.partials.app')
@section('content')
@isset($product)
<div aria-label="breadcrumb" class="bg-light py-1 font-size-14">
    <ol class="breadcrumb container">
        <li class="breadcrumb-item">
            <a href="{{ route('index') }}" class="text-decoration-none">Inicio</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">{{$product->name}}</li>
    </ol>
</div> 
@endisset
<div class="py-sm-2 py-md-5">
    <div class="container">
        <div class="row">
            <section class="producto col-sm-12 font-size-14">
                <div class="row mb-5">
                    <div class="col-sm-12 col-md-6">
                        <div id="carouselProduct" class="carousel slide border border-light border-2 mb-3" data-bs-ride="carousel">
                            @if (count($product->images))
                                <div class="carousel-indicators">
                                    @foreach ($product->images as $k => $v)
                                        <button type="button" data-bs-target="#carouselProduct" data-bs-slide-to="{{$k}}" class="@if(!$k) active @endif"  aria-current="true" aria-label="Slide {{$k}}"></button>
                                    @endforeach
                                </div>
                            @endif
                            <div class="carousel-inner">
                                @if (count($product->images))
                                    @foreach ($product->images as $k => $pi)
                                        <div class="carousel-item  @if(!$k) active @endif">
                                            <img src="{{ asset($pi->image) }}" class="d-block w-100 img-fluid" style="object-fit: contain;" alt="{{$product->name}}">
                                        </div>                                    
                                    @endforeach
                                @else 
                                    <div class="carousel-item active">
                                        <img src="{{ asset('images/default.jpg') }}" class="d-block w-100 img-fluid" style="object-fit: contain;
                                    min-width: 100%; max-width: 100%;"> 
                                    </div>                                   
                                @endif
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselProduct" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselProduct" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <h1 class="font-size-25 text-uppercase text-primary fw-bold mb-4 pb-2" style="
                        border-bottom: 1px solid #E97747;">{{ $product->name }}</h1>  
                        <div class="" style="line-height: 35px;">{!! $product->description !!}</div> 
                        <div class="d-flex justify-content-sm-center justify-content-md-start flex-wrap">
                            <a href="{{ route('contacto') }}" class="btn bg-primary text-white fw-light py-2 px-4 text-uppercase rounded-pill font-size-15" style="box-shadow: 0px 3px 6px #00000029;">Consultar</a>
                        </div>   
                    </div>
                    <div class="col-sm-12 mt-md-5 mt-sm-4">
                        <h2 class="mb-4 text-uppercase font-size-25 text-primary col-sm-12 pb-2" style="border-bottom: 1px solid #E97747 !important;">PRODUCTOS RELACIONADOS</h2>
                        <div class="productos-relacionados">
                            @foreach ($products as $rp)
                                @includeIf('paginas.partials.producto', ['p' => $rp])
                            @endforeach
                        </div>
                    </div>
                </div>         
            </section>
        </div>
    </div>
</div>
@endsection
@push('head')
	<link rel="stylesheet" href="{{ asset('vendor/slick/slick.css') }}">
	<link rel="stylesheet" href="{{ asset('vendor/slick/slick-theme.css') }}">
    <style>
        #carouselProduct .carousel-indicators [data-bs-target]{
            background-color: gray;
        }
        .carousel-indicators .active {
            background-color: #E97747 !important;
        }
    </style>
@endpush
@push('scripts')
    <script src="{{ asset('js/axios.js') }}"></script>
    <script src="{{ asset('js/pages/product.js') }}"></script>
	<script src="{{ asset('vendor/slick/slick.js') }}"></script>
	<script>
			$('.productos-relacionados').slick({
				infinite: true,
				slidesToShow: 3,
				slidesToScroll: 1,
				autoplay: true,
  				autoplaySpeed: 2000,
                  responsive: [
					{
					breakpoint: 1024,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 3,
						infinite: true,
						dots: true
					}
					},
					{
					breakpoint: 600,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 2
					}
					},
					{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
					}
				]
			});
	</script>
@endpush



