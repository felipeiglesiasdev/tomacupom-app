@extends('layouts.app')

@push('seo')
    @include('components.loja.tags')
@endpush

@section('content')
    <x-loja.header :loja="$loja" />
    
    <!-- 1. Envoltório total com o mesmo padding do header (alinha no mobile e no PC) -->
    <div class="w-full px-4 md:px-24">
        
        <!-- 2. Envoltório de limite máximo de largura (alinha exatamente com a foto do header) -->
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row gap-8 mb-12">
            
            <div class="w-full md:w-[70%]">
                <x-loja.tabs :cupons="$loja->cupons" :ofertas="$loja->ofertas" :loja="$loja"/>
                
                @if($loja->seo)
                    <x-loja.seo-content :content="$loja->seo->text_content_seo" />
                @endif
            </div>
            
            <!-- LADO DIREITO (30%) - MANTIDO VAZIO COMO PEDIDO -->
            <div class="w-full md:w-[30%]">
                <!-- O conteúdo da direita entrará aqui no futuro -->
            </div>
            
        </div>
    </div>
@endsection