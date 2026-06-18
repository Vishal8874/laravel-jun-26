@extends('layouts.app')

@section('content')

<div class="container">

    <h1 class="mb-4">Edit Student</h1>

    <form action="{{ route('students.update', $student->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">

            <label class="form-label">Name</label>

            <input
                type="text"
                name="name"
                class="form-control"
                value="{{ old('name', $student->name) }}"
            >

            @error('name')
                <div class="text-danger mt-1">
                    {{ $message }}
                </div>
            @enderror

        </div>

        <div class="mb-3">

            <label class="form-label">Email</label>

            <input
                type="email"
                name="email"
                class="form-control"
                value="{{ old('email', $student->email) }}"
            >

            @error('email')
                <div class="text-danger mt-1">
                    {{ $message }}
                </div>
            @enderror

        </div>

        <div class="mb-3">

            <label class="form-label">Age</label>

            <input
                type="number"
                name="age"
                class="form-control"
                value="{{ old('age', $student->age) }}"
            >

            @error('age')
                <div class="text-danger mt-1">
                    {{ $message }}
                </div>
            @enderror

        </div>

        <div class="mb-3">

            <label class="form-label">Course</label>

            <input
                type="text"
                name="course"
                class="form-control"
                value="{{ old('course', $student->course) }}"
            >

            @error('course')
                <div class="text-danger mt-1">
                    {{ $message }}
                </div>
            @enderror

        </div>

        <div class="mb-3">

            <label class="form-label">City</label>

            <input
                type="text"
                name="city"
                class="form-control"
                value="{{ old('city', $student->city) }}"
            >

            @error('city')
                <div class="text-danger mt-1">
                    {{ $message }}
                </div>
            @enderror

        </div>

        <button type="submit" class="btn btn-primary">
            Update Student
        </button>

        <a href="{{ route('students.index') }}" class="btn btn-secondary">
            Back
        </a>

    </form>

</div>

@endsection