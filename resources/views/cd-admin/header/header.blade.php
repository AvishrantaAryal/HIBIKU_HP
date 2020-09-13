<header class="main-header">
    <!-- Logo -->
    <a href="{{url('cd-admin/dashboard')}}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->

        <span class="logo-mini"><b>HIBIKU_HP</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>HIBIKU_HP</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-brand header-navbar-brand" style="margin:0px !important; ">
              <li class="nav-item" style="display: inline !important;">
                <a style="color: #ffffff !important;" href="{{url('locale/en')}}"><i class="united kingdom flag"></i>EN |</a>
            </li>
            <li class="nav-item" style="display: inline !important;">
               <a style="color: #ffffff !important;" href="{{url('locale/jp')}}"><i class="japan flag"></i>JP</a>
           </li>
       </div>



       <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="{{url('public/images/5.jpg')}}" class="user-image" alt="User Image">
                    <span class="hidden-xs">HIBIKU_HP</span>
                </a>
                <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header">
                        <img src="{{url('public/images/5.jpg')}}" class="img-circle" alt="User Image">

                        <p>

                            {{Auth::user()->name}}

                                <small>{{Auth::user()->role}}</small>
                        </p>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">

                        <div class="pull-right">
                            <a href="{{route('logout')}}" class="btn btn-danger btn-flat">Sign out</a>
                        </div>
                    </li>
                </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
                <!-- <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li> -->
            </ul>
        </div>
    </nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
@if(App::isLocale('en'))
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">


        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li><a href="{{url('/cd-admin/dashboard')}}"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i> <span>Admin</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    {{-- <li class="active"><a href="{{url('/add-new-admin')}}"><i class="fa fa-circle-o"></i>Add New Admin</a></li> --}}
                    <li><a href="{{url('/view-all-admin')}}"><i class="fa fa-circle-o"></i>View All Admin</a></li>
                </ul>
            </li>

            
            <li class="header">About</li>
            
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-home"></i> <span>About</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                  <!--   <li class="active"><a href="{{url('/cd-admin/add-about')}}"><i class="fa fa-circle-o"></i>Add About</a></li> -->
                    <li><a href="{{url('/cd-admin/view-all-about')}}"><i class="fa fa-circle-o"></i>View About </a></li>
                </ul>
            </li>

         
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-info"></i> <span>Company Profile</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/cd-admin/view-company-profile')}}"><i class="fa fa-circle-o"></i>View Company Profile </a></li>
                </ul>
            </li>

             
            
    <!--         <li class="treeview">
                <a href="#">
                    <i class="fa fa-group"></i> <span>Partner</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                                        <li><a href="{{url('/cd-admin/add-partner')}}"><i class="fa fa-circle-o"></i>Add Partner Partner</a></li>
                    <li><a href="{{url('/cd-admin/view-partner')}}"><i class="fa fa-circle-o"></i>View Partner</a></li>
                </ul>
            </li> -->


            
             
            
            

            <li class="header">Gallery</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-picture-o"></i> <span>Gallery</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('/album-add')}}"><i class="fa fa-circle-o"></i>Add Album</a></li>
                    <li><a href="{{url('/album-view')}}"><i class="fa fa-circle-o"></i>View Album </a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-picture-o"></i> <span>Carousel</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('/cd-admin/add-carousel')}}"><i class="fa fa-circle-o"></i>Add New Carousel</a></li>
                    <li><a href="{{url('/cd-admin/view-all-carousel')}}"><i class="fa fa-circle-o"></i>View All Carousel</a></li>
                </ul>
            </li>


            <li class="header">News</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-copy"></i> <span>News</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('cd-admin/add-news')}}"><i class="fa fa-circle-o"></i>Add New News</a></li>
                    <li><a href="{{url('/cd-admin/view-all-news')}}"><i class="fa fa-circle-o"></i>View All News </a></li>
                </ul>
            </li>

            <li class="header">Service</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-cog"></i> <span>Service</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('cd-admin/add-service')}}"><i class="fa fa-circle-o"></i>Add New Service</a></li>
                    <li><a href="{{url('/cd-admin/view-all-service')}}"><i class="fa fa-circle-o"></i>View All Service </a></li>
                </ul>
            </li>



              <li class="header">Message</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-envelope"></i> <span>Message</span>

                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                 
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('/viewcontact')}}"><i class="fa fa-circle-o"></i>View Inbox</a></li>
                    <li><a href="{{url('/replies')}}"><i class="fa fa-circle-o"></i>View Reply</a></li>
                </ul>
            </li>



            <li class="header">Others</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-cog"></i> <span>SEO</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">

                    <li><a href="{{url('/seo-view')}}"><i class="fa fa-circle-o"></i>View All SEO </a></li>
                </ul>
            </li>





        </ul>
    </section>
    <!-- /.sidebar -->
