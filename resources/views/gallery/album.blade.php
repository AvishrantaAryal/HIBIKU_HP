@extends('home-master')

<!-- page title -->
@if(App::isLocale('en'))
@section('page-title')	
{{$seo['title']}}
@endsection

@section('seo_description')
	{{$seo['description']}}
@endsection

@section('seo_keyword')
		{{$seo['keywords']}}
@endsection
@elseif(App::isLocale('jp'))
@section('page-title')	
{{$seo['title_japanese']}}
@endsection

@section('seo_description')
	{{$seo['description_japanese']}}
@endsection

@section('seo_keyword')
		{{$seo['keywords_japanese']}}
@endsection
@endif



<!-- page content -->
@section('content')

<div class="container pa-t pa-b album-card-title">
	@if(App::isLocale('en'))
	<h1>Our Album</h1>
	@elseif(App::isLocale('jp'))
	<h1>私たちのアルバム</h1>
	@endif

	<div class="row">
		@foreach($gallery as $gal)
		<div class="col-md-4">
			<a href="{{url('/gallery/'.$gal['slug'])}}">
			
				<div class="album-card">
					<div class="album-card-image">
							<img src="{{url('uploads/'.$gal['image'])}}" class="d-block w-100" alt="{{$gal['altimage']}}">
					</div>
					@if(App::isLocale('en'))
					<h5>{{$gal['name']}}</h5>
					@elseif(App::isLocale('jp'))
					<h5>{{$gal['name_japanese']}}</h5>
					@endif
					<span class="album-span-border"></span>
				</div>
			</a>
		</div>
		@endforeach
		

	</div>
</div>

@endsection