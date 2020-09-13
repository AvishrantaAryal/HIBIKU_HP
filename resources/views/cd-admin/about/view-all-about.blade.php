@extends('cd-admin.home-master')

<!-- page content -->
@section('content')

 @if(App::isLocale('en'))
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="container-fluid">
  
  <section class="content-header">
    <h1>
      About
    </h1>
   <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">About</a></li>
        <li class="active">View About</li>
      </ol>
  </section>
  @if(Session::has('success1'))
        <div class="alert alert-info alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Data Updated Successfully</strong>
          {{Session::get("message", '')}}
        </div>
        @endif

  <!-- Main content -->
    <section class="content">
      <div>
        <a class="btn btn-info pull-right" href="{{url('/cd-admin/edit-about')}}">
          <i class="fa fa-edit"></i>
          </a>
      </div>
       <div class="row">

        <div class="col-md-12"><center>
        <img src="{{url('/uploads/'.$about['image'])}}" style="height:300px;"></p>
      </center>

     
  <div class="col-md-6">
        <strong>Greetings in English</strong>
        <hr>
        <p>{!!$about['greetings']!!}</p>
       
      </div>

      <div class="col-md-6">
        <strong>Greetings in Japanese</strong>
        <hr>
        <p>{!!$about['greetings_japanese']!!}</p>
       
      </div>


      <div class="col-md-6" style="margin-top: 30px !important; ">
        <strong>HIBIKU`s Policies In English</strong>
        <p>{!!$about['hibikus_policy']!!}</p>
      </div>


      <div class="col-md-6" style="margin-top: 30px !important; ">
        <strong>HIBIKU`s Policies In Japanese</strong>
        <p>{!!$about['hibikus_policy_japanese']!!}</p>
      </div>
    
  </section>
  
  </div>
</div>
@elseif(App::isLocale('jp'))
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="container-fluid">
  
  <section class="content-header">
    <h1>
     約
    </h1>
   <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>ホーム</a></li>
        <li><a href="#">約</a></li>
        <li class="active">について表示</li>
      </ol>
  </section>
  @if(Session::has('success1'))
        <div class="alert alert-info alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>データが正常に更新されました</strong>
          {{Session::get("message", '')}}
        </div>
        @endif

  <!-- Main content -->
    <section class="content">
      <div>
        <a class="btn btn-info pull-right" href="{{url('/cd-admin/edit-about')}}">
          <i class="fa fa-edit"></i>
          </a>
      </div>
       <div class="row">

        <div class="col-md-12"><center>
        <img src="{{url('/uploads/'.$about['image'])}}" style="height:300px;"></p>
      </center>

      <div class="col-md-6">
        <strong>英語の挨拶</strong>
        <hr>
        <p>{!!$about['greetings']!!}</p>
        <hr>
      </div>

      <div class="col-md-6">
        <strong>日本語での挨拶</strong>
        <hr>
        <p>{!!$about['greetings_japanese']!!}</p>
        <hr>
      </div>


      <div class="col-md-6" style="margin-top: 30px !important; ">
        <strong>ヒビクの英語の方針</strong>
        <p>{!!$about['hibikus_policy']!!}</p>
      </div>


      <div class="col-md-6" style="margin-top: 30px !important; ">
        <strong>ヒビクの方針</strong>
        <p>{!!$about['hibikus_policy_japanese']!!}</p>
      </div>

    
      
    
  </section>
  
  </div>
</div>

@endif
@endsection