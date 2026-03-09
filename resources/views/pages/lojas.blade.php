@extends('layouts.app')

@section('content')
    {{-- 
        Fundo alterado para Dark (#1a1a1a).
        O espaçamento pt-24/32 garante que o conteúdo não fique por baixo do header fixo.
    --}}
    <div class="pt-24 md:pt-32 pb-20 bg-[#1a1a1a] min-h-screen">
        <div class="max-w-7xl mx-auto px-4 md:px-12">
            
            {{-- Título e Introdução da Página --}}
            <div class="mb-12 text-center md:text-left">
                <h1 class="text-3xl md:text-5xl font-black text-white mb-4">
                    Todas as <span class="text-[#fe4b09]">Lojas</span>
                </h1>
                <p class="text-gray-400 max-w-2xl leading-relaxed text-sm md:text-base">
                    Navegue pela nossa lista completa de parceiros e encontre os melhores cupões de desconto e ofertas exclusivas organizados por ordem alfabética.
                </p>
            </div>

            @php
                // Agrupamos as lojas pela primeira letra do nome para a listagem alfabética
                $lojasAgrupadas = $lojas->groupBy(function($item) {
                    return strtoupper(mb_substr($item->nome, 0, 1));
                });
                
                // Geramos o alfabeto completo para o menu de navegação rápida
                $alfabeto = range('A', 'Z');
            @endphp

            {{-- Menu de Salto Alfabético (Jump Menu) - Tema Dark --}}
            <div class="bg-[#222222] p-3 md:p-4 rounded-2xl shadow-xl border border-[#333333] mb-12 sticky top-20 md:top-24 z-30 overflow-x-auto scrollbar-hide">
                <div class="flex items-center justify-between min-w-max gap-2 px-2">
                    @foreach($alfabeto as $letra)
                        @php $hasLojas = isset($lojasAgrupadas[$letra]); @endphp
                        
                        @if($hasLojas)
                            <a href="#letra-{{ $letra }}" 
                               class="w-9 h-9 md:w-10 md:h-10 flex items-center justify-center rounded-lg font-bold text-xs md:text-sm transition-all duration-300 bg-[#fe4b09]/10 text-[#fe4b09] hover:bg-[#fe4b09] hover:text-white border border-[#fe4b09]/20 shadow-sm">
                                {{ $letra }}
                            </a>
                        @else
                            <span class="w-9 h-9 md:w-10 md:h-10 flex items-center justify-center rounded-lg font-bold text-xs md:text-sm text-gray-600 cursor-not-allowed">
                                {{ $letra }}
                            </span>
                        @endif
                    @endforeach
                </div>
            </div>

            {{-- Listagem das Lojas Agrupadas --}}
            <div class="space-y-16">
                @foreach($lojasAgrupadas as $letra => $itens)
                    <section id="letra-{{ $letra }}" class="scroll-mt-32 md:scroll-mt-40">
                        <div class="flex items-center gap-4 mb-8">
                            <div class="w-12 h-12 md:w-14 md:h-14 bg-[#fe4b09] text-white rounded-2xl flex items-center justify-center text-xl md:text-2xl font-black shadow-lg shadow-[#fe4b09]/10">
                                {{ $letra }}
                            </div>
                            <div class="h-px flex-1 bg-[#333333]"></div>
                            <span class="text-[10px] md:text-xs font-bold text-gray-500 uppercase tracking-widest">{{ $itens->count() }} Lojas</span>
                        </div>

                        {{-- Grid configurado para 3 colunas no Desktop (lg:grid-cols-3) --}}
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">
                            @foreach($itens as $loja)
                                <a href="{{ url('/cupons/' . $loja->slug) }}" 
                                   class="group bg-[#222222] p-4 md:p-5 rounded-2xl border border-[#333333] shadow-sm hover:shadow-2xl hover:border-[#fe4b09]/50 hover:bg-[#2a2a2a] hover:-translate-y-1.5 transition-all duration-300 flex items-center gap-5">
                                    
                                    {{-- Logo da Loja Bruta (Sem fundo, sem padding, apenas rounded-xl) --}}
                                    <div class="w-16 h-16 md:w-20 md:h-20 shrink-0 flex items-center justify-center overflow-hidden">
                                        <img src="{{ $loja->logo_image_link }}" 
                                             alt="{{ $loja->alt_text_logo ?? 'Logo ' . $loja->nome }}" 
                                             class="max-w-full max-h-full object-contain rounded-xl filter transition-all duration-300 group-hover:scale-105">
                                    </div>

                                    {{-- Informações da Loja --}}
                                    <div class="flex-1 text-left min-w-0">
                                        <span class="block font-bold text-white text-base md:text-lg group-hover:text-[#fe4b09] transition-colors duration-300 mb-0.5 truncate">
                                            {{ $loja->nome }}
                                        </span>
                                        <span class="text-[11px] font-bold text-gray-500 uppercase tracking-tight flex items-center gap-1 group-hover:text-[#fe4b09]">
                                            Ver cupões <i class="bi bi-chevron-right text-[10px]"></i>
                                        </span>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </section>
                @endforeach
            </div>

            {{-- Estado Vazio --}}
            @if($lojas->isEmpty())
                <div class="text-center py-20 bg-[#222222] rounded-3xl border border-dashed border-[#333333]">
                    <i class="bi bi-shop text-5xl text-gray-700 mb-4 block"></i>
                    <h3 class="text-xl font-bold text-gray-500">Nenhuma loja encontrada.</h3>
                </div>
            @endif

        </div>
    </div>

    {{-- Estilos Auxiliares para Navegação e Scroll --}}
    <style>
        html { scroll-behavior: smooth; }
        .scrollbar-hide::-webkit-scrollbar { display: none; }
        .scrollbar-hide { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
@endsection