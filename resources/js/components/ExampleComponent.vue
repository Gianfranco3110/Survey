<template>
    <div class="container container-task" id="survey">
        <nav>
            <H1>SISTEMA DE ENCUESTAS</H1>
        </nav>
        <br /><br /><br />
        <div class="row">
            <div class="col-md-6">
                <table class="table text-center">
                    <!--Creamos una tabla que mostrará todas las tareas-->
                    <thead>
                        <tr>
                            <th>TITULO</th>
                            <th>ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="encuestas in encuesta" :key="encuestas.id">
                            <!--Recorremos el array y cargamos nuestra tabla-->
                            <td v-text="encuestas.titulo"></td>
                            <td>
                                <!--Botón modificar, que carga los datos del formulario con la tarea seleccionada-->
                                <button
                                    class="btn btn-warning btn-md"
                                    @click="loadFieldsUpdate(encuestas)"
                                >
                                    Modificar
                                </button>
                                <br /><br />
                                <!--Botón que borra la tarea que seleccionemos-->
                                <button
                                    class="btn btn-danger btn-md"
                                    @click="deleteTask(encuestas)"
                                >
                                    Borrar
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <!-- Formulario para la creación o modificación de nuestras tareas-->
                    <h5>AGREGAR PREGUNTA</h5>
                    <input
                        placeholder="Ingresar pregunta"
                        v-model="titulo"
                        type="text"
                        class="form-control"
                    />
                </div>
                <div class="container-buttons">
                    <!-- Botón que añade los datos del formulario, solo se muestra si la variable update es igual a 0-->
                    <button
                        v-if="update == 0"
                        @click="saveTasks()"
                        class="btn btn-success"
                    >
                        Añadir
                    </button>
                    <!-- Botón que modifica la tarea que anteriormente hemos seleccionado, solo se muestra si la variable update es diferente a 0-->
                    <button
                        v-if="update != 0"
                        @click="updateTasks()"
                        class="btn btn-warning"
                    >
                        Actualizar
                    </button>
                    <!-- Botón que limpia el formulario y inicializa la variable a 0, solo se muestra si la variable update es diferente a 0-->
                    <button
                        v-if="update != 0"
                        @click="clearFields()"
                        class="btn btn-dark"
                    >
                        Atrás
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            titulo: "", //Esta variable, mediante v-model esta relacionada con el input del formulario
            update: 0 /*Esta variable contrarolará cuando es una nueva tarea o una modificación, si es 0 significará que no hemos seleccionado
                          ninguna tarea, pero si es diferente de 0 entonces tendrá el id de la tarea y no mostrará el boton guardar sino el modificar*/,
            encuesta: [] //Este array contendrá las tareas de nuestra bd
        };
    },
    methods: {
        getTasks() {
            let me = this;
            let url = "/tareas"; //Ruta que hemos creado para que nos devuelva todas las tareas
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
        saveTasks() {
            let me = this;
            let url = "/tareas/guardar"; //Ruta que hemos creado para enviar una tarea y guardarla
            axios
                .post(url, {
                    //estas variables son las que enviaremos para que crear la tarea
                    titulo: this.titulo
                })
                .then(function(response) {
                    me.getTasks(); //llamamos al metodo getTask(); para que refresque nuestro array y muestro los nuevos datos
                    me.clearFields(); //Limpiamos los campos e inicializamos la variable update a 0
                });
            this.$toastr
                .success("Pregunta Guardada con exito")
                .catch(function(error) {
                    console.log(error);
                });
        },
        updateTasks() {
            /*Esta funcion, es igual que la anterior, solo que tambien envia la variable update que contiene el id de la
                preg que queremos modificar*/
            let me = this;
            axios
                .put("/tareas/actualizar", {
                    id: this.update,
                    titulo: this.titulo
                })
                .then(function(response) {
                    me.getTasks(); //llamamos al metodo getTask(); para que refresque nuestro array y muestro los nuevos datos
                    me.clearFields(); //Limpiamos los campos e inicializamos la variable update a 0
                });
            this.$toastr
                .success("Pregunta actualizada con exito")
                .catch(function(error) {
                    console.log(error);
                });
        },
        loadFieldsUpdate(data) {
            //Esta función rellena los campos y la variable update, con la tarea que queremos modificar
            this.update = data.id;
            let me = this;
            let url = "/tareas/buscar?id=" + this.update;
            axios
                .get(url)
                .then(function(response) {
                    me.titulo = response.data.titulo;
                })
                .catch(function(error) {
                    // handle error
                    console.log(error);
                });
        },
        deleteTask(data) {
            //Esta nos abrirá un alert de javascript y si aceptamos borrará la tarea que hemos elegido
            let me = this;
            let task_id = data.id;
            if (confirm("¿Seguro que deseas borrar esta tarea?")) {
                axios
                    .delete("/tareas/borrar/" + task_id)
                    .then(function(response) {
                        me.getTasks();
                    });
                this.$toastr
                    .success("Pregunta actualizada con exito")
                    .catch(function(error) {
                        console.log(error);
                    });
            }
        },
        clearFields() {
            /*Limpia los campos e inicializa la variable update a 0*/
            this.titulo = "";
            this.update = 0;
        }
    },
    mounted() {
        this.getTasks();
    }
};
</script>
