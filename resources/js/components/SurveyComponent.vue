<template>
  <form method="POST" v-on:submit.prevent="createencuesta">
    <div class="modal fade" id="create">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h3>Crear pregunta</h3>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>×</span>
                    </button>
                </div>
                <div class="modal-body">
                <label for="titulo">Nueva pregunta</label>
                <input name="titulo" type="text" class="form-control" v-model="titulo">
                
                </div>
                <div class="modal-footer">
                <button type="submit" class="btn btn-simple btn-primary" @click.prevent="createencuesta()">Guardar</button>                </div>
            </div>
        </div>
    </div>
</form> 
</template>

<script>
export default {
    el: '#crud',
    created: function(){
        this.getencuesta();
    },
    data:{
        encuesta:[],
        titulo : '',
        //fillencuestas:('id':'', 'encuestas':'');
        errors : []
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
    }
}
</script>