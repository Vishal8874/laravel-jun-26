@extends('layouts.app')

@section('content')

<div class="container">

    <div class="card shadow">

        <div class="card-header">
            <h2>Student Information</h2>
        </div>

        <div class="card-body">

            <p>
                <strong>Name:</strong>
                {{ $student['name'] }}
            </p>

            <p>
                <strong>Email:</strong>
                {{ $student['email'] }}
            </p>

            <p>
                <strong>Age:</strong>
                {{ $student['age'] }}
            </p>

        </div>

    </div>

</div>

@endsection