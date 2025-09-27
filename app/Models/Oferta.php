<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Oferta extends Model
{
    use HasFactory;
    protected $table = 'ofertas';               // NOME DA TABELA NO BD
    protected $primaryKey = 'id_oferta';        // CHAVE PRIMÁRIA
    protected $fillable = [                     // COLUNAS DA TABELA
        'id_loja',
        'titulo',
        'descricao',
        'data_expiracao',
        'link_oferta',
        'imagem',
    ];

    //#########################################################################################################
    // RELACIONAMENTOS
    //#########################################################################################################

    // UMA OFERTA PERTENCE OBRIGATORIAMENTE A UMA LOJA (1-1)
    public function loja()
    {
        return $this->belongsTo(Loja::class, 'id_loja');
    }
}
