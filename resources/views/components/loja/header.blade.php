{{--
    Componente para exibir o cabeçalho de destaque da página da loja,
    com logo, nome e link para o site oficial.
--}}
<div class="bg-[#171717] text-white pt-36 md:pt-52 pb-20 md:pb-20 rounded-bl-3xl rounded-br-3xl" data-fade-in>
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row items-center text-center md:text-left">
            
            {{-- Container da Logo (Desktop e Mobile) --}}
            <div class="flex-shrink-0 mb-6 md:mb-0 md:mr-8">
                {{-- Logo visível apenas em telas grandes (Desktop) --}}
                <div class="hidden md:flex w-36 h-36 items-center justify-center bg-white rounded-2xl shadow-md border border-gray-200">
                    <img src="https://placehold.co/150x96/ffffff/171717?text={{ urlencode($loja['nome']) }}" alt="Logo da loja {{ $loja['nome'] }}" class="max-h-24 w-auto object-contain">
                </div>
                {{-- Logo visível apenas em telas pequenas (Mobile) --}}
                <div class="md:hidden w-24 h-24 mx-auto flex items-center justify-center bg-white rounded-2xl shadow-md border border-gray-200">
                    <img src="https://placehold.co/150x96/ffffff/171717?text={{ urlencode($loja['nome']) }}" alt="Logo da loja {{ $loja['nome'] }}" class="max-h-16 w-auto object-contain">
                </div>
            </div>

            {{-- Container do Texto --}}
            <div>
                <h1 class="text-3xl md:text-5xl font-black text-white">Cupons de Desconto <span class="text-[#fe9b0d]">{{ $loja['nome'] }}</span></h1>
                <p class="mt-4 text-base md:text-lg text-gray-300">
                    {{-- Exibe a descrição do header se existir, senão, exibe um texto padrão --}}
                    {{ $loja['descricao_header'] ?? 'Aproveite as melhores ofertas e códigos promocionais para economizar em suas compras.' }}
                </p>
                <a href="{{ $loja['url_oficial'] }}" rel="nofollow noopener noreferrer" target="_blank" class="inline-block mt-4 text-sm text-orange-400 hover:underline">
                    Ir para o site oficial <i class="bi bi-box-arrow-up-right ml-1"></i>
                </a>
            </div>

        </div>
    </div>
</div>

