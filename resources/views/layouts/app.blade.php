<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>@yield('title-block')</title>
    <link rel="stylesheet" href="/public/css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>

  @include('inc.header')

  @if(Request::is('/'))
      @include('inc.hero')
  @endif

  <div class="container mt-5">
      <div class="row">
           <div class="col-8">
               @yield('content')
           </div>
          <div class="col-4">
              @include('inc.aside')
          </div>
      </div>
  </div>

  @include('inc.footer')

</body>
</html>
