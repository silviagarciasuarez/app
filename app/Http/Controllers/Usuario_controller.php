<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;


class Usuario_controller extends Controller
{
    public function usuarios(){
            
        $usuario= new Usuario;
        $usuarios=$usuario->getAll();
        return view('usuarios', ["usuarios"=> $usuarios]);


    }
    
        public function editar($id){
         
            $editar_usuario= Usuario::find($id);
            
            return view('editar_usuario', ["editar_usuario"=> $editar_usuario]);
     
        }
    
        public function editar_usuario($id, Request $request){
    
            $user= Usuario::find($id);
    
            if($request->nombre !=null){
    
            $user->nombre=$request->nombre;
            }
    
            if($request->apellidos !=null){
            $user->apellidos=$request->apellidos;
            }
    
            if($request->dni !=null){
            $user->dni=$request->dni;
            }
    
            if($request->email !=null){
            $user->email=$request->email;     
            }
            if($request->descripcion !=null){
                $user->descripcion=$request->descripcion;     
                }
      
            $user->save();
            return redirect('/usuarios');
    
    
        }
}
