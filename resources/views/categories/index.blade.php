<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('categories.index') }}" method="GET">
                        <input name="search" id="search" type="text" value="{{ request('search') }}">
                        <button type="submit">Buscar</button>
                    </form>
                    <table>
                        <thead>
                            <tr>
                                <th class="border py-1 px-2">id</th>
                                <th class="border py-1 px-2">Name</th>
                                <th class="border py-1 px-2">Description</th>
                                <th class="border py-1 px-2">Editar</th>
                                <th class="border py-1 px-2">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td class="border py-1 px-2">{{ $category->id }}</td>
                                <td class="border py-1 px-2">{{ $category->name }}</td>
                                <td class="bor4der py-1 px-2">{{ $category->description }}</td>
                                <td class="bor4der py-1 px-2"><a href="{{  route('categories.edit', $category) }}">Edit</a></td>
                                <td class="border py-1 px-2">
                                    <form action="{{ route('categories.destroy', $category) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Are you sure you want to remove {{ $category->name }}?')">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $categories->links() }}
                    <br>
                    <a href="{{  route('categories.create') }}" class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded">
                        New Category
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>