@extends('home-master')

<!-- page title -->
@section('page-title')	
HIBIKUS Images
@endsection


<!-- page content -->
@section('content')

<div class="container pa-t pa-b gallery-card-title">
	@if(App::isLocale('en'))
	<h1>{{$gallery['name']}}</h1>
	@elseif(App::isLocale('jp'))
	<h1>{{$gallery['name_japanese']}}</h1>
	@endif
	<div class="row">
		<div class="row">
			@foreach($images as $im)

			<div class="col-lg-3 col-md-4 col-xs-6">
				<div class="gallery-card-image">
					<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="{{url('/imageupload/'.$im['image'])}}" data-target="#image-gallery{{$im['id']}}">
						<img class="img-thumbnail"
						src="{{url('/uploads/images/'.$im['image'])}}"
						alt="Sample Image">
					</a>
				</div>
			</div>
			@endforeach

			

			@foreach($images as $im)
			<div class="modal fade" id="image-gallery{{$im['id']}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" id="image-gallery-title"></h4>
							<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
							</button>
						</div>
						<div class="modal-body">
							<img id="image-gallery-image" class="img-responsive col-md-12" src="{{url('/uploads/images/'.$im['image'])}}">
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>

	@endsection