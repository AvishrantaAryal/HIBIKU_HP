@extends('cd-admin.home-master')

@section('page-title')  
View All Partner Type
@endsection

@section('content')

@if(App::isLocale('en'))
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Partner Type List

		</h1>

		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Partner</a></li>
			<li class="active">View all Partner Type </li>
		</ol>
	</section>

	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">
							<a href="{{url('/cd-admin/add-partner-type')}}"><button class="btn btn-success" style="margin-bottom: 10px; ">Add Partner Type </button></a>
						</h3>
						@if(Session::has('success'))
						<div class="alert alert-success alert-dismissible">
							<a class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Data Inserted Successfully</strong>
							{{Session::get("message", '')}}
						</div>
						@elseif(Session::has('updatesuccess'))
						<div class="alert alert-info alert-dismissible">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Data Updated Successfully</strong>
							{{Session::get("message", '')}}
						</div>
						@elseif(Session::has('deletesuccess'))
						<div class="alert alert-danger alert-dismissible">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Data Deleted Successfully</strong>
							{{Session::get("message", '')}}
						</div>
						@endif
					</div>
					<!-- /.box-header -->
					<div class="box-body">

						<table id="example1" class="table table-bordered table-striped">
							<thead>

								<tr>
									<th>SN</th>
									<th>Partner Type In English</th>
									<th>Partner Type In Japanese</th>
									<th>Action</th>

								</tr>
							</thead>
							<tbody>
								@foreach($partnertype as $pa)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>{{$pa->type}}</td>
									<td>{{$pa->type_japanese}}</td>
									
									<td>
										<button class="btn btn-info pull-right" data-toggle="modal" data-target="#myModal{{$pa->id}}" ><i class="fa fa-edit"></i></button>
										<button class="btn btn-danger" data-toggle="modal" data-target="#modal-danger{{$pa->id}}"><i class="fa fa-trash"> </i></button>

									</td>
								</tr>
								@endforeach

							</tbody>
							<tfoot>
								<tr>
									<th>SN</th>
									<th>Partner Type</th>
									<th>Action</th>

								</tr>
							</tfoot>
						</table>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</section>

</div>






<!--MODEL-->


@foreach($partnertype as $t)

<div id="myModal{{$t->id}}" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"></h4>
			</div>
			<div class="modal-body">
				<div class="box-body">
					<!-- Date dd/mm/yyyy -->
					<form role="form" method="post" action= "{{url('update-partner-type/'.$t->id)}}" enctype="multipart/form-data">
						{{csrf_field()}}


						<div class="form-group">
							<label for="altimage">Partner Type In English<span style="color: red;">*</span></label>
							<div class="text text-danger">{{$errors->first('type')}}</div>

							
								<input type="text" class="form-control"required="" name="type" id="altimage" value="{{$t['type']}}" >
						
						</div> 

						<div class="form-group">
							<label for="altimage">Partner Type In Japanese<span style="color: red;">*</span></label>
							<div class="text text-danger">{{$errors->first('type')}}</div>

								<input type="text" class="form-control"required="" name="type_japanese" id="altimage" value="{{$t['type_japanese']}}" >
							
						</div> 

						


						<div class="col-md-4"></div>
						<div class="col-md-4">
							<button class="btn btn-primary" type="submit">Update</button>
						</div>
						<div class="col-md-4"></div>
					</form>

				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">close</button>
			</div>
		</div>

	</div>
</div>


<!--Delete-->

