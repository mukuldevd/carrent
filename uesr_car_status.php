<!DOCTYPE html>
<html lang="en">
<!--  -->

<?php 
session_start();

$conn = new mysqli('localhost', 'root', '', 'rentalcar');



// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (!isset($_SESSION['userid'])) {
    // If the user is not logged in, redirect to the login page
    header('Location: user_login.php');
    exit();
}


// SQL query to fetch data
$sql = "SELECT * FROM `carprice` WHERE `STATUS` = 1";
// $sql = "
//     SELECT c.carid, c.carname, c.cartype, c.price, c.services, c.created_at, c.updated_at, c.status
//     FROM carprice c
//     LEFT JOIN usercarstatus ucs ON c.carid = ucs.carid
//     WHERE c.status = 1 AND ucs.carid IS NULL
// ";

$result = $conn->query($sql);
?>

<!-- Mirrored from seantheme.com/studio/page_products.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Aug 2024 06:31:37 GMT -->
<head>
<meta charset="utf-8">
<title>Studio | Products</title>
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
<div class="menu-text"><span class="__cf_email__" data-cfemail="2b414443455846425f436b585f5e4f424405484446">[email&#160;protected]</span></div>
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


<a href="uesr_car_status.php" class="text-decoration-none">
<div class="menu-item">
<a href="uesr_car_status.php" class="menu-link">
<span class="menu-icon"><i class="fa fa-qrcode"></i></span>
<span class="menu-text">Car Status</span>
</a>
</div>
</a>

<a href="YourBookingDetails.php" class="text-decoration-none">
<div class="menu-item">
<a href="YourBookingDetails.php" class="menu-link">
<span class="menu-icon"><i class="fa fa-qrcode"></i></span>
<span class="menu-text">Your Booking Details</span>
</a>
</div>
</a>

<a href="logout.php" class="text-decoration-none">
<div class="menu-item">
<a href="widgets.html" class="menu-link">
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
<div class="d-flex align-items-center mb-3">
<div>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="#">PAGES</a></li>
<li class="breadcrumb-item active">PRODUCTS</li>
</ul>
<h1 class="page-header mb-0">Products</h1>
</div>
<div class="ms-auto">
<a href="" class="btn btn-theme"><i class="fa fa-plus-circle fa-fw me-1"></i> </a>
</div>
</div>
<div class="mb-sm-4 mb-3 d-sm-flex">
<div class="mt-sm-0 mt-2"><a href="#" class="text-body text-decoration-none"><i class="fa fa-download fa-fw me-1 text-muted"></i> Export</a></div>
<div class="ms-sm-4 mt-sm-0 mt-2"><a href="#" class="text-body text-decoration-none"><i class="fa fa-upload fa-fw me-1 text-muted"></i> Import</a></div>
<div class="ms-sm-4 mt-sm-0 mt-2 dropdown-toggle">
<a href="#" data-bs-toggle="dropdown" class="text-body text-decoration-none">More Actions</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="#">Action</a>
<a class="dropdown-item" href="#">Another action</a>
<a class="dropdown-item" href="#">Something else here</a>
<div role="separator" class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Separated link</a>
</div>
</div>
</div>
<div class="card">
<ul class="nav nav-tabs nav-tabs-v2 px-4">
<li class="nav-item me-3"><a href="#allTab" class="nav-link active px-2" data-bs-toggle="tab">All</a></li>
<li class="nav-item me-3"><a href="#publishedTab" class="nav-link px-2" data-bs-toggle="tab">Published</a></li>
<li class="nav-item me-3"><a href="#expiredTab" class="nav-link px-2" data-bs-toggle="tab">Expired</a></li>
<li class="nav-item me-3"><a href="#deletedTab" class="nav-link px-2" data-bs-toggle="tab">Deleted</a></li>
</ul>
<div class="tab-content p-4">
<div class="tab-pane fade show active" id="allTab">

<div class="input-group mb-4">
<button class="btn btn-default dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter products &nbsp;</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="#">Action</a>
<a class="dropdown-item" href="#">Another action</a>
<a class="dropdown-item" href="#">Something else here</a>
<div role="separator" class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Separated link</a>
</div>
<div class="flex-fill position-relative z-1">
<div class="input-group">
<div class="input-group-text position-absolute top-0 bottom-0 bg-none border-0" style="z-index: 1020;">
<i class="fa fa-search opacity-5"></i>
</div>
<input type="text" class="form-control ps-35px" placeholder="Search products">
</div>
</div>
</div>


<div class="table-responsive">
<table class="table table-hover text-nowrap">
<thead>
<tr>
<th class="pt-0 pb-2"></th>
<th class="pt-0 pb-2">carname</th>
<th class="pt-0 pb-2">cartype</th>
<th class="pt-0 pb-2">services-name</th>
<th class="pt-0 pb-2">status</th>
<th class="pt-0 pb-2">Booking status</th>
<th class="pt-0 pb-2">action</th>
</tr>
</thead>
<tbody>

<?php
if ($result->num_rows > 0) {
    // Output data for each row
    while($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo '<td class="align-middle"><div class="ms-3"><a href="page_product_details.html">' . $row["carid"] . '</a></div></td>';
        echo '<td class="align-middle"><div class="ms-3"><a href="page_product_details.html">' . $row["carname"] . '</a></div></td>';
        echo '<td class="align-middle">' . $row["cartype"] . '</td>';
        echo '<td class="align-middle">' . $row["services"] . '</td>';
		echo '<td class="align-middle">' .($row["status"] == 1 ? "Available" : "Unavailable"). '</td>';
        echo '<td class="align-middle"></td>';
        echo '<td class="align-middle">';
        echo "<a href='UserCarBook.php?carid=" . $row['carid'] . "' type='button' class='btn btn-primary'><i class='fas fa-edit'></i>Book Now</a>";
echo '</td>';
        echo "</tr>";
	} 
}else {
    echo "0 results";
}

$conn->close();
?>




</tbody>
</table>
</div>

<div class="d-md-flex align-items-center">
<div class="me-md-auto text-md-left text-center mb-2 mb-md-0">
Showing 1 to 10 of 57 entries
</div>
<ul class="pagination mb-0 justify-content-center">
<li class="page-item disabled"><a class="page-link">Previous</a></li>
<li class="page-item"><a class="page-link" href="#">1</a></li>
<li class="page-item active"><a class="page-link" href="#">2</a></li>
<li class="page-item"><a class="page-link" href="#">3</a></li>
<li class="page-item"><a class="page-link" href="#">4</a></li>
<li class="page-item"><a class="page-link" href="#">5</a></li>
<li class="page-item"><a class="page-link" href="#">6</a></li>
<li class="page-item"><a class="page-link" href="#">Next</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>


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


<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/vendor.min.js" type="59345fa577d7dffb08a9b947-text/javascript"></script>
<script src="assets/js/app.min.js" type="59345fa577d7dffb08a9b947-text/javascript"></script>


<script async src="https://www.googletagmanager.com/gtag/js?id=G-Y3Q0VGQKY3" type="59345fa577d7dffb08a9b947-text/javascript"></script>
<script type="59345fa577d7dffb08a9b947-text/javascript">
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-Y3Q0VGQKY3');
	</script>
<script src="../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="59345fa577d7dffb08a9b947-|49" defer></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"8afd7483ac144dd9","version":"2024.7.0","r":1,"serverTiming":{"name":{"cfL4":true}},"token":"4db8c6ef997743fda032d4f73cfeff63","b":1}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from seantheme.com/studio/page_products.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Aug 2024 06:31:41 GMT -->
</html>
