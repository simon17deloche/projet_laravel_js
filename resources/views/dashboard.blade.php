<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class=" mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <div class="table w-full p-2">
                    <table class="w-full border">
                        <thead>
                        <tr class="bg-gray-50 border-b">
                            <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                                <div class="flex items-center justify-center">
                                    ID de l'article
                                </div>
                            </th>
                            <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                                <div class="flex items-center justify-center">
                                    Nom de l'article
                                </div>
                            </th>
                            <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                                <div class="flex items-center justify-center">
                                    Auteur de l'article
                                </div>
                            </th>

                            <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                                <div class="flex items-center justify-center">
                                    Action
                                </div>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="bg-gray-50 text-center">
                            <td class="p-2 border-r">
                        @foreach($articles as $article)
                            <tr class="bg-gray-100 text-center border-b text-sm text-gray-600 pt-6">
                                <td class="p-2 border-r">{{ $article->id }}</td>
                                <td class="p-2 border-r">{{ $article->title }}</td>
                                <td class="p-2 border-r">{{ $article->user->name }}</td>
                                <td>
                                    <a href="#"
                                       class="bg-blue-500 p-2 text-white hover:shadow-lg">Edit</a>
                                    <a href="#"
                                       class="bg-red-500 p-2 text-white hover:shadow-lg">Remove</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
