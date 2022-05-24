<?php
/* starts/resumes session, which you'll need once auth is introduced */
session_start();

include ("main.class.php");
/* instantiates main class*/
$main=new main();

/* checks if state is a get parameter...otherwise defaults to "home"*/
if(isset($_GET["state"])){
  $state=$_GET["state"];
}
else{$state="home";}



 ?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link href="styles.css" rel="stylesheet">
    <title>Thesis Submission Portal</title>
  </head>
  <body>
    <h1>Thesis Submission Portal</h1>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<!-- basic bootstrap form -->
 <div class="container">

<?php
/* calls switchboard function from the main class, determining the html that appears   */
$main->switchboard($state);


 ?>




</div>



</body>
</html>
