<?php

  if (!empty($_POST['fname']) &&
      !empty($_POST['lname']) &&
      !empty($_POST['lname'])) {

    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $email = $_POST['email'];

    //echo "Thank you ".$firstname. " for signing up with email ".$email;

    $expire = time()+3600;

    setcookie('first', $firstname, $expire);
    setcookie('email', $email, $expire);

  }

  else {

    echo "There was an error processing your submission: empty fields ";

  }

?>
