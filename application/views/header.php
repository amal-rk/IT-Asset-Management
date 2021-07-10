<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Asset Manager</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="<?php echo base_url();?>/assets/css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="<?php echo base_url();?>/assets/css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="<?php echo base_url();?>/assets/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS-->

<!-- side nav css file -->
<link href='<?php echo base_url();?>/assets/css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
<!-- //side nav css file -->
 
 <!-- js-->
<script src="<?php echo base_url();?>/assets/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

<!-- chart -->
<script src="<?php echo base_url();?>/assets/js/Chart.js"></script>
<!-- //chart -->

<!-- Metis Menu -->
<script src="<?php echo base_url();?>/assets/js/metisMenu.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/custom.js"></script>
<link href="<?php echo base_url();?>/assets/css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
<style>
#chartdiv {
  width: 100%;
  height: 295px;
}
</style>
<!--pie-chart --><!-- index page sales reviews visitors pie chart -->
<script src="<?php echo base_url();?>/assets/js/pie-chart.js" type="text/javascript"></script>
 <script type="text/javascript">

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#2dde98',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#8e43e7',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ffc168',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

           
        });

    </script>
<!-- //pie-chart --><!-- index page sales reviews visitors pie chart -->

  <!-- requried-jsfiles-for owl -->
          <link href="<?php echo base_url();?>/assets/css/owl.carousel.css" rel="stylesheet">
          <script src="<?php echo base_url();?>/assets/js/owl.carousel.js"></script>
            <script>
              $(document).ready(function() {
                $("#owl-demo").owlCarousel({
                  items : 3,
                  lazyLoad : true,
                  autoPlay : true,
                  pagination : true,
                  nav:true,
                });
              });
            </script>
          <!-- //requried-jsfiles-for owl -->
