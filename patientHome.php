

<?php echo "Welcome To AHIS"; ?>
<?php echo "Patient "; ?>

<?php include "func.php";?>



<!DOCTYPE html>
<html>
<head>
	<title>
		Patient Home
	</title>
</head>
<body>


<form method="post" action=""<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>>
	<input type="submit" name="logout" value="logout">

<?php 

//$pID = $GET_['pId'];
 ?>


<input type="button" name="profile" value="My Account">

<input type="button" name="drugs" value="All Drugs Taken">

<input type="button" name="Diagnostics" value="Diagnostics">

<input type="button" name="All Prescriptions" value="All Prescriptions">


</form>
</body>


<?php

if(isset($_POST['logout']))
{
	logout();
}


 ?>
</html>
