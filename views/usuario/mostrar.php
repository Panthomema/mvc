<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h1>Mostrar datos de usuario</h1>

  <ul>
    <li>
      <?= $nombre ?>
    </li>
    <li>
      <?= $apellido ?>
    </li>
    <li>
      <?= $sexo ?>
    </li>
    <li> Aficiones:
      <ul>
        <?php foreach($aficiones as $aficion) { ?>
          <li>
            <?= $aficion ?>
          </li>
          <?php } ?>
        </ul>  
      </li>
  </ul>
  <hr>
  <pre>
  <?php
  print_r($_POST);
  ?>
  </pre>
</body>
</html>