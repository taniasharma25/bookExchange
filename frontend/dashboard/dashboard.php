<!-- =========================================================
* Paper Dashboard - v1.2.1
=========================================================

* Product Page: https://www.creative-tim.com/product/paper-dashboard
* Copyright 2019 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/paper-dashboard/blob/master/LICENSE.md)

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->

<!doctype html>
<html lang="en">

<!-- Mirrored from demos.creative-tim.com/bs3/paper-dashboard/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Jul 2024 08:36:20 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8" />
<link rel="apple-touch-icon" sizes="76x76" href="<?= SITE_URL?>frontend/dashboard/assets/img/apple-icon.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?= SITE_URL?>frontend/dashboard/assets/img/favicon.png">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>Paper Dashboard by Creative Tim</title>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
<meta name="viewport" content="width=device-width" />

<link rel="canonical" href="https://www.creative-tim.com/product/paper-dashboard" />

<meta name="keywords" content="bootstrap dashboard, creative tim, html dashboard, html css dashboard, web dashboard, paper design, bootstrap dashboard, bootstrap, css3 dashboard, bootstrap admin, paper bootstrap dashboard, frontend, responsive bootstrap dashboard">
<meta name="description" content="Paper Dashboard is a beautiful Bootstrap Admin Panel for your next project.">

<meta itemprop="name" content="Paper Dashboard by Creative Tim">
<meta itemprop="description" content="Paper Dashboard is a beautiful Bootstrap Admin Panel for your next project.">
<meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/43/original/opt_pd_thumbnail
  .jpg">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@creativetim">
<meta name="twitter:title" content="Paper Dashboard PRO by Creative Tim">
<meta name="twitter:description" content="Paper Dashboard is a beautiful Bootstrap Admin Panel for your next project.">
<meta name="twitter:creator" content="@creativetim">
<meta name="twitter:image" content="https://s3.amazonaws
  .com/creativetim_bucket/products/43/original/opt_pd_thumbnail.jpg">

<meta property="og:title" content="Paper Dashboard by Creative Tim" />
<meta property="og:type" content="article" />
<meta property="og:url" content="https://demos.creative-tim.com/paper-dashboard/dashboard.html" />
<meta property="og:image" content="https://s3.amazonaws
  .com/creativetim_bucket/products/43/original/opt_pd_thumbnail.jpg" />
<meta property="og:description" content="Paper Dashboard is a beautiful Bootstrap Admin Panel for your next project." />
<meta property="og:site_name" content="Creative Tim" />

<link href="<?= SITE_URL?>frontend/dashboard/assets/css/bootstrap.min.css" rel="stylesheet" />

<link href="<?= SITE_URL?>frontend/dashboard/assets/css/animate.min.css" rel="stylesheet" />

<link href="<?= SITE_URL?>frontend/dashboard/assets/css/paper-dashboard.css" rel="stylesheet" />

<link href="<?= SITE_URL?>frontend/dashboard/assets/css/demo.css" rel="stylesheet" />

<link href="../../../maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Muli:400,300" rel="stylesheet" type="text/css">
<link href="<?= SITE_URL?>frontend/dashboard/assets/css/themify-icons.css" rel="stylesheet">

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
          new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      '../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-NKDMSK6');</script>

</head>
<body>

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<div class="wrapper">
<div class="sidebar" data-background-color="white" data-active-color="danger">

