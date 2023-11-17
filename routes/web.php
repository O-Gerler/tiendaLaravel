<?php

use App\Http\Controllers\CancionController;
use App\Http\Controllers\ProfileController;
use App\Models\Planta;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function (Request $request) {

    $user = $request->user();
    
    $datos = [
        'nombre' => $user->name,
        'email' => $user->email,
        'admin' => $user->admin ? 'Si' : 'No'
    ];

    return view('dashboard')->with($datos);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/listadoTodos', function() {
    $users = User::all();

    return view('listadoTodos')->with('users',$users);
})->name('listadoTodos');

Route::get('/insertarPlanta', function() {
    return view('insertarPlanta');
})->name('insertarPlanta');

Route::post('/insertarPlanta', function(Request $request) {
    //Meter los datos en la bbdd
    $nombre = $request->input('nombre');
    $categoria = $request->input('categoria');
    $precio = $request->input('precio');
    $cantidad = $request->input('cantidad');

    DB::table('plantas')->insert([
        'nombre' => $nombre,
        'categoria' =>$categoria,
        'precio' => $precio,
        'cantidad' => $cantidad,
    ]);
    //Redireccionar
    return redirect()->route('dashboard');
})->name('insertarPlanta');

Route::get('/verPlantas', function() {
    $plantas = Planta::all();

    return view('verPlantas')->with('plantas', $plantas);
})->name('verPlantas');

Route::get('/eliminarPlanta/{id}', function($id) {
    $planta = Planta::find($id);

    if ($planta) $planta->delete();
    return redirect('dashboard');
})->name('eliminarPlanta');

Route::resource('cancion', CancionController::class)
  ->only(['index','create','store','destroy','edit','update'])
  ->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
