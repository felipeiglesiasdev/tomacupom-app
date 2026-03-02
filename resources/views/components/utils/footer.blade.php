{{--
    Rodapé principal do site, com design sofisticado, links de navegação,
    informações de copyright, grupos e redes sociais. Otimizado para SEO.
--}}
<footer class="bg-[#171717] text-gray-400 font-sans">
    <div class="container mx-auto px-4 pt-16 pb-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-12">
            
            <!-- Logo e Descrição -->
            <div class="lg:col-span-2">
                <a href="{{ route('home') }}" title="Ir para a página inicial do Toma Cupom">
                    <img src="{{ asset('images/logo/logo-tomacupom.png') }}" alt="Toma Cupom Logo" class="h-14 w-auto">
                </a>
                <p class="text-sm pr-8 mt-4">
                    O seu portal para os melhores cupons e ofertas da internet. Economize em suas lojas favoritas com apenas um clique!
                </p>
                <div class="mt-6 flex items-center space-x-3 text-green-400">
                    <i class="bi bi-shield-lock-fill text-xl" aria-hidden="true"></i>
                    <span class="text-sm font-medium">Site 100% Seguro com SSL</span>
                </div>
            </div>

            <!-- Navegação -->
            <div>
                <h3 class="text-lg font-semibold text-white mb-4">Navegação</h3>
                <ul class="space-y-3">
                    <li><a href="{{ route('home') }}" class="hover:text-orange-400 transition-colors" title="Ver página inicial">Início</a></li>
                    <li><a href="{{ route('lojas') }}" class="hover:text-orange-400 transition-colors" title="Ver todas as lojas parceiras">Lojas</a></li>
                    <li><a href="{{ route('categorias') }}" class="hover:text-orange-400 transition-colors" title="Navegar por categorias de cupons">Categorias</a></li>
                    <li><a href="{{ route('privacidade') }}" class="hover:text-orange-400 transition-colors" title="Ler nossa Política de Privacidade">Privacidade</a></li>
                </ul>
            </div>

            <!-- Grupos -->
            <div>
                <h3 class="text-lg font-semibold text-white mb-4">Grupos de Ofertas</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="flex items-center space-x-2 hover:text-green-500 transition-colors" title="Entrar no nosso grupo do WhatsApp" rel="noopener noreferrer nofollow" target="_blank">
                        <i class="bi bi-whatsapp" aria-hidden="true"></i> 
                        <span>WhatsApp</span>
                    </a></li>
                    <li><a href="#" class="flex items-center space-x-2 hover:text-blue-500 transition-colors" title="Entrar no nosso canal do Telegram" rel="noopener noreferrer nofollow" target="_blank">
                        <i class="bi bi-telegram" aria-hidden="true"></i>
                        <span>Telegram</span>
                    </a></li>
                </ul>
            </div>

            <!-- Redes Sociais -->
            <div>
                <h3 class="text-lg font-semibold text-white mb-4">Siga-nos</h3>
                <div class="flex space-x-3">
                    <a href="#" class="group h-10 w-10 flex items-center justify-center rounded-full bg-white/5 hover:bg-white/10 transition-all duration-300" title="Siga o Toma Cupom no Instagram" aria-label="Instagram" rel="noopener noreferrer nofollow" target="_blank">
                        <i class="bi bi-instagram text-xl text-gray-400 group-hover:text-pink-500 transition-colors" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="group h-10 w-10 flex items-center justify-center rounded-full bg-white/5 hover:bg-white/10 transition-all duration-300" title="Siga o Toma Cupom no Facebook" aria-label="Facebook" rel="noopener noreferrer nofollow" target="_blank">
                        <i class="bi bi-facebook text-xl text-gray-400 group-hover:text-blue-600 transition-colors" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="group h-10 w-10 flex items-center justify-center rounded-full bg-white/5 hover:bg-white/10 transition-all duration-300" title="Siga o Toma Cupom no TikTok" aria-label="TikTok" rel="noopener noreferrer nofollow" target="_blank">
                        <i class="bi bi-tiktok text-xl text-gray-400 group-hover:text-white transition-colors" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="mt-12 pt-8 border-t border-white/10 text-center text-sm">
            <p>&copy; {{ date('Y') }} Toma Cupom. Todos os direitos reservados. Feito com <span class="text-orange-500">❤️</span> para você economizar.</p>
        </div>
    </div>
</footer>

