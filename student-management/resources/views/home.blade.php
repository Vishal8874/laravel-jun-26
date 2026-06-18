@extends('layouts.app')

@section('content')

<div class="text-center">

    <h1 class="mb-4">
        Welcome Vishal 🚀
    </h1>

    <p class="lead">
        This project is built to learn Laravel fundamentals.
    </p>

</div>

<div class="row mt-5">

    <div class="col-md-4">

        <div class="card text-center shadow">

            <div class="card-body">

                <h3>Students</h3>

                <p>
                    View all students information.
                </p>

                <a href="/students" class="btn btn-primary">
                    View Students
                </a>

            </div>

        </div>

    </div>

    <div class="col-md-4">

        <div class="card text-center shadow">

            <div class="card-body">

                <h3>Products</h3>

                <p>
                    View all available products.
                </p>

                <a href="/products" class="btn btn-success">
                    View Products
                </a>

            </div>

        </div>

    </div>

    <div class="col-md-4">

        <div class="card text-center shadow">

            <div class="card-body">

                <h3>Teachers</h3>

                <p>
                    View all teachers information.
                </p>

                <a href="/teachers" class="btn btn-warning">
                    View Teachers
                </a>

            </div>

        </div>

    </div>

</div>

@endsection