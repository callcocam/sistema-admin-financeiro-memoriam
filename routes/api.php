<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->post('/incomes/create', function (Request $request) {
    $income = \App\Models\Admin\Income::create($request->all());
    if($income){
        $income->finance()->create([
            'value' => form_w($request->get('value')),
            'due_at' => $request->get('due_at'),
            'status' => $request->get('status'),
            'description' => $request->get('description'),
        ]);
        return response()->json("Created success full", 201);
    }

    return  response()->json("Created not success full", 500);
});

Route::middleware('auth:api')->post('/expenses/create', function (Request $request) {
    $expense = \App\Models\Admin\Expense::create($request->all());
    if($expense){
        $expense->finance()->create([
            'value' => form_w($request->get('value')),
            'due_at' => $request->get('due_at'),
            'status' => $request->get('status'),
            'description' => $request->get('description'),
        ]);
        return response()->json("Created success full", 201);
    }

    return  response()->json("Created not success full", 500);
});
