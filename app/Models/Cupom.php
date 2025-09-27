<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cupom extends Model
{
    use HasFactory;

    protected $table = 'cupons';                // NOME DA TABELA NO BD
    protected $primaryKey = 'id_cupom';         // CHAVE PRIMÁRIA

    protected $fillable = [                     // COLUNAS DA TABELA
        'id_loja',
        'titulo',
        'descricao',
        'regras',
        'codigo',
        'data_expiracao',
        'link_redirecionamento',
    ];
    
    //#########################################################################################################
    // RELACIONAMENTOS
    //#########################################################################################################

    // UM CUPOM PERTENCE OBRIGATORIAMENTE A UMA LOJA (1-1)
    public function loja()
    {
        return $this->belongsTo(Loja::class, 'id_loja');
    }
}
