<?php

namespace App\Http\Controllers;

use App\Dependencia; 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as BaseController;
use App\User;

class UserController extends BaseController
{

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index($id)
    {

        $usuario = User::find($id);

        if (empty($usuario)) {
            return "Usuario não encontrado";
        }

        // return view('welcome', compact('usuario'));
        return $usuario;
    }

    public function store()
    {

        $usuario = User::create($this->request->all());

        return $usuario;
    }

    public function listardep ($id){

        $usuario = Dependencia::where('antecessor', $id)->get();

        return $usuario;

    }
}
