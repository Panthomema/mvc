<?php include('../views/parts/head.php'); ?>
<?php include('../views/parts/header.php'); ?>
<!-- Begin page content -->
<main role="main" class="container">    
    <h1>Detalle de producto</h1>
    <div class="card">
        <div class="card-header">
            Producto número <?= $product->id ?>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Nombre: <?= $product->name ?></li>
            <li class="list-group-item">Tipo: <?= $product->type_id ?></li>
            <li class="list-group-item">Precio: <?= $product->price . ' €' ?></li>
        </ul>
  </div>    
</main>

<?php include('../views/parts/footer.php'); ?>