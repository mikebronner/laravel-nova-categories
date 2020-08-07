@extends("layouts.app")

@section("content")
    <div class="bg-white shadow overflow-hidden sm:rounded-md">
        <ul>

            @foreach ($categories as $category)
                <li>
                    <a href="#" class="block hover:bg-gray-50 focus:outline-none focus:bg-gray-50 transition duration-150 ease-in-out">
                        <div class="px-4 py-4 sm:px-6">
                            <div class="flex felx-col">
                                <div class="text-sm leading-5 font-medium text-indigo-600 truncate">
                                    {{ $category->name }}
                                </div>
                                <div class="sm:flex">
                                    {{ $category->description }}
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
            @endforeach

        </ul>
    </div>
@endsection
