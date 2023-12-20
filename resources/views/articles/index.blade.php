@php use Illuminate\Support\Str; @endphp
@include('articles.partials.head')
@include('articles.partials.navbar')

@if(session()->has('success'))
    <div class="alert container alert-success
    alert-dismissible fade show" role="alert">
        {{session()->get('success')}}.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

@endif

<div class="container p-3">
    <div class="row mb-3 ">
        <div class="col">
        </div>
        <div class="col-auto">
        </div>
        <div class="col-auto">
            <a href="/articles/create">
                <button type="button" class="btn btn-success">
                    @include('articles.partials.svgs.addIcon')
                    Add
                </button>
            </a>
        </div>
    </div>

    @foreach($articles as $article)

        <div class="row mb-3 border p-2">

            <div class="col d-flex align-items-center">
                <div>
                    <a href="{{route('articles.show', ['article' => $article])}}">{{ Str::limit($article->title, 60, '...') }}</a>
                    <p class="mb-0">{{$article->created_at}}</p>
                </div>
            </div>
            <div class="col-auto">
                <a href="{{route('articles.edit', ['article' => $article])}}">
                    <button type="button" class="btn btn-primary">
                        @include('articles.partials.svgs.editIcon')
                        Edit
                    </button>
                </a>
            </div>
            <div class="col-auto">
                <form id="delete" method="POST" action="{{route('articles.destroy', ['article' => $article])}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger"
                            onClick="return confirm('Delete This article?')">
                        @include('articles.partials.svgs.trashIcon')
                        Delete
                    </button>
                </form>
            </div>
        </div>
    @endforeach
</div>

@include('articles.partials.footer')
