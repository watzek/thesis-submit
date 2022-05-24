<?php

class templates{


  function home(){
    /* home page html goes here*/
    ?>

    <h2>It's the home page!</h2>

    <p>more html....</p>
    <p><a href="index.php?state=page2">go to page 2</a></p>


    <?php



  }

  function page2(){
    /* another page goes here*/
    ?>

    <h2>It's page 2!</h2>

    <p>more html....</p>
    <p><a href="index.php?state=home">go to home page</a></p>


    <?php
  }








}






 ?>
