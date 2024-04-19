<html>
<body>
<?php


$server_name="localhost";
$user_name="root";
$password="";
$database="order form";

$con=new mysqli($server_name,$user_name,$password,$database);
if (!$con)
	echo "There are some problem while connecting the database";

//there are no errors

    $product      =$_POST['product'];
    $metal        =$_POST['metal'];
    $weight       =$_POST['weight'];
    $karatage     =$_POST['karatage'];
    $sdetails     =$_POST['sdetails'];
    $size         =$_POST['size'];
    $filename     =$_POST['filename'];
	$date         =$_POST['date'];
    $fname        =$_POST['fname'];
	$tel          =$_POST['tel'];
    $email        =$_POST['email'];
    $cmnt         =$_POST['cmnt'];	
	
	$qry="INSERT INTO `order`(`product`, `metal`, `weight`, `karatage`, `sdetails`, `size`, `filename`, `date`, `fname`, `tel`, `email`, `cmnt`) VALUES ('$product','$metal','$weight','$karatage','$sdetails','$size','$filename','$date','$fname','$tel','$email','$cmnt')";
	$insert= mysqli_query($con,$qry);
	

if(!$insert){	
  echo "There are some problem while connecting the data";
  }
  
  else
  {
	echo "Data Inserted"; 
  }
	

$con->close();
	
	


	
?>
</body>
</html>