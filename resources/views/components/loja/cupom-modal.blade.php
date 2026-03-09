@props(['cupom'])

{{-- 
    Este componente espera estar dentro de um elemento com x-data="{ showModal: false, copiado: false }"
--}}
<template x-teleport="body">
    <div x-show="showModal" class="fixed inset-0 z-[100] flex items-center justify-center px-4 sm:px-0" x-cloak>
        
        <!-- Fundo escuro borrado (Overlay) -->
        <div x-show="showModal" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="absolute inset-0 bg-[#222222]/80 backdrop-blur-sm" 
             @click="showModal = false">
        </div>

        <!-- Caixa do Modal -->
        <div x-show="showModal" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 translate-y-8 sm:translate-y-0 sm:scale-95"
             x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
             x-transition:leave-end="opacity-0 translate-y-8 sm:translate-y-0 sm:scale-95"
             class="bg-white w-full max-w-lg rounded-2xl shadow-2xl relative z-10 flex flex-col overflow-hidden">
            
            <!-- Cabeçalho do Modal -->
            <div class="flex justify-between items-center p-5 border-b border-gray-100 bg-gray-50/50">
                <span class="font-bold text-gray-700 flex items-center gap-2">
                    <i class="bi bi-ticket-perforated-fill text-[#fe4b09]"></i> Detalhes da Oferta
                </span>
                <button @click="showModal = false" class="text-gray-400 hover:text-[#fe4b09] transition-colors p-1" title="Fechar">
                    <i class="bi bi-x-lg text-xl"></i>
                </button>
            </div>

            <!-- Corpo do Modal -->
            <div class="p-6 sm:p-8 text-center">
                
                <h3 class="text-xl font-bold text-[#222222] mb-2 leading-tight">{{ $cupom->titulo }}</h3>
                <p class="text-sm text-gray-500 mb-8 leading-relaxed">{{ $cupom->descricao }}</p>

                <!-- LÓGICA DE EXIBIÇÃO DO CÓDIGO -->
                @if(!empty($cupom->codigo))
                    <!-- Área do Código do Cupom (Quando EXISTE código) -->
                    <div class="relative mb-8">
                        <div class="bg-orange-50 border-2 border-dashed border-[#fe4b09] rounded-xl p-4 sm:p-5 flex flex-col sm:flex-row items-center justify-between gap-4 relative overflow-hidden group">
                            
                            <span class="font-mono text-2xl sm:text-3xl font-black text-[#fe4b09] tracking-wider select-all">
                                {{ $cupom->codigo }}
                            </span>
                            
                            <!-- Botão de Copiar com feedback -->
                            <button 
                                @click="navigator.clipboard.writeText('{{ $cupom->codigo }}'); copiado = true; setTimeout(() => copiado = false, 2000);"
                                class="w-full sm:w-auto px-6 py-3 rounded-lg font-bold text-sm transition-all duration-300 flex items-center justify-center gap-2"
                                :class="copiado ? 'bg-green-600 text-white' : 'bg-[#fe4b09] text-white hover:bg-[#e03f00] hover:shadow-md'"
                            >
                                <i class="bi" :class="copiado ? 'bi-check-lg text-lg' : 'bi-copy'"></i>
                                <span x-text="copiado ? 'Copiado!' : 'Copiar Código'"></span>
                            </button>
                        </div>
                        <p class="text-[11px] text-gray-400 mt-2 uppercase tracking-wide">Clique no botão para copiar o código e usar na loja</p>
                    </div>
                @else
                    <!-- Área de Cupom Ativado (Quando NÃO EXISTE código) -->
                    <div class="mb-8 p-6 bg-green-50 rounded-2xl border border-green-100 flex flex-col items-center gap-3">
                        <div class="w-12 h-12 bg-green-100 text-green-600 rounded-full flex items-center justify-center text-2xl">
                            <i class="bi bi-lightning-charge-fill"></i>
                        </div>
                        <div>
                            <p class="text-green-800 font-bold text-lg m-0">Desconto Ativado!</p>
                            <p class="text-green-700 text-sm opacity-80">Não é necessário código para esta oferta.</p>
                        </div>
                    </div>
                @endif

                <!-- Detalhes Extras (Data e Regras) -->
                <div class="bg-gray-50 rounded-xl p-4 mb-8 text-left space-y-3">
                    <div class="flex items-center gap-3 text-xs font-semibold text-gray-600">
                        <i class="bi bi-calendar3 text-[#fe4b09]"></i>
                        @if(isset($cupom->data_expiracao))
                            Expira em: <span class="text-gray-900">{{ \Carbon\Carbon::parse($cupom->data_expiracao)->format('d/m/Y') }}</span>
                        @else
                            Validade: <span class="text-gray-900">Indeterminada (Enquanto durar o estoque)</span>
                        @endif
                    </div>
                    <div class="flex items-center gap-3 text-xs font-semibold text-green-600">
                        <i class="bi bi-patch-check-fill"></i>
                        Verificado: <span class="text-gray-900">Testado e funcionando hoje</span>
                    </div>
                    @if(!empty($cupom->regras))
                        <div class="pt-2 border-t border-gray-200">
                            <p class="text-[10px] uppercase text-gray-400 font-bold mb-1">Regras e Condições:</p>
                            <p class="text-xs text-gray-500 leading-relaxed">{{ $cupom->regras }}</p>
                        </div>
                    @endif
                </div>

                <!-- Botão Ir para Loja -->
                <a href="{{ $cupom->link_cupom ?? '#' }}" target="_blank" rel="nofollow" class="block w-full py-4 bg-[#222222] text-white font-bold rounded-xl hover:bg-[#fe4b09] transition-all duration-300 shadow-lg shadow-gray-200 no-underline">
                    Ir para a loja agora <i class="bi bi-box-arrow-up-right ml-2 text-xs"></i>
                </a>

            </div>
        </div>
    </div>
</template>