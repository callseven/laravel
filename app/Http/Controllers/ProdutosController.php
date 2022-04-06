<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Models\produto;



class ProdutosController extends Controller
{
    public function index() {
        $produtos = produto::paginate(14);
        return view('produtos.index', ['produtos' => $produtos]);
    }

    public function create() {
        return view('produtos.create');
    }

    public function view($nome, $valor = null) {
        return view('produtos.view', ['nome' => $nome, 'valor'=>$valor]);
        // if ($valor) {
        //     return "o nome do produto é $nome, e seu valor é $valor"; 
        // } else {
        //     return "o nome do produto é $nome";
        // }
    }    
}
