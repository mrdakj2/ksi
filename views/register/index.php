<form action="register/run" method="post">
	<h1>Register Form</h1>
	<div>
		<input type="text" placeholder="Username" required="" id="username" name="username"/>
	</div>
	<div>
		<input type="password" placeholder="Password" required="" id="password" name="password"/>
	</div>
	<div id="options">
		<input type="submit" name="submit" value="Register" />
		<a href="<?php echo URL;?>login">Login</a>
	</div>
</form>

<div class="clear_float"></div>
	
