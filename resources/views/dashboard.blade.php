<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="col-xl-12">
                    <div class="card">
                          <div class="card-body">
                              <div class="row">
                                <div id="presenca" class="col-xl-4">
                                   <h5 style="text-align: center;">Canal de Presença</h5>
                                   <div id="user-presenca"  class="alert alert-primary">
                                        <p>Usuários Conectados</p>
                                   </div>
                                </div>
                                <div id="privado" class="col-xl-4">
                                    <h5 style="text-align: center;">Canal Privado</h5>
                                </div>
                                <div id="publico" class="col-xl-4">
                                    <h5 style="text-align: center;"> Canal Publico</h5>
                                </div>
                              </div>
                          </div>
                      </div>
                  </div>
            </div>
        </div>
    </div>
 
    <script>

        var presenca = document.getElementById("presenca");
        var users_presenca =  document.getElementById("user-presenca");
        var privado =  document.getElementById("privado");
        var publico =  document.getElementById("publico");
        
       
        Echo.channel('channel-publico')
          .listen('channelPublico', (e) => {
            publico.innerHTML += "<div class='alert alert-success' >" 
                + e.mensagem + '</div>' ;
          });
          Echo.private('App.Models.User.{{Auth::user()->id}}')
            .listen('channelPrivado', (e) => {
                privado.innerHTML += "<div class='alert alert-success' >" 
                    + e.mensagem + '</div>' ;
          }).notification((notificaBroadcasting) => {
                swal("OK!", notificaBroadcasting.mensagem , "success");  
          });
          Echo.join('chat')
          .here(users => {
              users.forEach(user => {
                  users_presenca.innerHTML += '<p>' + user.name + '</p>' ;
              });
          })
         .joining((user) => {
              presenca.innerHTML += "<div class='alert alert-success' > O usuário : " 
                + user.name + ' entrou no canal de presença.</div>' ;
         })
         .leaving((user) => {
              presenca.innerHTML += "<div class='alert alert-warning'> O usuário:  " 
                + user.name + ' saiu do canal de presença.</div>';
         })
         .error((error) => {
                alert(error);
         })
         .listen('channelPresenca', (e) =>{
            presenca.innerHTML += "<div class='alert alert-success'>"+ e.mensagem +'</div>';
         });
      </script>
</x-app-layout>
