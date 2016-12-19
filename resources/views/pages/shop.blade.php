@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center">Shop</div>
                <div class="panel-body">
                    <form class="form-horizontal" method ="POST" action="/processcart">
                        <!-- <div>Product Name</div> -->
                        {{ csrf_field() }}
                        @foreach ($products as $product)
                            <div>
                                <div>
                                    Name: {{ $product->product_name }} 
                                </div>
                                <div>
                                    Description: {{ $product->product_desc }}
                                </div>
                                <div>
                                    Price: {{ $product->buy_price }}
                                </div>
                                <div>
                                    Stock: {{ $product->quantity_stock }}
                                </div>
                                <div>
                                    Status: {{ $product->status }}
                                </div>
                                <div class="text-center">

                                    Buy This Item? 
                                    <input type='hidden' value='No' name="{{ $product->product_name }}">
                                    <input name="{{ $product->product_name }}" type="checkbox" value="Yes">

                                </div>
                                <div class="text-center">
                                    How Many Orders? <input type="text" name="{{$product->product_id}}" id="{{$product->product_id}}">
                                </div>
                                <hr> 
                            </div> 

                            

                        @endforeach
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Adopt!!
                                </button>
                            </div>
                        </div>                         
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection