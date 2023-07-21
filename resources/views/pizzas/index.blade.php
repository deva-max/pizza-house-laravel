
            
            @extends('layouts.layout')

                @section('content')
                    <div class="wrapper pizza-index">
                        <h1>Pizza Orders</h1>
                        @foreach ($pizzas as $pizza)
                            <div class="pizza-item">
                                <img src="/img/pizza.png" alt="pizza icon">
                                {{ $pizza->name }}
                            </div>
                        @endforeach
                    </div>
                       
                @endsection
                

                    
                

