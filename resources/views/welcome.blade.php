<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>agri-eight</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/styles.css">

        <meta name="csrf-token" content="{{ csrf_token() }}">
        
    </head>
    <body>
      <div id="app">
        <div class="conteiner">
          <header>
            <header-component></header-component>
          </header>
          <nav>
            <navbar-component></navbar-component>
          </nav>
          <main>
            <example-component></example-component>
          </main>
          <footer>

          </footer>
        </div>
      </div>
      <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
