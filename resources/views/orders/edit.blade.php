@extends('layouts.app')

@section('content')
    <a href="/orders" class="bnt bnt-default">Go Back</a>
    <h1>Edit Order</h1>
    {!! Form::open(['action' => ['OrdersController@update', $order->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('order_number', 'Order Number')}}
            {{Form::text('order_number', $order->order_number, ['class' => 'form-control', 'placeholder' => 'Updated Order Number'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Update', ['class'=> 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection