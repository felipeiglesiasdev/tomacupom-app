@props([
    'logoTopo' => 'https://cdn.tomacupom.com.br/images/logo-toma-cupom-fundo-preto.webp', 
    'logoScroll' => 'https://cdn.tomacupom.com.br/images/logo-toma-cupom-fundo-branco.webp', 
    'tema' => 'dark' 
])
<header 
    x-data="{ scrolled: false, menuOpen: false, searchOpen: false }" 
    @scroll.window="scrolled = (window.scrollY > 20)"
    class="fixed top-0 left-0 right-0 z-50 transition-all duration-300"
    :class="scrolled ? 'bg-white shadow-md' : '{{ $tema === 'dark' ? 'bg-[#222222]' : 'bg-transparent' }}'"
    itemscope itemtype="https://schema.org/WPHeader"
>
    <div class="flex items-center justify-between px-4 py-3 h-16">
        <button @click="menuOpen = true" class="p-2 -ml-2 text-gray-500 focus:outline-none" aria-label="Abrir menu">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16"
                 class="w-8 h-8 transition-colors duration-300"
                 :class="scrolled ? 'text-gray-800' : '{{ $tema === 'dark' ? 'text-white' : 'text-gray-800' }}'">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1h-10a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1h-10a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1h-10a.5.5 0 0 1-.5-.5"/>
            </svg>
        </button>
        <a href="{{ route('home') }}" class="flex items-center justify-center flex-1" title="Página Inicial - Toma Cupom">
            <img x-show="!scrolled && '{{ $tema }}' === 'dark'" width="160" height="40" src="{{ $logoTopo }}" alt="Logo Toma Cupom" class="h-8 w-auto" itemprop="logo" fetchpriority="high">
            <img x-show="scrolled || '{{ $tema }}' === 'light'" width="160" height="40" x-cloak src="{{ $logoScroll }}" alt="Logo Toma Cupom" class="h-8 w-auto" itemprop="logo" loading="lazy">
        </a>
        <button @click="searchOpen = true; $nextTick(() => $refs.mobileSearchInput.focus())" class="p-2 -mr-2 text-gray-500 focus:outline-none" aria-label="Pesquisar">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16"
                 class="w-6 h-6 transition-colors duration-300"
                 :class="scrolled ? 'text-gray-800' : '{{ $tema === 'dark' ? 'text-white' : 'text-gray-800' }}'">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
            </svg>
        </button>
    </div>
    <div x-show="menuOpen" class="fixed inset-0 z-[60] flex" x-cloak>
        <div x-show="menuOpen" x-transition.opacity @click="menuOpen = false" class="fixed inset-0 bg-black bg-opacity-50 backdrop-blur-sm"></div>
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
                <button @click="menuOpen = false" class="text-gray-400 hover:text-[#fe4b09]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" class="w-6 h-6">
                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
                    </svg>
                </button>
            </div>
            <div class="flex flex-col py-4 overflow-y-auto">
                <a href="{{ route('home') }}" class="flex items-center px-6 py-4 text-gray-800 font-bold border-b border-gray-50 hover:text-[#fe4b09] hover:bg-orange-50/50" itemprop="url">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" class="w-5 h-5 mr-3 text-gray-400">
                        <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146ZM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5Z"/>
                    </svg>
                    <span itemprop="name">Início</span>
                </a>
                <a href="{{ route('lojas') }}" class="flex items-center px-6 py-4 text-gray-800 font-bold border-b border-gray-50 hover:text-[#fe4b09] hover:bg-orange-50/50" itemprop="url">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" class="w-5 h-5 mr-3 text-gray-400">
                        <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045a.5.5 0 0 0-.12.325v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 .5.5V16h-15v-.5a.5.5 0 0 1 .5-.5H1v-6a.5.5 0 0 1 .5-.5H1.5Z"/>
                    </svg>
                    <span itemprop="name">Lojas</span>
                </a>
                <a href="https://chat.whatsapp.com/SEU_LINK_AQUI" target="_blank" rel="noopener noreferrer" class="flex items-center px-6 py-4 m-5 bg-green-500 hover:bg-green-600 text-white rounded-xl font-bold transition-all shadow-md active:scale-95">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-3 text-white" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                    </svg>
                    Entrar no grupo
                </a>
            </div>
        </nav>
    </div>
    <div x-show="searchOpen" x-transition.opacity class="fixed inset-0 z-[70] bg-[#222222] flex flex-col" x-cloak x-data="liveSearchComponent()">
        <div class="flex items-center p-4 border-b border-[#333333]">
            <form @submit.prevent class="flex-1 relative mr-3">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" class="w-4 h-4 text-gray-400">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                    </svg>
                </div>
                <input x-ref="mobileSearchInput" type="search" x-model="query" @input.debounce.300ms="fetchResults" placeholder="Busque lojas..." 
                       class="w-full bg-[#333333] text-white rounded-full py-3 pl-10 pr-4 outline-none focus:ring-2 focus:ring-[#fe4b09] border-none text-sm [&::-webkit-search-cancel-button]:appearance-none">
                
                <button type="button" x-show="query.length > 0" @click="query = ''; results = []; $refs.mobileSearchInput.focus()" class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" class="w-4 h-4">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                    </svg>
                </button>
            </form>
            <button @click="searchOpen = false; query = ''; results = []" class="text-gray-300 font-semibold text-sm">Cancelar</button>
        </div>
        <div class="flex-1 overflow-y-auto bg-[#222222]">        
            <div x-show="loading" class="p-8 text-center text-gray-400">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 animate-spin text-[#fe4b09] mx-auto mb-3" viewBox="0 0 16 16">
                    <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41m-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9"/><path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5 5 0 0 0 8 3M3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9z"/>
                </svg>
                <p class="text-sm">Buscando...</p>
            </div>
            <div x-show="!loading && query.length < 2" class="p-8 text-center text-gray-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" class="w-10 h-10 mb-3 mx-auto block opacity-50">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                </svg>
                <p class="text-sm">Digite pelo menos 2 letras para buscar uma loja.</p>
            </div>
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
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" class="w-3 h-3 text-gray-500">
                                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                </svg>
                            </a>
                        </li>
                    </template>
                </ul>
            </template>
            <template x-if="!loading && query.length >= 2 && results.length === 0">
                <div class="p-8 text-center text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-10 h-10 text-[#333333] mx-auto mb-3 block" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                        <path d="M4.285 12.433a.5.5 0 0 0 .683-.183A3.5 3.5 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.5 4.5 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5m4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5"/>
                    </svg>
                    <p class="text-sm">Nenhuma loja encontrada para "<span x-text="query" class="font-bold text-white"></span>".</p>
                </div>
            </template>
        </div>
    </div>
</header>
<script>function liveSearchComponent(){return{query:'',results:[],loading:!1,showDropdown:!1,fetchResults(){if(this.query.trim().length<2)return this.results=[],void(this.showDropdown=!1);this.loading=!0,this.showDropdown=!0,fetch(`{{ url('/busca') }}?q=${encodeURIComponent(this.query)}`,{headers:{'X-Requested-With':'XMLHttpRequest',Accept:'application/json'}}).then(e=>e.json()).then(e=>{this.results=e,this.loading=!1}).catch(e=>{this.loading=!1})}}}</script>