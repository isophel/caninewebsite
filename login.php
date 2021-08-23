<?php require_once('config.php');?>
<?php require_once(ROOT_PATH . '/includes/header.php'); ?>
<?php  require_once(ROOT_PATH . '/includes/registration_login.php'); ?>
<div class="container" style=" margin-top: 150px;">
	

	<div style="width: 40%; margin: 20px auto;">
		<form method="post" action="login.php" >
			<h2>Login to explore more</h2>
			<?php include(ROOT_PATH . '/includes/errors.php') ?>
			<input type="text" name="username" value="<?php echo $username; ?>" value="" placeholder="Username">
			<input type="password" name="password" placeholder="Password">
			<button type="submit" class="btn" name="login_btn">Login</button>
			<p>
				Not yet a member? <a href="register.php">Sign up</a>
			</p>
		</form>
	</div>
</div>
<!-- // container -->

<?php require_once(ROOT_PATH . '/includes/footer.php'); ?>