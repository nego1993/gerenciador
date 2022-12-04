<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <title>Gerenciador</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <script src="https://kit.fontawesome.com/2a33fe9a00.js" crossorigin="anonymous"></script>
</head>

<body>
  <nav class="navbar navbar-dark bg-dark mb-2" style="background:#000 !important">
    <a class="nav-link text-white" href="/listar-cursos">Home</a>
    <ul class="navbar-nav">
      <li class="nav-item active mr-3">
        <a class="nav-link" href="/logout">Sair</a>
      </li>
    </ul>
  </nav>
  <div class="container">
    <div class="jumbotron">
      <h1><?= $titulo; ?></h1>
    </div>
    <div class="alert alert-<?= $_SESSION['type_message']; ?> text-center"><?= $_SESSION['message']; ?></div>
    <?php unset($_SESSION['message']);
    unset($_SESSION['type_message']); ?>

    <style>
      .nav-link:hover {
        color: red !important;
      }
    </style>