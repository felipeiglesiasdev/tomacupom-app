{{--
    Seção de Perguntas Frequentes (FAQ)
    Design clean, fundo branco premium, interações com Alpine.js
--}}
<section class="bg-white relative overflow-hidden py-24 lg:py-32" aria-labelledby="faq-heading">
    
    <!-- Padrão de Fundo Sutil (Dots) para dar textura ao branco sem escurecer -->
    <div class="absolute inset-0 opacity-[0.03] pointer-events-none" style="background-image: radial-gradient(#222222 1px, transparent 1px); background-size: 32px 32px;"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Cabeçalho da Seção -->
        <div class="text-center max-w-3xl mx-auto mb-16 lg:mb-24">
            <span class="text-[#FE4B09] font-bold tracking-wider uppercase text-sm mb-4 block">Central de Ajuda</span>
            <h2 id="faq-heading" class="text-4xl sm:text-5xl lg:text-6xl font-black text-[#222222] tracking-tight leading-tight">
                Perguntas <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#FE4B09] to-[#ffb800]">Frequentes</span>
            </h2>
            <p class="mt-6 text-lg text-gray-500 font-light leading-relaxed max-w-2xl mx-auto">
                Tudo o que você precisa saber sobre o Toma Cupom. Ficou com alguma dúvida? Confira abaixo as respostas da nossa comunidade.
            </p>
        </div>

        <!-- Accordion FAQ com Alpine.js -->
        <div class="max-w-3xl mx-auto" x-data="{ activeAccordion: 1 }">
            
            <!-- Item 1 -->
            <div class="group border-b border-gray-200">
                <button 
                    @click="activeAccordion = activeAccordion === 1 ? null : 1" 
                    class="w-full py-6 flex items-center justify-between text-left focus:outline-none transition-colors duration-300"
                    aria-controls="faq-answer-1"
                >
                    <span class="text-lg md:text-xl font-bold pr-4 transition-colors duration-300" :class="activeAccordion === 1 ? 'text-[#FE4B09]' : 'text-[#222222] group-hover:text-[#FE4B09]'">
                        Como faço para usar um cupom de desconto?
                    </span>
                    <span class="flex-shrink-0 w-10 h-10 rounded-full flex items-center justify-center border transition-all duration-300"
                          :class="activeAccordion === 1 ? 'border-[#FE4B09] bg-[#FE4B09] text-white shadow-md' : 'border-gray-200 text-gray-400 group-hover:border-[#FE4B09] group-hover:text-[#FE4B09]'">
                        <i class="bi bi-plus-lg text-lg transition-transform duration-300" :class="activeAccordion === 1 ? 'rotate-45' : ''"></i>
                    </span>
                </button>
                <div 
                    id="faq-answer-1"
                    x-show="activeAccordion === 1" 
                    x-collapse 
                    x-cloak
                    class="pb-8 pr-12"
                >
                    <p class="text-gray-500 text-base leading-relaxed">
                        É muito simples e rápido! Escolha a loja desejada, clique no botão "Pegar Cupom" para copiar o código, e então aplique-o no campo de descontos do carrinho de compras diretamente no site da loja antes de finalizar o seu pagamento.
                    </p>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="group border-b border-gray-200">
                <button 
                    @click="activeAccordion = activeAccordion === 2 ? null : 2" 
                    class="w-full py-6 flex items-center justify-between text-left focus:outline-none transition-colors duration-300"
                    aria-controls="faq-answer-2"
                >
                    <span class="text-lg md:text-xl font-bold pr-4 transition-colors duration-300" :class="activeAccordion === 2 ? 'text-[#FE4B09]' : 'text-[#222222] group-hover:text-[#FE4B09]'">
                        Os cupons do Toma Cupom são totalmente gratuitos?
                    </span>
                    <span class="flex-shrink-0 w-10 h-10 rounded-full flex items-center justify-center border transition-all duration-300"
                          :class="activeAccordion === 2 ? 'border-[#FE4B09] bg-[#FE4B09] text-white shadow-md' : 'border-gray-200 text-gray-400 group-hover:border-[#FE4B09] group-hover:text-[#FE4B09]'">
                        <i class="bi bi-plus-lg text-lg transition-transform duration-300" :class="activeAccordion === 2 ? 'rotate-45' : ''"></i>
                    </span>
                </button>
                <div 
                    id="faq-answer-2"
                    x-show="activeAccordion === 2" 
                    x-collapse 
                    x-cloak
                    class="pb-8 pr-12"
                >
                    <p class="text-gray-500 text-base leading-relaxed">
                        Sim! O uso da nossa plataforma e todos os cupons disponibilizados aqui são 100% gratuitos. Nossa missão é apenas conectar você às melhores economias da internet sem cobrar nenhuma taxa por isso.
                    </p>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="group border-b border-gray-200">
                <button 
                    @click="activeAccordion = activeAccordion === 3 ? null : 3" 
                    class="w-full py-6 flex items-center justify-between text-left focus:outline-none transition-colors duration-300"
                    aria-controls="faq-answer-3"
                >
                    <span class="text-lg md:text-xl font-bold pr-4 transition-colors duration-300" :class="activeAccordion === 3 ? 'text-[#FE4B09]' : 'text-[#222222] group-hover:text-[#FE4B09]'">
                        O que devo fazer se um cupom não funcionar?
                    </span>
                    <span class="flex-shrink-0 w-10 h-10 rounded-full flex items-center justify-center border transition-all duration-300"
                          :class="activeAccordion === 3 ? 'border-[#FE4B09] bg-[#FE4B09] text-white shadow-md' : 'border-gray-200 text-gray-400 group-hover:border-[#FE4B09] group-hover:text-[#FE4B09]'">
                        <i class="bi bi-plus-lg text-lg transition-transform duration-300" :class="activeAccordion === 3 ? 'rotate-45' : ''"></i>
                    </span>
                </button>
                <div 
                    id="faq-answer-3"
                    x-show="activeAccordion === 3" 
                    x-collapse 
                    x-cloak
                    class="pb-8 pr-12"
                >
                    <p class="text-gray-500 text-base leading-relaxed">
                        Alguns cupons possuem regras específicas, como "válido apenas na primeira compra" ou "apenas para itens selecionados". Verifique as regras de uso ao lado do cupom. Se ainda assim não funcionar, pode ser que a loja tenha encerrado a promoção. Tente o próximo cupom da lista!
                    </p>
                </div>
            </div>

            <!-- Item 4 -->
            <div class="group border-b border-gray-200">
                <button 
                    @click="activeAccordion = activeAccordion === 4 ? null : 4" 
                    class="w-full py-6 flex items-center justify-between text-left focus:outline-none transition-colors duration-300"
                    aria-controls="faq-answer-4"
                >
                    <span class="text-lg md:text-xl font-bold pr-4 transition-colors duration-300" :class="activeAccordion === 4 ? 'text-[#FE4B09]' : 'text-[#222222] group-hover:text-[#FE4B09]'">
                        Com que frequência as ofertas são atualizadas?
                    </span>
                    <span class="flex-shrink-0 w-10 h-10 rounded-full flex items-center justify-center border transition-all duration-300"
                          :class="activeAccordion === 4 ? 'border-[#FE4B09] bg-[#FE4B09] text-white shadow-md' : 'border-gray-200 text-gray-400 group-hover:border-[#FE4B09] group-hover:text-[#FE4B09]'">
                        <i class="bi bi-plus-lg text-lg transition-transform duration-300" :class="activeAccordion === 4 ? 'rotate-45' : ''"></i>
                    </span>
                </button>
                <div 
                    id="faq-answer-4"
                    x-show="activeAccordion === 4" 
                    x-collapse 
                    x-cloak
                    class="pb-8 pr-12"
                >
                    <p class="text-gray-500 text-base leading-relaxed">
                        Nossa equipe trabalha 24 horas por dia caçando bugs e descontos. A plataforma é atualizada de hora em hora. Para não perder as ofertas relâmpago que duram minutos, recomendamos muito que entre nos nossos grupos VIP no topo do site.
                    </p>
                </div>
            </div>

            <!-- Item 5 -->
            <div class="group border-b border-transparent">
                <button 
                    @click="activeAccordion = activeAccordion === 5 ? null : 5" 
                    class="w-full py-6 flex items-center justify-between text-left focus:outline-none transition-colors duration-300"
                    aria-controls="faq-answer-5"
                >
                    <span class="text-lg md:text-xl font-bold pr-4 transition-colors duration-300" :class="activeAccordion === 5 ? 'text-[#FE4B09]' : 'text-[#222222] group-hover:text-[#FE4B09]'">
                        Preciso criar uma conta para pegar os descontos?
                    </span>
                    <span class="flex-shrink-0 w-10 h-10 rounded-full flex items-center justify-center border transition-all duration-300"
                          :class="activeAccordion === 5 ? 'border-[#FE4B09] bg-[#FE4B09] text-white shadow-md' : 'border-gray-200 text-gray-400 group-hover:border-[#FE4B09] group-hover:text-[#FE4B09]'">
                        <i class="bi bi-plus-lg text-lg transition-transform duration-300" :class="activeAccordion === 5 ? 'rotate-45' : ''"></i>
                    </span>
                </button>
                <div 
                    id="faq-answer-5"
                    x-show="activeAccordion === 5" 
                    x-collapse 
                    x-cloak
                    class="pb-8 pr-12"
                >
                    <p class="text-gray-500 text-base leading-relaxed">
                        Não! Você não precisa se cadastrar para visualizar ou utilizar a maioria dos cupons. Porém, ao se cadastrar no site (em breve), você poderá salvar suas lojas favoritas e receber alertas personalizados no seu e-mail.
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>