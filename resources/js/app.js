require('./bootstrap');
window.Vue = require('vue');


//componentes
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('survey-component', require('./components/SurveyComponent.vue').default);
Vue.component('task-component', require('./components/TaskComponent.vue').default);

//importacion de las notificaciones
import Vue from 'vue'
import VueToastr2 from 'vue-toastr-2'
import 'vue-toastr-2/dist/vue-toastr-2.min.css'
window.toastr = require('toastr')
Vue.use(VueToastr2)


const app = new Vue({
    el: '#survey',
});
