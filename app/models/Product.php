<?php
namespace App\Models;

require_once '../core/Model.php';

use PDO;
use Core\Model;

class Product extends Model
{
    public function __construct()
    {
        # code...
    }

    public static function all()
    {
        $db = Product::db();
        $statement = $db->query('SELECT * FROM products');
        $products = $statement->fetchAll(PDO::FETCH_CLASS, Product::class);

        return $products;        
    }

    public static function find($id)
    {
        $db = Product::db();

        $statement = $db->prepare('SELECT * FROM products WHERE id=:id');
        $statement->execute(array(':id' => $id));        
        $statement->setFetchMode(PDO::FETCH_CLASS, Product::class);
        $product = $statement->fetch(PDO::FETCH_CLASS);
        return $product;
    }

    public function insert()
    {
        $db = Product::db();
        $statement = $db->prepare('INSERT INTO products(`name`, `type_id`, `price`) VALUES(:name, :type_id, :price)');
        $data = [
            ':name' => $this->name,
            ':type_id' => $this->type_id,
            ':price' => $this->price,
        ];
        return $statement->execute($data);
    }

    public function save()
    {
        $db = Product::db();
        $statement = $db->prepare('UPDATE products SET `name`=:name, `type_id`=:type_id, `price`=:price WHERE id=:id');
        $data = [
            ':id' => $this->id,
            ':name' => $this->name,
            ':type_id' => $this->type_id,
            ':price' => $this->price,
        ];
        return $statement->execute($data);
    }



    public function delete()
    {
        $db = self::db();
        $statement = $db->prepare('DELETE FROM products WHERE id=:id');        
        return $statement->execute([':id' => $this->id]);        
    }

    public static function destroy($id)
    {
        $db = Product::db();
        $statement = $db->prepare('DELETE FROM products WHERE id=:id');        
        return $statement->execute([':id' => $id]);        
    }
}