
<?php
   	$c=mysqli_connect("localhost","root","");
	   	   
?> 

<html>
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="maincss.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
	<title>Banking solutions - History</title>	
</head>
<body>
<header class="header-vc">
	<div class="container">
		<div class="header" style="">
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
		<!--  path start -->
		<div class="header-mid-vc">
			<div class="container">

			<ul class="path-vc">
            <li><a href="index.html">Home</a></li>
            <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span>
            Transaction History</li>
        	</ul>
			</div>
				<!--  path end -->
					
<!--   View Customer start -->		
</div>
<!--   View Customer end -->
			<div class="mid-vc">
			<h3>View Customers</h3>

			<div class="container">
				<div class="mid-proc">
					<div class="mid-proc1">	
					<div class="icon">
                            <span class="fa fa-cc-visa"></span>
                        </div>
						<h4>Select A Customer</h4>
						<p>Here you need to select a sender to make a bank transaction</p>
				</div>

					<div class="mid-proc1">	
					<div class="icon">
                            <span class="fa fa-money"></span>
                        </div>
						<h4>Select A Receiver</h4>
						<p>Here you need to provide receiver name and amount that you want to transfer</p>
				</div>

					<div class="mid-proc1">	
					<div class="icon">
                            <span class="fa fa-exchange"></span>
                        </div>
						<h4>View History</h4>
						<p>After making a transfer you check the bank transaction history to ensure transaction</p>
				</div>	
				</div>
</div>
				<!-- customer table start -->
				<div class="mid-stable-main">
		<div class="mid-stable">
			
				<table class="customer-table">
					<form method="POST"><thead>
						<tr>
						<th>Sender</th>
						<th>Receiver</the>
						<th>Amount Transfered</th>
						<th>Date(YYYY-MM-DD)</th>
						</tr>
					</thead>
					<tbody>
   
						<?php
					      if($c){
						mysqli_select_db($c,"basicbank");
						$qry="select * from transactionhistory";
						$log1=mysqli_query($c,$qry);
						while($row = mysqli_fetch_array($log1)){
					        	     	
								$output = '
					             <tr><td>'.$row['transactionSender'].'</td>
					              <td>'.$row['transactionReceiver']. '</td>
					              <td>'.$row['transactionAmount']. '</td>
								   <td>'.$row['transactionDate']. '</td><tr>';
									echo $output;	
					        } 
						} 
						?>  
				</tbody></form>
			</table>
				
		</div> 
					

			</div>
		<!-- customer table end -->


<div class="footer">
			<div class="footer-main">
					<div class="footer-b1 container">
						<h2>Banking Solutions</h2>
						
							<div class="social-media-icons col-xs-12">
		    	<ul class="list-inline col-xs-12 container">
		      <a href="#"><i class="fa fa-envelope-o"></i></a>
		      <a href="#"><i class="fa fa-youtube-play"></i></a>
		      <a href="#"><i class="fa  fa-facebook"></i></a>
		      <a href="#"><i class="fa fa-instagram"></i></a>
		    </ul>
  						</div>
					</div>
					<div class="footer-b1 container col">
						<ul>
							<h6>Support</h6>
							<li>Support</li>
							<li>Contact Us</li>
							<li>FAQs</li>
							<li>Find nearest branch</li>
							</ul>
			</div>

				<div class="footer-b1 container col">
						<ul>
							<h6>Our Services</h6>
							<li>Create A User</li>
							<li>View Customers</li>
							<li>Make a transaction</li>
							<li>View History</li>
							</ul>
			</div>
				<div class="footer-b1 container col">
						<ul>
							<h6>Head Branch</h6>
							<p>Bank Card, 343 banking lane, #2214 cravel street, NY.</p>
							<p><span class="fa fa-phone"></span>
								<a href="tel:+1(21) 234 4567">+1(21) 234 4567</a></p>

						</ul>
			</div>

				<div class="footer-b1 container col footer-blog">
						<ul class="col">
							<h6>Latest Blog</h6>
							<div class="footer-post"><p class="">Six ways to increase your bank board's tech expertise</p>
							<p><a href="#">May 28, 2021</a></p> </div>
							
							<div class="footer-post"><p class="">Why an operations revolution is an urgent imperative for banks</p>
							<p><a href="#">December 30, 2021</a></p> </div>

						</ul>
			</div>

		</div>	
<!-- copyright starts -->
<div class="footer-copyright">
	<div class="container">
		<p>© 2021 Banking Solutions. All rights reserved. Design by<a href="">  Hemil Rajpura</a></p>
	</div>
</div>

		<!-- <div class="mid-stable"> -->
				
		<div class="dark-btn inner-switch"> 
			<a><i class="fa fa-moon-o"></i></a>
		</div>	
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
		<script src="script.js"></script>
		
		<script type="text/javascript">
  	    $(document).on('click','.trans',function(){
      var cell = $(this).attr("id");
      //alert(cell);
//      if(confirm("Are you sure want to ?"))
//      {
          $.ajax({
          type : "POST",
          url : "backend.php",
          data : {sysId: cell, log1: 1},
          success:function(data){
			alert(data);
            //fetch_data();
           // location.reload();
		  location.href = 'transaction.php';
          }
          });
//		  }
   
    });
   </script> 
		
</body>
</html>

<?php


?>