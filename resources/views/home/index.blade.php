@extends('layouts.app-master')

@section('content')
<br> 
<br>
        <div class="bg-light p-5 rounded bg-dark">
        @auth
        <h1 class="text-warning">Panel principal</h1>
        <p class="lead"></p>
        <a class="btn btn-lg btn-info" href="https://github.com/keviin3377" role="button">Mi perfil de github &raquo;</a>
        @endauth

        @guest
        <h1>Pagina de inicio</h1>
        <p class="lead">Estas visitando la pagina principal porfavor registrate para acceder a mas caracteristicas y contenidos</p>
        @endguest
    </div>


   <div class="container">
        <br>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="card p-3 bg-dark border-info border-start-0 border-width-5">
                    <div class="card-header text-warning">
                        <h3>Visita mi github</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 p-3 bg-info rounded-circle position-relative"></span>
                                <img src="https://avatars.githubusercontent.com/u/80286251?s=400&u=f26688b3f02f0bb443bc52ef03fc1f249e606446&v=4" class="img-fluid rounded-circle position-relative">
                            </div>
                            <div class="col-md-8 text-warning" > 
                                <h4>Nombre: Keviin3377</h4>
                                <h4>Email:kevinchoarevalo22@gmail.com</h4> 
                                <h4>Descripcion: 
                                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, eum quod quae veritatis porro nobis aspernatur      ut sapiente quasi provident consequuntur corrupti voluptatem cupiditate amet facere, sequi sunt eveniet delectus.
                                 <br>
                                 <br>
                                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, eum quod quae veritatis porro nobis aspernatur      ut sapiente quasi provident consequuntur corrupti voluptatem cupiditate amet facere, sequi sunt eveniet delectus.
                                 </h4>  
                                 <button class="col-md-8 text-info text-op bg-info bg-opacity-25 ">
                                <a class="col-md-8 text-info " href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">!Clickea aqui para ver mas¡</a>
                            </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- interruptor para cambiar el color de fondo -->

    
    
@endsection
