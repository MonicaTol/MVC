<?php
require_once "Config/Database.php";

class Usuario
{
    public $id_usuario;
    public $nombre;
    public $apellido;
    public $email;
    public $password;

    public $db;

    public function __construct(){
        $this ->db = database::conectar();
    }

    function getId_usuario()
    {
        return $this->id_usuario;
    }

    function getNombre()
    {
        return $this->nombre;
    }

    function getApellido()
    {
        return $this->apellido;
    }

    function getEmail()
    {
        return $this->email;
    }

    function getPassword()
    {
        return $this->password;
    }

    //Set

    function setId_usuario($id_usuario)
    {
        return $this->id_usuario = $id_usuario;
    }

    function setNombre($nombre)
    {
        return $this->nombre = $nombre;
    }

    function setApellido($apellido)
    {
        return $this->apellido = $apellido;
    }

    function setEmail($email)
    {
        return $this->email = $email;
    }

    function setPassword($password)
    {
        return $this->password = $password;
    }

    //Metodo que consulte la BD

    public function conseguirTodos(){
        // var_dump ($this->db);
        $query = $this->db ->query("SELECT * FROM t_usuario");
        return $query;
        echo 'Imprimiendo todos los usuarios.....';
    }

    public function crear(){
        $sql = "INSERT INTO t_usuario (id_usuario, nombre, apellido, correo, password, id_rol) VALUES ({$this->id_usuario},'{$this->nombre}','{$this->apellido}','{$this->email}','{$this->password}', 3);";

        $guardar = $this->db->query($sql);

        return $guardar;

        // var_dump ($sql);
    }
}