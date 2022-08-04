<x-guest-layout>
    <div class="py-14 bg-white">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-1">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-6xl text-center mb-14">{{ $article->title }}</h1>
                    <h2 class="text-4xl rounded-lg group block ml-6">Auteur de cet article
                        : {{ $article->user->name }}</h2>
                    <p class="text-red-600  mb-8 ml-6">Date de sortie de l'article
                        : {{ $article->created_at->diffForHumans() }}</p>
                    <p class="bg-gray-100 rounded-lg group block rounded-lg p-6 text-gray-800 mb-4 text-xl ring-slate-900/5">{{ $article->content }}</p>
                    <a href="#commentaire"><strong>Ajouter un commentaire</strong></a>
                </div>
            </div>
            <h1 class="text-6xl text-center mt-8" style="width: 100%">Espace commentaire</h1>
            @foreach($article->comments as $comment)
                <div class="mt-8">
                    @if($comment->user_id == null)
                        <h2 class="p-6 bg-white border-b border-gray-200 text-4xl">{{ $comment->pseudo}}</h2>
                    @else
                        <h2 class="p-6 bg-white border-b border-gray-200 text-4xl">{{ $comment->user->name}}</h2>
                    @endif


                    <h2 class="text-red-600 ml-6">Écrit {{ $comment->created_at->diffForHumans() }}</h2>
                    <h2 class="bg-gray-100 mb-8 group block rounded-lg p-6 text-gray-800 mb-4 text-xl">{{ $comment->content }}</h2>
                </div>
            @endforeach
            <h1 id="commentaire" class="text-6xl text-center">Poster un commentaire</h1>
            <div class="place-content-center content-center">
                <form action="{{ route('comment.store') }}" method="post" class="bg-gray-200 mt-12 rounded-lg"
                      style="margin-left: 25%; margin-right: 25%">
                    @csrf
                    <div class="ml-16 mr-16">
                        <input type="hidden" name="article_id" value="{{ $article->id }}">
                        @guest()
                            <br>
                            <label for="name" class="mt-8"><strong>Votre pseudo</strong></label>
                            <br>
                            <input class="rounded-lg mb-4 @error('name') is-invalid @enderror" style="width: 100%;"
                                   type="text" name="pseudo" id="name"
                                   placeholder="Simon" required>
                            <br>
                            <label for="email" class="mt-8"><strong>Votre e-mail</strong></label>
                            <br>
                            <input class="rounded-lg mb-4" style="width: 100%;" type="email" name="email" id="email"
                                   placeholder="test@gmail.com" required>
                        @endguest
                        <br>
                        <label for="text" class="mt-8"><strong>Votre commentaire</strong></label> <br>
                        <textarea id="comment" cols="" style="width: 100%" rows="5" name="content"
                                  class="rounded-lg" required>{{ old('content') }}</textarea>
                        <br>
                        <input type="submit" class="text-2xl text-white mb-8 mt-8 rounded-lg bg-green-500"
                               style="width: 100%" value="Envoyer">
                    </div>
                </form>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-guest-layout>
