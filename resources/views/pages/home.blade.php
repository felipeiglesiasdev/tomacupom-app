@extends('layouts.app')

@section('content')
    {{-- Seção de Chamada para Lojas --}}
    <div class="bg-[#fe9b0d] pt-32 pb-16 -mt-28">
        {{-- Seção de Chamada para Lojas --}}
        <x-home.stores-cta />
    </div>

    {{-- Seção com a Grade de Lojas --}}
    <x-home.stores-grid />
<x-home.community-cta />
<x-home.faq />

@endsection


@push('scripts')
<script>
    // Função para rolagem suave ao clicar no botão
    function smoothScroll(event) {
        event.preventDefault();
        const targetId = event.currentTarget.getAttribute('href').substring(1);
        const targetElement = document.getElementById(targetId);
        if (targetElement) {
            targetElement.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    }
</script>
@endpush


