<!DOCTYPE html>
<html lang= "en">
<head>
	<title>Websleson | <?php echo $title; ?></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="<?php echo base_url('bootstrap/dist/css/bootstrap.min.css'); ?>" rel="stylesheet" />
</head>
<body>
	<div class="container">
		<h3 align="center">Login</h3><br /><br />
		<form method="post" action="<?php echo base_url(); ?>login_controller/login_validation">
			<div class="form-group">
				<label>Enter Username</label>
				<input type="text" name="username" class="form-control" />
				<span class="text-danger"><?php echo form_error('username'); ?></span>
			</div>
			<div class="form-group">
				<label>Enter Password</label>
				<input type="password" name="password" class="form-control" />
				<span class="text-danger"><?php echo form_error('password'); ?></span>
			</div>
			<div class="form-group">
				<input type="submit" name="insert" value="Login" /> 
				<?php
					echo $this->session->flashdata("error");
				?>
			</div>
		</form>
	</div>
</body>
</html>