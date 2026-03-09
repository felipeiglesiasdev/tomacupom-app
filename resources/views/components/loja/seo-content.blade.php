@props(['content'])

@if(!empty($content))
    <div>
        <!-- 
            O Tailwind reseta os estilos padrão (preflight). 
            Estas classes [&_tag] aplicam o visual correto no HTML que vem do banco de dados. 
        -->
        <div class="text-gray-700
            [&_h1]:text-3xl [&_h1]:font-bold [&_h1]:text-neutral-900
            [&_h2]:text-2xl [&_h2]:font-bold [&_h2]:text-neutral-800
            [&_p]:text-base
            [&_ul]:list-disc [&_ul]:ml-5
            [&_ol]:list-decimal [&_ol]:ml-5
            [&_img]:max-w-full [&_img]:h-auto [&_img]:rounded-lg [&_img]:mx-auto
            [&_a]:text-blue-600 [&_a]:underline hover:[&_a]:text-blue-800
        ">
            {!! html_entity_decode($content) !!}
        </div>
    </div>
@endif