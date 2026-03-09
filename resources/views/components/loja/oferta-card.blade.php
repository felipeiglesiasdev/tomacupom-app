@props(['oferta'])

<div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-5 md:p-6 flex flex-col md:flex-row gap-5 md:gap-6 items-center hover:shadow-lg hover:border-gray-200 transition-all duration-300 group relative overflow-hidden">
    
    <!-- Efeito visual de destaque na lateral esquerda (Aparece no hover) -->
    <div class="absolute left-0 top-0 bottom-0 w-1.5 bg-[#fe4b09] transform -translate-x-full group-hover:translate-x-0 transition-transform duration-300 rounded-l-2xl"></div>

    <!-- 1. Imagem / Destaque Visual (Quadrado exato de 200x200px) -->
    <div class="w-[200px] h-[200px] shrink-0 flex items-center justify-center">
        
        <!-- Verifica se a oferta tem imagem usando a coluna correta (imagem_oferta) -->
        @if(!empty($oferta->imagem_oferta))
            <!-- Imagem bruta preenchendo o espaço, apenas com o border-radius -->
            <img src="{{ $oferta->imagem_oferta }}" alt="{{ $oferta->titulo }}" class="w-full h-full object-cover rounded-xl group-hover:scale-110 transition-transform duration-300 shadow-sm">
        @else
            <!-- Fallback: Mostra o ícone (com a caixinha) caso a oferta não tenha imagem -->
            <div class="w-full h-full bg-gray-50 rounded-xl flex flex-col items-center justify-center border border-gray-100 group-hover:bg-orange-50 transition-colors duration-300">
                <span class="text-gray-400 group-hover:text-[#fe4b09] transition-colors duration-300 mb-1">
                    <i class="bi bi-bag-heart-fill text-3xl"></i>
                </span>
                <span class="text-gray-500 group-hover:text-orange-800 transition-colors duration-300 text-xs font-bold uppercase tracking-widest">Oferta</span>
            </div>
        @endif

    </div>

    <!-- 2. Informações da Oferta -->
    <div class="flex-1 w-full text-center md:text-left">
        <h3 class="text-lg md:text-xl font-bold text-[#222222] mb-2 leading-tight group-hover:text-[#fe4b09] transition-colors duration-300">
            {{ $oferta->titulo ?? 'Título da Oferta Indisponível' }}
        </h3>
        <p class="text-gray-500 text-sm mb-4 line-clamp-2 leading-relaxed">
            {{ $oferta->descricao ?? 'Aproveite este desconto especial aplicado diretamente no site da loja parceira.' }}
        </p>
        
        <div class="flex items-center justify-center md:justify-start gap-4 text-xs font-medium">
            <!-- Validade -->
            <div class="flex items-center gap-1.5 {{ isset($oferta->data_expiracao) && \Carbon\Carbon::parse($oferta->data_expiracao)->isPast() ? 'text-red-500' : 'text-gray-400' }}">
                <i class="bi bi-clock-history text-sm"></i>
                @if(isset($oferta->data_expiracao))
                    Válido até {{ \Carbon\Carbon::parse($oferta->data_expiracao)->format('d/m/Y') }}
                @else
                    Tempo indeterminado
                @endif
            </div>
        </div>
    </div>

    <!-- 3. Botão de Ação (Ir para a loja) -->
    <div class="w-full md:w-56 shrink-0 flex flex-col items-center justify-center mt-3 md:mt-0">
        
        <a href="{{ $oferta->link_oferta ?? '#' }}" target="_blank" rel="nofollow" class="w-full h-12 flex items-center justify-center gap-2 bg-[#222222] text-white font-bold rounded-xl hover:bg-[#fe4b09] hover:-translate-y-1 hover:shadow-md transition-all duration-300 no-underline">
            <span>Pegar Oferta</span>
            <i class="bi bi-box-arrow-up-right text-sm"></i>
        </a>
        
        <span class="text-[10px] text-gray-400 mt-3 uppercase tracking-wider flex items-center gap-1">
            <i class="bi bi-shield-check text-green-500"></i> Desconto Aplicado
        </span>
    </div>

</div>