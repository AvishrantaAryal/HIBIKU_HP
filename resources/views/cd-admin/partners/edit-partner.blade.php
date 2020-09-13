@extends('cd-admin.home-master')

@section('page-title')  
Edit Partner
@endsection

@section('content')

@if(App::isLocale('en'))
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Edit Partner
		</h1>


		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Partner</a></li>
			<li class="active">Edit Partner</li>
		</ol>
	</section>

	<section class="content">
		<div class="row">

			<div class="col-md-12">
				<!-- Horizontal Form -->
				<div class="box box-info">
					<div class="box-header with-border">
						<h3 class="box-title">Partner Edit  Form</h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->
					<form class="form-horizontal" method="post" action= "{{url('update-partner/'.$partner->id)}}" enctype="multipart/form-data">
						{{csrf_field()}}
						<div class="box-body">
							<div class="form-group">
								<label for="altimage" class="col-sm-3 control-label">Partner`s Location In English</label>
								<div class="text text-danger">{{$errors->first('location')}}</div>

								<div class="col-sm-9">
									<input type="text" class="form-control" name="location" id="altimage" value="{{$partner['location']}}" >
									
								</div>
							</div>

							<div class="form-group">
								<label for="altimage" class="col-sm-3 control-label">Partner`s Location In Japanese</label>
								<div class="text text-danger">{{$errors->first('location_japanese')}}</div>

								<div class="col-sm-9">
									<input type="text" class="form-control" name="location_japanese" id="altimage" value="{{$partner['location_japanese']}}" >
									
								</div>
							</div>

							<div class="form-group">
								<label for="altimage" class="col-sm-3 control-label">Partner`s Type In English</label>
								<div class="text text-danger">{{$errors->first('type')}}</div>

								<div class="col-sm-9">
									<input type="text" class="form-control" name="type" id="altimage" value="{{$partner['type']}}" >
									
								</div>
							</div>

							<div class="form-group">
								<label for="altimage" class="col-sm-3 control-label">Partner`s Type In Japanese</label>
								<div class="text text-danger">{{$errors->first('type_japanese')}}</div>

								<div class="col-sm-9">
									<input type="text" class="form-control" name="type_japanese" id="altimage" value="{{$partner['type_japanese']}}" >
									
								</div>
							</div>


								<div class="form-group">
									<label for="altimage" class="col-sm-3 control-label">Partner Name In English</label>
									<div class="text text-danger">{{$errors->first('partner')}}</div>

									<div class="col-sm-9">
										<input type="text" class="form-control" name="partner" id="altimage" value="{{$partner['partner']}}" >
									</div>
								</div>	
								
								<div class="form-group">
									<label for="altimage" class="col-sm-3 control-label">Partner Name In Japanese</label>
									<div class="text text-danger">{{$errors->first('partner_japanese')}}</div>

									<div class="col-sm-9">
										<input type="text" class="form-control" name="partner_japanese" id="altimage" value="{{$partner['partner_japanese']}}" >
									</div>
								</div>	

						</div>
						<!-- /.box-body -->
						<div class="box-footer">
							<a href="{{URL()->Previous()}}" class="btn btn-danger">Cancel</a>
							<button type="submit" class="btn btn-success pull-right">Update</button>
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
			パートナーを編集
		</h1>
		
		
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> ホーム</a></li>
			<li><a href="#">相棒</a></li>
			<li class="active">	パートナーを編集</li>
		</ol>
	</section>

	<section class="content">
		<div class="row">
			
			<div class="col-md-12">
				<!-- Horizontal Form -->
				<div class="box box-info">
					<div class="box-header with-border">
						<h3 class="box-title">パートナーフォームを編集</h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->
					<form class="form-horizontal" method="post" action= "{{url('update-partner/'.$partner->id)}}" enctype="multipart/form-data">
						{{csrf_field()}}
							<div class="box-body">
							<div class="form-group">
								<label for="altimage" class="col-sm-3 control-label">パートナーの場所（英語）</label>
								<div class="text text-danger">{{$errors->first('location')}}</div>

								<div class="col-sm-9">
									<input type="text" class="form-control" name="location" id="altimage" value="{{$partner['location']}}" >
									
								</div>
							</div>

							<div class="form-group">
								<label for="altimage" class="col-sm-3 control-label">パートナーの場所（日本語）</label>
								<div class="text text-danger">{{$errors->first('location_japanese')}}</div>

								<div class="col-sm-9">
									<input type="text" class="form-control" name="location_japanese" id="altimage" value="{{$partner['location_japanese']}}" >
									
								</div>
							</div>

							<div class="form-group">
								<label for="altimage" class="col-sm-3 control-label">パートナーは英語で入力</label>
								<div class="text text-danger">{{$errors->first('type')}}</div>

								<div class="col-sm-9">
									<input type="text" class="form-control" name="type" id="altimage" value="{{$partner['type']}}" >
									
								</div>
							</div>

							<div class="form-group">
								<label for="altimage" class="col-sm-3 control-label">パートナーは日本語で入力</label>
								<div class="text text-danger">{{$errors->first('type_japanese')}}</div>

								<div class="col-sm-9">
									<input type="text" class="form-control" name="type_japanese" id="altimage" value="{{$partner['type_japanese']}}" >
									
								</div>
							</div>


								<div class="form-group">
									<label for="altimage" class="col-sm-3 control-label">英語でのパートナー名</label>
									<div class="text text-danger">{{$errors->first('partner')}}</div>

									<div class="col-sm-9">
										<input type="text" class="form-control" name="partner" id="altimage" value="{{$partner['partner']}}" >
									</div>
								</div>	
								
								<div class="form-group">
									<label for="altimage" class="col-sm-3 control-label">パートナー名（日本語）</label>
									<div class="text text-danger">{{$errors->first('partner_japanese')}}</div>

									<div class="col-sm-9">
										<input type="text" class="form-control" name="partner_japanese" id="altimage" value="{{$partner['partner_japanese']}}" >
									</div>
								</div>	

						</div>
						<!-- /.box-body -->
						<div class="box-footer">
							<a href="{{URL()->Previous()}}" class="btn btn-danger">キャンセル</a>
							<button type="submit" class="btn btn-success pull-right">更新</button>
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