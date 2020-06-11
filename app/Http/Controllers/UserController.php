<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = user::all();
        return view('usuarios',['users'=>$users]);
    }
    //Mostrar el formulario para crear un nuevo registro
    public function create(){

    }
    //Almacena los registros recien creados de create en la base de datos
    public function store(){

    }
    //Mostramos un registro especifico
    public function show(){

    }
    //Muestra el formulario con los datos a editar un registro especifico
    public function edit(){

    }
    //Actualizar un registro en la base de datos
    public function update(){

    }
    //Eliminar un registro especifico
    public function destroy(){

    }
}
