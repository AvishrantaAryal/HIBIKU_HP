@extends('home-master')
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


<!-- page content -->
@section('content')

<div class="container pa-t pa-b">
	<div class="row">

		<div class="col-md-4">
			<center>
				<img src="{{url('/public/images/building-alt.svg')}}" class="img-fluid" alt="..." style="height: 100px; margin-bottom: 10px;">
			</center>
			<h5>Company Introduction</h5>
			<p style="text-align: justify;"> 
				{!!$profile['introduction']!!}
			</p>


		</div>

		<div class="col-md-3"></div>

		

		<div class="col-md-4">
			<center>
				<img src="{{url('/public/images/test.svg')}}" class="img-fluid" alt="..." style="height: 100px; margin-bottom: 10px;">
			</center>
			<h5>CEO Introduction</h5>
			<p style="text-align: justify;">{{$profile['ceo_introduction']}}
			</p>

		</div>
		
		<div class="col-md-4" style="margin-top: 30px;">
			<center>
				<img src="{{url('/public/images/book.svg')}}" class="img-fluid" alt="..." style="height: 100px; margin-bottom: 10px;">
			</center>
			<h5>Business Outline</h5>
			<p style="text-align: justify;">
				{{$profile['outline']}}                        
			</p>

		</div>
		<div class="col-md-4" style="margin-top: 30px;">
			
		</div>
		

		<div class="col-md-3" style="margin-top: 30px;margin-left: 10px; " >
			<center>
				<img src="{{url('/public/images/location-pin.svg')}}" class="img-fluid" alt="..." style="height: 100px; margin-bottom: 10px;">

				<h5> Locatiion</h5>
				<p>{{$profile['location']}}</p>
			</center>
		</div>


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

<div class="container pa-t pa-b">
	<div class="row">

		<div class="col-md-4 ">
			<center>
				<img src="{{url('/public/images/building-alt.svg')}}" class="img-fluid" alt="..." style="height: 100px; margin-bottom: 10px;">
			</center>
			<h5>会社紹介</h5>
			<p style="text-align: justify;"> {!!$profile['introduction_japanese']!!}</p>


		</div>

		<div class="col-md-3"></div>

		

		<div class="col-md-4">
			<center>
				<img src="{{url('/public/images/test.svg')}}" class="img-fluid" alt="..." style="height: 100px; margin-bottom: 10px;">
			</center>
			<h5>CEOの紹介</h5>
			<p style="text-align: justify;">{!!$profile['ceo_introduction_japanese']!!}
			</p>

		</div>
		
		<div class="col-md-4" style="margin-top: 30px;">
			<center>
				<img src="{{url('/public/images/book.svg')}}" class="img-fluid" alt="..." style="height: 100px; margin-bottom: 10px;">
			</center>
			<h5>事業内容</h5>
			<p style="text-align: justify;">
			{!!$profile['outline_japanese']!!}</p>

		</div>
		<div class="col-md-4" style="margin-top: 30px;">
			
		</div>
		

		<div class="col-md-3" style="margin-top: 30px;margin-left: 10px; " >
			<center>
				<img src="{{url('/public/images/location-pin.svg')}}" class="img-fluid" alt="..." style="height: 100px; margin-bottom: 10px;">

				<h5> ロケーション</h5>
				<p>{!!$profile['location_japanese']!!}</p>
			</center>
		</div>


	</div>
</div>



@endif



<!-- page title -->



@endsection