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

            <div class="row">

                <!-- Product Image -->

                <div class="col-md-4 text-center">

                    <img
                        src="{{ asset('uploads/products/'.$product->image) }}"
                        class="img-fluid rounded border shadow"
                        style="max-height:300px"
                    >

                </div>

                <!-- Product Information -->

                <div class="col-md-8">

                    <table class="table table-bordered table-striped">

                        <tr>
                            <th width="220">ID</th>
                            <td>{{ $product->id }}</td>
                        </tr>

                        <tr>
                            <th>Name</th>
                            <td>{{ $product->name }}</td>
                        </tr>

                        <tr>
                            <th>Slug</th>
                            <td>{{ $product->slug }}</td>
                        </tr>

                        <tr>
                            <th>Category</th>
                            <td>{{ $product->category }}</td>
                        </tr>

                        <tr>
                            <th>Brand</th>
                            <td>{{ $product->brand }}</td>
                        </tr>

                        <tr>
                            <th>Price</th>
                            <td class="text-success fw-bold">
                                ₹{{ number_format($product->price,2) }}
                            </td>
                        </tr>

                        <tr>
                            <th>Stock</th>
                            <td>

                                <span class="badge bg-info">

                                    {{ $product->stock }}

                                </span>

                            </td>
                        </tr>

                        <tr>
                            <th>Status</th>

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

                        </tr>

                        <tr>

                            <th>Colors</th>

                            <td>

                                @foreach($product->colors ?? [] as $color)

                                    <span class="badge bg-primary">

                                        {{ $color }}

                                    </span>

                                @endforeach

                            </td>

                        </tr>

                        <tr>

                            <th>Sizes</th>

                            <td>

                                @foreach($product->sizes ?? [] as $size)

                                    <span class="badge bg-secondary">

                                        {{ $size }}

                                    </span>

                                @endforeach

                            </td>

                        </tr>

                        <tr>

                            <th>Description</th>

                            <td>

                                {{ $product->description }}

                            </td>

                        </tr>

                        <tr>

                            <th>Created At</th>

                            <td>

                                {{ $product->created_at->format('d M Y h:i A') }}

                            </td>

                        </tr>

                        <tr>

                            <th>Updated At</th>

                            <td>

                                {{ $product->updated_at->format('d M Y h:i A') }}

                            </td>

                        </tr>

                    </table>

                </div>

            </div>

            <hr>

            <div class="mt-3">

                <a
                    href="{{ route('product.edit', $product->id) }}"
                    class="btn btn-warning"
                >
                    Edit Product
                </a>

                <form
                    action="{{ route('product.delete', $product->id) }}"
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