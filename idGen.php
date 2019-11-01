
<?php

	require "connect.inc.php";



function createUserId($accType)
{

		switch ($accType) 
		{

			case "doctor":
				$pre = "dId";
				break;


			case "patient":
				$pre = "pId";
				break;

			case "pharmacy":
				$pre = "phId";
				break;

			case "reciptionist":
				$pre = "rId";
				break;
			
			default:
				$newUserID = "Please Select Valid Account Type!";
				break;
		}



		if($pre != "")
		{
		

			$id  = rand(1000000,9000000);
			$newUserID = $pre.$id;
			$exist = false;


			if($pre == "dId")
			{
					$query = "SELECT '$pre' From '$accType' WHERE '$pre' ='$newUserID'";

					$data = mysql_query($query);

					if($data)
					{


						while ($row = mysql_fetch_assoc($data))
						{

								if($row == $newUserID)
								{
									$exist = true;
									
								}
								else
								{
									$exist = false;
						
			
								}
                        }

					}
					   
			}

		}


	if (!$exist)
	{
		return $newUserID;

	}

	else
	{
		return "ID is Taken! Please Try Again";
	}

	

}


?>