@extends('layouts.app')

@section('content')
<div class="container">
<div class="modal-body row"  id="crud">
    <div class="col-md-2">
        <button class="btn btn-primary btn-lg"> Social </button>
    </div>

        <div class="col-md-8">
            <div class="card" align="center">
                <div align="center" class="card-header">
                    <h3> Nivel económico de la persona</h3>
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
                                                <td>  @{{encuestas.id}} </td>
                                                <td> @{{encuestas.titulo}}</td>
                                                <td widht="10px">
                                                    <input type="radio" name="one">si  
                                                </td>
                                                <td widht="10px">
                                                    <input type="radio" name="one">no    
                                                </td>
                                            </tr>
                                        </body>
                            </table>
                                <button type="submit" class="btn btn-primary btn-lg"> Enviar </button>
        </div>
    </div>
</div>
</div>

<style>

td{
    font-size:125% !important;
}

tr{
    font-size:125% !important;
}
</style>
@endsection
