

<?php
// Initialize the session
session_start();
session_destroy();

// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: $page");
    exit;
}
 
 
// Include config file
require_once "connect.inc.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";


 
// Processing form data when form is submitted



if($_SERVER["REQUEST_METHOD"] == "POST")
{
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        
        $username_err = "Please enter username.";

    } 

    else
    {

        $username = trim($_POST["username"]);
    }
    


    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }



    // check users account Type
    $guess = "";

    if(substr($username, 0,4) == 'phId')
    {
      $acc = 'phId';
    }


    else
    {
      $acc = substr($username, 0,3);

    }


    if($acc == 'dId' || $acc == 'pId' || $acc == 'phId')
    {
         


          // set location of the table
        $location = "";
        $page = "";
        switch ($acc)
        {
          case 'dId':
            $location = "doctor";
            $page = "docHome.php";
            break;

          case 'pId':
            $location = "patient";
            $page = "patientHome.php";
            break;

          case 'phId':
            $location = "pharmacy";
            $page = "pharmHome.php";
          
          default:
            break;
        }




        // Validate credentials
        if(empty($username_err) && empty($password_err))
        {
         
            
            // Prepare a select statement
            $sql = "SELECT '$acc', 'pin' FROM $location WHERE $acc = '$username' AND pin = '$password'";



            $queryRun = mysql_query($sql);

            if ($queryRun)
            {

              if(mysql_num_rows($queryRun) == 0)
              {
                echo "Sorry, You are not registered! Please sign up to use AHIS Services. Thank you!";
                 
              }

              else
              {
                 echo "Success";

                session_start();
                                  
                // Store data in session variables
                $_SESSION["loggedin"] = true;
                $_SESSION["dId"] = $username;
                $_SESSION["name"] = $username;
                $_SESSION["location"] = $page;                            
                                    
                // Redirect user to welcome page


                header("location: $page");
              

              }

        

            }
            else{
              echo "mysql error. ".mysql_error();
            }






  



        }



    }
    else
    {
      echo "<h1>Your ID should Start with dId, pId, or phId</h1>";
    }
 


   
                       
}


?>


 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">

    <script type="text/javascript" src="../js/script.js"></script>


    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>

    <link rel="stylesheet" type="text/css" href="../style/style.css">
</head>
<body>

  <div class="containerLog">
    <div class="wrapper">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>AHIS ID</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>PIN</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
                <input type="Reset" class="btn btn-primary" name="reset" value="Reset">
            </div>
            <p>Don't have an account? <a href="reg.php">Register</a>.</p>
        </form>
    </div> 

    </div>   
</body>
</html>