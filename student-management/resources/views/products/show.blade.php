@extends('layouts.app')

@section('content')

<div class="row justify-content-center">

    <div class="col-md-8">

        <div class="card shadow">

            <div class="card-header">

                <h2 class="mb-0">
                    {{ $product['name'] }}
                </h2>

            </div>

            <div class="card-body">

                <p>
                    <strong>ID:</strong>
                    {{ $product['id'] }}
                </p>

                <p>
                    <strong>Description:</strong>
                    {{ $product['description'] }}
                </p>

                <p>
                    <strong>Price:</strong>

                    <span class="text-success fw-bold">
                        ₹{{ $product['price'] }}
                    </span>
                </p>

                <div class="mb-3">

                    <strong>Available Colors:</strong>

                    <div class="mt-2">

                        @foreach($product['colors'] as $color)

                            <span class="badge bg-primary me-1">
                                {{ $color }}
                            </span>

                        @endforeach

                    </div>

                </div>

                <div class="mb-3">

                    <strong>Available Sizes:</strong>

                    <div class="mt-2">

                        @foreach($product['sizes'] as $size)

                            <span class="badge bg-secondary me-1">
                                {{ $size }}
                            </span>

                        @endforeach

                    </div>

                </div>

                <a href="/products" class="btn btn-dark">
                    Back to Products
                </a>

            </div>

        </div>

    </div>

</div>

@endsection