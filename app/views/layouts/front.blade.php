<html>

  <head>
    <?= stylesheet_link_tag() ?>
    <?= javascript_include_tag() ?>
  </head>
  <body>

    <h1>Lilly and Roeland . com</h1>
    <div class="container">
        @yield('content')
    </div>
  </body>
</html>