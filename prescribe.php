

<?php

session_start();
require "connect.inc.php";

include 'func.php';
include 'head.php';

$drugs = "";
$pres = "";
$pId = $_SESSION['pId'];
$dId = $_SESSION['dId'];

$date = date("F j, Y, g:i a");


if(!isset($_SESSION['pcId']))
{
	$pres = pcIdGen();
	$_SESSION['pcId'] = $pres;
	addPrescription($pres,$pId,$dId);
	

}
else
{
	$pres = $_SESSION['pcId'];
}





?>



	<a href="docPortal.php"><button>Back</button></a>





	<div class="prescription">


	<div id="IdAndDate">
			<h6><?php echo "Prescription ID : ".$pres; ?></h6>
			<h6><?php echo $date; ?></h6>

	</div>



	<div id="doctorInfoBox">

		<p><?php echo docInfo($dId) ?></p>

	</div>



	<div id="patientInfoBox">

		<p><?php echo patientInfo($pId); ?></p>
	</div>




	<form name="prescribe" action="prescribe.php" method="POST">

		<div id="drugInfo">

		<input type="text" name="drugType" id="drugType" placeholder="Drug Type" required>

		<input type="text" name="drugGenName" id="drugGenName" placeholder="Generic Name" required>


		<input type="text" name="drugTradeName" id="drugTradeName" placeholder="drugTradeName" placeholder="drugTradeName">

		<input type="number" name="quantity" id="quantity" required placeholder="Quantity...">

		<input type="submit" name="addDrug" value="Add Drugs">

		</div>



		<div id="inst">

		<textarea id="instructions" name="insturctions" placeholder="insturctions..."></textarea>

		</div>


	</form>


<?php

if(isset($_POST['addDrug']) && $pres != "")
{


	$dType = $_POST['drugType'];

	$genName = $_POST['drugGenName'];

	$dTradeN = $_POST['drugTradeName'];

	$instruc = $_POST['insturctions'];

	$quantity = $_POST['quantity'];


	//addPrescription($pcId,$pId,$dId);

	addDrugs($pres,$pId,$dId,$dType,$genName,$dTradeN,$instruc,$quantity);

	}
	listDrugs($pres);

?>






	<form action="prescribe.php" method="POST">
		
		<div class="ctr">
			
			<input type="submit" name="issue" value="Issue Prescription">

			<input type="submit" name="delete" value="Delete Prescription">

		</div>

	</form>



	</div>



<?php

if(isset($_POST['issue']))
{
	header('location:docPortal.php');
	$_SESSION['pcId'] = null;
}
elseif (isset($_POST['delete']))
{
	deletePres($pres);
	deleteDrugs($pres);
	header('location:docPortal.php');
	$_SESSION['pcId'] = null;
}


include 'foot.php';

?>

