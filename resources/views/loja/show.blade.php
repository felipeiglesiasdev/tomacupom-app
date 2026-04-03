@extends('layouts.app')
@push('seo')
    @include('components.loja.tags', ['loja' => $loja])
@endpush
@section('content')
    <x-loja.header :loja="$loja" />
    <div class="w-full px-4 md:px-24">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row gap-8 mb-12">
            <div class="w-full md:w-[70%]">
                <x-loja.tabs :cupons="$loja->cupons" :ofertas="$loja->ofertas" :loja="$loja"/>
                @if($loja->seo)
                    <x-loja.seo-content :content="$loja->seo->text_content_seo" />
                @endif
            </div>
            <div class="w-full md:w-[30%]">
                <x-loja.sidebar.lojas-semelhantes :lojas="$lojasSemelhantes" />
            </div>
        </div>
    </div>
@endsection