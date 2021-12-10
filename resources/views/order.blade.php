<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Menu Lists
                </div>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Error!</strong> <br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div>
                <form method="POST" action="category">
                    @csrf
                    <label for="Category"> Choose a Category: </label>
                    <select name="category">
                        <option value="0"> All </option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">
                                {{ $category->category_name }} </option>
                        @endforeach
                    </select>
                    <button type="submit" value="submit"> Search </button>
                </form>
            </div>
            <div class="grid gap-4 grid-cols-3">
                @foreach ($menus as $menu)
                <form method="POST" action="orders">
                    @csrf
                    <div class="d-flex bg-red-100 ">
                        <input type="hidden" name="menuId" value="{{ $menu->id }}">
                        <button type="submit">
                            <div>{{ $menu->menu_name }}</div>
                            <div>price {{ $menu->price }}</div>
                            <div>tax {{ $menu->tax }}</div>
                        </button>
                    </div>
                </form>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>

