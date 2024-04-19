<html>
<body>
<?php


$server_name="localhost";
$user_name="root";
$password="";
$database="form";

$con=new mysqli($server_name,$user_name,$password,$database);
if (!$con)
	echo "There are some problem while connecting the database";

//there are no errors

	$name   =$_POST['name'];
    $tel    =$_POST['tel'];
    $email  =$_POST['email'];
    $cmt    =$_POST['cmt'];	
	
	$qry="INSERT INTO `forms`(`name`, `tel`, `email`, `cmt`) VALUES ('$name','$tel','$email','$cmt')";
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