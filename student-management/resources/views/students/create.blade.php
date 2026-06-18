@extends('layouts.app')

@section('content')

<h1>Add Student</h1>

<form action="/add-student" method="POST">

    @csrf

    <div class="mb-3">

        <label>Name</label>

        <input
            type="text"
            name="name"
            class="form-control"
            value="{{ old('name') }}"
        >
        @error('name')

    <div class="text-danger">

        {{ $message }}

    </div>

@enderror

    </div>

    <div class="mb-3">

        <label>Email</label>

        <input
            type="email"
            name="email"
            class="form-control"
            value="{{ old('email') }}"
        >
        @error('email')

    <div class="text-danger">

        {{ $message }}

    </div>

@enderror

    </div>

    <div class="mb-3">

        <label>Age</label>

        <input
            type="number"
            name="age"
            class="form-control"
            value="{{ old('age') }}"
        >
        @error('age')

    <div class="text-danger">

        {{ $message }}

    </div>

@enderror

    </div>

    <button
        type="submit"
        class="btn btn-primary"
    >
        Submit
    </button>
    <a href="{{route('students.index')}} " class="btn btn-primary">Back</a>

</form>

@endsection