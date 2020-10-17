@extends('cd-admin.home-master')

@section('page-title')  
Add Service
@endsection

@section('content')
@if(App::isLocale('en'))

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Add Service
    </h1>


    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Service</a></li>
      <li class="active">Add Service</li>
    </ol>
  </section>


  <section class="content"> 
    <div class="row">
      <div class="col-md-12 box1">
        <div class="box box-default">
          <div class="box-header">
            <h3 class="box-title">Add Service</h3>
          </div>
          <div class="box-body">
            <form class="form-horizontal" method="post" action= "{{url('cd-admin/insertService')}}" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="box-body">

                <div class="form-group">
                  <label for="name" class="col-sm-3 control-label">Service Title In English<span style="color: red;">*</span></label>
                  <div class="text text-danger">{{$errors->first('title')}}</div>

                  <div class="col-sm-9">
                    <input type="text" class="form-control"required="" name="title" id="name" value="{{old('title')}}" >
                  </div>
                </div>

                <div class="form-group">
                  <label for="name" class="col-sm-3 control-label">Service Title IN Japanese<span style="color: red;">*</span></label>
                  <div class="text text-danger">{{$errors->first('title_japanese')}}</div>

                  <div class="col-sm-9">
                    <input type="text" class="form-control"required="" name="title_japanese" id="name" value="{{old('title_japanese')}}" >
                  </div>
                </div>

                <div class="form-group">
                  <label for="Image" class="col-sm-3 control-label">Image</label>
                  <div class="text text-danger">{{$errors->first('image')}}</div>

                  <div class="col-sm-9">
                    <input type="file" class="form-control" id="image" name="image" value="{{old('image')}}">
                  </div>
                </div>

                <div class="form-group">
                  <label for="Alternative Image Name" class="col-sm-3 control-label">Image Description</label>
                  <div class="text text-danger">{{$errors->first('altimage')}}</div>

                  <div class="col-sm-9">
                   <input type="text" class="form-control"required="" name="altimage" id="altimage" value="{{old('altimage')}}" >
                 </div>
               </div>

               <div class="form-group">
                <label for="Summary" class="col-sm-3 control-label">Summary In English<span style="color: red;">*</span></label>
                <div class="text text-danger">{{$errors->first('summary')}}</div>

                <div class="col-sm-9">
                 <textarea id="summernote3" rows="8" name="summary" required="" >
                  {{old('summary')}}
                </textarea>
              </div>
            </div>


            <div class="form-group">
              <label for="Summary" class="col-sm-3 control-label">Summary In Japanese<span style="color: red;">*</span></label>
              <div class="text text-danger">{{$errors->first('summary_japanese')}}</div>

              <div class="col-sm-9">
               <textarea id="summernote2" rows="8" name="summary_japanese" required="" >
                {{old('summary_japanese')}}
              </textarea>
            </div>
          </div>

          <div class="form-group">
            <label for="Description" class="col-sm-3 control-label">Description In English<span style="color: red;">*</span></label>
            <div class="text text-danger">{{$errors->first('description')}}</div>

            <div class="col-sm-9">
             <textarea id="summernote" class="form-control" name="description" required="" >
              {{old('description')}}
            </textarea>
          </div>
        </div>

        <div class="form-group">
          <label for="Description" class="col-sm-3 control-label">Description In Japanese<span style="color: red;">*</span></label>
          <div class="text text-danger">{{$errors->first('description_japanese')}}</div>

          <div class="col-sm-9">
           <textarea id="summernote1" class="form-control" name="description_japanese" required="" >
            {{old('description_japanese')}}
          </textarea>
        </div>
      </div>


      <div class="form-group">
        <label for="Status" class="col-sm-3 control-label">Status<span style="color: red;">*</span>
        </label>
        <div class="text text-danger">{{$errors->first('status')}}</div>
        <div class="col-sm-9">
          <label>
            <input type="radio" class="minimal" name="status" value="active" required="" <?php echo old('status')=='active' ? 'checked' : ' '  ?> >
            Active
          </label>
          <label>
            <input type="radio" class="minimal" name="status" value="inactive"required="" <?php echo old('status')=='inactive' ? 'checked' : ' '  ?>>
            Inactive
          </label>

        </div>
      </div>

      <hr>
      <div class="form-group">
        <label for="SEO Title" class="col-sm-3 control-label">SEO Title In English<span style="color: red;">*</span></label>
        <div class="text text-danger">{{$errors->first('seo_title')}}</div>

        <div class="col-sm-9">
         <input type="text" class="form-control" name="seo_title" id="seotitle" value="{{old('seo_title')}}" required="" >
       </div>
     </div>

     <div class="form-group">
      <label for="SEO Title" class="col-sm-3 control-label">SEO Title In Japanese<span style="color: red;">*</span></label>
      <div class="text text-danger">{{$errors->first('seo_title_japanese')}}</div>

      <div class="col-sm-9">
       <input type="text" class="form-control" name="seo_title_japanese" id="seotitle" value="{{old('seo_title_japanese')}}" required="" >
     </div>
   </div>

   <div class="form-group">
    <label for="SEO Keywords" class="col-sm-3 control-label">SEO Keywords In English<span style="color: red;">*</span></label>
    <div class="text text-danger">{{$errors->first('seo_keywords')}}</div>

    <div class="col-sm-9">
     <input type="text" class="form-control" required="" name="seo_keywords" id="keywords" value="{{old('seo_keywords')}}" >
   </div>
 </div>

 <div class="form-group">
  <label for="SEO Keywords" class="col-sm-3 control-label">SEO Keywords In Japanese<span style="color: red;">*</span></label>
  <div class="text text-danger">{{$errors->first('seo_keywords_japanese')}}</div>

  <div class="col-sm-9">
   <input type="text" class="form-control" required="" name="seo_keywords_japanese" id="keywords" value="{{old('seo_keywords_japanese')}}" >
 </div>
