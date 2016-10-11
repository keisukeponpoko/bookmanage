<!doctype html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta http-equiv="Pragma" content="no-chache">
    <meta http-equiv="Cache-Control" content="no-chache">
    @include('common.css')
  </head>
  <body>
    @include('common.header')
    <div class="container">
        @if (Session::has('flash_message'))
            <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
        @endif
        @if ($errors->all())
            <div class="alert alert-danger">{{ $errors->all()[0] }}</div>
        @endif

        @yield('content')
    </div>
    @include('common.footer')
  </body>
</html>
