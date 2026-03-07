<?php
namespace App\Http\Controllers;
use App\Models\Loja;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Carbon\Carbon; 
class LojasController extends Controller
{

    public function index(): View
    {
        // Busca apenas as colunas necessárias, em ordem alfabética.
        $lojas = Loja::orderBy('nome', 'asc')
                        ->get(['id_loja', 'nome', 'slug', 'logo']);

        // Retorna a view 'pages.lojas' e passa a coleção de lojas para ela
        return view('pages.lojas', [
            'lojas' => $lojas
        ]);
    }

    public function show(string $slug): View
    {
        // Busca a loja pelo slug ou falha (retorna 404)
        $loja = Loja::where('slug', $slug)->firstOrFail();

        // Transforma a coleção de cupons em um array simples, apenas com os dados necessários
        $cupons = $loja->cupons->map(function ($cupom) {
            return [
                'titulo' => $cupom->titulo,
                'descricao' => $cupom->descricao,
                'regras' => $cupom->regras,
                'codigo' => $cupom->codigo,
                'link_redirecionamento' => $cupom->link_redirecionamento,
                'data_expiracao' => $cupom->data_expiracao ? Carbon::parse($cupom->data_expiracao)->format('d/m/Y') : 'Sem data de expiração',
            ];
        });

        // Transforma a coleção de ofertas em um array simples
        $ofertas = $loja->ofertas->map(function ($oferta) {
            return [
                'titulo' => $oferta->titulo,
                'descricao' => $oferta->descricao,
                'link_oferta' => $oferta->link_oferta,
                'imagem' => $oferta->imagem,
                'data_expiracao' => $oferta->data_expiracao ? Carbon::parse($oferta->data_expiracao)->format('d/m/Y') : 'Sem data de expiração',
            ];
        });

        // Transforma o objeto loja em um array para consistência
        $lojaData = [
            'nome' => $loja->nome,
            'url_oficial' => $loja->url_oficial,
            'descricao_header' => $loja->descricao_header,
        ];

        return view('loja.show', [
            'title' => "Cupons de Desconto {$loja->nome} | " . date('m/Y'),
            'description' => "Encontre os melhores cupons de desconto e ofertas para a loja {$loja->nome}. Economize agora em suas compras online.",
            'loja' => $lojaData,
            'cupons' => $cupons,
            'ofertas' => $ofertas,
        ]);
    }
}

