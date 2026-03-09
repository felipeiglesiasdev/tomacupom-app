@props(['cupom'])

{{-- 
    Encapsulamos o estado no Card. 
    O Modal é injetado aqui e "teleportado" para o final do body via Alpine.js.
--}}
<div x-data="{ showModal: false, copiado: false }">

    <!-- ========================================== -->
    <!-- VISUAL DO CARD NA LISTAGEM                 -->
    <!-- ========================================== -->
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 border-l-4 border-l-[#fe4b09] p-5 md:p-6 flex flex-col md:flex-row gap-5 md:gap-8 items-center transition-all duration-300 group relative overflow-hidden hover:shadow-lg hover:border-orange-100">
        
        <!-- 1. Informações do Cupom -->
        <div class="flex-1 w-full text-center md:text-left">
            <h3 class="text-lg md:text-xl font-bold text-[#222222] mb-2 leading-tight group-hover:text-[#fe4b09] transition-colors duration-300">
                {{ $cupom->titulo ?? 'Título do Cupom Indisponível' }}
            </h3>
            <p class="text-gray-500 text-sm mb-4 line-clamp-2 leading-relaxed">
                {{ $cupom->descricao ?? 'Descrição detalhada das regras deste cupom para aproveitar o desconto na loja oficial.' }}
            </p>
            
            <div class="flex items-center justify-center md:justify-start gap-4 text-xs font-medium">
                <!-- Validade -->
                <div class="flex items-center gap-1.5 {{ $cupom->data_expiracao && \Carbon\Carbon::parse($cupom->data_expiracao)->isPast() ? 'text-red-500' : 'text-gray-400' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.19-.982c.375.072.735.18 1.074.321l-.279.96zM12.73 3.32a7 7 0 0 0-.742-.564l.523-.852c.306.188.592.403.857.642l-.638.774zM15.07 7.5a7 7 0 0 0-.07-.54l.993-.11a8 8 0 0 1 .11.65h-1.033zm-.45 2.004c.06-.327.096-.662.107-1.004h1.034c-.013.454-.063.9-.15 1.327l-.991-.323zm-1.3 2.73a7.003 7.003 0 0 0 .564-.742l.852.523c-.239.39-.506.756-.8 1.09l-.716-.87zm-2.316 1.83a7.003 7.003 0 0 0 .742-.564l.716.87a8 8 0 0 1-1.09.8l-.368-.906zm-2.504.45c.342-.011.677-.047 1.004-.107l.11.993c-.427.087-.873.137-1.327.15l.213-1.036zm-2.004-.45c.327.06.662.096 1.004.107l-.11.993a8 8 0 0 1-1.327-.15l.433-1.03zm-2.73-1.3a7.003 7.003 0 0 0 .742.564l-.523.852a8.004 8.004 0 0 1-1.09-.8l.871-.616zm-1.83-2.316a7.003 7.003 0 0 0 .564-.742l-.87.716a8.004 8.004 0 0 1-.8-1.09l.906-.368zM1 7.5c0 .185.008.368.022.548L.025 8.137A8.001 8.001 0 0 1 0 7.5h1zm.45-2.004A7.003 7.003 0 0 0 1.107 8l-1.033-.107c.087-.427.137-.873.15-1.327l1.036.213zm1.3-2.73c-.188.306-.403.592-.642.857l-.774-.638c.279-.239.545-.506.786-.8l.63.581zM3.32 1.27a7.003 7.003 0 0 0-.742.564l-.616-.871c.39-.306.756-.506 1.09-.8l.368.906zm1.83-1.3c.342.011.677.047 1.004.107l-.11.993c-.427-.087-.873-.137-1.327-.15l.213-1.036zM7.5 0c.185 0 .368.008.548.022l-.115.998A7.001 7.001 0 0 0 7.5 1V0z"/>
                        <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
                    </svg>
                    @if(isset($cupom->data_expiracao))
                        Válido até {{ \Carbon\Carbon::parse($cupom->data_expiracao)->format('d/m/Y') }}
                    @else
                        Tempo indeterminado
                    @endif
                </div>
                
                <!-- Selo de Verificado -->
                <div class="flex items-center gap-1.5 text-green-700 font-bold">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99 1.679 2.196 3.714 3.195 4.394 3.49a.5.5 0 0 0 .4 0c.68-.295 2.715-1.294 4.394-3.49 1.678-2.195 2.461-5.513 2.465-9.99a1.54 1.54 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm2.146 5.146a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647z"/>
                    </svg>
                    Verificado
                </div>
            </div>
        </div>

        <!-- 2. Botão de Pegar Cupom -->
        <div class="w-full md:w-60 shrink-0 flex flex-col items-center justify-center mt-2 md:mt-0">
            
            <!-- Botão Branco com Borda Laranja e Texto Escuro (Aciona o Modal) -->
            <button 
                @click="showModal = true"
                class="relative w-full h-12 rounded-xl overflow-hidden group/btn font-bold transition-all duration-300 shadow-sm border-1 border-[#fe4b09] bg-white text-[#222222] hover:bg-orange-50 active:scale-95"
            >
                <!-- Fundo base com código escondido -->
                <div class="absolute inset-0 flex items-center justify-center text-[#fe4b09] font-mono tracking-widest text-lg border-dashed border-[#fe4b09]/20">
                    ******
                </div>

                <!-- Camada superior (Hover / Convite) -->
                <div class="absolute inset-0 bg-white text-[#222222] flex items-center justify-center gap-2 transition-transform duration-300 group-hover/btn:-translate-y-full">
                    <span>PEGAR CUPOM</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M4 4.85v.9h1v-.9zm7 0v.9h1v-.9zm-7 1.8v.9h1v-.9zm7 0v.9h1v-.9zm-7 1.8v.9h1v-.9zm7 0v.9h1v-.9zm-7 1.8v.9h1v-.9zm7 0v.9h1v-.9z"/>
                        <path d="M1.5 3A1.5 1.5 0 0 0 0 4.5V6a.5.5 0 0 0 .5.5 1.5 1.5 0 1 1 0 3 .5.5 0 0 0-.5.5v1.5A1.5 1.5 0 0 0 1.5 13h13a1.5 1.5 0 0 0 1.5-1.5V10a.5.5 0 0 0-.5-.5 1.5 1.5 0 0 1 0-3A.5.5 0 0 0 16 6V4.5A1.5 1.5 0 0 0 14.5 3zM1 4.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v1.05a2.5 2.5 0 0 0 0 4.9v1.05a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-1.05a2.5 2.5 0 0 0 0-4.9z"/>
                    </svg>
                </div>
            </button>
            
            <!-- Etiqueta Revelar Código (Badge Style) -->
            <div class="mt-3">
                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-orange-50 border border-[#fe4b09]/20 text-[#fe4b09] text-[10px] font-black uppercase tracking-widest shadow-sm group-hover:border-[#fe4b09]/50 transition-all duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M11 1a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h5V3a3 3 0 0 1 6 0v4a.5.5 0 0 1-1 0V3a2 2 0 0 0-2-2zM3 8a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1z"/>
                    </svg>
                    Revelar código
                </span>
            </div>
        </div>

    </div>

    <!-- Injeção do Componente Modal (Depende do showModal controlado acima) -->
    <x-loja.cupom-modal :cupom="$cupom" />

</div>