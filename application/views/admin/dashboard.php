<div class="main-content">	
	<div class="page-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6">
					<div class="page-title-box">
						<h4>Dashboard</h4>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-3 col-sm-6">
					<div class="card mini-stat bg-primary">
						<a href="<?=base_url('categories');?>">
							<div class="card-body mini-stat-img">
								<div class="mini-stat-icon">
									<i class="mdi mdi-cube-outline float-end"></i>
								</div>
								<div class="text-white">
                                  <h6 class="text-uppercase mb-3 font-size-16 text-white">Categories</h6>  
									<h2 class="mb-4 text-white">Total <?= $categories?></h2>
                                    
								</div>
							</div>
						</a>
					</div>
				</div>
                <div class="col-xl-3 col-sm-6">
					<div class="card mini-stat bg-primary">
						<a href="<?=base_url('product_admin');?>">
							<div class="card-body mini-stat-img">
								<div class="mini-stat-icon">
									<i class="mdi mdi-cube-outline float-end"></i>
								</div>
								<div class="text-white">
                                  <h6 class="text-uppercase mb-3 font-size-16 text-white">Products</h6>  
                                  <h2 class="mb-4 text-white">Total <?=$products?></h2>
                                    
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-xl-3 col-sm-6">
					<div class="card mini-stat bg-primary">
						<a href="<?=base_url('customers');?>">
							<div class="card-body mini-stat-img">
								<div class="mini-stat-icon">
									<i class="mdi mdi-cube-outline float-end"></i>
								</div>
								<div class="text-white">
                                  <h6 class="text-uppercase mb-3 font-size-16 text-white">Customers</h6>  
                                  <h2 class="mb-4 text-white">Total <?=10?></h2>
                                    
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-xl-3 col-sm-6">
					<div class="card mini-stat bg-primary">
						<a href="<?=base_url('orders');?>">
							<div class="card-body mini-stat-img">
								<div class="mini-stat-icon">
									<i class="mdi mdi-cube-outline float-end"></i>
								</div>
								<div class="text-white">
                                  <h6 class="text-uppercase mb-3 font-size-16 text-white">Orders</h6>  
                                  <h2 class="mb-4 text-white">Total <?=10?></h2>
                                    
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>