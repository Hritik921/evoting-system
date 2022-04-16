
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>UPDATE PASSWORD</title>

    
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

    <style>
      .headerFont{
        font-family: 'Ubuntu', sans-serif;
        font-size: 24px;
      }

      .subFont{
        font-family: 'Raleway', sans-serif;
        font-size: 14px;
        
      }
      
      .specialHead{
        font-family: 'Oswald', sans-serif;
      }

      .normalFont{
        font-family: 'Roboto Condensed', sans-serif;
      }
    </style>


    
  </head>
  <body>
	
	<div class="container">
  	<nav class="navbar navbar-default navbar-fixed-top navbar-inverse
    " role="navigation">
      <div class="container">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="navbar-header">
          <a href="index.html" class="navbar-brand headerFont text-lg"><strong>eVoting</strong></a>
        </div>

        <div class="collapse navbar-collapse" id="example-nav-collapse">
          <ul class="nav navbar-nav">
            
          </ul>
          

          <button type="submit" class="btn btn-success navbar-right navbar-btn"><span class="normalFont"><strong>Admin Panel</strong></span></button>
        </div>

      </div> 
    </nav>

    
    <div class="container" style="padding-top:150px;">
    	<div class="row">
    		<div class="col-sm-4"></div>
    		<div class="col-sm-4 text-center" style="border:2px solid gray;padding:50px;">

<?php

					
                    		$hostname="127.0.0.1:50893";
				$username= "azure";
				$password= "6#vWHD_$";
				$database="db_evoting";



                    
                      function test_input($data) {
                        $data = trim($data);
                        $data = stripslashes($data);
                        $data = htmlspecialchars($data);

                        return $data;
                      } 


	
	if(empty($_POST['existingPassword']) || empty($_POST['newPassword']))
	{
		$error= "Fields Recquired.";
	}
	else
	{
		$old= test_input($_POST['existingPassword']);
		$new= test_input($_POST['newPassword']);
	}

	
	$conn= mysqli_connect($hostname, $username, $password, $database);

	

	$sql="SELECT * FROM db_evoting.tbl_admin WHERE admin_password='".$old."'";
	$query= mysqli_query( $conn, $sql);
	$rows= mysqli_num_rows($query);
	if($rows==1)
	{
		// Given Password is Valid
		$sql="UPDATE db_evoting.tbl_admin SET admin_password='$new' WHERE admin_username='admin'"; 
		if($query= mysqli_query($conn, $sql))
		{
			// Successfully Changed
			echo "<img src='images/success.png' width='70' height='70'>";
			echo "<h3 class='text-info specialHead text-center'><strong> SUCCESSFULLY CHANGED.</strong></h3>";
			echo "<a href='cpanel.php' class='btn btn-primary'> <span class='glyphicon glyphicon-ok'></span> <strong> Finish</strong> </a>";
		}
	}
	else
	{
		$error= "Old-Password is Incorrect";

		echo "<img src='images/error.png' width='70' height='70'>";
		echo "<h3 class='text-info specialHead text-center'><strong> $error</strong></h3>";
		echo "<a href='index.html' class='btn btn-primary'> <span class='glyphicon glyphicon-ok'></span> <strong> Finish</strong> </a>";

	}

	mysqli_close($conn);

?>

	
    		</div>
    		<div class="col-sm-4"></div>
    	</div>
    </div>

    </div>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>


