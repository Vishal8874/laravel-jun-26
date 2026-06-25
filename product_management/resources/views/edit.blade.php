@extends('layout.app')

@section('content')

<div class="container mt-5">

<div class="card shadow">

    <div class="card-header">
        <h2>Edit Product</h2>
    </div>

    <div class="card-body">

        <form
            action="{{ route('product.update', $product->id) }}"
            method="POST"
        >

            @csrf
            @method('PUT')

            <div class="mb-3">

                <label class="form-label">
                    Product Name
                </label>

                <input
                    type="text"
                    name="name"
                    class="form-control"
                    value="{{ old('name', $product->name) }}"
                >

                @error('name')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Price
                </label>

                <input
                    type="number"
                    step="0.01"
                    name="price"
                    class="form-control"
                    value="{{ old('price', $product->price) }}"
                >

                @error('price')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Brand
                </label>

                <input
                    type="text"
                    name="brand"
                    class="form-control"
                    value="{{ old('brand', $product->brand) }}"
                >

                @error('brand')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Stock
                </label>

                <input
                    type="number"
                    name="stock"
                    class="form-control"
                    value="{{ old('stock', $product->stock) }}"
                >

                @error('stock')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Description
                </label>

                <textarea
                    name="description"
                    rows="4"
                    class="form-control"
                >{{ old('description', $product->description) }}</textarea>

                @error('description')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <button
                type="submit"
                class="btn btn-warning"
            >
                Update Product
            </button>

            <a
                href="{{ route('product.home') }}"
                class="btn btn-secondary"
            >
                Back
            </a>

        </form>

    </div>

</div>


</div>

@endsection
