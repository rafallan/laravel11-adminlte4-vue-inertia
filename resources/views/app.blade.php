<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
    @inertiaHead
</head>

<body class="layout-fixed sidebar-expand-lg sidebar-mini bg-body-tertiary">
    @inertia
</body>

</html>
