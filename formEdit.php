<!DOCTYPE html>
<html lang="en">
<?php
session_start();

$conn = new mysqli('localhost', 'root', '', 'rentalcar');



// Check if 'id' is present in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM carprice WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    // If the form has been submitted
    if (isset($_POST['submit'])) {
        $carname = $_POST['carname'];
        $cartype = $_POST['cartype'];
        $price = $_POST['price'];
        $services = $_POST['services'];

        // SQL query to update the record where id matches
        $sql = "UPDATE carprice SET carname='$carname', cartype='$cartype', price='$price', services='$services' WHERE id=$id";

        // Check if the record was updated successfully
        if ($conn->query($sql) === TRUE) {
            if ($conn->affected_rows > 0) {
                $_SESSION['status'] = "success";
                $_SESSION['message'] = "Record updated successfully.";
            } else {
                $_SESSION['status'] = "error";
                $_SESSION['message'] = "No matching record found for ID $id.";
            }
            header('Location: page_products.php');
            exit();
        } else {
            $_SESSION['status'] = "error";
            $_SESSION['message'] = "Error updating record: " . $conn->error;
            header('Location: formEdit.php?id=' . $id);
            exit();
        }
    }
} else {
    // If 'id' is not provided, redirect back with an error message
    $_SESSION['status'] = "error";
    $_SESSION['message'] = "ID not provided.";
    header('Location: page_products.php');
    exit();
}

$conn->close();
?>

<!-- Mirrored from seantheme.com/studio/form_elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Aug 2024 06:31:15 GMT -->
<head>
<meta charset="utf-8">
<title>Studio | Form Elements</title>
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
<div class="menu-text"><span class="__cf_email__" data-cfemail="a6ccc9cec8d5cbcfd2cee6d5d2d3c2cfc988c5c9cb">[email&#160;protected]</span></div>
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

<a href="logout.php" class="text-decoration-none">
<div class="menu-item">
<a href="logout.php" class="menu-link">
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

<div class="container">

<div class="row justify-content-center">

<div class="col-xl-10">

<div class="row">

<div class="col-xl-9">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="#">FORMS</a></li>
<li class="breadcrumb-item active">FORM ELEMENTS</li>
</ul>
<h1 class="page-header">
Form Elements <small>page header description goes here...</small>
</h1>
<hr class="mb-4">

<div id="formGrid" class="mb-5">
<h4>Form grid</h4>
<p>More complex forms can be built using bootstrap grid classes. Use these for form layouts that require multiple columns, varied widths, and additional alignment options.</p>
<div class="card">
<div class="card-body">
<form action="formEdit.php?id=<?php echo $id?>" method="POST" name="formEdit">
<div class="mb-3 row">
<label for="inputEmail3" class="col-sm-2 col-form-label">carname</label>
<div class="col-sm-10">
<input type="text" name="carname" class="form-control" value="<?php echo $row['carname'] ?>" id="inputEmail3">
</div>
</div>
<div class="mb-3 row">
<label for="inputPassword3" class="col-sm-2 col-form-label">cartype</label>
<div class="col-sm-10">
<input type="text" name="cartype" class="form-control" value="<?php echo $row['cartype'] ?>" id="inputPassword3">
</div>
</div>
<div class="mb-3 row">
<label for="inputEmail3" class="col-sm-2 col-form-label">price</label>
<div class="col-sm-10">
<input type="text" name="price" class="form-control" value="<?php echo $row['price'] ?>" id="inputEmail3">
</div>
</div>
<div class="mb-3 row">
<label for="inputPassword3" class="col-sm-2 col-form-label">services</label>
<div class="col-sm-10">
<input type="text" name="services" class="form-control" value="<?php echo $row['services'] ?>" id="inputPassword3">
</div>
</div>

<div class="form-group row">
<div class="col-sm-10 offset-sm-2">
<button type="submit" name="submit" class="btn btn-outline-theme">update</button>
</div>
</div>
</form>
</div>
<div class="hljs-container rounded-bottom">
<pre><code class="xml" data-url="assets/data/form-elements/code-11.json"></code></pre>
</div>
</div>
</div>


</div>


<div class="col-xl-3">

<nav id="sidebar-bootstrap" class="navbar navbar-sticky d-none d-xl-block">
<nav class="nav">
<a class="nav-link" href="#formControls" data-toggle="scroll-to">Form controls</a>
<a class="nav-link" href="#sizing" data-toggle="scroll-to">Sizing</a>
<a class="nav-link" href="#readonly" data-toggle="scroll-to">Readonly</a>
<a class="nav-link" href="#readonlyPlainText" data-toggle="scroll-to">Readonly plain text</a>
<a class="nav-link" href="#rangeInputs" data-toggle="scroll-to">Range inputs</a>
<a class="nav-link" href="#checkboxes" data-toggle="scroll-to">Checkboxes</a>
<a class="nav-link" href="#radios" data-toggle="scroll-to">Radios</a>
<a class="nav-link" href="#switches" data-toggle="scroll-to">Switches</a>
<a class="nav-link" href="#selectMenu" data-toggle="scroll-to">Select menu</a>
<a class="nav-link" href="#fileBrowser" data-toggle="scroll-to">File browser</a>
<a class="nav-link" href="#formGrid" data-toggle="scroll-to">Form grid</a>
<a class="nav-link" href="#helpText" data-toggle="scroll-to">Help text</a>
<a class="nav-link" href="#inputGroup" data-toggle="scroll-to">Input group</a>
<a class="nav-link" href="#validation" data-toggle="scroll-to">Validation</a>
</nav>
</nav>

</div>

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


<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/vendor.min.js" type="479b009c9152be080df6bd3e-text/javascript"></script>
<script src="assets/js/app.min.js" type="479b009c9152be080df6bd3e-text/javascript"></script>


<script src="assets/plugins/%40highlightjs/cdn-assets/highlight.min.js" type="479b009c9152be080df6bd3e-text/javascript"></script>
<script src="assets/js/demo/highlightjs.demo.js" type="479b009c9152be080df6bd3e-text/javascript"></script>
<script src="assets/js/demo/sidebar-scrollspy.demo.js" type="479b009c9152be080df6bd3e-text/javascript"></script>


<script async src="https://www.googletagmanager.com/gtag/js?id=G-Y3Q0VGQKY3" type="479b009c9152be080df6bd3e-text/javascript"></script>
<script type="479b009c9152be080df6bd3e-text/javascript">
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-Y3Q0VGQKY3');
	</script>
<script src="../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="479b009c9152be080df6bd3e-|49" defer></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"8afd745f0ed24dd9","version":"2024.7.0","r":1,"serverTiming":{"name":{"cfL4":true}},"token":"4db8c6ef997743fda032d4f73cfeff63","b":1}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from seantheme.com/studio/form_elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Aug 2024 06:31:15 GMT -->
</html>
