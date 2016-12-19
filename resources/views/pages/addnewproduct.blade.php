@extends('layouts.app')

@section('content')

    
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center">Add a New Product</div>
                <div class="panel-body">
                    <form class="form-horizontal" method ="POST" action="/products">
                    	<!-- <div>Product Name</div> -->
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('product_name') ? ' has-error' : '' }}">
                            <label for="product_name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="product_name" type="text" class="form-control" name="product_name" value="{{ old('product_name') }}" required autofocus>

                                @if ($errors->has('product_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('product_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('product_desc') ? ' has-error' : '' }}">
                            <label for="product_desc" class="col-md-4 control-label">Description</label>

                            <div class="col-md-6">
                                <input id="product_desc" type="text" class="form-control" name="product_desc" value="{{ old('product_desc') }}" required autofocus>

                                @if ($errors->has('product_desc'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('product_desc') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('quantity_stock') ? ' has-error' : '' }}">
                            <label for="quantity_stock" class="col-md-4 control-label">Quantity Stock</label>

                            <div class="col-md-6">
                                <input id="quantity_stock" type="text" class="form-control" name="quantity_stock" value="{{ old('quantity_stock') }}" required autofocus>

                                @if ($errors->has('quantity_stock'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('quantity_stock') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('buy_price') ? ' has-error' : '' }}">
                            <label for="product_desc" class="col-md-4 control-label">Buy Price</label>

                            <div class="col-md-6">
                                <input id="buy_price" type="text" class="form-control" name="buy_price" value="{{ old('buy_price') }}" required autofocus>

                                @if ($errors->has('buy_price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('buy_price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                            <label for="product_desc" class="col-md-4 control-label">Status</label>

                            <div class="col-md-6">
                                <input id="status" type="text" class="form-control" name="status" value="{{ old('status') }}" required autofocus>

                                @if ($errors->has('status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Add Product
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

<!-- $buy_price = int($buy_price)
$quantity_stock = int($quantity_stock)

 -->
<!--                      	<div class="form-group">
                    		<label for="product_name" class="col-md-4 control-label">Name</label>
                    		<div class="col-md-6">
                    			<input id="product_name" type="text" class="form-control" name="product_name" required >
                    		</div>
                    	</div>

                    	<div class="form-group">
                    		<label for="name" class="col-md-4 control-label">Description</label>
                    		<div class="col-md-6">
                    			<textarea name="product_desc" class="form-control" required autofocus> </textarea>
                    		</div>
                    	</div>
                    	<div class="form-group">
                    		<label for="buy_price" class="col-md-4 control-label">Price</label>
                    		<div class="col-md-6">
                    			<input id="buy_price" type="text" class="form-control" name="buy_price" required >
                    		</div>
                    	</div>
                    	<div class="form-group">
                    		<label for="quantity_stock" class="col-md-4 control-label">Quantity Stock</label>
                    		<div class="col-md-6">
                    			<input id="quantity_stock" type="text" class="form-control" name="quantity_stock" required >
                    		</div>
                    	</div>
                    	<div class="form-group">
                    		<label for="status" class="col-md-4 control-label">Status</label>
                    		<div class="col-md-6">
                    			<input id="status" type="text" class="form-control" name="status" required >
                    		</div>
                    	</div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Add Product
                                </button>
                            </div>
                        </div> -->