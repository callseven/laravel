@extends('layouts.template')
@section('title', 'Produtos')
@section('content')
<div class="container">
<a href="produtos/inserir" type="button" class="mt-4 mb-4 btn btn-primary">Inserir Produtos</a>

<!-- <h1>Pagina dos Produtos</h1> -->
    @foreach($produtos as $produto)
    <p>{{$produto->descricao}}</p>
    @endforeach

    {{ $produtos->links() }}
</div>
<!-- {{ $produtos->onEachSide(5)->links() }} -->
@endsection
