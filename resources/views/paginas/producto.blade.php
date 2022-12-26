@extends('paginas.partials.app')
@section('content')
@isset($product)
<div aria-label="breadcrumb" class="bg-light py-1 font-size-14">
    <ol class="breadcrumb container">
        <li class="breadcrumb-item">
            <a href="{{ route('index') }}" class="text-decoration-none">Inicio</a>
        </li>
        <li class="breadcrumb-item"><a href="{{ route('categoria', ['id'=> $product->category->id]) }}" class="text-decoration-none">{{$product->category->name}}</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{$product->name}}</li>
    </ol>
</div> 
@endisset
<div class="py-sm-2">
    <div class="container">
        <div class="row">
            <aside class="col-sm-12 col-md-3 d-sm-none d-md-block">
                <ul class="p-0" style="list-style: none;">
                    @foreach ($categories as $c)
                        <li class="py-2 @if($c->id == $product->category->id) active @endif" style="@if($c->id == $product->category->id) background-color: #E9774766; @endif"> 
                            <a href="#" class="toggle d-block p-2 text-decoration-none  text-decoration-none text-blue-dark font-size-14">{{$c->name}}</a>
                            <ul class="mt-3 ps-0 {{ ($c->id == $product->category->id) ? '' : 'rd-none' }}" style="list-style: none">
                                @foreach ($c->products as $cp)
                                    <li class="ps-4 py-2" style="@if($cp->id == $product->id) background-color: #E9774766; @endif">
                                        <a href="{{ route('producto', ['product' => $cp->id]) }}" class="text-blue-dark text-decoration-none font-size-14 d-inline-block" style="@if($cp->id == $product->id) font-weight: bold; @endif">{{$cp->name}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>                        
                    @endforeach
                    @foreach ($directProducts as $directProduct)
                        <li class="py-2">
                            <a href="{{ route('producto', ['product' => $directProduct->id]) }}" class="p-2 text-blue-dark text-decoration-none font-size-14 d-inline-block">{{$directProduct->name}}</a>
                        </li>            
                    @endforeach
                </ul>             
            </aside>
            <section class="producto col-sm-12 col-md-9 font-size-14">
                <div class="row mb-5">
                    <div class="col-sm-12 col-md-6">
                        <div id="carouselProduct" class="carousel slide border border-light border-2 mb-3" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @if (count($product->images))
                                    @foreach ($product->images as $k => $pi)
                                        <div class="carousel-item  @if(!$k) active @endif">
                                            <img src="{{ asset($pi->image) }}" class="d-block w-100 img-fluid" style="object-fit: contain;
                                            min-height: 240px; min-width: 100%; max-width: 100%; max-height: 240px;" alt="{{$product->name}}">
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
                        border-bottom: 1px solid #E97747;
                    ">{{ $product->name }}</h1>   
                        <div class="mb-sm-2 mb-md-5 font-size-15 table-responsive mb-5">
                            <table style="font-weight: 500;">
                                <tr style="height: 30px;">
                                    <td width="170">TIPO:</td>
                                    <td>{{ $product->type }}</td>
                                </tr>
                                <tr style="height: 30px;">
                                    <td>MATERIAL:</td>
                                    <td>{{ $product->material }}</td>
                                </tr>
                                <tr style="height: 30px;">
                                    <td>FORMATO:</td>
                                    <td>{{ $product->format }}</td>
                                </tr>
                                <tr style="height: 30px;">
                                    <td>MEDIDAS:</td>
                                    <td>{{ $product->measures }}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="d-flex justify-content-sm-center justify-content-md-start flex-wrap">
                            @if ($product->extra)
                                <a href="{{ route('ficha-tecnica', ['id'=> $product->id]) }}" class="me-sm-0 me-md-3 mb-sm-3 mb-md-0 px-3 d-flex justify-content-between btn ficha-tecnica rounded-pill font-size-15 align-items-center text-primary" style="box-shadow: 0px 3px 6px #00000029; border: 2px solid #E97747; border-radius: 23px;">ficha técnica</a>  
                            @endif
                            <a href="{{ route('cotizacion') }}" class="btn bg-primary text-white fw-light py-2 px-4 text-uppercase rounded-pill font-size-15" style="box-shadow: 0px 3px 6px #00000029;">Solicitar presupuesto</a>
                        </div>   
                    </div>
                    @if ($product->description)
                        <div class="col-sm-12 mt-md-5 mt-sm-4">
                            <h2 class="mb-4 text-uppercase font-size-25 text-primary col-sm-12 pb-2" style="border-bottom: 1px solid #E97747 !important;">DESCRIPCIÓN</h2>
                            <div class="" style="line-height: 35px;">{!! $product->description !!}</div>
                        </div>                    
                    @endif

                    <div class="col-sm-12 mt-md-5 mt-sm-2">
                        <h2 class="mb-4 text-uppercase font-size-25 text-primary col-sm-12 pb-2" style="border-bottom: 1px solid #E97747 !important;">PRODUCTOS RELACIONADOS</h2>
                        <div class="productos-relacionados">
                            @foreach ($relatedProducts as $rp)
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
@endpush
@push('scripts')
    <script src="{{ asset('js/axios.js') }}"></script>
    <script src="{{ asset('js/pages/product.js') }}"></script>
	<script src="{{ asset('vendor/slick/slick.js') }}"></script>
	<script>
			$('.productos-relacionados').slick({
				infinite: true,
				slidesToShow: 2,
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



