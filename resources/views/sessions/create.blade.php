<x-layout>
    <section class="py-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
            <x-panel>
                <h1 class="text-center front-cold text-xl">Log in</h1>
                <form method="POST" action="/login" class="mt-10">
                    @csrf
                    <x-form.input name="email" type="email" autocomplete="username"/>
                    <x-form.input name="password" type="password" autocomplete="new-password"/>
                    <x-button>Log in</x-button>
                </form>
            </x-panel>
        </main>
    </section>
</x-layout>