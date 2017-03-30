<!DOCTYPE html>
 <html>
 <head>
 	<title> Feedback </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  
<link rel="icon" type="image/gif" href="favicon.ico" />
<style type="text/css">
 h1 {
  text-align: center;
}
	
body{
	color: #ffffff;
  
  background: rgba(19, 35, 47, 0.9);
  max-width: 600px;
  text-align: center;
  margin: 20px auto;
}
form {
  max-width: 500px;
  text-align: center;
  margin: 20px auto;
}
form input, form textarea {
  border: 0;
  outline: 0;
  color: #ffffff;
  padding: 1em;
  border-radius: 10px;
  display: block;
  width: 100%;
  margin-top: 1em;
  resize: none;
  transition: all 4s;
}

textarea {
  height: 126px;
  color: #ffffff;
  background: rgba(19, 35, 47, 0.9);
  transition: all 4s;

}
textarea:hover{

  background-color: #330077;
  border-radius: 30px;
  color: yellow;
  transition: all 3s;
}
input{
  background: rgba(19, 35, 47, 0.9);
  color: #ffffff;
}
input:hover{
  border-radius: 80px;
  background-color: #330077;
transition: all 3s;
color: yellow;

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
  <h1>
  	Report or Feedback
  	<img src="logo.png">
  </h1>
  <form >
  <div >
    <input type="text" id="input-name" placeholder="Name" required>
    <input type="email" id="input-email" placeholder="Email address" required>
    <input type="text" id="input-subject" placeholder="Subject" required >
  </div>
  <div >
    <textarea required name="message" type="text" id="input-message" placeholder="Message"></textarea>
  </div>  
  <input class="btn btn-lg btn-warning" type="submit" value="Submit">
</form>  


  

<script src="https://code.jquery.com/jquery-3.1.1.min.js"> </script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  
 </body>
 </html>