<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <div>
        <nav>
            <ul>
                <li><a href="{{ route('main.index') }}">Main</a></li>
                <li><a href="{{ route('contact.index') }}">Contacts</a></li>
                <li><a href="{{ route('comment.index') }}">Comments</a></li>
                <li><a href="{{ route('about.index') }}">About</a></li>
            </ul>
        </nav>
    </div>
    <div>
        @yield('content')
    </div>
</body>
</html>