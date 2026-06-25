<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
      
      <form action="{{ route('student.store') }}" method="POST">
        @csrf
        
        <div class="mb-3">
          <label for="nameInput" class="form-label">Name</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="nameInput" name="name" value="{{ old('name') }}">
          @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="emailInput" class="form-label">Email</label>
          <input type="email" class="form-control @error('email') is-invalid @enderror" id="emailInput" name="email" value="{{ old('email') }}">
          @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="ageInput" class="form-label">Age</label>
          <input type="number" class="form-control @error('age') is-invalid @enderror" id="ageInput" name="age" value="{{ old('age') }}">
          @error('age')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>