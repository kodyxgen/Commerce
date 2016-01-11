@extends('hadron-frontend::layouts.store')

@section('store-content')

    <h1>Shopping Cart</h1>

    @include('hadron-frontend::checkout.products')

    <a class="pull-right" href="{!! URL::to('store/payment') !!}">Purchase</a>

@endsection
