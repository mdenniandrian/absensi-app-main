<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <link rel="shortcut icon" href="{{ asset('storage/sugitylogo.png') }}" type='image/x-icon' />
    <title>
        @yield('title') | Sugity Creatives
    </title>

</head>

<body class="mx-auto bg-slate-200 container-fluid">
    <div class="">
        @yield('content')
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>

</html>
