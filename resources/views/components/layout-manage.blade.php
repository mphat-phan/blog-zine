<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @yield('meta_tags')
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/bootstrapIcon.css')}}" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Varela+Round&display=swap');
        </style>
</head>

<body>

    <x-navbar-manage></x-navbar-manage>
    <main class="bg-dark-tertiary">
        <div class="container-lg pt-4 pb-4">
            {{$slot}}
        </div>
    </main>
    <x-footer-manage></x-footer-manage>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/myScript.js')}}"></script>
</body>

</html>
