<!DOCTYPE html>
<html lang="en">

  <meta name="google-signin-client_id" content="1049322446768-jidj6vjbm5471ru66g6ensblo5km196t.apps.googleusercontent.com">
<?php
 include '../parts/header_one.php';
 ?>

<title>
 Material Dashboard by Creative Tim
</title>

<?Php
 // include '../parts/header_two.php';
 // include '../parts/nav.php';
 // include '../parts/navtop.php';
?>
 <div class="card-header-rose text-center">
	<h4 class="card-title">Log in</h4>
	<div class="social-line">
	  <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
		<i class="fa fa-facebook-square"></i>
	  </a>
	  <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
		<i class="fa fa-twitter"></i>
	  </a>
	  <a href="" data-onsuccess="onSignIn" class="btn btn-just-icon btn-link btn-white g-signin2">
		<i class="fa fa-google-plus"></i>
	  </a>
	</div>
 </div>
<?php
 include '../parts/footer_one.php';
 include '../parts/footer_two.php';

?>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<script>
	function onSignIn(googleUser) {
	  var profile = googleUser.getBasicProfile();
	  // alert('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
	  // alert('Name: ' + profile.getName());
	  // alert('Image URL: ' + profile.getImageUrl());
	  // alert('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
		$_SESSION['uid'] = profile.getId();
		location.href="./dashboard.php"
	}
</script>

</body>
</html>

