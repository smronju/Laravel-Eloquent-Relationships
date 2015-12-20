<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">

  <title>Eloquent Relationships &mdash; @yield('title')</title>

  <link href=" {{ asset('assets/css/styles.css') }}" rel="stylesheet">
</head>

<body>

  @include('partials.navigation')

  <div class="container">

    <div class="row">
      
      <div class="col-md-12">
        @yield('content')
      </div>

    </div>

  </div>

  @include('partials.footer')

  @yield('footer')

</body>
</html>
