@extends('layouts.app')
@push('seo')
    <title>Todas as Lojas e Marcas Parceiras | Toma Cupom</title>
    <meta name="description" content="Navegue pela lista completa de lojas parceiras do Toma Cupom. Encontre cupons de desconto e ofertas exclusivas de centenas de marcas organizadas de A a Z.">
    <meta name="keywords" content="lista de lojas, cupons de desconto, marcas parceiras, ofertas, promoções, descontos online, toma cupom">
    <meta property="og:site_name" content="Toma Cupom">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.tomacupom.com.br/lojas/">
    <meta property="og:title" content="Todas as Lojas e Marcas Parceiras | Toma Cupom">
    <meta property="og:description" content="Confira a lista completa de parceiros do Toma Cupom e economize com cupons exclusivos organizados por ordem alfabética.">
    <meta property="og:image" content="https://cdn.tomacupom.com.br/images/toma-cupom-share.webp">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://www.tomacupom.com.br/lojas/">
@endpush
@section('content')
    <div class="pt-24 md:pt-32 pb-20 bg-gray-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 md:px-12">
            <div class="mb-12 text-center md:text-left">
                <h1 class="text-3xl md:text-5xl font-black text-[#222222] mb-4">
                    Todas as <span class="text-[#fe4b09]">Lojas</span>
                </h1>
                <p class="text-gray-500 max-w-2xl leading-relaxed text-sm md:text-base font-medium">
                    Navegue pela nossa lista completa de parceiros e encontre os melhores cupons de desconto e ofertas exclusivas organizados por ordem alfabética.
                </p>
            </div>
            @php
                $lojasAgrupadas = $lojas->groupBy(function($item) {
                    return strtoupper(mb_substr($item->nome, 0, 1));
                });
                $alfabeto = range('A', 'Z');
            @endphp
            <div class="bg-white p-3 md:p-4 rounded-2xl shadow-sm border border-gray-200 mb-12 sticky top-20 md:top-24 z-30 overflow-x-auto scrollbar-hide">
                <div class="flex items-center justify-between min-w-max gap-2 px-2">
                    @foreach($alfabeto as $letra)
                        @php $hasLojas = isset($lojasAgrupadas[$letra]); @endphp
                        @if($hasLojas)
                            <a href="#letra-{{ $letra }}" 
                               class="w-9 h-9 md:w-10 md:h-10 flex items-center justify-center rounded-lg font-bold text-xs md:text-sm transition-all duration-300 bg-orange-50 text-[#fe4b09] hover:bg-[#fe4b09] hover:text-white border border-orange-100 shadow-sm">
                                {{ $letra }}
                            </a>
                        @else
                            <span class="w-9 h-9 md:w-10 md:h-10 flex items-center justify-center rounded-lg font-bold text-xs md:text-sm text-gray-300 cursor-not-allowed">
                                {{ $letra }}
                            </span>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="space-y-16">
                @foreach($lojasAgrupadas as $letra => $itens)
                    <section id="letra-{{ $letra }}" class="scroll-mt-32 md:scroll-mt-40">
                        <div class="flex items-center gap-4 mb-8">
                            <div class="w-12 h-12 md:w-14 md:h-14 bg-[#fe4b09] text-white rounded-2xl flex items-center justify-center text-xl md:text-2xl font-black shadow-lg shadow-orange-200">
                                {{ $letra }}
                            </div>
                            <div class="h-px flex-1 bg-gray-200"></div>
                            <span class="text-[10px] md:text-xs font-bold text-gray-400 uppercase tracking-widest">{{ $itens->count() }} Lojas</span>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">
                            @foreach($itens as $loja)
                                <a href="{{ url('/cupons/' . $loja->slug) }}" 
                                   class="group bg-white p-4 md:p-5 rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:border-orange-100 hover:-translate-y-1.5 transition-all duration-300 flex items-center gap-5">
                                    <div class="w-16 h-16 md:w-20 md:h-20 shrink-0 flex items-center justify-center overflow-hidden">
                                        <img src="{{ $loja->logo_image_link }}" 
                                             alt="{{ $loja->alt_text_logo ?? 'Logo ' . $loja->nome }}" 
                                             class="max-w-full max-h-full object-contain rounded-xl filter transition-all duration-300 group-hover:scale-105">
                                    </div>
                                    <div class="flex-1 text-left min-w-0">
                                        <span class="block font-bold text-[#222222] text-base md:text-lg group-hover:text-[#fe4b09] transition-colors duration-300 mb-0.5 truncate">
                                            {{ $loja->nome }}
                                        </span>
                                        <span class="text-[11px] font-bold text-gray-400 uppercase tracking-tight flex items-center gap-1 group-hover:text-[#fe4b09]">
                                            Ver cupões 
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                            </svg>
                                        </span>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </section>
                @endforeach
            </div>
        </div>
    </div>
    <style>
        html { scroll-behavior: smooth; }
        .scrollbar-hide::-webkit-scrollbar { display: none; }
        .scrollbar-hide { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
@endsection