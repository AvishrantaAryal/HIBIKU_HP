@extends('cd-admin.home-master')

@section('page-title')  
Edit Company Profile
@endsection

@section('content')


@if(App::isLocale('en'))
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Edit Company Profile
		</h1>


		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Company Profile</a></li>
			<li class="active">Edit Company Profile</li>
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
					<form class="form-horizontal" method="post" action= "{{url('update-profile')}}" enctype="multipart/form-data">
						{{csrf_field()}}
						<div class="box-body">
							<div class="form-group">
								<label for="image" class="col-sm-2 control-label">Image<span style="color: red;">*</span></label>
								<div class="text text-danger">{{$errors->first('image')}}</div>
								<div class="col-sm-10">
									<input type="file" class="form-control"  id="image" name="image" value="{{$profile['image']}}">
								</div>
							</div>
							<div class="form-group">
								<label for="altimage" class="col-sm-2 control-label">Image Description<span style="color: red;">*</span></label>
								<div class="text text-danger">{{$errors->first('altimage')}}</div>

								<div class="col-sm-10">
									<input type="text" class="form-control"required="" name="altimage" id="altimage" value="{{$profile['altimage']}}" >
								</div>
							</div>

							<div class="form-group">
								<label for="Summary" class="col-sm-2 control-label">Company Introduction In English<span style="color: red;">*</span></label>
								<div class="text text-danger">{{$errors->first('introduction')}}</div>
								<div class="col-sm-10">
									<textarea class="form-control" rows="8" name="introduction" required="" >
										{{$profile['introduction']}}
									</textarea>
								</div>
							</div>

							<div class="form-group">
								<label for="Summary" class="col-sm-2 control-label">Company Introduction In Japanese<span style="color: red;">*</span></label>
								<div class="text text-danger">{{$errors->first('introduction_japanese')}}</div>
								<div class="col-sm-10">
									<textarea class="form-control" rows="8"  name="introduction_japanese" required="" >
										{{$profile['introduction_japanese']}}
									</textarea>
								</div>
							</div>

							<div class="form-group">
								<label for="Summary" class="col-sm-2 control-label">CEO Introduction In English<span style="color: red;">*</span></label>
								<div class="text text-danger">{{$errors->first('ceo_introduction')}}</div>
								<div class="col-sm-10">
									<textarea class="form-control" rows="8" name="ceo_introduction" required="" >
										{{$profile['ceo_introduction']}}
									</textarea>
								</div>
							</div>

							<div class="form-group">
								<label for="Summary" class="col-sm-2 control-label">CEO Introduction In Japanese<span style="color: red;">*</span></label>
								<div class="text text-danger">{{$errors->first('ceo_introduction_japanese')}}</div>
								<div class="col-sm-10">
									<textarea class="form-control" rows="8" name="ceo_introduction_japanese" required="" >
										{{$profile['ceo_introduction_japanese']}}
									</textarea>
								</div>
							</div>

							<div class="form-group">
								<label for="Summary" class="col-sm-2 control-label">Business Outline In English<span style="color: red;">*</span></label>
								<div class="text text-danger">{{$errors->first('outline')}}</div>
								<div class="col-sm-10">
									<textarea class="form-control" rows="8" name="outline" required="" >
										{{$profile['outline']}}
									</textarea>
								</div>
							</div>

							<div class="form-group">
								<label for="Summary" class="col-sm-2 control-label">Business Outline In Japanese<span style="color: red;">*</span></label>
								<div class="text text-danger">{{$errors->first('outline_japanese')}}</div>
								<div class="col-sm-10">
									<textarea class="form-control" rows="8" name="outline_japanese" required="" >
										{{$profile['outline_japanese']}}
									</textarea>
								</div>
							</div>

							<div class="form-group">
								<label for="Summary" class="col-sm-2 control-label">Company Location In English<span style="color: red;">*</span></label>
								<div class="text text-danger">{{$errors->first('location')}}</div>
								<div class="col-sm-10">
									<textarea class="form-control" rows="8" name="location" required="" >
										{{$profile['location']}}
									</textarea>
								</div>
							</div>

							<div class="form-group">
								<label for="Summary" class="col-sm-2 control-label">Company Location In Japanese<span style="color: red;">*</span></label>
								<div class="text text-danger">{{$errors->first('location_japanese')}}</div>
								<div class="col-sm-10">
									<textarea class="form-control" rows="8" name="location_japanese" required="" >
										{{$profile['location_japanese']}}
									</textarea>
								</div>
							</div>





							
							
						</div>
						<!-- /.box-body -->
						<div class="box-footer">
							<a href="{{URL()->Previous()}}" class="btn btn-danger">Cancel</a>
							<button type="submit" class="btn btn-success pull-right">Update Profile</button>
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
					<form class="form-horizontal" method="post" action= "{{url('update-profile')}}" enctype="multipart/form-data">
						{{csrf_field()}}
						<div class="box-body">
							<div class="form-group">
								<label for="image" class="col-sm-2 control-label">画像<span style="color: red;">*</span></label>
								<div class="text text-danger">{{$errors->first('image')}}</div>
								<div class="col-sm-10">
									<input type="file" class="form-control"  id="image" name="image" value="{{$profile['image']}}">
								</div>
							</div>
							<div class="form-group">
								<label for="altimage" class="col-sm-2 control-label">画像の説明<span style="color: red;">*</span></label>
								<div class="text text-danger">{{$errors->first('altimage')}}</div>

								<div class="col-sm-10">
									<input type="text" class="form-control"required="" name="altimage" id="altimage" value="{{$profile['altimage']}}" >
								</div>
							</div>

							<div class="form-group">
								<label for="Summary" class="col-sm-2 control-label">会社紹介英語<span style="color: red;">*</span></label>
								<div class="text text-danger">{{$errors->first('introduction')}}</div>
								<div class="col-sm-10">
									<textarea class="form-control" rows="8" name="introduction" required="" >
										{{$profile['introduction']}}
									</textarea>
								</div>
							</div>

							<div class="form-group">
								<label for="Summary" class="col-sm-2 control-label">会社紹介<span style="color: red;">*</span></label>
								<div class="text text-danger">{{$errors->first('introduction_japanese')}}</div>
								<div class="col-sm-10">
									<textarea class="form-control" rows="8" name="introduction_japanese" required="" >
										{{$profile['introduction_japanese']}}
									</textarea>
								</div>
							</div>

							<div class="form-group">
								<label for="Summary" class="col-sm-2 control-label">CEOの紹介（英語）<span style="color: red;">*</span></label>
								<div class="text text-danger">{{$errors->first('ceo_introduction')}}</div>
								<div class="col-sm-10">
									<textarea class="form-control" rows="8" name="ceo_introduction" required="" >
										{{$profile['ceo_introduction']}}
									</textarea>
								</div>
							</div>

							<div class="form-group">
								<label for="Summary" class="col-sm-2 control-label">CEOの紹介<span style="color: red;">*</span></label>
								<div class="text text-danger">{{$errors->first('ceo_introduction_japanese')}}</div>
								<div class="col-sm-10">
									<textarea class="form-control" rows="8" name="ceo_introduction_japanese" required="" >
										{{$profile['ceo_introduction_japanese']}}
									</textarea>
								</div>
							</div>

							<div class="form-group">
								<label for="Summary" class="col-sm-2 control-label">英語での事業概要<span style="color: red;">*</span></label>
								<div class="text text-danger">{{$errors->first('outline')}}</div>
								<div class="col-sm-10">
									<textarea class="form-control" rows="8" name="outline" required="" >
										{{$profile['outline']}}
									</textarea>
								</div>
							</div>

							<div class="form-group">
								<label for="Summary" class="col-sm-2 control-label">日本語での事業概要<span style="color: red;">*</span></label>
								<div class="text text-danger">{{$errors->first('outline_japanese')}}</div>
								<div class="col-sm-10">
									<textarea class="form-control" rows="8" name="outline_japanese" required="" >
										{{$profile['outline_japanese']}}
									</textarea>
								</div>
							</div>

							<div class="form-group">
								<label for="Summary" class="col-sm-2 control-label">英語での会社の所在地<span style="color: red;">*</span></label>
								<div class="text text-danger">{{$errors->first('location')}}</div>
								<div class="col-sm-10">
									<textarea class="form-control" rows="8" name="location" required="" >
										{{$profile['location']}}
									</textarea>
								</div>
							</div>

							<div class="form-group">
								<label for="Summary" class="col-sm-2 control-label">日本語の会社所在地<span style="color: red;">*</span></label>
								<div class="text text-danger">{{$errors->first('location_japanese')}}</div>
								<div class="col-sm-10">
									<textarea class="form-control" rows="8" name="location_japanese" required="" >
										{{$profile['location_japanese']}}
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