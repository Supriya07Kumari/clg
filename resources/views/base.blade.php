<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <a href="{{route('homePage')}}" class="navbar-brand">College Finder</a>
        <ul class="navbar-nav ml-auto">
           <li class="nav-link"><a href="{{route('insertPage')}}" class="btn btn-outline-light">Insert</a></li>
        </ul>
    </nav>
    @yield('content')
</body>
</html>