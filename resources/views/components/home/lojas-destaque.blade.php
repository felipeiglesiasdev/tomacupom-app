<section class="py-16 md:py-24 px-4 md:px-24 bg-gray-50">
    <div class="max-w-7xl mx-auto">
        <div class="flex flex-col md:flex-row items-center justify-between mb-12 gap-6">
            <div class="text-center md:text-left">
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-3">Lojas em <span class="text-[#fe4b09]">Destaque</span></h2>
                <p class="text-lg text-gray-500">As marcas favoritas da nossa comunidade com os maiores descontos hoje.</p>
            </div>
            <a href="{{ route('lojas') }}" class="group hidden md:flex items-center gap-2 bg-white px-6 py-3 rounded-full shadow-sm hover:shadow-md border border-gray-200 text-gray-700 font-bold hover:text-[#fe4b09] hover:border-[#fe4b09] transition-all duration-300">
                Ver todas as lojas
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 group-hover:translate-x-1 transition-transform">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </a>
        </div>
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4 md:gap-6">
            @php
                $lojasDestaque = [
                    ['nome' => 'Amazon', 'slug' => 'amazon'],
                    ['nome' => 'Acer', 'slug' => 'acer'],
                    ['nome' => 'Dafiti', 'slug' => 'dafiti'],
                    ['nome' => 'Magalu', 'slug' => 'magalu'],
                    ['nome' => 'AliExpress', 'slug' => 'aliexpress'],
                    ['nome' => 'Centauro', 'slug' => 'centauro'],
                    ['nome' => 'Shein', 'slug' => 'shein'],
                    ['nome' => 'Casas Bahia', 'slug' => 'casas-bahia'],
                    ['nome' => 'iPlace!', 'slug' => 'iplace'],
                    ['nome' => 'Camicado', 'slug' => 'camicado'],
                ];
            @endphp
            @foreach($lojasDestaque as $loja)
                <a href="{{ url('/cupons/' . $loja['slug']) }}" class="group bg-white rounded-2xl p-6 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-300 border border-gray-100 flex flex-col items-center justify-center relative overflow-hidden">
                                        <div class="absolute inset-0 bg-gradient-to-tr from-orange-50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                        <div class="relative w-24 h-24 md:w-28 md:h-28 mb-4 flex items-center justify-center bg-white p-2 group-hover:scale-110 transition-transform duration-500">
                        <img 
                            src="https://cdn.tomacupom.com.br/lojas/{{ $loja['slug'] }}.webp" 
                            alt="Cupons de desconto {{ $loja['nome'] }}" 
                            width="200" 
                            height="200"
                            loading="lazy"
                            class="rounded-xl"
                        >
                    </div>
                                        <span class="relative z-10 font-extrabold text-gray-800 text-base md:text-lg text-center truncate w-full group-hover:text-[#fe4b09] transition-colors duration-300">
                        {{ $loja['nome'] }}
                    </span>
                    <span class="relative z-10 mt-2 text-[11px] md:text-xs font-bold text-gray-400 uppercase tracking-wider flex items-center gap-1 group-hover:text-[#fe4b09] transition-colors duration-300">
                        Ver Cupons
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-3 h-3 md:w-4 md:h-4">
                            <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </a>
            @endforeach
        </div>
        <div class="mt-10 text-center md:hidden">
            <a href="{{ route('lojas') }}" class="inline-flex items-center justify-center gap-2 bg-white border-2 border-gray-200 text-gray-700 font-bold py-3.5 px-8 rounded-full hover:border-[#fe4b09] hover:text-[#fe4b09] hover:bg-orange-50 shadow-sm transition-all duration-300 w-full sm:w-auto">
                Ver todas as lojas
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                </svg>
            </a>
        </div>
    </div>
</section>