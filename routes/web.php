<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PrivacidadeController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\LojasController;
use App\Http\Controllers\CuponsController;
use App\Http\Controllers\BuscaController;
use App\Http\Controllers\SitemapController;



// ROTA PÁGINA INICIAL (HOME)
Route::get('/', [HomeController::class, 'index'])->name('home');
// Rota para a pesquisa em tempo real (AJAX)
Route::get('/busca', [BuscaController::class, 'index'])->name('busca');
//***********************************************************************************************
//***********************************************************************************************
// ROTA POLÍTICA DE PRIVACIDADE
Route::get('/privacidade', [PrivacidadeController::class, 'index'])->name('privacidade');
//***********************************************************************************************
//***********************************************************************************************
// ROTA PARA A PÁGINA DE EXIBIÇÃO DAS CATEGORIAS
Route::get('/categorias', [CategoriasController::class, 'index'])->name('categorias');
// ROTA PARA UMA CATEGORIA ESPECÍFICA
Route::get('/categorias/{categoria}', [CategoriasController::class, 'show'])->name('categorias.show');
//**********************************************************************************************
//***********************************************************************************************
// ROTA PARA A PÁGINA DE EXIBIÇÃO DE TODAS AS LOJAS
Route::get('/lojas', [LojasController::class, 'index'])->name('lojas');
//***********************************************************************************************
//***********************************************************************************************
// ROTA PARA EXIBIR CUPONS DE UMA LOJA ESPECIFICA --> EX.: /cupons/adidas | /cupons/centauro
Route::get('/cupons/{slug}', [CuponsController::class, 'show'])->name('cupons.show');
//***********************************************************************************************
//***********************************************************************************************
// Rota do Sitemap XML
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');