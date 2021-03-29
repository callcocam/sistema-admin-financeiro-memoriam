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

//    Route::get('/', function () {
//
//       $expensesMonth =  app(\App\Models\Expense::class)->_lastMonths();
//       $incomesMonth =  app(\App\Models\Income::class)->_lastMonths();
//       $expensesFuture =  app(\App\Models\Expense::class)->_nextMonths();
//       $overdueExpenses =  app(\App\Models\Expense::class)->_nextMonths();
//       $cashValue = Calcular($incomesMonth, $expensesMonth, '-');
//        return view('welcome', compact('incomesMonth','expensesMonth','overdueExpenses','expensesFuture','cashValue'));
//    })->name('home');

    Route::get('/', \App\Http\Livewire\DashboardComponent::class)->name('home');


    Route::get('/load-clients-api', function (\App\Services\ClientService $clientService) {
        $clients = $clientService->get();
        //\App\Models\Client::query()->forceDelete();
        foreach ($clients as $client){
            $new = \App\Models\Client::query()->find( $client->id);
            if (!$new){
                \App\Models\Client::factory(1)->create([
                   'id'=>$client->id,
                   'name'=>$client->name,
                   'document'=>$client->cnpj,
                ]);
            }
            else{
                $new->name = $client->name;
                $new->document = $client->cnpj;
                $new->save();
            }
        }
        return redirect()->route('admin.clients.index');
    })->name('admin.load-clients.api');


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
    //Route::get('usuarios/{user}/show', \App\Http\Livewire\Users\ShowComponent::class)->name('admin.users.show');


    Route::get('roles', \App\Http\Livewire\Roles\ListComponent::class)->name('admin.roles.index');
    Route::get('roles/{role}/edit', \App\Http\Livewire\Roles\EditComponent::class)->name('admin.roles.edit');
    //Route::get('roles/{role}/show', \App\Http\Livewire\Roles\ShowComponent::class)->name('admin.roles.show');

    Route::get('permissions', \App\Http\Livewire\Permissions\ListComponent::class)->name('admin.permissions.index');
    Route::get('permissions/{permission}/edit', \App\Http\Livewire\Permissions\EditComponent::class)->name('admin.permissions.edit');
    //Route::get('roles/{role}/show', \App\Http\Livewire\Permissions\ShowComponent::class)->name('admin.roles.show');

    Route::get('planos', \App\Http\Livewire\Plans\ListComponent::class)->name('admin.plans.index');
    Route::get('planos/create', \App\Http\Livewire\Plans\CreateComponent::class)->name('admin.plans.create');
    Route::get('planos/{plan}/edit', \App\Http\Livewire\Plans\EditComponent::class)->name('admin.plans.edit');
    Route::get('planos/{plan}/show', \App\Http\Livewire\Plans\ShowComponent::class)->name('admin.plans.show');

    Route::get('clientes', \App\Http\Livewire\Clients\ListComponent::class)->name('admin.clients.index');
    Route::get('clientes/cadastrar', \App\Http\Livewire\Clients\CreateComponent::class)->name('admin.clients.create');
    Route::get('clientes/{client}/editar', \App\Http\Livewire\Clients\EditComponent::class)->name('admin.clients.edit');

    Route::get('fornecedores', \App\Http\Livewire\Providers\ListComponent::class)->name('admin.providers.index');
    Route::get('fornecedores/cadastrar', \App\Http\Livewire\Providers\CreateComponent::class)->name('admin.providers.create');
    Route::get('fornecedores/{provider}/editar', \App\Http\Livewire\Providers\EditComponent::class)->name('admin.providers.edit');


    Route::get('api/credencials', \App\Http\Livewire\Credentials\ListComponent::class)->name('admin.credentials.index');
    Route::get('api/credencials/create', \App\Http\Livewire\Credentials\CreateComponent::class)->name('admin.credentials.create');
    Route::get('api/credencials/{credential}/edit', \App\Http\Livewire\Credentials\EditComponent::class)->name('admin.credentials.edit');

    Route::get('receitas', \App\Http\Livewire\Incomes\ListComponent::class)->name('admin.incomes.index');
    Route::get('receitas/cadastrar', \App\Http\Livewire\Incomes\CreateComponent::class)->name('admin.incomes.create');
    Route::get('receitas/{income}/editar', \App\Http\Livewire\Incomes\EditComponent::class)->name('admin.incomes.edit');


    Route::get('despesas', \App\Http\Livewire\Expenses\ListComponent::class)->name('admin.expenses.index');
    Route::get('despesas/cadastrar', \App\Http\Livewire\Expenses\CreateComponent::class)->name('admin.expenses.create');
    Route::get('despesas/{expense}/editar', \App\Http\Livewire\Expenses\EditComponent::class)->name('admin.expenses.edit');


    Route::get('translations', \App\Http\Livewire\Translations\ListComponent::class)->name('admin.translations.index');
    Route::get('translations/cadastrar', \App\Http\Livewire\Translations\CreateComponent::class)->name('admin.translations.create');
    Route::get('translations/{translation}/editar', \App\Http\Livewire\Translations\EditComponent::class)->name('admin.translations.edit');

});


Route::get('login', App\Http\Livewire\Auth\Login::class)
->name('login')->middleware('guest');
Route::get('recuperar-senha', App\Http\Livewire\Auth\Password\Forgot::class)
->middleware('guest')->name('password.request');
Route::get('cadastrar-senha/{token}', App\Http\Livewire\Auth\Password\Reset::class)
->middleware('guest')->name('password.reset');
