<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>

    <!-- Page Title -->
    <title>@yield('page-title')</title>


    <!-- FavIcon Link -->
    <link rel="icon" type="image/ico" href="{{url('public/favicon.ico')}}">


    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="description" content="@yield('seo_description')">
    <meta name="keywords" content="@yield('seo_keyword')">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{url('public/css/bootstrap.min.css')}}">

    <!-- fontawesome css -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <!-- Global CSS -->
    <link rel="stylesheet" type="text/css" href="{{url('public/css/style.css')}}">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" type="text/css" href="{{url('public/css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('public/css/owl.theme.css')}}">


    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <!-- Jquery 1.9.1 -->
    <script type="text/javascript" src="{{url('public/js/jquery-1.9.1.min.js')}}"></script>

    <!--Icofont-->
    <link rel="stylesheet" href="{{url('public/css/icofont.min.css')}}">

    <!--Flag-->
    <link rel="stylesheet" href="{{url('public/css/flag.min.css')}}">
   
</head>
<body>


    <div>
        @include('header.header')
    </div>

    <div style="min-height: 50vh;">
        @yield('content')
    </div>

    <div>
        @include('footer.footer')
    </div>
    
</body>

<!-- Popper, Boostrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
<script type="text/javascript" src="{{url('public/js/bootstrap.js')}}"></script>



<!-- Owl Carousel JS -->
<script type="text/javascript" src="{{url('public/js/owl.carousel.min.js')}}"></script>


<script src="https://kit.fontawesome.com/a91a27e46f.js" crossorigin="anonymous"></script>


<!-- Global JS -->
<script type="text/javascript" src="{{url('public/js/js.js')}}"></script>

<script>
  $(document).ready(function(){
    $('.add_another').click(function() {
      $("#card").append('<div class="group{{ $errors->has('featuretitle') ? ' has-error' : '' }}"> <hr><div class="form-group"><label class="col-sm-3 control-label">Other Feature</label><div class="col-sm-6"><div class="input-group"><div class="input-group-addon"><i class="fa fa-user"></i></div><input type="text" class="form-control" name="featuretitle[]" required=""placeholder="Enter Header" ></div></div></div><div class="form-group{{ $errors->has('featuredescription') ? ' has-error' : '' }}"><label class="col-sm-3 control-label"> Description</label><div class="col-sm-6"><div class="input-group"><div class="input-group-addon"><i class="fa fa-pencil"></i></div><input type="text"  name="featuredescription[]" class="form-control" id="inputDescription3" value="" placeholder="Enter Description"></div></div></div><label class="col-sm-8 control-label"></label><input type="button" class="remove btn btn-danger" id="close" value="Delete Card"/></div>');

      $('.group').on('click','.remove',function() {
        $(this).parent().remove();
      });

    });
  })
</script>

</html>