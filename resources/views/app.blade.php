<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <meta name="title" content="AdminLTE 4 | Sidebar Mini" />
    <title>AdminLTE4 - Painel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @routes
    @inertiaHead
</head>

<body class="layout-fixed sidebar-expand-lg sidebar-mini bg-body-tertiary">
    @inertia

    <script src="{{ asset('/dist/js/adminlte.js') }}" defer></script>
</body>

</html>
