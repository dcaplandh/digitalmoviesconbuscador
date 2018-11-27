<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Digital Movies</title>
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Coda" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/app.js"></script>

</head>
<body class="netflix">
  <div class="container">
    <div class="contain">

        <h1>D<span>M</span> :: Digital <span>Movies</span></h1>
        @include('layouts.navbar')
        <h2>@yield('titulo')</h2>
        @yield('listas')

  </div>
</div>
</body>
</html>
