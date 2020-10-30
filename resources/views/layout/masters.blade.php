<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Space Science Website Template</title>
    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/mobile.css')}}">
    <script src="{{asset('asset/js/mobile.js')}}" type="text/javascript"></script>
</head>
<body>


   @include('partials/nav')

   <div class="container">
    @yield('objects')
   </div>


</body>

</html>
