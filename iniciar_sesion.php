<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: /index.php');
  }
  require 'database.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            $records = $conn->prepare('SELECT id, username, email, password FROM usuarios WHERE email = :email');
            $records->bindParam(':email', $_POST['email']);
            $records->execute();
            $results = $records->fetch(PDO::FETCH_ASSOC);

            $message = '';

            if (is_countable($results) && count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
            $_SESSION['user_id'] = $results['id'];
            $_SESSION['username'] = $results['username'];
            header("Location: /index.php");
            } else {
            $message = 'Lo sentimos, las credenciales no concuerdan';
            }
        }else {
            $message = 'Alguno de los campos está vacio';
        }

    }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Iniciar Sesión</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php require 'componentes/header.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Inicia Sesión</h1>
    <span>o <a href="registrar.php">Registrate</a></span>

    <form action="iniciar_sesion.php" method="POST">
      <input name="email" type="text" placeholder="Ingresa tu email">
      <input name="password" type="password" placeholder="Ingresa tu Contraseña">
      <input type="submit" value="Submit">
    </form>
  </body>
</html>
