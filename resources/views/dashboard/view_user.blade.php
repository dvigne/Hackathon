<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="description" content="Miminium Admin Template v.1">
  <meta name="author" content="Isna Nur Azis">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Miminium</title>

  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href={!! URL::asset('asset/css/bootstrap.min.css') !!}/>

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href={!! URL::asset('asset/css/plugins/font-awesome.min.css') !!}/>
  <link rel="stylesheet" type="text/css" href={!! URL::asset('asset/css/plugins/simple-line-icons.css') !!}/>
  <link rel="stylesheet" type="text/css" href={!! URL::asset('asset/css/plugins/mediaelementplayer.css') !!}/>
  <link rel="stylesheet" type="text/css" href={!! URL::asset('asset/css/plugins/animate.min.css') !!}/>
  <link rel="stylesheet" type="text/css" href={!! URL::asset('asset/css/plugins/icheck/skins/flat/red.css') !!}/>
  <link href={!! URL::asset('asset/css/style.css') !!} rel="stylesheet">
  <!-- end: Css -->

  <link rel="shortcut icon" href="asset/img/logomi.png">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

<body id="mimin" class="dashboard">
      <!-- start: Header -->
        <nav class="navbar navbar-default header navbar-fixed-top">
          <div class="col-md-12 nav-wrapper">
            <div class="navbar-header" style="width:100%;">
              <div class="opener-left-menu is-open">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
              </div>
                <a href="index.html" class="navbar-brand"> 
                 <b>LEARN Network Contractor Meetup</b>
                </a>
              <ul class="nav navbar-nav navbar-right user-nav">
                <li class="user-name"><span>{!! Auth::user()->first . " " . Auth::user()->last !!}</span></li>
                  <li class="dropdown avatar-dropdown">
                   <img src={!! URL::asset("asset/img/avatar.jpg") !!} class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                   <ul class="dropdown-menu user-dropdown">
                     <li><a href="#"><span class="fa fa-user"></span> My Profile</a></li>
                     <li><a href="#"><span class="fa fa-calendar"></span> My Calendar</a></li>
                     <li role="separator" class="divider"></li>
                     <li class="more">
                      <ul>
                        <li><a href=""><span class="fa fa-cogs"></span></a></li>
                        <li><a href=""><span class="fa fa-lock"></span></a></li>
                        <li><a href=""><span class="fa fa-power-off "></span></a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      <!-- end: Header -->

      <div class="container-fluid mimin-wrapper">
  
          <!-- start:Left Menu -->
            <div id="left-menu">
              <div class="sub-left-menu scroll">
                <ul class="nav nav-list">
                    <li class="active ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa-home fa"></span>HOME
                      </a>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa-diamond fa"></span>User View Layouts
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="topnav.html">Admin View</a></li>
                        <li><a href="boxed.html">Client View</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa-area-chart fa"></span>DataView
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="chartjs.html">Bar Graph</a></li>
                        <li><a href="morris.html">Line Graph</a></li>
                        <li><a href="flot.html">Pie Chart</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa fa-pencil-square"></span>Applications
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="appoverview.html"><b>Overview</b></a></li>
                        <li><a href="techapps.html">Tech Applications</a></li>
                        <li><a href="healthapps.html">Health Applications</a></li>
                        <li><a href="educationapps.html">Educational Applications</a></li>
                        <li><a href="scienceapps.html">Science Applications</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a href="calendar.html">
                         <span class="fa fa-calendar-o"></span>My Schedule
                      </a>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa fa-envelope-o"></span>Mail
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="mail-box.html">Inbox</a></li>
                        <li><a href="compose-mail.html">Compose Mail</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa fa-file-code-o"></span>Settings
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="forgotpass.html">Forgot Password</a></li>
                        <li><a href="login.html">SignIn</a></li>
                        <li><a href="reg.html">SignUp</a></li>
                        <li><a href="article-v1.html">Article v1</a></li>
                        <li><a href="search-v1.html">Search Result v1</a></li>
                        <li><a href="productgrid.html">Product Grid</a></li>
                        <li><a href="profile-v1.html">Profile v1</a></li>
                        <li><a href="invoice-v1.html">Invoice v1</a></li>
                      </ul>
                    </li>
                     <li class="ripple"><a class="tree-toggle nav-header"><span class="fa "></span> MultiLevel  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
                        <li><a href="view-mail.html">Level 1</a></li>
                        <li><a href="view-mail.html">Level 1</a></li>
                        <li class="ripple">
                          <a class="sub-tree-toggle nav-header">
                            <span class="fa fa-envelope-o"></span> Level 1
                            <span class="fa-angle-right fa right-arrow text-right"></span>
                          </a>
                          <ul class="nav nav-list sub-tree">
                            <li><a href="mail-box.html">Level 2</a></li>
                            <li><a href="compose-mail.html">Level 2</a></li>
                            <li><a href="view-mail.html">Level 2</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li><a href="credits.html">Credits</a></li>
                  </ul>
                </div>
            </div>
          <!-- end: Left Menu -->


          <!-- start: Content -->
          <div id="content" class="profile-v1">
             <div class="col-md-12 col-sm-12 profile-v1-wrapper">
                <div class="col-md-9  profile-v1-cover-wrap" style="padding-right:0px;">
                    <div class="profile-v1-pp">
                      <img src={!! URL::asset("asset/img/avatar.jpg") !!}/>
                      <h2>{!! $selected_user->first . " " . $selected_user->last !!}</h2>
                      <h4 style="color:white; padding:0px 0px 0px 20px;">{!! $selected_user->role !!}</h4>
                      <a href="/dashboard/profile/edit"><input type="button" class="btn btn-danger" value="Edit Profile" /></a>
                    </div>
                    <div class="col-md-12 profile-v1-cover">
                      <img src={!! URL::asset("asset/img/bg5.jpg") !!} class="img-responsive">
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 padding-0 profile-v1-right">
                    <div class="col-md-6 col-sm-4 profile-v1-right-wrap padding-0">
                      <div class="col-md-12 padding-0 sub-profile-v1-right text-center sub-profile-v1-right1">
                          <h1>51K</h1>
                          <p>Followers</p>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-4 profile-v1-right-wrap padding-0">
                        <div class="col-md-12 sub-profile-v1-right text-center sub-profile-v1-right2">
                           <h1>609</h1>
                           <p>Following</p>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-4 profile-v1-right-wrap padding-0">
                        <div class="col-md-12 sub-profile-v1-right text-center sub-profile-v1-right3">
                          <h1>82001</h1>
                          <p>Post</p>
                        </div>
                    </div>
                </div>
             </div>
             <div class="col-md-12 col-sm-12 profile-v1-body">
                <div class="col-md-12">
                   <div class="box-v5 panel">
                    <div class="panel-heading padding-0 bg-white border-none">
                        <textarea placeholder="what do you think?"></textarea>
                    </div>
                    <div class="panel-body">
                      <div class="col-md-12 padding-0">
                        <div style="float:right;" class="col-md-6 col-sm-6 col-xs-6 padding-0">
                          <button class="btn btn-round pull-right">
                            <span>SEND</span>
                            <span class="icon-arrow-right icons"></span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
             </div>
          </div>
          <!-- end: content -->


  
          <!-- start: right menu -->
          <!-- end: right menu -->
          
      </div>

      <!-- start: Mobile -->
      <div id="mimin-mobile" class="reverse">
        <div class="mimin-mobile-menu-list">
            <div class="col-md-12 sub-mimin-mobile-menu-list animated fadeInLeft">
                <ul class="nav nav-list">
                    <li class="active ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa-home fa"></span>HOME
                      </a>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa-diamond fa"></span>User View Layouts
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="topnav.html">Admin View</a></li>
                        <li><a href="boxed.html">Client View</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa-area-chart fa"></span>DataView
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="chartjs.html">Bar Graph</a></li>
                        <li><a href="morris.html">Line Graph</a></li>
                        <li><a href="flot.html">Pie Chart</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa fa-pencil-square"></span>Applications
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="appoverview.html"><b>Overview</b></a></li>
                        <li><a href="techapps.html">Tech Applications</a></li>
                        <li><a href="healthapps.html">Health Applications</a></li>
                        <li><a href="educationapps.html">Educational Applications</a></li>
                        <li><a href="scienceapps.html">Science Applications</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a href="calendar.html">
                         <span class="fa fa-calendar-o"></span>My Schedule
                      </a>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa fa-envelope-o"></span>Mail
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="mail-box.html">Inbox</a></li>
                        <li><a href="compose-mail.html">Compose Mail</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa fa-file-code-o"></span>Settings
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="forgotpass.html">Forgot Password</a></li>
                        <li><a href="login.html">SignIn</a></li>
                        <li><a href="reg.html">SignUp</a></li>
                        <li><a href="article-v1.html">Article v1</a></li>
                        <li><a href="search-v1.html">Search Result v1</a></li>
                        <li><a href="productgrid.html">Product Grid</a></li>
                        <li><a href="profile-v1.html">Profile v1</a></li>
                        <li><a href="invoice-v1.html">Invoice v1</a></li>
                      </ul>
                    </li>
                     <li class="ripple"><a class="tree-toggle nav-header"><span class="fa "></span> MultiLevel  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
                        <li><a href="view-mail.html">Level 1</a></li>
                        <li><a href="view-mail.html">Level 1</a></li>
                        <li class="ripple">
                          <a class="sub-tree-toggle nav-header">
                            <span class="fa fa-envelope-o"></span> Level 1
                            <span class="fa-angle-right fa right-arrow text-right"></span>
                          </a>
                          <ul class="nav nav-list sub-tree">
                            <li><a href="mail-box.html">Level 2</a></li>
                            <li><a href="compose-mail.html">Level 2</a></li>
                            <li><a href="view-mail.html">Level 2</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li><a href="credits.html">Credits</a></li>
                  </ul>
            </div>
        </div>       
      </div>
      <button id="mimin-mobile-menu-opener" class="animated rubberBand btn btn-circle btn-danger">
        <span class="fa fa-bars"></span>
      </button>
       <!-- end: Mobile -->

<!-- start: Javascript -->
<script src={!! URL::asset('asset/js/jquery.min.js') !!}></script>
<script src={!! URL::asset('asset/js/jquery.ui.min.js') !!}></script>
<script src={!! URL::asset('asset/js/bootstrap.min.js') !!}></script>


<!-- plugins -->
<script src={!! URL::asset('asset/js/plugins/icheck.min.js') !!}></script>
<script src={!! URL::asset('asset/js/plugins/moment.min.js') !!}></script>
<script src={!! URL::asset('asset/js/plugins/mediaelement-and-player.min.js') !!}></script>
<script src={!! URL::asset('asset/js/plugins/jquery.nicescroll.js') !!}></script>


<!-- custom -->
<script src={!! URL::asset('asset/js/main.js') !!}></script>
<script type="text/javascript">
  $(document).ready(function(){
   $('input').iCheck({
    checkboxClass: 'icheckbox_flat-red',
    radioClass: 'iradio_flat-red'
  });
   $('video,audio').mediaelementplayer({
            alwaysShowControls: true,
            videoVolume: 'vertical',
            features: ['playpause','progress','volume','fullscreen']
          });
 });
</script>
<!-- end: Javascript -->
</body>
</html>