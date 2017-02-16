
<form action="login/run" method="post">
	<h1>Login Form</h1>
	<div>
		<input type="text" placeholder="Username" required="" id="username" name="login"/>
	</div>
	<div>
		<input type="password" placeholder="Password" required="" id="password" name="password"/>
	</div>
	<div id="options">
		<input type="submit" name="submit" value="Log in" />
		<a href="<?php echo URL;?>register">Register</a>
	</div>
</form>

<div class="clear_float"></div>
	
