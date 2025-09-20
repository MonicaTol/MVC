<?php

//Aca mostramos las acciones que puede hacer el cntrolador

class UsuarioController{
    public function mostrarTodos(){
        require_once 'Models/UsuarioModel.php';

        $usuario = new Usuario();

        $todos_los_usuarios = $usuario->conseguirTodos();

        require_once './Views/Usuarios/mostrar-todos.php';
    }

    public function crear(){

        require_once "models/UsuarioModel.php";
        
        $practicanteDeBodega = new Usuario();

        $practicanteDeBodega->setId_usuario('null');
        $practicanteDeBodega->setNombre('Juan Sebastian');
        $practicanteDeBodega->setApellido('Nieto');
        $practicanteDeBodega->setEmail('jnieto@gmail.com');
        $practicanteDeBodega->setPassword('abc123');

        $guardar = $practicanteDeBodega->crear();

        require_once './Views/Usuarios/crear.php';

}
}