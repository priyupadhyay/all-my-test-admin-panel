
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
<div class="wrapper wrapper-full-page">
    <div class="page-header login-page header-filter" filter-color="black" style="background-image: url('../../assets/img/login.jpg'); background-size: cover; background-position: top center;">
    
 <div class="container">
        <div class="col-md-4 col-sm-6 ml-auto mr-auto">
         <form class="form" method="" action="">
            <div class="card card-login card-hidden">
              <div class="card-header card-header-rose text-center">
              
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
 <input type="hidden" id='session' value="">
 
 <div class="card-body ">
	<p class="card-description text-center">Or Be Classical</p>
	<span class="bmd-form-group">
	  <div class="input-group">
		<div class="input-group-prepend">
		  <span class="input-group-text">
			<i class="material-icons">face</i>
		  </span>
		</div>
		<input type="text" class="form-control" placeholder="First Name...">
	  </div>
	</span>
	<span class="bmd-form-group">
	  <div class="input-group">
		<div class="input-group-prepend">
		  <span class="input-group-text">
			<i class="material-icons">email</i>
		  </span>
		</div>
		<input type="email" class="form-control" placeholder="Email...">
	  </div>
	</span>
	<span class="bmd-form-group">
	  <div class="input-group">
		<div class="input-group-prepend">
		  <span class="input-group-text">
			<i class="material-icons">lock_outline</i>
		  </span>
		</div>
		<input type="password" class="form-control" placeholder="Password...">
	  </div>
	</span>
</div>
<div class="card-footer justify-content-center">
                <a href="#pablo" class="btn btn-rose btn-link btn-lg">Lets Go</a>
              </div>
            </div>
          </form> 
		  </div></div>
		  </div></div>
		  
		  <footer class="footer ">
        <div class="container">
          <nav class="pull-left">
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="http://presentation.creative-tim.com">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
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
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
          </div>
        </div>
      </footer>
    </div>
  </div>
</body>
<?php
 include '../parts/footer_one.php';
 include '../parts/footer_two.php';

?>
<script type="text/javascript">
  $().ready(function() {
    demo.checkFullPageBackgroundImage();

    setTimeout(function() {
      // after 1000 ms we add the class animated to the login/register card
      $('.card').removeClass('card-hidden');
    }, 700)
  });
</script>

<script src="https://apis.google.com/js/platform.js" async defer></script>
<script>
	function onSignIn(googleUser) {
	  var profile = googleUser.getBasicProfile();
	  // alert('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
	  // alert('Name: ' + profile.getName());
	  // alert('Image URL: ' + profile.getImageUrl());
	  // alert('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
		$('#session').val(profile.getId());
		login();
		window.location = 'dashboard.php';
	}
	
	function login(){
		var id = $('#session').val();
		'<%Session["uid"] = "' + id + '"; %>';
	}
</script>

</body>
</html>

