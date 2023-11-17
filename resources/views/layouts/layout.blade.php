<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
    @vite('resources/css/app.css')
    <title></title>
</head>

<body>

    <div class="w-full">
        <x-navbar-user />
    </div>

    <div class="w-full">
        @yield('container')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script>

        document.addEventListener('DOMContentLoaded', function(){
            var splide = new Splide('.splide', {
            perPage: 3,
            cover: true,
            height: '10rem',
            lazyLoad: 'nearby',
            breakpoints: {
                height: '6rem',
            },
        });
            splide.mount();
        })


    </script>
</body>

</html>
