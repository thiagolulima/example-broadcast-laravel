<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use App\Events\EventoNavegacao;

class ProdutoController extends Controller
{
    public function index(){
        $produtos = Produto::all();
        return view('produtos')
                  ->with('produtos',$produtos);
    }
    public function detalhe($id)
    {
        $produto = Produto::find($id);
        EventoNavegacao::dispatch($produto);
        return view('detalhes')->with('produto',$produto);
    }
}
