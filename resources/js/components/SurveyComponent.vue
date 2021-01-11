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
    
}
</script>