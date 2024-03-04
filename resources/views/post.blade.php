<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Post') }}
        </h2>
    </x-slot>





    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <h1 class="text-6xl text-white font-bold mb-4">Create a Post</h1>
                <form action="" method="POST">
                    @csrf
                    <!-- Title Input -->
                    <div class="mb-4">
                        <label for="title" class="block text-gray-700 font-bold mb-2">Title:</label>
                        <input type="text" id="title" name="title"
                            class="w-full bg-white border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500">
                    </div>

                    <!-- Post Body Input -->
                    <div class="mb-4">
                        <label for="body" class="block text-gray-700 font-bold mb-2">Post Body:</label>
                        <textarea id="body" name="body" rows="4"
                            class="w-full bg-white border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500"></textarea>
                    </div>

                    <!-- Post Button -->
                    <div>
                        <button type="submit"
                            class="bg-blue-500 border border-white hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            value="Post">Post</button>
                    </div>
                </form>
                @if (session()->has('status'))
                    <div class=" mt-5 shadow bg-fuchsia-700 text-white py2 px-4">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
        </div>
    </div>


</x-app-layout>
