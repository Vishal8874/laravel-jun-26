@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center">
  <h1 class="text-center mb-4">
    Students List
</h1>
<a href="/add-student" class="btn btn-primary">Add Student</a>
</div>

<div class="card shadow">

    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-bordered table-hover table-striped align-middle">

                <thead class="table-dark">

                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Age</th>
                        <th>Course</th>
                        <th>City</th>
                        <th>Action</th>
                    </tr>

                </thead>

                <tbody>

                    @forelse($students as $student)

                        <tr>

                            <td>{{ $student['id'] }}</td>
                            <td>{{ $student['name'] }}</td>
                            <td>{{ $student['email'] }}</td>
                            <td>{{ $student['phone'] }}</td>
                            <td>{{ $student['age'] }}</td>
                            <td>{{ $student['course'] }}</td>
                            <td>{{ $student['city'] }}</td>

                            <td>

                                <a
                                    href="{{ route('students.show', $student['id']) }}"
                                    class="btn btn-primary btn-sm"
                                >
                                    View
                                </a>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="8" class="text-center text-danger">

                                No students found.

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection