<html>
<head>
	<link rel="stylesheet" type="text/css" href="maincss.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" href="card.png" type="image/x-icon"/>
	<title>Banking solutions - Create User</title>	
</head>
<body>
<header>
	<div class="container">
		<div class="header">
			<div class="logo">
				<a href="#"><i class="fa fa-credit-card"></i> <h1>Banking Solutions</h1></a>
			</div>
			<div class="menu">
	 			<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="createuser.php">Create User</a></li>
					<li><a href="viewhistory.php">View Transaction History</a></li>
					<li><a href="contactus.php">Contact</a></li>
				</ul>
			</div>
		</div>	
	</div>

		</header>


		<div class="header-mid">
<div class="vidmask-body-back"></div>
								
		<div class="video">
			<video autoplay muted loop id="Video">
			  <source src="kindel.mp4" type="video/mp4">
			</video>
		</div>

			<div class="heading">
				<div class="container">
					<div class="createuser-header-mid-left">
                        <!--Create Use Form-->
				 		<div class="form-box">
                             
						 <div class="user-icon"> <i class="fa fa-user" aria-hidden="true"></i></div>
                            <form method="POST" action="backend.php">
							<div class="user-input">
							<label for="username">User Name</label>
                            <input type="text" id="username" name="username" required> </div>
							<div class="user-input">
                            <label for="email">Email</label>
                            <input type="text" id="email" name="email" required> </div>
							<div class="user-input">
                            <label for="bal">Balance</label>
                            <input type="number" id="balance" name="balance" min="1" required> </div>
                               <!-- <a class="btn-createuser" type="submit" href="">Create User</a> -->
							   <input type="submit" name="btn-insert" value="Create User" class="btn-createuser" style="margin-top:30px;" id="btn-insert" />
                                </form>
                        </div>
					</div>
				</div>
			</div>
			
			<div class="dark-btn inner-switch"> 
				<a><i class="fa fa-moon-o"></i></a>
			</div>	
		
			
		</div>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
		<script src="script.js"></script>


</body>
</html>