@extends('home-master')

@if(App::isLocale('en'))
<!-- page title -->
@section('page-title')	
@endsection

@section('seo_description')	
@endsection

@section('seo_keyword')	
@endsection


<!-- page content -->
@section('content')

<div class="container pa-t pa-b blog-list-title">
	<h2>Read our Service</h2>

	<div class="row">
		
		@foreach($service as $new)
		<div class="col-md-6">
			<a href="{{url('service-details/'.$new['slug'])}}">
				<div class="blog-list-card">
					
					<div class="blog-list-text">
						

						<h4>{{$new['title']}}</h4>
						<p style="text-align: justify;">	{{$new['summary']}}</p>
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
	<h2>私たちのサービスを読む</h2>


	<div class="row">
		
		@foreach($service as $new)
		<div class="col-md-6">
			<a href="{{url('news-details/'.$new['slug'])}}">
				<div class="blog-list-card">
					
					<div class="blog-list-text">


						<h4>{{$new['title_japanese']}}</h4>
						<p style="text-align: justify;">	{{$new['summary_japanese'] }}</p>
					</div>
				</div>
			</a>
		</div>
		@endforeach

		

	</div>
</div>


@endif
@endsection