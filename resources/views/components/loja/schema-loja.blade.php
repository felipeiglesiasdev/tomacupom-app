@php
    $urlLoja = "https://www.tomacupom.com.br/cupons/{$loja->slug}";
    $urlSite = "https://www.tomacupom.com.br";
    $logoLoja = "https://cdn.tomacupom.com.br/lojas/{$loja->slug}.webp";
    $schemaBreadcrumb = [
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => [
            [
                '@type' => 'ListItem',
                'position' => 1,
                'item' => [
                    '@id' => $urlSite,
                    'name' => 'Início'
                ]
            ],
            [
                '@type' => 'ListItem',
                'position' => 2,
                'item' => [
                    '@id' => "https://www.tomacupom.com.br/lojas",
                    'name' => 'Lojas'
                ]
            ],
            [
                '@type' => 'ListItem',
                'position' => 3,
                'item' => [
                    '@id' => $urlLoja,
                    'name' => 'Cupons ' . $loja->nome
                ]
            ]
        ]
    ];

@endphp
<script type="application/ld+json">
{!! json_encode($schemaBreadcrumb, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>