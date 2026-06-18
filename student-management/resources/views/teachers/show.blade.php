@extends('layouts.app')

@section('content')

<div class="row justify-content-center">

    <div class="col-md-8">

        <div class="card shadow">

            <div class="card-header bg-success text-white">

                <h2 class="mb-0">
                    {{ $teacher['name'] }}
                </h2>

            </div>

            <div class="card-body">

                <p>
                    <strong>ID:</strong>
                    {{ $teacher['id'] }}
                </p>

                <p>
                    <strong>Email:</strong>
                    {{ $teacher['email'] }}
                </p>

                <p>
                    <strong>Subject:</strong>
                    {{ $teacher['subject'] }}
                </p>

                <p>
                    <strong>Experience:</strong>
                    {{ $teacher['experience'] }}
                </p>

                <a href="/teachers" class="btn btn-dark">
                    Back to Teachers
                </a>

            </div>

        </div>

    </div>

</div>

@endsection