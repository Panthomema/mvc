<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/usuario/deseos" method="post">
        <h1>Lista de deseos</h1>
            <ul>
                <?php foreach($lista as $item) {?>
                    <li> <?= $item ?>
                        <input type="hidden" name="lista[]" value="<?= $item ?>">
                    </li>
                <?php } ?>
            </ul>

        <hr>
        <h2>Deseo recibido ahora: </h2>
            <?= $deseo ?>
        <hr>
        <h2>Nuevo deseo</h2>
            <input type="text" name="nuevodeseo">
        <hr>
        <input type="submit" value="enviar">
    </form>

    <hr>
    <pre>
    <?php
    var_dump($_POST);
    ?>
    </pre>
</body>
</html>