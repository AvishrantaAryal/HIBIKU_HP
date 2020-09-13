@extends('cd-admin.home-master')

@section('page-title')  
View Album
@endsection

@section('content')
@if(App::isLocale('en'))
<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  <section class="content-header">
    <h1>
     Album

   </h1>

   <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Gallery</a></li>
    <li class="active">View Album</li>
  </ol>
</section>


<section class="content" style="padding: 40px;">
  <div class="row">
    <div>
      <a href="{{url('/album-add')}}"><button class="btn btn-success" style="margin-bottom: 10px; ">Add Album</button></a>

    </div>
    @if(Session::has('success'))
    <div class="alert alert-success alert-dismissible">
      <a class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Data Inserted Successfully</strong>
      {{Session::get("message", '')}}
    </div>
    @elseif(Session::has('deletesuccess'))
    <div class="alert alert-danger alert-dismissible">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Data Deleted Successfully</strong>
      {{Session::get("message", '')}}
    </div>
    @endif
    @foreach($carousel as $car)
    <div class="container">
      <div style="height: 85px;">
       <form action="{{url('statusal/'.$car->id)}}" method="POST" class="pull-left">
        {{csrf_field()}}
        <div class="btn-group">

         @if($car->status == 'active')
         <button type="button" class="btn btn-success">Active</button>
         @else
         <button type="button" class="btn btn-danger">Inactive</button>
         @endif
         <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
          <span class="caret"></span>
          <span class="sr-only">Toggle Dropdown</span>
        </button>
        @if($car->status == 'active')
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
    <button class="btn btn-danger pull-right" data-toggle="modal" data-target="#modal-danger{{$car->id}}"><i class="fa fa-trash">
    </i></button>
     <a href="{{url('/image-view/'.$car->id)}}"><button class="btn btn-primary btn-sm pull-right">View Image</i></button></a>
     
    
  </div>


  <img src="{{url('uploads/'.$car['image'])}}" alt="">
  <div style="margin-top: 20px;">
  </div>

</div>
@endforeach

@elseif(App::isLocale('jp'))
<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  <section class="content-header">
    <h1>
     アルバム

   </h1>

   <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> ホーム</a></li>
    <li><a href="#">ギャラリー</a></li>
    <li class="active">アルバムを見る</li>
  </ol>
</section>


<section class="content" style="padding: 40px;">
  <div class="row">
    <div>
      <a href="{{url('album-add')}}"><button class="btn btn-success" style="margin-bottom: 10px; ">アルバムを追加</button></a>

    </div>
    @if(Session::has('success'))
    <div class="alert alert-success alert-dismissible">
      <a class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>データが正常に挿入されました</strong>
      {{Session::get("message", '')}}
    </div>
    @elseif(Session::has('deletesuccess'))
    <div class="alert alert-danger alert-dismissible">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>データが正常に削除されました</strong>
      {{Session::get("message", '')}}
    </div>
    @endif
    @foreach($carousel as $car)
    <div class="container">
      <div style="height: 85px;">
       <form action="{{url('/statusal/'.$car->id)}}" method="POST" class="pull-left">
        {{csrf_field()}}
        <div class="btn-group">

         @if($car->status == 'active')
         <button type="button" class="btn btn-success">アクティブ</button>
         @else
         <button type="button" class="btn btn-danger">非活性</button>
         @endif
         <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
          <span class="caret"></span>
          <span class="sr-only">Toggle Dropdown</span>
        </button>
        @if($car->status == 'active')
        <div class="dropdown-menu" role="menu" style="min-width: 0px;">
          <li> <button class="btn btn-danger" type="submit">非活性</button>
          </li>
        </div>
        @else
        <div class="dropdown-menu" role="menu" style="min-width: 0px;">
          <li> <button class="btn btn-success" type="submit">活発な</button>
          </li>
        </div>
        @endif
      </div>
    </form>
    <button class="btn btn-danger pull-right" data-toggle="modal" data-target="#modal-danger{{$car->id}}"><i class="fa fa-trash">
    </i></button>

    <a href="{{url('/image-view/'.$car->id)}}"><button class="btn btn-primary btn-sm pull-right">画像を見る</i></button></a>
     
    
  </div>


  <img src="{{url('uploads/'.$car['image'])}}" alt="">
  <div style="margin-top: 20px;">
  </div>

</div>
@endforeach

@endif







</section>
</div>
<style type="text/css">

  .container{
    width: calc(33% - 6px);
    overflow:hidden;
    height: fit-content;
    margin:3px;
    padding: 0;
    display:block;
    position:relative;
    float:left;
    border: solid;
    border-color: aliceblue;
  }
  img{
    height:250px;
    transition-duration: .3s;
    max-width: 100%;
    display:block;
    overflow:hidden;
    cursor:pointer;
  }
  @media only screen and (max-width: 900px) {
    .container {
      width: calc(50% - 6px);
    }
  }
  @media only screen and (max-width: 400px) {
    .container {
      width: 100%;
    }
  }
</style>




@foreach($carousel as $ser)
@if(App::isLocale('en'))
<div class="modal modal-danger fade" id="modal-danger{{$ser->id}}">
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
          <a href="{{url('/cd-admin/delete-album/'.$ser->id)}}"><button type="button" class="btn btn-outline">Yes</button></a>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  @elseif(App::isLocale('jp'))
  <div class="modal modal-danger fade" id="modal-danger{{$ser->id}}">
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
            <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No </button>
            <a href="{{url('/cd-admin/delete-album/'.$ser->id)}}"><button type="button" class="btn btn-outline">はい</button></a>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    @endif


    

    @endforeach
    @endsection