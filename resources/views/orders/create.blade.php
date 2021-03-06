@extends('layouts.app')

@section('content')
    <a href="/orders" class="bnt bnt-default">Go Back</a>
    <h1>Create New Order</h1>
    <form action="{{ route('orders.store') }}" method="POST">
        {{csrf_field()}}
        <div class="row">
            <div class="col-xs-3">
                <div class="form-group">
                    <strong>Order Number:</strong>
                    <input type="text" name="order_number" class="form-control" placeholder="New Order Number">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection