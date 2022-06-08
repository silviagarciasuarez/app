<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Viaje;

class Viaje_controller extends Controller
{
    public function viaje(){
            
        $viaje= new viaje;
        $viaje=$viaje->getAll();
        return view('viaje', ["viaje"=> $viaje]);

    } 

    public function editar_viaje(){
            
        $editar_viaje= new viaje;
        $editar_viaje=$editar_viaje->getAll();
        return view('editar_viaje', ["editar_viaje"=> $editar_viaje]);
      

    } 

    public function eliminar_viaje($id){
        
        $viaje = viaje::find($id);
        $viaje->delete();
        return redirect('/editar_viaje');

    }


    public function nuevo_viaje($id){
     
        $nuevo_viaje= viaje::find($id);
        
        return view('nuevo_viaje', ["nuevo_viaje"=> $nuevo_viaje]);
 
    }

    public function nuevo(Request $request){


        $viaje = new viaje;


     if($request->descripcion !=null){

     $viaje->descripcion=$request->descripcion;
     }

     if($request->personas !=null){
     $viaje->personas=$request->personas;
     }

    

     if($request->lugar !=null){
     $viaje->lugar=$request->lugar;
     }

     if($request->inicio !=null){
      $viaje->inicio=$request->inicio;     
    }

     if($request->final !=null){
         $viaje->final=$request->final;     
         }

     $viaje->save();
     return redirect('/viaje');


 }
}
