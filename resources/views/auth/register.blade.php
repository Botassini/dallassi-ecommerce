<x-layouts.app title="Criar conta | Dallassi">
    <section class="mx-auto max-w-lg rounded-2xl border border-slate-800 bg-slate-900 p-6">
        <h1 class="text-2xl font-semibold">Criar conta</h1>
        <form action="{{ route('register.store') }}" class="mt-6 grid gap-4 sm:grid-cols-2" method="post">
            @csrf
            <div>
                <label class="mb-1 block text-sm text-slate-300" for="first_name">Nome</label>
                <input class="w-full rounded-md border border-slate-700 bg-slate-950 px-3 py-2" id="first_name" name="first_name" required type="text" value="{{ old('first_name') }}">
            </div>
            <div>
                <label class="mb-1 block text-sm text-slate-300" for="last_name">Sobrenome</label>
                <input class="w-full rounded-md border border-slate-700 bg-slate-950 px-3 py-2" id="last_name" name="last_name" required type="text" value="{{ old('last_name') }}">
            </div>
            <div class="sm:col-span-2">
                <label class="mb-1 block text-sm text-slate-300" for="email">E-mail</label>
                <input class="w-full rounded-md border border-slate-700 bg-slate-950 px-3 py-2" id="email" name="email" required type="email" value="{{ old('email') }}">
            </div>
            <div class="sm:col-span-2">
                <label class="mb-1 block text-sm text-slate-300" for="phone">Telefone</label>
                <input class="w-full rounded-md border border-slate-700 bg-slate-950 px-3 py-2" id="phone" name="phone" type="text" value="{{ old('phone') }}">
            </div>
            <div>
                <label class="mb-1 block text-sm text-slate-300" for="password">Senha</label>
                <input class="w-full rounded-md border border-slate-700 bg-slate-950 px-3 py-2" id="password" name="password" required type="password">
            </div>
            <div>
                <label class="mb-1 block text-sm text-slate-300" for="password_confirmation">Confirmar senha</label>
                <input class="w-full rounded-md border border-slate-700 bg-slate-950 px-3 py-2" id="password_confirmation" name="password_confirmation" required type="password">
            </div>
            <button class="sm:col-span-2 w-full rounded-md bg-indigo-500 px-4 py-2 font-medium text-white hover:bg-indigo-400" type="submit">Criar conta</button>
        </form>
    </section>
</x-layouts.app>
