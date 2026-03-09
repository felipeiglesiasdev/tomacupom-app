<?php
namespace App\Http\Controllers;
use App\Models\Loja;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Carbon\Carbon; 
use Illuminate\Support\Facades\Cache;
class LojasController extends Controller
{

    // FUNÇÃO RESPONSÁVEL POR EXIBIR TODAS AS LOJAS 
    // ROTA --> /lojas
    public function index(): View
    {
        // CACHEIA A CONSULTA DIARIAMENTE (86400 SEGUNDOS = 24 HORAS)
        // A CHAVE DO CACHE SERÁ 'LOJAS_ATIVAS_INDEX'
        $lojas = Cache::remember('lojas_ativas_index', 86400, function () {
            
            // BUSCA APENAS AS LOJAS ATIVAS (STATUS = 1), EM ORDEM ALFABÉTICA
            // E RETORNA APENAS AS COLUNAS NECESSÁRIAS PARA A VIEW
            return Loja::where('status', 1)
                        ->orderBy('nome', 'asc')
                        ->get(['nome', 'slug', 'logo_image_link', 'alt_text_logo']);
        });

        // RETORNA A VIEW 'PAGES.LOJAS' E PASSA A COLEÇÃO DE LOJAS EM CACHE PARA ELA
        return view('pages.lojas', [
            'lojas' => $lojas
        ]);
    }
}

