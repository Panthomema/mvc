<?php
namespace App\Controllers;

class UsuarioController
{
    public function index()
    {
        echo "index de Usuario";
    }
    public function crear()
    {
        // echo "crear usuario";
        include "../views/usuario/crear.php";
    }

    public function mostrar()
    {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $sexo = $_POST['sexo'];

        if (isset($_POST['aficiones'])) {
            $aficiones = $_POST['aficiones'];
        } else {
            $aficiones = array();
            // $aficiones = []; //equivalente
        }

        include "../views/usuario/mostrar.php";

    }

    public function deseos()
    {
        //lista de deseos usando formulario sólamente
        //nuevo deseo: input nuevodeseo
        $deseo = $_POST['nuevodeseo'];
        $lista = $_POST['lista'];
        
        
        if (!isset($lista)) {
            $lista = [];
        }

        if (isset($deseo)) {
            $lista[] = $deseo;
        }
       
        include('../views/usuario/deseos.php');
    }
}
