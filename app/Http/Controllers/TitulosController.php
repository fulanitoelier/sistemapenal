<?php

namespace App\Http\Controllers;

use App\Models\titulos;
use App\Models\tipos;
use Illuminate\Http\Request;

class TitulosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $datos['titulos']=titulos::all();
        //$persona=personas::all();
        return view('titulos.index',$datos);
    }

 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('titulos.create');
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
            'titulo'=> 'required|string|max:100',
            //'Correo' => 'required|email',
            ];
            
            $Mensaje=["required"=> 'El :attribute es requerido'];
            $this->validate($request,$campos,$Mensaje);
            
            
            //$titulos=Request()-> all();
        $datosTitulo=Request()-> except('_token');

       
        titulos::insert($datosTitulo);
        //return response() -> json ($datosTitulo);
        return redirect ('titulos')->with('Mensaje','titulo agregada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\titulos  $titulos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        
        
        return redirect ('titulos.show',$id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\titulos  $titulos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $titulo=titulos::findOrFail($id);
        return view ('titulos.edit',compact('titulo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\titulos  $titulos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosTitulo=Request()-> except(['_token','_method']);
        

        

        titulos::where('id','=',$id)->update($datosTitulo);
 
        //$titulo=titulos::findOrFail($id);
       // return view ('titulos.edit',compact('titulos'));
        return redirect ('titulos')->with('Mensaje','titulo modificada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\titulos  $titulos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $titulo=titulos::findOrFail($id);

        

       return redirect ('titulos')->with('Mensaje','titulo eliminada');
    }
}