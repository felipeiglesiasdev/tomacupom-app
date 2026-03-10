@props(['cupom'])
<div x-data="{ showModal: false, copiado: false }">
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 border-l-4 border-l-[#fe4b09] p-5 md:p-6 flex flex-col md:flex-row gap-5 md:gap-8 items-center transition-all duration-300 group relative overflow-hidden hover:shadow-lg">
        <div class="flex-1 w-full text-center md:text-left">
            <h3 class="text-lg md:text-xl font-bold text-[#222222] mb-2 leading-tight group-hover:text-[#fe4b09] transition-colors duration-300">
                {{ $cupom->titulo ?? 'Título do Cupom Indisponível' }}
            </h3>
            <p class="text-gray-500 text-sm mb-4 line-clamp-2 leading-relaxed">
                {{ $cupom->descricao ?? 'Descrição detalhada das regras deste cupom para aproveitar o desconto na loja oficial.' }}
            </p>
            <div class="flex items-center justify-center md:justify-start gap-4 text-xs font-medium">
                <div class="flex items-center gap-1.5 {{ $cupom->data_expiracao && \Carbon\Carbon::parse($cupom->data_expiracao)->isPast() ? 'text-red-500' : 'text-[#595959]' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
                        <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022zm2.004.45a7 7 0 0 0-.985-.299l.219-.976q.576.129 1.126.342zm1.37.71a7 7 0 0 0-.439-.27l.493-.87a8 8 0 0 1 .979.654l-.615.789a7 7 0 0 0-.418-.302zm1.834 1.79a7 7 0 0 0-.653-.796l.724-.69q.406.429.747.91zm.744 1.352a7 7 0 0 0-.214-.468l.893-.45a8 8 0 0 1 .45 1.088l-.95.313a7 7 0 0 0-.179-.483m.53 2.507a7 7 0 0 0-.1-1.025l.985-.17q.1.58.116 1.17zm-.131 1.538q.05-.254.081-.51l.993.123a8 8 0 0 1-.23 1.155l-.964-.267q.069-.247.12-.501m-.952 2.379q.276-.436.486-.908l.914.405q-.24.54-.555 1.038zm-.964 1.205q.183-.183.35-.378l.758.653a8 8 0 0 1-.401.432z"/>
                        <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0z"/>
                        <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5"/>
                    </svg>
                    @if(isset($cupom->data_expiracao))
                        Válido até {{ \Carbon\Carbon::parse($cupom->data_expiracao)->format('d/m/Y') }}
                    @else
                        Tempo indeterminado
                    @endif
                </div>
            <div class="flex items-center gap-1.5 text-green-700 font-bold">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99 1.679 2.196 3.714 3.195 4.394 3.49a.5.5 0 0 0 .4 0c.68-.295 2.715-1.294 4.394-3.49 1.678-2.195 2.461-5.513 2.465-9.99a1.54 1.54 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm2.146 5.146a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647z"/>
                    </svg>
                    Verificado
                </div>
            </div>
        </div>
        <div class="w-full md:w-60 shrink-0 flex flex-col items-center justify-center mt-2 md:mt-0">
            <button 
                @click="showModal = true"
                class="w-full h-12 rounded-xl font-bold border-2 border-[#fe4b09] bg-white text-[#222222] hover:bg-[#fe4b09] hover:text-white hover:-translate-y-1 hover:shadow-md transition-all duration-300 cursor-pointer flex items-center justify-center gap-2 focus:outline-none active:scale-95"
            >
                <span>PEGAR CUPOM</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M4 4.85v.9h1v-.9zm7 0v.9h1v-.9zm-7 1.8v.9h1v-.9zm7 0v.9h1v-.9zm-7 1.8v.9h1v-.9zm7 0v.9h1v-.9zm-7 1.8v.9h1v-.9zm7 0v.9h1v-.9z"/>
                    <path d="M1.5 3A1.5 1.5 0 0 0 0 4.5V6a.5.5 0 0 0 .5.5 1.5 1.5 0 1 1 0 3 .5.5 0 0 0-.5.5v1.5A1.5 1.5 0 0 0 1.5 13h13a1.5 1.5 0 0 0 1.5-1.5V10a.5.5 0 0 0-.5-.5 1.5 1.5 0 0 1 0-3A.5.5 0 0 0 16 6V4.5A1.5 1.5 0 0 0 14.5 3zM1 4.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v1.05a2.5 2.5 0 0 0 0 4.9v1.05a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-1.05a2.5 2.5 0 0 0 0-4.9z"/>
                </svg>
            </button>
        <div class="mt-3">
                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-[#D13800] text-white text-[10px] font-black uppercase tracking-widest shadow-sm transition-all duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M11 1a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h5V3a3 3 0 0 1 6 0v4a.5.5 0 0 1-1 0V3a2 2 0 0 0-2-2zM3 8a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1z"/>
                    </svg>
                    Revelar código
                </span>
            </div>
        </div>
    </div>
    <x-loja.cupom-modal :cupom="$cupom" />
</div>