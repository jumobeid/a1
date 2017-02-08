<!DOCTYPE html>
<html>
<head>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>intro</title>
<style>

body{
  text-align: center;
  width=960px;
  margin=0 auto;
}
p{
  text-align: justify;
  font-size: .8em;
}

img{
  border-radius: 50px 50px 50px 50px;
  text-align: center;
}
</style>
</head>
<body class="container">

  <h1>Jumana Obeid</h1>

  <img src="/images/jumana.jpg" alt="jumana"><br><br>
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
    <p>I used to work as a web designer,I quit my job 7 years
       back to establish a family and now I'm a mother of two children.
       I joined this course to engage my self in real work environment,
       collaborate with others and take my skills to the next level.
    </p>
    </div>
    <div class="col-md-2"></div>
  </div><br><br>
<?php

 $messages = array(

     "love is stronger than justice",

     "beauty is in the eyes of the beholder",

     "Every thing you ever wanted is on the other side of fear"

 );



 echo $messages[rand(0, count($messages) - 1)];

?>


</body>
</html>
