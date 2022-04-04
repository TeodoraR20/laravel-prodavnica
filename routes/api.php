<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

use App\Models\User;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
Session::forget('user');

    return redirect('login');
});

Route::view('/register','register');

Route::post("/login",[UserController::class,'login']);
Route::post("/register",[UserController::class,'register']);
Route::get("/",[ProductController::class,'index']);
Route::get("detail/{id}",[ProductController::class,'detail']);
//Route::get("search",[ProductController::class,'search']);
Route::post("add_to_cart",[ProductController::class,'addToCart']);
//cart umesto cartlist
Route::get("cart",[ProductController::class,'cartList']);

Route::get("removecart/{id}",[ProductController::class,'removeCart']);

Route::get("ordernow",[ProductController::class,'orderNow']);


Route::post("orderplace",[ProductController::class,'orderPlace']);

Route::get("myorders",[ProductController::class,'myOrders']);

//API

Route::get('users',function(){

return User::all();

});

//post za usera
Route::post('/users',function(){

return User::create([

'name' =>request('name'),
'email'=>request('email'),
'password'=>request('password'),


]);

});


//post za product

Route::post('/products',function(){

    return Product::create([
    
    'name' =>request('name'),
    'price'=>request('price'),
    'category'=>request('category'),
    'description'=>request('description'),
    'gallery'=>request('gallery'),
    
    ]);
    
    });


    //put za usera

Route::put('/users/{$user}',function(User $user){

$user->update([

'name'=>request('name'),
'email'=>request('email'),
'password'=>request('password'),

]);

});

//delete za korisnika

Route::delete('/users/{user}',function(User $user){

$user->delete();


});


//delete za product

Route::delete('/products/{product}',function(Product $product){
    $product->delete();

});







    


