@props([
    'logoTopo' => 'https://cdn.tomacupom.com.br/images/logo-toma-cupom-fundo-preto.webp', 
    'logoScroll' => 'https://cdn.tomacupom.com.br/images/logo-toma-cupom-fundo-branco.webp', 
    'tema' => 'dark' 
])
<header class="fixed top-0 left-0 right-0 z-50 p-4 transition-all duration-300" x-data="{ scrolled: false }" @scroll.window="scrolled = (window.scrollY > 50)" itemscope itemtype="https://schema.org/WPHeader">
    <div class="container mx-auto max-w-7xl">
        <div class="rounded-2xl transition-all duration-500 ease-in-out border px-6 py-3" :class="{'bg-white/95 backdrop-blur-lg shadow-lg border-gray-200/80': scrolled, 'bg-transparent shadow-none border-transparent': !scrolled }">
            <div class="flex items-center justify-between gap-4 lg:gap-8">
                <a href="{{ route('home') }}" class="group flex items-center flex-shrink-0" title="Página Inicial - Toma Cupom">
                    <img x-show="!scrolled" src="{{ $logoTopo }}" alt="Logo Toma Cupom" class="h-10 w-auto transition-transform duration-300 group-hover:scale-95" itemprop="logo" fetchpriority="high">
                    <img x-show="scrolled" x-cloak src="{{ $logoScroll }}" alt="Logo Toma Cupom" class="h-10 w-auto transition-transform duration-300 group-hover:scale-95" itemprop="logo" loading="lazy">
                </a>
                <div class="flex-1 flex justify-center w-full max-w-xl" itemscope itemtype="https://schema.org/WebSite" x-data="liveSearchComponent()" @click.away="showDropdown = false">
                    <meta itemprop="url" content="{{ url('/') }}"/>
                    <form itemprop="potentialAction" itemscope itemtype="https://schema.org/SearchAction" @submit.prevent class="relative w-full group">
                        <input itemprop="query-input" type="search" placeholder="Busque a sua loja favorita..." 
                               x-model="query"
                               @input.debounce.300ms="fetchResults"
                               @focus="if(query.length >= 2) showDropdown = true"
                               autocomplete="off"
                               class="w-full pl-12 pr-6 py-3.5 text-sm rounded-full outline-none transition-all duration-300 relative z-10 [&::-webkit-search-cancel-button]:appearance-none [&::-webkit-search-cancel-button]:w-4 [&::-webkit-search-cancel-button]:h-4 [&::-webkit-search-cancel-button]:bg-no-repeat [&::-webkit-search-cancel-button]:bg-center [&::-webkit-search-cancel-button]:cursor-pointer [&::-webkit-search-cancel-button]:bg-[url('data:image/svg+xml;utf8,<svg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%2024%2024%22%20fill=%22%23fe4b09%22><path%20d=%22M19%206.41L17.59%205%2012%2010.59%206.41%205%205%206.41%2010.59%2012%205%2017.59%206.41%2019%2012%2013.41%2017.59%2019%2019%2017.59%2013.41%2012z%22/></svg>')]"
                               :class="scrolled 
                                    ? 'bg-gray-100 text-gray-700 placeholder-gray-400 border border-[#fe4b09] focus:bg-white focus:border-orange-300 focus:ring-4 focus:ring-orange-100 focus:shadow-sm' 
                                    : '{{ $tema === 'dark' ? 'bg-white/10 text-white placeholder-white/70 border border-white/20 focus:bg-white/20 focus:border-white/40 focus:ring-4 focus:ring-white/10' : 'bg-black/5 text-gray-800 placeholder-gray-500 border border-black/10 focus:bg-black/10 focus:border-black/20 focus:ring-4 focus:ring-black/5' }} backdrop-blur-md'">
                        <div class="absolute left-4 top-1/2 -translate-y-1/2 transition-transform duration-300 group-focus-within:scale-110 group-focus-within:rotate-3 z-10">
                            <i class="bi bi-search text-lg transition-colors duration-300" 
                               :class="scrolled ? 'text-gray-400 group-focus-within:text-[#fe4b09]' : '{{ $tema === 'dark' ? 'text-white/70 group-focus-within:text-white' : 'text-gray-500 group-focus-within:text-gray-800' }}'"></i>
                        </div>
                        <div x-show="showDropdown" x-transition x-cloak class="absolute top-[110%] left-0 right-0 bg-[#222222] rounded-2xl shadow-xl border border-[#333333] overflow-hidden z-50">
                            <div x-show="loading" class="p-5 text-center text-gray-400 text-sm flex items-center justify-center gap-2">
                                <i class="bi bi-arrow-repeat animate-spin text-[#fe4b09] text-lg"></i> Buscando lojas...
                            </div>
                            <template x-if="!loading && results.length > 0">
                                <ul class="max-h-[60vh] overflow-y-auto py-2 m-0 list-none px-0">
                                    <template x-for="loja in results" :key="loja.slug">
                                        <li>
                                            <a :href="'/cupons/' + loja.slug" class="flex items-center gap-4 px-5 py-3 hover:bg-[#333333] transition-colors border-b border-[#333333] last:border-0 no-underline">
                                                <!-- Container sem fundo branco e padding, ajustado para fundo escuro -->
                                                <div class="w-12 h-12 flex-shrink-0 rounded-lg flex items-center justify-center overflow-hidden shadow-sm">
                                                    <img :src="loja.logo_image_link || 'https://via.placeholder.com/80?text=Logo'" :alt="loja.nome" class="max-w-full max-h-full object-contain rounded-md drop-shadow-sm">
                                                </div>
                                                <div>
                                                    <span class="block font-bold text-gray-100 text-sm" x-text="loja.nome"></span>
                                                    <span class="block text-xs text-[#fe4b09] font-medium mt-0.5">Ver cupons e ofertas &rarr;</span>
                                                </div>
                                            </a>
                                        </li>
                                    </template>
                                </ul>
                            </template>
                            <template x-if="!loading && query.length >= 2 && results.length === 0">
                                <div class="p-6 text-center text-gray-400 text-sm">
                                    <i class="bi bi-emoji-frown text-2xl text-[#333333] block mb-2"></i>
                                    Nenhuma loja encontrada para "<span x-text="query" class="font-bold text-gray-100"></span>".
                                </div>
                            </template>
                        </div>
                    </form>
                </div>
                <nav 
                    class="flex items-center justify-end space-x-5 lg:space-x-8 font-bold text-xs lg:text-sm tracking-widest flex-shrink-0 transition-colors duration-300 uppercase"
                    :class="scrolled ? 'text-gray-700' : '{{ $tema === 'dark' ? 'text-white' : 'text-gray-800' }}'"
                    itemscope itemtype="https://schema.org/SiteNavigationElement"
                >
                    <a href="{{ route('home') }}" class="inline-block transition-all duration-300 hover:-translate-y-1 hover:text-[#fe4b09]" itemprop="url" title="Ir para a página inicial"><span itemprop="name">Início</span></a>
                    <a href="#" class="inline-block transition-all duration-300 hover:-translate-y-1 hover:text-[#fe4b09]" itemprop="url" title="Ver todos os cupons"><span itemprop="name">Cupons</span></a>
                    <a href="{{ route('categorias') }}" class="inline-block transition-all duration-300 hover:-translate-y-1 hover:text-[#fe4b09]" itemprop="url" title="Navegar por categorias"><span itemprop="name">Categorias</span></a>
                    <a href="{{ route('lojas') }}" class="inline-block transition-all duration-300 hover:-translate-y-1 hover:text-[#fe4b09]" itemprop="url" title="Ver todas as lojas parceiras"><span itemprop="name">Lojas</span></a>
                </nav>
            </div>
        </div>
    </div>
</header>
<script>function liveSearchComponent(){return{query:'',results:[],loading:!1,showDropdown:!1,fetchResults(){if(this.query.trim().length<2)return this.results=[],void(this.showDropdown=!1);this.loading=!0,this.showDropdown=!0,fetch(`{{ url('/busca') }}?q=${encodeURIComponent(this.query)}`,{headers:{'X-Requested-With':'XMLHttpRequest',Accept:'application/json'}}).then(e=>e.json()).then(e=>{this.results=e,this.loading=!1}).catch(e=>{this.loading=!1})}}}</script>