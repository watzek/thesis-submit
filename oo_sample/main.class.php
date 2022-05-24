<?php
/* main.class.php is sort of the "controller" class */


class main{

  /* this runs by default whenever the class is instantiated   */
  function __construct(){





  }


  /* this function determines which template to call, based upon $state variable */
  function switchboard($state){
    include ("templates.class.php");

    /* instantiates template class */
    $templates=new templates();

    switch($state){
      case "home":
        /* calls the home() function from the templates class*/
        $templates->home();
      break;

      case "page2":
        /* calls the home() function from the templates class*/
        $templates->page2();
      break;




    }






  }







}


 ?>
