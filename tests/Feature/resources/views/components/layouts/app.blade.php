<!DOCTYPE html>
<html>
<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>
<div>
    Title: {{ $title ?? 'default title' }}.
</div>
<div>
    Layout: default layout.
</div>
<div>
    <main>
        {{ $slot }}
    </main>
</div>
</body>
</html>
