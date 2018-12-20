$(document).ready (function (){

    var id = 999;
    var usuarios = [];
    var usuarioSeleccionado = [];



      var opcionesBorrar = new Vue({
            el: '#borrarModal',
            data: {
              id: id
            },
            // define methods under the `methods` object
            methods: {
              continuar: function () {
                // `this` inside methods points to the Vue instance
                alert("Borrado")
                // `event` is the native DOM event
              },
              cancelar: function () {
                // `this` inside methods points to the Vue instance
                alert("Cancelado")
                // `event` is the native DOM event
              }
            }
          });


      var opcionesEditar = new Vue({
            el: '#crud',
             created: function() {
                this.getUsuarios();
                this.getPerfiles();
            },
            data: {
              name: 'Vue.js',
              id: id,
              usuarioSeleccionado: null,
              usuarios: usuarios,
              perfiles: null,

              //datos del usuario Seleccionado
              nick:     "",
              nombre:   "",
              apellido: "",
              correo:   "",
              cuenta:   ""


            },
            // define methods under the `methods` object
            methods: {
              getUsuarios: function(){
                      var url = "/api/usuarios";

                      $.getJSON(url, function(data) {
                          opcionesEditar.usuarios = data;
                        }
                        );
                    },
              seleccionarUsuario: function(){
                      usuarioSeleccionado = this.usuarios[this.id - 1];

                      
                      this.nick = usuarioSeleccionado.nick;
                      this.nombre = usuarioSeleccionado.nombre;
                      this.apellido = usuarioSeleccionado.apellido;
                      this.correo = usuarioSeleccionado.email;
                      this.cuenta = usuarioSeleccionado.perfil_id;

                    },
              getPerfiles: function(){
                      var url = "/api/perfiles";

                      $.getJSON(url, function(data) {
                          opcionesEditar.perfiles = data;
                        }
                        );
                    }
                              }
            
          })






}); //document ready




