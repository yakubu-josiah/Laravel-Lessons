<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- @vite(['resource/css/app.css'])
    @vite(['resource/js/app.js']) --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
    <script type="text/javascript" src="{{ asset('js/app.js') }}" defer></script>

    <title>Laravel App - @yield('title')</title>
</head>
<body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 border-bottom shadow-sm bg-white mb-3">
        <h5 class="my-0 me-auto font-weight-normal "><a href="{{ route('home.index') }}" class="text-decoration-none">BlogVlogger App</a> </h5>
        <nav class="my-2 my-me-0 me-3">
            <a href={{ route('home.index') }} >Home</a>
            <a href={{ route('home.contacts') }} >Contact</a>
            <a href={{ route('post.index') }} >Blog Posts</a>
            <a href={{ route('post.create') }} >Write Your Blog</a>
        </nav>
    </div>
    <div class="container">
        @if (session('status'))
            <div class="alert alert-success h-3">
                {{ session('status')}}
            </div>
        @endif
        @yield('content')
    </div>
    
</body>
</html> 