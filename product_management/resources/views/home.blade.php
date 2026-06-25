@extends('layout.app')

@section('content')


<div class="container mt-5">
@if(session('success'))
         <div class="alert alert-success alert-dismissible fade show">

        {{ session('success') }}

        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="alert"
        ></button>

    </div>
        @endif
    <div class="d-flex justify-content-between align-items-center mb-4">
        

        <h1>Products List</h1>

        <a
            href="{{ route('product.create') }}"
            class="btn btn-primary"
        >
            Add Product
        </a>

    </div>

    <div class="card shadow">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle">

                    <thead class="table-dark">

                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Brand</th>
                            <th>Stock</th>
                            <th width="250">Action</th>
                        </tr>

                    </thead>

                    <tbody>

                        @forelse($products as $product)

                            <tr>

                                <td>{{ $product->id }}</td>

                                <td>{{ $product->name }}</td>

                                <td>₹{{ $product->price }}</td>

                                <td>{{ $product->brand }}</td>

                                <td>{{ $product->stock }}</td>

                                <td>

                                    <a
                                        href="{{route('product.show', $product->id)}}"
                                        class="btn btn-info btn-sm"
                                    >
                                        View
                                    </a>

                                    <a
                                        href="{{route('product.edit', $product->id)}}"
                                        class="btn btn-warning btn-sm"
                                    >
                                        Edit
                                    </a>

                                    <form
                                        action="{{route('product.delete', $product->id)}}"
                                        method="POST"
                                        class="d-inline"
                                    >

                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure you want to delete this product?')"
                                        >
                                            Delete
                                        </button>

                                    </form>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="6" class="text-center text-danger">

                                    No Products Found

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>
@endsection 