<?php

    error_reporting(0);
    include 'config.php';
    $conn = OpenCon();
    ob_start();
    session_start();


if(isset($_POST['btn-insert'])){
$email=$_POST['email'];
$uname=$_POST['username'];
$bal=$_POST['balance'];
echo $bal;
$query = "INSERT INTO customers(customerName,customerEmail,customerBalance) VALUES ('$uname','$email','$bal')";
if(mysqli_query($conn,$query))
                {
                     echo "<script>alert('User Added');window.location.assign('createuser.php');</script>";
                   
                }
                else{
                    
                    echo "<script>alert('User Can not Add');window.location.assign('createuser.php');</script>";
                }
               
}   
if(isset($_POST['log1'])){
   // session_start();
    $btnid=  $_POST["sysId"];
    $_SESSION['btnid']=$btnid;

 }

if(isset($_POST['transaction'])){
   // session_start();
$tt= $_POST["transto"]; 
$bal=$_POST['balance'];

//echo $tt;
//echo $bal;

//echo "sender id".$_SESSION['btnid'];
//getting sender bal
$qry="select * from customers WHERE customerID='".$_SESSION['btnid']." '";
						$log1=mysqli_query($conn,$qry);
                       $row = mysqli_fetch_array($log1);
					    $sbal= $row['customerBalance'];
                        // echo "  ";
                        // echo $sbal;
                        // echo "  ";
                                    
//getting rec bal
$qry="select * from customers WHERE customerID='".$tt." '";
						$log1=mysqli_query($conn,$qry);
                       $row = mysqli_fetch_array($log1);
					    $rbal= $row['customerBalance'];
                        // echo $rbal;
                        // echo "  ";
                        if(sbal<bal){
                      echo "<script>alert('Not Enough Amount Is Available In Your Account To Transfer');
                      window.location.assign('viewcustomers.php');</script>";
}
$sbal=$sbal-$bal;
$rbal=$rbal+$bal;

//trans
$query = "UPDATE customers SET customerBalance = '".$sbal."' WHERE customerID = '".$_SESSION['btnid']."' ";
                if(mysqli_query($conn,$query))
                                {                                       
                                }
                
 $query = "UPDATE customers SET customerBalance = '".$rbal."' WHERE customerID = '".$tt."' ";
                if(mysqli_query($conn,$query))
                                {
                                                                      
                                }
                               
$tempbtn=$_SESSION['btnid'];
date_default_timezone_set('Asia/Kolkata');
$cdate=date("y-m-d h:i:sa");
// history
 $queryhis = "INSERT INTO transactionhistory(transactionSender,transactionReceiver,transactionAmount,transactionDate) VALUES 
 ('".$_SESSION['btnid']."','$tt','$bal','$cdate')";
if(mysqli_query($conn,$queryhis)){
                    

// remove all session variables
session_unset();
// destroy the session
session_destroy();
CloseCon($conn);

                    echo "<script>alert('Transaction Completed');
                    window.location.assign('viewcustomers.php');</script>";
                    
                }
                else{
                    
                   echo "<script>alert('Transaction Not Completed');window.location.assign('viewcustomers.php');</script>";
                }

//header("location:viewcustomers.php");

}
?>

