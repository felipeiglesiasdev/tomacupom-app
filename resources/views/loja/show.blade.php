@extends('layouts.app')


@section('content')

    <div class="flex flex-col">
        {{-- Div com margem negativa para sobrepor ao header principal --}}
        <div class="-mt-28">
            {{-- Componente do Cabeçalho da Loja --}}
            <x-loja.header :loja="$loja" />
        </div>

        {{-- Container Principal com as duas colunas --}}
        <div class="container mx-auto px-4 mt-8 md:mt-12">
            <div class="flex flex-col lg:flex-row gap-8">
                
                {{-- Coluna Principal (70%) --}}
                <div class="w-full lg:w-[70%]">
                    {{-- Componente das Abas, recebendo os dados do controller --}}
                    <x-loja.tabs :cupons="$cupons" :ofertas="$ofertas" />
                </div>

                {{-- Sidebar (30%) --}}
                <aside class="w-full lg:w-[30%]">
                    <div class="bg-gray-100 p-8 rounded-2xl min-h-[400px]">
                        <h3 class="text-xl font-bold text-[#171717]">Sidebar</h3>
                        <p class="text-gray-600 mt-2">Aqui entrarão outros componentes, como "Mais lojas", etc.</p>
                    </div>
                </aside>

            </div>
        </div>
    </div>

@endsection

