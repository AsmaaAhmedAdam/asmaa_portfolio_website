<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Asmaa_Portfolio_{!! !empty($meta_title)? $meta_title : '' !!}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Template Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700" rel="stylesheet">

    <!-- Template CSS Files -->
    <link href="{{ url('public/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('public/css/preloader.min.css ') }}" rel="stylesheet">
    <link href="{{ url('public/css/circle.css') }}" rel="stylesheet">
    <link href="{{ url('public/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ url('public/css/fm.revealator.jquery.min.css') }}" rel="stylesheet">
    <link href="{{ url('public/css/style.css') }}" rel="stylesheet">

    <!-- CSS Skin File -->
    <link href="{{ url('public/css/skins/red.css') }}" rel="stylesheet">

    <!-- Live style Switcher -->
    <link rel="alternate stylesheet" type="text/css" title="blue" href="{{url('public/css/skins/blue.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="blueviolet" href="{{url('public/css/skins/blueviolet.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="goldenrod" href="{{url('public/css/skins/goldenrod.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="green" href="{{url('public/css/skins/green.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="magenta" href="{{url('public/css/skins/magenta.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="orange" href="{{url('public/css/skins/orange.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="purple" href="{{url('public/css/skins/purple.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="red" href="{{url('public/css/skins/red.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="yellow" href="{{url('public/css/skins/yellow.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="yellowgreen" href="{{url('public/css/skins/yellowgreen.css')}}" />

    <!-- Modernizr JS File -->
    <script src="{{url('public/js/modernizr.custom.js')}}"></script>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


    <script>

      // Enable pusher logging - don't include this in production
      Pusher.logToConsole = true;

      var pusher = new Pusher('a6a81d4478accd498c32', {
        cluster: 'mt1'
      });

      var channel = pusher.subscribe('webNotify');
      channel.bind('user-message', function(data) {
        toastr.success(JSON.stringify(data.name) +'Welcom To My Portfolio ');

      });
    </script>
</head>

<body class="{!! !empty($className) ? $className : '' !!}">


@include('layouts.sidebar')
@yield('content')

<!-- Template JS Files -->
<script src="{{url('public/js/jquery-3.5.0.min.js')}}"></script>
<script src="{{url('public/js/preloader.min.js')}}"></script>
<script src="{{url('public/js/fm.revealator.jquery.min.js')}}"></script>
<script src="{{url('public/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{url('public/js/masonry.pkgd.min.js')}}"></script>
<script src="{{url('public/js/classie.js')}}"></script>
<script src="{{url('public/js/cbpGridGallery.js')}}"></script>
<script src="{{url('public/js/jquery.hoverdir.js')}}"></script>
<script src="{{url('public/js/popper.min.js')}}"></script>
<script src="{{url('public/js/bootstrap.js')}}"></script>
<script src="{{url('public/js/custom.js')}}"></script>


</body>

</html>
