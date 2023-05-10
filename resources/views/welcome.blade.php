<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bem Vindo</title>
</head>
<body>
    {{-- <h1>Bem vindo, {{$apelido}}</h1> --}}
    {{-- <h1>{{1 + 1}}</h1> --}}
    <h2>{{--function()--}}</h2>
    {{-- <h2>rederiza html: {!! $exemplo !!} </h2> --}}
    {{-- <h2>{{$apelido == 'newton' ? 'sim' : 'nao'}}</h2> --}}

    {{-- <h1>condicionais</h1>
    @if($apelido == 'newton')
        <span>e igual</span>
    @elseif ($apelido != 'newton')
        <span>essa conta nao bate</span>
    @else
        <span>e diferente de 2</span>
    @endif --}}

    {{-- <h1>laços de repetição</h1> --}}

    {{-- @for ($i = 0; $i>count($ingredientes); $i++)
        <span>o {{$ingredientes[$i]}}</span>
    @endfor --}}

    {{-- @foreach ($ingredientes as $ingrediente )
        <div> {{$ingrediente}} -
            @component('componentes.botao')
                @slot('cor')
                    blue
                @endslot
                editar
            @endcomponent

            @component('componentes.botao')
                @slot('cor')
                    red
                @endslot
                excluir
            @endcomponent
        </div>
    @endforeach --}}

    {{-- @foreach ($pessoas as $pessoa )
        @component('componentes.botao')
            @slot('url')
                {{$pessoa['image']}}
            @endslot

            @slot('nome')
                {{$pessoa['nome']}}
            @endslot

            @slot('idade')
                {{$pessoa['idade']}}
            @endslot

            @slot('data')
                {{$pessoa['birth']}}
            @endslot
        @endcomponent
    @endforeach --}}

    @foreach ($pessoas as $pessoa)

        {{-- @include('componentes.botao',
        [
            'url' => $pessoa['image'],
            'nome' => $pessoa['nome'],
            'idade' => $pessoa['idade'],
            'data' => $pessoa['birth']
        ]) --}}
        {{-- @include('componentes.botao', $pessoa) --}}
    @endforeach

    {{-- @component('componentes.botao')
        @slot('url')
            {{}}
        @endslot

    @endcomponent --}}


        {{-- @component('componentes.botao')
            <h1>componente teste</h1>
            <p>ola</p>
        @endcomponent --}}

        {{-- <x-componentePersona>

        </x-componentePersona> --}}

</body>
</html>


