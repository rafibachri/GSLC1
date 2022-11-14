<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerMerch;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function () {
//     $product = ["First Step Goods Selen Tatsuki" , "NIJISANJI EN Petit vol.1 Selen Tatsuki"];
//     $price = ["From $3.40 USD", "From $2.24 USD"];
//     $imagePath = ["https://cdn.shopify.com/s/files/1/0577/1254/1891/products/r6X4L45Ai74q2gMZ_200x.jpg?v=1639637820"
//     , "https://cdn.shopify.com/s/files/1/0577/1254/1891/products/KhDu2KR-CYMFtpw_-6Th_200x.jpg?v=1663681368"];
//     $status = ["Open", "Closed"];
//     return view('menu')
//     ->with("product", $product)
//     ->with("price", $price)
//     ->with("image", $imagePath)
//     ->with("status", $status);
// });

Route::get('/home', [ControllerMerch::class, 'data']);