{{--
    Esta seção exibe as perguntas frequentes (FAQ) em um formato de acordeão interativo,
    com um design clean, sofisticado e totalmente arredondado.
--}}
<section class="bg-white py-16 sm:py-24">
    <div class="container mx-auto px-4">
        <div data-fade-in class="max-w-3xl mx-auto text-center">
            <h2 class="text-3xl md:text-5xl font-black text-[#171717]">
                Dúvidas Frequentes
            </h2>
            <p class="mt-4 text-lg text-gray-600">
                Encontre aqui as respostas para as perguntas mais comuns sobre o Toma Cupom.
            </p>
        </div>

        <div data-fade-in class="mt-12 max-w-3xl mx-auto space-y-4">
            {{-- Pergunta 1 --}}
            <div class="faq-item bg-white rounded-2xl shadow-sm hover:shadow-lg transition-shadow duration-300 overflow-hidden border border-gray-100">
                <button class="faq-question w-full flex justify-between items-center text-left p-6 cursor-pointer">
                    <span class="text-lg font-semibold text-[#171717]">Como usar um cupom de desconto?</span>
                    <div class="faq-icon-wrapper flex-shrink-0 ml-4 h-6 w-6 flex items-center justify-center">
                        <i class="bi bi-chevron-down text-xl text-orange-500 transition-transform duration-500"></i>
                    </div>
                </button>
                <div class="faq-answer max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                    <div class="p-6 pt-0 text-gray-700">
                        <p>É muito simples! Basta clicar em "Copiar" ao lado do código do cupom, ir para o site da loja, escolher seus produtos e, na página de pagamento, colar o código no campo indicado como "cupom de desconto" ou "código promocional". O desconto será aplicado automaticamente!</p>
                    </div>
                </div>
            </div>

            {{-- Pergunta 2 --}}
            <div class="faq-item bg-white rounded-2xl shadow-sm hover:shadow-lg transition-shadow duration-300 overflow-hidden border border-gray-100">
                <button class="faq-question w-full flex justify-between items-center text-left p-6 cursor-pointer">
                    <span class="text-lg font-semibold text-[#171717]">Os cupons são gratuitos?</span>
                    <div class="faq-icon-wrapper flex-shrink-0 ml-4 h-6 w-6 flex items-center justify-center">
                        <i class="bi bi-chevron-down text-xl text-orange-500 transition-transform duration-500"></i>
                    </div>
                </button>
                <div class="faq-answer max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                    <div class="p-6 pt-0 text-gray-700">
                        <p>Sim, todos os cupons e ofertas que divulgamos no Toma Cupom são 100% gratuitos. Nosso objetivo é ajudar você a economizar, sem nenhum custo.</p>
                    </div>
                </div>
            </div>

            {{-- Pergunta 3 --}}
            <div class="faq-item bg-white rounded-2xl shadow-sm hover:shadow-lg transition-shadow duration-300 overflow-hidden border border-gray-100">
                <button class="faq-question w-full flex justify-between items-center text-left p-6 cursor-pointer">
                    <span class="text-lg font-semibold text-[#171717]">O que fazer se um cupom não funcionar?</span>
                    <div class="faq-icon-wrapper flex-shrink-0 ml-4 h-6 w-6 flex items-center justify-center">
                       <i class="bi bi-chevron-down text-xl text-orange-500 transition-transform duration-500"></i>
                    </div>
                </button>
                <div class="faq-answer max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                    <div class="p-6 pt-0 text-gray-700">
                        <p>Nós nos esforçamos para manter todos os cupons atualizados, mas às vezes as lojas alteram as regras sem aviso prévio. Se um cupom não funcionar, verifique as condições da oferta (data de validade, valor mínimo de compra, etc.). Se ainda assim não der certo, sinta-se à vontade para procurar outro cupom em nosso site.</p>
                    </div>
                </div>
            </div>

            {{-- Pergunta 4 --}}
            <div class="faq-item bg-white rounded-2xl shadow-sm hover:shadow-lg transition-shadow duration-300 overflow-hidden border border-gray-100">
                <button class="faq-question w-full flex justify-between items-center text-left p-6 cursor-pointer">
                    <span class="text-lg font-semibold text-[#171717]">Preciso me cadastrar no site?</span>
                    <div class="faq-icon-wrapper flex-shrink-0 ml-4 h-6 w-6 flex items-center justify-center">
                        <i class="bi bi-chevron-down text-xl text-orange-500 transition-transform duration-500"></i>
                    </div>
                </button>
                <div class="faq-answer max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                    <div class="p-6 pt-0 text-gray-700">
                        <p>Não! O Toma Cupom não exige nenhum tipo de cadastro. Você pode navegar e usar todos os nossos cupons e ofertas livremente, sem a necessidade de fornecer qualquer dado pessoal.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const faqItems = document.querySelectorAll('.faq-item');

        faqItems.forEach(item => {
            const question = item.querySelector('.faq-question');
            const answer = item.querySelector('.faq-answer');
            const icon = question.querySelector('.faq-icon-wrapper i');

            question.addEventListener('click', () => {
                const isOpen = answer.classList.contains('open');

                faqItems.forEach(otherItem => {
                    if (otherItem !== item) {
                        const otherAnswer = otherItem.querySelector('.faq-answer');
                        const otherIcon = otherItem.querySelector('.faq-icon-wrapper i');
                        otherAnswer.style.maxHeight = '0';
                        otherAnswer.classList.remove('open');
                        otherIcon.classList.remove('bi-chevron-up');
                        otherIcon.classList.add('bi-chevron-down');
                    }
                });

                if (isOpen) {
                    answer.style.maxHeight = '0';
                    icon.classList.remove('bi-chevron-up');
                    icon.classList.add('bi-chevron-down');
                } else {
                    answer.style.maxHeight = answer.scrollHeight + 'px';
                    icon.classList.remove('bi-chevron-down');
                    icon.classList.add('bi-chevron-up');
                }
                answer.classList.toggle('open');
            });
        });
    });
</script>
@endpush

