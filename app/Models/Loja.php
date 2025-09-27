<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Loja extends Model
{
    use HasFactory;
    protected $table = 'lojas';             // NOME DA TABELA NO BD
    protected $primaryKey = 'id_loja';      // CHAVE PRIMÁRIA
    protected $fillable = [                 // COLUNAS DA TABELA
        'nome',
        'slug',
        'url_oficial',
        'texto_seo',
        'logo',
    ];

    //#########################################################################################################
    // RELACIONAMENTOS
    //#########################################################################################################

    // UMA LOJA POSSUI VARIOS CUPONS (1-N)
    public function cupons() 
    {
        return $this->hasMany(Cupom::class, 'id_loja');
    }
    //---------------------------------------------------------------------------------------------------------

    // UMA LOJA POSSUI VÁRIAS OFERTAS (1-N)
    public function ofertas()
    {
        return $this->hasMany(Oferta::class, 'id_loja');
    }
    //---------------------------------------------------------------------------------------------------------

    // UMA LOJA POSSUI VÁRIAS CATEGORIAS ASSIM COMO UMA CATEGORIA PERTENCE A VÁRIAS LOJAS (N-N) 
    // RELACIONAMENTO N-N VIROU TABELA 'loja_categoria'
    public function categorias()
    {
        return $this->belongsToMany(Categoria::class, 'loja_categoria', 'id_loja', 'id_categoria');
    }
        
    
}