</aside>


@elseif(App::isLocale('jp'))
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">


        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">メインナビゲーション</li>
            <li><a href="{{url('/cd-admin/dashboard')}}"><i class="fa fa-home"></i> <span>ダッシュボード</span></a></li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i> <span>管理者</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    {{-- <li class="active"><a href="{{url('/add-new-admin')}}"><i class="fa fa-circle-o"></i>Add New Admin</a></li> --}}
                    <li><a href="{{url('/view-all-admin')}}"><i class="fa fa-circle-o"></i>すべての管理者を表示</a></li>
                </ul>
            </li>

            
            <li class="header">約</li>
            
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-info"></i> <span>約</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                  
                    <li><a href="{{url('/cd-admin/view-all-about')}}"><i class="fa fa-circle-o"></i>について </a></li>
                </ul>
            </li>

           
            
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-info"></i> <span>会社概要</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/cd-admin/view-company-profile')}}"><i class="fa fa-circle-o"></i>会社のプロフィールを見る</a></li>
                </ul>
            </li>

            
            
           <!--  <li class="treeview">
                <a href="#">
                    <i class="fa fa-group"></i> <span>パートナー</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                                        <li><a href="{{url('/cd-admin/add-partner')}}"><i class="fa fa-circle-o"></i>新しいパートナーを追加</a></li>
                    <li><a href="{{url('/cd-admin/view-partner')}}"><i class="fa fa-circle-o"></i>すべてのパートナーを表示</a></li>
                </ul>
            </li>

 -->
           
            
            


            <li class="header">ギャラリー</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-picture-o"></i> <span>ギャラリー</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('/album-add')}}"><i class="fa fa-circle-o"></i>アルバムを追加</a></li>
                    <li><a href="{{url('/album-view')}}"><i class="fa fa-circle-o"></i>アルバムを見る </a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-picture-o"></i> <span>カルーセル</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('/cd-admin/add-carousel')}}"><i class="fa fa-circle-o"></i>新しいカルーセルを追加</a></li>
                    <li><a href="{{url('/cd-admin/view-all-carousel')}}"><i class="fa fa-circle-o"></i>カルーセルをすべて表示</a></li>
                </ul>
            </li>



            <li class="header">ニュース</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-copy"></i> <span>ニュース</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('cd-admin/add-news')}}"><i class="fa fa-circle-o"></i>新しいニュースを追加</a></li>
                    <li><a href="{{url('/cd-admin/view-all-news')}}"><i class="fa fa-circle-o"></i>すべてのニュースを表示 </a></li>
                </ul>
            </li>


            <li class="header">サービス</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-cog"></i> <span>サービス</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('cd-admin/add-service')}}"><i class="fa fa-circle-o"></i>新しいサービスを追加</a></li>
                    <li><a href="{{url('/cd-admin/view-all-service')}}"><i class="fa fa-circle-o"></i>すべてのサービスを表示</a></li>
                </ul>
            </li>

              <li class="header">メッセージ<</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-envelope"></i> <span> メッセージ< </span>

                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                 
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('/viewcontact')}}"><i class="fa fa-circle-o"></i>受信トレイを表示</a></li>
                    <li><a href="{{url('/replies')}}"><i class="fa fa-circle-o"></i>返信を表示</a></li>
                </ul>
            </li>




            <li class="header">その他</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-cog"></i> <span>SEO</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">

                    <li><a href="{{url('/seo-view')}}"><i class="fa fa-circle-o"></i>すべてのSEOを表示 </a></li>
                </ul>
            </li>





        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
@endif
