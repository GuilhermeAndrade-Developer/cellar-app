<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="text-xl font-semibold mb-4">Editar Usuário</div>
                    <form action="{{ route('users.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nome</label>
                            <input type="text" name="name" id="name" value="{{ $user->name }}"
                                class="mt-1 p-2 block w-full shadow-sm focus:ring-blue-500 focus:border-blue-500 border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 rounded-md">
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                            <input type="email" name="email" id="email" value="{{ $user->email }}"
                                class="mt-1 p-2 block w-full shadow-sm focus:ring-blue-500 focus:border-blue-500 border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 rounded-md">
                        </div>
                        <div class="flex justify-end">
                            <a href="{{ route('users-list') }}"
                                class="inline-flex items-center px-4 py-2 bg-gray-300 dark:bg-gray-600 border border-transparent rounded-md font-semibold text-xs text-gray-700 dark:text-gray-200 uppercase tracking-widest hover:bg-gray-400 dark:hover:bg-gray-700 active:bg-gray-400 dark:active:bg-gray-700 focus:outline-none focus:border-gray-700 focus:ring focus:ring-gray-200 dark:focus:ring-gray-600 disabled:opacity-25 transition">Cancelar</a>
                            <button type="submit"
                                class="inline-flex items-center px-4 py-2 ml-3 bg-blue-500 dark:bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-600 dark:hover:bg-blue-700 active:bg-blue-600 dark:active:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200 dark:focus:ring-blue-600 disabled:opacity-25 transition">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>