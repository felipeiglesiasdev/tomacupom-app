@props(['loja'])
<title>{{ $loja->seo->title_seo }}</title>
<meta name="description" content="{{ $loja->seo->description_seo }}">
<meta name="keywords" content="{{ $loja->seo->keywords_seo }}">
<meta property="og:site_name" content="Toma Cupom">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.tomacupom.com.br/cupons/{{$loja->slug}}">
<meta property="og:title" content="{{ $loja->seo->title_seo }}">
<meta property="og:description" content="{{ $loja->seo->description_seo }}">
<meta property="og:image" content="{{ $loja->logo_image_link }}">
<meta name="robots" content="index, follow">
<link rel="canonical" href="https://www.tomacupom.com.br/cupons/{{$loja->slug}}">