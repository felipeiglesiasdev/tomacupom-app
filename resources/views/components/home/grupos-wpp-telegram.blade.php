{{--
    Seção Premium de Comunidade (Grupos e Redes Sociais)
    Design focado em alta conversão com mockup de celular CSS animado.
--}}
<section class="bg-[#222222] relative overflow-hidden py-24 lg:py-32" aria-labelledby="community-heading">
    
    <!-- Efeitos de Luzes ao Fundo (Aurora Premium) -->
    <div class="absolute top-0 right-0 -mr-40 -mt-40 w-[600px] h-[600px] rounded-full bg-[#FE4B09]/20 blur-[120px] pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 -ml-40 -mb-40 w-[600px] h-[600px] rounded-full bg-blue-500/10 blur-[120px] pointer-events-none"></div>
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] rounded-full bg-[#25D366]/5 blur-[150px] pointer-events-none"></div>

    <!-- Definição de Animações Customizadas -->
    <style>
        @keyframes float-smooth {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        @keyframes message-pop {
            0% { opacity: 0; transform: translateY(20px) scale(0.95); }
            100% { opacity: 1; transform: translateY(0) scale(1); }
        }
        @keyframes typing-dot {
            0%, 100% { transform: translateY(0); opacity: 0.5; }
            50% { transform: translateY(-4px); opacity: 1; }
        }
        .animate-float-smooth { animation: float-smooth 6s ease-in-out infinite; }
        
        .msg-1 { animation: message-pop 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275) 1s forwards; opacity: 0; }
        .msg-2 { animation: message-pop 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275) 2.5s forwards; opacity: 0; }
        .msg-3 { animation: message-pop 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275) 4s forwards; opacity: 0; }
        
        .typing-indicator { animation: message-pop 0.4s ease-out 0.2s forwards; opacity: 0; }
        .hide-typing { animation: message-pop 0.4s ease-in 0.8s reverse forwards; }
        
        .dot-1 { animation: typing-dot 1.5s infinite 0s; }
        .dot-2 { animation: typing-dot 1.5s infinite 0.2s; }
        .dot-3 { animation: typing-dot 1.5s infinite 0.4s; }
    </style>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 lg:gap-8 items-center">
            
            <!-- Coluna Esquerda: Textos, Botões e Redes -->
            <div class="lg:col-span-7 max-w-2xl text-center lg:text-left mx-auto lg:mx-0">
                <!-- Badge -->
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/5 border border-white/10 mb-8 shadow-xl backdrop-blur-sm">
                    <span class="relative flex h-3 w-3">
                      <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#FE4B09] opacity-75"></span>
                      <span class="relative inline-flex rounded-full h-3 w-3 bg-[#FE4B09]"></span>
                    </span>
                    <span class="text-sm font-semibold text-gray-200 tracking-wide">Ofertas 24h por dia</span>
                </div>

                <h2 id="community-heading" class="text-4xl sm:text-5xl lg:text-6xl font-black text-white leading-[1.1] tracking-tight">
                    Receba as melhores promoções da internet direto no seu
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#FE4B09] to-[#ffb800] drop-shadow-[0_0_15px_rgba(254,75,9,0.3)]">celular.</span>
                </h2>
                
                <p class="mt-6 text-lg sm:text-xl text-gray-400 font-light leading-relaxed max-w-xl mx-auto lg:mx-0">
                    Nossa equipe caça as melhores ofertas, cupons e queimas de estoque 24h por dia. Escolha seu app ou loja favorita e economize!
                </p>

                <!-- Botões de Grupos -->
                <div class="mt-10 flex flex-col sm:flex-row gap-5 justify-center lg:justify-start">
                    <!-- WhatsApp -->
                    <a href="#" target="_blank" class="group relative flex items-center justify-center gap-3 px-8 py-4 bg-[#25D366] hover:bg-[#1ebd5a] text-white rounded-full font-bold text-lg transition-all duration-300 shadow-[0_0_30px_rgba(37,211,102,0.25)] hover:shadow-[0_0_45px_rgba(37,211,102,0.4)] transform hover:-translate-y-1 overflow-hidden">
                        <i class="bi bi-whatsapp text-2xl drop-shadow-md"></i>
                        <span>Entrar no WhatsApp</span>
                    </a>
                    
                    <!-- Telegram -->
                    <a href="#" target="_blank" class="group relative flex items-center justify-center gap-3 px-8 py-4 bg-transparent border-2 border-[#0088cc] hover:bg-[#0088cc] text-white rounded-full font-bold text-lg transition-all duration-300 shadow-[0_0_20px_rgba(0,136,204,0.1)] hover:shadow-[0_0_40px_rgba(0,136,204,0.4)] transform hover:-translate-y-1 overflow-hidden">
                        <i class="bi bi-telegram text-2xl drop-shadow-md"></i>
                        <span>Entrar no Telegram</span>
                    </a>
                </div>

                <!-- Divisor e Redes Sociais -->
                <div class="mt-14 pt-8 border-t border-white/10 flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-6">
                    <p class="text-gray-400 font-medium text-sm tracking-wider uppercase">Siga nossas redes sociais:</p>
                    <div class="flex gap-4">
                        <a href="#" target="_blank" class="h-12 w-12 flex items-center justify-center rounded-full bg-white/5 hover:bg-white/10 transition-all duration-300 transform hover:-translate-y-1 border border-white/5 hover:border-white/20 group">
                            <i class="bi bi-instagram text-xl text-gray-400 group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-br from-pink-500 to-orange-400"></i>
                        </a>
                        <a href="#" target="_blank" class="h-12 w-12 flex items-center justify-center rounded-full bg-white/5 hover:bg-white/10 transition-all duration-300 transform hover:-translate-y-1 border border-white/5 hover:border-white/20 group">
                            <i class="bi bi-facebook text-xl text-gray-400 group-hover:text-blue-500"></i>
                        </a>
                        <a href="#" target="_blank" class="h-12 w-12 flex items-center justify-center rounded-full bg-white/5 hover:bg-white/10 transition-all duration-300 transform hover:-translate-y-1 border border-white/5 hover:border-white/20 group">
                            <i class="bi bi-tiktok text-xl text-gray-400 group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r from-[#ff0050] to-[#00f2ea]"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Coluna Direita: Mockup do Celular Animado -->
            <div class="lg:col-span-5 relative mt-16 lg:mt-0 flex justify-center perspective-[1000px]">
                
                

            </div>
        </div>
    </div>
</section>