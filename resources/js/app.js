require('./bootstrap');
window.Vue = require('vue');


//componentes
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('survey-component', require('./components/SurveyComponent.vue').default);

//importacion de las notificaciones
import Vue from 'vue'
import VueToastr2 from 'vue-toastr-2'
import 'vue-toastr-2/dist/vue-toastr-2.min.css'
window.toastr = require('toastr')
Vue.use(VueToastr2)


const app = new Vue({
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
});