<div class="sidebar-wrapper">
<div class="logo">
<a href="https://www.creative-tim.com/" class="simple-text">
Creative Tim
</a>
</div>
<ul class="nav">
<li class="active">
<a href="dashboard.html">
<i class="ti-panel"></i>
<p>Dashboard</p>
</a>
</li>
<li>
<a href="user.html">
<i class="ti-user"></i>
<p>User Profile</p>
</a>
</li>
<li>
<a href="table.html">
<i class="ti-view-list-alt"></i>
<p>Table List</p>
</a>
</li>
<li>
<a href="typography.html">
<i class="ti-text"></i>
<p>Typography</p>
</a>
</li>
<li>
<a href="icons.html">
<i class="ti-pencil-alt2"></i>
<p>Icons</p>
</a>
</li>
<li>
<a href="maps.html">
<i class="ti-map"></i>
<p>Maps</p>
</a>
</li>
<li>
<a href="notifications.html">
<i class="ti-bell"></i>
<p>Notifications</p>
</a>
</li>
<li class="active-pro">
<a href="upgrade.html">
<i class="ti-export"></i>
<p>Upgrade to PRO</p>
</a>
</li>
</ul>
</div>
</div>
<div class="main-panel">
<nav class="navbar navbar-default">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar bar1"></span>
<span class="icon-bar bar2"></span>
<span class="icon-bar bar3"></span>
</button>
<a class="navbar-brand" href="#">Dashboard</a>
</div>
<div class="collapse navbar-collapse">
<ul class="nav navbar-nav navbar-right">
<li>
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<i class="ti-panel"></i>
<p>Stats</p>
</a>
</li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<i class="ti-bell"></i>
<p class="notification">5</p>
<p>Notifications</p>
<b class="caret"></b>
</a>
<ul class="dropdown-menu">
<li><a href="#">Notification 1</a></li>
<li><a href="#">Notification 2</a></li>
<li><a href="#">Notification 3</a></li>
<li><a href="#">Notification 4</a></li>
<li><a href="#">Another notification</a></li>
</ul>
</li>
<li>
<a href="#">
<i class="ti-settings"></i>
<p>Settings</p>
</a>
</li>
</ul>
</div>
</div>
</nav>
<div class="content">
<div class="container-fluid">
<div class="row">
<div class="col-lg-3 col-sm-6">
<div class="card">
<div class="content">
<div class="row">
<div class="col-xs-5">
<div class="icon-big icon-warning text-center">
<i class="ti-server"></i>
</div>
</div>
<div class="col-xs-7">
<div class="numbers">
<p>Capacity</p>
105GB
</div>
</div>
</div>
<div class="footer">
<hr/>
<div class="stats">
<i class="ti-reload"></i> Updated now
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="card">
<div class="content">
<div class="row">
<div class="col-xs-5">
<div class="icon-big icon-success text-center">
<i class="ti-wallet"></i>
</div>
</div>
<div class="col-xs-7">
<div class="numbers">
<p>Revenue</p>
$1,345
</div>
</div>
</div>
<div class="footer">
<hr/>
<div class="stats">
<i class="ti-calendar"></i> Last day
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="card">
<div class="content">
<div class="row">
<div class="col-xs-5">
<div class="icon-big icon-danger text-center">
<i class="ti-pulse"></i>
</div>
</div>
<div class="col-xs-7">
<div class="numbers">
<p>Errors</p>
23
</div>
</div>
</div>
<div class="footer">
<hr/>
<div class="stats">
<i class="ti-timer"></i> In the last hour
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="card">
<div class="content">
<div class="row">
<div class="col-xs-5">
<div class="icon-big icon-info text-center">
<i class="ti-twitter-alt"></i>
</div>
</div>
<div class="col-xs-7">
<div class="numbers">
<p>Followers</p>
+45
</div>
</div>
</div>
<div class="footer">
<hr/>
<div class="stats">
<i class="ti-reload"></i> Updated now
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="header">
<h4 class="title">Users Behavior</h4>
<p class="category">24 Hours performance</p>
</div>
<div class="content">
<div id="chartHours" class="ct-chart"></div>
<div class="footer">
<div class="chart-legend">
<i class="fa fa-circle text-info"></i> Open
<i class="fa fa-circle text-danger"></i> Click
<i class="fa fa-circle text-warning"></i> Click Second Time
</div>
<hr>
<div class="stats">
<i class="ti-reload"></i> Updated 3 minutes ago
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="card">
<div class="header">
<h4 class="title">Email Statistics</h4>
<p class="category">Last Campaign Performance</p>
</div>
<div class="content">
<div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>
<div class="footer">
<div class="chart-legend">
<i class="fa fa-circle text-info"></i> Open
<i class="fa fa-circle text-danger"></i> Bounce
<i class="fa fa-circle text-warning"></i> Unsubscribe
</div>
<hr>
<div class="stats">
<i class="ti-timer"></i> Campaign sent 2 days ago
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="card ">
<div class="header">
<h4 class="title">2015 Sales</h4>
<p class="category">All products including Taxes</p>
</div>
<div class="content">
<div id="chartActivity" class="ct-chart"></div>
<div class="footer">
<div class="chart-legend">
<i class="fa fa-circle text-info"></i> Tesla Model S
<i class="fa fa-circle text-warning"></i> BMW 5 Series
</div>
<hr>
<div class="stats">
<i class="ti-check"></i> Data information certified
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<footer class="footer">
<div class="container-fluid">
<nav class="pull-left">
<ul>
<li>
<a href="https://www.creative-tim.com/">
Creative Tim
</a>
</li>
<li>
<a href="https://www.creative-tim.com/blog">
Blog
</a>
</li>
<li>
<a href="https://www.creative-tim.com/license">
Licenses
</a>
</li>
</ul>
</nav>
<div class="copyright pull-right">
&copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com/">Creative Tim</a>
</div>
</div>
</footer>
</div>
</div>
<div class="fixed-plugin">
<div class="dropdown show-dropdown">
<a href="#" data-toggle="dropdown">
<i class="fa fa-cog fa-2x"> </i>
</a>
<ul class="dropdown-menu">
<li class="header-title">Sidebar Background</li>
<li class="adjustments-line text-center">
<a href="javascript:void(0)" class="switch-trigger background-color">
<span class="badge filter badge-white active" data-color="white"></span>
<span class="badge filter badge-black" data-color="black"></span>
</a>
</li>
<li class="header-title">Sidebar Active Color</li>
<li class="adjustments-line text-center">
<a href="javascript:void(0)" class="switch-trigger active-color">
<span class="badge filter badge-primary" data-color="primary"></span>
<span class="badge filter badge-info" data-color="info"></span>
<span class="badge filter badge-success" data-color="success"></span>
<span class="badge filter badge-warning" data-color="warning"></span>
<span class="badge filter badge-danger active" data-color="danger"></span>
</a>
</li>
<li class="button-container">
<div class>
<a href="http://www.creative-tim.com/product/paper-dashboard" target="_blank" class="btn btn-info btn-block btn-fill">Download for Free</a>
</div>
</li>
<li class="header-title">Want More Components?</li>
<li class="button-container">
<div class>
<a href="http://www.creative-tim.com/product/paper-dashboard-pro?ref=pd-free-upgrade-live" target="_blank" class="btn btn-danger btn-block btn-fill">Get PRO Version!</a>
</div>
</li>
<li class="header-title">Thank you for sharing!</li>
<li class="button-container">
<button id="twitter" class="btn btn-social btn-twitter btn-round"><i class="fa fa-twitter"></i> </button>
<button id="facebook" class="btn btn-social btn-facebook btn-round"><i class="fa fa-facebook-square"></i></button>
</li>
</ul>
</div>
</div>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"89d58c1a5e131b7d","b":1,"version":"2024.4.1","token":"1b7cbb72744b40c580f8633c6b62637e"}' crossorigin="anonymous"></script>
</body>

