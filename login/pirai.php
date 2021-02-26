<?php
 $var1 =$_POST['first'];
 $var2 =$_POST['last'];
 $var3 =$_POST['mobile'];
 $var4 =$_POST['add'];
 $var5 =$_POST['city'];
 $var6 =$_POST['state'];
 $var7 =$_POST['coun'];

 $con=mysqli_connect("localhost","root","","pirai");
 if ($con) {
 	$insert ="insert into data values('$var1','$var2','$var3','$var4','$var5','$var6','$var7')";
 	$store=mysqli_query($con,$insert);
 	if($store)
 	{
 			?>
 	<div style="transform: translate(40%,0%);">
 	<h1 > Inserted Successfully</h1>

 <?php
 	}
 	else
 	{
 		echo "Insertion failed";
 	}
 }
 else{
 	echo "connection failed";
 }
}
else{
	header("location:index1.html");
}

 ?>
