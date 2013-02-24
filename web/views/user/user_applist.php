				<div class="navbar">
					<div class="navbar-inner">
						<a href="" class="brand">Welcome Kim</a>
						<ul class="nav">
							<li><a href="<?php echo base_url; ?>home	/profile">Home</a></li>
							<li class="active"><a href="<?php echo base_url; ?>home/app_list">App list</a></li>
							<li><a href="<?php echo base_url; ?>home/top5">My Top 5</a></li>
							<li><a href="<?php echo base_url; ?>transaction/logout">Logout</a></li>
						</ul>
					</div>
				</div><!--end of navbar-->
				<div id="body" class="div-padding div-padding">
					<center>
						<div class="alert alert-info"><strong>Instructions:</strong> Please vote for your <strong>Top 5</strong> mobile Apps.</div>
						<table class="table">
							<tr><th>Icon</th><th>App Name</th><th>Action</th></tr>
							<?php
								$con = new PDO("mysql: host=localhost; dbname=poll","root","root");
								$q = $con->prepare("SELECT * FROM tbl_app_info ORDER BY id");
								$q->execute();
								$row = $q->fetchAll(PDO::FETCH_ASSOC);
								foreach($row as $rr){
									$qR = $con->prepare("SELECT * FROM tbl_rate WHERE app_id=:id AND user_id=:user");
									$qR->bindParam(":id", $rr['id'], PDO::PARAM_INT);
									$qR->bindParam(":user", $_SESSION['id'], PDO::PARAM_INT);
									$qR->execute();
									$rowR = $qR->fetchAll(PDO::FETCH_ASSOC);
									$num_control=0;


									foreach($rowR as $rr2){

										$btn = $rr2['app_id'];
									}
									if($btn!=0){
										$btn1="btn-primary";
										$btn=0;
									}
									?>
									<tr><td><img src="<?php echo base_url;?>images/<?php echo $rr['icon']; ?>" width=50 /></td><td><?php echo $rr['name']; ?></td>
									<td>
										<input type='button' value="Vote" id="btn<?php echo $rr['id']; ?>" class="rating_button btn <?php echo $btn1; ?>" onClick="rate(<?php echo $rr['id']; ?>)"/> 
										
									</td></tr><?php
									$btn1="";

								}
							?>
						</table>
					</center>
				</div>
			</div>