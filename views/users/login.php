
<?php echo form_open('users/login'); ?>


				<input type="text" name="username"  required placeholder="Enter Username" required autofocus>


				<input type="password" name="password" class="lock" required placeholder="Enter Password" required autofocus>

			<div class="forgot-top-grids">
				<div class="forgot-grid">
					<ul>
						<li>
							<input type="checkbox" id="brand1" value="">
							<label for="brand1"><span></span>Remember me</label>
						</li>
					</ul>
				</div>
				<div class="forgot">
					<a href="#">Forgot password?</a>
				</div>
				<div class="clearfix"> </div>
			</div>
			<input type="submit" name="Sign In" value="Login">
			<h3>Not a member?<a href="register"> Sign up now</a></h3>

			<!-- <button type="submit" class="btn btn-primary btn-block">Login</button> -->

<?php echo form_close(); ?>


<!-- <form>
	<input type="text" name="email" required placeholder="Email" required="">
	<input type="password" name="password" class="lock" required placeholder="Password">
	<div class="forgot-top-grids">
		<div class="forgot-grid">
			<ul>
				<li>
					<input type="checkbox" id="brand1" value="">
					<label for="brand1"><span></span>Remember me</label>
				</li>
			</ul>
		</div>
		<div class="forgot">
			<a href="#">Forgot password?</a>
		</div>
		<div class="clearfix"> </div>
	</div>
	<input type="submit" name="Sign In" value="Login">
	<h3>Not a member?<a href="signup.html"> Sign up now</a></h3>
	<h2>or login with</h2>
	<div class="login-icons">
		<ul>
			<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
			<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
			<li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
		</ul>
	</div>
</form> -->
