<?php
require_once("modelo/index.php");

class clienteController{
    private $model;

    public function __construct() {
        $this->model = new Cliente();
    }

    static function index() {
        $cliente = new Cliente();
        $dato = $cliente->mostrar("clientes","1");
        require_once("vista/index.php");
    }

    static function nuevo() {
        require_once("vista/nuevo.php");
    }

    static function guardar() {
        $nombre = $_REQUEST['nombre'];
        $correo = $_REQUEST['correo'];
        $telefono = $_REQUEST['telefono'];

        $data = "'" . $nombre . "', '" . $correo . "', '" . $telefono . "'";
        $cliente = new Cliente();
        $dato = $cliente->insertar("clientes", $data);
        header("location:" . urlsite);
    }

    static function editar() {
        $id = $_REQUEST['id'];
        $cliente = new Cliente();
        $dato = $cliente->mostrar("clientes", "id=" . $id);

        require_once("vista/editar.php");
    }

    static function actualizar() {
        $id = $_REQUEST['id'];
        $nombre = $_REQUEST['nombre'];
        $correo = $_REQUEST['correo'];
        $telefono = $_REQUEST['telefono'];

        $data = "nombre='" . $nombre . "', correo='" . $correo . "', telefono='" . $telefono . "'";
        $cliente = new Cliente();
        $dato = $cliente->actualizar("clientes", $data, "id=" . $id);
        header("location:" . urlsite);
    }

    static function eliminar(){
        $id = $_REQUEST['id'];
        $cliente = new Cliente();
        $dato = $cliente->eliminar("clientes", "id=" . $id);
        header("location:" . urlsite);
    }
}

?>