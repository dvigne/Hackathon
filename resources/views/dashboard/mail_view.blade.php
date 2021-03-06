<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<meta name="description" content="Miminium Admin Template v.1">
	<meta name="author" content="Isna Nur Azis">
	<meta name="keyword" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Email</title>
 
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
                 <b>MIMIN</b>
                </a>

              <ul class="nav navbar-nav navbar-right user-nav">
                <li class="user-name"><span>Akihiko Avaron</span></li>
                  <li class="dropdown avatar-dropdown">
                   <img src={!! URL::asset('asset/img/avatar.jpg') !!} class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
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
                    <li><div class="left-bg"></div></li>
                    <li class="time">
                      <h1 class="animated fadeInLeft">21:00</h1>
                      <p class="animated fadeInRight">Sat,October 1st 2029</p>
                    </li>
                    <li class="active ripple">
                      <a class="tree-toggle nav-header"><span class="fa-home fa"></span> Dashboard 
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                          <li><a href="dashboard-v1.html">Dashboard v.1</a></li>
                          <li><a href="dashboard-v2.html">Dashboard v.2</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa-diamond fa"></span> Layout
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="topnav.html">Top Navigation</a></li>
                        <li><a href="boxed.html">Boxed</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa-area-chart fa"></span> Charts
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="chartjs.html">ChartJs</a></li>
                        <li><a href="morris.html">Morris</a></li>
                        <li><a href="flot.html">Flot</a></li>
                        <li><a href="sparkline.html">SparkLine</a></li>
                      </ul>
                    </li>
                    <li class="ripple"><a class="tree-toggle nav-header">
                    <span class="fa fa-pencil-square"></span> Ui Elements  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
                        <li><a href="color.html">Color</a></li>
                        <li><a href="weather.html">Weather</a></li>
                        <li><a href="typography.html">Typography</a></li>
                        <li><a href="icons.html">Icons</a></li>
                        <li><a href="buttons.html">Buttons</a></li>
                        <li><a href="media.html">Media</a></li>
                        <li><a href="panels.html">Panels & Tabs</a></li>
                        <li><a href="notifications.html">Notifications & Tooltip</a></li>
                        <li><a href="badges.html">Badges & Label</a></li>
                        <li><a href="progress.html">Progress</a></li>
                        <li><a href="sliders.html">Sliders</a></li>
                        <li><a href="timeline.html">Timeline</a></li>
                        <li><a href="modal.html">Modals</a></li>
                      </ul>
                    </li>
                    <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-check-square-o"></span> Forms  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
                        <li><a href="formelement.html">Form Element</a></li>
                        <li><a href="#">Wizard</a></li>
                        <li><a href="#">File Upload</a></li>
                        <li><a href="#">Text Editor</a></li>
                      </ul>
                    </li>
                    <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-table"></span> Tables  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
                        <li><a href="datatables.html">Data Tables</a></li>
                        <li><a href="handsontable.html">handsontable</a></li>
                        <li><a href="tablestatic.html">Static</a></li>
                      </ul>
                    </li>
                    <li class="ripple"><a href="calendar.html"><span class="fa fa-calendar-o"></span>Calendar</a></li>
                    <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-envelope-o"></span> Mail <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
                        <li><a href="mail-box.html">Inbox</a></li>
                        <li><a href="compose-mail.html">Compose Mail</a></li>
                        <li><a href="view-mail.html">View Mail</a></li>
                      </ul>
                    </li>
                    <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-file-code-o"></span> Pages  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
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
      		<div id="content">
            <div class="col-md-12" style="padding:20px;">
              <div class="col-md-12 mail-wrapper">
                    
                  <div class="col-md-12 padding-0">
                      <div class="col-md-3 mail-left">
                          <div class="col-md-12 mail-left-header">
                                <center>
                                <input type="button" class="btn btn-danger btncompose-mail" value="Compose Mail"/>
                                </center>
                          </div>
                          <div class="col-md-12 mail-left-content">
                               <ul class="nav">
                                  <li></li>
                                  <li><h5>Folder</h5></li>
                                  <li>
                                    <a href="" class="active"><span class="fa fa-inbox"></span> Inbox (20)</a>
                                  </li>
                                  <li>
                                    <a href=""><span class="fa fa-send-o"></span> Send Mail</a>
                                  </li>
                                  <li>
                                    <a href=""><span class="fa fa-folder"></span> Drafts</a>
                                  </li>
                                  <li>
                                    <a href=""><span class="fa fa-lock"></span> Important</a>
                                  </li>
                                  <li>
                                    <a href=""><span class="fa fa-star"></span> Favorite</a>
                                  </li>
                                  <li>
                                    <a href=""><span class="fa fa-fire"></span> Spam</a>
                                  </li>
                                  <li>
                                    <a href=""><span class="fa fa-trash"></span> Trash</a>
                                  </li>
                                  <li><hr/></li>
                                  <li><h5>Categories</h5></li>
                                  <li>
                                    <a href=""><div class="fa fa-circle text-primary"></div> Social</a>
                                  </li>
                                   <li>
                                    <a href=""><div class="fa fa-circle text-success"></div> Advertising</a>
                                  </li>
                                   <li>
                                    <a href=""><div class="fa fa-circle text-info"></div> Forum</a>
                                  </li>
                                   <li>
                                    <a href=""><div class="fa fa-circle text-warning"></div> News</a>
                                  </li>
                                  <li>
                                    <a href=""><span class="fa fa-circle text-danger"></span> Document</a>
                                  </li>
                                  <li><hr/></li>
                                  <li><h5>Tags</h5></li>
                                  <li>
                                    <ul class="tags">
                                        <li><a href=""><span class="fa fa-tag"></span> Hacking</a></li>
                                        <li><a href=""><span class="fa fa-tag"></span> Phising</a></li>
                                        <li><a href=""><span class="fa fa-tag"></span> Cracking</a></li>
                                        <li><a href=""><span class="fa fa-tag"></span> CSRF</a></li>
                                        <li><a href=""><span class="fa fa-tag"></span> XSS</a></li>
                                    </ul>
                                  </li>
                              </ul>
                          </div>
                      </div>
                      <div class="col-md-9 mail-right">
                          <div class="col-md-12 mail-right-header">
                            <div class="col-md-10 col-sm-10 padding-0">
                                 <div class="input-group searchbox-v1">
                                  <span class="input-group-addon  border-none box-shadow-none" id="basic-addon1">
                                    <span class="fa fa-search"></span>
                                  </span>
                                  <input type="text" class="txtsearch border-none box-shadow-none" placeholder="Search Email..." aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 padding-0 text-right mail-right-options">
                                 <div class="btn-group pull-right right-option-v1">
                                    <i class="fa fa-ellipsis-v right-option-v1-icon" data-toggle="dropdown"></i>
                                    <ul class="dropdown-menu" role="menu">
                                      <li><a href="#">Action</a></li>
                                      <li><a href="#">Another action</a></li>
                                      <li><a href="#">Something else here</a></li>
                                      <li class="divider"></li>
                                      <li><a href="#">Separated link</a></li>
                                    </ul>
                                  </div>
                            </div>
                          </div>
                          <div class="col-md-12 col-sm-12 mail-right-tool">
                              <ul class="nav">
                                  <li>
                                    <input type="checkbox" class="icheck" name="checkbox1" />
                                  </li>
                                  <li>
                                    <a href=""><span class="fa fa-eye"></span></a>
                                  </li>
                                  <li>
                                    <a href=""><span class="fa fa-star"></span></a>
                                  </li>
                                  <li>
                                    <a href=""><span class="fa fa-lock"></span></a>
                                  </li>
                                  <li>
                                    <a href=""><span class="fa fa-folder"></span></a>
                                  </li>
                                  <li>
                                    <a href=""><span class="fa fa-fire"></span></a>
                                  </li>
                                  <li>
                                    <a href=""><span class="fa fa-trash"></span></a>
                                  </li>
                                  <li class="nav navbar-right" >
                                      <ul class="nav">
                                        <li> <a href=""><span class="fa fa-angle-left"></span></a></li>
                                        <li> <a href="" class="btn-info"><span class="fa fa-angle-right"></span></a></li>
                                      </ul>
                                  </li>
                              </ul>
                          </div>
                          <div class="col-md-12 mail-right-content">
                              <table class="table table-hover">
                                
                                  <p> You have no messages to display</p>
                              </table>
                          </div>
                      </div>
                  </div>

              </div>
            </div>
      		</div>
          <!-- end: Content -->
      
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
                        <span class="fa-home fa"></span>Dashboard 
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                          <li><a href="dashboard-v1.html">Dashboard v.1</a></li>
                          <li><a href="dashboard-v2.html">Dashboard v.2</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa-diamond fa"></span>Layout
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="topnav.html">Top Navigation</a></li>
                        <li><a href="boxed.html">Boxed</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa-area-chart fa"></span>Charts
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="chartjs.html">ChartJs</a></li>
                        <li><a href="morris.html">Morris</a></li>
                        <li><a href="flot.html">Flot</a></li>
                        <li><a href="sparkline.html">SparkLine</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa fa-pencil-square"></span>Ui Elements
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="color.html">Color</a></li>
                        <li><a href="weather.html">Weather</a></li>
                        <li><a href="typography.html">Typography</a></li>
                        <li><a href="icons.html">Icons</a></li>
                        <li><a href="buttons.html">Buttons</a></li>
                        <li><a href="media.html">Media</a></li>
                        <li><a href="panels.html">Panels & Tabs</a></li>
                        <li><a href="notifications.html">Notifications & Tooltip</a></li>
                        <li><a href="badges.html">Badges & Label</a></li>
                        <li><a href="progress.html">Progress</a></li>
                        <li><a href="sliders.html">Sliders</a></li>
                        <li><a href="timeline.html">Timeline</a></li>
                        <li><a href="modal.html">Modals</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                       <span class="fa fa-check-square-o"></span>Forms
                       <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="formelement.html">Form Element</a></li>
                        <li><a href="#">Wizard</a></li>
                        <li><a href="#">File Upload</a></li>
                        <li><a href="#">Text Editor</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa fa-table"></span>Tables
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="datatables.html">Data Tables</a></li>
                        <li><a href="handsontable.html">handsontable</a></li>
                        <li><a href="tablestatic.html">Static</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a href="calendar.html">
                         <span class="fa fa-calendar-o"></span>Calendar
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
                        <li><a href="view-mail.html">View Mail</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa fa-file-code-o"></span>Pages
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
      (function(jQuery){
           $('input').iCheck({
              checkboxClass: 'icheckbox_flat-red',
              radioClass: 'iradio_flat-red'
            });
        })(jQuery);
     </script>
  <!-- end: Javascript -->
  </body>
</html>