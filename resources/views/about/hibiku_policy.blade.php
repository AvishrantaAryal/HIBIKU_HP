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
<div class="container pa-b">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8 card">
			<div class="home-about-text">
				@if(App::isLocale('en'))
				<h3 style="text-align:center;">HIBIKU`S Three Policies </h3>
				<p>{!!$about['hibikus_policy']!!}</p>
				@elseif(App::isLocale('jp'))
				<h3 style="text-align:center">ヒビクの３つのポリシー</h3>
				<p>{!!$about['hibikus_policy_japanese']!!}</p>

				@endif




			</div>
		</div>
		<div class="col-md-2"></div>

	</div>
</div>

@endsection