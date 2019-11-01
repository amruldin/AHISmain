



<?php
session_start();
include 'head.php';
include 'func.php';
echo "<h1>Pharmacy</h1>";
echo "<h1>Welcome to AHIS</h1>";

$phId = $_SESSION['name'];
echo pharmacyInfo($phId);


?>



	<form method="post" action=""<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>>


	<input type="submit" name="logout" value="logout">
	<input type="button" name="profile" value="My Account">
	<input type="text" name="pcId" placeholder="Enter Prescrption ID">
	<input type="submit" name="enter" value="Enter">





	</form>






</body>


<?php

if(isset($_POST['logout']))
{
	logout();
}


if(isset($_POST['enter']))
{
	if(!empty(trim($_POST['pcId'])))
	{
		$id = $_POST['pcId'];

		if(pcExist($id))
		{
			$_SESSION['pcId'] = $id; 

			header("location: pharmacyPortal.php");
		}
		else
		{
			echo "<h3> Prescrption Not Found! ! </h3>";
		}

	}


	else
	{
		echo "<h1> Please Enter Prescrption ID !</h1>";
	}

}

include 'foot.php';

 ?>



