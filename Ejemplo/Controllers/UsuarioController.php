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
        require_once './Views/Usuarios/crear.php';
    }
}