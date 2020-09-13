@extends('cd-admin.home-master')

@section('page-title')  
Add SEO
@endsection

@section('content')

@if(App::isLocale('en'))
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
   <h1>ADD SEO</h1>

   <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">SEO</a></li>
    <li class="active">ADD SEO</li>
  </ol>
</section>


<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary" style="margin-top: 20px">
        <div class="box-header with-border">
          <h3 class="box-title">Add SEO </h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form action= "{{url('seostore')}}"  method="post">
          {{csrf_field()}}
          <div class="box-body">
           <div class="form-group">

            <label for="name">Choose Title Page </label>
            <div class="text text-danger">{{$errors->first('name')}}</div>
            <select class="form-control" name="name" value="{{old('name')}}">

              <option value="Home">Home</option>
              <option value="About">Partners</option>
              <option value="company">Company</option>
              <option value="Service">Service</option>
              <option value="Gallery">Gallery</option>
              <option value="Contact">Contact</option>
              <option value="news">News</option>
              
            </select>



          </div>
          <div class="form-group">
            <label for="name">SEO Title In English</label>
            <div class="text text-danger">{{$errors->first('title')}}</div>
            <input type="text" class="form-control" name="title"  id="stitle"value="{{old('title')}}" placeholder="Enter SEO Title In English">

          </div>
          <div class="form-group">
            <label for="name">SEO Title In Japanese</label>
            <div class="text text-danger">{{$errors->first('title_japanese')}}</div>
            <input type="text" class="form-control" name="title_japanese"  id="stitle"value="{{old('title_japanese')}}" placeholder="Enter SEO Title In Japanese">

          </div>
          <div class="form-group">
            <label for="name">SEO Keywords In English</label>
            <div class="text text-danger">{{$errors->first('keywords')}}</div>
            <input type="text" class="form-control" name="keywords"  id="skey"value="{{old('keywords')}}" placeholder="Enter SEO Keywords IN English">

          </div>

          <div class="form-group">
            <label for="name">SEO Keywords In Japanese</label>
            <div class="text text-danger">{{$errors->first('keywords')}}</div>
            <input type="text" class="form-control" name="keywords_japanese"  id="skey"value="{{old('keywords_japanese')}}" placeholder="Enter SEO Keywords IN Japanese">

          </div>
          <div class="form-group">
            <label for="name">SEO Description In English</label>
            <div class="text text-danger">{{$errors->first('description')}}</div>
            <textarea class="form-control" name="description"  id="des" placeholder="Enter SEO Description in English" value="{{old('description')}}">
            </textarea>
          </div>

          <div class="form-group">
            <label for="name">SEO Description In Japanese</label>
            <div class="text text-danger">{{$errors->first('description_japanese')}}</div>
            <textarea class="form-control" name="description_japanese"  id="des" placeholder="Enter SEO Description in Japanese" value="{{old('description_japanese')}}">
            </textarea>
          </div>




        </div>
        <div class="box-footer" >
          <button type="submit" class="btn btn-success pull-right">Submit</button>
          <a href="{{URL()->Previous()}}" class="btn btn-danger">Cancel</a>
        </div>


      </form>
    </div>
    <!-- /.box -->
  </div>
</div>
</section>



</div>

@endsection
@elseif(App::isLocale('jp'))

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
   <h1>SEO追加</h1>

   <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> ホーム</a></li>
    <li><a href="#">SEO</a></li>
    <li class="active">SEO追加</li>
  </ol>
</section>


<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary" style="margin-top: 20px">
        <div class="box-header with-border">
          <h3 class="box-title">SEO追加 </h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form action= "{{url('seostore')}}"  method="post">
          {{csrf_field()}}
          <div class="box-body">
           <div class="form-group">

            <label for="name">タイトルページを選択 </label>
            <div class="text text-danger">{{$errors->first('name')}}</div>
            <select class="form-control" name="name" value="{{old('name')}}">

              <option value="Home">ホーム</option>
              <option value="About">パートナー</option>
              <option value="company">会社概要</option>
              <option value="Service">サービス</option>
              
              <option value="Gallery">ギャラリー</option>
              <option value="Contact">連絡先</option>
              <option value="news">ニュース</option>
              
            </select>



          </div>
          <div class="form-group">
            <label for="name">英語でのSEOのタイトル</label>
            <div class="text text-danger">{{$errors->first('title')}}</div>
            <input type="text" class="form-control" name="title"  id="stitle"value="{{old('title')}}" placeholder="SEOタイトルを英語で入力してください">

          </div>
              <div class="form-group">
            <label for="name">日本語のSEOタイトル</label>
            <div class="text text-danger">{{$errors->first('title_japanese')}}</div>
            <input type="text" class="form-control" name="title_japanese"  id="stitle"value="{{old('title_japanese')}}" placeholder="SEOタイトルを入力してください">

          </div>
          <div class="form-group">
            <label for="name">英語のSEOキーワード</label>
            <div class="text text-danger">{{$errors->first('keywords')}}</div>
            <input type="text" class="form-control" name="keywords"  id="skey"value="{{old('keywords')}}" placeholder="SEOキーワードを英語で入力してください">

          </div>
               <div class="form-group">
            <label for="name">日本語のSEOキーワード</label>
            <div class="text text-danger">{{$errors->first('keywords_japanese')}}</div>
            <input type="text" class="form-control" name="keywords_japanese"  id="skey"value="{{old('keywords_japanese')}}" placeholder="日本語でSEOキーワードを入力してください">

          </div>
          <div class="form-group">
            <label for="name">英語のSEOの説明 </label>
            <div class="text text-danger">{{$errors->first('description')}}</div>
            <textarea class="form-control" name="description"  id="des" placeholder="SEOの説明を英語で入力してください " value="{{old('description')}}">
            </textarea>
          </div>

          <div class="form-group">
            <label for="name">日本語でのSEOの説明</label>
            <div class="text text-danger">{{$errors->first('description_japanese')}}</div>
            <textarea class="form-control" name="description_japanese"  id="des" placeholder="SEOの説明を日本語で入力してください" value="{{old('description_japanese')}}">
            </textarea>
          </div>




        </div>
        <div class="box-footer" >
          <button type="submit" class="btn btn-success pull-right">追加</button>
          <a href="{{URL()->Previous()}}" class="btn btn-danger">キャンセル</a>
        </div>


      </form>
    </div>
    <!-- /.box -->
  </div>
</div>
</section>



</div>

@endsection

@endif
