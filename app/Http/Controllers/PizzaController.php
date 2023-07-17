<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index(){
        $pizzas = 
        [
            ['type' => 'huwaiian', 'base' => 'cheesy srist'],
            ['type' => 'valcono', 'base' => 'garlic crust'],
            ['type' => 'veg supreme', 'base' => 'thin & crispy']
        ];
        
        return view('pizzas', [
            'pizzas' => $pizzas
            // 'name' => request('name'),
            // 'age' => request('age')
        ]);
    }
    public function show($id){
        return view('details', ['id' => $id]);
    }
}
?>
