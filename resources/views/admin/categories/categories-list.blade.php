<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-between items-center mb-6">
                        <div class="text-xl font-semibold">Lista de Categorias</div>
                        <x-primary-button>
                            <a href="{{ route('category.create') }}">Registrar</a>
                        </x-primary-button>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="table table-striped w-full">
                            <thead>
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium">ID</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium">Nome</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium">Descrição</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium">Categoria Pai
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-center"><a
                                                href="{{ route('category.show', $category->id) }}">{{ $category->id }}</a>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center"><a
                                                href="{{ route('category.show', $category->id) }}">{{ $category->name }}</a>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center">{{ $category->description }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center">
                                            {{ $category->parent ? $category->parent->name : '-' }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center">
                                            <form action="{{ route('category.destroy', $category->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <x-danger-button>
                                                    Deletar
                                                </x-danger-button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