<script src="<?= SITE_URL?>frontend/dashboard/assets/js/jquery.min.js" type="text/javascript"></script>
<script src="<?= SITE_URL?>frontend/dashboard/assets/js/bootstrap.min.js" type="text/javascript"></script>

<script src="<?= SITE_URL?>frontend/dashboard/assets/js/bootstrap-checkbox-radio.js"></script>

<script src="<?= SITE_URL?>frontend/dashboard/assets/js/chartist.min.js"></script>

<script src="<?= SITE_URL?>frontend/dashboard/assets/js/bootstrap-notify.js"></script>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<script src="<?= SITE_URL?>frontend/dashboard/assets/js/paper-dashboard.js"></script>

<script src="<?= SITE_URL?>frontend/dashboard/assets/js/demo.js"></script>
<script src="<?= SITE_URL?>frontend/dashboard/assets/js/jquery.sharrre.js"></script>
<script>
    // Facebook Pixel Code Don't Delete
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
        n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
        document,'script','../../../connect.facebook.net/en_US/fbevents.js');

    try{
        fbq('init', '111649226022273');
        fbq('track', "PageView");

    }catch(err) {
        console.log('Facebook Track Error:', err);
    }
</script>
<noscript>
  <img height="1" width="1" style="display:none"
       src="https://www.facebook.com/tr?id=111649226022273&amp;ev=PageView&amp;noscript=1"
    />
</noscript>
<script type="text/javascript">
    $(document).ready(function(){

        demo.initChartist();

        $.notify({
            icon: 'ti-gift',
            message: "Welcome to <b>Paper Dashboard</b> - a beautiful Bootstrap Admin Panel for your next project."

        },{
            type: 'success',
            timer: 4000
        });

    });
</script>

<!-- Mirrored from demos.creative-tim.com/bs3/paper-dashboard/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Jul 2024 08:36:29 GMT -->
</html>
