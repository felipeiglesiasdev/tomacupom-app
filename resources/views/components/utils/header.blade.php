<header 
    class="fixed top-0 left-0 right-0 z-50 p-4 transition-all duration-300"
    x-data="{ mobileMenuOpen: false, scrolled: false }"
    @scroll.window="scrolled = (window.scrollY > 50)"
    itemscope itemtype="https://schema.org/WPHeader"
>
    <div class="container mx-auto">
        <div 
            class="rounded-2xl transition-all duration-500 ease-in-out border"
            :class="{ 
                'bg-white/80 backdrop-blur-lg shadow-lg border-gray-200/80': scrolled || mobileMenuOpen, 
                'bg-transparent shadow-none border-transparent': !scrolled && !mobileMenuOpen 
            }"
        >
            <div class="flex items-center justify-between p-4">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="group flex items-center space-x-2 flex-shrink-0 lg:w-1/4" title="Página Inicial - Toma Cupom">
                    <img x-show="scrolled || mobileMenuOpen" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" src="{{ asset('images/logo/3.png') }}" alt="Logo Toma Cupom" class="h-10 w-auto transition-transform duration-300 group-hover:scale-95" itemprop="logo">
                    <img x-show="!scrolled && !mobileMenuOpen" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" src="{{ asset('images/logo/3.png') }}" alt="Logo Toma Cupom" class="h-10 w-auto transition-transform duration-300 group-hover:scale-95" itemprop="logo">
                </a>

                <!-- Search Bar (Desktop) -->
                <div class="hidden lg:flex flex-1 justify-center px-6" itemscope itemtype="https://schema.org/WebSite">
                    <meta itemprop="url" content="{{ url('/') }}"/>
                    <form itemprop="potentialAction" itemscope itemtype="https://schema.org/SearchAction" class="relative w-full max-w-lg group">
                        <meta itemprop="target" content="{{ url('/busca?q={search_term_string}') }}"/>
                        <input itemprop="query-input" type="search" name="search_term_string" placeholder="Busque o cupom da sua loja favorita..." 
                               class="w-full pl-12 pr-4 py-3 text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-orange-400 transition-all"
                               :class="scrolled || mobileMenuOpen ? 'bg-gray-100 border-transparent focus:bg-white' : 'bg-white/20 border border-white/30 placeholder-white/70 text-white focus:bg-white/30'">
                        <div class="absolute left-4 top-1/2 -translate-y-1/2 transition-transform duration-300 group-focus-within:rotate-12">
                            <i class="bi bi-search text-lg" :class="scrolled || mobileMenuOpen ? 'text-gray-400' : 'text-white/70'"></i>
                        </div>
                    </form>
                </div>

                <!-- Navigation Links (Desktop) -->
                <nav 
                    class="hidden lg:flex items-center justify-end space-x-6 font-medium lg:w-1/4 transition-colors duration-300"
                    :class="scrolled || mobileMenuOpen ? 'text-gray-700' : 'text-white'"
                    itemscope itemtype="https://schema.org/SiteNavigationElement"
                >
                    <a href="{{ route('home') }}" class="transition-transform duration-300 hover:-translate-y-0.5 hover:text-orange-500" itemprop="url" title="Ir para a página inicial"><span itemprop="name">Início</span></a>
                    <a href="#" class="transition-transform duration-300 hover:-translate-y-0.5 hover:text-orange-500" itemprop="url" title="Ver todos os cupons"><span itemprop="name">Cupons</span></a>
                    <a href="{{ route('categorias') }}" class="transition-transform duration-300 hover:-translate-y-0.5 hover:text-orange-500" itemprop="url" title="Navegar por categorias"><span itemprop="name">Categorias</span></a>
                    <a href="{{ route('lojas') }}" class="transition-transform duration-300 hover:-translate-y-0.5 hover:text-orange-500" itemprop="url" title="Ver todas as lojas parceiras"><span itemprop="name">Lojas</span></a>
                </nav>
                
                <!-- Mobile Menu Button -->
                <div class="lg:hidden ml-4">
                    <button 
                        @click="mobileMenuOpen = !mobileMenuOpen" 
                        class="transition-colors"
                        :class="scrolled || mobileMenuOpen ? 'text-gray-700 hover:text-orange-500' : 'text-white hover:text-white/80'"
                    >
                        <i class="bi bi-list text-2xl"></i>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div x-show="mobileMenuOpen" x-transition class="lg:hidden border-t" :class="scrolled || mobileMenuOpen ? 'border-gray-200/80' : 'border-white/20'">
                <nav class="flex flex-col p-4 space-y-2">
                    <!-- Mobile Search Bar -->
                    <div class="pb-4">
                         <div class="relative w-full group">
                            <input type="search" placeholder="Busque o cupom da sua loja favorita..."
                                   class="w-full pl-12 pr-4 py-3 text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-orange-400 transition-all"
                                   :class="scrolled || mobileMenuOpen ? 'bg-gray-100 border-transparent focus:bg-white text-gray-800' : 'bg-white/20 border border-white/30 placeholder-white/70 text-white focus:bg-white/30'">
                            <div class="absolute left-4 top-1/2 -translate-y-1/2 transition-transform duration-300 group-focus-within:rotate-12">
                                <i class="bi bi-search text-lg" :class="scrolled || mobileMenuOpen ? 'text-gray-400' : 'text-white/70'"></i>
                            </div>
                        </div>
                    </div>
                    
                    <a href="{{ route('home') }}" class="px-4 py-2 rounded-lg transition-colors" :class="scrolled || mobileMenuOpen ? 'text-gray-700 hover:bg-orange-50 hover:text-orange-600' : 'text-white hover:bg-white/10'">Início</a>
                    <a href="#" class="px-4 py-2 rounded-lg transition-colors" :class="scrolled || mobileMenuOpen ? 'text-gray-700 hover:bg-orange-50 hover:text-orange-600' : 'text-white hover:bg-white/10'">Cupons</a>
                    <a href="{{ route('categorias') }}" class="px-4 py-2 rounded-lg transition-colors" :class="scrolled || mobileMenuOpen ? 'text-gray-700 hover:bg-orange-50 hover:text-orange-600' : 'text-white hover:bg-white/10'">Categorias</a>
                    <a href="{{ route('lojas') }}" class="px-4 py-2 rounded-lg transition-colors" :class="scrolled || mobileMenuOpen ? 'text-gray-700 hover:bg-orange-50 hover:text-orange-600' : 'text-white hover:bg-white/10'">Lojas</a>
                </nav>
            </div>
        </div>
    </div>
</header>

