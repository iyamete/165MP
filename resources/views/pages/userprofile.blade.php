@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center"><strong> User Profile </strong> </div>

                <div class="panel-body">
                    <strong> Name: </strong> {{ $user->name }}
                </div>
                <div class="panel-body">
                    <strong> Username:  </strong> {{ $user->username }}
                </div>
                <div class="panel-body">
                    <strong> Email:  </strong> {{ $user->email }}
                </div>
                <div class="form-group">
                    <div class="panel-body">
                    	<button type="button" class="btn btn-primary btn-block" onclick="window.location='{{ url('/edituserprofile') }}'">Edit User Profile</button>
                            
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center"><strong> Order History of {{ $user->name }} </strong> </div>

                <div class="panel-body">
                    @foreach ($orders as $order)
                        <div>
                            <div>
                                Order ID: 
                                <a href="{{ url('/showproducts') }}/{{$order->order_id}}"> {{ $order->order_id }} </a>
                                
                            </div>
                        </div>
                    @endforeach
                </div>
        </div>
    </div>
</div>
@endsection
