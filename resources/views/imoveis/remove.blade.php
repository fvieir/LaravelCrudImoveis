@extends('shared.base')
@section('content')
<div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading"> <b> Remover imóvel</b></div>
        <div class="panel-body">  
            <form action="{{ route('imoveis.destroy' ,$imovel->id) }}" method="post">
            <input type="hidden" name="_method" value="DELETE">
            {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-6">
                    <h4>Tem certeza que deseja remover o imóvel?</h4>
						<hr>
						<h4>Sobre o imóvel</h4>
						<p>Descrição: {{$imovel->descricao}}</p>
						<p>Preço: R$ {{number_format($imovel->preco, 2, ',', '.')}}</p>
						<p>Quantidade de Quartos: {{$imovel->qtdQuartos}}</p>
						<p>Tipo: {{$imovel->tipo}}</p>
						<p>Finalidade: {{$imovel->finalidade}}</p>
						<hr>
						<h4>Endereço</h4>
						<p>Logradouro: {{$imovel->logradouroEndereco}}</p>
						<p>Bairro: {{$imovel->bairroEndereco}}</p>
						<p>Número: {{$imovel->numeroEndereco}}</p>
						<p>CEP: {{$imovel->cepEndereco}}</p>
						<p>Cidade: {{$imovel->cidadeEndereco}}</p>
                    </div>
                </div>
                <button type="submit" class="btn btn-danger"> Remover </button>
                <a href="{{ url()->previous() }}" class="btn btn-default"> Voltar </a>
            </form>
        </div>
    </div>
</div>
@endsection