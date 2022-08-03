<x-guest-layout>
    <div class="py-12 bg-white">
        <div class="bg-gray-100 justify-center text-2xl"
             style=" display: flex; justify-content: space-between;  padding-bottom: 20px; padding-top: 20px; position: sticky; top: 0">
            <div style="margin-left: 20%"><a href="/">Articles</a>
            </div>
            <div>
                <a href="/login">Se connecter</a>
            </div>
            <div style="margin-right: 20%;"><a href="/register">S'enregistrer</a></div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200" style="">
                    <h1 class="text-6xl text-center mb-10">Les Articles</h1>
                    @foreach($articles as $article)
                        <a href="{{ route('article.show',$article) }}"
                           class="bg-gray-100 mb-8 rounded-lg group block rounded-lg p-6 bg-white ring-1 ring-slate-900/5
                           shadow-lg space-y-3 hover:bg-gray-200 hover:ring-gray-200" style="background-image:
                           linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,0.1));">
                            <h1 class="text-2xl"> Titre de l'Article : {{ $article->title }}</h1>
                            <hr>
                            <p class=""><strong> Auteur de l'article : {{ $article->user->name }}</strong></p>
                            <p class="text-gray-100; mb-4 text-xl">{{ (Str::limit($article->content, 500)) }}</p>
                            <h3 class="text-left text-blue-600"> Nombre de commentaires sur cet article
                                : {{ $article->comments_count }}</h3>
                            <h3 class="text-right text-red-600">Date de sortie de l'article
                                : {{ $article->created_at->diffForHumans() }}</h3>
                        </a>
                    @endforeach
                </div>
                {{ $articles->links() }}
            </div>
        </div>
    </div>
</x-guest-layout>
