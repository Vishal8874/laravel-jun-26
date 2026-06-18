@extends('layouts.app')

@section('content')

<div class="row justify-content-center">

    <div class="col-md-8">

        <div class="card shadow">

            <div class="card-header bg-primary text-white">

                <h2 class="mb-0">
                    {{ $student['name'] }}
                </h2>

            </div>

            <div class="card-body">

                <p>
                    <strong>ID:</strong>
                    {{ $student['id'] }}
                </p>

                <p>
                    <strong>Email:</strong>
                    {{ $student['email'] }}
                </p>

                <p>
                    <strong>Age:</strong>
                    {{ $student['age'] }}
                </p>

                <p>
                    <strong>Course:</strong>
                    {{ $student['course'] }}
                </p>

                <p>
                    <strong>City:</strong>
                    {{ $student['city'] }}
                </p>

                <a href="{{route('students.index')}}" class="btn btn-dark">
                    Back to Students
                </a>

            </div>

        </div>

    </div>

</div>

@endsection