<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jannatul Faria</title>

    {{-- <!-- bootstrap --> --}}
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    {{-- <!-- animation-css --> --}}
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css') }}"/>
    {{-- <!-- main-css --> --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- <!-- responsive --> --}}
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    {{-- <!-- icon --> --}}
    <link rel="shortcut icon" href="{{ asset('imges/01logo.png') }}">


</head>

<body>
    <div class="port">
        <div class="container ">

            @include('Layout.header')
               @yield('content')






        </div>

        @include('Layout.footer')

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    {{-- <!-- font-awsome --> --}}
    <script src="https://kit.fontawesome.com/25da5e552d.js" crossorigin="anonymous"></script>
    {{-- <!-- jquery --> --}}
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    {{-- <!-- wow-js --> --}}
    <script src="{{ asset('js/wow.min.js') }}"></script>
    {{-- <!-- main-js --> --}}
    <script src="{{ asset('js/index.js') }}"></script>

</body>
</html>
