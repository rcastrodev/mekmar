@extends('paginas.partials.app')
@section('content')
<div aria-label="breadcrumb" class="bg-light py-1 font-size-14">
	<div class="container">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{ route('index') }}" class="text-decoration-none">Inicio</a></li>
			<li class="breadcrumb-item active" aria-current="page">Nosotros</li>
		</ol>
	</div>
</div>
@isset ($section1)
	<div class="py-3">
		<div class="container">
			<div class="row font-size-15 fw-light" style="color: #707070;">
				@if (Storage::disk('custom')->url($section1->image))
					<div class="col-sm-12 col-md-6 order-sm-2 order-md-1">
						<img src="{{ asset($section1->image) }}" class="img-fluid">
					</div>
				@endif
				<div class="col-sm-12 col-md-6 text-blue-dark order-sm-1 order-md-2">
					<h2 class="pb-2 mb-4 font-size-25 text-primary" style="border-bottom: 1px solid #E97747 !important;">{{$section1->content_1}}</h2>
					<div class="font-size-13" style="font-weight: 400; line-height: 35px;">
						{!! $section1->content_2 !!}
					</div>
				</div>
			</div>
		</div>
	</div>	
@endisset
@isset($section2)
	<section class="bg-light">
		<div class="container text-center py-md-5 py-sm-3  fw-light">
			<h3 class="mb-3 mx-auto font-size-30" style="max-width: 630px;">{{$section2->content_1}}</h3>
			<div class="mx-auto font-size-16" style="max-width: 960px; font-weight: 500; line-height: 35px;">{!!$section2->content_2!!}</div>
		</div>
	</section>
@endisset
@isset ($section3)
	<div class="py-md-5 py-sm-3">
		<div class="container">
			<div class="row font-size-15 fw-light" style="color: #707070;">
				<div class="col-sm-12 col-md-6 text-blue-dark order-sm-1 order-md-2">
					<h2 class="pb-2 mb-4 font-size-25 text-primary" style="border-bottom: 1px solid #E97747 !important;">{{$section3->content_1}}</h2>
					<div class="font-size-13 ul-empresa" style="font-weight: 400; line-height: 35px;">{!! $section3->content_2 !!}</div>
				</div>
				@if (Storage::disk('custom')->url($section3->image))
					<div class="col-sm-12 col-md-6 order-sm-2 order-md-1">
						<img src="{{ asset($section3->image) }}" class="img-fluid">
					</div>
				@endif
			</div>
		</div>
	</div>	
@endisset
@isset($section4s)
	@if (count($section4s))
	<section class="py-md-5 py-sm-3">
		<div class="container row mx-auto">
			<h2 class="mb-5 text-uppercase font-size-25 text-primary col-sm-12 pb-2 pb-3" style="border-bottom: 1px solid #E97747 !important;">APLICACIONES</h2>
			<div class="carrusel">
				@foreach ($section4s as $c)
					<div class="card producto">
						<div class="position-relative">  
							@if ($c->image)
								<img src="{{ asset($c->image) }}" class="img-fluid img-product">
							@else
								<img src="{{ asset('images/default.jpg') }}" class="img-fluid img-product">
							@endif
						</div>
						<div class="card-body">
							<p class="card-text mb-0 fw-bold ps-2 font-size-16 text-dark text-center">{{ Str::limit($c->content_1, 40) }}</p>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</section>
	@endif
@endisset
@endsection
@push('head')
	<link rel="stylesheet" href="{{ asset('vendor/slick/slick.css') }}">
	<link rel="stylesheet" href="{{ asset('vendor/slick/slick-theme.css') }}">
@endpush

@push('scripts')
	<script src="{{ asset('vendor/slick/slick.js') }}"></script>
	<script>
			$('.carrusel').slick({
				infinite: true,
				slidesToShow: 3,
				slidesToScroll: 2,
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
