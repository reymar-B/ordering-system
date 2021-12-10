<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    My Cart
                </div>
            </div>
            <div>
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
            </div>
        </div>
        <div>
            @foreach ($orders as $item)
                @foreach ($item->menu as $menus)
                    <div class="flex justify-center">
                        <span class="p-5"> {{ $menus->menu_name }} </span>
                        <span class="p-5"> {{ $menus->pivot->qty }} </span>
                        <span class="p-5"> {{ $menus->price }} </span>
                        <span class="p-5"> {{ $menus->tax }} </span>
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
</x-app-layout>

