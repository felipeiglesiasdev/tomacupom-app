<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach($lojas as $loja)
        <url>
            <loc>https://www.tomacupom.com.br/cupons/{{$loja->slug}}</loc>
        </url>
    @endforeach
</urlset>