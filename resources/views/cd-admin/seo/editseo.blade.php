@extends('cd-admin.home-master')

@section('page-title')  
Edit seo
@endsection

@section('content')
@if(App::isLocale('en'))

<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Edit SEO
    </h1>   

    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">SEO</a></li>
      <li class="active">Edit SEO</li>
    </ol>
  </section>


  <section class="content">
    <div class="row">

      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary" style="margin-top: 20px">
          <div class="box-header with-border">
            <h3 class="box-title">Edit SEO</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->

          <form role="form" action= "{{url('/updateseo/'.$ser['id'])}}" method="post">

           {{csrf_field()}}
           <div class="box-body">
             <div class="form-group">

              <label for="name">Page Name :</label>
              {{$ser->name}}



              <div class="form-group">
                <label for="name">SEO Title In English</label>
                <div class="text text-danger">{{$errors->first('title')}}</div>
                <input type="text" class="form-control" name="title"  id="stitle"value="{{$ser['title']}}" placeholder="Enter SEO Title In English">

              </div>
              <div class="form-group">
                <label for="name">SEO Title In Japanese</label>
                <div class="text text-danger">{{$errors->first('title_japanese')}}</div>
                <input type="text" class="form-control" name="title_japanese"  id="stitle"value="{{$ser['title_apanese']}}" placeholder="Enter SEO Title In Japanese">

              </div>
              <div class="form-group">
                <label for="name">SEO Keywords In English</label>
                <div class="text text-danger">{{$errors->first('keywords')}}</div>
                <input type="text" class="form-control" name="keywords"  id="skey"value="{{$ser['keywors']}}" placeholder="Enter SEO Keywords IN English">

              </div>

              <div class="form-group">
                <label for="name">SEO Keywords In Japanese</label>
                <div class="text text-danger">{{$errors->first('keywords')}}</div>
                <input type="text" class="form-control" name="keywords_japanese"  id="skey"value="{{$ser['keywords_japanese']}}" placeholder="Enter SEO Keywords IN Japanese">

              </div>
              <div class="form-group">
                <label for="name">SEO Description In English</label>
                <div class="text text-danger">{{$errors->first('description')}}</div>
                <textarea class="form-control" name="description"  id="des" placeholder="Enter SEO Description in English" value="{{$ser['description']}}">
                </textarea>
              </div>

              <div class="form-group">
                <label for="name">SEO Description In Japanese</label>
                <div class="text text-danger">{{$errors->first('description_japanese')}}</div>
                <textarea class="form-control" name="description_japanese"  id="des" placeholder="Enter SEO Description in Japanese" value="{{$ser['description_japanese']}}">
                </textarea>
              </div>




            </div>
          </div>

            <button type="submit" class="btn btn-info pull-right">Submit</button>




            <a href="{{URL()->previous()}}"><button type="submit" class="btn btn-danger">Cancel</button></a>
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
    <h1>
     SEOを編集
    </h1>   

    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> ホーム</a></li>
      <li><a href="#">SEO</a></li>
      <li class="active">SEOを編集</li>
    </ol>
  </section>


  <section class="content">
    <div class="row">

      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary" style="margin-top: 20px">
          <div class="box-header with-border">
            <h3 class="box-title">SEOを編集</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->

          <form role="form" action= "{{url('/updateseo/'.$ser['id'])}}" method="post">

           {{csrf_field()}}
           <div class="box-body">
             <div class="form-group">

              <label for="name">ページ名 :</label>
              {{$ser->name}}

              <div class="form-group">
            <label for="name">英語でのSEOのタイトル</label>
            <div class="text text-danger">{{$errors->first('title')}}</div>
            <input type="text" class="form-control" name="title"  id="stitle"value="{{$ser['title']}}" placeholder="SEOタイトルを英語で入力してください">

          </div>
              <div class="form-group">
            <label for="name">日本語のSEOタイトル</label>
            <div class="text text-danger">{{$errors->first('title_japanese')}}</div>
            <input type="text" class="form-control" name="title_japanese"  id="stitle"value="{{$ser['title_japanese']}}" placeholder="SEOタイトルを入力してください">

          </div>
          <div class="form-group">
            <label for="name">英語のSEOキーワード</label>
            <div class="text text-danger">{{$errors->first('keywords')}}</div>
            <input type="text" class="form-control" name="keywords"  id="skey"value="{{$ser['keywords']}}" placeholder="SEOキーワードを英語で入力してください">

          </div>
               <div class="form-group">
            <label for="name">日本語のSEOキーワード</label>
            <div class="text text-danger">{{$errors->first('keywords_japanese')}}</div>
            <input type="text" class="form-control" name="keywords_japanese"  id="skey"value="{{$ser['keywords_japanese']}}" placeholder="日本語でSEOキーワードを入力してください">

          </div>
          <div class="form-group">
            <label for="name">英語のSEOの説明 </label>
            <div class="text text-danger">{{$errors->first('description')}}</div>
            <textarea class="form-control" name="description"  id="des" placeholder="SEOの説明を英語で入力してください " value="{{$ser['description']}}">
            </textarea>
          </div>

          <div class="form-group">
            <label for="name">日本語でのSEOの説明</label>
            <div class="text text-danger">{{$errors->first('description_japanese')}}</div>
            <textarea class="form-control" name="description_japanese"  id="des" placeholder="SEOの説明を日本語で入力してください" value="{{$ser['description_japanese']}}">
            </textarea>
          </div>




        </div>

            <button type="submit" class="btn btn-info pull-right">更新</button>




            <a href="{{URL()->previous()}}"><button type="submit" class="btn btn-danger">キャンセル</button></a>
          </form>



        </div>
        <!-- /.box -->
      </div>
      
    </div>
  </section>



</div>

@endsection
@endif