<?php
namespace App\Controllers;

require_once('../app/models/Product.php');
use \App\Models\Product;

class ProductController  
{
    public function __construct()
    {
        //echo "en ProductController<br>";
    }
    
    public function index()
    {
        $products = Product::all();
        include('../views/product/index.php');
    }

    public function show($arguments)
    {
        $id = $arguments[0];       
        $product = Product::find($id);
        include('../views/product/show.php');
    }

    public function create()
    {
        // echo "en create";
        include('../views/product/create.php');
    }

    public function store()
    {
        //crear objeto
        $product = new Product;
        $product->name = $_POST['name'];
        $product->type_id = $_POST['type_id'];
        $product->price = $_POST['price'];
        $product->insert();
        
        // "INSERT ...."
        // "UPDATE ...."
        //redirigir a la lista
        header('Location: /product/index');
    }

    public function delete() {
        
    }
}
