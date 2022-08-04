<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
<form action="{{ url('dashboard/update/'.$article->id) }}" method="post" class="bg-gray-200 mt-12 rounded-lg"
      style="margin-left: 25%; margin-right: 25%">
    @csrf
    @method('PUT')
    <div class="ml-16 mr-16">
        <input type="hidden" name="article_id" value="{{ $article->id }}">
            <br>
            <label for="title" class="mt-8"><strong>Titre de l'article</strong></label>
            <br>
            <input class="rounded-lg mb-4 hover:bg-green-100" style="width: 100%;" type="text"
                   name="title" id="title" value="{{ $article->title }}"
                   placeholder="Simon" required>
        <br>
        <label for="textcontent" class="mt-8"><strong>Contenu de l'article</strong></label> <br>
        <textarea id="content" cols="" style="width: 100%" rows="15" name="content"
                  class="rounded-lg  hover:bg-green-100" required>{{ $article->content }}</textarea>
        <br>
        <input type="submit" class="text-2xl text-white mb-8 mt-8 rounded-lg bg-green-500  hover:bg-green-400"
               style="width: 100%; height: 50px" value="Mettre à jour">
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
</x-app-layout>
