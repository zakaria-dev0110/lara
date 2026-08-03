<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body class="d-flex justify-content-center align-items-center min-vh-100">
    <div class="container my-4">
    <div class="col d-flex justify-content-center align-items-center m-4">
        <a href="/" class="{{ request()->is("/") ? 'nav-link active' : '' }} m-1">Home</a>
        <a href="/about" class="{{ request()->is("about") ? 'nav-link active' : '' }} m-1">About</a>
        <a href="/contact" class="{{ request()->is("contact") ? 'nav-link active' : '' }} m-1">Contact</a>
    </div>
    <div class="col d-flex justify-content-center align-items-center">
        {{ $slot }}
    </div>
    </div>

  </body>
</html>