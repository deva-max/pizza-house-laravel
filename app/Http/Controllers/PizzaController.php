<?php

namespace App\Http\Controllers;

use App\Models\Pizza as ModelsPizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    // public function __construct(){
    //     $this->middleware('auth');
    // }
    public function index(){
        // $pizzas = ModelsPizza::all();
        // $pizzas = ModelsPizza::orderBy('name', 'desc')->get();
        // $pizzas = ModelsPizza::where('type', 'hawaiian')->get();
        $pizzas = ModelsPizza::Latest()->get();
        return view('pizzas.index', [
            'pizzas' => $pizzas
            // 'name' => request('name'),
            // 'age' => request('age')
        ]);
    }
    public function create(){
        return view('pizzas.create');
    }
    public function show($id){
        $pizza = ModelsPizza::findOrFail($id);
        return view('pizzas.show', ['pizza' => $pizza]);        
    }
    public function store(){ 

        $pizza = new ModelsPizza;

        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');

        //return request('toppings');
        $pizza->save();
        return redirect('/')->with('mssg', 'Thanks for your order');
    }
    public function destroy($id){
        $pizza = ModelsPizza::findOrFail($id);
        $pizza->delete();

        return redirect('/pizzas');
    }
}
?>
