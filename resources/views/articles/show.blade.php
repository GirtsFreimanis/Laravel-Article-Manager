@include('articles.partials.head')
@include('articles.partials.navbar')

<div class="container p-3 mt-5">
    <h1 class="w-75 container">
        {{$article->title}}
    </h1>
    <p class="pb-5 container w-75">published: {{ $article->created_at}}
        @if(!is_null($article->updated_at))
            | updated: {{$article->updated_at}}
        @endif

    </p>
    <img class="mb-5 mx-auto d-block" src="{{$article->picture}}" alt="{{$article->title}}">
    <p class="w-75 h4 container">
        {{$article->description}}
    </p>

</div>

@include('articles.partials.footer')
