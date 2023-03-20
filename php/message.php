<?php
//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);

if(!empty($email) && !empty($message)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $receiver = "jgjvanderee@gmail.com"; // Your email address
        $subject = "Niewe email van $name";
        $body = "Naam: $name\nEmail: $email\nBericht: $message";
        $sender = "From: $email";
        if(mail($receiver,$subject,$body,$sender)){
            echo "";
        }else{
            echo "Sorry, failed to send your message!";
        }
    }else{
        echo "Enter a valid email address!";
    }
}else{
    echo "Email and message fields are required!";
}

if(!empty($email) && !empty($message)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      $receiver = $email; //enter that email address where you want to receive all messages
      $subject = "Bedankt";
      $body = "dankjewel voor je berichtje! ;)";
      $sender = "From: $email";
      if(mail($receiver, $subject, $body, $sender)){
         echo "";
      }else{
         echo "Sorry, failed to send your message!";
      }
    }else{
      echo "Enter a valid email address!";
    }
  }else{
    echo "Email and message field is required!";
  }
?>