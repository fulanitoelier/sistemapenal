<?php

namespace App\Http\Controllers;

use App\Models\consultas;
use App\Models\leyes;
use App\Models\tipos;
use Illuminate\Http\Request;

class ConsultasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['consultas']=consultas::all();
        return view('consultas.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $datos1['tipos']=tipos::all();
        $datos2['leyes']=leyes::all();
        

        return view('consultas.create',$datos1,$datos2);
        
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
            
            'ley_id'=> 'required|string|max:100',
            'tipo_id'=> 'required|string|max:100',
        ];
            
            $Mensaje=["required"=> 'El :attribute es requerido'];
            $this->validate($request,$campos,$Mensaje);
       
       
            
            
        $datosConsulta=Request()-> except('_token');

       if ( $request['agravante'] == "1")
                {                }
                else{
                $request['agravante'] = "0";}

        if( $request['atentuante'] == "1")
                {}
                else{
                $request['atentuante']= "0";}

        $ley=leyes::findOrFail($request->ley_id);

        if(($request['agravante']==$request['atentuante']) == "1" ){
        $datosConsulta['total']= (($ley->max+$ley->min)/2);}
        else
        if (($request['agravante']=="0") AND ($request['atentuante']=="1"))
        {
            $datosConsulta['total']= ($ley->min);
        }
        else
            if (($request['agravante']=="1") AND ($request['atentuante']=="0"))
            {
                $datosConsulta['total']= ($ley->max);
            }

        consultas::insert($datosConsulta);
        return redirect ('consultas')->with('Mensaje','consulta agregada con exito');
    }

    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\consultas  $Consulta
     * @return \Illuminate\Http\Response
     */
    public function show(consultas $consultas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\consultas  $Consulta
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $consulta=consultas::findOrFail($id);
        return view ('consultas.edit',$consulta);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\consultas  $Consulta
     * @return \Illuminate\Http\Response
     */
    public function update( $id)
    {
        //
        $datosConsulta=Request()-> except(['_token','_method']);

       
        
        consultas::where('id','=',$id)->update($datosConsulta);
 
        //$persona=personas::findOrFail($id);
       // return view ('personas.edit',compact('persona'));
        return redirect ('consultas')->with('Mensaje','consulta modificada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\consultas  $Consulta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $consulta=consultas::findOrFail($id);

            consultas::destroy($id);

       return redirect ('consultas')->with('Mensaje','consulta eliminada');
    }
    

    public function getleyes(Request $request)
    {
        if($request->ajax()){
$leyes=leyes::where('tip_id',$request->tip_id)->get();

            foreach($leyes as $ley)
            $leyesarray[$leyes->id]=$leyes->name;
        }
        

       return response()->json();
    }


}