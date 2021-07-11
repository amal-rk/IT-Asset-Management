<?php include "header.php" ?>
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page signup-page">
				<h2 class="title1">SignUp Here</h2>
				<div class="sign-up-row widget-shadow">
					<h5>Personal Information :</h5>
				<form action="<?php echo site_url();?>/AdminController/register" method="post">
					<div class="sign-u">
								<input type="text" name="name" placeholder="User Name" required="">
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
								<input type="email" name="email" placeholder="Email" required="">
						<div class="clearfix"> </div>
					</div>
					<h6>Login Information :</h6>
					<div class="sign-u">
								<input type="password" name ="Password" placeholder="Password" required="">
						<div class="clearfix"> </div>
					</div>
						<div class="clearfix"> </div>
					<div class="sub_home">
							<input type="submit" value="Submit" name="save">
						<div class="clearfix"> </div>
					</div>
					<div class="registration">
						Already Registered.
						<a class="" href="<?php echo site_url();?>/AdminController/login/">
							Login
						</a>
					</div>
				</form>
				</div>
			</div>
		</div>
<?php include "footer.php" ?>