<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BoutiqueController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\PaiementController;

// Importation des routes externes
require __DIR__ . '/shop.php';

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// ! Route vers l'accueil
Route::get('/', [HomeController::class, 'index'])->name('home');

// ! Transactions
// Facturation
Route::get('/commande/resume', [PaiementController::class, 'resume'])->name('checkout');


Route::post('/paiement', [PaiementController::class, 'payment'])->name('payment');
// Redirection
Route::post('/paiement/resultat', [PaiementController::class, 'returnUrl'])->name('checkout.result');

Route::view('/apropos', 'about')->name('about');

// ! Route vers la recherche d'un article
Route::get('/boutique/recherche', [BoutiqueController::class, 'searchProduct'])
    ->name('products.recherche');

// ! Route vers la boutique
Route::get('/boutique', [BoutiqueController::class, 'index'])->name('boutique');

// ! Route vers le panier
Route::get('/panier', [BoutiqueController::class, 'showCart'])
    ->name('panier');


// ! Route pour la description du produit
Route::get('/produit/{id}', [BoutiqueController::class, 'ProduitApercu'])
    ->name('produit');

//! Route pour le panier
Route::get('/monpanier/{id}', [BoutiqueController::class, 'addStore'])
    ->name('cart.panier');


// ! Route pour ajouter un produit
Route::post('/test', [BoutiqueController::class, 'addProduit'])
    ->name('addProduit');

// ! Route pour mettre a jour la quantité du produit

Route::post('/quantite/update', [BoutiqueController::class, 'updateQuantite'])
    ->name('qte.update');

// ! Route pour supprimer un produit
Route::get('/destroy-product/{id}', [BoutiqueController::class, 'destroyProduit'])
    ->name('produit.destroy');

// ! Route vers la page de commande
Route::get('/verification', [BoutiqueController::class, 'ValidateCommand'])
    ->name('verification');

/*
Route::get('/boutique/ajout', [CartController::class, 'create'])
->name('ajout.session') ;

Route::get('/boutique/destroy', [CartController::class, 'create1'])
->name('destroy.session') ;
*/
