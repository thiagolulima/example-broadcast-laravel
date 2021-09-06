<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aula Eventos - Lista de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="{{asset('js/app.js')}}"></script>
    
</head>
<body>
    <center><h1> Listagem de Produtos </h1></center>
    @if(isset($produtos))
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
    @endif
</body>
</html>
<script>
  Echo.channel(`test`)
    .listen('test', (e) => {
        alert(e.mensagem);
    });
</script>

