<?php include('../views/parts/head.php'); ?>
<?php include('../views/parts/header.php'); ?>
<!-- Begin page content -->
<main role="main" class="container">    
    <h1>Edición de producto</h1>

    <form class="form" action="/user/update/<?= $user->id ?>" method="POST">

    <div class="form-group">
        <label for="name">Nombre:</label>
        <input class="form-control" type="text" value="<?= $user->name ?>" name="name"> 
    </div>

    <div class="form-group">
        <label for="surname">Apellidos:</label>
        <input class="form-control" type="text" value="<?= $user->surname ?>" name="surname"> 
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input class="form-control" type="text" value="<?= $user->email ?>" name="email"> 
    </div>

    <div class="form-group">
        <label for="birthdate">Fecha Nacimiento:</label>
        <input class="form-control" type="text" value="<?= $user->birthdate ?>" name="birthdate"> 
    </div>

    <div class="form-group">
        <input class="form-control" type="submit" value="Guardar"> 
    </div>

    </form>
</main>

<?php include('../views/parts/footer.php'); ?>
