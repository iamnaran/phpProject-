<?php 
mysql_connect('localhost','root','');
	mysql_select_db('project');

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title> About us</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  
<link rel="icon" type="image/gif" href="favicon.ico" />
<style type="text/css">
	
body{
	color: #ffffff;
  background: rgba(19, 35, 47, 0.9);
  max-width: 500px;
  text-align: center;
  margin: 20px auto;
}
</style>
 </head>
 <body>
 <nav class="navbar navbar-inverse navbar-fixed-top" id="my-navrbar">

    <div class="container">
    	  <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
				       <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
		      </button>
     		<a href="project1.php" class="navbar-brand">The Top Eleven </a>
    	</div>

    	<div class="collapse navbar-collapse" id="navbar-collapse">

		</a>



				    <ul class="nav navbar-nav">
				     	<li> <a href="feedback.php"> Feedback</a>
				        <li> <a href="about.php"> About us </a>
					</ul>
      
    	</div>
    </div>
    
  </nav>

<br>
<br>
  <h1>
  	About us
  	<img src="logo.png">
  </h1>


  <?php 
	$query = mysql_query("SELECT * FROM aboutinfo");
	$row = mysql_fetch_array($query);
	echo $row['aboutus'];
   ?>
   <!-- We, welcome you to THE TOP ELEVEN webpage where you will find top eleven players, songs, games and many more.-->


<script src="https://code.jquery.com/jquery-3.1.1.min.js"> </script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  
 </body>
 </html>