@extends('cd-admin.home-master')

@section('page-title')  
Edit Service
@endsection

@section('content')
@if(App::isLocale('en'))
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Edit Service
    </h1>


    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Service</a></li>
      <li class="active">Edit Service</li>
    </ol>
  </section>

  <section class="content">
    <div class="row">

      <div class="col-md-12">
        <!-- Horizontal Form -->
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Edit Service</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" class="form-horizontal" action= "{{url('/cd-admin/updateService/'.$check->id)}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="box-body">

             <div class="form-group">
              <label for="name" class="col-sm-3 control-label">Service Title In English<span style="color: red;">*</span></label>
              <div class="text text-danger">{{$errors->first('title')}}</div>

              <div class="col-sm-9">
                <input type="text" class="form-control"required="" name="title" id="name" value="{{$check['title']}}" >
              </div>
            </div>


            <div class="form-group">
              <label for="name" class="col-sm-3 control-label">Service Title IN Japanese<span style="color: red;">*</span></label>
              <div class="text text-danger">{{$errors->first('title_japanese')}}</div>

              <div class="col-sm-9">
                <input type="text" class="form-control"required="" name="title_japanese" id="name" value="{{$check['title_japanese']}}" >
              </div>
            </div>
            <div class="form-group">
              <label for="Image" class="col-sm-3 control-label">Image</span></label>
              <div class="text text-danger">{{$errors->first('image')}}</div>

              <div class="col-sm-9">
                <input type="file" class="form-control" id="image" name="image" >
              </div>
            </div>

            <div class="form-group">
              <label for="Alternative Image Name" class="col-sm-3 control-label">Image Description</label>
              <div class="text text-danger">{{$errors->first('altimage')}}</div>

              <div class="col-sm-9">
               <input type="text" class="form-control"required="" name="altimage" id="altimage" value="{{$check['altimage']}}" >
             </div>
           </div>


           <div class="form-group">
            <label for="Summary" class="col-sm-3 control-label">Summary In English<span style="color: red;">*</span></label>
            <div class="text text-danger">{{$errors->first('summary')}}</div>

            <div class="col-sm-9">
             <textarea class="form-control" name="summary" required="" >
              {{$check['summary']}}
            </textarea>
          </div>
        </div>

        <div class="form-group">
          <label for="Summary" class="col-sm-3 control-label">Summary In Japanese<span style="color: red;">*</span></label>
          <div class="text text-danger">{{$errors->first('summary_japanese')}}</div>

          <div class="col-sm-9">
           <textarea class="form-control" name="summary_japanese" required="" >
            {{$check['summary_japanese']}}
          </textarea>
        </div>
      </div>

      <div class="form-group">
        <label for="Description" class="col-sm-3 control-label">Description In English<span style="color: red;">*</span></label>
        <div class="text text-danger">{{$errors->first('description')}}</div>

        <div class="col-sm-9">
         <textarea id="summernote" class="form-control" name="description" required="" >
          {{$check['description']}}
        </textarea>
      </div>
    </div>

    <div class="form-group">
      <label for="Description" class="col-sm-3 control-label">Description In Japanese<span style="color: red;">*</span></label>
      <div class="text text-danger">{{$errors->first('description_japanese')}}</div>

      <div class="col-sm-9">
       <textarea id="summernote" class="form-control" name="description_japanese" required="" >
        {{$check['description_japanese']}}
      </textarea>
    </div>
  </div>



  <div class="form-group">
    <label for="Status" class="col-sm-3 control-label">Status<span style="color: red;">*</span>
    </label>
    <div class="text text-danger">{{$errors->first('status')}}</div>
    <div class="col-sm-9">
      <label>
        <input type="radio" class="minimal" <?php echo $check->status == 'active' ? 'checked' :  '' ?> checked name="status" value="active">Active
      </label>
      <label>
        <input type="radio"  class="minimal"  <?php echo $check->status == 'inactive' ? 'checked' :  '' ?> name="status" value="inactive">Inactive
      </label>

    </div>
  </div>

  <hr>
  <hr>
  <div class="form-group">
    <label for="SEO Title" class="col-sm-3 control-label">SEO Title In English<span style="color: red;">*</span></label>
    <div class="text text-danger">{{$errors->first('seo_title')}}</div>

    <div class="col-sm-9">
     <input type="text" class="form-control" name="seo_title" id="seotitle" value="{{$check['seo_title']}}" required="" >
   </div>
 </div>

 <div class="form-group">
  <label for="SEO Title" class="col-sm-3 control-label">SEO Title In Japanese<span style="color: red;">*</span></label>
  <div class="text text-danger">{{$errors->first('seo_title_japanese')}}</div>

  <div class="col-sm-9">
    <input type="text" class="form-control" name="seo_title_japanese" id="seotitle" value="{{$check['seo_title_japanese']}}" required="" >
  </div>
</div>

<div class="form-group">
  <label for="SEO Keywords" class="col-sm-3 control-label">SEO Keywords In English<span style="color: red;">*</span></label>
  <div class="text text-danger">{{$errors->first('seo_keywords')}}</div>

  <div class="col-sm-9">
   <input type="text" class="form-control" required="" name="seo_keywords" id="keywords" value="{{$check['seo_keywords']}}" >
 </div>
</div>

<div class="form-group">
  <label for="SEO Keywords" class="col-sm-3 control-label">SEO Keywords In Japanese<span style="color: red;">*</span></label>
  <div class="text text-danger">{{$errors->first('seo_keywords_japanese')}}</div>

  <div class="col-sm-9">
   <input type="text" class="form-control" required="" name="seo_keywords_japanese" id="keywords" value="{{$check['seo_keywords_japanese']}}" >
 </div>
</div>

<div class="form-group">
  <label for="SEO Description" class="col-sm-3 control-label">SEO Description In English<span style="color: red;">*</span></label>
  <div class="text text-danger">{{$errors->first('seo_description')}}</div>

  <div class="col-sm-9">
   <input type="text" class="form-control" required="" name="seo_description"value="{{$check['seo_description']}}">
 </div>
</div>

<div class="form-group">
  <label for="SEO Description" class="col-sm-3 control-label">SEO Description In Japanese<span style="color: red;">*</span></label>
  <div class="text text-danger">{{$errors->first('seo_description_japanese')}}</div>

  <div class="col-sm-9">
   <input type="text" class="form-control" required="" name="seo_description_japanese"value="{{$check['seo_description_japanese']}}">
 </div>
</div>


</div>

<div class="modal-footer">
  <a href="{{URL()->Previous()}}" class="btn btn-danger pull-left">Cancel</a>
  <button type="submit" class="btn btn-primary">Update</button>
</div>
</form>
</div>
<!-- /.box -->
<!-- general form elements disabled -->

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
   サービスを編集
    </h1>


    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> ホーム</a></li>
      <li><a href="#">サービス</a></li>
      <li class="active">サービスを編集</li>
    </ol>
  </section>

  <section class="content">
    <div class="row">

      <div class="col-md-12">
        <!-- Horizontal Form -->
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">サービスを編集</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" class="form-horizontal" action= "{{url('/cd-admin/updateService/'.$check->id)}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="box-body">

             <div class="form-group">
              <label for="name" class="col-sm-3 control-label">英語でのサービスタイトル<span style="color: red;">*</span></label>
              <div class="text text-danger">{{$errors->first('title')}}</div>

              <div class="col-sm-9">
                <input type="text" class="form-control"required="" name="title" id="name" value="{{$check['title']}}" >
              </div>
            </div>


            <div class="form-group">
              <label for="name" class="col-sm-3 control-label">日本語のサービスタイトル<span style="color: red;">*</span></label>
              <div class="text text-danger">{{$errors->first('title_japanese')}}</div>

              <div class="col-sm-9">
                <input type="text" class="form-control"required="" name="title_japanese" id="name" value="{{$check['title_japanese']}}" >
              </div>
            </div>
            <div class="form-group">
              <label for="Image" class="col-sm-3 control-label">画像</label>
              <div class="text text-danger">{{$errors->first('image')}}</div>

              <div class="col-sm-9">
                <input type="file" class="form-control" id="image" name="image" >
              </div>
            </div>

            <div class="form-group">
              <label for="Alternative Image Name" class="col-sm-3 control-label">画像の説明</label>
              <div class="text text-danger">{{$errors->first('altimage')}}</div>

              <div class="col-sm-9">
               <input type="text" class="form-control"required="" name="altimage" id="altimage" value="{{$check['altimage']}}" >
             </div>
           </div>


           <div class="form-group">
            <label for="Summary" class="col-sm-3 control-label">英語の要約<span style="color: red;">*</span></label>
            <div class="text text-danger">{{$errors->first('summary')}}</div>

            <div class="col-sm-9">
             <textarea class="form-control" name="summary" required="" >
              {{$check['summary']}}
            </textarea>
          </div>
        </div>

        <div class="form-group">
          <label for="Summary" class="col-sm-3 control-label">日本語でのまとめ<span style="color: red;">*</span></label>
          <div class="text text-danger">{{$errors->first('summary_japanese')}}</div>

          <div class="col-sm-9">
           <textarea class="form-control" name="summary_japanese" required="" >
            {{$check['summary_japanese']}}
          </textarea>
        </div>
      </div>

      <div class="form-group">
        <label for="Description" class="col-sm-3 control-label">英語での説明<span style="color: red;">*</span></label>
        <div class="text text-danger">{{$errors->first('description')}}</div>

        <div class="col-sm-9">
         <textarea id="summernote" class="form-control" name="description" required="" >
          {{$check['description']}}
        </textarea>
      </div>
    </div>

    <div class="form-group">
      <label for="Description" class="col-sm-3 control-label">日本語での説明<span style="color: red;">*</span></label>
      <div class="text text-danger">{{$errors->first('description_japanese')}}</div>

      <div class="col-sm-9">
       <textarea id="summernote" class="form-control" name="description_japanese" required="" >
        {{$check['description_japanese']}}
      </textarea>
    </div>
  </div>



  <div class="form-group">
    <label for="Status" class="col-sm-3 control-label">状態<span style="color: red;">*</span>
    </label>
    <div class="text text-danger">{{$errors->first('status')}}</div>
    <div class="col-sm-9">
      <label>
        <input type="radio" class="minimal" <?php echo $check->status == 'active' ? 'checked' :  '' ?> checked name="status" value="active">アクティブ
      </label>
      <label>
        <input type="radio"  class="minimal"  <?php echo $check->status == 'inactive' ? 'checked' :  '' ?> name="status" value="inactive">非活性
      </label>

    </div>
  </div>

  <hr>
  <hr>
  <div class="form-group">
    <label for="SEO Title" class="col-sm-3 control-label">Seoタイトル（英語）<span style="color: red;">*</span></label>
    <div class="text text-danger">{{$errors->first('seo_title')}}</div>

    <div class="col-sm-9">
     <input type="text" class="form-control" name="seo_title" id="seotitle" value="{{$check['seo_title']}}" required="" >
   </div>
 </div>

 <div class="form-group">
  <label for="SEO Title" class="col-sm-3 control-label">日本語のタイトル<span style="color: red;">*</span></label>
  <div class="text text-danger">{{$errors->first('seo_title_japanese')}}</div>

  <div class="col-sm-9">
    <input type="text" class="form-control" name="seo_title_japanese" id="seotitle" value="{{$check['seo_title_japanese']}}" required="" >
  </div>
</div>

<div class="form-group">
  <label for="SEO Keywords" class="col-sm-3 control-label">英語のSEOキーワード<span style="color: red;">*</span></label>
  <div class="text text-danger">{{$errors->first('seo_keywords')}}</div>

  <div class="col-sm-9">
   <input type="text" class="form-control" required="" name="seo_keywords" id="keywords" value="{{$check['seo_keywords']}}" >
 </div>
</div>

<div class="form-group">
  <label for="SEO Keywords" class="col-sm-3 control-label">日本語のSeoキーワード<span style="color: red;">*</span></label>
  <div class="text text-danger">{{$errors->first('seo_keywords_japanese')}}</div>

  <div class="col-sm-9">
   <input type="text" class="form-control" required="" name="seo_keywords_japanese" id="keywords" value="{{$check['seo_keywords_japanese']}}" >
 </div>
</div>

<div class="form-group">
  <label for="SEO Description" class="col-sm-3 control-label"> Seoの英語の説明<span style="color: red;">*</span></label>
  <div class="text text-danger">{{$errors->first('seo_description')}}</div>

  <div class="col-sm-9">
   <input type="text" class="form-control" required="" name="seo_description"value="{{$check['seo_description']}}">
 </div>
</div>

<div class="form-group">
  <label for="SEO Description" class="col-sm-3 control-label">Seoの日本語の説明  <span style="color: red;">*</span></label>
  <div class="text text-danger">{{$errors->first('seo_description_japanese')}}</div>

  <div class="col-sm-9">
   <input type="text" class="form-control" required="" name="seo_description_japanese"value="{{$check['seo_description_japanese']}}">
 </div>
</div>


</div>

<div class="modal-footer">
  <a href="{{URL()->Previous()}}" class="btn btn-danger pull-left"> キャンセル</a>
  <button type="submit" class="btn btn-primary">更新</button>
</div>
</form>
</div>
<!-- /.box -->
<!-- general form elements disabled -->

<!-- /.box -->
</div>


</div>
</section>

</div>

@endsection
@endif

