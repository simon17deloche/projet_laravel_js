<x-guest-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @foreach($articles as $article)

                        <h1 class="text-2xl"> Titre de l'Article : {{ $article->title }}</h1>
                        <hr><br>
                        <p class="text-gray-100; mb-4">{{ (Str::limit($article->content, 500)) }}</p>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
