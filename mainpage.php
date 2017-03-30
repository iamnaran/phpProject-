<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>

<link rel="icon" type="image/gif" href="favicon.ico" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  
  
<title>The Top Eleven </title>
<style type="text/css">

body{

  background: rgba(19, 35, 47, 0.9);
}
	h3{
    text-align: center;
    color: white;
    align-content: center;
    font-weight: bolder;
    font-size: 80px;
	transition: .8s ease;
  }
 .btn{

  align-content: center;
  align-self: center;
 }
  
  #h:hover{
  opacity: 100;
  margin-top: 10px;

	transition: .8s ease;
}

#h{
  margin-top: 5%;
  font-size: 30px;
  transition: .8s ease;
  color: #ffffff;
  background: rgba(19, 35, 47, 0.9);
  text-align: center;
  font-weight: bold;

}
table{
	transition: .8s ease;

}
table:hover{

	background-color: rgba(19, 35, 47, 0.9);
	transition: .8s ease;
}

.jumbotron0{
background-image: url("https://www.thesun.co.uk/wp-content/uploads/2016/06/ronaldo_mobile_top.jpg?strip=all&w=750&h=352&crop=1");
background-size: cover;
position: relative;
color: #ffffff;

background-repeat: no-repeat;
transition: 1000ms;
    
}

