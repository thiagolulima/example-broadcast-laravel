<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('produtos') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="col-xl-12">
                    <div class="card">
                          <div class="card-body">
                              <div class="row">
                                @foreach($produtos as $produto)
                                <div class="col-sm-3" style="margin-top:10px;">
                                    <div class="card">
                                      <div class="card-body">
                                        <h5 class="card-title">{{$produto->descricao}}</h5>
                                       
                                        <a href="{{route('detalhe.produto',$produto->id)}}" class="btn btn-primary">Detalhes</a>
                                      </div>
                                    </div>
                                  </div>
                                @endforeach
                              </div>
                          </div>
                      </div>
                  </div>
            </div>
        </div>
    </div>
 
    <script>
        
        Echo.private('App.Models.User.{{Auth::user()->id}}')
            .notification((notificacao) => {
                console.log(notificacao.mensagem);
        });
        
      </script>
</x-app-layout>
