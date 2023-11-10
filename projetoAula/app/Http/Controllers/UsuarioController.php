<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
class UsuarioController extends Controller
{
    //Listar usuarios
    public function index(){
        $usuarios = Usuario::all(); //buscar todos os registro no banco
        return view("usuarios.index",compact("usuarios"));
    }

    public function cadastro(){
        return view("usuarios.cadastro");
    }

    public function novo(Request $req){
        $nome = $req->nome;
        $login = $req->login;
        $senha = $req->senha;
        $usuario = new Usuario();
        $usuario->nome = $nome;
        $usuario->login = $login;
        $usuario->senha = $senha;  
        
        if($usuario->save()){
            $mensagem = "Usuario $nome inserido com sucesso";
        }else{
            $mensagem = "Não foi possível inserir";
        }
        return view("usuarios.resultado",compact("mensagem")); 
    }
}
