<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Dallassi' }}</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="min-h-screen bg-slate-950 text-slate-100 antialiased">
<header class="border-b border-slate-800/80 bg-slate-900/90">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-4 sm:px-6 lg:px-8">
        <a class="text-xl font-semibold tracking-wide" href="{{ route('home') }}">Dallassi</a>
        <nav class="flex items-center gap-4 text-sm text-slate-300">
            @auth
                <a class="hover:text-white" href="{{ route('account.dashboard') }}">Minha conta</a>
                @if(auth()->user()->isAdmin())
                    <a class="hover:text-white" href="{{ route('admin.dashboard') }}">Admin</a>
                @endif
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button class="cursor-pointer hover:text-white" type="submit">Sair</button>
                </form>
            @else
                <a class="hover:text-white" href="{{ route('login') }}">Entrar</a>
                <a class="rounded-md bg-indigo-500 px-3 py-1.5 font-medium text-white hover:bg-indigo-400" href="{{ route('register') }}">Criar conta</a>
            @endauth
        </nav>
    </div>
</header>

<main class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
    @if ($errors->any())
        <div class="mb-6 rounded-lg border border-red-500/40 bg-red-500/10 p-4 text-sm text-red-200">
            <ul class="space-y-1">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('status'))
        <div class="mb-6 rounded-lg border border-emerald-500/40 bg-emerald-500/10 p-4 text-sm text-emerald-200">
            {{ session('status') }}
        </div>
    @endif

    {{ $slot ?? '' }}
    @yield('content')
</main>
</body>
</html>
