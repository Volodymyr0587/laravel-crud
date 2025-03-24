@extends('products.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Laravel CRUD</h2>
        </div>
        <div class="pull-right mb-4">
            <a href="{{ route('products.create') }}" class="btn btn-success">Create New Product</a>
        </div>
    </div>
</div>

@if ($message = session()->get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Details</th>
        <th>Category</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->details }}</td>
            <td>{{ $product->category->name }}</td>
            <td>
                <form action="{{ route('products.destroy', $product) }}" method="POST">

                    <a href="{{ route('products.show', $product) }}" class="btn btn-info">Show</a>
                    <a href="{{ route('products.edit', $product) }}" class="btn btn-primary">Edit</a>

                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure?');" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

<div>
    {{ $products->links() }}
</div>

@endsection
