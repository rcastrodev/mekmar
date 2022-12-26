@extends('paginas.partials.app')
@section('content')
@isset($section1s)
	@if (count($section1s))
		<div id="sliderHero" class="carousel slide position-relative" data-bs-ride="carousel">
			<div class="carousel-indicators">
				@foreach ($section1s as $k => $v)
					<button type="button" data-bs-target="#sliderHero" data-bs-slide-to="{{$k}}" class="@if(!$k) active @endif"  aria-current="true" aria-label="Slide {{$k}}"></button>
				@endforeach
			</div>
			<div class="carousel-inner">
				@foreach ($section1s as $k => $v)
					<div class="carousel-item @if(!$k) active @endif">
						<img src="{{ asset($v->image) }}" class="d-block w-100">
						<div class="carousel-caption d-none d-md-block text-start text-uppercase">
							<h2 class="text-primary font-size-30" style="font-weight: 700 !important;">{{$v->content_1}}</h2>
							<div class="text-dark font-size-25" style="font-weight: 500 !important;">{!!$v->content_2!!}</div>
						</div>
					</div>
				@endforeach
			</div>
			@if (Storage::disk('custom')->url($section2))
				<img src="{{ asset($section2->image) }}" class="img-fluid d-sm-none d-md-block" style="max-width: 123px; max-height: 123px;
				min-height: 123px; min-width: 123px; position: absolute; right: 40px; bottom: -53px;">
			@endif
		</div>		
	@endif
@endisset
@isset($section2)
	<section class="container py-md-5 py-sm-2 ul-ordenador-produccion font-size-11">{!!$section2->content_1!!}</section>
@endisset
@isset($section3s)
	@if (count($section3s))
	<section class="py-md-5 py-sm-2">
		<div class="container row mx-auto">
			<h2 class="mb-5 text-uppercase font-size-25 text-primary col-sm-12 pb-2" style="border-bottom: 1px solid #E97747 !important;">Detalles</h2>
			<div class="row">
				@foreach ($section3s as $c)
					<div class="col-sm-12 col-md-3 mb-2">
						<div class="card producto">
							<div class="position-relative">  
								@if ($c->image)
									<img src="{{ asset($c->image) }}" class="img-fluid img-product">
								@else
									<img src="{{ asset('images/default.jpg') }}" class="img-fluid img-product">
								@endif
							</div>
						</div>
					</div>
				@endforeach
			</div>

		</div>
	</section>
	@endif
@endisset
@isset($products)
	@if (count($products))
		<div class="container mt-md-5 mt-sm-2 mb-5">
			<h2 class="mb-4 text-uppercase font-size-25 text-primary pb-2" style="border-bottom: 1px solid #E97747 !important;">PRODUCTOS RELACIONADOS</h2>
			<div class="productos-relacionados">
				@foreach ($products as $rp)
					@includeIf('paginas.partials.producto', ['p' => $rp])
				@endforeach
			</div>
		</div>
	@endif
@endisset
@endsection
@push('head')
	<link rel="stylesheet" href="{{ asset('vendor/slick/slick.css') }}">
	<link rel="stylesheet" href="{{ asset('vendor/slick/slick-theme.css') }}">
	<style>
		.card.producto{
			max-height: 220px !important;
    		min-height: 220px !important;
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