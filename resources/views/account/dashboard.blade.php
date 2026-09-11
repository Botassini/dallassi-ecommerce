<x-layouts.app title="Minha conta | Dallassi">
    <section class="rounded-2xl border border-slate-800 bg-slate-900 p-6">
        <h1 class="text-2xl font-semibold">Minha conta</h1>
        <p class="mt-2 text-slate-300">Olá, {{ auth()->user()->first_name ?? auth()->user()->name }}.</p>
    </section>
</x-layouts.app>
