
				<div class="navbar">
					<div class="navbar-inner">
						<a href="" class="brand">Welcome Kim</a>
						<ul class="nav">
							<li><a href="<?php echo base_url; ?>home	/profile">Home</a></li>
							<li><a href="<?php echo base_url; ?>home/app_list">App list</a></li>
							<li class="active"><a href="<?php echo base_url; ?>home/top5">My Top 5</a></li>
							<li><a href="<?php echo base_url; ?>transaction/logout">Logout</a></li>
						</ul>
					</div>
				</div><!--end of navbar-->
				<div id="body" class="div-padding div-padding">
					<center>
						<form class="form-query">
							<input type='text' style="border-radius:100px;padding:5px" placeholder="Search..." />
						</form>
						<ul class="nav nav-tab nav-stacked top5List">
								<?php
									$con = new PDO("mysql: host=localhost; dbname=poll","root","root");
									$q = $con->prepare("SELECT * FROM tbl_rate WHERE user_id=:user");
									$q->bindParam(":user", $_SESSION['id'], PDO::PARAM_STR);
									$q->execute();
									$row = $q->fetchAll(PDO::FETCH_ASSOC);
									foreach($row as $rr){
										$q2 = $con->prepare("SELECT * FROM tbl_app_info WHERE id=:app");
										$q2->bindParam(":app", $rr['app_id'], PDO::PARAM_STR);
										$q2->execute();
										$row2 = $q2->fetchAll(PDO::FETCH_ASSOC);
										foreach($row2 as $rr2){
											$img = $rr2['icon'];
											$name = $rr2['name'];
											$desc = $rr2['desc'];
										}
										?>
											<li>
												<div class="span3"><img src="<?php echo base_url;?>images/<?php echo $img; ?>" width="100" /></div>
												<a href="">
													<h4><?php echo $name; ?></h4>
													<p>This is a description  This is a description  This is a description  This is a description  This is a description </p>
											</a></li>
										<?php
									}
								?>
										
											
									</ul>
					</center>
				</div>
			</div>