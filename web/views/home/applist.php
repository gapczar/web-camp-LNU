<?php include("header.php"); ?>
				<div class="navbar">
					<div class="navbar-inner">
						<a href="" class="brand">LNU</a>
						<ul class="nav">
							<li><a href="/">Home</a></li>
							<li class="active"><a href="applist.php">App list</a></li>
						</ul>
					</div>
				</div><!--end of navbar-->
				<div id="body" class="div-padding div-padding">
					<center>
						<form class="form-query">
							<input type='text' style="border-radius:100px;padding:5px" placeholder="Search..." />
						</form>
						<div class="alert alert-info"><strong>Note:</strong> Rating is active only for Regsitered Users. <strong>Please Log-in to rate.</strong></div>
						<table class="table">
							<tr><th>Icon</th><th>App Name</th><th>Description</th><th>Rate</th></tr>
							<tr><td><img src="sd" width=50 /></td><td>App</td><td><p>This is a Description</p></td><td><input type='button' value="1" class="btn" /> <input type='button' value="2" class="btn" /> <input type='button' value="3" class="btn" /> <input type='button' value="4" class="btn" /> <input type='button' value="5" class="btn" /></td></tr>
							<tr><td><img src="sd" width=50 /></td><td>App</td><td><p>This is a Description</p></td><td><input type='button' value="1" class="btn" /> <input type='button' value="2" class="btn" /> <input type='button' value="3" class="btn" /> <input type='button' value="4" class="btn" /> <input type='button' value="5" class="btn" /></td></tr>
							<tr><td><img src="sd" width=50 /></td><td>App</td><td><p>This is a Description</p></td><td><input type='button' value="1" class="btn" /> <input type='button' value="2" class="btn" /> <input type='button' value="3" class="btn" /> <input type='button' value="4" class="btn" /> <input type='button' value="5" class="btn" /></td></tr>
						</table>
					</center>
				</div>
<?php include("footer.php"); ?>