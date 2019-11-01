
<?php
//include 'head.php';
require 'connect.inc.php';

function listAllDrugs($id)
{


	$query = "SELECT `pcId`, `drugGenericName`, `drugTradeName`, `instructions`, `quantity` FROM `drug` WHERE dId = '$id'";


	$queryRun = mysql_query($query);

	if($queryRun)
	{

		echo "<table class=resultsT>";
            echo "<tr>";
                echo "<th>Prescription ID </th>";
                echo "<th>Drug Generic Name</th>";
                echo "<th>Drug Trade Name</th>";
                echo "<th>Instructions</th>";
                echo "<th>Quantity</th>";


            echo "</tr>";
        while($row = mysql_fetch_array($queryRun))
        {

            	echo "<tr>";
                echo "<td>".$row['pcId']."</td>";
                echo "<td>".$row['drugGenericName']."</td>";
                echo "<td>".$row['drugTradeName']."</td>";
                echo "<td>".$row['instructions']."</td>";
                echo "<td>".$row['quantity']."</td>";


            echo "</tr>";
        }
        echo "</table>";



	}



}



 ?>


<?php


//include('foot.php');

?>
