<footer class="bg-[#222222] text-gray-400 font-sans border-t border-white/5">
    <div class="container mx-auto px-4 pt-16 pb-8 max-w-7xl">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-12 lg:gap-8">
            <div class="lg:col-span-2 pr-0 lg:pr-8">
                <a href="{{ route('home') }}" class="inline-block mb-6" title="Ir para a página inicial do Toma Cupom">
                    <img src="https://cdn.tomacupom.com.br/images/logo-toma-cupom-fundo-preto.webp" alt="Toma Cupom Logo" class="h-10 w-auto opacity-90 hover:opacity-100 transition-opacity">
                </a>
                <p class="text-sm leading-relaxed mb-6">
                    O seu portal de economia inteligente. Encontre os melhores cupons de desconto, ofertas diárias e promoções exclusivas das maiores lojas do Brasil em um só lugar.
                </p>
                <div class="flex items-center space-x-2 text-green-400 bg-white/5 inline-flex px-4 py-2 rounded-full border border-white/10">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
                    </svg>
                    <span class="text-xs font-bold uppercase tracking-wider">Site 100% Seguro</span>
                </div>
            </div>
            <div>
                <h3 class="text-white font-bold text-lg mb-6">Navegação</h3>
                <ul class="space-y-4 text-sm font-medium">
                    <li><a href="{{ route('home') }}" class="hover:text-[#fe4b09] hover:translate-x-1 inline-block transition-all duration-300">Página Inicial</a></li>
                    <li><a href="{{ route('lojas') }}" class="hover:text-[#fe4b09] hover:translate-x-1 inline-block transition-all duration-300">Todas as Lojas</a></li>
                    <li><a href="{{ url('/privacidade') }}" class="hover:text-[#fe4b09] hover:translate-x-1 inline-block transition-all duration-300">Política de Privacidade</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-white font-bold text-lg mb-6">Lojas Populares</h3>
                <ul class="space-y-4 text-sm font-medium">
                    <li><a href="{{ url('/cupons/shein') }}" class="hover:text-[#fe4b09] hover:translate-x-1 inline-block transition-all duration-300">Cupons Shein</a></li>
                    <li><a href="{{ url('/cupons/camicado') }}" class="hover:text-[#fe4b09] hover:translate-x-1 inline-block transition-all duration-300">Cupons Camicado</a></li>
                    <li><a href="{{ url('/cupons/magalu') }}" class="hover:text-[#fe4b09] hover:translate-x-1 inline-block transition-all duration-300">Cupons Magalu</a></li>
                    <li><a href="{{ url('/cupons/adidas') }}" class="hover:text-[#fe4b09] hover:translate-x-1 inline-block transition-all duration-300">Cupons Adidas</a></li>
                    <li><a href="{{ url('/cupons/centauro') }}" class="hover:text-[#fe4b09] hover:translate-x-1 inline-block transition-all duration-300">Cupons Centauro</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-white font-bold text-lg mb-6">Acompanhe</h3>
                <p class="text-sm mb-4">Siga nossas redes e entre nos grupos de ofertas.</p>
                <div class="flex flex-wrap gap-3">
                    <a href="https://www.instagram.com/toma.cupom" target="_blank" rel="noopener noreferrer" class="group w-10 h-10 flex items-center justify-center rounded-full bg-white/5 border border-white/10 hover:bg-gradient-to-tr hover:from-yellow-400 hover:via-pink-500 hover:to-purple-500 hover:border-transparent transition-all duration-300 shadow-sm" aria-label="Instagram">
                        <svg class="w-5 h-5 text-gray-400 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="https://www.tiktok.com/@tomacupom" target="_blank" rel="noopener noreferrer" class="group w-10 h-10 flex items-center justify-center rounded-full bg-white/5 border border-white/10 hover:bg-black hover:border-transparent transition-all duration-300 shadow-sm" aria-label="TikTok">
                        <svg class="w-4 h-4 text-gray-400 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z"/>
                        </svg>
                    </a>
                    <a href="https://chat.whatsapp.com/DJqF97ZVIxtHEjYDSepyDz?mode=gi_t" target="_blank" rel="noopener noreferrer" class="group w-10 h-10 flex items-center justify-center rounded-full bg-white/5 border border-white/10 hover:bg-green-500 hover:border-transparent transition-all duration-300 shadow-sm" aria-label="Grupo WhatsApp" title="Grupo de Ofertas no WhatsApp">
                        <svg class="w-5 h-5 text-gray-400 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="mt-12 pt-8 border-t border-white/5 flex flex-col md:flex-row items-center justify-between gap-4 text-xs lg:text-sm text-gray-500">
            <p>&copy; {{ date('Y') }} Toma Cupom. Todos os direitos reservados.</p>
            <p class="flex items-center gap-1">
                Feito com <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 text-[#fe4b09]"><path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" /></svg> para você economizar.
            </p>
        </div>
    </div>
</footer>