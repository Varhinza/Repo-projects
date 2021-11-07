<body>
	
	<div class="navbar navbar-fixed-top">
	
	<div class="navbar-inner">
		
		<div class="container">
			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			
			<a class="brand" href="#">
				Login Page				
			</a>		
			
			<div class="nav-collapse">
				<ul class="nav pull-right">
					<li class="">						
						<a href="#" class="">
							<i class="icon-chevron-left"></i>
							Back to Homepage
						</a>
					</li>
				</ul>
				
			</div><!--/.nav-collapse -->	
	
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->



<div class="account-container">
<?= $this->session->flashdata('error') ?>
	<div class="content clearfix">
	
		<form action="<?php echo base_url('admin_dinas/index.php/loginAdministrator/login_action'); ?>" method="post">
		
			<h1>Member Login</h1>		
			
			<div class="login-fields">

				
				<p>Please provide your details</p>
				
				<div class="field">
					<label for="username">Username</label>
					<input type="text" id="username" name="username" value="" placeholder="Username" class="login username-field" />
				</div> <!-- /field -->
				
				<div class="field">
					<label for="password">Password:</label>
					<input type="password" id="password" name="password" value="" placeholder="Password" class="login password-field"/>
				</div> <!-- /password -->
				
			</div> <!-- /login-fields -->
			
			<div class="login-actions">
				<input class="button btn btn-success btn-large" type="submit" value="Sign In">
			</div> <!-- .actions -->
			
			
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->






<script src="<?= base_url('assets/js/jquery-1.7.2.min.js')?>"></script> 
<script src="<?= base_url('assets/js/bootstrap.js')?>"></script>

<script src="<?= base_url('assets/js/signin.js')?>"></script>

</body>