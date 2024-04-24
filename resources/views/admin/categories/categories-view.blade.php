<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-between items-center mb-6">
                        <div class="text-xl font-semibold">Detalhes da Categoria</div>
                        <x-primary-button>
                            <a href="{{ route('category.edit', $category->id) }}">Editar</a>
                        </x-primary-button>
                    </div>
                    <div class="flex justify-between items-center mb-6">
                        <div>
                            <h2 class="text-2xl font-semibold">{{ $category->name }}</h2>
                            <p class="text-gray-600">{{ $category->description }}</p>
                        </div>
                    </div>
                    <div>
                        <p><strong>ID:</strong> {{ $category->id }}</p>
                        <p><strong>Categoria Pai:</strong> {{ $category->parent ? $category->parent->name : 'Nenhum' }}
                        </p>
                        <p><strong>Criado em:</strong> {{ $category->created_at->format('d/m/Y H:i:s') }}</p>
                        <p><strong>Atualizado em:</strong> {{ $category->updated_at->format('d/m/Y H:i:s') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>