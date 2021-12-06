<?php
include "config.php";
$email = "";

if ($_POST) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  if(is_null($email)|| strcmp($email,"")==0){
    echo "Ingrese un email";
  }
  else if(is_null($password) || strcmp($password,"")==0){
      echo "Ingrese la contraseña";
    }
  else{
    $sql = "SELECT * FROM `register` where email = '" . $email . "' and password = '" . $password . "' ";
    $query =  mysqli_query($conn, $sql);
    if (mysqli_num_rows($query) > 0) {
      $row = mysqli_fetch_assoc($query);
      session_start();
      $_SESSION['name'] = $row['name'];
      header('Location: index.php');
    } else {
      echo "<script> alert('Correo y/o contraseña incorrecta o no estás registrado'); </script>";
    }
  }
}
?>