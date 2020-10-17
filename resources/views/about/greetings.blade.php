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
		<div class="col-md-4"></div>
		<div class="col-md-4 card">
			<div class="home-about-text">
				@if(App::isLocale('en'))
				<h2 style="text-align: center;">Greetings</h2>
				<p>{{$about['greetings']}}</p>
				<p style="float: right;">----President  Shinichiro Yamano</p>
				@elseif(App::isLocale('jp'))
				<h2>ご挨拶</h2>
				<p>{{$about['greetings_japanese']}}</p>
				<p style="float: right;">---代表取締役　山野　新一郎</p>
				@endif


			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>

@endsection