@extends('home-master')

<!-- page title -->
@if(App::isLocale('en'))
@section('page-title')	
{{$blog['seo_title']}}
@endsection

@section('seo_description')
	{{$blog['seo_description']}}
@endsection

@section('seo_keyword')
		{{$blog['seo_keywords']}}
@endsection
@elseif(App::isLocale('jp'))
@section('page-title')	
{{$blog['seo_title_japanese']}}
@endsection

@section('seo_description')
	{{$blog['seo_description_japanese']}}
@endsection

@section('seo_keyword')
		{{$blog['seo_keywords_japanese']}}
@endsection
@endif

<!-- page content -->
@section('content')

<div class="container pa-t pa-b">
	<div class="blog-dynamic-title">
		@if(App::isLocale('en'))
		<h2>{{$blog['title']}}</h2>
		@elseif(App::isLocale('jp'))
		<h2>{{$blog['title_japanese']}}</h2>
		@endif
	</div>

	<div class="blog-dynamic-content-card">
		<div class="blog-dynamic-content-image">
			<img src="{{url('uploads/'.$blog['image'])}}" alt="{{$blog['altimage']}}" class="img-fluid">
		</div>
		@if(App::isLocale('en'))
		<p>{!!$blog['description']!!}</p>
		@elseif(App::isLocale('jp'))
		<p>{!!$blog['description_japanese']!!}</p>
		@endif
		
	</div>
</div>


@endsection