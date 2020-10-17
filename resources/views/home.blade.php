@extends('layouts.app')

@section('content')
<style type="text/css">
    
    .navbar-nav{
        
        font-size: 1.4em;
    }
    .one{
        display: flex;
        justify-content: space-around;
        flex: 1;
        margin: 20px;
    }
    p{
        text-align: justify;
        margin: 5px;
    }

    h2,h3,h4,h5,h6{
        margin: 10px;
        color:  #045c5a;
    }
</style>


    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <center> <div class="card-header"><h1>Bienvenido</h1> {{Auth::user()->name }} </div><center>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
            
               
                    <center><h3>Calculadora Penal</h3>
            <h5>Tan fácil como cometer el delito</h5></center>
            <div class="one">
             <img src="storage/uploads/fondo4.jpg" class= "img-thumbnail img-fluid" alt="100" width="300">   
            <p> ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        </div>
        <p> ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. </p>

        <div class="one">
        <p> ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        </p>
        <img src="storage/uploads/ffondo.png" class= "img-thumbnail img-fluid" alt="100" width="300">
            </div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
