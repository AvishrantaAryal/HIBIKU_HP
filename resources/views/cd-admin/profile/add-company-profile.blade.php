@extends('cd-admin.home-master')

@section('page-title')  
Add Company Profile
@endsection

@section('content')

@if(App::isLocale('en'))
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Add Company Profile
		</h1>


		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Company Profile</a></li>
			<li class="active">Add Company Profile</li>
		</ol>
	</section>

	<section class="content">
		<div class="row">

			<div class="col-md-12">
				<!-- Horizontal Form -->
				<div class="box box-info">
					<div class="box-header with-border">
						<h3 class="box-title">Company Profile Form</h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->
					<form class="form-horizontal" method="post" action= "{{url('store-profile')}}" enctype="multipart/form-data">
						{{csrf_field()}}
						<div class="box-body">
							<div class="form-group">
								<label for="image" class="col-sm-3 control-label">Image<span style="color: red;">*</span></label>
								<div class="text text-danger">{{$errors->first('image')}}</div>
								<div class="col-sm-9">
									<input type="file" class="form-control"  id="image" name="image" value="{{old('image')}}">
								</div>
							</div>
							<div class="form-group">
								<label for="altimage" class="col-sm-3 control-label">Image Description<span style="color: red;">*</span></label>
								<div class="text text-danger">{{$errors->first('altimage')}}</div>

								<div class="col-sm-9">
									<input type="text" class="form-control" name="altimage" id="altimage" value="{{old('altimage')}}" >
								</div>
							</div>

							<div class="form-group">
								<label for="Summary" class="col-sm-3 control-label">Company Introduction In English<span style="color: red;">*</span></label>
								<div class="text text-danger">{{$errors->first('introduction')}}</div>
								<div class="col-sm-9">
									<textarea class="form-control" rows="5" name="introduction"  >
										{{old('introduction')}}
									</textarea>
								</div>
							</div>

							<div class="form-group">
								<label for="Summary" class="col-sm-3 control-label">Company Introduction In Japanese<span style="color: red;">*</span></label>
								<div class="text text-danger">{{$errors->first('introduction_japanese')}}</div>
								<div class="col-sm-9">
									<textarea class="form-control" rows="5" name="introduction_japanese"  >
										{{old('introduction_japanese')}}
									</textarea>
								</div>
							</div>

							<div class="form-group">
								<label for="Summary" class="col-sm-3 control-label">CEO Introduction In English<span style="color: red;">*</span></label>
								<div class="text text-danger">{{$errors->first('ceo_introduction')}}</div>
								<div class="col-sm-9">
									<textarea class="form-control" rows="5" name="ceo_introduction"  >
										{{old('ceo_introduction')}}
									</textarea>
								</div>
							</div>

							<div class="form-group">
								<label for="Summary" class="col-sm-3 control-label">CEO Introduction In Japanese<span style="color: red;">*</span></label>
								<div class="text text-danger">{{$errors->first('ceo_introduction_japanese')}}</div>
								<div class="col-sm-9">
									<textarea class="form-control" rows="5" name="ceo_introduction_japanese"  >
										{{old('ceo_introduction_japanese')}}
									</textarea>
								</div>
							</div>

							<div class="form-group">
								<label for="Summary" class="col-sm-3 control-label">Business Outline In English<span style="color: red;">*</span></label>
								<div class="text text-danger">{{$errors->first('outline')}}</div>
								<div class="col-sm-9">
									<textarea class="form-control" rows="5" name="outline"  >
										{{old('outline')}}
									</textarea>
								</div>
							</div>

							<div class="form-group">
								<label for="Summary" class="col-sm-3 control-label">Business Outline In Japanese<span style="color: red;">*</span></label>
								<div class="text text-danger">{{$errors->first('outline_japanese')}}</div>
								<div class="col-sm-9">
									<textarea class="form-control" rows="5" name="outline_japanese"  >
										{{old('outline_japanese')}}
									</textarea>
								</div>
							</div>

							<div class="form-group">
								<label for="Summary" class="col-sm-3 control-label">Company Location In English<span style="color: red;">*</span></label>
								<div class="text text-danger">{{$errors->first('location')}}</div>
								<div class="col-sm-9">
									<textarea class="form-control" rows="5" name="location"  >
										{{old('location')}}
									</textarea>
								</div>
							</div>

							<div class="form-group">
								<label for="Summary" class="col-sm-3 control-label">Company Location In Japanese<span style="color: red;">*</span></label>
								<div class="text text-danger">{{$errors->first('location_japanese')}}</div>
								<div class="col-sm-9">
									<textarea class="form-control" rows="5" name="location_japanese"  >
										{{old('location_japanese')}}
									</textarea>
								</div>
							</div>





							
							
						</div>
						<!-- /.box-body -->
						<div class="box-footer">
							<a href="{{URL()->Previous()}}" class="btn btn-danger">Cancel</a>
							<button type="submit" class="btn btn-success pull-right">Add Company Profile</button>
						</div>
						<!-- /.box-footer -->
					</form>
				</div>
				<!-- /.box -->
				<!-- general form elements disabled -->

				<!-- /.box -->
			</div>


		</div>
	</section>


