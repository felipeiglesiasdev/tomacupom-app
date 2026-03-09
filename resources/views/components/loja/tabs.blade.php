@props(['cupons', 'ofertas', 'loja'])

<!-- Removido o px-4 md:px-12 daqui, pois o alinhamento agora vem do container pai na view show -->
<div x-data="{ activeTab: 'cupons' }" class="w-full" data-fade-in>

    <div class="mb-8 flex flex-col md:flex-row md:items-end justify-between gap-4">
        <div>
            <h2 class="text-2xl font-bold text-[#222222] mb-3">Cupons e Ofertas {{ $loja->nome }}</h2>
            
            {{-- Textos destacados para SEO (O Alpine exibe o correto dependendo da aba ativa) --}}
            <div class="text-sm font-medium text-gray-500 bg-orange-50/50 inline-block px-4 py-2 rounded-lg border border-orange-100">
                <span x-show="activeTab === 'cupons'" x-cloak class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="text-[#fe4b09]" viewBox="0 0 16 16">
                        <path d="M2 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 6.586 1H2zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                    </svg>
                    <span>Foram encontrados <strong class="text-[#222222]">{{ count($cupons) }} cupons</strong> para a loja {{ $loja->nome }}.</span>
                </span>
                <span x-show="activeTab === 'ofertas'" x-cloak class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="text-[#fe4b09]" viewBox="0 0 16 16">
                        <path d="M8 1a2 2 0 0 0-2 2v2H5V3a3 3 0 1 1 6 0v2h-1V3a2 2 0 0 0-2-2zM5 5H3.36a1.5 1.5 0 0 0-1.483 1.277L.85 13.13A2.5 2.5 0 0 0 3.322 16h9.355a2.5 2.5 0 0 0 2.473-2.87l-1.028-6.853A1.5 1.5 0 0 0 12.64 5H11v1.5a.5.5 0 0 1-1 0V5H6v1.5a.5.5 0 0 1-1 0V5z"/>
                        <path d="M8 7.5c.667 0 1.144.5 1.144 1.2s-.477 1.2-1.144 1.2c-.666 0-1.144-.5-1.144-1.2s.478-1.2 1.144-1.2z"/>
                    </svg>
                    <span>Foram encontradas <strong class="text-[#222222]">{{ count($ofertas) }} ofertas</strong> para a loja {{ $loja->nome }}.</span>
                </span>
            </div>
        </div>
    </div>

    {{-- Navegação das Abas --}}
    <div class="border-b border-gray-200">
        <nav class="-mb-px flex space-x-6 md:space-x-8 overflow-x-auto" aria-label="Tabs">
            {{-- Botão da Aba "Cupons" --}}
            <button 
                @click="activeTab = 'cupons'"
                :class="{
                    'border-[#fe4b09] text-[#222222]': activeTab === 'cupons',
                    'border-transparent text-gray-500 hover:text-[#222222] hover:border-gray-300': activeTab !== 'cupons'
                }"
                class="whitespace-nowrap py-4 px-1 border-b-[3px] font-bold text-base md:text-lg transition-colors duration-300 focus:outline-none"
            >
                Ver Cupons ({{ count($cupons) }})
            </button>
            
            {{-- Botão da Aba "Ofertas" --}}
            <button 
                @click="activeTab = 'ofertas'"
                :class="{
                    'border-[#fe4b09] text-[#222222]': activeTab === 'ofertas',
                    'border-transparent text-gray-500 hover:text-[#222222] hover:border-gray-300': activeTab !== 'ofertas'
                }"
                class="whitespace-nowrap py-4 px-1 border-b-[3px] font-bold text-base md:text-lg transition-colors duration-300 focus:outline-none"
            >
                Ver Ofertas ({{ count($ofertas) }})
            </button>
        </nav>
    </div>

    {{-- Conteúdo das Abas --}}
    <div class="py-8">
        {{-- Conteúdo da Aba "Cupons" --}}
        <div x-show="activeTab === 'cupons'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0" x-cloak>
            <div class="space-y-6">
                @forelse ($cupons as $cupom)
                    <x-loja.cupom-card :cupom="$cupom" />
                @empty
                    <div class="text-center py-12 bg-gray-50 rounded-xl border border-dashed border-gray-200">
                        <i class="bi bi-emoji-frown text-3xl text-gray-300 mb-3 block"></i>
                        <p class="text-gray-500">Nenhum cupom disponível para esta loja no momento.</p>
                    </div>
                @endforelse
            </div>
        </div>
        
        {{-- Conteúdo da Aba "Ofertas" --}}
        <div x-show="activeTab === 'ofertas'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0" x-cloak>
            <div class="space-y-6">
                @forelse ($ofertas as $oferta)
                    <x-loja.oferta-card :oferta="$oferta" />
                @empty
                    <div class="text-center py-12 bg-gray-50 rounded-xl border border-dashed border-gray-200">
                        <i class="bi bi-basket text-3xl text-gray-300 mb-3 block"></i>
                        <p class="text-gray-500">Nenhuma oferta disponível para esta loja no momento.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>