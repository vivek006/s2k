<!--left-fixed -navigation-->
		<div class=" sidebar" role="navigation" >
            <div class="navbar-collapse" >
				<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
					<ul class="nav" id="side-menu">
						<li>
						<?php
						$role=$this->session->userdata['role']; 
						if($role=="super_admin")
						{
							$role="admin";
						}
						?>
							<a href="<?php echo base_url().$role;?>"><i class="fa fa-home nav_icon"></i>Dashboard</a>
						</li>
						<?php
						if($role=="admin")
						{
							?>
						<li class="">
							<a href="#"><i class="fa fa-university"></i>BANK <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="<?php echo base_url();?>admin/addBank">Add Bank</a>
								</li>
								<li>
									<a href="<?php echo base_url();?>admin/manageBank">Manage Bank</a>
								</li>
							</ul>
							<!-- /nav-second-level -->
						</li>
						
						<li class="">
							<a href="#"><i class="fa fa-credit-card"></i>ATM <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="<?php echo base_url();?>admin/addAtm">Add ATM</a>
								</li>
								<li>
									<a href="<?php echo base_url();?>admin/manageAtm">Manage ATM</a>
								</li>
								<li>
									<a href="<?php echo base_url();?>admin/csvImport">Import ATM Lists</a>
								</li>
							</ul>
							<!-- /nav-second-level -->
						</li>
						
						<li class="">
							<a href="#"><i class="fa fa-home"></i>Agencies <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="<?php echo base_url();?>admin/addAgency">Add Agency</a>
								</li>
								<li>
									<a href="<?php echo base_url();?>admin/manageAgency">Manage Agencies</a>
								</li>
							</ul>
							<!-- /nav-second-level -->
						</li>
							</ul>
							<!-- /nav-second-level -->
						<?php
						}
						else
							
							{
						?>
						<li class="">
							<a href="#"><i class="fa fa-book nav_icon"></i>Auditor <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="<?php echo base_url();?>agency/addAuditor">Add Auditor</a>
								</li>
								<li>
									<a href="<?php echo base_url();?>agency/manageAuditor">Manage Auditor & Assign ATMS</a>
								</li>
							</ul>
							<!-- /nav-second-level -->
						</li>
						<li class="">
							<a href="#"><i class="fa fa-credit-card"></i>ATM <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="<?php echo base_url();?>agency/addAtm">Add ATM</a>
								</li>
								<li>
									<a href="<?php echo base_url();?>agency/manageAtm">Manage ATM</a>
								</li>
								<li>
									<a href="<?php echo base_url();?>agency/csvImport">Import ATM Lists</a>
								</li>
							</ul>
							<!-- /nav-second-level -->
						</li>
						<li class="">
						<a href="<?php echo base_url();?>agency/listReports"><i class="fa fa-file-text"></i>Reports</a>
							
							
							<!-- /nav-second-level -->
						</li>
						<?php
							}
							?>
					</ul>
						
					<!-- //sidebar-collapse -->
				</nav>
			</div>
		</div>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
</nav>	