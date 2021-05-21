

<?php
    //	$c=mysqli_connect("localhost","root","");
	   //for fetching we have established the mysql connection
					 
	   //here we have selected the database on which we want to perform the operations
	   include 'config.php';
       $c= OpenCon();	



//session_start();
if(isset($_SESSION['btnid'])){
$btnid=$_SESSION['btnid'];
}else{
header("location:viewcustomers.php");
}
?>



<html>
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="maincss.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Banking solutions - Make Transaction</title>	
	<link rel="icon" href="card.png" type="image/x-icon"/>
	<style>
		.customer-table thead tr:hover{background: #090b14;}
	</style>
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
            <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span>Make Transaction</li>
        	</ul>
			</div>
				<!--  path end -->
					
<!--   View Customer start -->
			

<!--   View Customer end -->
			<div class="mid-vc">
			<h3>Make Transaction</h3>

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
                <form action="backend.php" method="POST" style="margin: 0;">  
				<div class="mid-stable-main">
                <div class="container">	
                    <div class="main-mid-mt">
                <div class="mid-stable-t">
           		<p>From</p>
				<table class="customer-table" >
				<thead>
						<tr>
						<th>Customer Name</th>
						<th>Customer Email</th>
						<th>Customer Balance</th>
					
						</tr>
					</thead>
					<tbody>
   
						<?php
					      if($c){
						//mysqli_select_db($c,"basicbank");
						$qry="select * from customers WHERE customerID= '".$btnid." '";
						$log1=mysqli_query($c,$qry);
						$row = mysqli_fetch_array($log1);
					        	     	
								$output = '
					             <tr><td>'.$row['customerName'].'</td>
					              <td>'.$row['customerEmail']. '</td>
					              <td>'.$row['customerBalance']. '</td>
								  <tr>';
									echo $output;	
					        
						} 
						?>  
				</tbody>
			</table>
            </div>
                
   <div class="select">          			           
<?php
$query1 = "select * from customers";
$result = mysqli_query($c,$query1);
?>

<select class="form-select" aria-label="Default select example" name="transto" id="transto" required>
<option selected disabled>Select a receiver</option>
<?php 
//loop to fetch degree code from database
while ($row = mysqli_fetch_array($result))
{
   if($btnid != $row["customerID"]){
    echo "<option  value='".$row['customerID']."'>".$row['customerName']." " .$row['customerBalance']."</option>";
    }
   
}
?>        
</select>	
  </div>  
  <div class="user-input-mt">
                            <input type="number" id="balance" name="balance"
                            style="color:white;background: #090b14; border-radius: .25em;
                            padding: 12px 20px; padding: 12px 15px;" min="1" 
                            placeholder="balance" required> </div>
                     
		
        <div class="user-input-mt">
<input type="submit" name="transaction" value="Make Transaction" class="btn-createuser-mt" style="margin-top:30px;" id="btn-insert" />

</div> 
</div>
</form>
		<!-- customer table end -->
</div>	
</div>		
</div>	
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
							<p>30 , Mohan Dev House, Tolstoy Marg, Delhi</p>
							<p><span class="fa fa-phone"></span>
								<a href="tel:+1(21) 23310045">+1(21) 23310045</a></p>

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


		</div>

           <div>
         <div class="mid-stable">
				
		<div class="dark-btn inner-switch"> 
			<a><i class="fa fa-moon-o"></i></a>
		</div>	
						
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
      //    data : {sysId: cell, log1: 1},
          success:function(data){
			//alert(data);
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