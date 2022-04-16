<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Change Password</title>

    
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
          <a href="nomination.html" class="navbar-brand headerFont text-lg">BACK</a>
        </div>

        <div class="collapse navbar-collapse" id="example-nav-collapse">
          <ul class="nav navbar-nav">
            
          </ul>
          

          <span class="normalFont"><a href="index.html" class="btn btn-success navbar-right navbar-btn"><strong>Sign Out</strong></a></span></button>
        </div>

      </div> 
    </nav>

    
    <div class="container" style="padding-top:100px;">
    	<div class="row">
    		<div class="col-sm-4"></div>
    		<div class="col-sm-4" style="border:2px solid gray;padding:50px;">
    			
    			<div class="page-header">
    				<h2 class="specialHead">Admin's Password</h2>
    			</div>
          
          <form action="updatePwd.php" method="POST">
      			<div class="form-group">
      				<label for=""><p1>OLD Password</p1></label><br>
      				<input type="password" name="existingPassword" placeholder="Enter Old Password" class="form-control"><br>

      				<label for=""><p1>NEW Password</p1></label><br>
      				<input type="password" name="newPassword" class="form-control" placeholder="Enter New Password"><br>

              <label for=""><p1>CONFIRM Password</p1></label><br>
              <input type="password" name="retypePassword" class="form-control" placeholder="Enter New Password Again"><br>

      				<button type="submit" class="btn btn-block span btn-primary " style=" font-family: 'Raleway', sans-serif;"> <span class="glyphicon glyphicon-ok"></span> Change Password</button>
      			</div>
          </form>
    		</div>
    		<div class="col-sm-4"></div>
    	</div>
    </div>

    </div>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>