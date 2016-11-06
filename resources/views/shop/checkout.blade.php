@extends('layouts.master')
@section('title')
   Checkout
@stop
@section('content')
    <div class="content-top ">
        <div class="container ">
        	<div class="row">
        		<div class="col-sm-6 col-md-6 col-md-offset-4 col-sm-offset-4">
        			<h1>Checkout</h1>
        			<h4>Your Total: &#8358 {{ $total }}</h4>
        			<div id="charge-error" class="alert alert-danger {{ !Session::has('error') ? 'hidden' : '' }}">
        				{{ Session::get('error') }}
        			</div>
        			<form action="{{ route('checkout') }}" method="post" id="checkout-form">
        				<div class="row">
        					<div class="col-xs-12">
        						<div class="form-group">
        							<label for="name">Name</label>
        							<input type="text" name="name" id="name" class="form-control" required>
        						</div>
        					</div>
        					<div class="col-xs-12">
        						<div class="form-group">
        							<label for="address">Address</label>
        							<input type="text" name="address" id="address" class="form-control" required>
        						</div>
        					</div>
        					
        				</div>
        				{{ csrf_field() }}
        				<button type="submit" class="btn btn-success">Buy Now</button>
        			</form>
        		</div>
        	</div>
        </div>
    </div>    		
 @endsection 


 @section('scripts')
 	<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
 	<script type="text/javascript" src="{{ URL::to('js/web/js/checkout.js') }}"></script>
 @endsection      			