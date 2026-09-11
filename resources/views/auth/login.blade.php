<x-layouts.app title="Entrar | Dallassi">
    <section class="mx-auto max-w-md rounded-2xl border border-slate-800 bg-slate-900 p-6">
        <h1 class="text-2xl font-semibold">Entrar</h1>
        <form action="{{ route('login.store') }}" class="mt-6 space-y-4" method="post">
            @csrf
            <div>
                <label class="mb-1 block text-sm text-slate-300" for="email">E-mail</label>
                <input class="w-full rounded-md border border-slate-700 bg-slate-950 px-3 py-2" id="email" name="email" required type="email" value="{{ old('email') }}">
            </div>
            <div>
                <label class="mb-1 block text-sm text-slate-300" for="password">Senha</label>
                <input class="w-full rounded-md border border-slate-700 bg-slate-950 px-3 py-2" id="password" name="password" required type="password">
            </div>
            <label class="flex items-center gap-2 text-sm text-slate-300">
                <input class="rounded border-slate-600 bg-slate-950" name="remember" type="checkbox" value="1">
                Lembrar de mim
            </label>
            <button class="w-full rounded-md bg-indigo-500 px-4 py-2 font-medium text-white hover:bg-indigo-400" type="submit">Entrar</button>
        </form>
    </section>
</x-layouts.app>
