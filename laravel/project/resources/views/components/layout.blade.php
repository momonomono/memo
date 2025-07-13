<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>{{ $title }}</title>
</head>
<body>
    <div class="w-3/4 mx-auto mt-10">
        <h1 class="text-6xl">{{ $pageTitle }}</h1>
        {{ $slot }}
    </div>
</body>
</html>