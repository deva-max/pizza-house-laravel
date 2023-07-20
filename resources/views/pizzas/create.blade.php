@extends('layouts.layout')

                @section('content')
                    <div class="wrapper create-pizza">
                        <h1>Create a New Pizza</h1>
                        <form action="/pizzas" method="POST">
                            @csrf
                            <label for="name">Your name:</label>
                            <input type="text" id="name" name="name">
                            <label for="type">Choose Pizza Type:</label>
                            <select name="type" id="type">
                                <option value="margarita">margarita</option>
                                <option value="hawaiian">hawaiian</option>
                                <option value="veg supreme">veg supreme</option>
                                <option value="valcano">valcano</option>
                            </select>
                            <label for="base">Choose base Type:</label>
                            <select name="base" id="base">
                                <option value="chessy crust">chessy crust</option>
                                <option value="garlic crust">garlic crust</option>
                                <option value="thin & crispy">thin & crispy</option>
                                <option value="thick">Thick</option>
                            </select>
                            <label for="">Extra Toppings:</label>
                            <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms<br/>
                            <input type="checkbox" name="toppings[]" value="pepers">Pepers<br/>
                            <input type="checkbox" name="toppings[]" value="garlic">Garlic<br/>
                            <input type="checkbox" name="toppings[]" value="olives">Olives<br/>
                            <input type="submit" value="Order Pizza">
                        </form>
                    </div>
                    
                @endsection