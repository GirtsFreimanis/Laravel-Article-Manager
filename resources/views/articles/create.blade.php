@include('articles.partials.head')
@include('articles.partials.navbar')


<div class="container border p-2 mt-5 mb-5">
    <form method="POST" action="{{route('articles.store')}}">
        @csrf
        <div class="form-group p-2">
            <label for="title"><span class="text-danger">* </span>Title:</label>
            <input id="title" type="text" name="title" class="form-control" placeholder="Title" maxlength="255"
                   value="{{old('title')}}" spellcheck="false"/>
            @if($errors->has('title'))
                <span class="text-danger">{{$errors->first('title')}}</span>
            @endif
        </div>

        <div class="form-group p-2">
            <label for="short_description"><span class="text-danger">* </span>Short Description for index view:</label>
            <textarea id="short_description" name="short_description" class="form-control" rows="3"
                      placeholder="Short description" maxlength="2000" spellcheck="false"
            >{{old('short_description')}}</textarea>
            @if($errors->has('short_description'))
                <span class="text-danger">{{$errors->first('short_description')}}</span>
            @endif
        </div>

        <div class="form-group p-2">
            <label for="description"><span class="text-danger">* </span>Description:</label>
            <textarea id="description" name="description" class="form-control" rows="10"
                      placeholder="Description" maxlength="2000" spellcheck="false"
            >{{old('description')}}</textarea>
            @if($errors->has('description'))
                <span class="text-danger">{{$errors->first('description')}}</span>
            @endif
        </div>

        <div class="form-group p-2">
            <label for="picture">Picture url:</label>
            <input id="picture" type="text" name="picture" class="form-control"
                   placeholder="leave empty for default image" maxlength="255"
                   value="{{old('picture')}}" spellcheck="false"/>
            @if($errors->has('picture'))
                <span class="text-danger">{{$errors->first('picture')}}</span>
            @endif
        </div>

        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>

    </form>
</div>
@include('articles.partials.footer')


