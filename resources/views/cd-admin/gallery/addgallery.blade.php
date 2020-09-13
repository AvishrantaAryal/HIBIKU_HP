
@extends('cd-admin.home-master')

@section('page-title')  
Add Album
@endsection

@section('content')
@if(App::isLocale('en'))
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Add Album
    </h1>
    
    
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Galley</a></li>
      <li class="active">Add New Album</li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
     
      <div class="col-md-12">
        <!-- Horizontal Form -->
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Album Form</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form class="form-horizontal" method="post" action= "{{url('storealbum')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="box-body">

              <div class="form-group">
              <label for="altimage" class="col-sm-3 control-label">Album Name In English<span style="color: red;">*</span></label>
              <div class="text text-danger">{{$errors->first('name')}}</div>

              <div class="col-sm-9">
                <input type="text" class="form-control"required="" name="name" id="altimage" value="{{old('name')}}" >
              </div>
            </div>

            <div class="form-group">
              <label for="altimage" class="col-sm-3 control-label">Album Name In Japanese<span style="color: red;">*</span></label>
              <div class="text text-danger">{{$errors->first('name_japanese')}}</div>

              <div class="col-sm-9">
                <input type="text" class="form-control"required="" name="name_japanese" id="altimage" value="{{old('name_japanese')}}" >
              </div>
            </div>


              <div class="form-group">
                <label for="image" class="col-sm-3 control-label">Image<span style="color: red;">*</span></label>
                <div class="text text-danger">{{$errors->first('image')}}</div>
                <div class="col-sm-9">
                 <input type="file" class="form-control" required="" id="image" name="image" value="{{old('image')}}">
               </div>
             </div>
             <div class="form-group">
              <label for="altimage" class="col-sm-3 control-label">Image Description<span style="color: red;">*</span></label>
              <div class="text text-danger">{{$errors->first('altimage')}}</div>

              <div class="col-sm-9">
                <input type="text" class="form-control"required="" name="altimage" id="altimage" value="{{old('altimage')}}" >
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


            
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
           <a href="{{URL()->Previous()}}" class="btn btn-danger">Cancel</a>
           <button type="submit" class="btn btn-success pull-right">Add Album</button>
         </div>
         <!-- /.box-footer -->
       </form>
     </div>
     <!-- /.box -->
     <!-- general form elements disabled -->
     
     <!-- /.box -->
   </div>
   
   
 </div>
</section>


</div>
@elseif(App::isLocale('jp'))
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
     アルバムを追加
    </h1>
    
    
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> ホーム</a></li>
      <li><a href="#">画廊</a></li>
      <li class="active">アルバムを追加</li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
     
      <div class="col-md-12">
        <!-- Horizontal Form -->
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">ギャラリーフォーム</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form class="form-horizontal" method="post" action= "{{url('storealbum')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="box-body">

              <div class="form-group">
              <label for="altimage" class="col-sm-3 control-label">英語のアルバム名<span style="color: red;">*</span></label>
              <div class="text text-danger">{{$errors->first('name')}}</div>

              <div class="col-sm-9">
                <input type="text" class="form-control"required="" name="name" id="altimage" value="{{old('name')}}" >
              </div>
            </div>

            <div class="form-group">
              <label for="altimage" class="col-sm-3 control-label">日本語のアルバム名<span style="color: red;">*</span></label>
              <div class="text text-danger">{{$errors->first('name_japanese')}}</div>

              <div class="col-sm-9">
                <input type="text" class="form-control"required="" name="name_japanese" id="altimage" value="{{old('name_japanese')}}" >
              </div>
            </div>

              <div class="form-group">
                <label for="image" class="col-sm-3 control-label">画像<span style="color: red;">*</span></label>
                <div class="text text-danger">{{$errors->first('image')}}</div>
                <div class="col-sm-9">
                 <input type="file" class="form-control" required="" id="image" name="image" value="{{old('image')}}">
               </div>
             </div>
             <div class="form-group">
              <label for="altimage" class="col-sm-3 control-label">画像の説明<span style="color: red;">*</span></label>
              <div class="text text-danger">{{$errors->first('altimage')}}</div>

              <div class="col-sm-9">
                <input type="text" class="form-control"required="" name="altimage" id="altimage" value="{{old('altimage')}}" >
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


            
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
           <a href="{{URL()->Previous()}}" class="btn btn-danger">キャンセル</a>
           <button type="submit" class="btn btn-success pull-right">アルバム追加</button>
         </div>
         <!-- /.box-footer -->
       </form>
     </div>
     <!-- /.box -->
     <!-- general form elements disabled -->
     
     <!-- /.box -->
   </div>
   
   
 </div>
</section>


</div>
@endif




@endsection