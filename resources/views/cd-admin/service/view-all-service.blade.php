@extends('cd-admin.home-master')

@section('page-title')  
View All Service
@endsection

@section('content')

@if(App::isLocale('en'))
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Service List

    </h1>

    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Service</a></li>
      <li class="active">View all Service</li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-xs-12">
       <div class="box">
        <div class="box-header">
          <h3 class="box-title">
           <a href="{{url('/cd-admin/add-service')}}"><button class="btn btn-success" style="margin-bottom: 10px; ">Add Service</button></a>
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
              <th>Title In English</th>
              <th>Status</th>
              <th>Action</th>

            </tr>
          </thead>
          <tbody>
            @foreach($blog as $pa)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$pa->title}}</td>
              <td height="75px">
               <form action="{{url('/update-service-status/'.$pa->id)}}" method="POST">
                {{csrf_field()}}
                <div class="btn-group">

                 @if($pa->status == 'active')
                 <button type="button" class="btn btn-success">Active</button>
                 @else
                 <button type="button" class="btn btn-danger">Inactive</button>
                 @endif
                 <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                  <span class="caret"></span>
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                @if($pa->status == 'active')
                <div class="dropdown-menu" role="menu" style="min-width: 0px;">
                  <li> <button class="btn btn-danger" type="submit">Inactive</button>
                  </li>
                </div>
                @else
                <div class="dropdown-menu" role="menu" style="min-width: 0px;">
                  <li> <button class="btn btn-success" type="submit">Active</button>
                  </li>
                </div>
                @endif
              </div>
            </form>
          </td>
          <td>
            <a href="{{url('/cd-admin/edit-service/'.$pa->id)}}"><button class="btn btn-primary"><i class="fa fa-edit"></i></button></a>
            <button class="btn btn-danger" data-toggle="modal" data-target="#modal-danger{{$pa->id}}"><i class="fa fa-trash"> </i></button>
            <button class="btn btn-outline-primary" data-toggle="modal" data-target="#view{{$pa->id}}"><i class="fa  fa-eye"> </i></button>
          </td>
        </tr>
        @endforeach

      </tbody>
      <tfoot>
        <tr>
          <th>S.N</th>
          <th>Title In English</th>
          <th>Status</th>
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


@foreach($blog as $t)
<div class="modal fade" id="view{{$t->id}}">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle"><strong>{{$t->name}}</strong></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <strong>Status :</strong>
        @if($t->status=='active')
        <div class="btn btn-outline-success">Active</div>

        @else
        <div class="btn btn-danger">Inactive</div>
        @endif
        <strong><h5 >Details In English :</h5></strong><p> {!!$t->description!!}</p>

        <strong><h5>Details In Japanese :</h5></strong><p> {!!$t->description_japanese!!}</p>

        <p> <img src="{{url('uploads/'.$t->image)}}" style="height: 100px; width:100px;"></p>

        <strong>SEO Title :</strong> {!!$t->seo_title!!}<br>
        <strong>SEO Keywords :</strong> {!!$t->seo_keywords!!}<br>
        <strong>SEO Description :</strong> {!!$t->seo_description!!}<br>
          <strong>SEO Title In Japanese :</strong> {!!$t->seo_title_japanese!!}<br>
        <strong>SEO Keywords In Japanese :</strong> {!!$t->seo_keywords_japanese!!}<br>
        <strong>SEO Description In Japanese :</strong> {!!$t->seo_description_japanese!!}<br>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
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
          <a href="{{url('cd-admin/delete-service/'.$t->id)}}"> <button type="button" class="btn btn-outline">Yes</button></a>
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
      サービス
        
      </h1>

      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> ホーム</a></li>
        <li><a href="#">サービス</a></li>
        <li class="active">すべてのサービスを表示</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         <div class="box">
          <div class="box-header">
            <h3 class="box-title">
             <a href="{{url('/cd-admin/add-service')}}"><button class="btn btn-success" style="margin-bottom: 10px; ">サービスを追加</button></a>
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
                <th>英語のタイトル</th>
                <th>状態</th>
                <th>アクション</th>

              </tr>
            </thead>
            <tbody>
              @foreach($blog as $pa)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$pa->title}}</td>
                <td height="75px">
                 <form action="{{url('/update-service-status/'.$pa->id)}}" method="POST">
                  {{csrf_field()}}
                  <div class="btn-group">

                   @if($pa->status == 'active')
                   <button type="button" class="btn btn-success">アクティブ</button>
                   @else
                   <button type="button" class="btn btn-danger">非活性</button>
                   @endif
                   <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  @if($pa->status == 'active')
                  <div class="dropdown-menu" role="menu" style="min-width: 0px;">
                    <li> <button class="btn btn-danger" type="submit">非活性</button>
                    </li>
                  </div>
                  @else
                  <div class="dropdown-menu" role="menu" style="min-width: 0px;">
                    <li> <button class="btn btn-success" type="submit">アクティブ</button>
                    </li>
                  </div>
                  @endif
                </div>
              </form>
            </td>
            <td>
              <a href="{{url('/cd-admin/edit-service/'.$pa->id)}}"><button class="btn btn-primary"><i class="fa fa-edit"></i></button></a>
              <button class="btn btn-danger" data-toggle="modal" data-target="#modal-danger{{$pa->id}}"><i class="fa fa-trash"> </i></button>
              <button class="btn btn-outline-primary" data-toggle="modal" data-target="#view{{$pa->id}}"><i class="fa  fa-eye"> </i></button>
            </td>
          </tr>
          @endforeach

        </tbody>
        <tfoot>
          <tr>
            <th>通し番号</th>
            <th>英語のタイトル</th>
            <th>状態</th>
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


@foreach($blog as $t)
<div class="modal fade" id="view{{$t->id}}">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle"><strong>{{$t->name}}</strong></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <strong>Status :</strong>
        @if($t->status=='active')
        <div class="btn btn-outline-success">アクティブ</div>

        @else
        <div class="btn btn-danger">非活性</div>
        @endif
        <strong><h5 >英語の詳細 :</h5></strong><p> {!!$t->description!!}</p>

        <strong><h5>詳細は日本語:</h5></strong><p> {!!$t->description_japanese!!}</p>

        <p> <img src="{{url('uploads/'.$t->image)}}" style="height: 100px; width:100px;"></p>

        <strong>Seoタイトル（英語） :</strong> {!!$t->seo_title!!}<br>
        <strong>英語のSEOキーワード:</strong> {!!$t->seo_keywords!!}<br>
        <strong>Seoの英語の説明 :</strong> {!!$t->seo_description!!}<br>


        <strong>日本語のタイトル :</strong> {!!$t->seo_title_japanese!!}<br>
        <strong>英語のSEOキーワード:</strong> {!!$t->seo_keywords_japanese!!}<br>
        <strong>Seoの英語の説明 :</strong> {!!$t->seo_description_japanese!!}<br>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
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
          <h4 class="modal-title">ウェブからのメッセージ</h4>
        </div>
        <div class="modal-body">
          <p>本当に削除しますか？&hellip;</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">番号</button>
          <a href="{{url('cd-admin/delete-service/'.$t->id)}}"> <button type="button" class="btn btn-outline">はい</button></a>
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