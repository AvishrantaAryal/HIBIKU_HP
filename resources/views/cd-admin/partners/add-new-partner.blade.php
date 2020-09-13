@extends('cd-admin.home-master')

@section('page-title')  
Add Partner
@endsection

@section('content')

@if(App::isLocale('en'))
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Add Partner
		</h1>


		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Partner</a></li>
			<li class="active">Add Partner</li>
		</ol>
	</section>

	<section class="content">
		<div class="row">

			<div class="col-md-12">
				<!-- Horizontal Form -->
				<div class="box box-info">
					<div class="box-header with-border">
						<h3 class="box-title">Partner Form</h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->
					<form class="form-horizontal" method="post" action= "{{url('store-partner')}}" enctype="multipart/form-data">
						{{csrf_field()}}
						<div class="box-body">
							<div class="form-group">
								<label for="altimage" class="col-sm-3 control-label">Partner`s Location In English</label>
								<div class="text text-danger">{{$errors->first('location')}}</div>

								<div class="col-sm-9">
									<input type="text" class="form-control" name="location" id="altimage" value="{{old('location')}}" >
									
								</div>
							</div>

							<div class="form-group">
								<label for="altimage" class="col-sm-3 control-label">Partner`s Location In Japanese</label>
								<div class="text text-danger">{{$errors->first('location_japanese')}}</div>

								<div class="col-sm-9">
									<input type="text" class="form-control" name="location_japanese" id="altimage" value="{{old('location_japanese')}}" >
									
								</div>
							</div>

							<div class="form-group">
								<label for="altimage" class="col-sm-3 control-label">Partner`s Type In English</label>
								<div class="text text-danger">{{$errors->first('type')}}</div>

								<div class="col-sm-9">
									<input type="text" class="form-control" name="type" id="altimage" value="{{old('type')}}" >
									
								</div>
							</div>

							<div class="form-group">
								<label for="altimage" class="col-sm-3 control-label">Partner`s Type In Japanese</label>
								<div class="text text-danger">{{$errors->first('type_japanese')}}</div>

								<div class="col-sm-9">
									<input type="text" class="form-control" name="type_japanese" id="altimage" value="{{old('type_japanese')}}" >
									
								</div>
							</div>

							<div class="box-body" id="card">

								<div class="form-group">
									<label for="altimage" class="col-sm-3 control-label">Partner Name In English</label>
									<div class="text text-danger">{{$errors->first('partner')}}</div>

									<div class="col-sm-9">
										<input type="text" class="form-control" name="partner[]" id="altimage" value="{{old('partner')}}" >
									</div>
								</div>	
								
								<div class="form-group">
									<label for="altimage" class="col-sm-3 control-label">Partner Name In Japanese</label>
									<div class="text text-danger">{{$errors->first('partner_japanese')}}</div>

									<div class="col-sm-9">
										<input type="text" class="form-control" name="partner_japanese[]" id="altimage" value="{{old('partner_japanese')}}" >
									</div>
								</div>	
								
								


							</div>

							<div class="form-group">
								<div class="col-sm-11 control-label">
									<div class="col-sm-9">
										<input id="submitButton" type="button" class="add_another btn btn-info" value="Add New Partner"/>
									</div>
								</div>
							</div>


						</div>
						<!-- /.box-body -->
						<div class="box-footer">
							<a href="{{URL()->Previous()}}" class="btn btn-danger">Cancel</a>
							<button type="submit" class="btn btn-success pull-right">Add New Partner</button>
						</div>
						<!-- /.box-footer -->
					</form>
				</div>
				<!-- /.box -->
				<!-- general form elements disabled -->

				<!-- /.box --></section>


			</div>
			@elseif(App::isLocale('jp'))
			<div class="content-wrapper">
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<h1>
						パートナーを追加
					</h1>


					<ol class="breadcrumb">
						<li><a href="#"><i class="fa fa-dashboard"></i> ホーム</a></li>
						<li><a href="#">相棒</a></li>
						<li class="active">パートナーを追加</li>
					</ol>
				</section>

				<section class="content">
					<div class="row">

						<div class="col-md-12">
							<!-- Horizontal Form -->
							<div class="box box-info">
								<div class="box-header with-border">
									<h3 class="box-title">パートナーフォームを追加</h3>
								</div>
								<!-- /.box-header -->
								<!-- form start -->
								<form class="form-horizontal" method="post" action= "{{url('store-partner')}}" enctype="multipart/form-data">
									{{csrf_field()}}
									<div class="box-body">

										<div class="form-group">
								<label for="altimage" class="col-sm-3 control-label">パートナーの場所（英語）</label>
								<div class="text text-danger">{{$errors->first('location')}}</div>

								<div class="col-sm-9">
									<input type="text" class="form-control" name="location" id="altimage" value="{{old('location')}}" >
									
								</div>
							</div>

							<div class="form-group">
								<label for="altimage" class="col-sm-3 control-label">パートナーの場所（日本語）</label>
								<div class="text text-danger">{{$errors->first('location_japanese')}}</div>

								<div class="col-sm-9">
									<input type="text" class="form-control" name="location_japanese" id="altimage" value="{{old('location_japanese')}}" >
									
								</div>
							</div>

							<div class="form-group">
								<label for="altimage" class="col-sm-3 control-label">英語でのパートナータイプ</label>
								<div class="text text-danger">{{$errors->first('type')}}</div>

								<div class="col-sm-9">
									<input type="text" class="form-control" name="type" id="altimage" value="{{old('type')}}" >
									
								</div>
							</div>

							<div class="form-group">
								<label for="altimage" class="col-sm-3 control-label">日本語のパートナータイプ</label>
								<div class="text text-danger">{{$errors->first('type_japanese')}}</div>

								<div class="col-sm-9">
									<input type="text" class="form-control" name="type_japanese" id="altimage" value="{{old('type_japanese')}}" >
									
								</div>
							</div>

										<div class="box-body" id="card1">

											<div class="form-group">
												<label for="altimage" class="col-sm-3 control-label">英語のパートナー名</label>
												<div class="text text-danger">{{$errors->first('type')}}</div>

												<div class="col-sm-9">
													<input type="text" class="form-control" name="partner[]" id="altimage" value="{{old('partner')}}" >
												</div>
											</div>	

											<div class="form-group">
												<label for="altimage" class="col-sm-3 control-label">パートナー名（日本語）</label>
												<div class="text text-danger">{{$errors->first('partner_japanese')}}</div>

												<div class="col-sm-9">
													<input type="text" class="form-control" name="partner_japanese[]" id="altimage" value="{{old('partner_japanese')}}" >
												</div>
											</div>	




										</div>

										<div class="form-group">
											<div class="col-sm-11 control-label">
												<div class="col-sm-9">
													<input id="submitButton" type="button" class="add_another1 btn btn-info" value="新しく追加する"/>
												</div>
											</div>
										</div>


									</div>
									<!-- /.box-body -->
									<div class="box-footer">
										<a href="{{URL()->Previous()}}" class="btn btn-danger">キャンセル</a>
										<button type="submit" class="btn btn-success pull-right">新しいパートナーを追加</button>
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


