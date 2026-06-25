@extends('layout.app')

@section('content')

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header d-flex justify-content-between align-items-center">

            <h2>Product Details</h2>

            <a
                href="{{ route('product.home') }}"
                class="btn btn-secondary"
            >
                Back
            </a>

        </div>

        <div class="card-body">

            <table class="table table-bordered">

                <tr>
                    <th width="200">ID</th>
                    <td>{{ $product->id }}</td>
                </tr>

                <tr>
                    <th>Name</th>
                    <td>{{ $product->name }}</td>
                </tr>

                <tr>
                    <th>Price</th>
                    <td>₹{{ $product->price }}</td>
                </tr>

                <tr>
                    <th>Brand</th>
                    <td>{{ $product->brand }}</td>
                </tr>

                <tr>
                    <th>Stock</th>
                    <td>{{ $product->stock }}</td>
                </tr>

                <tr>
                    <th>Description</th>
                    <td>{{ $product->description }}</td>
                </tr>

                <tr>
                    <th>Created At</th>
                    <td>{{ $product->created_at }}</td>
                </tr>

                <tr>
                    <th>Updated At</th>
                    <td>{{ $product->updated_at }}</td>
                </tr>

            </table>

            <div class="mt-3">

                <a
                    href="{{ route('product.edit', $product->id) }}"
                    class="btn btn-warning"
                >
                    Edit Product
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
                        class="btn btn-danger"
                        onclick="return confirm('Are you sure you want to delete this product?')"
                    >
                        Delete Product
                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

@endsection