.jumbotron1{
background-image: url("http://wallpapercave.com/wp/xFrBI00.jpg");
background-size: cover;
transition: 1000ms;
position: relative;

background-repeat: no-repeat;
color: #ffffff;
    
}
.jumbotron2{
background-image: url("http://www.sportlineng.com/wp-content/uploads/2016/10/zlatan.jpg");
background-size: cover;
transition: 1000ms;
position: relative;

background-repeat: no-repeat;
color: #ffffff;
    
}
.jumbotron3{
background-image: url("http://i.eurosport.com/2016/01/09/1767704-37352216-640-360.jpg");
background-size: cover;
transition: 1000ms;
background-repeat: no-repeat;
position: relative;
color: #ffffff;
    
}
.jumbotron4{
background-image: url("http://a.espncdn.com/combiner/i/?img=/photo/2014/1108/fc_kroos_1296x729.jpg&w=738&site=espnfc");
background-size: cover;
transition: 1000ms;
position: relative;
color: #ffffff;
background-repeat: no-repeat;
    
}
.jumbotron5{
background-color: rgba(4, 0, 47, 0.9);
opacity: 1000;
background-size: cover;
transition: 1000ms;
position: relative;
color: #ffffff;
background-repeat: no-repeat;
    
}
.jumbotron6{

  background: rgba(19, 35, 47, 0.9);
background-size: cover;
opacity: 1;
transition: 1000ms;
position: relative;
color: #ffffff;
    
}
.jumbotron7{
opacity: 1;
background: rgba(19, 35, 47, 0.9);
color: #ffffff;
    
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
     		<a href="" class="navbar-brand">The Top Eleven </a>
    	</div>

    	<div class="collapse navbar-collapse" id="navbar-collapse">

    	<a href="" class="btn btn-info navbar-btn navbar-right">Welcome

    	<?php
			echo $_SESSION['username'];
			?>

		</a>
		<form class="myform" action="mainpage.php" method="post">
		<input type="submit" style="margin-right:7px;" name="logout" class="btn btn-info navbar-btn navbar-right " value="Logout">
		</form>
		<?php
			if (isset($_POST['logout']))
			 {

					session_destroy();
					header('location:project1.php');
				}
		?>



				    <ul class="nav navbar-nav">
				     	<li> <a href="feedback.php"> Feedback</a>
				        <li> <a href="about.php"> About us </a>
					</ul>
      
    	</div>
    </div>
    
  </nav>
  
  <!--Header-->

   <div id="h">
		    <div>
		      The Top Eleven Football Player
		    </div>
    </div>


<div class="jumbotron0">
	<div class="container" text-center >
		<h1> <small> 1. </small> Cristiano Ronaldo </h1>
		
<div class="table-responsive">
  
		  <table class="table" >
		    <thead>
		      <tr>
				        <th>Information</th>
		      </tr>

		    </thead>

				    <tbody>
				    <tr>
				      <tr >
							        <td >
							        	Full name
							        </td>
							        <td>
							        	Cristiano Ronaldo dos Santos Aveiro
							         </td>
				      </tr>
				      <tr>
							        <td>
							        	Date of birth
							        </td>
							        <td>
							        	5 February 1985 (age 31)
							         </td>
				      </tr>
				      <tr>
							        <td>
							        	Place of birth
							        </td>
							        <td>
							        		Funchal, Madeira, Portugal
							         </td>
				      </tr>
				      <tr>
							        <td>
							        	Playing position
							        </td>
							        <td>
							        	Forward
							         </td>
				      </tr>
				      <tr>
							        <td>
							        	Current Team
							        </td>
							        <td>
							        	Real Madrid
							         </td>
				      </tr>
				      <tr>
							        <td>
							        	Number
							        </td>
							        <td>
							        		7
							         </td>
				      </tr>

				      </tr>

				    </tbody>
		  </table>	

  </div>

			<div class="btn-group">
				<a href="" class="btn btn-lg btn-warning"> Up vote </a>

				<a href="" class="btn btn-lg btn-danger"> Down vote</a>
			</div>
</div>
<br>
</div>

<!-- Player 2 -->
</br>
<div class="jumbotron1">
	<div class="container" text-center >
		<h1> <small> 2. </small> Lionel Messi </h1>
		
<div class="table-responsive">
  
		  <table class="table" >
		    <thead>
		      <tr>
				        <th>Information</th>
		      </tr>

		    </thead>

				    <tbody>
				    <tr>
				      <tr >
							        <td >
							        	Full name
							        </td>
							        <td>
							        	Lionel Andrés Messi
							         </td>
				      </tr>
				      <tr>
							        <td>
							        	Date of birth
							        </td>
							        <td>
							        	24 June 1987 (age 29)
							         </td>
				      </tr>
				      <tr>
							        <td>
							        	Place of birth
							        </td>
							        <td>
							        		Rosario, Argentina
							         </td>
				      </tr>
				      <tr>
							        <td>
							        	Playing position
							        </td>
							        <td>
							        	Forward
							         </td>
				      </tr>
				      <tr>
							        <td>
							        	Current Team
							        </td>
							        <td>
							        		Barcelona
							         </td>
				      </tr>
				      <tr>
							        <td>
							        	Number
							        </td>
							        <td>
							        		10
							         </td>
				      </tr>

				      </tr>

				    </tbody>
		  </table>	

  </div>

			<div class="btn-group">
				<a href="" class="btn btn-lg btn-warning"> Up vote </a>

				<a href="" class="btn btn-lg btn-danger"> Down vote</a>
			</div>
</div>
<br>
</div>

<!-- Player 3 -->

</br>
<div class="jumbotron2">
	<div class="container" text-center >
		<h1> <small> 3. </small> Zlatan Ibrahimovic </h1>
		
<div class="table-responsive">
  
		  <table class="table" >
		    <thead>
		      <tr>
				        <th>Information</th>
		      </tr>

		    </thead>

				    <tbody>
				    <tr>
				      <tr >
							        <td >
							        	Full name
							        </td>
							        <td>
							        	Zlatan Ibrahimovic
							         </td>
				      </tr>
				      <tr>
							        <td>
							        	Date of birth
							        </td>
							        <td>
							        	3 October 1981 (age 35)
							         </td>
				      </tr>
				      <tr>
							        <td>
							        	Place of birth
							        </td>
							        <td>
							        		Malmo, Sweden
							         </td>
				      </tr>
				      <tr>
							        <td>
							        	Playing position
							        </td>
							        <td>
							        	Striker
							         </td>
				      </tr>
				      <tr>
							        <td>
							        	Current Team
							        </td>
							        <td>
							        			Manchester United
							         </td>
				      </tr>
				      <tr>
							        <td>
							        	Number
							        </td>
							        <td>
							        			9
							         </td>
				      </tr>

				      </tr>

				    </tbody>
		  </table>	

  </div>

			<div class="btn-group">
				<a href="" class="btn btn-lg btn-warning"> Up vote </a>

				<a href="" class="btn btn-lg btn-danger"> Down vote</a>
			</div>
</div>
<br>
</div>

<!-- Player 4 -->


</br>
<div class="jumbotron3">
	<div class="container" text-center >
		<h1> <small> 4. </small> Gareth Bale </h1>
		
<div class="table-responsive">
  
		  <table class="table" >
		    <thead>
		      <tr>
				        <th>Information</th>
		      </tr>

		    </thead>

				    <tbody>
				    <tr>
				      <tr >
							        <td >
							        	Full name
							        </td>
							        <td>
							        	Gareth Frank Bale
							         </td>
				      </tr>
				      <tr>
							        <td>
							        	Date of birth
							        </td>
							        <td>
							        	16 July 1989 (age 27)
							         </td>
				      </tr>
				      <tr>
							        <td>
							        	Place of birth
							        </td>
							        <td>
							        			Cardiff, Wales
							         </td>
				      </tr>
				      <tr>
							        <td>
							        	Playing position
							        </td>
							        <td>
							        	Winger
							         </td>
				      </tr>
				      <tr>
							        <td>
							        	Current Team
							        </td>
							        <td>
							        			Real Madrid
							         </td>
				      </tr>
				      <tr>
							        <td>
							        	Number
							        </td>
							        <td>
							        			11
							         </td>
				      </tr>

				      </tr>

				    </tbody>
		  </table>	

  </div>

			<div class="btn-group">
				<a href="" class="btn btn-lg btn-warning"> Up vote </a>

				<a href="" class="btn btn-lg btn-danger"> Down vote</a>
			</div>
</div>
<br>
</div>

<!-- Player 5 -->



</br>
<div class="jumbotron4">
	<div class="container" text-center >
		<h1> <small> 5. </small> Toni Kroos </h1>
		
<div class="table-responsive">
  
		  <table class="table" >
		    <thead>
		      <tr>
				        <th>Information</th>
		      </tr>

		    </thead>

				    <tbody>
				    <tr>
				      <tr >
							        <td >
							        	Full name
							        </td>
							        <td>
							        	Toni Kroos
							         </td>
				      </tr>
				      <tr>
							        <td>
							        	Date of birth
							        </td>
							        <td>
							        	4 January 1990 (age 27)
							         </td>
				      </tr>
				      <tr>
							        <td>
							        	Place of birth
							        </td>
							        <td>
							        	Greifswald, East Germany
							         </td>
				      </tr>
				      <tr>
							        <td>
							        	Playing position
							        </td>
							        <td>
							        	Midfielder
							         </td>
				      </tr>
				      <tr>
							        <td>
							        	Current Team
							        </td>
							        <td>
							        			Real Madrid
							         </td>
				      </tr>
				      <tr>
							        <td>
							        	Number
							        </td>
							        <td>
							        			8
							         </td>
				      </tr>

				      </tr>

				    </tbody>
		  </table>	

  </div>

			<div class="btn-group">
				<a href="" class="btn btn-lg btn-warning"> Up vote </a>

				<a href="" class="btn btn-lg btn-danger"> Down vote</a>
			</div>
</div>
<br>
</div>

<!-- Player 6 -->

<div class="jumbotron5">
	<div class="container" text-center >
		<h1> <small> 6. </small> Neymar Jr. </h1>
		
<div class="table-responsive">
  
		  <table class="table" >
		    <thead>
		      <tr>
				        <th>Information</th>
		      </tr>

		    </thead>

				    <tbody>
				    <tr>
				      <tr >
							        <td >
							        	Full name
							        </td>
							        <td>
							        	Neymar da Silva Santos Junior
							         </td>
				      </tr>
				      <tr>
							        <td>
							        	Date of birth
							        </td>
							        <td>
							        	5 Feburary 1992 (age 25)
							         </td>
				      </tr>
				      <tr>
							        <td>
							        	Place of birth
							        </td>
							        <td>
							        	Magi das Cruzes, Brazil
							         </td>
				      </tr>
				      <tr>
							        <td>
							        	Playing position
							        </td>
							        <td>
							        	Forward
							         </td>
				      </tr>
				      <tr>
							        <td>
							        	Current Team
							        </td>
							        <td>
							        			Barcelona
							         </td>
				      </tr>
				      <tr>
							        <td>
							        	Number
							        </td>
							        <td>
							        			11
							         </td>
				      </tr>

				      </tr>

				    </tbody>
		  </table>	

  </div>

			<div class="btn-group">
				<a href="" class="btn btn-lg btn-warning"> Up vote </a>

				<a href="" class="btn btn-lg btn-danger"> Down vote</a>
			</div>
</div>
<br>
</div>

<!-- Player 6 -->


 <div id="h">
		    <div>
		      The Top Eleven Songs
		    </div>
    </div>



    <div class="jumbotron6">
	<div class="container" text-center >
		<h1> <small> </small> Song List </h1>
		
<div class="table-responsive">
  
		  <table class="table" id="table1">
		    <thead>
		      <tr>
				        <th>Songs Name </th>
				         <th>Rate Song</th>
		      </tr>

		    </thead>

				    <tbody>
				    <tr>
				      <tr >
							        <td >
							        	Drake featuring WizKid and Kyla - One dance.
							        </td>
							        <td>
							        	<div class="btn-group">
				<a href="" class="btn btn-lg btn-warning"> Up vote </a>

				<a href="" class="btn btn-lg btn-danger"> Down vote</a>
			</div>
							         </td>
				      </tr>
				      <tr>
							        <td>
							        	Justin Timberlake - Can't stop the feeling.
							        </td>
							        <td>
							        	<div class="btn-group">
				<a href="" class="btn btn-lg btn-warning"> Up vote </a>

				<a href="" class="btn btn-lg btn-danger"> Down vote</a>
			</div>
							         </td>
				      </tr>
				      <tr>
							        <td>
							        	The Chainsmokers - Don't let me down.
							        </td>
							        <td>
							        		<div class="btn-group">
				<a href="" class="btn btn-lg btn-warning"> Up vote </a>

				<a href="" class="btn btn-lg btn-danger"> Down vote</a>
			</div>
							         </td>
				      </tr>
				      <tr>
							        <td>
							        Calvin Harris - This is what you came for.
							        </td>
							        <td>
							        	<div class="btn-group">
				<a href="" class="btn btn-lg btn-warning"> Up vote </a>

				<a href="" class="btn btn-lg btn-danger"> Down vote</a>
			</div>
							         </td>
				      </tr>
				      <tr>
							        <td>
							        	Sia - Cheap Thrills.
							        </td>
							        <td>
							        	<div class="btn-group">
				<a href="" class="btn btn-lg btn-warning"> Up vote </a>

				<a href="" class="btn btn-lg btn-danger"> Down vote</a>
			</div>
							         </td>
				      </tr>
				      <tr>
							        <td>
							        	Desiigner - Panda.
							        </td>
							        <td>
							        		<div class="btn-group">
				<a href="" class="btn btn-lg btn-warning"> Up vote </a>

				<a href="" class="btn btn-lg btn-danger"> Down vote</a>
			</div>
							         </td>
				      </tr>

				      </tr>

				    </tbody>
		  </table>	


<!-- Player 6 -->
</br>
 <div id="h">
		    <div>
		      The Top Eleven Android Games
		    </div>
    </div>



    <div class="jumbotron7">
	<div class="container" text-center >
		<h1> <small> </small> Game List </h1>
		
<div class="table-responsive">
  
		  <table class="table">
		    <thead>
		      <tr>
				        <th>Game Name </th>
				         <th>Rate Game</th>
		      </tr>

		    </thead>

				    <tbody>
				    <tr>
				      <tr >
							        <td >
							        	Dead Trigger 2. by MADFINGER Games.
							        </td>
							        <td>
							        	<div class="btn-group">
				<a href="" class="btn btn-lg btn-warning"> Up vote </a>

				<a href="" class="btn btn-lg btn-danger"> Down vote</a>
			</div>
							         </td>
				      </tr>
				      <tr>
							        <td>
							        	Need for Speed - Most Wanted. by Electronic Arts.
							        </td>
							        <td>
							        	<div class="btn-group">
				<a href="" class="btn btn-lg btn-warning"> Up vote </a>

				<a href="" class="btn btn-lg btn-danger"> Down vote</a>
			</div>
							         </td>
				      </tr>
				      <tr>
							        <td>
							        	Shadowrun Dragonfall - Director's Cut.
							        </td>
							        <td>
							        		<div class="btn-group">
				<a href="" class="btn btn-lg btn-warning"> Up vote </a>

				<a href="" class="btn btn-lg btn-danger"> Down vote</a>
			</div>
							         </td>
				      </tr>
				      <tr>
							        <td>
							       Modern Combat 5: Blackout
							        </td>
							        <td>
							        	<div class="btn-group">
				<a href="" class="btn btn-lg btn-warning"> Up vote </a>

				<a href="" class="btn btn-lg btn-danger"> Down vote</a>
			</div>
							         </td>
				      </tr>
				      <tr>
							        <td>
							    Anomaly 2
							        </td>
							        <td>
							        	<div class="btn-group">
				<a href="" class="btn btn-lg btn-warning"> Up vote </a>

				<a href="" class="btn btn-lg btn-danger"> Down vote</a>
			</div>
							         </td>
				      </tr>
				      <tr>
							        <td>
							        	Deer Hunter
							        </td>
							        <td>
							        		<div class="btn-group">
				<a href="" class="btn btn-lg btn-warning"> Up vote </a>

				<a href="" class="btn btn-lg btn-danger"> Down vote</a>
			</div>
							         </td>
				      </tr>

				      </tr>

				    </tbody>
		  </table>	
	</div>



  
  <script src="https://code.jquery.com/jquery-3.1.1.min.js">
  </script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  
</body>
  
</html>