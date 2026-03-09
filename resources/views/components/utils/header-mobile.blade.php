@props([
    'logoTopo' => 'https://cdn.tomacupom.com.br/images/logo-toma-cupom-fundo-preto.webp', 
    'logoScroll' => 'https://cdn.tomacupom.com.br/images/logo-toma-cupom-fundo-branco.webp', 
    'tema' => 'dark' 
])

<!-- Alpine Data englobando todo o Header Mobile -->
<header 
    x-data="{ scrolled: false, menuOpen: false, searchOpen: false }" 
    @scroll.window="scrolled = (window.scrollY > 20)"
    class="fixed top-0 left-0 right-0 z-50 transition-all duration-300"
    :class="scrolled ? 'bg-white shadow-md' : '{{ $tema === 'dark' ? 'bg-[#222222]' : 'bg-transparent' }}'"
    itemscope itemtype="https://schema.org/WPHeader"
>
    <!-- BARRA PRINCIPAL MOBILE -->
    <div class="flex items-center justify-between px-4 py-3 h-16">
        
        <!-- Botão Hamburger (Menu Lateral) -->
        <button @click="menuOpen = true" class="p-2 -ml-2 text-gray-500 focus:outline-none" aria-label="Abrir menu">
            <i class="bi bi-list text-2xl" :class="scrolled ? 'text-gray-800' : '{{ $tema === 'dark' ? 'text-white' : 'text-gray-800' }}'"></i>
        </button>

        <!-- Logo Centralizada -->
        <a href="{{ route('home') }}" class="flex items-center justify-center flex-1" title="Página Inicial - Toma Cupom">
            <img x-show="!scrolled && '{{ $tema }}' === 'dark'" src="{{ $logoTopo }}" alt="Logo Toma Cupom" class="h-8 w-auto" itemprop="logo" fetchpriority="high">
            <img x-show="scrolled || '{{ $tema }}' === 'light'" x-cloak src="{{ $logoScroll }}" alt="Logo Toma Cupom" class="h-8 w-auto" itemprop="logo" loading="lazy">
        </a>

        <!-- Botão Lupa (Busca Overlay) -->
        <button @click="searchOpen = true; $nextTick(() => $refs.mobileSearchInput.focus())" class="p-2 -mr-2 text-gray-500 focus:outline-none" aria-label="Pesquisar">
            <i class="bi bi-search text-xl" :class="scrolled ? 'text-gray-800' : '{{ $tema === 'dark' ? 'text-white' : 'text-gray-800' }}'"></i>
        </button>
    </div>

    <!-- ========================================== -->
    <!-- MENU LATERAL (SLIDE OVER)                  -->
    <!-- ========================================== -->
    <div x-show="menuOpen" class="fixed inset-0 z-[60] flex" x-cloak>
        <!-- Fundo escuro transparente -->
        <div x-show="menuOpen" x-transition.opacity @click="menuOpen = false" class="fixed inset-0 bg-black bg-opacity-50 backdrop-blur-sm"></div>
        
        <!-- Painel do Menu -->
        <nav x-show="menuOpen" 
             x-transition:enter="transition ease-out duration-300 transform" 
             x-transition:enter-start="-translate-x-full" 
             x-transition:enter-end="translate-x-0" 
             x-transition:leave="transition ease-in duration-200 transform" 
             x-transition:leave-start="translate-x-0" 
             x-transition:leave-end="-translate-x-full" 
             class="relative w-4/5 max-w-sm h-full bg-white shadow-2xl flex flex-col"
             itemscope itemtype="https://schema.org/SiteNavigationElement">
            
            <div class="flex items-center justify-between p-5 border-b border-gray-100">
                <img src="{{ $logoScroll }}" alt="Toma Cupom" class="h-7 w-auto">
                <button @click="menuOpen = false" class="text-gray-400 hover:text-[#fe4b09]"><i class="bi bi-x-lg text-xl"></i></button>
            </div>
            
            <div class="flex flex-col py-4 overflow-y-auto">
                <a href="{{ route('home') }}" class="px-6 py-4 text-gray-800 font-bold border-b border-gray-50 hover:text-[#fe4b09] hover:bg-orange-50/50" itemprop="url"><i class="bi bi-house-door mr-3 text-gray-400"></i><span itemprop="name">Início</span></a>
                <a href="#" class="px-6 py-4 text-gray-800 font-bold border-b border-gray-50 hover:text-[#fe4b09] hover:bg-orange-50/50" itemprop="url"><i class="bi bi-ticket-perforated mr-3 text-gray-400"></i><span itemprop="name">Cupons</span></a>
                <a href="{{ route('categorias') }}" class="px-6 py-4 text-gray-800 font-bold border-b border-gray-50 hover:text-[#fe4b09] hover:bg-orange-50/50" itemprop="url"><i class="bi bi-grid mr-3 text-gray-400"></i><span itemprop="name">Categorias</span></a>
                <a href="{{ route('lojas') }}" class="px-6 py-4 text-gray-800 font-bold border-b border-gray-50 hover:text-[#fe4b09] hover:bg-orange-50/50" itemprop="url"><i class="bi bi-shop mr-3 text-gray-400"></i><span itemprop="name">Lojas</span></a>
            </div>
        </nav>
    </div>

    <!-- ========================================== -->
    <!-- OVERLAY DE BUSCA TELA CHEIA                -->
    <!-- ========================================== -->
    <div x-show="searchOpen" x-transition.opacity class="fixed inset-0 z-[70] bg-[#222222] flex flex-col" x-cloak x-data="liveSearchComponent()">
        
        <!-- Header da Busca -->
        <div class="flex items-center p-4 border-b border-[#333333]">
            <form @submit.prevent class="flex-1 relative mr-3">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i class="bi bi-search text-gray-400"></i>
                </div>
                <input x-ref="mobileSearchInput" type="search" x-model="query" @input.debounce.300ms="fetchResults" placeholder="Busque lojas..." 
                       class="w-full bg-[#333333] text-white rounded-full py-3 pl-10 pr-4 outline-none focus:ring-2 focus:ring-[#fe4b09] border-none text-sm [&::-webkit-search-cancel-button]:appearance-none">
                
                <!-- Botão de limpar (aparece se tiver texto) -->
                <button type="button" x-show="query.length > 0" @click="query = ''; results = []; $refs.mobileSearchInput.focus()" class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-white">
                    <i class="bi bi-x-circle-fill"></i>
                </button>
            </form>
            <button @click="searchOpen = false; query = ''; results = []" class="text-gray-300 font-semibold text-sm">Cancelar</button>
        </div>

        <!-- Resultados da Busca Mobile -->
        <div class="flex-1 overflow-y-auto bg-[#222222]">
            
            <!-- Estado: Carregando -->
            <div x-show="loading" class="p-8 text-center text-gray-400">
                <i class="bi bi-arrow-repeat animate-spin text-[#fe4b09] text-2xl"></i>
                <p class="text-sm mt-3">Buscando...</p>
            </div>

            <!-- Estado: Dica Inicial -->
            <div x-show="!loading && query.length < 2" class="p-8 text-center text-gray-500">
                <i class="bi bi-search text-3xl mb-3 block opacity-50"></i>
                <p class="text-sm">Digite pelo menos 2 letras para buscar uma loja.</p>
            </div>

            <!-- Estado: Com Resultados -->
            <template x-if="!loading && results.length > 0">
                <ul class="m-0 p-0 list-none">
                    <template x-for="loja in results" :key="loja.slug">
                        <li>
                            <a :href="'/cupons/' + loja.slug" class="flex items-center gap-4 px-5 py-4 hover:bg-[#333333] transition-colors border-b border-[#333333]">
                                <div class="w-12 h-12 flex-shrink-0 bg-white rounded-lg flex items-center justify-center p-1 overflow-hidden shadow-sm">
                                    <img :src="loja.logo_image_link || 'https://via.placeholder.com/80?text=Logo'" :alt="loja.nome" class="max-w-full max-h-full object-contain rounded-md drop-shadow-sm">
                                </div>
                                <div class="flex-1">
                                    <span class="block font-bold text-gray-100 text-sm" x-text="loja.nome"></span>
                                    <span class="block text-xs text-[#fe4b09] font-medium mt-0.5">Ver cupons e ofertas &rarr;</span>
                                </div>
                                <i class="bi bi-chevron-right text-gray-500 text-xs"></i>
                            </a>
                        </li>
                    </template>
                </ul>
            </template>

            <!-- Estado: Sem Resultados -->
            <template x-if="!loading && query.length >= 2 && results.length === 0">
                <div class="p-8 text-center text-gray-400">
                    <i class="bi bi-emoji-frown text-3xl text-[#333333] block mb-3"></i>
                    <p class="text-sm">Nenhuma loja encontrada para "<span x-text="query" class="font-bold text-white"></span>".</p>
                </div>
            </template>
            
        </div>
    </div>
</header>

<script>function liveSearchComponent(){return{query:'',results:[],loading:!1,showDropdown:!1,fetchResults(){if(this.query.trim().length<2)return this.results=[],void(this.showDropdown=!1);this.loading=!0,this.showDropdown=!0,fetch(`{{ url('/busca') }}?q=${encodeURIComponent(this.query)}`,{headers:{'X-Requested-With':'XMLHttpRequest',Accept:'application/json'}}).then(e=>e.json()).then(e=>{this.results=e,this.loading=!1}).catch(e=>{this.loading=!1})}}}</script>