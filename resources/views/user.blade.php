@extends('layouts.app')
@section('content')
<form method"POST" v-on:submit.prevent="CreateResp">
<div class="container">
    <div class="modal-body row"  id="crud">
    <!-- Titulo que esta alado de la tabla  -->
        <div class="col-md-4">
            <div class="card" style="background-color: #3ab8a3fb;">
                <div class="card-header">
                    <h4>¿Cual es tu estado de animo?</h4>
                </div>
                    <div class="card-body" align="center">
                        <img src="{{ asset('img/feliz.jpg') }}" alt="feliz">
                        <img src="{{ asset('img/feliz.jpg') }}" alt="triste">
                        <img src="{{ asset('img/feliz.jpg') }}" alt="ninguna">
                    </div>
                    <div  class="card-footer" align="center">
                        <input  type="radio" name="1" >
                        <input  type="radio" name="1" >
                        <input  type="radio" name="1" >
                    </div> 
            </div>
            
            <br><br>

            <div class="card" style="background-color: #3ab8a3fb;">
                <div class="card-header">
                    <h4>¿Cual es tu estado de animo?</h4>
                </div>
                    <div class="card-body" align="left">
                    <img src="{{ asset('img/emociones.jpg') }}" alt="emociones">
                    </div>
                    <div  class="card-footer" align="center">
                        <input  type="radio" name="2" > Muy bueno
                        <input  type="radio" name="2" > Bueno
                        <input  type="radio" name="2" > Malo
                    </div> 
            </div>
            
            <br><br>

            <div class="card" style="background-color: #3ab8a3fb;">
                <div class="card-header">
                    <h4>¿Que te ha parecido hasta ahora nuestro sistema?</h4>
                </div>
                    <div class="card-body">
                        <input  type="radio" name="3" > BUENO <BR></BR>
                        <input  type="radio" name="3" > MALO <BR></BR>
                        <input  type="radio" name="3" > NO ERA LO QUE ESPERABA
                    </div>
            </div>
            
            <br><br>

        </div> <!-- final del div de los elementos de la izquierda -->

        <!-- de aqui hacia abajo esta la tabla de las preguntas -->

            <div  class="col-md-8">
                <div class="card" align="center">
                    <div align="center" class="card-header">
                        <h4> Estamos cerca de ti </h4>
                    </div>
                    <br>
                        <div class="car-header">
                        <p> Somos una organización con 23 años de experiencia, mediante esta estrategia
                            podemos captar aquellas comunidades que requieren de ayuda y buscar la forma
                            de brindarle un apoyo.
                        </p>
                        </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <!--{{ __('User Registrado') }} -->

                    </div>
                                <table class="table table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th> Número</th>
                                                <th>Titulo</th>
                                                <th colspan="2">
                                                &nbsp;
                                                </th>
                                            </tr>
                                        </thead>
                                            <body>
                                                <tr v-for="encuestas in encuesta" >
                                                    <td v-text="encuestas.id"></td>
                                                    <td v-text="encuestas.titulo"></td>
                                                    <td widht="10px">
                                                        <input  type="radio" value="SI" :name="'one'+encuestas.id"  >SI  
                                                        <input type="radio"  value="NO" :name="'one'+encuestas.id" >NO
                                                    </td>
                                                </tr>
                                            </body>
                                            <input type="hidden"value="{{Auth::user()->id}}" name="id_user">
                                            <input type="hidden" name="encuestas_id" value="{{'encuestas->id'}}" v-model="encuestas_id">

                                </table>
                        <button type="submit" class="btn btn-primary btn-lg" value="enviar"> Enviar </button>
            </div>
        </div>
    </div>
</div>
</form>

<style>
td{
    font-size:110% !important;
    font-weight: bold !important;
    
}
tr{
    font-size:110% !important;
        font-weight: bold !important;

}
</style>
@endsection
