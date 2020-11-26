@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1>Orders</h1>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('orders.create') }}"> Create New Order</a>
            </div>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>ID No.</th>
            <th>Order Number</th>
            <th>Created</th>
            <th>Updated</th>
            <th width="300px">Action</th>
        </tr>
        @foreach ($orders as $order)
        <tr>
            <td>{{ $order->id}}</td>
            <td>{{ $order->order_number}}</td>
            <td>{{ $order->created_at}}</td>
            <td>{{ $order->updated_at}}</td>
            <td>
                <form action="{{ route('orders.destroy', $order->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('orders.show',$order->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('orders.edit',$order->id) }}">Edit</a>
                    {{-- <a class="btn btn-primary" href="{{ route('orders.destroy',$order->id) }}">Delete This</a> --}}
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {!! $orders->links() !!}
@endsection