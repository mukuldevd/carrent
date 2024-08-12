<!DOCTYPE html>
<html lang="en">
<?php
	session_start();
	
	$conn = new mysqli('localhost','root','','rentalcar');

	// if (!isset($_SESSION['username'])) {
	// 	header('Location: user_login.php');
	// 	exit();
	// }
	
	$passmsg = $emailmsg = $unsuccessfulmsg = '';

	if(isset($_POST['submit'])){
		$email = $_POST['email'];
		$password = $_POST['password'];

		
		
		if(empty($email)){
			$emailmsg = 'Enter an email.';
		}else{
			$emailmsg = '';
		}
		
		if(empty($password)){
			$passmsg = 'Enter your password.';
		}else{
			$passmsg = '';
		}
		
		if(!empty($email) && !empty($password)){
			$sql = "SELECT * FROM userregister WHERE email='$email' AND password = '$password'";
			$query = $conn->query($sql);
			
			if($query->num_rows > 0){
				$row = $query->fetch_assoc();
				$username = $row['username'];
				
				
				$_SESSION['username'] = $username;
				
				header('location:dashboardUser.php');
			}else{
				$unsuccessfulmsg = 'Wrong email or Password!';
			}
		}
	}
?>
<!-- Mirrored from seantheme.com/studio/page_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Aug 2024 06:30:51 GMT -->
<head>
<meta charset="utf-8">
<title>Studio | Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content>
<meta name="author" content>

<link href="assets/css/vendor.min.css" rel="stylesheet">
<link href="assets/css/app.min.css" rel="stylesheet">

</head>
<body>
<?php if(!empty($_SESSION['signupmsg'])){ echo $_SESSION['signupmsg']; } ?></p>
<div id="app" class="app app-full-height app-without-header">

<div class="login">

<div class="login-content">
<p class="text-danger"><?php echo $unsuccessfulmsg ?> </p>
<form action="user_login.php" method="POST" name="user_login">
<h1 class="text-center">Sign In</h1>
<div class="text-muted text-center mb-4">
For your protection, please verify your identity.
</div>
<div class="mb-3">
<label class="form-label">Email Address</label>
<input type="text" name="email" class="form-control form-control-lg fs-15px" value="<?php if(isset($_POST['submit'])){echo $email; } ?>" placeholder="username@address.com">
<span class="text-danger"><?php if(isset($_POST['submit'])){ echo $emailmsg; }?></span>
</div>
<div class="mb-3">
<label class="form-label">Password</label>
<input type="password" name="password" class="form-control form-control-lg fs-15px" value placeholder="Enter your password">
<span class="text-danger"><?php if(isset($_POST['submit'])){ echo $passmsg; }?></span>
</div>
<button type="submit" name="submit" class="btn btn-theme btn-lg d-block w-100 fw-500 mb-3">Sign In</button>
<div class="text-center text-muted">
Don't have an account yet? <a href="user_registration.php" class="text-decoration-none">Sign up</a>.
</div>
</form>
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


<script src="assets/js/vendor.min.js" type="1860a78ab4abc673dfa825dc-text/javascript"></script>
<script src="assets/js/app.min.js" type="1860a78ab4abc673dfa825dc-text/javascript"></script>


<script async src="https://www.googletagmanager.com/gtag/js?id=G-Y3Q0VGQKY3" type="1860a78ab4abc673dfa825dc-text/javascript"></script>
<script type="1860a78ab4abc673dfa825dc-text/javascript">
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-Y3Q0VGQKY3');
	</script>
<script src="../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="1860a78ab4abc673dfa825dc-|49" defer></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"8afd743d3c795277","version":"2024.7.0","r":1,"serverTiming":{"name":{"cfL4":true}},"token":"4db8c6ef997743fda032d4f73cfeff63","b":1}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from seantheme.com/studio/page_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Aug 2024 06:30:51 GMT -->
</html>
