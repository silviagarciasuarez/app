<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actividad;

class Actividad_controller extends Controller
{

    public function welcome(){
            
        $welcome= new actividad;
        $welcome=$welcome->getAll();
            return view('welcome', ["welcome"=> $welcome]);
    
        } 
        
    public function actividad(){
            
        $actividad= new actividad;
        $actividad=$actividad->getAll();
        return view('actividad', ["actividad"=> $actividad]);

    } 

    public function eliminar_actividad($id){
        
        $viaje = actividad::find($id);
        $viaje->delete();
        return redirect('/editar_actividad');

    }

    public function editar_actividad(){
            
        $editar_actividad= new actividad;
        $editar_actividad=$editar_actividad->getAll();
        return view('editar_actividad', ["editar_actividad"=> $editar_actividad]);
      

    } 

    public function editar($id,Request $request){

        $actividad= actividad::find($id);
   
        if($request->descripcion !=null){ 
        $actividad->descripcion=$request->descripcion;
        }
   
        if($request->personas !=null){
        $actividad->personas=$request->personas;
        }
   
   
   
        if($request->lugar !=null){
        $actividad->lugar=$request->lugar;
        }
   
       if($request->inicio !=null){
       $actividad->inicio=$request->inicio;     
        }
   
      if($request->final !=null){
          $actividad->final=$request->final;     
       }
   
        $actividad->save();
        return redirect('/actividad');
   
   
    }

  

    public function nueva_actividad($id){
     
        $nueva_actividad= actividad::find($id);      
        return view('nueva_actividad', ["nueva_actividad"=> $nueva_actividad]);
 
    }

    public function nueva(Request $request){

        $actividad = new actividad;

        if($request->descripcion !=null){
        $actividad->descripcion=$request->descripcion;
        }

        if($request->personas !=null){
        $actividad->personas=$request->personas;
        }     

        if($request->lugar !=null){
        $actividad->lugar=$request->lugar;
        }

        if($request->inicio !=null){
         $actividad->inicio=$request->inicio;     
       }

        if($request->final !=null){
            $actividad->final=$request->final;     
            }
  
        $actividad->save();
        return redirect('/actividad');


    }

    
   
}
