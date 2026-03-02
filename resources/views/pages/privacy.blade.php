@extends('layouts.app')


@section('content')
{{-- Banner de Destaque --}}
<header class="py-16 md:py-24">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="text-center md:text-left">
                <h1 class="text-4xl md:text-6xl font-black text-gray-800 leading-tight">
                    Nossas Políticas de Privacidade e Termos
                </h1>
                <p class="mt-4 text-lg text-gray-600">
                    Sua confiança é nossa prioridade. Convidamos você a ler com atenção nossas normas e termos de uso abaixo para entender como operamos.
                </p>
            </div>
            <div class="flex justify-center">
                <img src="{{ asset('images/privacidade/privacidade-tomacupom.png') }}" alt="Ilustração de Privacidade" class="max-w-xs md:max-w-sm w-full h-auto">
            </div>
        </div>
    </div>
</header>

{{-- Conteúdo Principal com o Texto --}}
<main class="pb-16">
    <div class="prose prose-lg max-w-4xl mx-auto px-4">
        <p class="text-center text-sm text-gray-500">Última atualização: 27 de Setembro de 2025</p>
        
        <nav class="mb-10 p-4 bg-white/50 border border-gray-200 rounded-lg not-prose">
            <h2 class="text-xl font-semibold text-gray-700 !mt-0">Navegação Rápida:</h2>
            <ul class="list-disc ml-6 mt-2">
                <li><a href="#politica-de-privacidade" class="text-orange-500 font-medium hover:underline">Política de Privacidade</a></li>
                <li><a href="#termos-de-uso" class="text-orange-500 font-medium hover:underline">Termos de Uso</a></li>
            </ul>
        </nav>

        <hr class="my-12">

        <section id="politica-de-privacidade">
            <h2 class="text-3xl font-bold text-gray-800">Política de Privacidade</h2>
            <p>Prezamos pela sua privacidade. Esta política detalha como lidamos com as informações em nossa plataforma, o <strong>Toma Cupom</strong>.</p>

            <h3 class="text-2xl font-semibold text-gray-700 mt-6">1. Coleta de Dados</h3>
            <p>Para sua tranquilidade e transparência, informamos que <strong>não coletamos nenhum tipo de dado pessoal</strong> através de formulários em nosso site. A navegação é livre e anônima, sem a necessidade de cadastro ou fornecimento de informações como nome, e-mail ou telefone.</p>

            <h3 class="text-2xl font-semibold text-gray-700 mt-6">2. Cookies e Tecnologias de Rastreamento</h3>
            <p>Nosso site utiliza cookies para otimizar sua experiência de navegação. Esses são pequenos arquivos de texto que armazenam informações anônimas, como preferências e estatísticas de uso. Conforme a Lei Geral de Proteção de Dados (LGPD), exibimos um aviso claro para que você possa gerenciar o uso de cookies ao visitar nosso site.</p>

            <h3 class="text-2xl font-semibold text-gray-700 mt-6">3. Publicidade e Pop-ups</h3>
            <p>O <strong>Toma Cupom</strong> é uma plataforma gratuita mantida através de publicidade. Durante sua navegação, você poderá se deparar com pop-ups e outros formatos de anúncios, que podem ser de redes de publicidade de terceiros ou convites para participar de nossos grupos exclusivos de ofertas no WhatsApp e Telegram.</p>

            <h3 class="text-2xl font-semibold text-gray-700 mt-6">4. Segurança do Site</h3>
            <p>A segurança da sua navegação é uma prioridade. Nosso site possui certificado SSL (Secure Socket Layer), que garante uma conexão criptografada e segura entre seu navegador e nossos servidores.</p>
        </section>

        <hr class="my-12">

        <section id="termos-de-uso">
            <h2 class="text-3xl font-bold text-gray-800">Termos de Uso</h2>
            <p>Ao utilizar o site <strong>Toma Cupom</strong>, você concorda integralmente com os seguintes termos e condições:</p>

            <h3 class="text-2xl font-semibold text-gray-700 mt-6">1. Natureza do Serviço</h3>
            <p>O <strong>Toma Cupom</strong> atua como uma plataforma de curadoria e divulgação de cupons de desconto, ofertas e promoções, obtidos de diversas fontes, incluindo programas de afiliados e lojas parceiras, com o objetivo de centralizar as melhores oportunidades de economia para o usuário.</p>

            <h3 class="text-2xl font-semibold text-gray-700 mt-6">2. Validade dos Cupons e Ofertas</h3>
            <p>Embora nossa equipe se esforce para manter as informações precisas e atualizadas, cupons e ofertas podem ser alterados ou desativados pelas lojas sem aviso prévio. Por essa razão, <strong>não garantimos a funcionalidade de todos os cupons listados</strong>. A responsabilidade final pela validação e aplicação do desconto é exclusiva da loja em que a compra é realizada.</p>

            <h3 class="text-2xl font-semibold text-gray-700 mt-6">3. Links de Afiliados</h3>
            <p>Muitos dos links em nosso site são de afiliados. Ao clicar e realizar uma compra através deles, podemos receber uma comissão, sem nenhum custo adicional para você. Este modelo de negócio nos permite manter a plataforma gratuita.</p>

            <h3 class="text-2xl font-semibold text-gray-700 mt-6">4. Responsabilidade do Usuário</h3>
            <p>É de inteira responsabilidade do usuário verificar as condições, o valor final e as regras de qualquer promoção ou cupom diretamente no site da loja antes de finalizar a transação. O <strong>Toma Cupom</strong> é um intermediário de divulgação e não se responsabiliza por quaisquer problemas ocorridos durante ou após a compra.</p>
        </section>

        <hr class="my-12">

        <section>
            <h2 class="text-3xl font-bold text-gray-800">Contato</h2>
            <p>Para qualquer dúvida ou questão relacionada a esta política, entre em contato conosco através do e-mail: <a href="mailto:privacidade@tomacupom.com.br" class="text-orange-500 hover:underline">privacidade@tomacupom.com.br</a>.</p>
        </section>
        
        <hr class="my-12">

        <section>
            <h2 class="text-3xl font-bold text-gray-800">Alterações na Política</h2>
            <p>Reservamo-nos o direito de alterar esta Política de Privacidade e os Termos de Uso a qualquer momento, a nosso exclusivo critério e sem a necessidade de aviso prévio. Recomendamos a revisão periódica desta página para se manter a par de quaisquer mudanças.</p>
        </section>
    </div>
</main>
@endsection