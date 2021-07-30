@extends('shared.base')
@section('content')
<div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading"> <b> Detalhes do imóvel</b></div>
        <div class="panel-body">  
            <div class="row">
                <div class="col-md-6">
                    <h4> <b> Sobre Imovel </b></h4>
                    <p>Descrição: {{ $imovel->descricao}} </p>
                    <p>Preço R$:  {{ number_format($imovel->preco,2,',','.')  }}</p>
                    <p>Qtde de Quartos: {{ $imovel->qtdQuartos }}</p>
                    <p>Tipo: {{$imovel->tipo}}</p>
                    <p>Finalidade: {{$imovel->finalidade}}</p>
                    <hr>
                    <h4><b>Enderenço</b></h4>
                    <p>Logradouro: {{$imovel->lagradouroEndereco}}</p>
                    <p>Bairro: {{$imovel->bairroEndereco}}</p>
                    <p>Número: {{$imovel->numeroEndereco}}</p>
                    <p>CEP: {{$imovel->cepEndereco}}</p>
                    <p>Cidade: {{$imovel->cidadeEndereco}}</p>
                </div>
        </div>
    </div>
</div>

<a href="{{ url()->previous()}}"> <button class="btn btn-primary">Voltar</button> </a>
@endsection()