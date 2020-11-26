@extends('layouts.app')

@section('content')
    <a href="/orders" class="bnt bnt-default">Go Back</a>
        <h1>Your Order</h1>
        <div>
            <h3>ID# {{$order->id}}</h3>
            <h3>Order# {!!$order->order_number!!}</h3>
        </div>
@endsection