<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
Route::middleware('auth')->group(function (){
   
    Route::get('/', function () {
        return view('welcome');
    })->name('home');

   /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    Route::get('/logout', function (Request $request) {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');

    })->name('logout');


    Route::get('icons', \App\Http\Livewire\Utils\Icons::class)->name('admin.icons.index');
    Route::get('minha-conta', \App\Http\Livewire\Users\Profile::class)->name('admin.profile.index');
    Route::get('usuarios', \App\Http\Livewire\Users\ListComponent::class)->name('admin.users.index');
  
    Route::get('usuarios/{user}/edit', \App\Http\Livewire\Users\EditComponent::class)->name('admin.users.edit');
    Route::get('usuarios/{user}/show', \App\Http\Livewire\Users\ShowComponent::class)->name('admin.users.show');

    
    Route::get('roles', \App\Http\Livewire\Roles\ListComponent::class)->name('admin.roles.index');
    Route::get('roles/{role}/edit', \App\Http\Livewire\Roles\EditComponent::class)->name('admin.roles.edit');
    //Route::get('roles/{role}/show', \App\Http\Livewire\Roles\ShowComponent::class)->name('admin.roles.show');
    
    Route::get('permissions', \App\Http\Livewire\Permissions\ListComponent::class)->name('admin.permissions.index');
    Route::get('permissions/{permission}/edit', \App\Http\Livewire\Permissions\EditComponent::class)->name('admin.permissions.edit');
    //Route::get('roles/{role}/show', \App\Http\Livewire\Permissions\ShowComponent::class)->name('admin.roles.show');
 
    Route::get('planos', \App\Http\Livewire\Plans\ListComponent::class)->name('admin.plans.index');
    Route::get('planos/create', \App\Http\Livewire\Plans\CreateComponent::class)->name('admin.plans.create');
    Route::get('planos/{plan}/edit', \App\Http\Livewire\Plans\EditComponent::class)->name('admin.plans.edit');
    //Route::get('roles/{role}/show', \App\Http\Livewire\Permissions\ShowComponent::class)->name('admin.roles.show');

});


Route::get('login', App\Http\Livewire\Auth\Login::class)
->name('login')->middleware('guest');
Route::get('recuperar-senha', App\Http\Livewire\Auth\Password\Forgot::class)
->middleware('guest')->name('password.request');
Route::get('cadastrar-senha/{token}', App\Http\Livewire\Auth\Password\Reset::class)
->middleware('guest')->name('password.reset');