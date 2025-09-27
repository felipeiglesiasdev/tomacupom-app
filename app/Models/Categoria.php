<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Categoria extends Model
{
    use HasFactory;
    protected $table = 'categorias';            // NOME DA TABELA NO BD
    protected $primaryKey = 'id_categoria';     // CHAVE PRIMÁRIA
    protected $fillable = [                     // COLUNAS DA TABELA
        'nome',
        'slug',
    ];
    
    //#########################################################################################################
    // RELACIONAMENTOS
    //#########################################################################################################

    // UMA LOJA POSSUI VÁRIAS CATEGORIAS ASSIM COMO UMA CATEGORIA PERTENCE A VÁRIAS LOJAS (N-N) 
    // RELACIONAMENTO N-N VIROU TABELA 'loja_categoria'
    public function lojas()
    {
        return $this->belongsToMany(Loja::class, 'loja_categoria', 'id_categoria', 'id_loja');
    }
}
