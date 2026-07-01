@extends('layout.app')

@section('content')
    <div class="container mt-5">

        <div class="card shadow">

            <div class="card-header">
                <h2>Add Product</h2>
            </div>

            <div class="card-body">

                <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <!-- Product Name -->

                    <div class="mb-3">

                        <label class="form-label">
                            Product Name
                        </label>

                        <input type="text" name="name" class="form-control" value="{{ old('name') }}">

                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                    </div>

                    <!-- Price -->

                    <div class="mb-3">

                        <label class="form-label">
                            Price
                        </label>

                        <input type="number" step="0.01" name="price" class="form-control"
                            value="{{ old('price') }}">

                        @error('price')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                    </div>

                    <!-- Brand -->

                    <div class="mb-3">

                        <label class="form-label">
                            Brand
                        </label>

                        <input type="text" name="brand" class="form-control" value="{{ old('brand') }}">

                        @error('brand')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                    </div>

                    <!-- Category -->

                    <div class="mb-3">

                        <label class="form-label">
                            Category
                        </label>

                        <input type="text" name="category" class="form-control" value="{{ old('category') }}">

                        @error('category')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                    </div>

                    <!-- Stock -->

                    <div class="mb-3">

                        <label class="form-label">
                            Stock
                        </label>

                        <input type="number" name="stock" class="form-control" value="{{ old('stock') }}">

                        @error('stock')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                    </div>

                    <!-- Colors -->

                    <div class="mb-3">

                        <label class="form-label">
                            Colors
                        </label>

                        <div class="row">

                            @php
                                $selectedColors = old('colors', []);
                            @endphp

                            @foreach (['Black', 'White', 'Blue', 'Red', 'Green', 'Yellow', 'Grey', 'Brown', 'Pink', 'Orange'] as $color)
                                <div class="col-md-3 mb-2">

                                    <div class="form-check">

                                        <input class="form-check-input" type="checkbox" name="colors[]"
                                            value="{{ $color }}" id="color{{ $loop->index }}"
                                            {{ in_array($color, $selectedColors) ? 'checked' : '' }}>

                                        <label class="form-check-label" for="color{{ $loop->index }}">
                                            {{ $color }}
                                        </label>

                                    </div>

                                </div>
                            @endforeach

                        </div>

                        @error('colors')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    <!-- Sizes -->

                    <div class="mb-3">

                        <label class="form-label">
                            Sizes
                        </label>

                        <div class="row">

                            @php
                                $selectedSizes = old('sizes', []);
                            @endphp

                            @foreach (['XS', 'S', 'M', 'L', 'XL', 'XXL', '7', '8', '9', '10', '11', '12', '40mm', '44mm', 'Standard'] as $size)
                                <div class="col-md-3 mb-2">

                                    <div class="form-check">

                                        <input class="form-check-input" type="checkbox" name="sizes[]"
                                            value="{{ $size }}" id="size{{ $loop->index }}"
                                            {{ in_array($size, $selectedSizes) ? 'checked' : '' }}>

                                        <label class="form-check-label" for="size{{ $loop->index }}">
                                            {{ $size }}
                                        </label>

                                    </div>

                                </div>
                            @endforeach

                        </div>

                        @error('sizes')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    <!-- Status -->

                    <div class="mb-3">

                        <label class="form-label">
                            Status
                        </label>

                        <select name="status" class="form-select">

                            <option value="">Select Status</option>

                            <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>
                                Active
                            </option>

                            <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>
                                Inactive
                            </option>

                        </select>

                        @error('status')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                    </div>

                    <!-- Product Image -->

                    <div class="mb-3">

                        <label class="form-label">
                            Product Image
                        </label>

                        <input type="file" name="image" class="form-control">

                        @error('image')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                    </div>

                    <!-- Description -->

                    <div class="mb-3">

                        <label class="form-label">
                            Description
                        </label>

                        <textarea name="description" rows="5" class="form-control">{{ old('description') }}</textarea>

                        @error('description')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                    </div>

                    <button type="submit" class="btn btn-primary">
                        Save Product
                    </button>

                    <a href="{{ route('product.home') }}" class="btn btn-secondary">
                        Back
                    </a>

                </form>

            </div>

        </div>

    </div>
@endsection