</div>
@elseif(App::isLocale('jp'))
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			追加について
		</h1>
		
		
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> ホーム</a></li>
			<li><a href="#">約</a></li>
			<li class="active">追加について</li>
		</ol>
	</section>

	<section class="content">
		<div class="row">
			
			<div class="col-md-12">
				<!-- Horizontal Form -->
				<div class="box box-info">
					<div class="box-header with-border">
						<h3 class="box-title">フォームについて</h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->
					<form class="form-horizontal" method="post" action= "{{url('store-profile')}}" enctype="multipart/form-data">
						{{csrf_field()}}
						<div class="box-body">
							<div class="form-group">
								<label for="image" class="col-sm-3 control-label">画像<span style="color: red;">*</span></label>
								<div class="text text-danger">{{$errors->first('image')}}</div>
								<div class="col-sm-9">
									<input type="file" class="form-control"  id="image" name="image" value="{{old('image')}}">
								</div>
							</div>
							<div class="form-group">
								<label for="altimage" class="col-sm-3 control-label">画像の説明<span style="color: red;">*</span></label>
								<div class="text text-danger">{{$errors->first('altimage')}}</div>

								<div class="col-sm-9">
									<input type="text" class="form-control" name="altimage" id="altimage" value="{{old('altimage')}}" >
								</div>
							</div>

							<div class="form-group">
								<label for="Summary" class="col-sm-3 control-label">会社紹介英語<span style="color: red;">*</span></label>
								<div class="text text-danger">{{$errors->first('introduction')}}</div>
								<div class="col-sm-9">
									<textarea class="form-control" rows="5" name="introduction"  >
										{{old('introduction')}}
									</textarea>
								</div>
							</div>

							<div class="form-group">
								<label for="Summary" class="col-sm-3 control-label">会社紹介<span style="color: red;">*</span></label>
								<div class="text text-danger">{{$errors->first('introduction_japanese')}}</div>
								<div class="col-sm-9">
									<textarea class="form-control" rows="5" name="introduction_japanese"  >
										{{old('introduction_japanese')}}
									</textarea>
								</div>
							</div>

							<div class="form-group">
								<label for="Summary" class="col-sm-3 control-label">CEOの紹介（英語）<span style="color: red;">*</span></label>
								<div class="text text-danger">{{$errors->first('ceo_introduction')}}</div>
								<div class="col-sm-9">
									<textarea class="form-control" rows="5" name="ceo_introduction"  >
										{{old('ceo_introduction')}}
									</textarea>
								</div>
							</div>

							<div class="form-group">
								<label for="Summary" class="col-sm-3 control-label">CEOの紹介<span style="color: red;">*</span></label>
								<div class="text text-danger">{{$errors->first('ceo_introduction_japanese')}}</div>
								<div class="col-sm-9">
									<textarea class="form-control" rows="5" name="ceo_introduction_japanese"  >
										{{old('ceo_introduction_japanese')}}
									</textarea>
								</div>
							</div>

							<div class="form-group">
								<label for="Summary" class="col-sm-3 control-label">英語での事業概要<span style="color: red;">*</span></label>
								<div class="text text-danger">{{$errors->first('outline')}}</div>
								<div class="col-sm-9">
									<textarea class="form-control" rows="5" name="outline"  >
										{{old('outline')}}
									</textarea>
								</div>
							</div>

							<div class="form-group">
								<label for="Summary" class="col-sm-3 control-label">日本語での事業概要<span style="color: red;">*</span></label>
								<div class="text text-danger">{{$errors->first('outline_japanese')}}</div>
								<div class="col-sm-9">
									<textarea class="form-control" rows="5" name="outline_japanese"  >
										{{old('outline_japanese')}}
									</textarea>
								</div>
							</div>

							<div class="form-group">
								<label for="Summary" class="col-sm-3 control-label">英語での会社の所在地<span style="color: red;">*</span></label>
								<div class="text text-danger">{{$errors->first('location')}}</div>
								<div class="col-sm-9">
									<textarea class="form-control" rows="5" name="location"  >
										{{old('location')}}
									</textarea>
								</div>
							</div>

							<div class="form-group">
								<label for="Summary" class="col-sm-3 control-label">日本語の会社所在地<span style="color: red;">*</span></label>
								<div class="text text-danger">{{$errors->first('location_japanese')}}</div>
								<div class="col-sm-9">
									<textarea class="form-control" rows="5" name="location_japanese"  >
										{{old('location_japanese')}}
									</textarea>
								</div>
							</div>
							
						</div>
						<!-- /.box-body -->
						<div class="box-footer">
							<a href="{{URL()->Previous()}}" class="btn btn-danger">キャンセル</a>
							<button type="submit" class="btn btn-success pull-right">追加について</button>
						</div>
						<!-- /.box-footer -->
					</form>
				</div>
				<!-- /.box -->
				<!-- general form elements disabled -->
				
				<!-- /.box -->
			</div>
			
			
		</div>
	</section>


</div>
@endif


@endsection