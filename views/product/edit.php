<?php include('../views/parts/head.php'); ?>
<?php include('../views/parts/header.php'); ?>
<!-- Begin page content -->
<main role="main" class="container">    
    <h1>Edición de producto</h1>

    <form class="form" action="/product/update/<?= $product->id ?>" method="POST">

    <div class="form-group">
        <label for="name">Nombre:</label>
        <input class="form-control" type="text" value="<?= $product->name ?>" name="name"> 
    </div>

    <div class="form-group">
        <label for="type_id">Tipo:</label>
        <input class="form-control" type="text" value="<?= $product->type_id ?>" name="type_id"> 
    </div>

    <div class="form-group">
        <label for="price">Precio:</label>
        <input class="form-control" type="text" value="<?= $product->price ?>" name="price"> 
    </div>

    <div class="form-group">
        <input class="form-control" type="submit" value="Guardar"> 
    </div>

    </form>
</main>

<?php include('../views/parts/footer.php'); ?>
