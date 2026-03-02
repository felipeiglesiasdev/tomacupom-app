{{--
    Seção que exibe uma grade com os logotipos das lojas parceiras.
--}}
<section id="lojas-parceiras" class="py-16 sm:py-24 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h3 class="text-2xl font-bold text-[#171717]">Marcas que Você Ama, Preços que Você Adora</h3>
        </div>

        {{-- Grade de logos --}}
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6 items-center">
            {{-- Logos de exemplo. Isso será dinâmico no futuro. --}}
            @for ($i = 0; $i < 12; $i++)
                <div class="p-4 bg-white rounded-xl shadow-sm hover:shadow-lg transition-shadow duration-300">
                    <img src="{{ asset('images/lojas/teste.png') }}" alt="Logo da Loja" class="mx-auto h-12 w-auto object-contain">
                </div>
            @endfor
        </div>

         <div class="text-center mt-12">
            <a href="{{ route('lojas') }}" class="text-orange-500 font-semibold hover:text-orange-600 transition-colors">
                Ver todas as lojas <i class="bi bi-arrow-right-short"></i>
            </a>
        </div>
    </div>
</section>
