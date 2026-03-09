<?php

namespace App\Http\Controllers;
use App\Models\Loja;
use Illuminate\Http\Request;

class BuscaController extends Controller
{
    public function index(Request $request)
    {
        // Pega o termo digitado
        $termo = $request->get('q') ?? $request->get('search_term_string');

        // Se o termo for muito curto ou vazio, retorna logo um array vazio (JSON)
        if (!$termo || strlen($termo) < 2) {
            return response()->json([]);
        }

        // Faz a busca na base de dados (apenas lojas ativas)
        $lojas = Loja::where('status', 1)
            ->where('nome', 'LIKE', '%' . $termo . '%')
            ->orderBy('nome', 'asc')
            ->limit(5) // Limita a 5 resultados para não estourar o dropdown
            ->get(['nome', 'slug', 'logo_image_link']);

        // Retorna estritamente os dados em formato JSON para o Alpine.js montar o dropdown
        return response()->json($lojas);
    }
}