</head> 
<body class="cbp-spmenu-push">
  <div class="main-content">
  <div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
    <!--left-fixed -navigation-->
    <aside class="sidebar-left">
      <nav class="navbar navbar-inverse">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <h1><a class="navbar-brand" href="<?php echo base_url();?>/AdminController/index"><span class="fa fa-area-chart"></span>IT ASSET<span class="dashboard_text">dashboard</span></a></h1>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="sidebar-menu">
              <li class="header">MAIN NAVIGATION</li>
              <li class="treeview">
                <a href="<?php echo site_url();?>/AdminController/dashboard">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
              </li>
        <li class="treeview">
                <a href="#">
                <i class="fa fa-laptop"></i>
                <span>ADD ITEM</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="<?php echo site_url();?>/AdminController/software"><i class="fa fa-angle-left pull-right"></i>SOFTWARE</a></li>
                  <li class="treeview">
        <a href="#">
          <i class=""></i>
          <span>HARDWARE</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo site_url();?>/AdminController/computer"><i class="fa fa-angle-right"></i>COMPUTER</a></li>
          <li><a href="<?php echo site_url();?>/AdminController/monitor"><i class="fa fa-angle-right"></i>MONITOR</a></li>
          <li><a href="<?php echo site_url();?>/AdminController/mouse"><i class="fa fa-angle-right"></i>MOUSE</a></li>
          <li><a href="<?php echo site_url();?>/AdminController/printer"><i class="fa fa-angle-right"></i>PRINTER</a></li>
          <li><a href="<?php echo site_url();?>/AdminController/keyboard"><i class="fa fa-angle-right"></i>KEYBOARD</a></li>
        </ul>
        <li class="treeview">
          <a href="<?php echo site_url();?>/AdminController/viewitems">
          <i class="fa fa-dashboard"></i> <span>View Items</span>
          </a>
      </li>
          <li class="treeview">
            <a href="#">
            <i class="fa fa-angle-left pull-right"></i>
              <li class="treeview">
                <a href="<?php echo site_url();?>/AdminController/userinformation">
                <i class="fa fa-laptop"></i>
                <span>User information</span>
              <li class="treeview">
                <a href="#">
                <i class="fa fa-envelope"></i> <span>Update</span>
                <i class="fa fa-angle-left pull-right"></i><small class="label pull-right label-info1">08</small><span class="label label-primary1 pull-right">02</span></a>
                <ul class="treeview-menu">
                  <li><a href="inbox.html"><i class="fa fa-angle-right"></i>Hardware</a></li>
                  <li><a href="compose.html"><i class="fa fa-angle-right"></i>Other inventories</a></li>
                </ul>
              </li>
            
            </ul>
          </div>
          <!-- /.navbar-collapse -->
      </nav>
    </aside>
  </div>
    <!--left-fixed -navigation-->
    
    <!-- header-starts -->
    <div class="sticky-header header-section ">
      <div class="header-left">
        <!--toggle button start-->
        <button id="showLeftPush"><i class="fa fa-bars"></i></button>
        <!--toggle button end-->
        <div class="profile_details_left"><!--notifications of menu start -->
          <ul class="nofitications-dropdown">
            <li class="dropdown head-dpdn">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">4</span></a>
              <ul class="dropdown-menu">
                <li>
                  <div class="notification_header">
                    <h3>You have 3 new messages</h3>
                  </div>
                </li>
                <li><a href="#">
                   <div class="user_img"><img src="<?php echo base_url();?>/assets/images/1.jpg" alt=""></div>
                   <div class="notification_desc">
                  <p>Lorem ipsum dolor amet</p>
                  <p><span>1 hour ago</span></p>
                  </div>
                   <div class="clearfix"></div> 
                </a></li>
                <li class="odd"><a href="#">
                  <div class="user_img"><img src="<?php echo base_url();?>/assets/images/4.jpg" alt=""></div>
                   <div class="notification_desc">
                  <p>Lorem ipsum dolor amet </p>
                  <p><span>1 hour ago</span></p>
                  </div>
                  <div class="clearfix"></div>  
                </a></li>
                <li><a href="#">
                   <div class="user_img"><img src="<?php echo base_url();?>/assets/images/3.jpg" alt=""></div>
                   <div class="notification_desc">
                  <p>Lorem ipsum dolor amet </p>
                  <p><span>1 hour ago</span></p>
                  </div>
                   <div class="clearfix"></div> 
                </a></li>
                <li><a href="#">
                   <div class="user_img"><img src="<?php echo base_url();?>/assets/images/2.jpg" alt=""></div>
                   <div class="notification_desc">
                  <p>Lorem ipsum dolor amet </p>
                  <p><span>1 hour ago</span></p>
                  </div>
                   <div class="clearfix"></div> 
                </a></li>
                <li>
                  <div class="notification_bottom">
                    <a href="#">See all messages</a>
                  </div> 
                </li>
              </ul>
            </li>
            <li class="dropdown head-dpdn">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">4</span></a>
              <ul class="dropdown-menu">
                <li>
                  <div class="notification_header">
                    <h3>You have 3 new notification</h3>
                  </div>
                </li>
                <li><a href="#">
                  <div class="user_img"><img src="<?php echo base_url();?>/assets/images/4.jpg" alt=""></div>
                   <div class="notification_desc">
                  <p>Lorem ipsum dolor amet</p>
                  <p><span>1 hour ago</span></p>
                  </div>
                  <div class="clearfix"></div>  
                 </a></li>
                 <li class="odd"><a href="#">
                  <div class="user_img"><img src="<?php echo base_url();?>/assets/images/1.jpg" alt=""></div>
                   <div class="notification_desc">
                  <p>Lorem ipsum dolor amet </p>
                  <p><span>1 hour ago</span></p>
                  </div>
                   <div class="clearfix"></div> 
                 </a></li>
                 <li><a href="#">
                  <div class="user_img"><img src="<?php echo base_url();?>/assets/images/3.jpg" alt=""></div>
                   <div class="notification_desc">
                  <p>Lorem ipsum dolor amet </p>
                  <p><span>1 hour ago</span></p>
                  </div>
                   <div class="clearfix"></div> 
                 </a></li>
                <li><a href="#">
                   <div class="user_img"><img src="<?php echo base_url();?>/assets/images/2.jpg" alt=""></div>
                   <div class="notification_desc">
                  <p>Lorem ipsum dolor amet </p>
                  <p><span>1 hour ago</span></p>
                  </div>
                   <div class="clearfix"></div> 
                </a></li>
                 <li>
                  <div class="notification_bottom">
                    <a href="#">See all notifications</a>
                  </div> 
                </li>
              </ul>
            </li> 
            <li class="dropdown head-dpdn">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">8</span></a>
              <ul class="dropdown-menu">
                <li>
                  <div class="notification_header">
                    <h3>You have 8 pending task</h3>
                  </div>
                </li>
                <li><a href="#">
                  <div class="task-info">
                    <span class="task-desc">Database update</span><span class="percentage">40%</span>
                    <div class="clearfix"></div>  
                  </div>
                  <div class="progress progress-striped active">
                    <div class="bar yellow" style="width:40%;"></div>
                  </div>
                </a></li>
                <li><a href="#">
                  <div class="task-info">
                    <span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
                     <div class="clearfix"></div> 
                  </div>
                  <div class="progress progress-striped active">
                     <div class="bar green" style="width:90%;"></div>
                  </div>
                </a></li>
                <li><a href="#">
                  <div class="task-info">
                    <span class="task-desc">Mobile App</span><span class="percentage">33%</span>
                    <div class="clearfix"></div>  
                  </div>
                   <div class="progress progress-striped active">
                     <div class="bar red" style="width: 33%;"></div>
                  </div>
                </a></li>
                <li><a href="#">
                  <div class="task-info">
                    <span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
                     <div class="clearfix"></div> 
                  </div>
                  <div class="progress progress-striped active">
                     <div class="bar  blue" style="width: 80%;"></div>
                  </div>
                </a></li>
                <li>
                  <div class="notification_bottom">
                    <a href="#">See all pending tasks</a>
                  </div> 
                </li>
              </ul>
            </li> 
          </ul>
          <div class="clearfix"> </div>
        </div>
        <!--notification menu end -->
        <div class="clearfix"> </div>
      </div>
      <div class="header-right">
        
        
        <!--search-box-->
        <div class="search-box">
          <form class="input">
            <input class="sb-search-input input__field--madoka" placeholder="Search..." type="search" id="input-31" />
            <label class="input__label" for="input-31">
              <svg class="graphic" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
              </svg>
            </label>
          </form>
        </div><!--//end-search-box-->
        
        <div class="profile_details">   
          <ul>
            <li class="dropdown profile_details_drop">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <div class="profile_img"> 
                  <span class="prfil-img"><img src="<?php echo base_url();?>/assets/images/2.jpg" alt=""> </span> 
                  <div class="user-name">
                    <p>Admin Name</p>
                    <span>Administrator</span>
                  </div>
                  <i class="fa fa-angle-down lnr"></i>
                  <i class="fa fa-angle-up lnr"></i>
                  <div class="clearfix"></div>  
                </div>  
              </a>
              <ul class="dropdown-menu drp-mnu">
                <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
                <li> <a href="#"><i class="fa fa-user"></i> My Account</a> </li> 
                <li> <a href="#"><i class="fa fa-suitcase"></i> Profile</a> </li> 
                <li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="clearfix"> </div>       
      </div>
      <div class="clearfix"> </div> 
    </div>
    <!-- //header-ends -->