 <div class="container-fluid header-navbar-bg">
  <div class="container">
    <a style="margin-left: -30px;" >
      <img  src="{{url('/public/images/hibiku_logo.png')}}" alt="" style="height: 100px;width: 220px; margin-top: 1px;">
    </a>
   
    <div class="navbar-brand header-navbar-brand" data-width="fit" style="float: right; margin-top: 30px !important;">
      <li class="nav-item" style="display: inline !important;">
        <a style="color: #ffff;" href="{{('locale/en')}}"><i class="united kingdom flag"></i>EN</a>
      </li>
      <li class="nav-item" style="display: inline !important;">
        <a style="color: #ffff;" href="{{url('locale/jp')}}"><i class="japan flag"></i>JP</a>
      </li>
    </div>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light"  id="navbarSupportedContent">
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


      <div class="collapse navbar-collapse header-navbar-menu" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto" style="margin-left: 200px !important;">
          <li class="nav-item">
            <a class="nav-link" href="{{url('/')}}">Home</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             
             About Us

             
           </a>
           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
             @if(App::isLocale('en'))
             <a class="dropdown-item" href="{{url('greetings')}}">Greetings</a>
             <a class="dropdown-item" href="{{url('policies')}}">Policies</a>
             <a class="dropdown-item" href="{{url('about')}}">Company Profile</a>
             <a class="dropdown-item" href="{{url('/partner')}}">Partners</a>
             <a class="dropdown-item" href="{{url('/service')}}">Our Service</a>
             @elseif(App::isLocale('jp'))
             <a class="dropdown-item" href="{{url('greetings')}}">ご挨拶</a>
             <a class="dropdown-item" href="{{url('policies')}}">ポリシ</a>
             <a class="dropdown-item" href="{{url('about')}}">会社概要</a>
             <a class="dropdown-item" href="{{url('/partner')}}">パートナー</a>
             <a class="dropdown-item" href="{{url('/service')}}">サービス</a>
             @endif
           </div>
         </li>
         <li class="nav-item">
          <a class="nav-link" href="{{url('gallery')}}">Gallery</a>   
        </li>

        <li class="nav-item">
        
          <a class="nav-link" href="{{url('news')}}">News</a>
        
        </li>

        <li class="nav-item">
        
          <a class="nav-link" href="{{url('contact')}}">Contact</a>
         
        </li>

      </ul>

    </div>
  </nav>
</div>
</div>



<!-- 
<div class="container-fluid header-navbar-bg">
  <div class="container">
    <a style="margin-left: -30px;" >
      <img  src="{{url('/public/images/hibiku_logo.png')}}" alt="" style="height: 100px;width: 220px; margin-top: 1px;">
    </a>

    <div class="navbar-brand header-navbar-brand" data-width="fit" style="float: right; margin-top: 30px !important;">
      <li class="nav-item" style="display: inline !important;">
        <a style="color: #ffff;" href="{{('locale/en')}}"><i class="united kingdom flag"></i>EN</a>
      </li>
      <li class="nav-item" style="display: inline !important;">
        <a style="color: #ffff;" href="{{url('locale/jp')}}"><i class="japan flag"></i>JP</a>
      </li>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse header-navbar-menu" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto" style="margin-left: 200px !important;">
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}">Home</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle"   href="#" id="navbarDropdown" role="button" data-toggle="      dropdown" aria-haspopup="true" aria-expanded="false">

                  About Us

             
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                 @if(App::isLocale('en'))
                  <a class="dropdown-item" href="{{url('greetings')}}">Greetings</a>
                  <a class="dropdown-item" href="{{url('policies')}}">Policies</a>
                  <a class="dropdown-item" href="{{url('about')}}">Company Profile</a>
                  <a class="dropdown-item" href="{{url('/partner')}}">Partners</a>
                  <a class="dropdown-item" href="{{url('/service')}}">Our Service</a>
                  @elseif(App::isLocale('jp'))
                   <a class="dropdown-item" href="{{url('greetings')}}">ご挨拶</a>
                   <a class="dropdown-item" href="{{url('policies')}}">ポリシ</a>
                   <a class="dropdown-item" href="{{url('about')}}">会社概要</a>
                   <a class="dropdown-item" href="{{url('/partner')}}">パートナー</a>
                   <a class="dropdown-item" href="{{url('/service')}}">サービス</a>
                   @endif
              </div>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="{{url('gallery')}}">Gallery</a>   
            </li>

            <li class="nav-item">

              <a class="nav-link" href="{{url('news')}}">News</a>

            </li>

            <li class="nav-item">

              <a class="nav-link" href="{{url('contact')}}">Contact</a>

            </li>

        </ul>
      </div>
    </nav>
  </div>
</div> -->