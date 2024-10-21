<?php 

$ok = true;

$errormsg = null;


if($_SERVER["REQUEST_METHOD"] === "POST"){

  if(isset($_POST["send-login"])){

    $firstname = trim($_POST["firstname"]);
    $lastname = trim($_POST["lastname"]);
    $email = trim($_POST["email"]);
    $contactnumber =(int) trim($_POST["contactnumber"]);



  switch (true) {
    case empty($_POST["firstname"]):
      $errormsg = "Firstname ist not set yet";
      $ok = false;
      break;

    case !ctype_alpha($firstname):
      $errormsg = "Only letters are allowed for firstname";
      $ok = false;
      break;

    case empty($_POST["lastname"]):
      $errormsg = "Lastname ist not set yet";
      $ok = false;
      break;

    case !ctype_alpha($lastname):
      $errormsg = "Only letters are allowed for lastname";
      $ok = false;
      break;

    case empty($_POST["email"]):
      $errormsg = "Email ist not set yet";
      $ok = false;
      break;

    case !filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL):
      $errormsg = "Please enter a valid email";
      $ok = false;
      break;

    case empty($_POST["contactnumber"]):
      $errormsg = "Contact Number ist not set yet";
      $ok = false;
      break;

    case !preg_match('/^[/d\-\(\)\/\+\s]*$/', $contactnumber):
      $errormsg = "Please use a valid Phone Number";
      $ok = false;
      break;
    
    default:
      $ok = false;
      $errormsg = null;
      break;
  }

  if($ok){
    $errormsg = "Formular is send correctly";

    // Clear input values only if form submission is successful
    $firstname = $lastname = $email = $contactnumber = "";
  }

  }

}

//var_dump
require_once("./form/form.php");
?>