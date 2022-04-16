
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Authentication</title>

    
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet' type='text/css'>

    <style>
      .headerFont{
        font-family: 'Raleway', sans-serif;
        font-size: 24px;
      }

      .subFont{
        font-family: 'Raleway', sans-serif;
        font-size: 14px;
        
      }
      
      .specialHead{
        font-family: 'Raleway', sans-serif;
      }

      .normalFont{
        font-family: 'Raleway', sans-serif;
      }
      input[type=text] {
    border: 0;
    background: #f7f7f7;
   
    margin: auto;
    text-align: left;
    font-family: 'Raleway', sans-serif;
    font-size: 18px;
    font-weight: 1000;
    border: 1px solid #535c5c;
   
    outline: none;
    color: rgb(41, 38, 38);
    border-radius: 4px;
}

input[type=password] {
    border: 0;
    background: #f7f7f7;
    display: block;
   
    text-align: left;
    font-family: 'Raleway', sans-serif;
    font-size: 18px;
    font-weight: 1000;
    border: 1px solid #535c5c;
    border-radius: 4px;
    outline: none;
    color: rgb(41, 38, 38);
    
}

input[type=email] {
   
    background: #f7f7f7;
    display: block;
       
    text-align: left;
    font-family: 'Raleway', sans-serif;
    font-size: 18px;
    font-weight: 1000;
    border: 1px solid #535c5c;
    border-radius: 4px;
    
    outline: none;
    color: rgb(41, 38, 38);
   
}

input[type="text"]:focus {
  border: 2px solid ; 
    border-color:  #6f00ff;
    text-align: left;
    
}

input[type="password"]:focus {
    border: 2px solid ;
    border-color:#6f00ff;
    text-align: left;
    

}
input[type="email"]:focus {
    border: 2px solid ;
    border-color:#6f00ff;
    text-align: left;
    
}
      input[type="submit"] {
    border: 0;
    background: none;
    display: block;
    margin: 20px -1px auto;
    width: 150px;
    text-align: center;
    font-weight: bold;
    font-family: 'Raleway', sans-serif;
    font-size: 16px;
    padding: 14px 40px;
    outline: none;
    color: white;
    border-radius: 10px;
    background-image: linear-gradient(90deg,#03a9f4,#f441a5,#ffeb3b,#03a9f4);

    background-size: 400%;
}

input[type="submit"]:hover {
    font-size: 16px;
    background-image: linear-gradient(90deg,#03a9f4,#f441a5,#ffeb3b,#03a9f4 );

    animation:  motion 6s linear infinite;

} @keyframes motion{
    0%{
        background-position: 0%;
    }
    100%{
        background-position: 400%;
    }
}
input[type=radio] {
  border: 0px;
  accent-color: rgb(255, 0, 128);
  height:3rem ;
  margin: -0.5rem;
 
  
}
strong {
    font-size:16px ;
    font-family: 'Raleway', sans-serif;
    font-weight: bold;
    color:#f7f7f7;
}
p {
    font-size:16px ;
    font-family: 'Raleway', sans-serif;
    font-weight: bold;
    color: #f0f0f0;
}
p1 {
    font-size:16px ;
    font-family: 'Raleway', sans-serif;
    font-weight: bold;
    color: #1a195d;
}
::placeholder {
    color: rgb(137, 137, 137);
    font-family: 'Raleway', sans-serif;
}
a {
        color: #FFFFFF;
        text-decoration: none;
        font-weight: 1000;
      }

      a:link {
        color: #FFFFFF;
        text-decoration: none;
      }

      /* visited link */
      a:visited {
          color: #FFFFFF;
          text-decoration: none;
      }

      /* mouse over link */
      a:hover {
          color: #FFFFFF;
          text-decoration: none;
      }

      /* selected link */
      a:active {
          color: #FFFFFF;
          text-decoration: none;
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
          <a href="cpanel.php" class="navbar-brand headerFont text-lg">eVoting</a>
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
        <div class="col-sm-4 text-center" style="border:4px solid #808080;padding:50px;">
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

                      if(empty($_POST['adminUserName']) || empty($_POST['adminPassword']))
                      {
                        $error= "UserName or Password is Recquired.";
                      }
                      else
                      {
                        $admin_username= test_input($_POST['adminUserName']);
                        $admin_password= test_input($_POST['adminPassword']);


                        
                        $conn= mysqli_connect($hostname, $username, $password, $database);

                        
                        if(!$conn)
                        {
                          die("Connection Failed : ".mysqli_connect_error());
                        }

                        $sql= "SELECT * FROM db_evoting.tbl_admin WHERE admin_username='".$admin_username."' AND admin_password='".$admin_password."'";
                        $query= mysqli_query($conn, $sql);
                       

                        
                        if(mysqli_num_rows($query)==1)
                        {
                          header("location:nomination.html");
                        }
                        else
                        {
                          $error="SORRY !! AUTHENTICATION FAILED";
                          
                          echo "<p class='alert alert-danger'>$error</p>";

                          echo "<p class='normalFont text-primary'>Your Combination of UserName and Password is Incorrect. Better, You contact to the developer of system. </p>";
                          echo "<br><a href='admin.html' class='btn btn-primary'><span class='glyphicon glyphicon-refresh'></span> <strong>TRY AGAIN</strong></a>";
                        }

                        mysqli_close($conn);

                      }
                    
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


