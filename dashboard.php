<!DOCTYPE html>
<html lang="en">
<?php 
	session_start();
    $conn = new mysqli('localhost', 'root', '', 'rentalcar');

	// if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
	// 	// If not logged in, redirect to login page
	// 	header("Location: admin_login.php");
	// 	exit();
	// }
	
?>
<!-- Mirrored from seantheme.com/studio/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Aug 2024 06:29:44 GMT -->
<head>
<meta charset="utf-8">
<title>Studio | Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content>
<meta name="author" content>

<link href="assets/css/vendor.min.css" rel="stylesheet">
<link href="assets/css/app.min.css" rel="stylesheet">

</head>
<body>

<div id="app" class="app">

<div id="header" class="app-header">

<div class="mobile-toggler">
<button type="button" class="menu-toggler" data-toggle="sidebar-mobile">
<span class="bar"></span>
<span class="bar"></span>
</button>
</div>


<div class="brand">
<div class="desktop-toggler">
<button type="button" class="menu-toggler" data-toggle="sidebar-minify">
<span class="bar"></span>
<span class="bar"></span>
</button>
</div>
<a href="index.html" class="brand-logo">
<img src="assets/img/logo.png" class="invert-dark" alt height="20">
</a>
</div>


<div class="menu">
<form class="menu-search" method="POST" name="header_search_form">
<div class="menu-search-icon"><i class="fa fa-search"></i></div>
<div class="menu-search-input">
<input type="text" class="form-control" placeholder="Search menu...">
</div>
</form>
<div class="menu-item dropdown">
<a href="#" data-bs-toggle="dropdown" data-display="static" class="menu-link">
<div class="menu-icon"><i class="fa fa-bell nav-icon"></i></div>
<div class="menu-label">3</div>
</a>
<div class="dropdown-menu dropdown-menu-end dropdown-notification">
<h6 class="dropdown-header text-body-emphasis mb-1">Notifications</h6>
<a href="#" class="dropdown-notification-item">
<div class="dropdown-notification-icon">
<i class="fa fa-receipt fa-lg fa-fw text-success"></i>
</div>
<div class="dropdown-notification-info">
<div class="title">Your store has a new order for 2 items totaling $1,299.00</div>
<div class="time">just now</div>
</div>
<div class="dropdown-notification-arrow">
<i class="fa fa-chevron-right"></i>
</div>
</a>
<a href="#" class="dropdown-notification-item">
<div class="dropdown-notification-icon">
<i class="far fa-user-circle fa-lg fa-fw text-muted"></i>
</div>
<div class="dropdown-notification-info">
<div class="title">3 new customer account is created</div>
<div class="time">2 minutes ago</div>
</div>
<div class="dropdown-notification-arrow">
<i class="fa fa-chevron-right"></i>
</div>
</a>
<a href="#" class="dropdown-notification-item">
<div class="dropdown-notification-icon">
<img src="assets/img/icon/android.svg" alt width="26">
</div>
<div class="dropdown-notification-info">
<div class="title">Your android application has been approved</div>
<div class="time">5 minutes ago</div>
</div>
<div class="dropdown-notification-arrow">
<i class="fa fa-chevron-right"></i>
</div>
</a>
<a href="#" class="dropdown-notification-item">
<div class="dropdown-notification-icon">
<img src="assets/img/icon/paypal.svg" alt width="26">
</div>
<div class="dropdown-notification-info">
<div class="title">Paypal payment method has been enabled for your store</div>
<div class="time">10 minutes ago</div>
</div>
<div class="dropdown-notification-arrow">
<i class="fa fa-chevron-right"></i>
</div>
</a>
<div class="p-2 text-center mb-n1">
<a href="#" class="text-body-emphasis text-opacity-50 text-decoration-none">See all</a>
</div>
</div>
</div>
<div class="menu-item dropdown">
<a href="#" data-bs-toggle="dropdown" data-display="static" class="menu-link">
<div class="menu-img online">
<img src="assets/img/user/user.jpg" alt class="ms-100 mh-100 rounded-circle">
</div>
<div class="menu-text"><span class="__cf_email__" data-cfemail="81ebeee9eff2ece8f5e9c1f2f5f4e5e8eeafe2eeec">[email&#160;protected]</span></div>
</a>
<div class="dropdown-menu dropdown-menu-end me-lg-3">
<a class="dropdown-item d-flex align-items-center" href="profile.html">Edit Profile <i class="fa fa-user-circle fa-fw ms-auto text-body text-opacity-50"></i></a>
<a class="dropdown-item d-flex align-items-center" href="email_inbox.html">Inbox <i class="fa fa-envelope fa-fw ms-auto text-body text-opacity-50"></i></a>
<a class="dropdown-item d-flex align-items-center" href="calendar.html">Calendar <i class="fa fa-calendar-alt fa-fw ms-auto text-body text-opacity-50"></i></a>
<a class="dropdown-item d-flex align-items-center" href="settings.html">Setting <i class="fa fa-wrench fa-fw ms-auto text-body text-opacity-50"></i></a>
<div class="dropdown-divider"></div>
<a class="dropdown-item d-flex align-items-center" href="page_login.html">Log Out <i class="fa fa-toggle-off fa-fw ms-auto text-body text-opacity-50"></i></a>
</div>
</div>
</div>

</div>


<div id="sidebar" class="app-sidebar">
<div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
<div class="menu">
<div class="menu-header">Navigation</div>


<div class="menu-item active">
<a href="index.html" class="menu-link">
<span class="menu-icon"><i class="fa fa-laptop"></i></span>
<span class="menu-text">Dashboard</span>
</a>
</div>


<a href="page_products.php" class="text-decoration-none">
<div class="menu-item">
<a href="page_products.php" class="menu-link">
<span class="menu-icon"><i class="fa fa-qrcode"></i></span>
<span class="menu-text">car rental services</span>
</a>
</div>
</a>

<a href="logoutAdmin.php" class="text-decoration-none">
<div class="menu-item">
<a href="logoutAdmin.php" class="menu-link">
<span class="menu-icon"><i class="fa fa-qrcode"></i></span>
<span class="menu-text">logout</span>
</a>
</div>
</a>

<div class="p-3 px-4 mt-auto hide-on-minified">
<a href="documentation/index.html" class="btn btn-secondary d-block w-100 fw-600 rounded-pill">
<i class="fa fa-code-branch me-1 ms-n1 opacity-5"></i> Documentation
</a>
</div>
</div>
</div>

<button class="app-sidebar-mobile-backdrop" data-dismiss="sidebar-mobile"></button>
</div>


<div id="content" class="app-content">
<h1 class="page-header mb-3">
<?php  
echo '<h1>Welcome '.$_SESSION['username'].'</h1>';
?>
</h1>

<div class="row">

<div class="col-xl-6 mb-3">

<div class="card h-100 overflow-hidden">

<div class="card-img-overlay d-block d-lg-none bg-blue rounded"></div>


<div class="card-img-overlay d-none d-md-block bg-blue rounded mb-n1 mx-n1" style="background-image: url(assets/img/bg/wave-bg.png); background-position: right bottom; background-repeat: no-repeat; background-size: 100%;"></div>


<div class="card-img-overlay d-none d-md-block bottom-0 top-auto">
<div class="row">
<div class="col-md-8 col-xl-6"></div>
<div class="col-md-4 col-xl-6 mb-n2">
<img src="assets/img/page/dashboard.svg" alt class="d-block ms-n3 mb-5" style="max-height: 310px">
</div>
</div>
</div>


<div class="card-body position-relative text-white text-opacity-70">

<div class="row">

<div class="col-md-8">

<div class="d-flex">
<div class="me-auto">
<h5 class="text-white text-opacity-80 mb-3">Weekly Earning</h5>
<h3 class="text-white mt-n1 mb-1">$2,999.80</h3>
<p class="mb-1 text-white text-opacity-60 text-truncate">
<i class="fa fa-caret-up"></i> <b>32%</b> increase compare to last week
</p>
</div>
</div>
<hr class="bg-white bg-opacity-75 mt-3 mb-3">

<div class="row">
<div class="col-6 col-lg-5">
<div class="mt-1">
<i class="fa fa-fw fa-shopping-bag fs-28px text-black text-opacity-50"></i>
</div>
<div class="mt-1">
<div>Store Sales</div>
<div class="fw-600 text-white">$1,629.80</div>
</div>
</div>
<div class="col-6 col-lg-5">
<div class="mt-1">
<i class="fa fa-fw fa-retweet fs-28px text-black text-opacity-50"></i>
</div>
<div class="mt-1">
<div>Referral Sales</div>
<div class="fw-600 text-white">$700.00</div>
</div>
</div>
</div>
<hr class="bg-white bg-opacity-75 mt-3 mb-3">
<div class="mt-3 mb-2">
<a href="#" class="btn btn-yellow btn-rounded btn-sm ps-5 pe-5 pt-2 pb-2 fs-14px fw-600"><i class="fa fa-wallet me-2 ms-n2"></i> Withdraw money</a>
</div>
<p class="fs-12px">
It usually takes 3-5 business days for transferring the earning to your bank account.
</p>
</div>


<div class="col-md-4 d-none d-md-block" style="min-height: 380px;"></div>

</div>

</div>

</div>

</div>


<div class="col-xl-6">
<div class="row">
<div class="col-sm-6">
<div class="card mb-3 overflow-hidden fs-13px border-0 bg-gradient-custom-orange" style="min-height: 199px;">
<div class="card-img-overlay mb-n4 me-n4 d-flex" style="bottom: 0; top: auto;">
<img src="assets/img/icon/order.svg" alt class="ms-auto d-block mb-n3" style="max-height: 105px">
</div>
<div class="card-body position-relative">
<h5 class="text-white text-opacity-80 mb-3 fs-16px">Chauffeur driven small cars</h5>
<h3 class="text-white mt-n1">56</h3>
<div class="progress bg-black bg-opacity-50 mb-2" style="height: 6px">
<div class="progrss-bar progress-bar-striped bg-white" style="width: 80%"></div>
</div>
<div class="text-white text-opacity-80 mb-4"><i class="fa fa-caret-up"></i> 16% increase <br>compare to last week</div>
<div><a href="#" class="text-white d-flex align-items-center text-decoration-none">View report <i class="fa fa-chevron-right ms-2 text-white text-opacity-50"></i></a></div>
</div>
</div>
<div class="card mb-3 overflow-hidden fs-13px border-0 bg-gradient-custom-teal" style="min-height: 199px;">
<div class="card-img-overlay mb-n4 me-n4 d-flex" style="bottom: 0; top: auto;">
<img src="assets/img/icon/visitor.svg" alt class="ms-auto d-block mb-n3" style="max-height: 105px">
</div>
<div class="card-body position-relative">
<h5 class="text-white text-opacity-80 mb-3 fs-16px">Chauffeur driven large/SUV cars
</h5>
<h3 class="text-white mt-n1">60.5k</h3>
<div class="progress bg-black bg-opacity-50 mb-2" style="height: 6px">
<div class="progrss-bar progress-bar-striped bg-white" style="width: 50%"></div>
</div>
<div class="text-white text-opacity-80 mb-4"><i class="fa fa-caret-up"></i> 33% increase <br>compare to last week</div>
<div><a href="#" class="text-white d-flex align-items-center text-decoration-none">View report <i class="fa fa-chevron-right ms-2 text-white text-opacity-50"></i></a></div>
</div>
</div>
</div>


<div class="col-sm-6">
<div class="card mb-3 overflow-hidden fs-13px border-0 bg-gradient-custom-pink" style="min-height: 199px;">
<div class="card-img-overlay mb-n4 me-n4 d-flex" style="bottom: 0; top: auto;">
<img src="assets/img/icon/email.svg" alt class="ms-auto d-block mb-n3" style="max-height: 105px">
</div>
<div class="card-body position-relative">
<h5 class="text-white text-opacity-80 mb-3 fs-16px">Chauffeur driven mid sized cars</h5>
<h3 class="text-white mt-n1">30</h3>
<div class="progress bg-black bg-opacity-50 mb-2" style="height: 6px">
<div class="progrss-bar progress-bar-striped bg-white" style="width: 80%"></div>
</div>
<div class="text-white text-opacity-80 mb-4"><i class="fa fa-caret-down"></i> 5% decrease <br>compare to last week</div>
<div><a href="#" class="text-white d-flex align-items-center text-decoration-none">View report <i class="fa fa-chevron-right ms-2 text-white text-opacity-50"></i></a></div>
</div>
</div>
<div class="card mb-3 overflow-hidden fs-13px border-0 bg-gradient-custom-indigo" style="min-height: 199px;">
<div class="card-img-overlay mb-n4 me-n4 d-flex" style="bottom: 0; top: auto;">
<img src="assets/img/icon/browser.svg" alt class="ms-auto d-block mb-n3" style="max-height: 105px">
</div>
<div class="card-body position-relative">
<h5 class="text-white text-opacity-80 mb-3 fs-16px">Page Views</h5>
<h3 class="text-white mt-n1">320.4k</h3>
<div class="progress bg-black bg-opacity-50 mb-2" style="height: 6px">
<div class="progrss-bar progress-bar-striped bg-white" style="width: 80%"></div>
</div>
<div class="text-white text-opacity-80 mb-4"><i class="fa fa-caret-up"></i> 20% increase <br>compare to last week</div>
<div><a href="#" class="text-white d-flex align-items-center text-decoration-none">View report <i class="fa fa-chevron-right ms-2 text-white text-opacity-50"></i></a></div>
</div>
</div>

</div>
</div>
</div>
</div>


<div class="row">

<div class="col-xl-6">

<div class="row">

<div class="col-sm-6 mb-3 d-flex flex-column">

<div class="card mb-3 flex-1">






</div>




</div>

</div>




</div>


<div class="row">

<div class="col-xl-6 mb-3">




<a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>


<div class="theme-panel">
<a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
<div class="theme-panel-content">
<ul class="theme-list clearfix">
<li><a href="javascript:;" class="bg-red" data-theme="theme-red" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Red" data-original-title title>&nbsp;</a></li>
<li><a href="javascript:;" class="bg-pink" data-theme="theme-pink" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Pink" data-original-title title>&nbsp;</a></li>
<li><a href="javascript:;" class="bg-orange" data-theme="theme-orange" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Orange" data-original-title title>&nbsp;</a></li>
<li><a href="javascript:;" class="bg-yellow" data-theme="theme-yellow" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Yellow" data-original-title title>&nbsp;</a></li>
<li><a href="javascript:;" class="bg-lime" data-theme="theme-lime" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Lime" data-original-title title>&nbsp;</a></li>
<li><a href="javascript:;" class="bg-green" data-theme="theme-green" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Green" data-original-title title>&nbsp;</a></li>
<li><a href="javascript:;" class="bg-teal" data-theme="theme-teal" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Teal" data-original-title title>&nbsp;</a></li>
<li><a href="javascript:;" class="bg-cyan" data-theme="theme-cyan" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Aqua" data-original-title title>&nbsp;</a></li>
<li class="active"><a href="javascript:;" class="bg-blue" data-theme data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Default" data-original-title title>&nbsp;</a></li>
<li><a href="javascript:;" class="bg-purple" data-theme="theme-purple" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Purple" data-original-title title>&nbsp;</a></li>
<li><a href="javascript:;" class="bg-indigo" data-theme="theme-indigo" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Indigo" data-original-title title>&nbsp;</a></li>
<li><a href="javascript:;" class="bg-gray-600" data-theme="theme-gray-600" data-click="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Gray" data-original-title title>&nbsp;</a></li>
</ul>
<hr class="mb-0">
<div class="row mt-10px pt-3px">
<div class="col-9 control-label text-body-emphasis fw-bold">
<div>Dark Mode <span class="badge bg-theme text-theme-color ms-1 position-relative py-4px px-6px" style="top: -1px">NEW</span></div>
<div class="lh-sm fs-13px fw-semibold">
<small class="text-body-emphasis opacity-50">
Adjust the appearance to reduce glare and give your eyes a break.
</small>
</div>
</div>
<div class="col-3 d-flex">
<div class="form-check form-switch ms-auto mb-0 mt-2px">
<input type="checkbox" class="form-check-input" name="app-theme-dark-mode" id="appThemeDarkMode" value="1">
<label class="form-check-label" for="appThemeDarkMode">&nbsp;</label>
</div>
</div>
</div>
</div>
</div>

</div>


<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/vendor.min.js" type="0913596ab4f2ecc065ab39da-text/javascript"></script>
<script src="assets/js/app.min.js" type="0913596ab4f2ecc065ab39da-text/javascript"></script>


<script src="assets/plugins/apexcharts/dist/apexcharts.min.js" type="0913596ab4f2ecc065ab39da-text/javascript"></script>
<script src="assets/js/demo/dashboard.demo.js" type="0913596ab4f2ecc065ab39da-text/javascript"></script>


<script async src="https://www.googletagmanager.com/gtag/js?id=G-Y3Q0VGQKY3" type="0913596ab4f2ecc065ab39da-text/javascript"></script>
<script type="0913596ab4f2ecc065ab39da-text/javascript">
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-Y3Q0VGQKY3');
	</script>
<script src="../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="0913596ab4f2ecc065ab39da-|49" defer></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"8afd74217c175277","version":"2024.7.0","r":1,"serverTiming":{"name":{"cfL4":true}},"token":"4db8c6ef997743fda032d4f73cfeff63","b":1}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from seantheme.com/studio/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Aug 2024 06:30:08 GMT -->
</html>
