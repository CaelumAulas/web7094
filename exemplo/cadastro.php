<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <ul>
    <li><strong>Nome completo: </strong>
      <?php
        $nome = $_GET['nomeDoUsuario'];
        $sobrenome = $_GET['sobrenomeDoUsuario'];

        echo "{$nome} {$sobrenome}"
      ?>
    </li>
    <li><strong>Cor:</strong> <?php echo $_GET['cor'] ?></li>
  </ul>

</body>
</html>
