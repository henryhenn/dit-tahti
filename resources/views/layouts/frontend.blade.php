<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>STARBUK DITTAHTI POLDA NTB</title>
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/b/b4/Lambang_Polda_NTB.png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
<main>
    <x-navbar/>
</main>

@yield('content')

<div class="container mx-auto mt-6">
    <main class="shadow-2xl">
        <x-footer/>
    </main>
</div>
</body>
</html>
