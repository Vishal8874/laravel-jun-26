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

    @if(session('error'))

        <div class="alert alert-danger alert-dismissible fade show">

            {{ session('error') }}

            <button
                type="button"
                class="btn-close"
                data-bs-dismiss="alert"
            ></button>

        </div>

    @endif

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h2>Product Management</h2>

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

                            <th>#No.</th>

                            <th>Image</th>

                            <th>Name</th>

                            <th>Category</th>

                            <th>Brand</th>

                            <th>Price</th>

                            <th>Stock</th>

                            <th>Status</th>

                            <th>Colors</th>

                            <th>Sizes</th>

                            <th width="220">Action</th>

                        </tr>

                    </thead>

                    <tbody>

                    @forelse($products as $product)

                        <tr>

                            <td>{{ $loop->iteration}}</td>

                            <td>

                                <img
                                    src="{{ asset('uploads/products/'.$product->image) }}"
                                    width="70"
                                    height="70"
                                    class="rounded border object-fit-cover"
                                >

                            </td>

                            <td>

                                <strong>{{ $product->name }}</strong>

                                <br>

                                <small class="text-muted">

                                    {{ $product->slug }}

                                </small>

                            </td>

                            <td>{{ $product->category }}</td>

                            <td>{{ $product->brand }}</td>

                            <td>

                                <strong class="text-success">

                                    ₹{{ number_format($product->price,2) }}

                                </strong>

                            </td>

                            <td>

                                <span class="badge bg-info">

                                    {{ $product->stock }}

                                </span>

                            </td>

                            <td>

                                @if($product->status == 'active')

                                    <span class="badge bg-success">

                                        Active

                                    </span>

                                @else

                                    <span class="badge bg-danger">

                                        Inactive

                                    </span>

                                @endif

                            </td>

                            <td>

                                @foreach($product->colors as $color)

                                    <span class="badge bg-primary">

                                        {{ $color }}

                                    </span>

                                @endforeach

                            </td>

                            <td>

                                @foreach($product->sizes as $size)

                                    <span class="badge bg-secondary">

                                        {{ $size }}

                                    </span>

                                @endforeach

                            </td>

                            <td>

                                <a
                                    href="{{ route('product.show',$product->id) }}"
                                    class="btn btn-info btn-sm"
                                >
                                    View
                                </a>

                                <a
                                    href="{{ route('product.edit',$product->id) }}"
                                    class="btn btn-warning btn-sm"
                                >
                                    Edit
                                </a>

                                <form
                                    action="{{ route('product.delete',$product->id) }}"
                                    method="POST"
                                    class="d-inline"
                                >

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Delete this product?')"
                                    >
                                        Delete
                                    </button>

                                </form>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="11" class="text-center text-danger">

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