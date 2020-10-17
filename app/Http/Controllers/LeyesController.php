<?php

namespace App\Http\Controllers;

use App\Models\leyes;
use App\Models\tipos;
use Illuminate\Http\Request;

class LeyesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        

        if($request){
            $query= trim($request->get('search'));
        $datos['leyes']=leyes::all();
        $datos=leyes::where('codigo', 'LIKE', '%'.$query.'%') ->orderBy('id','asc')->get();
            return view('leyes.index',['leyes' => $datos, 'search' => $query]);
        }
        $datos['leyes']=leyes::all();
        return view('leyes.index',$datos);
    }

 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $datos2['tipos']=tipos::all();
        return view('leyes.create',$datos2);
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
            'codigo'=> 'required|string|max:100',
            'descripcion'=> 'required|string|max:800',
            //'Correo' => 'required|email',
            ];
            
            $Mensaje=["required"=> 'El :attribute es requerido'];
            $this->validate($request,$campos,$Mensaje);
            
            
            //$leyes=Request()-> all();
        $datosLey=Request()-> except('_token');

        if ($request->hasFile('Foto')){
            $datosLey['Foto']=$request->file('Foto')->store('uploads','public');
        }
        leyes::insert($datosLey);
        //return response() -> json ($datosLey);
        return redirect ('leyes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\leyes  $leyes
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        
        if($request){
            $query= trim($request);
        $datos['leyes']=leyes::all();
        $datos=leyes::where('tipo_id', 'LIKE', '%'.$query.'%') ->orderBy('id','asc')->get();
            return view('leyes.index',['leyes' => $datos,  $query]);
        }
        return view('leyes.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\leyes  $leyes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $ley=leyes::findOrFail($id);
        return view ('leyes.edit',compact('ley'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\leyes  $leyes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosLey=Request()-> except(['_token','_method']);
        

       
        leyes::where('id','=',$id)->update($datosLey);
 
        //$ley=leyes::findOrFail($id);
       // return view ('leyes.edit',compact('leyes'));
        return redirect ('leyes')->with('Mensaje','ley modificada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\leyes  $leyes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ley=leyes::findOrFail($id);

        
        

       return redirect ('leyes')->with('Mensaje','leyes eliminada');
    }
}