</div>

<div class="form-group">
  <label for="SEO Description" class="col-sm-3 control-label">SEO Description In English<span style="color: red;">*</span></label>
  <div class="text text-danger">{{$errors->first('seo_description')}}</div>

  <div class="col-sm-9">
   <input type="text" class="form-control" required="" name="seo_description"value="{{old('seo_description')}}">
 </div>
</div>

<div class="form-group">
  <label for="SEO Description" class="col-sm-3 control-label">SEO Description In Japanese<span style="color: red;">*</span></label>
  <div class="text text-danger">{{$errors->first('seo_description_japanese')}}</div>

  <div class="col-sm-9">
   <input type="text" class="form-control" required="" name="seo_description_japanese"value="{{old('seo_description_japanese')}}">
 </div>
</div>




</div>
<!-- /.box-body -->
<div class="box-footer">
 <a href="{{URL()->Previous()}}" class="btn btn-danger">Cancel</a>
 <button type="submit" class="btn btn-success pull-right">Add Service</button>
</div>
<!-- /.box-footer -->
</form>
<!-- Date dd/mm/yyyy -->
</div>
</div>
</div>


</div>



</section>
</div>

<!-- /.box -->


@elseif(App::isLocale('jp'))
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
     サービス
    </h1>


    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> ホーム</a></li>
      <li><a href="#">Service</a></li>
      <li class="active">サービスを追加</li>
    </ol>
  </section>


  <section class="content"> 
    <div class="row">
      <div class="col-md-12 box1">
        <div class="box box-default">
          <div class="box-header">
            <h3 class="box-title">サービスを追加</h3>
          </div>
          <div class="box-body">
            <form class="form-horizontal" method="post" action= "{{url('cd-admin/insertService')}}" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="box-body">

                <div class="form-group">
                  <label for="name" class="col-sm-3 control-label">英語でのサービスタイトル<span style="color: red;">*</span></label>
                  <div class="text text-danger">{{$errors->first('title')}}</div>

                  <div class="col-sm-9">
                    <input type="text" class="form-control"required="" name="title" id="name" value="{{old('title')}}" >
                  </div>
                </div>

                <div class="form-group">
                  <label for="name" class="col-sm-3 control-label">日本語のサービスタイトル <span style="color: red;">*</span></label>
                  <div class="text text-danger">{{$errors->first('title_japanese')}}</div>

                  <div class="col-sm-9">
                    <input type="text" class="form-control"required="" name="title_japanese" id="name" value="{{old('title_japanese')}}" >
                  </div>
                </div>

                <div class="form-group">
                  <label for="Image" class="col-sm-3 control-label"> 画像</label>
                  <div class="text text-danger">{{$errors->first('image')}}</div>

                  <div class="col-sm-9">
                    <input type="file" class="form-control" r id="image" name="image" value="{{old('image')}}">
                  </div>
                </div>

                <div class="form-group">
                  <label for="Alternative Image Name" class="col-sm-3 control-label"> 画像の説明</label>
                  <div class="text text-danger">{{$errors->first('altimage')}}</div>

                  <div class="col-sm-9">
                   <input type="text" class="form-control"required="" name="altimage" id="altimage" value="{{old('altimage')}}" >
                 </div>
               </div>

               <div class="form-group">
                <label for="Summary" class="col-sm-3 control-label"> 英語の要約 <span style="color: red;">*</span></label>
                <div class="text text-danger">{{$errors->first('summary')}}</div>

                <div class="col-sm-9">
                 <textarea id="summernote3" name="summary" required="" >
                  {{old('summary')}}
                </textarea>
              </div>
            </div>


            <div class="form-group">
              <label for="Summary" class="col-sm-3 control-label">日本語でのまとめ<span style="color: red;">*</span></label>
              <div class="text text-danger">{{$errors->first('summary_japanese')}}</div>

              <div class="col-sm-9">
               <textarea id="su,,ernote2" name="summary_japanese" required="" >
                {{old('summary_japanese')}}
              </textarea>
            </div>
          </div>

          <div class="form-group">
            <label for="Description" class="col-sm-3 control-label">英語での説明<span style="color: red;">*</span></label>
            <div class="text text-danger">{{$errors->first('description')}}</div>

            <div class="col-sm-9">
             <textarea id="summernote" class="form-control" name="description" required="" >
              {{old('description')}}
            </textarea>
          </div>
        </div>

        <div class="form-group">
          <label for="Description" class="col-sm-3 control-label">日本語での説明<span style="color: red;">*</span></label>
          <div class="text text-danger">{{$errors->first('description_japanese')}}</div>

          <div class="col-sm-9">
           <textarea id="summernote1" class="form-control" name="description_japanese" required="" >
            {{old('description_japanese')}}
          </textarea>
        </div>
      </div>


      <div class="form-group">
        <label for="Status" class="col-sm-3 control-label">状態<span style="color: red;">*</span>
        </label>
        <div class="text text-danger">{{$errors->first('status')}}</div>
        <div class="col-sm-9">
          <label>
            <input type="radio" class="minimal" name="status" value="active" required="" <?php echo old('status')=='active' ? 'checked' : ' '  ?> >
            アクティブ
          </label>
          <label>
            <input type="radio" class="minimal" name="status" value="inactive"required="" <?php echo old('status')=='inactive' ? 'checked' : ' '  ?>>
            非活性
          </label>

        </div>
      </div>

      <hr>
      <div class="form-group">
        <label for="SEO Title" class="col-sm-3 control-label">英語のSEOタイトル<span style="color: red;">*</span></label>
        <div class="text text-danger">{{$errors->first('seo_title')}}</div>

        <div class="col-sm-9">
         <input type="text" class="form-control" name="seo_title" id="seotitle" value="{{old('seo_title')}}" required="" >
       </div>
     </div>

     <div class="form-group">
      <label for="SEO Title" class="col-sm-3 control-label">日本語のSEOタイトル<span style="color: red;">*</span></label>
      <div class="text text-danger">{{$errors->first('seo_title_japanese')}}</div>

      <div class="col-sm-9">
       <input type="text" class="form-control" name="seo_title_japanese" id="seotitle" value="{{old('seo_title_japanese')}}" required="" >
     </div>
   </div>

   <div class="form-group">
    <label for="SEO Keywords" class="col-sm-3 control-label">英語のSEOキーワード<span style="color: red;">*</span></label>
    <div class="text text-danger">{{$errors->first('seo_keywords')}}</div>

    <div class="col-sm-9">
     <input type="text" class="form-control" required="" name="seo_keywords" id="keywords" value="{{old('seo_keywords')}}" >
   </div>
 </div>

 <div class="form-group">
  <label for="SEO Keywords" class="col-sm-3 control-label">日本語のSEOキーワード<span style="color: red;">*</span></label>
  <div class="text text-danger">{{$errors->first('seo_keywords_japanese')}}</div>

  <div class="col-sm-9">
   <input type="text" class="form-control" required="" name="seo_keywords_japanese" id="keywords" value="{{old('seo_keywords_japanese')}}" >
 </div>
</div>

<div class="form-group">
  <label for="SEO Description" class="col-sm-3 control-label">SEoの英語の説明<span style="color: red;">*</span></label>
  <div class="text text-danger">{{$errors->first('seo_description')}}</div>

  <div class="col-sm-9">
   <input type="text" class="form-control" required="" name="seo_description"value="{{old('seo_description')}}">
 </div>
</div>

<div class="form-group">
  <label for="SEO Description" class="col-sm-3 control-label">日本語でのSEOの説明<span style="color: red;">*</span></label>
  <div class="text text-danger">{{$errors->first('seo_description_japanese')}}</div>

  <div class="col-sm-9">
   <input type="text" class="form-control" required="" name="seo_description_japanese"value="{{old('seo_description_japanese')}}">
 </div>
</div>




</div>
<!-- /.box-body -->
<div class="box-footer">
 <a href="{{URL()->Previous()}}" class="btn btn-danger">キャンセル</a>
 <button type="submit" class="btn btn-success pull-right">サービスを追加</button>
</div>
<!-- /.box-footer -->
</form>
<!-- Date dd/mm/yyyy -->
</div>
</div>
</div>


</div>



</section>
</div>
@endif

<!-- /.box -->


@endsection



