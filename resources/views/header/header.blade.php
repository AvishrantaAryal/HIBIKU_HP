<div class="container-fluid header-navbar-bg">
  <div class="container">
    <a style="margin-left: -30px;" >
      <img  src="{{url('/public/images/hibiku_logo.png')}}" alt="" style="height: 100px;width: 220px;">
    </a>

    <div class="navbar-brand header-navbar-brand"  data-width="fit" style="float: right; margin-top: 30px !important;">
      <li class="nav-item" style="display: inline !important;">
        <a href="{{('locale/en')}}"><i class="united kingdom flag"></i>EN</a>
      </li>
      <li class="nav-item" style="display: inline !important;">
        <a href="{{url('locale/jp')}}"><i class="japan flag"></i>JP</a>
      </li>
      </div>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">


      <div class="collapse navbar-collapse header-navbar-menu" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto" style="margin-left: 200px !important;">
          <li class="nav-item">
            @if(App::isLocale('en'))
              <a class="nav-link" href="{{url('/')}}">Home</a>
              @elseif(App::isLocale('jp'))
              <a class="nav-link" href="{{url('/')}}">ホーム</a>
              @endif
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               @if(App::isLocale('en'))
              About Us
              @elseif(App::isLocale('jp'))
              私たちに関しては
              @endif
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
               @if(App::isLocale('en'))
              <a class="dropdown-item" href="{{url('about')}}">Company Profile</a>
              <a class="dropdown-item" href="{{url('/partner')}}">Partners</a>
              @elseif(App::isLocale('jp'))
              <a class="dropdown-item" href="{{url('about')}}">会社概要</a>
              <a class="dropdown-item" href="{{url('/partner')}}">パートナー</a>
              @endif
            </div>
          </li>
          <li class="nav-item">
              @if(App::isLocale('en'))
            <a class="nav-link" href="{{url('gallery')}}">Gallery</a>
            @elseif(App::isLocale('jp'))
             <a class="nav-link" href="{{url('gallery')}}">ギャラリー</a>
            @endif
          </li>
          <li class="nav-item">
            @if(App::isLocale('en'))
            <a class="nav-link" href="{{url('service')}}">Service</a>
            @elseif(App::isLocale('jn'))
            <a class="nav-link" href="{{url('service')}}">サービス</a>
            @endif
            
          </li>
          <li class="nav-item">
            @if(App::isLocale('en'))
            <a class="nav-link" href="{{url('news')}}">News</a>
            @elseif(App::isLocale('jp'))
             <a class="nav-link" href="{{url('news')}}">ニュース</a>
            @endif
          </li>
          
          <li class="nav-item">
            @if(App::isLocale('en'))
            <a class="nav-link" href="{{url('contact')}}">Contact</a>
            @elseif(App::isLocale('jp'))
            <a class="nav-link" href="{{url('contact')}}">連絡先</a>
            @endif
          </li>
          
        </ul>

      </div>
    </nav>
  </div>
</div>

