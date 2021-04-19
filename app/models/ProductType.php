<?php
namespace App\Models;

require_once '../core/Model.php';

use PDO;
use Core\Model;

class ProductType extends Model
{
    public function __construct()
    {
        # code...
    }

    public static function all()
    {
        $db = ProductType::db();
        $statement = $db->query('SELECT * FROM producttypes');
        $producttypes = $statement->fetchAll(PDO::FETCH_CLASS, ProductType::class);

        return $producttypes;        
    }

    public static function find($id)
    {
        $db = ProductType::db();

        $statement = $db->prepare('SELECT * FROM producttypes WHERE id=:id');
        $statement->execute(array(':id' => $id));        
        $statement->setFetchMode(PDO::FETCH_CLASS, ProductType::class);
        $producttype = $statement->fetch(PDO::FETCH_CLASS);
        return $producttype;
    }


}
