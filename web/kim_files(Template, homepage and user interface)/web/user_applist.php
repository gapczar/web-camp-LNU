<?php include("header.php"); ?>
				<div class="navbar">
					<div class="navbar-inner">
						<a href="" class="brand">Welcome Kim</a>
						<ul class="nav">
							<li><a href="home_user.php">Home</a></li>
							<li class="active"><a href="user_applist.php">App list</a></li>
							<li><a href="user_top5.php">My Top 5</a></li>
							<li><a href="">Logout</a></li>
						</ul>
					</div>
				</div><!--end of navbar-->
				<div id="body" class="div-padding div-padding">
					<center>
						<form class="form-query">
							<input type='text' style="border-radius:100px;padding:5px" placeholder="Search..." />
						</form>
						<div class="alert alert-info"><strong>Instructions:</strong> Please rate your top 5 Apps by clicking the corresponding number. <strong>1</strong> being the best and <strong>5</strong> being the worst</div>
						<table class="table">
							<tr><th>Icon</th><th>App Name</th><th>Description</th><th>Rate</th></tr>
							<?php
								$q = $con->prepare("SELECT * FROM tbl_app_info ORDER BY id");
								$q->execute();
								$row = $q->fetchAll(PDO::FETCH_ASSOC);
								foreach($row as $rr){
									$qR = $con->prepare("SELECT * FROM tbl_rate WHERE app_id=:id AND user_id=:user");
									$qR->bindParam(":id", $rr['id'], PDO::PARAM_STR);
									$qR->bindParam(":user", $_SESSION['id'], PDO::PARAM_STR);
									$qR->execute();
									$rowR = $qR->fetchAll(PDO::FETCH_ASSOC);
									foreach($rowR as $rr2){
										$btn = $rr2['rate_num'];
									}
									?>
										<script type='text/javascript'>
											$(".btn").removeClass(".btn-primary");
										</script>
									<?php
									if($btn!=null){
										if($btn==1){
											$btn1 = "btn btn-primary";
											$btn2 = "btn";
											$btn3 = "btn";
											$btn4 = "btn";
											$btn5 = "btn";
										}
										elseif($btn==2){
											$btn2 = "btn btn-primary";
											$btn1 = "btn";
											$btn3 = "btn";
											$btn4 = "btn";
											$btn5 = "btn";
										}
										elseif($btn==3){
											$btn3 = "btn btn-primary";
											$btn2 = "btn";
											$btn1 = "btn";
											$btn4 = "btn";
											$btn5 = "btn";
										}
										elseif($btn==4){
											$btn4 = "btn btn-primary";
											$btn2 = "btn";
											$btn3 = "btn";
											$btn1 = "btn";
											$btn5 = "btn";
										}
										elseif($btn==5){
											$btn5 = "btn btn-primary";
											$btn2 = "btn";
											$btn3 = "btn";
											$btn4 = "btn";
											$btn1 = "btn";
										}

									}else{
										$btn2 = "btn";
											$btn3 = "btn";
											$btn4 = "btn";
											$btn1 = "btn";
											$btn5 = "btn";
									}
									?><tr><td><img src="images/<?php echo $rr['icon']; ?>" width=50 /></td><td><?php echo $rr['id']." ".$rr['name']; ?></td><td><p><?php echo $rr['desc']; ?></p></td>
									<td>
										<input type='button' value="1" class="<?php echo $btn1; ?>" /> 
										<input type='button' value="2" class="<?php echo $btn2; ?>" /> 
										<input type='button' value="3" class="<?php echo $btn3; ?>" /> 
										<input type='button' value="4" class="<?php echo $btn4; ?>" /> 
										<input type='button' value="5" class="<?php echo $btn5; ?>" />
									</td></tr><?php
								}
							?>
						</table>
					</center>
				</div>
			</div>
<?php include("footer.php"); ?>