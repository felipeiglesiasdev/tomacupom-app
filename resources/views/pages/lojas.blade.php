@extends('layouts.app')

@section('content')
    <h1>Lojas Ativas ({{ $lojas->count() }})</h1>

    @if($lojas->isEmpty())
        <p>Nenhuma loja ativa foi encontrada no banco de dados.</p>
    @else
        <div style="display: flex; flex-wrap: wrap; gap: 20px;">
            @foreach($lojas as $loja)
                <div class="loja-card">
                    <!-- LOGO DA LOJA -->
                    @if($loja->logo_image_link)
                        <img src="{{ $loja->logo_image_link }}" alt="{{ $loja->alt_text_logo }}" class="loja-logo">
                    @else
                        <div style="width: 100px; height: 50px; background: #eee; text-align: center; line-height: 50px; font-size: 12px;">Sem logo</div>
                    @endif

                    <!-- DADOS DA LOJA -->
                    <h3>{{ $loja->nome }}</h3>
                    <p><strong>Slug:</strong> {{ $loja->slug }}</p>
                    <p><strong>Alt Text:</strong> {{ $loja->alt_text_logo ?? 'N/A' }}</p>
                    
                    <a href="/cupons/{{ $loja->slug }}" style="color: blue; text-decoration: none;">Acessar Loja &rarr;</a>
                </div>
            @endforeach
        </div>
    @endif
@endsection

