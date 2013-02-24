<?php include("header.php"); ?>
				<div class="navbar">
					<div class="navbar-inner">
						<a href="" class="brand">Welcome <?php echo ucfirst($_SESSION['username']); ?></a>
						<ul class="nav">
							<li class="active"><a href="<?php echo base_url; ?>home	/profile">Home</a></li>
							<li><a href="<?php echo base_url; ?>home/app_list">App list</a></li>
							<li><a href="<?php echo base_url; ?>home/top5">My Top 5</a></li>
							<li><a href="<?php echo base_url; ?>transaction/logout">Logout</a></li>
						</ul>
					</div>
				</div><!--end of navbar-->
				<div id="body" class="div-padding div-padding">
					<center>
					</center>
					<div class="row-fluid">
						<div class="span5">
							<div></div>
							<div class=" span12 white-bg div-padding glow-effect-shadow round-edges" style="margin-bottom:20px;">
								<h4><i class=""></i> Password Settings</h4><hr />
								<form>
									<table style="width:100%">
										<tr><td>Old Password: </td><td><input type='password' /></td></tr>
										<tr><td>New Password: </td><td><input type='password' /></td></tr>
										<tr><td>Confirm Password: </td><td><input type='password' /></td></tr>
										<tr><td colspan=2 align=center><button class="btn btn-primary"><i class="icon-user icon-white"></i> Change Password</button>
											<input type='reset' value="Reset" class="btn" />
										</td></tr>
									</table>
								</form>
							</div>
						</div>
						<div class="span7 white-bg div-padding glow-effect-shadow round-edges">
							<i class="icon-star"></i> <span style="font-size:20px;font-weight:bold;color:gold;">Top 5 Apps</span><hr />
							<?php
								$q = $con->prepare("SELECT * FROM tbl_rate WHERE user_id=:user");
								$q->bindParam(":user", $_SESSION['id'], PDO::PARAM_STR);
								$q->execute();
								if($q->rowCount()==5){
									
									?>
										<div>
											<div>
												<ul class="nav nav-tab nav-stacked top5List">
													<li>
														<div class="span3"><img src="dsf" width="100" /></div>
														<a href="">
														
															<h4>App</h4>
															<p>This is a description This is a description This is a description This is a description</p>
													</a></li>
													<li>
														<div class="span3"><img src="dsf" width="100" /></div>
														<a href="">
														
															<h4>App</h4>
															<p>This is a description This is a description This is a description This is a description</p>
													</a></li>
													<li>
														<div class="span3"><img src="dsf" width="100" /></div>
														<a href="">
														
															<h4>App</h4>
															<p>This is a description This is a description This is a description This is a description</p>
													</a></li>
													<li>
														<div class="span3"><img src="dsf" width="100" /></div>
														<a href="">
														
															<h4>App</h4>
															<p>This is a description This is a description This is a description This is a description</p>
													</a></li>
													<li>
														<div class="span3"><img src="dsf" width="100" /></div>
														<a href="">
														
															<h4>App</h4>
															<p>This is a description This is a description This is a description This is a description</p>
													</a></li>
												</ul>
											</div>
										</div>
									<?php
								}else{
									?>
										<div class="alert alert-warning">You need to complete your top 5 in order to view this</div>
									<?php
								}
							?>
							
				</div>
			</div>
		</div>
	</div>
<?php include("footer.php"); ?>
