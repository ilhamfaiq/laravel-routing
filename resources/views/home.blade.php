<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
         <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet">


        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="card text-center">
          <div class="card-header">
            Notif
          </div>
          <div class="card-body">
            <h5 class="card-title">Berhasil</h5>
            <p class="card-text">Masuk </p>
            <a href="#" class="btn btn-primary">Kembali</a>
          </div>
          <div class="card-footer text-muted">
            2 days ago
          </div>
        </div>
    </body>
</html>
