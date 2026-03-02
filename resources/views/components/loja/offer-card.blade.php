{{--
    Componente para exibir um card individual de oferta.
    Recebe os dados da oferta como um array.
--}}
@props(['oferta'])

<div class="bg-white p-6 rounded-2xl border border-gray-200 shadow-sm hover:shadow-lg hover:border-orange-200 transition-all duration-300">
    <div class="flex flex-col md:flex-row md:items-center gap-6">
        {{-- Imagem da Oferta --}}
        <div class="flex-shrink-0">
            <img src="{{ $oferta['imagem'] }}" alt="Imagem da oferta: {{ $oferta['titulo'] }}" class="w-24 h-24 object-contain rounded-lg bg-gray-100 p-1">
        </div>

        {{-- Informações da Oferta --}}
        <div class="flex-1">
            <h3 class="font-bold text-lg text-[#171717]">{{ $oferta['titulo'] }}</h3>
            <p class="text-gray-600 mt-1 text-sm">{{ $oferta['descricao'] }}</p>

            <p class="text-sm text-gray-500 mt-4">Expira em: {{ $oferta['data_expiracao'] }}</p>
        </div>

        {{-- Botão de Ação --}}
        <div class="flex-shrink-0">
             <a href="{{ $oferta['link_oferta'] }}" 
               rel="nofollow noopener noreferrer" 
               target="_blank"
               class="shine-effect group relative w-full md:w-auto flex items-center justify-center px-6 py-3 border border-transparent text-base font-bold rounded-full text-yellow-800 bg-yellow-100 hover:bg-yellow-200 transition-all duration-300 transform hover:scale-105 overflow-hidden"
            >
                PEGAR OFERTA
                <i class="bi bi-box-arrow-up-right text-lg ml-2"></i>
            </a>
        </div>
    </div>
</div>
