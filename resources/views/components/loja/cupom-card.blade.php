@props(['cupom'])

{{-- 
    Encapsulamos o estado no Card. 
    O Modal é injetado aqui e "teleportado" para o final do body.
--}}
<div x-data="{ showModal: false, copiado: false }">

    <!-- ========================================== -->
    <!-- VISUAL DO CARD NA LISTAGEM                 -->
    <!-- ========================================== -->
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-5 md:p-6 flex flex-col md:flex-row gap-5 md:gap-8 items-center hover:shadow-lg hover:border-orange-200 transition-all duration-300 group relative overflow-hidden">
        
        <!-- Detalhe lateral laranja -->
        <div class="absolute left-0 top-0 bottom-0 w-1.5 bg-[#fe4b09] transform -translate-x-full group-hover:translate-x-0 transition-transform duration-300 rounded-l-2xl"></div>

        <!-- 1. Informações do Cupom (Título e Descrição) -->
        <div class="flex-1 w-full text-center md:text-left">
            <div class="flex flex-col md:flex-row md:items-center gap-2 mb-2">
                <!-- Ícone pequeno e discreto -->
                <i class="bi bi-ticket-perforated text-[#fe4b09] text-lg hidden md:block"></i>
                
                <h3 class="text-lg md:text-xl font-bold text-[#222222] leading-tight group-hover:text-[#fe4b09] transition-colors duration-300">
                    <span class="md:hidden"><i class="bi bi-ticket-perforated text-[#fe4b09] mr-1"></i></span>
                    {{ $cupom->titulo ?? 'Título do Cupom' }}
                </h3>
            </div>
            
            <p class="text-gray-500 text-sm m-0 line-clamp-2 leading-relaxed">
                {{ $cupom->descricao ?? 'Clique no botão para revelar o código de desconto e economizar.' }}
            </p>
        </div>

        <!-- 2. Botão Abrir Modal -->
        <div class="w-full md:w-56 shrink-0 flex flex-col items-center justify-center mt-3 md:mt-0">
            <button @click="showModal = true" class="relative w-full h-12 rounded-xl overflow-hidden group/btn font-bold transition-all duration-300 shadow-sm border border-[#fe4b09]">
                <!-- Código escondido -->
                <div class="absolute inset-0 bg-orange-50 flex items-center justify-center text-[#fe4b09] font-mono tracking-widest text-lg border border-dashed border-[#fe4b09]/40 rounded-xl">
                    ******
                </div>
                <!-- Layer de convite -->
                <div class="absolute inset-0 bg-[#fe4b09] text-white flex items-center justify-center transition-transform duration-300 group-hover/btn:-translate-y-full">
                    Pegar Cupom
                </div>
            </button>
            <span class="text-[10px] text-gray-400 mt-3 uppercase tracking-wider flex items-center gap-1">
                <i class="bi bi-unlock text-gray-300"></i> Revelar código
            </span>
        </div>
    </div>

    <!-- Chamada do Componente Modal separado -->
    <x-loja.cupom-modal :cupom="$cupom" />

</div>