@php
    $schemaWebSite = [
        '@context' => 'https://schema.org',
        '@type' => 'WebSite',
        'name' => 'Toma Cupom',
        'url' => 'https://www.tomacupom.com.br'
    ];
@endphp
<script type="application/ld+json">
{!! json_encode($schemaWebSite, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>