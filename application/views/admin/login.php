<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SSLHEALTH | admin</title>
  <link href="<?php echo base_url('assets/css/bootstrep-min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/admin_style.css'); ?>" rel="stylesheet">


</head>
<body>
<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section"> ADMIN</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
				  <?php if ($this->session->flashdata('message') !== null) {?>
                            <div class="alert alert-<?php echo $this->session->flashdata('message')['0'] == 1 ? 'success' : 'danger'; ?> alert-dismissible">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true" aria-label="Close">×</button>
                                <?php print_r($this->session->flashdata('message')['1']);?>
                            </div>
                 <?php }?>
		      	<h3 class="text-center">Have an account?</h3>
						<form action="<?= base_url('admin_login')  ?>" method="post" class="login-form">
		      		<div class="form-group">
		      			<input type="text" class="form-control rounded-left" placeholder="Username" name="email" required>
		      		</div>
	            <div class="form-group d-flex">
	              <input type="password" class="form-control rounded-left" placeholder="Password" name ="password" required>
	            </div>
	            <div class="form-group d-md-flex">
	            	
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="btn btn-primary rounded submit p-3 px-5">Get Started</button>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>
  <script src="<?php echo base_url('assets/js/jquery-min.js') ; ?>"></script>
  <script src="<?php echo  base_url('assets/js/bundle-min.js');  ?>"></script>
  


</body>
</html>
