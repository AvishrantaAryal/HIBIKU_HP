@extends('cd-admin.home-master')

<!-- page content -->
@section('content')

@if(App::isLocale('en'))
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="container-fluid">
    
    <section class="content-header">
      <h1>
        Company Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Company Profile</a></li>
        <li class="active">View Company Profile</li>
      </ol>
    </section>
    @if(Session::has('updatesuccess'))
    <div class="alert alert-info alert-dismissible">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Data Updated Successfully</strong>
      {{Session::get("message", '')}}
    </div>
    @endif

    <!-- Main content -->
    <section class="content">
      <div>
        <a class="btn btn-info pull-right" href="{{url('/cd-admin/edit-company-profile')}}">
          <i class="fa fa-edit"></i>
        </a>
      </div>
      <div class="row">

        <div class="col-md-12"><center>
          <img src="{{url('/uploads/'.$profile['image'])}}" style="height:300px;"></p>
        </center>

        

        <div class="col-md-5" style="border: 1px solid ;margin-right: 1px; margin-bottom: 2px !important ;">
          <strong>Company Introduction In English </strong>
          <p>{!!$profile['introduction']!!}</p>
        </div>
        
        
        
        
        <div class="col-md-5" style="border: 1px solid ;margin-right: 1px; margin-bottom: 2px !important ;">
          <strong>Company Introduction In Japanese </strong>
          <p>{!!$profile['introduction_japanese']!!}</p>
        </div>


        <div class="col-md-5" style="border: 1px solid ;margin-right: 1px; margin-bottom: 2px !important ;">
          <strong>CEO Introduction In English </strong>
          <p>{!!$profile['ceo_introduction']!!}</p>
        </div>
        
        <div class="col-md-5" style="border: 1px solid ;margin-right: 1px; margin-bottom: 2px !important ;">
          <strong>CEO Introduction In Japanese </strong>
          <p>{!!$profile['ceo_introduction_japanese']!!}</p>
        </div>
        

        <div class="col-md-5" style="border: 1px solid ;margin-right: 1px; margin-bottom: 2px !important ;">
          <strong>Business Outline In English </strong>
          <p>{!!$profile['outline']!!}</p>
        </div>

        <div class="col-md-5" style="border: 1px solid ;margin-right: 1px; margin-bottom: 2px !important ;">
          <strong>Business Outline In Japanese </strong>
          <p>{!!$profile['outline_japanese']!!}</p>
        </div>

        <div class="col-md-5" style="border: 1px solid ;margin-right: 1px; margin-bottom: 2px !important ;">
          <strong>Company Location In English </strong>
          <p>{!!$profile['location']!!}</p>
        </div>

        <div class="col-md-5" style="border: 1px solid ;margin-right: 1px; margin-bottom: 2px !important ;">
          <strong>Company Location In Japanese </strong>
          <p>{!!$profile['location_japanese']!!}</p>
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
         会社概要
       </h1>
       <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> ホーム</a></li>
        <li><a href="#">会社概要</a></li>
        <li class="active">会社のプロフィールを見る</li>
      </ol>
    </section>
    @if(Session::has('updatesuccess'))
    <div class="alert alert-info alert-dismissible">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>データが正常に更新されました</strong>
      {{Session::get("message", '')}}
    </div>
    @endif

    <!-- Main content -->
    <section class="content">
      <div>
        <a class="btn btn-info pull-right" href="{{url('/cd-admin/edit-company-profile')}}">
          <i class="fa fa-edit"></i>
        </a>
      </div>
      <div class="row">

        <div class="col-md-12"><center>
          <img src="{{url('/uploads/'.$profile['image'])}}" style="height:300px;"></p>
        </center>

        

        <div class="col-md-6">
          <strong>会社紹介英語</strong>
          <p>{!!$profile['introduction']!!}</p>
        </div>
        
        <div class="col-md-6">
          <strong>会社紹介 </strong>
          <p>{!!$profile['introduction_japanese']!!}</p>
        </div>


        <div class="col-md-6">
          <strong>CEOの紹介（英語）</strong>
          <p>{!!$profile['ceo_introduction']!!}</p>
        </div>

        <div class="col-md-6">
          <strong>CEOの紹介 </strong>
          <p>{!!$profile['ceo_intrduction_japanese']!!}</p>
        </div>


        <div class="col-md-6">
          <strong>英語での事業概要 </strong>
          <p>{!!$profile['outline']!!}</p>
        </div>

        <div class="col-md-6">
          <strong>日本語での事業概要</strong>
          <p>{!!$profile['outline_japanese']!!}</p>
        </div>

        <div class="col-md-6">
          <strong>英語での会社の所在地</strong>
          <p>{!!$profile['location']!!}</p>
        </div>

        <div class="col-md-6">
          <strong>日本語の会社所在地</strong>
          <p>{!!$profile['location_japanese']!!}</p>
        </div>



        
      </section>
      
    </div>
  </div>

  @endif
  @endsection