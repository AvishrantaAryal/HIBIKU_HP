@extends('cd-admin.home-master')

@section('page-title')  
SEO
@endsection

@section('content')
@if(App::isLocale('en'))
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        SEO
        
      </h1>
     
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">SEO</a></li>
        <li class="active">View SEO</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
           <div class="box">
            <div class="box-header">
              <h3 class="box-title">
                <!-- <a href="{{url('/addseo')}}"><button class="btn btn-success" style="margin-bottom: 15px;">ADD New Service</button></a> -->
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
                  <th>S.N</th>
                  <th>SEO For</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
                @foreach($seo as $ser)
                <tr>
                  
                  <td>{{$loop->iteration}} </td>
                  <td>{{$ser->name}}</td>
                  
                  <td>
                    <a href="{{url('/editseo/'.$ser->id)}}"><button class="btn btn-info"><i class="fa fa-edit"></i></button></a>
                   <!--  <button class="btn btn-danger" data-toggle="modal" data-target="#modal-danger{{$ser->id}}"><i class="fa fa-trash"> </i></button> -->
                   <button class="btn btn-success" data-toggle="modal" data-target="#view{{$ser->id}}"><i class="fa  fa-eye"> </i></button>
                 </td>
                </tr>
                @endforeach
                
                </tbody>
                <tfoot>
                <tr>
                  <th>S.N</th>
                  <th>SEO For</th>
                  
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


 
            
        

@foreach($er as $t)
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
               <a href="{{url('/deleteseo/'.$t->id)}}"> <button type="button" class="btn btn-outline">Yes</button></a>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>



     <div class="modal fade" id="view{{$t->id}}">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="view"><strong>SEO For:</strong>  {{$t->name}} </h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <strong>SEO Title In English : </strong> {{$t->title}}<br>
         <strong>SEO Keywords In English : </strong> {{$t->keywords}}<br>
          <strong>SEO Description  In English: </strong> {{$t->description}}

            <strong>SEO Title In Japanese : </strong> {{$t->title_japanese}}<br>
         <strong>SEO Keywords In Japanese : </strong> {{$t->keywords_japanese}}<br>
          <strong>SEO Description In Japanese : </strong> {{$t->description_japanese}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
@endforeach

@endsection
@elseif(App::isLocale('jp'))

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        SEO
        
      </h1>
     
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> ホーム</a></li>
        <li><a href="#">SEO</a></li>
        <li class="active">SEOを表示</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
           <div class="box">
            <div class="box-header">
              <h3 class="box-title">
                <!-- <a href="{{url('/addseo')}}"><button class="btn btn-success" style="margin-bottom: 15px;">ADD New Service</button></a> -->
              </h3>
              @if(Session::has('success'))
        <div class="alert alert-success alert-dismissible">
          <a class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>データが正常に挿入されました</strong>
          {{Session::get("message", '')}}
        </div>
        @elseif(Session::has('updatesuccess'))
        <div class="alert alert-info alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong> データが正常に更新されました
</strong>
          {{Session::get("message", '')}}
        </div>
        @elseif(Session::has('deletesuccess'))
        <div class="alert alert-danger alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>データが正常に削除されました</strong>
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
                  <th>のSEO</th>
                  <th>アクション</th>
                  
                </tr>
                </thead>
                <tbody>
                @foreach($seo as $ser)
                <tr>
                  
                  <td>{{$loop->iteration}} </td>
                  <td>{{$ser->name}}</td>
                  
                  <td>
                    <a href="{{url('/editseo/'.$ser->id)}}"><button class="btn btn-info"><i class="fa fa-edit"></i></button></a>
                   <!--  <button class="btn btn-danger" data-toggle="modal" data-target="#modal-danger{{$ser->id}}"><i class="fa fa-trash"> </i></button> -->
                   <button class="btn btn-success" data-toggle="modal" data-target="#view{{$ser->id}}"><i class="fa  fa-eye"> </i></button>
                 </td>
                </tr>
                @endforeach
                
                </tbody>
                <tfoot>
                <tr>
                  <th>通し番号</th>
                  <th>のSEO</th>
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


 
            
        

@foreach($er as $t)
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
               <a href="{{url('/deleteseo/'.$t->id)}}"> <button type="button" class="btn btn-outline">  はい</button></a>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>



     <div class="modal fade" id="view{{$t->id}}">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="view"><strong>通し番号:</strong>  {{$t->name}} </h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <strong>Seoタイトル（英語） : </strong> {{$t->title}}<br>
          <strong> 日本語のタイトル : </strong> {{$t->title_japanese}}<br>
         <strong>英語のSEOキーワード : </strong> {{$t->keywords}}<br>
          <strong>日本語のSeoキーワード : </strong> {{$t->keywords_japanese}}<br>
          <strong>Seoの英語の説明 : </strong> {{$t->description}}

             <strong>Seoの日本語の説明  : </strong> {{$t->description_japanese}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
        
      </div>
    </div>
  </div>
</div>
@endforeach

@endsection
@endif