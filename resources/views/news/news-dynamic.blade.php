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
		
		<p>{{ \Carbon\Carbon::parse($blog['created_at'])->format('j F, Y') }}</p>
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

@if(App::isLocale('en'))

<div class="container pa-b blog-list-title">
	<h2>Read another news</h2>


	<div class="row">
		@foreach($blo as $blos)
		<div class="col-md-4">
			<a href="{{url('news-details/'.$blos['slug'])}}">
				<div class="blog-list-card">
					<div class="blog-list-image">
						<img src="{{url('uploads/'.$blos['image'])}}" class="img-fluid" alt="{{$blo['altimage']}}">
					</div>
					<div class="blog-list-text">
						{{ \Carbon\Carbon::parse($blos['created_at'])->format('j F, Y') }}</p>
						<h4>{{$blos['title']}}</h4>
					</div>
				</div>
			</a>
		</div>
		@endforeach

		
		
	</div>
</div>
@elseif(App::isLocale('jp'))

<div class="container pa-b blog-list-title">
	<h2>別のニュースを読む</h2>


	<div class="row">
		@foreach($blo as $blos)
		<div class="col-md-4">
			<a href="{{url('news-details/'.$blos['slug'])}}">
				<div class="blog-list-card">
					<div class="blog-list-image">
						<img src="{{url('uploads/'.$blos['image'])}}" class="img-fluid" alt="{{$blos['altimage']}}">
					</div>
					<div class="blog-list-text">
						{{ \Carbon\Carbon::parse($blos['created_at'])->format('j F, Y') }}</p>
						<h4>{{$blos['title_japanese']}}</h4>
					</div>
				</div>
			</a>
		</div>
		@endforeach

		
		
	</div>
</div>
@endif


@endsection