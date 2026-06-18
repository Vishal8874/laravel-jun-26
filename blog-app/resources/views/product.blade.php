<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container py-5 w-80%">
    <h1 class="text-center mb-5">Products List</h1>

    <div class="row g-4">

        @if (count($products) > 0)
        @foreach($products as $product)
            <div class="col-md-4">
                <div class="card h-100">

                    <div class="card-body">
                        <h5 class="card-title">
                            {{ $product['name'] }}
                        </h5>

                        

                        <p class="card-text">
                            {{ $product['description'] }}
                        </p>

                        <ul class="list-group list-group-flush mb-3">
                            <li class="list-group-item">
                                <strong>ID:</strong>
                                {{ $product['id'] }}
                            </li>

                            <li class="list-group-item">
                                <strong>Colors:</strong>
                                <div class="d-flex gap-2">
                                  @foreach ($product['colors'] as $color)
                                  <span class="badge bg-info me-1">
            {{ $color }}
        </span>
                                @endforeach
                                </div>
                            </li>

                            <li class="list-group-item">
                                <strong>Sizes:</strong>
                                @foreach ($product['sizes'] as $size)
                                <span class="badge bg-success me-1">
            {{ $size }}
        </span>
                                @endforeach
                            </li>
                        </ul>

                        <div class="d-flex justify-content-between">
                          <h6 class="text-success mb-0">
                              ₹{{ $product['price'] }}
                          </h6>
                          <a href="#" class="btn btn-primary">
                            View Details
                        </a>
                        </div>
                    </div>

                </div>
            </div>
        @endforeach

        @else
          <div class="alert alert-danger">
            No products found
          </div>
        @endif

    </div>
</div>

</body>
</html>