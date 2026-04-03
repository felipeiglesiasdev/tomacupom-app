<?php

namespace App\Http\Controllers;
use App\Models\Loja;
use Illuminate\View\View;
use Illuminate\Http\Request;

class CuponsController extends Controller
{
    public function show(string $slug): View
    {
        // BUSCA A LOJA PELO SLUG E GARANTE QUE ESTÁ ATIVA (STATUS = 1)
        // O 'ID_LOJA' É OBRIGATÓRIO NO SELECT PARA QUE OS RELACIONAMENTOS FUNCIONEM
        $loja = Loja::where('slug', $slug)
            ->where('status', 1)
            ->select([
                'id_loja',
                'nome',
                'titulo_pagina',
                'descricao_pagina',
                'url_site',
                'url_base_afiliado',
                'logo_image_link',
                'alt_text_logo',
                'slug'
            ])
            // CARREGA OS RELACIONAMENTOS (EAGER LOADING) PARA EVITAR O PROBLEMA DE "N+1 QUERIES"
            ->with([
                // TRAZ O SEO ESPECIFICANDO AS COLUNAS EXATAS (PRECISA DO ID_LOJA PARA O VÍNCULO)
                'seo:id_loja,title_seo,description_seo,keywords_seo,text_content_seo',
                
                // TRAZ TODOS OS CUPONS, MAS APENAS OS ATIVOS (STATUS = 1)
                'cupons' => function ($query) {
                    $query->where('status', 1)->orderBy('id_cupom', 'desc');
                },
                
                // TRAZ TODAS AS OFERTAS, MAS APENAS AS ATIVAS (STATUS = 1)
                'ofertas' => function ($query) {
                    $query->where('status', 1)->orderBy('id_oferta', 'desc');
                }
            ])
            ->firstOrFail(); // SE NÃO ACHAR A LOJA OU SE ELA ESTIVER INATIVA, GERA UM ERRO 404
        
        // PEGA OS IDs DAS CATEGORIAS DA LOJA ATUAL
        $categoriaIds = $loja->categorias()->pluck('categorias.id_categoria');

        // BUSCA ATÉ 10 LOJAS SEMELHANTES (DA MESMA CATEGORIA, ATIVAS E DIFERENTES DA LOJA ATUAL)
        $lojasSemelhantes = Loja::whereHas('categorias', function ($query) use ($categoriaIds) {
                $query->whereIn('categorias.id_categoria', $categoriaIds);
            })
            ->where('status', 1)
            ->where('id_loja', '!=', $loja->id_loja)
            ->inRandomOrder()
            ->limit(10)
            ->get(['id_loja', 'nome', 'slug', 'logo_image_link', 'alt_text_logo']);


        // RETORNA A VIEW (resources/views/loja/show.blade.php) E ENVIA OS DADOS
        return view('loja.show', [
            'loja' => $loja,
            'lojasSemelhantes' => $lojasSemelhantes
        ]);
    }
}
