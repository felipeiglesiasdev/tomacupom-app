{{--
    Componente para exibir um card individual de cupom,
    agora com um modal interativo para copiar o código.
--}}
@props(['cupom'])

<div x-data="{ modalOpen: false, copied: false }" @keydown.escape.window="modalOpen = false">
    {{-- Card Visível --}}
    <div class="bg-white p-6 rounded-2xl border border-gray-200 shadow-sm hover:shadow-lg hover:border-orange-200 transition-all duration-300">
        <div class="flex flex-col md:flex-row md:items-center gap-4">
            {{-- Informações do Cupom --}}
            <div class="flex-1">
                <h3 class="font-bold text-lg text-[#171717]">{{ $cupom['titulo'] }}</h3>
                <p class="text-gray-600 mt-1 text-sm">{{ $cupom['descricao'] }}</p>

                {{-- Detalhes (Regras e Expiração) --}}
                <div class="mt-4 flex items-center gap-4">
                    @if($cupom['regras'])
                        <button @click="modalOpen = true" class="text-sm text-gray-500 hover:text-orange-500 underline underline-offset-2">
                            Ver regras
                        </button>
                        <span class="text-gray-300">|</span>
                    @endif
                    <span class="text-sm text-gray-500">Expira em: {{ $cupom['data_expiracao'] }}</span>
                </div>
            </div>

            {{-- Botão de Ação para Abrir o Modal --}}
            <div class="flex-shrink-0">
                <button 
                   @click="modalOpen = true"
                   class="shine-effect group relative w-full md:w-auto flex items-center justify-center px-6 py-3 border border-transparent text-base font-bold rounded-full text-green-800 bg-green-100 hover:bg-green-200 transition-all duration-300 transform hover:scale-105 overflow-hidden"
                >
                    VER CUPOM
                    <i class="bi bi-arrow-right-short text-xl ml-1"></i>
                </button>
            </div>
        </div>
    </div>

    {{-- Modal (Teleportado para o body) --}}
    <template x-teleport="body">
        <div 
            x-show="modalOpen" 
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 z-[999] flex items-center justify-center p-4"
            style="display: none;"
        >
            {{-- Fundo Escuro (Overlay) --}}
            <div @click="modalOpen = false" class="absolute inset-0 bg-black/60 backdrop-blur-sm"></div>

            {{-- Conteúdo do Modal --}}
            <div 
                @click.away="modalOpen = false"
                x-show="modalOpen"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 scale-90"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-90"
                class="relative bg-white rounded-2xl shadow-xl w-full max-w-md p-8 text-center"
            >
                <h3 class="text-xl font-bold text-[#171717]">Seu cupom está pronto!</h3>
                <p class="mt-2 text-gray-600">Copie o código abaixo e cole no site da loja para garantir seu desconto.</p>
                
                {{-- Código do Cupom --}}
                <div class="my-6">
                    <div class="relative border-2 border-dashed border-gray-300 rounded-lg p-4">
                        <input type="text" readonly value="{{ $cupom['codigo'] }}" id="cupom-codigo-{{ \Illuminate\Support\Str::slug($cupom['codigo']) }}" class="w-full text-center bg-transparent text-2xl font-bold text-orange-500 tracking-widest focus:outline-none">
                        <button 
                            @click="navigator.clipboard.writeText('{{ $cupom['codigo'] }}'); copied = true; setTimeout(() => copied = false, 2000)"
                            class="absolute top-1/2 right-4 -translate-y-1/2 text-gray-400 hover:text-orange-500 transition"
                            title="Copiar código"
                        >
                            <i x-show="!copied" class="bi bi-clipboard text-2xl"></i>
                            <i x-show="copied" class="bi bi-clipboard-check text-2xl text-green-500"></i>
                        </button>
                    </div>
                </div>

                {{-- Botão para ir à Loja --}}
                <a href="{{ $cupom['link_redirecionamento'] }}" 
                   rel="nofollow noopener noreferrer" 
                   target="_blank"
                   @click="modalOpen = false"
                   class="shine-effect group relative w-full flex items-center justify-center px-6 py-4 border border-transparent text-lg font-bold rounded-full text-white bg-orange-500 hover:bg-orange-600 transition-all duration-300 transform hover:scale-105 overflow-hidden"
                >
                    Ir para a Loja <i class="bi bi-box-arrow-up-right text-xl ml-2"></i>
                </a>

                {{-- Regras --}}
                @if($cupom['regras'])
                <div class="mt-6 text-left">
                    <h4 class="font-bold text-gray-700">Regras de Uso:</h4>
                    <p class="mt-2 text-sm text-gray-600 prose-sm">{!! nl2br(e($cupom['regras'])) !!}</p>
                </div>
                @endif

                {{-- Botão de Fechar --}}
                <button @click="modalOpen = false" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600">
                    <i class="bi bi-x-lg text-2xl"></i>
                </button>
            </div>
        </div>
    </template>
</div>

