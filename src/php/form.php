<?php

if(isset($_POST['name']) && isset($_POST['firstname']) && isset($_POST['email']) && isset($_POST['message']) && !empty($_POST['name']) && !empty($_POST['firstname']) && !empty($_POST['email']) && !empty($_POST['message'])){

  $name = $_POST['name'];
  $firstname = $_POST['firstname'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = 'hello@axelmarcial.com';
  $object = '[SITE] - Nouveau message sur la page d\'attente';
  $content = `Nouveau message de $firstname $name.\n\n Message : $message`;
  $headers = `From: hello@axelmarcial.com\r\nReply-To: $email`;

  mail($to, $object, $content, $headers);
  header('Location:../../'); die();
} else header('Location:../../'); die();