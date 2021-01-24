<template> 
<div id="crud">
    <h4>Registro de preguntas</h4>
        <button class="btn btn-primary btn-md pull-right" data-toggle="modal" data-target="#create">Nueva pregunta</button>  
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
                            <tr :v-for="encuestas in encuesta" >
                                <td v-text="encuestas.id"> </td>
                                <td v-text="encuestas.titulo"></td>
                                <td widht="10px">
                                    <button class="btn btn-warning btn-md"> Editar </button>
                                </td>
                                <td widht="10px">
                                    <button class="btn btn-danger btn-md" @click.prevent="deleteencuesta(encuestas)">Eliminar</button>
                                </td>
                            </tr>
                        </body>
            </table>   
</div>                             
</template>

<script>
export default {
    data: function(){
        return {
            encuesta:[],
            titulo : '',
            errors : [],
        }
    },
    methods:{
            getencuesta: function (){
                var urlencuesta= 'encuesta';
                axios.get(urlencuesta).then(response => {
                this.encuesta = response.data
                });
            
            },
            deleteencuesta: function (encuestas){
                var url = 'encuesta/' + encuestas.id;
                axios.delete(url).then(response => {                     //eliminamos
                this.getencuesta();                                     //listamos las preguntas
                this.$toastr.success('Pregunta eliminada con exito');  //mensaje
            });
               
            },
            createencuesta: function() {
                var url = 'encuesta';
                axios.post(url, {
                    titulo: this.titulo
                }).then(response => {
                    this.getencuesta();
                    this.titulo = '';
                    this.errors = [];
                    $('#create').modal('hide');
                    this.$toastr.success('Pregunta creada con exito');
                }).catch(error => {
                    this.errors = 'Corrija para poder crear con éxito'
                });
        },
        CreateResp: function() {
            var urlresp = 'resp';
            axios.post(urlresp, {
                respuesta: this.respuesta,
                id_user :  this.id_user,
                encuestas_id : this.encuestas_id,
            }).then(response => {
                this.getencuesta();
                this.respuesta = '';
                this.id_user = '';
                this.encuestas_id = '';
                this.errors = [];
                this.$toastr.success('Respuesta creada con exito');
            }).catch(error => {
                this.errors = 'Corrija para poder enviar con éxito'
            });
        },

    }
};
</script>