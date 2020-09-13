@extends('home-master')

@if(App::isLocale('en'))
<!-- page title -->
@section('page-title')	
{{$seo['title']}}
@endsection

@section('seo_description')
	{{$seo['description']}}
@endsection

@section('seo_keyword')
		{{$seo['keywords']}}
@endsection


<!-- page content -->
@section('content')

<div class="container pa-t pa-b blog-list-title">
	<h2>Read our News</h2>

	<div class="row">
		
		@foreach($news as $new)
		<div class="col-md-4">
			<a href="{{url('news-details/'.$new['slug'])}}">
				<div class="blog-list-card">
					<div class="blog-list-image">
						<img src="{{url('uploads/'.$new['image'])}}" class="img-fluid" alt="{{$new['altimage']}}">
					</div>
					<div class="blog-list-text">
						<p>{{\Carbon\Carbon::parse($new->created_at)->format('d-m-Y')}}</p>

						<h4>{{$new['title']}}</h4>
						<p style="text-align: justify;">	{{ \Illuminate\Support\Str::limit($new['summary'], 150, $end='......') }}</p>
					</div>
				</div>
			</a>
		</div>
		@endforeach

		

	</div>
</div>

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

<!-- page content -->
@section('content')

<div class="container pa-t pa-b blog-list-title">
	<h2>ニュースを読む</h2>


	<div class="row">
		
		@foreach($news as $new)
		<div class="col-md-4">
			<a href="{{url('news-details/'.$new['slug'])}}">
				<div class="blog-list-card">
					<div class="blog-list-image">
						<img src="{{url('uploads/'.$new['image'])}}" class="img-fluid" alt="{{$new['altimage']}}">
					</div>
					<div class="blog-list-text">
						<p>{{\Carbon\Carbon::parse($new->created_at)->format('d-m-Y')}}</p>

						<h4>{{$new['title_japanese']}}</h4>
						<p style="text-align: justify;">	{{ \Illuminate\Support\Str::limit($new['summary_japanese'], 150, $end='......') }}</p>
					</div>
				</div>
			</a>
		</div>
		@endforeach

		

	</div>
</div>


@endif
@endsection