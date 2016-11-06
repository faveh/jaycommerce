@extends('layouts.master')
@section('title')
    Shopping Cart
@stop
@section('content')
    <div class="content-top ">
        <div class="container ">
    @if(Session::has('cart'))
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <ul class="list-group">
                @foreach($products as $product)
                    <li class="list-group-item">
                        <span class="badge">{{$product['qty']}}</span>
                        <strong>{{$product['item']['title']}}</strong>
                        <span class="label label-success"> &#8358 {{$product['price']}}</span>
                        <div class="btn-group">
                            <button class="btn btn-primary btn-xs dropdown-toggle" type="button" data-toggle="dropdown">
                                Action <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Reduce by 1</a></li>
                                <li><a href="#">Reduce by All</a></li>
                            </ul>
                        </div>
                    </li>
                    @endforeach
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset3">
            <strong>Total:   &#8358 {{ $totalPrice }}</strong>
        </div>
        </div>
        <hr>
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset3">
            <a href="{{ route('checkout')}}" class="btn btn-success" type="button">Checkout</a>
        </div>
    </div>
                    <div class="clearfix"></div>
    @else
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset3">
                <h2>No Items In The Cart!</h2>
            </div>
        </div>
                        <div class="clearfix"></div>
    @endif
</div>
    </div>
    @endsection