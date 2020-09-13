@extends('cd-admin.home-master')

@section('page-title')  
Add About
@endsection

@section('content')

@if(App::isLocale('en'))
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Add About
		</h1>


		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">About</a></li>
			<li class="active">Add About</li>
		</ol>
	</section>

	<section class="content">
		<div class="row">

			<div class="col-md-12">
				<!-- Horizontal Form -->
				<div class="box box-info">
					<div class="box-header with-border">
						<h3 class="box-title">About Form</h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->
					<form class="form-horizontal" method="post" action= "{{url('store-about')}}" enctype="multipart/form-data">
						{{csrf_field()}}
						<div class="box-body">
							<div class="form-group">
								<label for="image" class="col-sm-3 control-label">Image<span style="color: red;">*</span></label>
								<div class="text text-danger">{{$errors->first('image')}}</div>
								<div class="col-sm-9">
									<input type="file" class="form-control" required="" id="image" name="image" value="{{old('image')}}">
								</div>
							</div>
							<div class="form-group">
								<label for="altimage" class="col-sm-3 control-label">Image Description<span style="color: red;">*</span></label>
								<div class="text text-danger">{{$errors->first('altimage')}}</div>

								<div class="col-sm-9">
									<input type="text" class="form-control"required="" name="altimage" id="altimage" value="{{old('altimage')}}" >
								</div>
							</div>

							<div class="form-group">
								<label for="Summary" class="col-sm-3 control-label">Greetings In English<span style="color: red;">*</span></label>
								<div class="text text-danger">{{$errors->first('greetings')}}</div>
								<div class="col-sm-9">
									<textarea class="form-control" rows ="5" name="greetings" required="" >
										{{old('greetings')}}
									</textarea>
								</div>
							</div>

							<div class="form-group">
								<label for="Summary" class="col-sm-3 control-label">Greetings In Japanese<span style="color: red;">*</span></label>
								<div class="text text-danger">{{$errors->first('greetings_japanese')}}</div>
								<div class="col-sm-9">
									<textarea class="form-control" rows="5" name="greetings_japanese" required="" >
										{{old('greetings_japanese')}}
									</textarea>
								</div>
							</div>


							<div class="form-group">
								<label for="Description" class="col-sm-3 control-label">HIBIKU`S Policy In English<span style="color: red;">*</span>
								</label>
								<div class="text text-danger">{{$errors->first('hibikus_policy')}}</div>
								<div class="col-sm-9">
									<textarea id="summernote" class="form-control" name="hibikus_policy" required=""  >
										{{old('hibikus_policy')}}
									</textarea>
								</div>
							</div>

							<div class="form-group">
								<label for="Description" class="col-sm-3 control-label">HIBIKU`S Policy In Japanese<span style="color: red;">*</span>
								</label>
								<div class="text text-danger">{{$errors->first('hibikus_policy_japanese')}}</div>
								<div class="col-sm-9">
									<textarea id="summernote1" class="form-control" rows="5"  name="hibikus_policy_japanese" required=""  >
										{{old('hibikus_policy_japanese')}}
									</textarea>
								</div>
							</div>

						</div>
						<!-- /.box-body -->
						<div class="box-footer">
							<a href="{{URL()->Previous()}}" class="btn btn-danger">Cancel</a>
							<button type="submit" class="btn btn-success pull-right">Add About</button>
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
					<form class="form-horizontal" method="post" action= "{{url('store-about')}}" enctype="multipart/form-data">
						{{csrf_field()}}
						<div class="box-body">
							<div class="form-group">
								<label for="image" class="col-sm-3 control-label">画像<span style="color: red;">*</span></label>
								<div class="text text-danger">{{$errors->first('image')}}</div>
								<div class="col-sm-9">
									<input type="file" class="form-control" required="" id="image" name="image" value="{{old('image')}}">
								</div>
							</div>
							<div class="form-group">
								<label for="altimage" class="col-sm-3 control-label">画像の説明<span style="color: red;">*</span></label>
								<div class="text text-danger">{{$errors->first('altimage')}}</div>

								<div class="col-sm-9">
									<input type="text" class="form-control"required="" name="altimage" id="altimage" value="{{old('altimage')}}" >
								</div>
							</div>

							<div class="form-group">
								<label for="Summary" class="col-sm-3 control-label">英語の挨拶<span style="color: red;">*</span></label>
								<div class="text text-danger">{{$errors->first('greetings')}}</div>
								<div class="col-sm-9">
									<textarea class="form-control" rows="5" name="greetings" required="" >
										{{old('greetings')}}
									</textarea>
								</div>
							</div>

							<div class="form-group">
								<label for="Summary" class="col-sm-3 control-label">日本語での挨拶<span style="color: red;">*</span></label>
								<div class="text text-danger">{{$errors->first('greetings_japanese')}}</div>
								<div class="col-sm-9">
									<textarea class="form-control" rows="5" name="greetings_japanese" required="" >
										{{old('greetings_japanese')}}
									</textarea>
								</div>
							</div>


							<div class="form-group">
								<label for="Description" class="col-sm-3 control-label">HIBIKU`S 英語の方針<span style="color: red;">*</span>
								</label>
								<div class="text text-danger">{{$errors->first('hibikus_policy')}}</div>
								<div class="col-sm-9">
									<textarea id="summernote" class="form-control" name="hibikus_policy" required=""  >
										{{old('hibikus_policy')}}
									</textarea>
								</div>
							</div>

							<div class="form-group">
								<label for="Description" class="col-sm-3 control-label">HIBIKU`S 日本語の方針<span style="color: red;">*</span>
								</label>
								<div class="text text-danger">{{$errors->first('hibikus_policy_japanese')}}</div>
								<div class="col-sm-9">
									<textarea id="summernote1" class="form-control" name="hibikus_policy_japanese" required=""  >
										{{old('hibikus_policy_japanese')}}
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