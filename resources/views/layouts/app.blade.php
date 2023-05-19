<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <x-nav>
        <h1>esse e meu nav fix</h1>
    </x-nav>

    <x-main>
        @yield('content')
    </x-main>

    <x-footer>
        <h1>esse e meu footer fix</h1>
    </x-footer>
    {{-- @section('footer')
    <h1>este e o conteudo footer</h1>
    @show --}}
</body>
</html>
