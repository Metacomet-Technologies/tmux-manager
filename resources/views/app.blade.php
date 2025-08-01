<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Server Manager Styles -->
        <link rel="stylesheet" href="{{ route('server-manager.assets', 'css/app.css') }}">

        <!-- WebSocket Configuration -->
        <script>
            window.serverManagerConfig = {
                websocketEnabled: {{ config('server-manager.websocket_enabled', false) ? 'true' : 'false' }},
                prefix: '{{ config('server-manager.web.prefix', 'server-manager') }}'
            };
        </script>

        <!-- Scripts -->
        @routes('server-manager')
        <script type="module" src="{{ route('server-manager.assets', 'js/server-manager.js') }}"></script>
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>