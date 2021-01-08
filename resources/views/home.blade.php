@extends('layouts.app')
@section ('content')
<div id="crud" class="container">
    <div  class="row">
    <div class="col-12 col-md-6">
        <h1 class="page-header">Registro de preguntas</h1>
    </div>
    <div >
        <button class="btn btn-primary btn-md pull-right" data-toggle="modal" data-target="#create">Nueva pregunta</button>  
    </div>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th> Id</th>
                    <th>Titulo</th>
                    <th colspan="2">
                    &nbsp;
                    </th>
                </tr>
            </thead>
            <body>
                <tr v-for="encuestas in encuesta" >
                    <td>  @{{encuestas.id}} </td>
                    <td> @{{encuestas.titulo}}</td>
                    <td widht="10px">
                    <a href="#" class="btn btn-warning btn-md"> Editar </a>
                    </td>
                    <td widht="10px">
                    <button class="btn btn-danger btn-md" @click.prevent="deleteencuesta(encuestas)">Eliminar</button>    
                 </div>

                    </td>
                
                </tr>
            </body>
        </table>
    @include('create')


    </div>
    <div class="col-sm-5">
        <pre>
        @{{$data}}
        </pre>
    </div>
</div>
@endsection
