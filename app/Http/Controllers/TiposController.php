<?php

namespace App\Http\Controllers;

use App\Models\tipos;
use App\Models\titulos;
use Illuminate\Http\Request;

class TiposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $datos['tipos']=tipos::all();
        $titulos['titulos']=titulos::all();
        return view('tipos.index',compact('titulos'),$datos);
    }

 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datos2['titulos']=titulos::all();
        return view('tipos.create',$datos2);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $campos=[
            'descripcion'=> 'required|string|max:100',
            'titulo_id'=> 'required|string|max:100',
            //'Correo' => 'required|email',
            ];
            
            $Mensaje=["required"=> 'El :attribute es requerido'];
            $this->validate($request,$campos,$Mensaje);
            
            
            //$tipos=Request()-> all();
        $datosTipos=Request()-> except('_token');

       
        tipos::insert($datosTipos);
        //return response() -> json ($datosTipos);
        return redirect ('tipos')->with('Mensaje','tipo agregada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tipos  $tipos
     * @return \Illuminate\Http\Response
     */
    public function show(tipos $tipos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tipos  $tipos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $query=titulos::all();
        $tipo=tipos::findOrFail($id);
        return view ('tipos.edit',['titulos' => $query, 'tipo' => $tipo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tipos  $tipos
     * @return \Illuminate\Http\Response
     */
    public function update( $id)
    {
        //
        $datosTipos=Request()-> except(['_token','_method']);
        

        

        tipos::where('id','=',$id)->update($datosTipos);
 
        //$tipo=tipos::findOrFail($id);
       // return view ('tipos.edit',compact('tipos'));
        return redirect ('tipos')->with('Mensaje','tipo modificada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tipos  $tipos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipo=tipos::findOrFail($id);

        

       return redirect ('tipos')->with('Mensaje','tipos eliminada');
    }
}