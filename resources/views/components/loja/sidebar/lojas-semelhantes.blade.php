@props(['lojas'])

@if($lojas->count() > 0)
<div class="bg-[#fe4b09]/5 rounded-xl border border-[#fe4b09]/20 p-4 shadow-sm">
    <h3 class="text-base font-bold text-[#222222] mb-3 flex items-center gap-2">
        <!-- Ícone Bootstrap: Shop (reduzido) -->
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-[#fe4b09]" viewBox="0 0 16 16">
            <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3z"/>
        </svg>
        Lojas Semelhantes
    </h3>
    
    <!-- Grid com 2 colunas e espaçamento reduzido -->
    <div class="grid grid-cols-2 gap-2">
        @foreach ($lojas as $lojaSemelhante)
            <a href="{{ route('cupons.show', $lojaSemelhante->slug) }}" title="{{ $lojaSemelhante->nome }}" class="flex items-center justify-center text-center group p-2.5 bg-white border border-[#fe4b09]/10 rounded-lg hover:bg-[#fe4b09] shadow-sm transition-all duration-300">
                <p class="text-xs font-bold text-gray-700 truncate group-hover:text-white transition-colors">
                    {{ $lojaSemelhante->nome }}
                </p>
            </a>
        @endforeach
    </div>
</div>
@endif