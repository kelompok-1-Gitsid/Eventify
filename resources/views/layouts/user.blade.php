<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('assets/img/logo2.jpg')}}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{env('MIDTRANS_CLIENT_KEY')}}"></script>
    <title>Eventify</title>
</head>

<body class="font-plusJakarta selection:bg-blue-300 selection:text-black">

    <div class="w-full">
        <x-navbar-user />
    </div>

    <div class="w-full">
        @yield('container')
        {{ $slot }}
    </div>

    <div class="">
        <x-footer-user />
    </div>

</body>
</html>
