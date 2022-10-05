<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ========== Start Section  PLUGIN CSS ========== -->
    {{-- Fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Bootstrap 4 --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    {{-- SCROLL CSS --}}
    <link rel="stylesheet" href="{{ url('/') }}/css/plugins/OverlayScrollbars.min.css">
    {{-- SCROLL CSS --}}
    <link rel="stylesheet" href="{{ url('/') }}/css/ownstyle.css">

    {{-- ADMINLTE --}}
    <link rel="stylesheet" href="{{ url('/') }}/css/plugins/adminlte.min.css">


    {{-- Google Fonts --}}
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- ========== End Section PLUGIN CSS ========== -->

    



    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('modulos.header')

        @include('modulos.sidebar')

        @yield('content')
        
        @include('modulos.footer')
    </div>

    <!-- ========== Start Section PLUGINS JS ========== -->

    {{-- JQUERY --}}
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>

    {{-- BOOTSTRAP JS --}}
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    {{-- FONT AWESOME JS --}}
    <script src="https://kit.fontawesome.com/eeaede5d80.js" crossorigin="anonymous"></script>

    {{-- SCROLL JS --}}
    <script src="{{ url('/') }}/js/plugins/jquery.overlayScrollbars.min.js"></script>

    {{-- ADMINLTE JS --}}
    <script src="{{ url('/') }}/js/plugins/adminlte.js"></script>
    {{-- REGISTRAR TERMINACION JS --}}
    <script src="{{ url('/') }}/js/registroTerminacion.js"></script>


    <!-- ========== End Section PLUGINS JS ========== -->

</body>

</html>
