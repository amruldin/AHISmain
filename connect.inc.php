

<?php
$connect= mysql_connect ('localhost','amruldin','1!Afghanistan');

$database= mysql_select_db ('ahis');

if ($connect && $database)
{
}
else
{
	echo 'Not Connected';
}



?>
