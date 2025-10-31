<!doctype html>
<html lang="en" ata-theme="business">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ isset($title) ? $title : 'Home - Taskify' }}</title>
    @vite('resources/css/app.css')
</head>

<body>
    <nav class="navbar bg-base-200">
        <div class="navbar-start">
            <a href="/" class="btn btn-ghost text-xl font-bold">Taskify</a>
        </div>
        <div class="navbar-end gap-2">
            <a href={{ route('task.create') }} class="btn btn-primary btn-sm">Ajouter</a>

        </div>
    </nav>
    <main class="flex-1 container mx-auto px-4 py-8">
        {{ $slot }}
    </main>

    </footer>
</body>

</html>
