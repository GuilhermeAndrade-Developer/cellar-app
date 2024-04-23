<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-between items-center mb-6">
                        <div class="text-xl font-semibold">Detalhes do Usuário</div>
                        <x-primary-button>
                            <a href="{{ route('users-edit', $user->id) }}">Editar</a>
                        </x-primary-button>
                    </div>
                    <div class="flex justify-between items-center mb-6">
                        <div>
                            <h2 class="text-2xl font-semibold">{{ $user->name }}</h2>
                            <p class="text-gray-600">{{ $user->email }}</p>
                        </div>
                    </div>
                    <div>
                        <p><strong>ID:</strong> {{ $user->id }}</p>
                        <p><strong>Função:</strong> {{ $user->role }}</p>
                        <p><strong>Última Atividade:</strong> {{ $user->last_activity }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
