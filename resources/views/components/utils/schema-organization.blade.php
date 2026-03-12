@php
    $schemaOrganization = [
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => 'Toma Cupom',
        'url' => 'https://www.tomacupom.com.br',
        'logo' => 'https://cdn.tomacupom.com.br/images/logo-toma-cupom-fundo-branco.webp'
    ];
@endphp
<script type="application/ld+json">
{!! json_encode($schemaOrganization, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>