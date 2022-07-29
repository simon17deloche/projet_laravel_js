<x-guest-layout>
    <div class="py-14 bg-white">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-1">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-6xl text-center mb-14">{{ $article->title }}</h1>
                    <p class="bg-gray-100 mb-8 rounded-lg group block rounded-lg p-6 text-gray-800 mb-4 text-xl">{{ $article->content }}</p>
                </div>
            </div>
            <h1 class="text-4xl">Espace commentaire</h1>
            {{--            @foreach($comments as $comment)--}}
            <div class="mt-8">
                <h2>Nom de l'utilisateur</h2>
                <h2>Le titre de son commentaire</h2>
                <h2>Contennu du commentaire</h2>
            </div>
        </div>
    </div>
</x-guest-layout>
