@extends('layouts.app')
@section ('content')
<div id="crud" class="container">
    <div class="modal-body row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body" style="background-color: #3ab8a3fb;">
                    <h4> Agregar encuestas</h4> <br>
                    <button class="btn btn-primary btn-md"> Tipo I </button>
                    <button class="btn btn-primary btn-md"> Tipo II </button>
                </div>
            </div>
        </div> <!-- final de la tarjeta de la izquierda !-->
        <div class="col-md-8">
            <div class="card-header form-inline">
                <h4>Registro de preguntas</h4>
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
                        <button class="btn btn-warning btn-md"> Editar </button>
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
    <div>
<div>
@endsection
