@props(['loja'])
<div class="bg-[#222222] w-full px-4 md:px-24 rounded-b-lg mb-8 shadow-lg pt-22">
    <div class="max-w-7xl mx-auto py-8 md:py-16 grid grid-cols-[110px_1fr] md:grid-cols-[200px_1fr] gap-x-5 gap-y-4 md:gap-x-12 items-center">
        <div class="col-start-1 col-end-2 row-start-1 flex justify-center self-start md:self-center mt-1 md:mt-0">
            <img src="{{ $loja->logo_image_link }}" alt="{{ $loja->alt_text_logo }}" class="w-full h-auto max-w-[200px] block rounded-lg">
        </div>
        <div class="col-start-2 col-end-3 row-start-1 flex flex-col justify-center">
            <h1 class="text-white mt-0 mb-2 md:mb-4 text-xl md:text-4xl font-bold leading-tight">
                {{ $loja->titulo_pagina }}
            </h1>
            <p class="hidden md:block text-gray-300 mb-6 text-base leading-relaxed md:pr-40">
                {{ $loja->descricao_pagina }}
            </p>
            <div class="flex flex-wrap mt-2 md:mt-0">
                <a href="{{ $loja->url_base_afiliado }}" target="_blank" rel="nofollow" 
                   class="group px-4 py-2.5 md:px-6 md:py-3 bg-[#fe4b09] text-white border border-[#fe4b09] hover:bg-white hover:text-[#fe4b09] hover:-translate-y-1 hover:shadow-lg no-underline rounded-md text-xs md:text-sm font-bold transition-all duration-300 flex items-center gap-2">
                    <span>Visitar Site Oficial</span>
                    <i class="bi bi-box-arrow-up-right"></i>
                </a>
            </div>
        </div>
        <div class="col-span-2 md:hidden mt-2 border-t border-[#333333] pt-4">
            <p class="text-gray-300 text-sm leading-relaxed m-0 text-left">
                {{ $loja->descricao_pagina }}
            </p>
        </div>
    </div>
</div>