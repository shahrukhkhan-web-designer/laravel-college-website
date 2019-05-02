<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Vinayana is approved by All India Council For Technical Education.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" >
    <link rel="stylesheet" href="css/fancybox.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="/image/Vinayana-icon.png" />

    <title>Vinayana- Your best career guardian.It is a co-educational institution in Noida, Delhi.</title>
    <script src="js/jquery.js" ></script>
   @yield('meta-tag')
</head>
<body>
@include('layouts.header')


@yield('content')

@include('layouts.footer')

<script src="js/bootstrap-js/bootstrap.bundle.js"  ></script>


<script src="js/fancybox.min.js"></script>
<script src="{{url('js/custom.js')}}"></script>


</body>
</html>