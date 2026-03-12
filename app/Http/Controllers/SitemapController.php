<?php

namespace App\Http\Controllers;

use App\Models\Loja;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    /**
     * Gera o sitemap.xml com as páginas estáticas e todas as lojas ativas.
     */
    public function index(): Response
    {
        // Busca apenas as lojas ativas (status = 1)
        // Selecionamos o slug (para a URL) e o updated_at (para a data de última modificação)
        $lojas = Loja::where('status', 1)
            ->select('slug', 'updated_at')
            ->orderBy('id_loja', 'desc')
            ->get();

        // Retorna a view formatada como XML
        return response()
            ->view('sitemap', compact('lojas'))
            ->header('Content-Type', 'text/xml');
    }
}