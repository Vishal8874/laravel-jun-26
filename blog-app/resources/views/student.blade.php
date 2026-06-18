<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
</head>
<body>
  <div class="conatainer p-5">
    <h1 class="text-center mb-4">Student List</h1>
    <div class="table-responsive">
      <table class="table table-bordered table-striped align-middle">
        <thead class="table-light">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Course</th>
            <th>semester</th>
            <th>City</th>
          </tr>
        </thead>
        <tbody>
          @if (count($students)>0)
            @foreach ($students as $student )
            <tr>
              <td>{{$student['id']}}</td>
              <td>{{$student['name']}}</td>
              <td>{{$student['email']}}</td>
              <td>{{$student['phone']}}</td>
              <td>{{$student['age']}}</td>
              <td>{{$student['gender']}}</td>
              <td>{{$student['course']}}</td>
              <td>{{$student['semester']}}</td>
              <td>{{$student['city']}}</td>
            </tr>
          @endforeach
          @else
            <div class="alert alert-danger">
              No Student Found
            </div>
          @endif
        </tbody>
      </table>
    </div>

  </div>
</body>
</html>