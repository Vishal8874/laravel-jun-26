<!DOCTYPE html>
<html>
<head>
    <title>Laravel Learning Project</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

@include('common.navbar')

<div class="container py-5">
    @if(session('success'))

    <div class="alert alert-success">
        {{ session('success') }}
    </div>

@endif

@if(session('error'))

    <div class="alert alert-danger">
        {{ session('error') }}
    </div>

@endif
    @yield('content')

</div>

</body>
</html>