<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aula Eventos - Detalhes Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1>Detalhes - Produto</h1> 
    <center> <a  class="btn btn-primary" href="javascript:history.back()"> Voltar </a></center>
    @if(isset($produto))
     <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img style="width: 190px; height:150px;" src="{{asset('img/Produto-1024x745.png')}}" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">{{$produto->descricao}}</h5>
              <p class="card-text">{{$produto->detalhes}}</p>
            </div>
          </div>
        </div>
      </div>
    @endif
</body>
</html>