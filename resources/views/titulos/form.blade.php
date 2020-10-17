


   
    <div class="form-group">
    <label for="titulo" class="control-label"> {{'Titulo  (Ejemplo: VII)'}}</label>
        <input type="text" class="form-control" name="titulo" id="titulo" value="{{isset($titulo->titulo)?$titulo->titulo:''}}">
    </div>

    <div class="form-group">
    <label for="nombre" class="control-label"> {{'Descripcion'}}</label>
        <input type="text" class="form-control" name="nombre" id="nombre" value="{{isset($titulo->nombre)?$titulo->nombre:''}}">
    </div>


    
    


    <input type="submit" class="btn btn-success" value="{{$Modo=='crear' ? 'Agregar':'Modificar'}}">

    <a class="btn btn-primary" href="{{url('titulos')}}">Regresar</a>