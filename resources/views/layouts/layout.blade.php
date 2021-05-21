<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('libs/datatables/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/bootstrap/css/bootstrap.min.css') }}">
    <title>Home</title>
</head>
<body>
    <nav class="navbar sticky-top navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand"><h3>Telesentinel</h3></a>
        </div>
      </nav>
      @yield('content')
    <script src="{{ asset('libs/jquery-3.6.0.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('libs/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('asset/js/home.js') }}"></script>
    <script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>
