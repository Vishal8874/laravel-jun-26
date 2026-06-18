@extends('layouts.app')

@section('content')

<h1 class="text-center mb-4">
    Teachers List
</h1>

<div class="card shadow">

    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-bordered table-hover table-striped align-middle">

                <thead class="table-dark">

                    <tr>

                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Experience</th>
                        <th>Action</th>

                    </tr>

                </thead>

                <tbody>

                    @forelse($teachers as $teacher)

                        <tr>

                            <td>{{ $teacher['id'] }}</td>
                            <td>{{ $teacher['name'] }}</td>
                            <td>{{ $teacher['email'] }}</td>
                            <td>{{ $teacher['subject'] }}</td>
                            <td>{{ $teacher['experience'] }}</td>

                            <td>

                                <a
                                    href="/teachers/{{ $teacher['id'] }}"
                                    class="btn btn-primary btn-sm"
                                >
                                    View
                                </a>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="6" class="text-center text-danger">

                                No teachers found.

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection