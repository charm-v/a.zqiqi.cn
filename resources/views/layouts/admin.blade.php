<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>赵七七后台 - @yield('title')</title>

</head>
<body>

    @section('nav')
        admin-nav
        @show


    <div class="container">
        <p>父级content</p>
        @yield('conten')
    </div>


</body>
</html>