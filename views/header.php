<!DOCTYPE html>
<html>
	<head>
		<title>KSI</title>
		<link rel="stylesheet" type="text/css" href="<?php echo URL;?>public/css/default.css">
		<script type="text/javascript" src="<?php echo URL;?>public/js/jquery-1.7.2.min.js"></script>
		<?php
			if (isset($this->js)) {
				foreach ($this->js as $js) 
				    echo "\n\t\t".'<script type="text/javascript" src="'.URL. 'views/' .$js. '"></script>';
				
				echo "\n";
			}

			if (isset($this->css)) {
				foreach ($this->css as $css) 
				    echo "\n\t\t".'<link rel="stylesheet" type="text/css" href="'.URL. 'views/' .$css. '">';
				
				echo "\n";
			}
		?>
	</head>
<body>

<?php Session::init(); ?>

<header>
	<h1 >Klub Studenata Informatike</h1>
	<ul>
		<li><a href="<?php echo URL;?>index">Pocetna</a></li>
		<li><a href="<?php echo URL;?>activities">Aktivnosti</a></li>
		<li><a href="<?php echo URL;?>suggestActivity">Predlozi aktivnosti</a></li>
		<li style="border-right: none;"><a href="<?php echo URL;?>arhiva">Arhiva</a></li>
		<?php if (Session::get('loggedIn') == 1) : ?>
		<a href="<?php echo URL;?>dashboard/logout">Logout</a>
		<?php else: ?>
		<a href="<?php echo URL;?>login">Login</a>
		<?php endif; ?>
		<li><a href="<?php echo URL;?>register">Register</a></li>
	</ul>
	<?php if (Session::get('loggedIn') == 1) :?>
		<p> Hello, <?php echo Session::get('user'); ?></p>
	<?php endif; ?>
</header>

<div id="content">
	