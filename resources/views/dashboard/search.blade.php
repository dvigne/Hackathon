<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<meta name="description" content="Miminium Admin Template v.1">
	<meta name="author" content="Isna Nur Azis">
	<meta name="keyword" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LEARN</title>
 
    <!-- start: Css -->
    <link rel="stylesheet" type="text/css" href="/asset/css/bootstrap.min.css">

      <!-- plugins -->
      <link rel="stylesheet" type="text/css" href={!! URL::asset('asset/css/plugins/font-awesome.min.css') !!}/>
      <link rel="stylesheet" type="text/css" href={!! URL::asset('asset/css/plugins/simple-line-icons.css') !!}/>
      <link rel="stylesheet" type="text/css" href={!! URL::asset('asset/css/plugins/animate.min.css') !!}/>
      <link rel="stylesheet" type="text/css" href={!! URL::asset('asset/css/plugins/fullcalendar.min.css') !!}/>
	<link href={!! URL::asset('asset/css/style.css') !!} rel="stylesheet">
	<!-- end: Css -->

	<link rel="shortcut icon" href={!! URL::asset('/asset/img/logomi.png') !!}>
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

              <ul class="nav navbar-nav search-nav">
                <li>
                   <div class="search">
                    <span class="fa fa-search icon-search" style="font-size:23px;"></span>
                    <div class="form-group form-animate-text">
                      <form role="form" method="POST" action="/dashboard/search">
                      {!! csrf_field() !!}
                      <input name="search" type="text" class="form-text" required>
                      <span class="bar"></span>
                      <label class="label-search">Click me to <b>Search</b> </label>
                      </form>
                    </div>
                  </div>
                </li>
              </ul>

              <ul class="nav navbar-nav navbar-right user-nav">
                <li class="user-name"><span>{!! Auth::user()->first . " " . Auth::user()->last !!}</span></li>
                  <li class="dropdown avatar-dropdown">
                   <img src="asset/img/avatar.jpg" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                   <ul class="dropdown-menu user-dropdown">
                     <li><a href="/dashboard/profile"><span class="fa fa-user"></span> My Profile</a></li>
                     <li><a href="#"><span class="fa fa-calendar"></span> My Schedule</a></li>
                     <li role="separator" class="divider"></li>
                     <li class="more">
                      <ul>
                        <li><a href=""><span class="fa fa-cogs"></span></a></li>
                        <li><a href="/logout"><span class="fa fa-power-off "></span></a></li>
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
                    <li><div class="left-bg"></div></li>
                    <li class="time">
                      <h1 class="animated fadeInLeft">21:00</h1>
                      <p class="animated fadeInRight">Sat,October 1st 2029</p>
                    </li>
                    <li class="active ripple">
                      <a class="tree-toggle nav-header"><span class="fa-home fa"></span> HOME
                      </a>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa-area-chart fa"></span> DataView
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="chartjs.html">Bar Chart</a></li>
                        <li><a href="morris.html">Line Graph</a></li>
                        <li><a href="flot.html">Pie Chart</a></li>
                      </ul>
                    </li>
                    <li class="ripple"><a class="tree-toggle nav-header">
                    <span class="fa fa-pencil-square"></span> Applications  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
                        <li><a href="appoverview.html"><b>Overview</b></a></li>
                        <li><a href="techapps.html">Tech Applications</a></li>
                        <li><a href="healthapps.html">Health Applications</a></li>
                        <li><a href="educationapps.html">Educational Applications</a></li>
                        <li><a href="scienceapps.html">Science Applications</a></li>
                      </ul>
                    </li>
                    <li class="ripple"><a href="calendar.html"><span class="fa fa-calendar-o"></span> My Schedule</a></li>
                    <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-envelope-o"></span> Mail <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
                        <li><a href="mail-box.html">Inbox</a></li>
                        <li><a href="compose-mail.html">Compose Mail</a></li>
                      </ul>
                     <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa-diamond fa"></span> User View Layouts
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="topnav.html">Admin View</a></li>
                        <li><a href="boxed.html">Client View</a></li>
                      </ul>
                    </li>
                    </li>
                    <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-file-code-o"></span> Settings <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
                        <li><a href="forgotpass.html">Forgot Password</a></li>
                        <li><a href="login.html">SignIn</a></li>
                        <li><a href="reg.html">SignUp</a></li>
                      </ul>
                    </li>
                      </ul>
                    </li>
                  </ul>
                </div>
            </div>
          <!-- end: Left Menu -->

  		
          <!-- start: content -->
            <div id="content">
                <div class="panel">
                  <div class="panel-body">
                      <div class="col-md-6 col-sm-12">
                        <h3 class="animated fadeInLeft">{!! "Hey, " . Auth::user()->first . "." !!}</h3>
                        <p class="animated fadeInDown">{!! "Profile Created " . Auth::user()->created_at->diffForHumans() !!}</p>
                    </div>
                  </div>                    
                </div>

                <div class="col-md-12 top-20 padding-0">
              <div class="col-md-12">
                <div class="panel">
                  <div class="panel-body">
                  <div class="col-md-12 padding-0" style="padding-bottom:20px;">
                  <div class="responsive-table">
                      
                    <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>First</th>
                        <th>Last</th>
                        <th>Email</th>
                        <th>Specialty</th>
                      </tr>
                    </thead>
                    <tbody>
                    @if($results->count() > 0)
                      @foreach($results as $people)
                        <tr>
                          <th>{!! $people->first !!}</th>
                          <th>{!! $people->last !!}</th>
                          <th>{!! $people->email !!}</th>
                          <th>{!! $people->role !!}</th>
                        </tr>
                      @endforeach
                    @else
                      <p>No Results Found</p>
                    @endif
                    </tbody>
                  </table>
                  </div>
                  <div class="col-md-6" style="padding-top:20px;">
                    <span>{!! "showing " . $results->count() . " of " . $results->total() . " items" !!}</span>
                  </div>
                  <div class="col-md-6">
                        {!! $results->links(); !!}
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
    <script src={!! URL::asset('asset/js/plugins/moment.min.js') !!}></script>
    <script src={!! URL::asset('asset/js/plugins/fullcalendar.min.js') !!}></script>
    <script src={!! URL::asset('asset/js/plugins/jquery.nicescroll.js') !!}></script>
    <script src={!! URL::asset('asset/js/plugins/jquery.vmap.min.js') !!}></script>
    <script src={!! URL::asset('asset/js/plugins/maps/jquery.vmap.world.js') !!}></script>
    <script src={!! URL::asset('asset/js/plugins/jquery.vmap.sampledata.js') !!}></script>
    <script src={!! URL::asset('asset/js/plugins/chart.min.js') !!}></script>


    <!-- custom -->
     <script src={!! URL::asset('asset/js/main.js') !!}></script>
     <script type="text/javascript" src={!! URL::asset('js/dashboard.js') !!}></script>
  <!-- end: Javascript -->
  </body>
</html>