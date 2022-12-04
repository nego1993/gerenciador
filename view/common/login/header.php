<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <title>Login do Gerenciador</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/2a33fe9a00.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="alert alert-<?= $_SESSION['type_message']; ?> text-center"><?= $_SESSION['message']; ?></div>
  <?php unset($_SESSION['message']);
  unset($_SESSION['type_message']); ?>
  <div class="container">