
 <!DOCTYPE html>
<html>
<head>
  <title>HIBIKUS Login System </title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
  }
</style>
</head>
<body style="background-color: #d0ebf3; margin: 130px;">
  <br />

  <div class="container box" style="height: 400px; width: 775px; border: 0px;">

   <div class="row">
    @if($errors->any())
                <div class="alert alert-danger">
                  @foreach($errors->all() as $e)
                    <li>{{$e}}</li>
                  @endforeach
                </div>
              @endif
    <div class="col-md-6"  style="padding: 0px">  <!-- 8 is the width of the left side -->

      <div class="image-form" style="width:100%; background-color:#54a0b1" >
        <img src="{{url('public/images/hibiku_logo.png')}}" style="height: 398px; width:349px; ">
      </div>

    </div>

    <div class="col-md-6" style="height:398px; background-color: #b3c4f5;">  <!-- 4 is the width of the right side -->

      <div class="login-form" style="width: 100%; flex-wrap: wrap;">
       <h3 align="center"> Login</h3><br />

       

      @if(Session::has('success') && !empty(Session::get('success')))<br>
                 <div class=" col-md-12 label label-danger" >{{ Session::get('success')}}</div>
                @endif

                

     <form method="post" action="{{ route('submit.login') }}">
      {{ csrf_field() }}
      <div class="form-group">
       <label>Enter Email</label>
       <input type="email" name="email" class="form-control" />
     </div>
     <div class="form-group">
       <label>Enter Password</label>
       <input type="password" name="password" class="form-control" />
     </div>

     <div class="form-group">
       <input type="submit" name="login" class="btn btn-primary" value="Login" />
     </div>
   </form>
 </div>

</div>

</div>

</div>
</body>
</html>