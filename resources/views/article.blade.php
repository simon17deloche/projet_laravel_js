<x-guest-layout>
    <div class="py-14 bg-white">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-1">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-6xl text-center mb-14">{{ $article->title }}</h1>
                    <h2 class="text-4xl rounded-lg group block">Auteur de cet article : {{ $article->user->name }}</h2>
                    <p class="text-red-600  mb-8">Date de sortie de l'article : {{ $article->created_at->diffForHumans() }}</p>
                    <p class="bg-gray-100 rounded-lg group block rounded-lg p-6 text-gray-800 mb-4 text-xl ring-slate-900/5">{{ $article->content }}</p>
                </div>
            </div>
            <h1 class="text-6xl text-center mt-8">Espace commentaire</h1>
            @foreach($article->comments as $comment)
                <div class="mt-8">
                    <h2 class="p-6 bg-white border-b border-gray-200 text-4xl">{{ $comment->pseudo}}</h2>
                    <h2 class="text-red-600 ml-6">Écrit {{ $comment->created_at->diffForHumans() }}</h2>
                    <h2 class="bg-gray-100 mb-8 group block rounded-lg p-6 text-gray-800 mb-4 text-xl">{{ $comment->content }}</h2>
                </div>
            @endforeach
        </div>
    </div>
</x-guest-layout>
