<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>@yield('title') | Super Gestão</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>

<body>
    @include('site.layouts._partials.topo')
    @yield('conteudo')
</body>

</html>
