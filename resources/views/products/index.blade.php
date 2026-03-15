<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>
                        <form action="">
                            <input name="search" id="search" type="text" value="{{  request('search') }}">
                            <input type="submit" value="search">
                        </form>
                    </div>
                    <table class="border">
                        <thead>
                            <tr>
                                <th class="px-3 border" >id</th>
                                <th class="px-3 border">name</th>
                                <th class="px-3 border">category id</th>
                                <th class="px-3 border">category</th>
                                <th class="px-3 border">description</th>
                                <th class="px-3 border">price</th>
                                <th class="px-3 border">stock</th>
                                <th class="px-3 border">image</th>
                                <th class="px-3 border">edit</th>
                                <th class="px-3 border">delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td class="px-3 border">{{ $product->id }}</td>
                                    <td class="px-3 border">{{ $product->name }}</td>
                                    <td class="px-3 border">{{  $product->category_id }}</td>
                                    <td class="px-3 border">{{  $product->category->name }}</td>
                                    <td class="px-3 border">{{ $product->description }}</td>
                                    <td class="px-3 border">{{  $product->price }}</td>
                                    <td class="px-3 border">{{  $product->stock }}</td>
                                    <td class="px-3 border">{{  $product->image }}</td>
                                    <td class="px-3 border"><a href="{{  route('products.edit', $product) }}">Edit</a></td>
                                    <td class="px-3 border">
                                        <form action="{{ route('products.destroy', $product) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Are you sure you want remove {{ $product->name }}?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>