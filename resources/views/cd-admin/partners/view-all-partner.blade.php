@extends('cd-admin.home-master')

@section('page-title')  
View All Partners
@endsection

@section('content')

@if(App::isLocale('en'))
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Partner List

    </h1>

    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Partner</a></li>
      <li class="active">View all Partner</li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-xs-12">
       <div class="box">
        <div class="box-header">
          <h3 class="box-title">
           <a href="{{url('/cd-admin/add-partner')}}"><button class="btn btn-success" style="margin-bottom: 10px; ">Add Partners</button></a>
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
              <th>Partner Name In English</th>
              <th>Partner Name In Japanese</th>
             
              <th>Action</th>

            </tr>
          </thead>
          <tbody>
            @foreach($partner as $pa)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$pa->partner}}</td>
               <td>{{$pa->partner_japanese}}</td>
              
          <td>
            <a href="{{url('/cd-admin/edit-partner/'.$pa->id)}}"><button class="btn btn-primary"><i class="fa fa-edit"></i></button></a>
            <button class="btn btn-danger" data-toggle="modal" data-target="#modal-danger{{$pa->id}}"><i class="fa fa-trash"> </i></button>
            <button class="btn btn-outline-primary" data-toggle="modal" data-target="#view{{$pa->id}}"><i class="fa  fa-eye"> </i></button>
          </td>
        </tr>
        @endforeach

      </tbody>
      <tfoot>
        <tr>
          <th>SN</th>
              <th>Partner Name In English</th>
              <th>Partner Name In Japanese</th>
             
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


@foreach($partner as $t)
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
             <h4>Partner`s Location In English</h4>
             <h5>{{$t->location}}</h5>

              <h4>Partner`s Location In Japanese</h4>
             <h5>{{$t->location_japanese}}</h5>
             <hr>

             <h4>Partner`s Types In English</h4>
             <h5>{{$t->type}}</h5>

              <h4>Partner`s Types In Japanese</h4>
             <h5>{{$t->type_japanese}}</h5>
              <hr>
              <h4>Partner`s Name In English</h4>
             <h5>{{$t->partner}}</h5>

              <h4>Partner`s Name In Japanese</h4>
             <h5>{{$t->partner_japanese}}</h5>
        
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
          <a href="{{url('cd-admin/delete-partner/'.$t->id)}}"> <button type="button" class="btn btn-outline">Yes</button></a>
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
       パートナーリスト
        
      </h1>

      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> ホーム</a></li>
        <li><a href="#">パートナー</a></li>
        <li class="active">すべてのパートナーを見る</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         <div class="box">
          <div class="box-header">
            <h3 class="box-title">
             <a href="{{url('/cd-admin/add-partner')}}"><button class="btn btn-success" style="margin-bottom: 10px; ">パートナーを追加</button></a>
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
                <th>シリアルナンバー</th>
                <th>英語のパートナー名</th>
                <th>パートナー名（日本語）</th>
                <th>アクション</th>

              </tr>
            </thead>
            <tbody>
              @foreach($partner as $pa)
              <tr>
                 <td>{{$loop->iteration}}</td>
              <td>{{$pa->partner}}</td>
               <td>{{$pa->partner_japanese}}</td>
                
            <td>
              <a href="{{url('/cd-admin/edit-partner/'.$pa->id)}}"><button class="btn btn-primary"><i class="fa fa-edit"></i></button></a>
              <button class="btn btn-danger" data-toggle="modal" data-target="#modal-danger{{$pa->id}}"><i class="fa fa-trash"> </i></button>
              <button class="btn btn-outline-primary" data-toggle="modal" data-target="#view{{$pa->id}}"><i class="fa  fa-eye"> </i></button>
            </td>
          </tr>
          @endforeach

        </tbody>
        <tfoot>
          <tr>
             <th>シリアルナンバー</th>
                <th>英語のパートナー名</th>
                <th>パートナー名（日本語）</th>
                <th>アクション</th>

              </tr>
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


@foreach($partner as $t)
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
        <h4>英語でのパートナーの場所</h4>
             <h5>{{$t->location}}</h5>

              <h4>パートナーの所在地（日本語）</h4>
             <h5>{{$t->location_japanese}}</h5>
             <hr>

             <h4>英語でのパートナーのタイプ</h4>
             <h5>{{$t->type}}</h5>

              <h4>パートナーの日本語タイプ</h4>
             <h5>{{$t->type_japanese}}</h5>
              <hr>
              <h4>英語でのパートナーの名前</h4>
             <h5>{{$t->partner}}</h5>

              <h4>パートナーの日本語での名前</h4>
             <h5>{{$t->partner_japanese}}</h5>      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
        
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
          <a href="{{url('cd-admin/delete-partner/'.$t->id)}}"> <button type="button" class="btn btn-outline">はい</button></a>
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