<div class="modal modal-danger fade" id="modal-danger{{$t->id}}">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Message from web</h4>
				</div>
				<div class="modal-body">
					<p>Are you sure you want to delete ?&hellip;</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancel</button>
					<a href="{{url('cd-admin/delete-partner-type/'.$t->id)}}"> <button type="button" class="btn btn-outline">Yes</button></a>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>


	<!--Edit-->



	<style type="text/css">
		.p{
			width: 100px;
		}
	</style>


	@endforeach

	@endsection
	@elseif(App::isLocale('jp'))


	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				パートナータイプ

			</h1>

			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i> ホーム</a></li>
				<li><a href="#">相棒</a></li>
				<li class="active">パートナータイプを表示</li>
			</ol>
		</section>

		<section class="content">
			<div class="row">
				<div class="col-xs-12">
					<div class="box">
						<div class="box-header">
							<h3 class="box-title">
								<a href="{{url('/cd-admin/add-partner-type')}}"><button class="btn btn-success" style="margin-bottom: 10px; ">パートナータイプを追加</button></a>
							</h3>
							@if(Session::has('success'))
							<div class="alert alert-success alert-dismissible">
								<a class="close" data-dismiss="alert" aria-label="close">&times;</a>
								<strong> データが正常に挿入されました</strong>
								{{Session::get("message", '')}}
							</div>
							@elseif(Session::has('updatesuccess'))
							<div class="alert alert-info alert-dismissible">
								<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								<strong>データが正常に削除されました</strong>
								{{Session::get("message", '')}}
							</div>
							@elseif(Session::has('deletesuccess'))
							<div class="alert alert-danger alert-dismissible">
								<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								<strong>データが正常に更新されました</strong>
								{{Session::get("message", '')}}
							</div>
							@endif
						</div>
						<!-- /.box-header -->
						<div class="box-body">

							<table id="example1" class="table table-bordered table-striped">
								<thead>

									<tr>
										<th>通し番号</th>
										<th>パートナータイプ（英語）</th>
										<th>日本語のパートナータイプ</th>

									</tr>
								</thead>
								<tbody>
									@foreach($partnertype as $pa)
									<tr>
										<td>{{$loop->iteration}}</td>
										<td>{{$pa->type}}</td>
										<td>{{$pa->type_japanese}}</td>


										<td>
											<button class="btn btn-info pull-right" data-toggle="modal" data-target="#myModal{{$pa->id}}" ><i class="fa fa-edit"></i></button>
											<button class="btn btn-danger" data-toggle="modal" data-target="#modal-danger{{$pa->id}}"><i class="fa fa-trash"> </i></button>

										</td>
									</tr>
									@endforeach

								</tbody>
								<tfoot>
									<tr>
										<th>通し番号</th>
										<th>パートナータイプ</th>
										<th>アクション</th>

									</tr>
								</tfoot>
							</table>
						</div>
						<!-- /.box-body -->
					</div>
					<!-- /.box -->
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
		</section>

	</div>






	<!--MODEL-->


	@foreach($partnertype as $t)

	<!--Delete-->


	<div id="myModal{{$t->id}}" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"></h4>
				</div>
				<div class="modal-body">
					<div class="box-body">
						<!-- Date dd/mm/yyyy -->
						<form role="form" method="post" action= "{{url('update-partner-type/'.$t->id)}}" enctype="multipart/form-data">
							{{csrf_field()}}


							<div class="form-group">
								<label for="altimage" class="col-sm-2 control-label">パートナータイ<span style="color: red;">*</span></label>
								<div class="text text-danger">{{$errors->first('type')}}</div>

								<div class="col-sm-10">
									<input type="text" class="form-control"required="" name="type_japanese" id="altimage" value="{{$t['type']}}" >
								</div>
							</div> 



							<div class="form-group">
								<label for="altimage" class="col-sm-2 control-label">日本語のパートナータイプ<span style="color: red;">*</span></label>
								<div class="text text-danger">{{$errors->first('type_japanese')}}</div>

								<div class="col-sm-10">
									<input type="text" class="form-control"required="" name="type_japanese" id="altimage" value="{{$t['type_japanese']}}" >
								</div>
							</div> 




							<div class="col-md-4"></div>
							<div class="col-md-4">
								<button class="btn btn-primary" type="submit">更新</button>
							</div>
							<div class="col-md-4"></div>
						</form>

					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
				</div>
			</div>

		</div>
	</div>

	<div class="modal modal-danger fade" id="modal-danger{{$t->id}}">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">ウェブからのメッセージ</h4>
					</div>
					<div class="modal-body">
						<p>本当に削除しますか？&hellip;</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-outline pull-left" data-dismiss="modal">番号</button>
						<a href="{{url('cd-admin/delete-partner-type/'.$t->id)}}"> <button type="button" class="btn btn-outline">はい</button></a>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>


		<!--Edit-->



		<style type="text/css">
			.p{
				width: 100px;
			}
		</style>


		@endforeach

		@endsection
		@endif