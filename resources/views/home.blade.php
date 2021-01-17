@extends('layouts.app')
@section ('admin')
<script src="{{ asset('js/chart.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<div id="crud" class="container">
    <div class="modal-body row">
        <div class="col-md-4">
            <div class="card">
            <div class="card-header">Instrucciones</div>
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
                        <td v-text="encuestas.id"> </td>
                        <td v-text="encuestas.titulo"></td>
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
    <canvas id="myChart" width="400" height="400"></canvas>

<div>
@endsection