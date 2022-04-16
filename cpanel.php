<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Control Panel</title>

    
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
    color:#1a195d;
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
          
        </div>

        <div class="collapse navbar-collapse" id="example-nav-collapse">
          <ul class="nav navbar-nav">
            
             <li><a href="nomination.html"><span class="subFont">Nomination's List</span></a></li>
            <li><a href="changePassword.php"><span class="subFont">Admin's Password</span></a></li>
            <li><a href=""><span class="subFont">Feedback Report</span></a></li> 
          
          </ul>
          
          
          <span class="normalFont"><a href="index.html" class="btn btn-success navbar-right navbar-btn"><strong>Sign Out</strong></a></span></button>
        </div>

      </div> 
    </nav>

    <div class="container" style="padding:100px;">
      <div class="row">
        <div class="col-sm-12" style="border:2px solid gray;">
          
          <div class="page-header">
            <h2 class="specialHead">CONTROL PANEL</h2>
            <p1 class="normalFont">This is Administration Panel.</p1>
          </div>
          
          <div class="col-sm-12">
            <?php
              require 'config.php';

              $CSGO=0;
              $LOL=0;
              $DOTA2=0;
              $FORTNITE=0;

              $conn = mysqli_connect($hostname, $username, $password, $database);
              if(!$conn)
              {
                echo "Error While Connecting.";
              }
              else
              {

                 // csgo
                $sql ="SELECT * FROM tbl_users WHERE voted_for='CSGO'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for'])
                      $CSGO++;
                  }


                  $CSGO_value= $CSGO*10;

                  echo "<strong>CSGO</strong><br>";
                  echo "
                  <div class='progress'>
                  
                    <div class='progress-bar  progress-bar-success' role='progressbar' aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$CSGO_value."%'>".$CSGO_value."%
                      <span class='sr-only'>CS: GO</span>
                    </div>
                  </div>
                  ";
                }

                // LOL
                $sql ="SELECT * FROM tbl_users WHERE voted_for='LOL'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for'])
                      $LOL++;
                  }


                  $lol_value= $LOL*10;

                  echo "<strong>League of Legends</strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-danger' role='progressbar' aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$lol_value."%'>".$lol_value."%
                      <span class='sr-only'>CS: GO</span>
                    </div>
                  </div>
                  ";
                }

                // DOTA2 
                $sql ="SELECT * FROM tbl_users WHERE voted_for='DOTA2'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for'])
                      $DOTA2++;
                  }


                  $DOTA2_value= $DOTA2*10;

                  echo "<strong>DOTA 2</strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-info' role='progressbar' aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$DOTA2_value."%'>".$DOTA2_value."%
                      <span class='sr-only'>CS: GO</span>
                    </div>
                  </div>
                  ";
                }

                // FORTNITE
                $sql ="SELECT * FROM tbl_users WHERE voted_for='FORTNITE'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for'])
                      $FORTNITE++;
                  }


                  $FORTNITE_value= $FORTNITE*10;

                  echo "<strong>FORTNITE</strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-warning' role='progressbar' aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$FORTNITE_value."%'>".$FORTNITE_value."%
                      <span class='sr-only'>FORTNITE</span>
                    </div>
                  </div>
                  ";
                }

               echo "<hr>";

                $total=0;

                // Total
                $sql ="SELECT * FROM tbl_users";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for'])
                      $total++;
                  }


                  $tptal= $total*10;

                  echo "<strong>Total Number of Votes</strong><br>";
                  echo "
                  <div class='text-primary'>
                    <h3 class='normalFont'>VOTES : $total </h3>
                  </div>
                  ";
                }

              }
            ?>
          </div>

        </div>
      </div>
    </div>
  </div>


    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
