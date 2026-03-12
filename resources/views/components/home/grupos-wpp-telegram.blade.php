<section class="bg-[#222222] relative overflow-hidden py-24 lg:py-32" aria-labelledby="community-heading">
    <div class="absolute top-0 right-0 -mr-40 -mt-40 w-[600px] h-[600px] rounded-full bg-[#FE4B09]/20 blur-[120px] pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 -ml-40 -mb-40 w-[600px] h-[600px] rounded-full bg-blue-500/10 blur-[120px] pointer-events-none"></div>
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] rounded-full bg-[#25D366]/5 blur-[150px] pointer-events-none"></div>

    <style>
        @keyframes float-smooth {
            0%, 100% { transform: translateY(0px) rotateY(-15deg) rotateX(5deg); }
            50% { transform: translateY(-20px) rotateY(-15deg) rotateX(5deg); }
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
        .msg-3 { animation: message-pop 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275) 4.5s forwards; opacity: 0; }
        
        .typing-indicator { animation: message-pop 0.4s ease-out 3.2s forwards; opacity: 0; }
        .hide-typing { animation: message-pop 0.4s ease-in 4.4s reverse forwards; }
        
        .dot-1 { animation: typing-dot 1.5s infinite 0s; }
        .dot-2 { animation: typing-dot 1.5s infinite 0.2s; }
        .dot-3 { animation: typing-dot 1.5s infinite 0.4s; }
    </style>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 lg:gap-8 items-center">
            
            <div class="lg:col-span-7 max-w-2xl text-center lg:text-left mx-auto lg:mx-0">
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

                <div class="mt-10 flex flex-col sm:flex-row gap-5 justify-center lg:justify-start">
                    <a href="https://chat.whatsapp.com/DJqF97ZVIxtHEjYDSepyDz?mode=gi_t" target="_blank" rel="noopener noreferrer" class="group relative flex items-center justify-center gap-3 px-8 py-4 bg-[#25D366] hover:bg-[#1ebd5a] text-white rounded-full font-bold text-lg transition-all duration-300 shadow-[0_0_30px_rgba(37,211,102,0.25)] hover:shadow-[0_0_45px_rgba(37,211,102,0.4)] transform hover:-translate-y-1 overflow-hidden">
                        <svg class="w-6 h-6 drop-shadow-md" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                        </svg>
                        <span>Entrar no WhatsApp</span>
                    </a>
                    
                    <a href="https://chat.whatsapp.com/DJqF97ZVIxtHEjYDSepyDz?mode=gi_t" target="_blank" rel="noopener noreferrer" class="group relative flex items-center justify-center gap-3 px-8 py-4 bg-transparent border-2 border-[#0088cc] hover:bg-[#0088cc] text-white rounded-full font-bold text-lg transition-all duration-300 shadow-[0_0_20px_rgba(0,136,204,0.1)] hover:shadow-[0_0_40px_rgba(0,136,204,0.4)] transform hover:-translate-y-1 overflow-hidden">
                        <svg class="w-6 h-6 drop-shadow-md" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
                        </svg>
                        <span>Entrar no Telegram</span>
                    </a>
                </div>

                <div class="mt-14 pt-8 border-t border-white/10 flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-6">
                    <p class="text-gray-400 font-medium text-sm tracking-wider uppercase">Siga nossas redes sociais:</p>
                    <div class="flex gap-4">
                        <a href="#" target="_blank" class="h-12 w-12 flex items-center justify-center rounded-full bg-white/5 hover:bg-white/10 transition-all duration-300 transform hover:-translate-y-1 border border-white/5 hover:border-white/20 group">
                            <svg class="w-5 h-5 text-gray-400 group-hover:text-pink-500 transition-colors" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" target="_blank" class="h-12 w-12 flex items-center justify-center rounded-full bg-white/5 hover:bg-white/10 transition-all duration-300 transform hover:-translate-y-1 border border-white/5 hover:border-white/20 group">
                            <svg class="w-5 h-5 text-gray-400 group-hover:text-blue-500 transition-colors" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                            </svg>
                        </a>
                        <a href="#" target="_blank" class="h-12 w-12 flex items-center justify-center rounded-full bg-white/5 hover:bg-white/10 transition-all duration-300 transform hover:-translate-y-1 border border-white/5 hover:border-white/20 group">
                            <svg class="w-4 h-4 text-gray-400 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-5 relative mt-16 lg:mt-0 flex justify-center perspective-[1000px]">
                
                <div class="relative w-[280px] h-[580px] bg-[#efeae2] rounded-[3rem] border-[12px] border-gray-900 shadow-2xl overflow-hidden animate-float-smooth">
                    
                    <div class="absolute top-0 inset-x-0 h-6 bg-gray-900 rounded-b-3xl w-36 mx-auto z-20"></div>

                    <div class="bg-[#075e54] h-20 px-4 pt-6 flex items-center gap-3 text-white z-10 relative shadow-md">
                        <div class="w-10 h-10 rounded-full bg-white flex items-center justify-center overflow-hidden p-1">
                            <img src="https://cdn.tomacupom.com.br/images/logo-toma-cupom-fundo-branco.webp" alt="Toma Cupom" class="w-full h-full object-contain">
                        </div>
                        <div class="flex-1">
                            <div class="font-bold text-sm">Ofertas VIP 🤑</div>
                            <div class="text-[10px] text-gray-200">online</div>
                        </div>
                    </div>

                    <div class="p-3 flex flex-col gap-2 relative z-10 h-[calc(100%-5rem)] bg-[#efeae2] overflow-hidden" style="background-image: url('https://user-images.githubusercontent.com/15075759/28719144-86dc0f70-73b1-11e7-911d-60d70fcded21.png'); background-size: cover; background-position: center;">
                        
                        <div class="text-center mt-2">
                            <span class="bg-[#d9fdd3] text-gray-600 text-[10px] px-3 py-1 rounded-lg shadow-sm">Hoje</span>
                        </div>

                        <div class="msg-1 bg-white p-2 rounded-lg rounded-tl-none shadow-sm max-w-[85%] self-start relative">
                            <span class="text-[11px] text-gray-800 font-bold text-red-500">🔥 BUG NA AMAZON!</span>
                            <p class="text-[11px] text-gray-700 mt-1 leading-tight">Smart TV 55" 4K despencou o preço com esse cupom secreto!</p>
                            <div class="text-[9px] text-gray-400 text-right mt-1">Agora</div>
                        </div>

                        <div class="msg-2 bg-white p-1 rounded-lg rounded-tl-none shadow-sm max-w-[85%] self-start relative mt-1">
                            <div class="w-full h-24 bg-gray-100 rounded flex items-center justify-center overflow-hidden relative">
                                <img src="https://cdn.tomacupom.com.br/lojas/amazon.webp" class="w-12 h-12 object-contain" alt="Amazon">
                            </div>
                            <div class="p-2">
                                <p class="text-[10px] text-gray-800 font-bold line-through text-gray-400">De: R$ 3.500</p>
                                <p class="text-xs text-green-600 font-black">Por: R$ 1.899</p>
                                <span class="mt-2 block w-full text-center bg-[#00a884] text-white text-[10px] font-bold py-1.5 rounded">Pegar Oferta</span>
                            </div>
                            <div class="text-[9px] text-gray-400 text-right mt-1 pr-1">Agora</div>
                        </div>

                        <div class="typing-indicator hide-typing bg-white p-2 rounded-lg rounded-tl-none shadow-sm max-w-[20%] self-start flex gap-1 mt-1">
                            <div class="w-1.5 h-1.5 bg-gray-400 rounded-full dot-1"></div>
                            <div class="w-1.5 h-1.5 bg-gray-400 rounded-full dot-2"></div>
                            <div class="w-1.5 h-1.5 bg-gray-400 rounded-full dot-3"></div>
                        </div>

                        <div class="msg-3 bg-white p-2 rounded-lg rounded-tl-none shadow-sm max-w-[85%] self-start relative mt-1">
                            <p class="text-[11px] text-gray-700 leading-tight">Corre que vai esgotar em minutos! 🏃‍♂️💨</p>
                            <div class="text-[9px] text-gray-400 text-right mt-1">Agora</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>