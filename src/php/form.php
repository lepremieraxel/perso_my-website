<?php

header('Location: ../../');

if (isset($_POST['name']) && isset($_POST['firstname']) && isset($_POST['email']) && isset($_POST['message'])) {

  $name = $_POST['name'];
  $firstname = $_POST['firstname'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = 'axelmarcial151003@gmail.com';
  $object = '[SITE] - Nouveau message sur la page d\'attente';
  $content = 'Nouveau message de ' . $firstname . $name. '\r Message : ' . $message;

  mail($to, $object, $content);
} else {
  header('Location: ../../');
}