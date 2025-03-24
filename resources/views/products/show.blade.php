@extends('products.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Product: {{ $product->name }}</h2>
        </div>
        <div class="pull-right mb-4">
            <a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name: </strong>
            {{ $product->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
        <div class="form-group">
            <strong>Details: </strong>
            {{ $product->details }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 mt-4">
        <div class="form-group">
            <strong>Category: </strong>
            {{ $product->category->name }}
        </div>
    </div>
</div>


@endsection
