{{--
    Componente para as abas de "Cupons" e "Ofertas",
    utilizando Alpine.js para a interatividade e recebendo os dados
    do controller para passar aos componentes de card.
--}}
@props(['cupons', 'ofertas'])

<div x-data="{ activeTab: 'cupons' }" class="w-full" data-fade-in>
    {{-- Navegação das Abas --}}
    <div class="border-b border-gray-200">
        <nav class="-mb-px flex space-x-6" aria-label="Tabs">
            {{-- Botão da Aba "Cupons" --}}
            <button 
                @click="activeTab = 'cupons'"
                :class="{
                    'border-[#fe9b0d] text-[#fe9b0d]': activeTab === 'cupons',
                    'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': activeTab !== 'cupons'
                }"
                class="whitespace-nowrap py-4 px-1 border-b-2 font-bold text-lg transition-colors duration-300 focus:outline-none"
            >
                Cupons ({{ count($cupons) }})
            </button>
            
            {{-- Botão da Aba "Ofertas" --}}
            <button 
                @click="activeTab = 'ofertas'"
                :class="{
                    'border-[#fe9b0d] text-[#fe9b0d]': activeTab === 'ofertas',
                    'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': activeTab !== 'ofertas'
                }"
                class="whitespace-nowrap py-4 px-1 border-b-2 font-bold text-lg transition-colors duration-300 focus:outline-none"
            >
                Ofertas ({{ count($ofertas) }})
            </button>
        </nav>
    </div>

    {{-- Conteúdo das Abas --}}
    <div class="py-8">
        {{-- Conteúdo da Aba "Cupons" --}}
        <div x-show="activeTab === 'cupons'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0">
            <div class="space-y-6">
                @forelse ($cupons as $cupom)
                    <x-loja.coupon-card :cupom="$cupom" />
                @empty
                    <p class="text-center text-gray-500 py-8">Nenhum cupom disponível para esta loja no momento.</p>
                @endforelse
            </div>
        </div>
        
        {{-- Conteúdo da Aba "Ofertas" --}}
        <div x-show="activeTab === 'ofertas'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0">
            <div class="space-y-6">
                @forelse ($ofertas as $oferta)
                    <x-loja.offer-card :oferta="$oferta" />
                @empty
                     <p class="text-center text-gray-500 py-8">Nenhuma oferta disponível para esta loja no momento.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>

