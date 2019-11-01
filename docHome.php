

<?php
session_start();
include 'head.php';
$id = $_SESSION['dId'];
include 'func.php';

echo "<h1>Welcome to AHIS</h1>";
echo "<h5>".docName($id)."</h5>";






?>





	<br>


	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">


	<input type="submit" name="logout" value="logout">
	<input type="button" name="profile" value="My Account">
	<input type="text" name="pId" placeholder="Enter patient Id">
	<input type="submit" name="enter" value="Enter">





</form>





<?php

if(isset($_POST['logout']))
{
	logout();
}


if(isset($_POST['enter']))
{
	if(!empty(trim($_POST['pId'])))
	{
		$id = $_POST['pId'];

		if(pExist($id))
		{
			$_SESSION['pId'] = $id; 

			header("location: docPortal.php");
		}
		else
		{
			echo "<h3>Patient is Not Recognized ! </h3>";
		}

	}


	else
	{
		echo "<h1>Please Enter Patient pId !</h1>";
	}

}

include 'foot.php';
 ?>



