<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class AdminController extends Controller


{

    public function home_admin(){
        
        return redirect('/home_admin');
  

    }
    public function users(){
            
        $users= new Users;
        $users=$users->getAll();
        return redirect('/users');
  

    }

        public function eliminar($id){
        
            $users= users::find($id);
            $users->delete();
            return redirect('/users');
    
        }
    
        public function editar($id){
         
            $editar= users::find($id);
            
            return view('editar', ["editar"=> $editar]);
     
        }
    
        public function editar_usuario($id, Request $request){
    
            $user= users::find($id);
    
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
            return redirect('/users');
    
    
        }
   
}
