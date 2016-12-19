@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center"><strong> Order Details </strong> </div>
                <div class="panel-body">
                    @foreach ($order->orderdetail as $detail)
		                <div class="panel-body">
		                    <strong> Product Name: </strong> {{ $detail->product->product_name}}
		                </div>
		                <div class="panel-body">
		                    <strong> Product Description: </strong> {{ $detail->product->product_desc}}
		                </div>
		                <div class="panel-body">
		                    <strong> Quantity Ordered: </strong> {{ $detail->quantity_ordered }}
		                </div>
		                <hr>
                    @endforeach
                </div>
            	<div class="form-group">
                    <div class="panel-body">
                    	<button type="button" class="btn btn-primary btn-block" onclick="window.location='{{ url('/userprofile') }}'">Go Back To User Profile</button>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
