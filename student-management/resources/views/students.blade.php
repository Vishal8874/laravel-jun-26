<h1>Welcome to Laravel</h1>
@foreach($students as $student)

    <h2>{{ $student['name'] }}</h2>
    <h2>{{ $student['course'] }}</h2>

@endforeach