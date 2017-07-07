<?php echo validation_errors(); ?>

<?php echo form_open('users/register'); ?>
				<input type="email"  name="email" placeholder="Email">
				<input type="text"  name="username" placeholder="Username">
				<input type="password"  name="password"  placeholder="Password">
				<input type="password"  name="password2" placeholder="Confirm Password">

			<input type="submit" name="sign_up" value="Sign up">

<?php echo form_close(); ?>
<div class="sign-down">
				<h4>Already have an account? <a href="login"> Login here.</a></h4>

				</div>
