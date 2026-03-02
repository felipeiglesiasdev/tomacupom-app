@extends('layouts.app')

{{-- Define o título e a descrição da página para SEO --}}
@section('title', 'Todas as Lojas - Encontre Cupons de Desconto')
@section('description', 'Navegue por todas as nossas lojas parceiras. Encontre cupons de desconto para suas marcas favoritas e comece a economizar agora mesmo com o Toma Cupom.')

@section('content')
<div class="bg-white" x-data="{ searchTerm: '', filterLetter: 'all' }">
    <div class="container mx-auto px-4 py-12">

        {{-- Cabeçalho da Página --}}
        <div class="text-center mb-12" data-fade-in>
            <h1 class="text-4xl md:text-5xl font-black text-[#171717]">
                Nossas <span class="text-[#fe9b0d]">Lojas Parceiras</span>
            </h1>
            <p class="mt-4 max-w-2xl mx-auto text-lg text-gray-600">
                Temos parceria com as melhores lojas para trazer a você descontos exclusivos.
            </p>
        </div>

        {{-- Filtro Alfabético e Busca --}}
        <div class="mb-12" data-fade-in>
            {{-- Dicionário A-Z --}}
            <div class="flex flex-wrap justify-center items-center gap-2 mb-6">
                <button @click="filterLetter = 'all'" :class="{ 'bg-orange-500 text-white': filterLetter === 'all', 'bg-gray-100 text-gray-700': filterLetter !== 'all' }" class="px-3 py-1 rounded-md font-semibold text-sm transition-colors">
                    Todas
                </button>
                @foreach (range('A', 'Z') as $letra)
                <button @click="filterLetter = '{{ $letra }}'" :class="{ 'bg-orange-500 text-white': filterLetter === '{{ $letra }}', 'bg-gray-100 text-gray-700': filterLetter !== '{{ $letra }}' }" class="px-3 py-1 rounded-md font-semibold text-sm transition-colors">
                    {{ $letra }}
                </button>
                @endforeach
            </div>
            
            {{-- Barra de Busca de Lojas --}}
            <div class="max-w-xl mx-auto">
                <div class="relative group">
                    <div class="absolute left-4 top-1/2 -translate-y-1/2 pointer-events-none transition-transform duration-300">
                        <i class="bi bi-search text-xl text-gray-400"></i>
                    </div>
                    <input 
                        type="search" 
                        x-model="searchTerm"
                        @input="filterLetter = 'all'"
                        placeholder="Buscar por uma loja específica..." 
                        class="w-full pl-12 pr-4 py-3 text-base bg-gray-50 border border-gray-200 rounded-full focus:outline-none focus:ring-2 focus:ring-orange-400 focus:bg-white transition-all">
                </div>
            </div>
        </div>

        {{-- Grade de Lojas --}}
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6" data-fade-in>
            @forelse ($lojas as $loja)
                <template x-if="(filterLetter === 'all' || '{{ strtoupper(substr($loja->nome, 0, 1)) }}' === filterLetter) && ('{{ strtolower($loja->nome) }}'.includes(searchTerm.toLowerCase()))">
                    <a  
                        href="{{ route('loja.show', $loja->slug) }}"
                        class="group relative block p-6 bg-gray-50 border border-gray-200/80 rounded-2xl text-center shadow-sm hover:shadow-xl hover:border-orange-300 transition-all duration-300 transform hover:-translate-y-1"
                        title="Ver cupons da loja {{ $loja->nome }}"
                    >
                        <div class="flex items-center justify-center h-20">
                            <img src="https://placehold.co/150x96/f9f9f9/cccccc?text={{ urlencode($loja->nome) }}" 
                                 alt="Logo da loja {{ $loja->nome }}" 
                                 class="max-h-16 w-auto object-contain transition-transform duration-300 group-hover:scale-110">
                        </div>
                        <span class="block mt-4 text-sm font-semibold text-gray-700 group-hover:text-orange-500 transition-colors">
                            {{ $loja->nome }}
                        </span>
                    </a>
                </template>
            @empty
                {{-- Mensagem exibida se nenhuma loja for encontrada no banco de dados --}}
                <div class="col-span-full text-center py-12">
                    <p class="text-gray-500 text-lg">Nenhuma loja encontrada no momento.</p>
                </div>
            @endforelse
        </div>
    </div>
</div>
@endsection

