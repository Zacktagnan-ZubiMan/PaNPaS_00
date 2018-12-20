<div class="modal fade" id="borrarModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4>¿Estás seguro? @{{opcionesBorrar.id}}</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <form method="get" action="#" v-on:submit.prevent="createKeep">
            <div class="modal-body">         
                    <a href="#" class="btn btn-danger float-right" data-toggle="modal" data-target="#borrarModal" v-on:click="continuar">Si</a>
                    <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target="#borrarModal" v-on:click="cancelar">No</a>
            </div>

            </form>
        </div>
    </div>
</div>
