<nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand p-3" href="{{ route('articles.index') }}">Article Webpage</a>

    <form class="" action="{{ route('search') }}" method="get">
        @csrf
        <div class="align-items-center form-group mx-sm-3 mb-2 d-flex">

            <label for="from_date" class="mx-sm-1 text-light">From:</label>
            <input id="from_date" type="date" class="form-control mx-sm-1" name="from_date" min="2023-12-14"
                   value="2023-12-14">

            <label for="to_date" class="mx-sm-1 text-light">To:</label>
            <input id="to_date" type="date" class="form-control mx-sm-1" name="to_date">

            <input type="text" class="form-control" name="search" placeholder="Search articles">

            <button class="btn mx-sm-1 btn-primary h-100" type="submit">Search</button>
        </div>
    </form>
</nav>
