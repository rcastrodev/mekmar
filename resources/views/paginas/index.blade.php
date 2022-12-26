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
						<div class="carousel-caption d-none d-md-block text-start">
							<h2 class="font-size-34 text-primary">{{ $v->content_1 }}</h2>
							<h3 class="text-dark font-size-28">{{ $v->content_2 }}</h3>
							<div class="font-size-34 text-primary" style="font-weight: 500;">{!! $v->content_3 !!}</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>		
	@endif
@endisset
@isset($section2)
	<section class="bg-light">
		<div class="container text-center py-md-5 py-sm-2 font-size-30 fw-light">{{$section2->content_1}}</div>
	</section>
@endisset
@isset($categories)
	@if (count($categories))
	<section class="py-md-5 py-sm-3">
		<div class="container row mx-auto">
			<h2 class="mb-5 text-uppercase font-size-25 text-primary col-sm-12 pb-2" style="border-bottom: 1px solid #E97747 !important;">NUESTROS PRODUCTOS DESTACADOS</h2>
			@foreach ($categories as $c)
				<div class="col-sm-12 col-md-4 mb-md-5 mb-sm-3">
					@includeIf('paginas.partials.categoria', ['c' => $c])
				</div>
			@endforeach
		</div>
	</section>
	@endif
@endisset
@isset($section3)
	<section class="mb-2" style="background-image: url({{ asset($section3->image) }}); min-height: 275px;">
		<div class="container d-flex justify-content-center flex-column" style="min-height: 275px; line-height: 45px;">
			<div class="text-white font-size-25 mb-4" style="font-weight: 500; max-width: 500px;">{!! $section3->content_1 !!}</div>
			<div class="">
				<a href="{{ route('categorias') }}" class="text-uppercase text-white text-decoration-none" style="border-radius: 4px; border: 3px solid white; padding: 10px 20px; font-weight: 600; font-size: 14px;">VER PRODUCTOS</a>
			</div>
		</div>
	</section>
@endisset
@endsection