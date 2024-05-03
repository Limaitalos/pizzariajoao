<?php
include_once("process/conn.php");

$msg = "";

if(isset($_SESSION["msg"])) {

  $msg = $_SESSION["msg"];
  $status = $_SESSION["status"];  

  $_SESSION["msg"] = "";
  $_SESSION["status"] = "";
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Faça seu pedido!</title>
  <!--Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!--Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!--APP Css -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header>
   <nav class="navbar navbar-expand-lg">
    <a href="index.php" class="navbar-brand">

    <img src="img/pizza.svg" alt="Pizzaria do João" id="brand-logo">
    </a>
    <div class="collpase navbar-collpase" id="navbarNav"> 
      <ul class="navbar-nav">
        <li class="nav-item active">

        <a href="index.php" class="nav-link">Peça sua pizza</a>
        </li>

      </ul>

    </div>
   </nav>   
  </header>
  <?php if($msg !=""): ?>
     <div class="alert alert-<?= $status ?>">
      <p><?= $msg?> </p>
    </div>
  <?php endif; ?>