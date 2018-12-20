<div class="modal fade" id="editarModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Editar Usuario: @{{nick}}</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <form method="post" action="/admin/editarUsuario">
                @csrf
            <div class="modal-body">
                        <input type="hidden" name="id" class="form-control"  v-model="id">
                    <label>Nick: </label>
                        <input type="text" name="nick" class="form-control" v-model="nick">
                    <label>Nombre</label>
                        <input type="text" name="nombre" class="form-control" v-model="nombre">
                    <label>Apellido</label>
                        <input type="text" name="apellido" class="form-control" v-model="apellido">
                    <label>Email</label>
                        <input type="text" name="email" class="form-control" v-model="correo">
                    <label>Tipo Cuenta</label>
                        <select name="tipoCuenta" class="form-control" required="">
                            <option disabled selected value>Selecciona Tipo de Cuenta</option>
                            <option v-for="perfil in perfiles" v-bind:value="perfil.id" v-text="perfil.nombre"></option>
                            
                        </select>

            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="Actualizar">
            </div>
            </form>
        </div>
    </div>
</div>
