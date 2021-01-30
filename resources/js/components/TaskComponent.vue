<template>
    <div id="survey" class="col-md-8">
        <br /><br />
        <nav>
            <H1>SISTEMA DE ENCUESTAS</H1>
        </nav>
        <br /><br />
        <div class="card">
            <div class="card-header">
                <h4>ENCUESTAS:</h4>
            </div>
            <table class="table table-bordered table-hover table-condensed">
                <thead>
                    <tr>
                        <th>TITULO</th>
                        <th>OPCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="encuestas in encuesta" :key="encuestas.id">
                        <td v-text="encuestas.titulo"></td>
                        <td widht="10px">
                            <input
                                type="radio"
                                value="SI"
                                :name="encuestas.id"
                                @change="check($event)"
                            />SI
                            <input
                                type="radio"
                                value="NO"
                                :name="encuestas.id"
                                @change="check($event)"
                            />NO
                        </td>
                    </tr>
                    <!-- <p>Radio: {{radio}}</p> -->
                </tbody>
            </table>
            <button
                type="submit"
                class="btn btn-primary btn-lg"
                @click="saveResp()"
            >
                Enviar
            </button>
        </div>
    </div>
</template>

<script>
let user = document.head.querySelector('meta[name="user"]');
var user_id = JSON.parse(user.content).id;
console.log(user_id);
export default {
    data() {
        return {
            respuestas: [
                {
                    valor: "",
                    encuestas_id: ""
                }
            ],
            encuesta: [], //Este array contendrá las tareas de nuestra bd
            user_id: user_id, //id del usuario que esta enviando la resp
            valor: "",
            encuestas_id: ""
        };
    },
    methods: {
        getTasks() {
            let me = this;
            let url = "/tareas"; //Ruta que hemos creado para que nos devuelva todas las preg
            axios
                .get(url)
                .then(function(response) {
                    //creamos un array y guardamos el contenido que nos devuelve el response
                    me.encuesta = response.data;
                })
                .catch(function(error) {
                    // handle error
                    console.log(error);
                });
        },
        check($event) {
            let valor = $event.target.value;
            let encuestas_id = $event.target.name;

            let aux = new respuestas();
            aux = valor;
            aux = encuestas_id;
            set(valor);
            set(encuestas_id);
            respuestas.add(aux);

            this.respuestas.push({ valor, encuestas_id });
            console.log(this.respuestas);
        },
        saveResp() {
            let me = this;
            let url = "/resp/guardar"; //Ruta que hemos creado para enviar las resp y guardarla
            axios
                .post(url, {
                    //estas variables son las que enviaremos para llenar la tabla opcions
                    valor: this.valor,
                    encuestas_id: this.encuestas_id,
                    user_id: user_id
                })
                .then(function(response) {
                    me.getTasks(); //llamamos al metodo getTask(); para que refresque nuestro array
                });
            this.$toastr
                .success("Respuestas enviadas con exito")
                .catch(function(error) {
                    console.log(error);
                });
        }
    },
    mounted() {
        this.getTasks();
    }
};
</script>
