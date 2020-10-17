@if(App::isLocale('en'))
@extends('home-master')

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
<div class="container-fluid ma-b pa-0">
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner home-carousel-card">
			<div class="carousel-item home-carousel-image active">
				<img src="{{url('uploads/'.$getonecarosels['image'])}}" class="d-block w-100" alt="{{$getonecarosels['altimage']}}">
				<div class="carousel-caption d-none d-md-block">
					@if(App::isLocale('en'))
					<h1 style="color: #ffff;">For Japan, For Asia country </h1>
					@elseif(App::isLocale('jp'))
					<h1 style="color: #ffff;">日本とアジアのために </h1>
					@endif
				</div>
			</div>
			
			@foreach($getcarosels as $car)	
			<div class="carousel-item home-carousel-image">
				<img src="{{url('uploads/'.$car['image'])}}" class="d-block w-100" alt="$car['altimage']">
				<div class="carousel-caption d-none d-md-block">
					
					@if(App::isLocale('en'))
					<h1 style="color: #ffff;">For Japan, For Asia country </h1>
					@elseif(App::isLocale('jp'))
					<h1 style="color: #ffff;">日本とアジアのために </h1>
					@endif
				</div>
			</div>
			@endforeach

			
			
			
		</div>
		<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>






<div class="container pa-b home-blog-post-title">
	@if(App::isLocale('en'))
	<h2 style="text-align: center;">Latest News</h2>
	@elseif(App::isLocale('jp'))
	<h2>最新ニュース</h2>
	@endif
	
	<div class="row">
		@foreach($news as $new)
		<div class="col-md-4 card" style="margin-left: 2px;">
			<a href="{{url('news-details/'.$new['slug'])}}">
				<div class="home-blog-post-card">

					<div class="home-blog-post-image">
						<img src="{{url('uploads/'.$new['image'])}}" class="img-fluid" alt="{{$new['altimage']}}">
					</div>
					<div class="home-blog-post-text">
						<p>{{\Carbon\Carbon::parse($new->created_at)->format('d-m-Y')}}</p>

						@if(App::isLocale('en'))
						<h4>{{$new['title']}}</h4>
						<P style="text-align: justify;">
							{{ \Illuminate\Support\Str::limit($new['summary'], 150, $end='......') }}

						</P>
						@elseif(App::isLocale('jp'))
						<h4>{{$new['title_japanese']}}</h4>
						<P style="text-align: justify;">
							{{ \Illuminate\Support\Str::limit($new['summary_japanese'], 150, $end='......') }}

						</P>

						@endif


					</div>
				</div>
			</a>
		</div>
		@endforeach


	</div>
	<div class="new-default-btn home-blog-post-btn">
		<a href="{{url('news')}}">
			@if(App::isLocale('en'))
			<p>View News</p>
			@elseif(App::isLocale('jp'))
			<p>ニュースを見る</p>
			@endif

		</a>
	</div>
</div>








@endsection