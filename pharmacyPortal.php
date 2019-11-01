
<?php
session_start();

include 'connect.inc.php';
include 'func.php';


$id = $_SESSION['pcId'];
$phId = $_SESSION['name'];

//$id = "pcId181783";
include 'head.php';

?>


<div class="ctr">

    <form method="Post" action=pharmacyPortal.php>

       <input type="submit" name="home" value="Home">
        <input type="submit" name="logout" value="logout">
    </form>

</div>




<div class="prescription">



<!--Drugs Are listed Here-->
<div id="middle">

<?php


	$query = "SELECT `id`,`pId`,`dId`,`drugType`, `drugGenericName`, `drugTradeName`, `instructions`, `quantity`,`unitCost`,`totalCost` FROM `drug` WHERE pcId = '$id'";


	$queryRun = mysql_query($query);



	if($queryRun)
	{

    echo "<form method = 'POST' action='pharmacyPortal.php'>";

		echo "<table class=resultsT>";
            echo "<tr>";
                echo "<th>Drug Type</th>";
                echo "<th>Drug Generic Name</th>";
                echo "<th>Drug Trade Name</th>";
                echo "<th>Quantity</th>";
                echo "<th>Unit Cost</th>";
                echo "<th>Total Cost</th>";
                echo "<th> Instructions </th>";

            echo "</tr>";


        $ids = array();

        while($row = mysql_fetch_array($queryRun))
        {
           
           array_push($ids, $row['id']);

           $doctorId = $row['dId'];
           $patientId = $row['pId'];

        		echo "<br>";


            	echo "<tr>";
                echo "<td>".$row['drugType']."</td>";
                echo "<td>".$row['drugGenericName']."</td>";
                echo "<td>".$row['drugTradeName']."</td>";
                echo "<td>".$row['quantity']."</td>";
                //echo "<td>".$row['unitCost']."</td>";

                echo "<td>"."<input type = text name ='uCost[]' required >"."</td>";


                //echo "<td>".$row['totalCost']."</td>";

                    echo "<td>"."<input type = text name = 'tCost[]' required>"."</td>";

	 			//echo "<td>".$row['instructions']."</td>";

	 			    echo "<td>"."<textarea name = instructions[] >".$row['instructions']."</textarea>"."</td>";


           		echo "</tr>";



           	

           	

        }
        echo "</table>";

        $count = count($ids);


      
         
                  echo "<div id='parties'>";

                                  echo docInfo($doctorId);

                                  echo patientInfo($patientId);

                                  echo pharmacyInfo($phId);

                  echo "</div>";



                echo "<div id='moreInfo'>";

                          echo "<input type='text' name='pickedUpBy' placeholder='Picked Up By'>";
                          echo "<input type='text' name='reciverId' placeholder=Reciver Id'>";
                          echo "<input type='text' name='issuedBy' placeholder='Issued By...'>";
                          echo "<input type='text' name='preparedBy' placeholder='Prepared By'>";

                          echo "<select>";
            
                          echo"<option>Choose refill...</option>";

                          echo"<option>Allowed</option>";
                          echo"<option>Not Allowed</option>";

                          echo"</select>";



                echo "</div>";





            echo "<div id='menuControls'>";


                echo "<input type='submit' value='Issue' name='pres'>";
                echo "<input type='submit' value='Print' name='print'>";
                echo "<input type='submit' value='Cancel' name='pres'>";

            echo "</div>";




      echo "</form>";



	}
	else
	{
		echo mysql_error();
		echo "<br><br><br>"."No Drugs Found!";
	}
	


?>




</div>


<?php

 
 


?>



<!--Fullfilling Info are listed here-->




<?php echo "<pre>";

 //print_r($_POST);
 //print_r($ids);


// echo "</pre>"; ?>
<!--Submiting Controls are here-->



<?php




if(isset($_POST['pres']))
{
  $uPrices = $_POST['uCost'];
  $tCosts = $_POST['tCost'];
  $instructions = $_POST['instructions'];

  updatePresc($count, $ids, $uPrices, $id,$instructions, $tCosts);

}



if(isset($_POST['logout']))
      {
        logout();


      }

      if(isset($_POST['drugs']))
      {
        listAllDrugs($pId);

      }


      if(isset($_POST['home']))
      {
        $_SESSION['pcId'] = "";
        header("location:pharmHome.php");
      }










include 'foot.php'

	?>




