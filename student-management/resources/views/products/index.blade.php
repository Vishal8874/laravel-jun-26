@extends('layouts.app')

@section('content')

<h1 class="text-center mb-5">
    Products List
</h1>

<div class="row g-4">

    @forelse($products as $product)

        <div class="col-md-4">

            <div class="card h-100 shadow-sm">

                <div class="card-body d-flex flex-column">

                    <h5 class="card-title">
                        {{ $product['name'] }}
                    </h5>

                    <p class="card-text">
                        {{ $product['description'] }}
                    </p>

                    <ul class="list-group mb-3">

                        <li class="list-group-item">
                            <strong>ID:</strong>
                            {{ $product['id'] }}
                        </li>

                        <li class="list-group-item">

                            <strong>Colors:</strong>

                            <div class="mt-2">

                                @foreach($product['colors'] as $color)

                                    <span class="badge bg-primary me-1">
                                        {{ $color }}
                                    </span>

                                @endforeach

                            </div>

                        </li>

                        <li class="list-group-item">

                            <strong>Sizes:</strong>

                            <div class="mt-2">

                                @foreach($product['sizes'] as $size)

                                    <span class="badge bg-secondary me-1">
                                        {{ $size }}
                                    </span>

                                @endforeach

                            </div>

                        </li>

                    </ul>

                    <div class="mt-auto d-flex justify-content-between align-items-center">

                        <h5 class="text-success mb-0">
                            ₹{{ $product['price'] }}
                        </h5>

                        <a
                            href="/products/{{ $product['id'] }}"
                            class="btn btn-primary"
                        >
                            View Details
                        </a>

                    </div>

                </div>

            </div>

        </div>

    @empty

        <div class="col-12">

            <div class="alert alert-danger text-center">

                No products found.

            </div>

        </div>

    @endforelse

</div>

@endsection